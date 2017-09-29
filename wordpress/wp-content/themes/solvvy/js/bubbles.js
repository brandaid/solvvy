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
	this.bkimg = (opts.bkimg)? '<img src="'+ opts.bkimg+'">' : '' ;
	this.percent = opts.percent;
	this.interest = opts.inerest;
	this.linkedin = opts.linkedin;
	this.twitter = opts.twitter;
	this.title = opts.title;
	this.twitter =(this.twitter)?  '<a href="'+this.twitter+'" target="_blank"><i class="icon-twitter"></i></a>' : '';
	this.linkedin = (this.linkedin)? '<a href="'+this.linkedin+'" target="_blank"><i class="icon-linkedin"></i></a>' : '';
	this.interest = (this.interest)? '<span class="position">'+this.interest+'</span>' : '';
	this.bubbleType = (opts.inerest) ? 'people' : 'metric';
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
		self._DOM.html('<div class="'+self.bubbleType+'"><div style="background: '+
			self.bkbubb+
			';"><div><div>'+
			'<span class="percent">'+
			self.percent+
			'</span>'+
			self.interest+
			'<span class="description">'+
			self.title+
			'</span>'+
			'<span>'+
			self.twitter+
			self.linkedin+
			'</span>'+
			self.bkimg+'</div></div></div></div>');


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
	this.min_distance = 20;
	this.connectorsAll = [];
	this._container = $(opts.container);
	this.bubbles = opts.elements || [];
	this._width = this._container.width();
	this._height = this._container.height();
	this.segments = {};
	this.segment_size = sizes[0]+(this.min_distance/2);

	this.calculateSceneHeight = function(){
		let cols = Math.floor(this._width / this.segment_size);
		let rows = Math.ceil(this.bubbles.length / cols);
		return this.segment_size * rows + 150;
	}

	this.update = function(){
		this._width = this._container.width();
		this._height = this.calculateSceneHeight();
		this._container.css('height',this._height+'px');
		this.draw();
	}

	this.calculateBackground = function(){
		var colors = ['#9753A9', '#725AB0', '#D5CEFA', '#FF3378', '#5F108F', '#F92D6D', '#FF639F'];
		var counter = 0;

		self.bubbles.forEach(function(item){
			if(item.bubbleType == 'metric'){
				if(counter == 0 || counter == 2 || counter == 8){
					item.bkbubb = colors[0];
				}else if(counter == 6){
					item.bkbubb = colors[1];
				}else if(counter == 4){
					item.bkbubb = colors[2];
				}else if(counter == 5){
					item.bkbubb = colors[6];
				}else if(counter == 7){
					item.bkbubb = colors[3];
				}else{
					item.bkbubb = colors[4];
				}
			}else{
				item.bkbubb = colors[Math.round(Math.random()*3)];
			}

			//item.bkbubb = colors[Math.round(Math.random()*3)];
			counter++;
		});
	};

	this.calculateSizes = function(){
		var counter = 0;
		self.bubbles.forEach(function(item){
			if(item.bubbleType != 'people'){
				if(counter == 0 || counter == 2 || counter == 3 || counter == 5 || counter == 7 || counter == 9){
					item.size = sizes[1];
				}else{
					item.size = sizes[0];
				}
			}else{
				if(counter == 1 || counter == 4 || counter == 6 || counter == 9 || counter == 13 || counter == 16 || counter == 18 || counter == 21 || counter == 25|| counter == 28|| counter == 30|| counter == 33){
					item.size = sizes[0];
				}else{
					item.size = sizes[1];
				}
			}
			counter++;
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

		for(var r = 0; r < rows ; r++){
			for(var c = 0; c < cols ; c++){
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
		var counter = 0;
		var elements_count = this.bubbles.length;
		var max_for_row = this._width/(sizes[0]+this.min_distance);

		var max_offset = {
			x : 20,
			y : 20
		};

		this._calculateSegments(self.segment_size,this._width,this._height);

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

				if(bubble.bubbleType == 'metric'){
					if(counter == 0){
						bubble.position.x = 0;
						bubble.position.y = 190;
					}else if(counter == 1){
						bubble.position.x = minPosX + 70;
						bubble.position.y = 20;
					}else if(counter == 2){
						bubble.position.x = minPosX + 105;
						bubble.position.y = 125;
					}else if(counter == 3){
						bubble.position.x = 1063;
						bubble.position.y = 54;
					}else if(counter == 4){
						bubble.position.x = 31;
						bubble.position.y = 484;
					}else if(counter == 5){
						bubble.position.x = 308;
						bubble.position.y = 314;
					}else if(counter == 6){
						bubble.position.x = 669;
						bubble.position.y = 392;
					}else if(counter == 7){
						bubble.position.x = 1035;
						bubble.position.y = 467;
					}else if(counter == 8){
						bubble.position.x = 380;
						bubble.position.y = 608;
					}else if(counter == 9){
						bubble.position.x = 776;
						bubble.position.y = 719;
					}else {
						bubble.position.x = Math.floor(Math.random() * (maxPosX - minPosX + 1)) + minPosX;
						bubble.position.y = Math.floor(Math.random() * (maxPosY - minPosY + 1)) + minPosY;;
					}
				}else{
					if(counter == 0){
						bubble.position.x = 0;
						bubble.position.y = 177;
					}else if(counter == 1){
						bubble.position.x = 357;
						bubble.position.y = 12;
					}else if(counter == 2){
						bubble.position.x = 703;
						bubble.position.y = 0;
					}else if(counter == 3){
						bubble.position.x = 1036;
						bubble.position.y = 80;
					}else if(counter == 4){
						bubble.position.x = 50;
						bubble.position.y = 445;
					}else if(counter == 5){
						bubble.position.x = 406;
						bubble.position.y = 354;
					}else if(counter == 6){
						bubble.position.x = 708;
						bubble.position.y = 291;
					}else if(counter == 7){
						bubble.position.x = 1031;
						bubble.position.y = 481;
					}else if(counter == 8){
						bubble.position.x = 0;
						bubble.position.y = 833;
					}else if(counter == 9){
						bubble.position.x = 405;
						bubble.position.y = 664;
					}else if(counter == 10){
						bubble.position.x = 772;
						bubble.position.y = 680;
					}else if(counter == 11){
						bubble.position.x = 1062;
						bubble.position.y = 789;
					}else if(counter == 12){
						bubble.position.x = 0;
						bubble.position.y = 177 + 960;
					}else if(counter == 13){
						bubble.position.x = 357;
						bubble.position.y = 12 + 960;
					}else if(counter == 14){
						bubble.position.x = 703;
						bubble.position.y = 0 + 960;
					}else if(counter == 15){
						bubble.position.x = 1036;
						bubble.position.y = 80 + 960;
					}else if(counter == 16){
						bubble.position.x = 50;
						bubble.position.y = 445 + 960;
					}else if(counter == 17){
						bubble.position.x = 406;
						bubble.position.y = 354 + 960;
					}else if(counter == 18){
						bubble.position.x = 708;
						bubble.position.y = 291 + 960;
					}else if(counter == 19){
						bubble.position.x = 1031;
						bubble.position.y = 481 + 960;
					}else if(counter == 20){
						bubble.position.x = 0;
						bubble.position.y = 833 + 960;
					}else if(counter == 21){
						bubble.position.x = 405;
						bubble.position.y = 664 + 960;
					}else if(counter == 22){
						bubble.position.x = 772;
						bubble.position.y = 680 + 960;
					}else if(counter == 23){
						bubble.position.x = 1062;
						bubble.position.y = 789 + 960;
					}else if(counter == 24){
						bubble.position.x = 0;
						bubble.position.y = 177 + 960 + 960;
					}else if(counter == 25){
						bubble.position.x = 357;
						bubble.position.y = 12 + 960 + 960;
					}else if(counter == 26){
						bubble.position.x = 703;
						bubble.position.y = 0 + 960 + 960;
					}else if(counter == 27){
						bubble.position.x = 1036;
						bubble.position.y = 80 + 960 + 960;
					}else if(counter == 28){
						bubble.position.x = 190;
						bubble.position.y = 2265;
					}else if(counter == 29){
						bubble.position.x = 686;
						bubble.position.y = 354 + 960 + 960;
					}else if(counter == 30){
						bubble.position.x = 708;
						bubble.position.y = 291 + 960 + 960;
					}else if(counter == 31){
						bubble.position.x = 1031;
						bubble.position.y = 481 + 960 + 960;
					}else if(counter == 32){
						bubble.position.x = 0;
						bubble.position.y = 833 + 960 + 960;
					}else if(counter == 33){
						bubble.position.x = 405;
						bubble.position.y = 664 + 960 + 960;
					}else if(counter == 34){
						bubble.position.x = 772;
						bubble.position.y = 680 + 960 + 960;
					}else if(counter == 35){
						bubble.position.x = 1062;
						bubble.position.y = 789 + 960 + 960;
					}else {
						bubble.position.x = Math.floor(Math.random() * (maxPosX - minPosX + 1)) + minPosX;
						bubble.position.y = Math.floor(Math.random() * (maxPosY - minPosY + 1)) + minPosY;;
					}
				}

			}
			counter++;
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
		var counter = 0;
		this.segments.segments.forEach(function(current_segment){

			var other_counter = 0;
			//current_segment.render(self._container);
			if(current_segment.element === true){
				if(current_segment.bubble.bubbleType == 'metric'){
					
						self.segments.segments.forEach(function(other_segment){
							var create_con = false;
							
							if(counter == 0){
								if(other_counter == 1 || other_counter == 5){
									create_con = true;
								}
							}else if(counter == 1){
								if(other_counter == 2 || other_counter == 5){
									create_con = true;
								}
							}else if(counter == 2){
								if(other_counter == 3 || other_counter == 7 || other_counter == 5){
									create_con = true;
								}
							}else if(counter == 3){
								if(other_counter == 7){
									create_con = true;
								}
							}else if(counter == 4){
								if(other_counter == 0 || other_counter == 5){
									create_con = true;
								}
							}else if(counter == 5){
								if(other_counter == 6 || other_counter == 8){
									create_con = true;
								}
							}else if(counter == 6){
								if(other_counter == 2 || other_counter == 7 || other_counter == 9){
									create_con = true;
								}
							}else if(counter == 7){
								if(other_counter == 9){
									create_con = true;
								}
							}else if(counter == 8){
								if(other_counter == 4 || other_counter == 6 || other_counter == 9){
									create_con = true;
								}
							}else if(counter == 9){
									
							} 

							if(create_con){
								var connector = new Nodeline({
									start : current_segment.bubble.center(),
									end : other_segment.bubble.center(),
									width : 2
								});
								self.connectorsAll.push(connector);
							}
							other_counter ++;
						});
						
				}else{
					if(current_segment.element === true){
						
						self.segments.segments.forEach(function(other_segment){
							var create_con = false;
							
							if(counter == 0){
								if(other_counter == 1 || other_counter == 5){
									create_con = true;
								}
							}else if(counter == 1){
								if(other_counter == 2 || other_counter == 5 || other_counter == 6){
									create_con = true;
								}
							}else if(counter == 2){
								if(other_counter == 3 ){
									create_con = true;
								}
							}else if(counter == 3){
								if(other_counter == 7 || other_counter == 6){
									create_con = true;
								}
							}else if(counter == 4){
								if(other_counter == 0 || other_counter == 5){
									create_con = true;
								}
							}else if(counter == 5){
								if(other_counter == 6 || other_counter == 9){
									create_con = true;
								}
							}else if(counter == 6){
								if(other_counter == 2 || other_counter == 7 || other_counter == 9){
									create_con = true;
								}
							}else if(counter == 7){
								if(other_counter == 10 || other_counter == 11){
									create_con = true;
								}
							}else if(counter == 8){
								if(other_counter == 4 || other_counter == 12 || other_counter == 9){
									create_con = true;
								}
							}else if(counter == 9){
								if(other_counter == 4 || other_counter == 13){
									create_con = true;
								}
							}else if(counter == 10){
								if(other_counter == 9 || other_counter == 6 || other_counter == 11 || other_counter ==14){
									create_con = true;
								}
							}else if(counter == 11){
								if(other_counter == 15){
									create_con = true;
								}
							}else if(counter == 12){
								if(other_counter == 13 || other_counter == 16 || other_counter == 17){
									create_con = true;
								}
							}else if(counter == 13){
								if(other_counter == 14 || other_counter == 17 || other_counter == 18){
									create_con = true;
								}
							}else if(counter == 14){
								if(other_counter == 15 ){
									create_con = true;
								}
							}else if(counter == 15){
								if(other_counter == 19 || other_counter == 18){
									create_con = true;
								}
							}else if(counter == 16){
								if( other_counter == 17){
									create_con = true;
								}
							}else if(counter == 17){
								if(other_counter == 18 || other_counter == 21){
									create_con = true;
								}
							}else if(counter == 18){
								if(other_counter == 14 || other_counter == 19 || other_counter == 21){
									create_con = true;
								}
							}else if(counter == 19){
								if(other_counter == 22 || other_counter == 23){
									create_con = true;
								}
							}else if(counter == 20){
								if(other_counter == 16 || other_counter == 24 || other_counter == 21){
									create_con = true;
								}
							}else if(counter == 21){
								if(other_counter == 16 || other_counter == 25){
									create_con = true;
								}
							}else if(counter == 22){
								if(other_counter == 21 || other_counter == 18 || other_counter == 23 || other_counter == 26){
									create_con = true;
								}
							}else if(counter == 23){
								if(other_counter == 27){
									create_con = true;
								}
							}else if(counter == 24){
								if(other_counter == 25 || other_counter == 28){
									create_con = true;
								}
							}else if(counter == 25){
								if(other_counter == 26 || other_counter == 28 || other_counter == 29){
									create_con = true;
								}
							}else if(counter == 26){
								if(other_counter == 27 || other_counter == 29){
									create_con = true;
								}
							}else if(counter == 27){
								if( other_counter == 29){
									create_con = true;
								}
							}else if(counter == 28){
								if( other_counter == 29){
									create_con = true;
								}
							}else if(counter == 29){
								if(other_counter == 30 || other_counter == 33){
									
								}
							}

							if(create_con){
								var connector = new Nodeline({
									start : current_segment.bubble.center(),
									end : other_segment.bubble.center(),
									width : 2
								});
								self.connectorsAll.push(connector);
							}
							other_counter ++;
						});

					}
				}
			}
			counter ++;
		});

		this.connectorsAll.forEach(function(item){
			item.render(self._container);
		})

		this.bubbles.forEach(function(item){
			item.render(self._container);
		});



	}
}
