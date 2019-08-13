(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.ssMetadata = [];


// symbols:
// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.circle_ye = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F8E57B").s().p("AhJBKQgegfgBgrQABgrAegeQAegeArgBQArABAfAeQAfAegBArQABArgfAfQgfAfgrgBQgrABgegfg");
	this.shape.setTransform(10.5,10.5);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.circle_ye, new cjs.Rectangle(0,0,20.9,20.9), null);


(lib.circle_gl = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#9CF985").s().p("AhJBKQgegfgBgrQABgrAegeQAegeArgBQArABAfAeQAfAegBArQABArgfAfQgfAfgrgBQgrABgegfg");
	this.shape.setTransform(10.5,10.5);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.circle_gl, new cjs.Rectangle(0,0,20.9,20.9), null);


(lib.circle_blue = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#73CDBB").s().p("AhJBKQgegfgBgrQABgrAegeQAegeArgBQArABAfAeQAfAegBArQABArgfAfQgfAfgrgBQgrABgegfg");
	this.shape.setTransform(10.5,10.5);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.circle_blue, new cjs.Rectangle(0,0,20.9,20.9), null);


(lib.circle = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// レイヤー_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F8A664").s().p("AhJBKQgegfgBgrQABgrAegeQAegeArgBQArABAfAeQAfAegBArQABArgfAfQgfAfgrgBQgrABgegfg");
	this.shape.setTransform(10.5,10.5);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.circle, new cjs.Rectangle(0,0,20.9,20.9), null);


(lib.cir_ye_01 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{st:19});

	// timeline functions:
	this.frame_58 = function() {
		this.gotoAndPlay("st");
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(58).call(this.frame_58).wait(1));

	// レイヤー_1
	this.instance = new lib.circle_ye();
	this.instance.parent = this;
	this.instance.setTransform(10.6,10.6,0.665,0.665,0,0,0,10.5,10.5);
	this.instance.alpha = 0;

	this.timeline.addTween(cjs.Tween.get(this.instance).to({scaleX:1,scaleY:1,x:10.5,y:10.5,alpha:0.5},19).to({regX:10,regY:10,scaleX:8.4,scaleY:8.4,x:6,y:6,alpha:0},19).to({regX:10.5,regY:10.5,scaleX:1,scaleY:1,x:10.5,y:10.5,alpha:0.5},20).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(3.6,3.6,13.9,13.9);


(lib.cir_orange_01 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{"st":19});

	// timeline functions:
	this.frame_66 = function() {
		this.gotoAndPlay("st");
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(66).call(this.frame_66).wait(1));

	// レイヤー_1
	this.instance = new lib.circle();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.321,0.321,0,0,0,10.5,10.5);
	this.instance.alpha = 0;

	this.timeline.addTween(cjs.Tween.get(this.instance).to({scaleX:1,scaleY:1,alpha:0.5},19).to({regX:10.1,regY:10.1,scaleX:5.17,scaleY:5.17,x:-1.7,y:-1.7,alpha:0},23).to({regX:10.5,regY:10.5,scaleX:1,scaleY:1,x:0,y:0,alpha:0.5},24).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-3.3,-3.3,6.7,6.7);


(lib.cir_gl_01 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{"st":19});

	// timeline functions:
	this.frame_78 = function() {
		this.gotoAndPlay("st");
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(78).call(this.frame_78).wait(1));

	// レイヤー_1
	this.instance = new lib.circle_gl();
	this.instance.parent = this;
	this.instance.setTransform(10.6,10.6,0.665,0.665,0,0,0,10.5,10.5);
	this.instance.alpha = 0;

	this.timeline.addTween(cjs.Tween.get(this.instance).to({scaleX:1,scaleY:1,x:10.5,y:10.5,alpha:0.5},19).to({regX:9.8,regY:9.8,scaleX:10.01,scaleY:10.01,x:3.1,y:3.1,alpha:0},29).to({regX:10.5,regY:10.5,scaleX:1,scaleY:1,x:10.5,y:10.5,alpha:0.5},30).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(3.6,3.6,13.9,13.9);


(lib.cir_blue_01 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{"st":19});

	// timeline functions:
	this.frame_98 = function() {
		this.gotoAndPlay("st");
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(98).call(this.frame_98).wait(1));

	// レイヤー_1
	this.instance = new lib.circle_blue();
	this.instance.parent = this;
	this.instance.setTransform(0.1,0.2,0.569,0.569,0,0,0,10.5,10.5);
	this.instance.alpha = 0;

	this.timeline.addTween(cjs.Tween.get(this.instance).to({scaleX:1,scaleY:1,x:0,alpha:0.5},19).to({regX:10.3,scaleX:6.15,scaleY:6.15,x:-0.2,y:0.6,alpha:0},39).to({regX:10.5,scaleX:1,scaleY:1,x:0,y:0.2,alpha:0.5},40).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-5.9,-5.8,11.9,11.9);


// stage content:
(lib.dot = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_23 = function() {
		this.stop();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(23).call(this.frame_23).wait(25));

	// レイヤー_4
	this.instance = new lib.cir_gl_01();
	this.instance.parent = this;
	this.instance.setTransform(313.4,728.9,0.451,0.451,0,0,0,0.4,0.4);

	this.instance_1 = new lib.cir_gl_01();
	this.instance_1.parent = this;
	this.instance_1.setTransform(357.4,360.9,0.451,0.451,0,0,0,0.4,0.4);

	this.instance_2 = new lib.cir_ye_01();
	this.instance_2.parent = this;
	this.instance_2.setTransform(828,1107.1,0.825,0.825);

	this.instance_3 = new lib.cir_ye_01();
	this.instance_3.parent = this;
	this.instance_3.setTransform(334.5,633.1,0.825,0.825);

	this.instance_4 = new lib.cir_blue_01();
	this.instance_4.parent = this;
	this.instance_4.setTransform(845.3,555.3,0.619,0.619,0,0,0,0.1,0.1);

	this.instance_5 = new lib.cir_blue_01();
	this.instance_5.parent = this;
	this.instance_5.setTransform(205.5,782.2,1.007,1.007,0,0,0,0.1,0.2);

	this.instance_6 = new lib.cir_orange_01();
	this.instance_6.parent = this;
	this.instance_6.setTransform(913.3,922.4,0.825,0.825,0,0,0,10.8,10.8);

	this.instance_7 = new lib.cir_orange_01();
	this.instance_7.parent = this;
	this.instance_7.setTransform(332.4,1051.2,2.418,2.418,0,0,0,10.7,10.7);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance_7},{t:this.instance_6},{t:this.instance_5},{t:this.instance_4},{t:this.instance_3},{t:this.instance_2},{t:this.instance_1},{t:this.instance}]},9).wait(39));

	// レイヤー_3
	this.instance_8 = new lib.cir_gl_01();
	this.instance_8.parent = this;
	this.instance_8.setTransform(746.9,468.9,0.887,0.887,0,0,0,0.3,0.3);

	this.instance_9 = new lib.cir_gl_01();
	this.instance_9.parent = this;
	this.instance_9.setTransform(932.7,865.7,0.517,0.517,0,0,0,0.1,0.1);

	this.instance_10 = new lib.cir_ye_01();
	this.instance_10.parent = this;
	this.instance_10.setTransform(584,695.3,0.825,0.825);

	this.instance_11 = new lib.cir_ye_01();
	this.instance_11.parent = this;
	this.instance_11.setTransform(334.5,200,0.825,0.825);

	this.instance_12 = new lib.cir_blue_01();
	this.instance_12.parent = this;
	this.instance_12.setTransform(988,343.1,0.378,0.378);

	this.instance_13 = new lib.cir_blue_01();
	this.instance_13.parent = this;
	this.instance_13.setTransform(313.2,422.5,0.378,0.378);

	this.instance_14 = new lib.cir_orange_01();
	this.instance_14.parent = this;
	this.instance_14.setTransform(456.6,525.3,0.721,0.721,0,0,0,10.6,10.7);

	this.instance_15 = new lib.cir_orange_01();
	this.instance_15.parent = this;
	this.instance_15.setTransform(576.6,888.3,0.721,0.721,0,0,0,10.6,10.7);

	this.instance_16 = new lib.cir_orange_01();
	this.instance_16.parent = this;
	this.instance_16.setTransform(888.5,429.3,1.1,1.1,0,0,0,10.6,10.7);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance_16},{t:this.instance_15},{t:this.instance_14},{t:this.instance_13},{t:this.instance_12},{t:this.instance_11},{t:this.instance_10},{t:this.instance_9},{t:this.instance_8}]},4).wait(44));

	// レイヤー_2
	this.instance_17 = new lib.cir_gl_01();
	this.instance_17.parent = this;
	this.instance_17.setTransform(490.1,946.2,0.517,0.517,0,0,0,0.1,0.1);

	this.instance_18 = new lib.cir_gl_01();
	this.instance_18.parent = this;
	this.instance_18.setTransform(1075.6,550.5,0.825,0.825);

	this.instance_19 = new lib.cir_ye_01();
	this.instance_19.parent = this;
	this.instance_19.setTransform(788.4,366.3,0.825,0.825);

	this.instance_20 = new lib.cir_ye_01();
	this.instance_20.parent = this;
	this.instance_20.setTransform(404.8,787.5,0.825,0.825);

	this.instance_21 = new lib.cir_blue_01();
	this.instance_21.parent = this;
	this.instance_21.setTransform(833,695.3,2.461,2.461,0,0,0,0.1,0);

	this.instance_22 = new lib.cir_blue_01();
	this.instance_22.parent = this;
	this.instance_22.setTransform(117.9,494.1,1.026,1.026);

	this.instance_23 = new lib.cir_orange_01();
	this.instance_23.parent = this;
	this.instance_23.setTransform(984.5,633.3,1.1,1.1,0,0,0,10.6,10.7);

	this.instance_24 = new lib.cir_orange_01();
	this.instance_24.parent = this;
	this.instance_24.setTransform(499.1,366.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_24},{t:this.instance_23},{t:this.instance_22},{t:this.instance_21},{t:this.instance_20},{t:this.instance_19},{t:this.instance_18},{t:this.instance_17}]}).wait(48));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(711.8,963,978.2,592.2);
// library properties:
lib.properties = {
	id: '18B995E7F7805C408C2E19B9F82F7899',
	width: 1200,
	height: 1200,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [],
	preloads: []
};



// bootstrap callback support:

(lib.Stage = function(canvas) {
	createjs.Stage.call(this, canvas);
}).prototype = p = new createjs.Stage();

p.setAutoPlay = function(autoPlay) {
	this.tickEnabled = autoPlay;
}
p.play = function() { this.tickEnabled = true; this.getChildAt(0).gotoAndPlay(this.getTimelinePosition()) }
p.stop = function(ms) { if(ms) this.seek(ms); this.tickEnabled = false; }
p.seek = function(ms) { this.tickEnabled = true; this.getChildAt(0).gotoAndStop(lib.properties.fps * ms / 1000); }
p.getDuration = function() { return this.getChildAt(0).totalFrames / lib.properties.fps * 1000; }

p.getTimelinePosition = function() { return this.getChildAt(0).currentFrame / lib.properties.fps * 1000; }

an.bootcompsLoaded = an.bootcompsLoaded || [];
if(!an.bootstrapListeners) {
	an.bootstrapListeners=[];
}

an.bootstrapCallback=function(fnCallback) {
	an.bootstrapListeners.push(fnCallback);
	if(an.bootcompsLoaded.length > 0) {
		for(var i=0; i<an.bootcompsLoaded.length; ++i) {
			fnCallback(an.bootcompsLoaded[i]);
		}
	}
};

an.compositions = an.compositions || {};
an.compositions['18B995E7F7805C408C2E19B9F82F7899'] = {
	getStage: function() { return exportRoot.getStage(); },
	getLibrary: function() { return lib; },
	getSpriteSheet: function() { return ss; },
	getImages: function() { return img; }
};

an.compositionLoaded = function(id) {
	an.bootcompsLoaded.push(id);
	for(var j=0; j<an.bootstrapListeners.length; j++) {
		an.bootstrapListeners[j](id);
	}
}

an.getComposition = function(id) {
	return an.compositions[id];
}



})(createjs = createjs||{}, AdobeAn = AdobeAn||{});
var createjs, AdobeAn;