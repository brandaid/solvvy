var getDistance = function( point1, point2 ) {

	var
	xs = point2.x - point1.x,
	ys = point2.y - point1.y;

	xs *= xs;
	ys *= ys;

	return Math.sqrt( xs + ys );
};

var Bubble = function(opts){

	var self = this;

	this._DOM = false;
	this.bkbubb = opts.bk;
	this.bkimg = opts.bkimg;
	this.percent = opts.percent;
	this.interest = opts.inerest;
	this.linkedin = opts.linkedin;
	this.twitter = opts.twitter;
	this.title = opts.title;
	this.twitter =(this.twitter)?  '<a href="'+this.twitter+'"><i class="icon-twitter"></i></a>' : '';
	this.linkedin = (this.linkedin)? '<a href="'+this.linkedin+'"><i class="icon-linkedin"></i></a>' : '';
	self.interest = (self.interest)? '<span>'+self.interest+'</span>' : '';
	this.bubbleType = (this.bkimg) ? 'people' : 'metric';
	this.position = {
		x: opts.position.x,
		y: opts.position.y
	};
	this.size = 300;

	this.center = function(){
		return {
			x : this.position.x + this.size/2,
			y : this.position.y + this.size/2
		}
	}

	this.render = function(container){
		if(self._DOM == false){
			var element = $('<div></div>');
			self._DOM = element.appendTo(container);
		}
		self._DOM.addClass('bubbles');
		self._DOM.css('top',self.position.y + "px");
		self._DOM.css('left',self.position.x + "px");
		self._DOM.css('width',self.size + "px");
		self._DOM.css('height',self.size + "px");
		self._DOM.html('<div class="'+self.bubbleType+'" style="background: '+
			self.bkbubb+
			';background-image: url('+
			self.bkimg+
			');background-size: cover;"><div><div><div><span class="percent">'+
			self.percent+
			'</span>'+
			self.interest+
			'<span class="description">'+
			self.title+
			'</span>'+
			'<span>'+
			self.twitter+
			self.linkedin+
			'</span></div></div></div></div>');
	}

}

var Segment = function(opts){
	var self = this;

	this.element = false;
	this.c = opts.c;
	this.r = opts.r;
	this.segment_size = opts.segment_size;
	this.width = this.segment_size.w;
	this.height = this.segment_size.h;
	this.x = this.c * this.segment_size.w;
	this.y = this.r * this.segment_size.h;
	this.top = this.y;
	this.left = this.x;
	this.right = this.x + this.segment_size.w;
	this.bottom = this.y + this.segment_size.h;


	this.render = function(container){
		var element = $('<div style="background:red;position:absolute;opacity:0.5"></div>');
		element.css('top', this.top + 'px');
		element.css('left', this.left + 'px');
		element.css('width', this.width + 'px');
		element.css('height', this.height + 'px');
		element.css('border', '1px solid green');
		container.append(element);
	};

} 

var Nodeline = function(opts){
	var self = this;
	this._DOM = false;
	this.start = opts.start;
	this.end = opts.end;
	this.width = opts.width;
	this.color = '#B6AAF0';


	this.angle = function(){
		return Math.atan2(this.end.y - this.start.y, this.end.x - this.start.x) * 180 / Math.PI;	
	};

	this.render = function(container){
		
		if(self._DOM == false){
			var element = $('<div class="lineconnector" style="background:'+ this.color +';"></div>');
			self._DOM = element.appendTo(container);
		}
		
		var rotation = this.angle();
		self._DOM.css('top', this.start.y + 'px');
		self._DOM.css('left', this.start.x + 'px');
		self._DOM.css('width', (Math.round(getDistance(this.start, this.end))+ 0) + 'px');
		self._DOM.css('height', this.width + 'px');

		self._DOM.css('-ms-transform-origin', '0% 0%');
		self._DOM.css('-webkit-transform-origin', '0% 0%');
		self._DOM.css('transform-origin', '0% 0%');

		self._DOM.css('-ms-transform', 'rotate('+rotation+'deg)');
		self._DOM.css('-webkit-transform', 'rotate('+rotation+'deg)');
		self._DOM.css('transform', 'rotate('+rotation+'deg)');
		
	};

	this.remove = function(){
		self._DOM.remove();
	}
}

var BubbleScene = function(opts){
	var self = this;
	var sizes = [280, 210];
	this.connectorsAll = [];
	this._container = $(opts.container);
	this.bubbles = opts.elements || [];
	this._width = this._container.width();
	this._height = this._container.height();
	this.segments = {};

	this.update = function(){
		this._width = this._container.width();
		this._height = this._container.height();
		this.draw();
	}

	this.calculateBackground = function(){
		var colors = ['#725AB0', '#D5CEFA', '#F6639A', '#5F108F', '#F92D6D'];
		self.bubbles.forEach(function(item){
			item.bkbubb = colors[Math.round(Math.random()*4)];
		});
	};

	this.calculateSizes = function(){
		self.bubbles.forEach(function(item){
			item.size = sizes[Math.round(Math.random()*1)];
		});
	};

	this._calculateSegments = function(size,width,height){
		var result = {};
		var segments = [];

		var rows = Math.floor(height / size);
		var cols = Math.floor(width / size);

		var segment_size = {
			w : Math.floor(width / cols),
			h : Math.floor(height / rows)
		};

		for(var c = 0; c < cols ; c++){
			for(var r = 0; r < rows ; r++){
				var segment = new Segment({ c : c, r : r, segment_size : segment_size });
				segments.push(segment);
			}
		}

		result.segments = segments;
		result.rows = rows;
		result.cols = cols;
		result.segment_size = { w : segment_size.w , h : segment_size.h};
		self.segments = result;
		return this.segments;
	}

	this.calculatePositions = function(){
		var elements_count = this.bubbles.length;
		var counter = 0;
		var min_distance = 20;
		var max_for_row = this._width/(sizes[0]+min_distance);

		var max_offset = {
			x : 20,
			y : 20
		};

		this._calculateSegments(sizes[0]+(min_distance/2),this._width,this._height);

		this.segments.segments.sort(function(a,b){
			var
			aScore = Math.abs(self.segments.rows/2 - a.r),
			bScore = Math.abs(self.segments.rows/2 - b.r);

			aScore = Math.abs(aScore - Math.abs(self.segments.cols/2 - a.c));
			bScore = Math.abs(bScore - Math.abs(self.segments.cols/2 - b.c));

			return aScore - bScore;
		});
		this.bubbles.forEach(function(bubble){
			var useSegment = self.segments.segments.find(function(segment){
				return segment.element === false;
			});
			if(useSegment){
				var maxPosX = useSegment.x + useSegment.width - bubble.size;
				var minPosX = useSegment.x;
				var maxPosY = useSegment.y + useSegment.height - bubble.size;
				var minPosY = useSegment.y;

				useSegment.element = true;
				useSegment.bubble = bubble;
				bubble.position.x = Math.floor(Math.random() * (maxPosX - minPosX + 1)) + minPosX;
				bubble.position.y = Math.floor(Math.random() * (maxPosY - minPosY + 1)) + minPosY;;
			}
		});

	}

	this.draw = function(){
		this.calculateBackground();
		this.calculateSizes();
		this.calculatePositions();
		
		self.connectorsAll.forEach(function(item){
			item.remove();
		});
		self.connectorsAll = [];

		this.segments.segments.forEach(function(current_segment){
			//current_segment.render(self._container);
			if(current_segment.element === true){
				self.segments.segments.forEach(function(other_segment){
					if(other_segment.element == true){
						if(other_segment.c == current_segment.c -1 || other_segment.c == current_segment.c || other_segment.c == current_segment.c +1){
							if(other_segment.r == current_segment.r -1 || other_segment.r == current_segment.r || other_segment.r == current_segment.r +1){								
								var connector = new Nodeline({
									start : current_segment.bubble.center(),
									end : other_segment.bubble.center(),
									width : 2
								});
								var valid = true;
								self.connectorsAll.forEach(function(other_connector){
									if(connector.start.x == other_connector.end.x && connector.start.y == other_connector.end.y){
											valid = false;									
									}
								});
								if(valid){self.connectorsAll.push(connector);};						
							}
						}
					}
					
				});
				
			}
		});

		this.connectorsAll.forEach(function(item){
			item.render(self._container);
		})

		this.bubbles.forEach(function(item){
			item.render(self._container);
		});
		


	}
}
