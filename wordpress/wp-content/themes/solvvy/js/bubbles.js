var getDistance = function( point1, point2 ) {

	var
	xs = point2.x - point2.x,
	ys = point2.y - point1.y;

	xs *= xs;
	ys *= ys;

	return Math.sqrt( xs + ys );
};

var Bubble = function(opts){

	var self = this;
	this.bkbubb = opts.bk;
	this.percent = opts.percent;
	this.title = opts.title;
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
		var element = $('<div></div>');
		element.addClass('bubbles');
		element.css('top',self.position.y + "px");
		element.css('left',self.position.x + "px");
		element.css('width',self.size + "px");
		element.css('height',self.size + "px");
		element.addClass('bubbles');
		element.html('<div style="background: '+self.bkbubb+'"><div><div><div><span class="percent">'+this.percent+'</span><span class="description">'+this.title+'</span></div></div></div> </div>');
		container.append(element);
	}

}

var BubbleScene = function(opts){
	var self = this;
	var sizes = [280, 210];
	this._container = $(opts.container);
	this.bubbles = opts.elements || [];
	this._width = this._container.width();
	this._height = this._container.height();

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
				var
				segment = { c : c , r : r , element : false };
				segment.width = segment_size.w;
				segment.height = segment_size.h;
				segment.x = c * segment_size.w;
				segment.y = r * segment_size.h;
				segment.top = segment.y;
				segment.left = segment.x;
				segment.right = segment.x + segment_size.w;
				segment.bottom = segment.y + segment_size.h;
				segments.push(segment);
			}
		}

		result.segments = segments;
		result.rows = rows;
		result.cols = cols;
		result.segment_size = { w : segment_size.w , h : segment_size.h};

		return result;
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

		var grid = this._calculateSegments(sizes[0]+(min_distance/2),this._width,this._height);
		console.log(grid);
		grid.segments.sort(function(a,b){
			var
			aScore = Math.abs(grid.rows/2 - a.r),
			bScore = Math.abs(grid.rows/2 - b.r);

			aScore = Math.abs(aScore - Math.abs(grid.cols/2 - a.c));
			bScore = Math.abs(bScore - Math.abs(grid.cols/2 - b.c));

			return aScore - bScore;
		});
		this.bubbles.forEach(function(bubble){
			var useSegment = grid.segments.find(function(segment){
				return segment.element === false;
			});
			if(useSegment){
				useSegment.element = true;
				bubble.position.x = Math.round((Math.random()* useSegment.right)+ useSegment.left);
				bubble.position.y = Math.round((Math.random()* useSegment.bottom)+ useSegment.top);
			}
		});

	}

	this.draw = function(){
		this.calculateBackground();
		this.calculateSizes();
		this.calculatePositions();
		this.bubbles.forEach(function(item){
			item.render(self._container);
		});
	}
}
