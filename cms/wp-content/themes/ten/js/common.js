$(function() {

  init();
  //fakeLoader
  $("#fakeLoader").fakeLoader({
     timeToHide:1200, //Time in milliseconds for fakeLoader disappear
     zIndex:9999, // Default zIndex
     spinner:"spinner1",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
     bgColor:"#efeeed", //Hex, RGB or RGBA colors
     //imagePath:"yourPath/customizedImage.gif" //If you want can you insert your custom image
   });


  //スライダー

  if(($('.slider').length)){
    $('.slider').slick({
      autoplay: true,
      pauseOnFocus: false,
      fade: true,
      arrows: false,
      autoplaySpeed: 4000,
      speed: 800
    });
    }


  //画像サイズ切り替え
  var width = $(window).width();
  if (width < 640) {
    $(".switch").each(function() {
      $(this).attr("src", $(this).attr("src").replace("_pc", "_sp"));
    })
  }
});

//smoothscroll

$('a[href^="#"]').click(function() {
  var speed = 500;
  var href = $(this).attr("href");
  var target = $(href == "#" || href == "" ? 'html' : href);
  var position = target.offset().top;
  $("html, body").animate({
    scrollTop: position
  }, speed, "swing");
  return false;
});

//modal

// trigerクリック
$(document).on('click', '#triger', function() {
  // スクロール禁止
  $('html, body').css('overflow', 'hidden');
  // モーダルをフェードイン
  $('.modal-overlay').fadeIn(300);
});


// オーバーレイをクリック
$('.modal-overlay').on('click', function(event) {
  console.log("over-lay")
  // モーダルの領域外をクリックで閉じる
  if (!$(event.target).closest('.modal-content-inner').length) {
    closeModal();
  }
});

// 閉じるボタンクリックでモーダルを閉じる
$('.modal-close,.modal-close-bottom').on('click', function() {
  closeModal();
});

// モーダルを閉じる処理
var closeModal = function() {
  $('body').removeAttr('style');

  // モーダルをフェードアウト
  $('.modal-overlay').animate({
    opacity: 0
  }, 300, function() {
    // モーダルを一番上にスクロールしておく
    $('.modal-overlay').scrollTop(0).hide().removeAttr('style');
    $('.animate,.animate1,.animate2,.animate3,.animate4').removeAttr('style');
  });
};

//scroll reveal
window.sr = ScrollReveal();
  sr.reveal('.animate', { easing: 'ease-out', duration: 1000, distance: '100px', opacity: 0, scale: 1 });
  sr.reveal('.animate1', { easing: 'ease-out', duration: 1000, distance: '100px', opacity: 0, scale: 1,delay:100 });
  sr.reveal('.animate2', { easing: 'ease-out', duration: 1000, distance: '100px', opacity: 0, scale: 1,delay:200 });
  sr.reveal('.animate3', { easing: 'ease-out', duration: 1000, distance: '100px', opacity: 0, scale: 1,delay:300});
  sr.reveal('.animate4', { easing: 'ease-out', duration: 1000, distance: '100px', opacity: 0, scale: 1,delay:400 });

//Google map
function initialize() {
  var latlng = new google.maps.LatLng(35.767201, 139.609318); /*表示したい場所の経度、緯度*/
  var myOptions = {
    zoom: 17,
    /*拡大比率*/
    center: latlng,
    /*表示枠内の中心点*/
    mapTypeControlOptions: {
      mapTypeIds: ['noText', google.maps.MapTypeId.ROADMAP]
    } /*表示タイプの指定*/
  };
  var map = new google.maps.Map(document.getElementById('map_custmomize'), myOptions); /*マップのID取得*/

  /*スタイルのカスタマイズ*/
  var styleOptions = [{
      "featureType": "administrative",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#6195a0"
      }]
    },
    {
      "featureType": "administrative.province",
      "elementType": "geometry.stroke",
      "stylers": [{
        "visibility": "off"
      }]
    },
    {
      "featureType": "landscape",
      "elementType": "geometry",
      "stylers": [{
          "lightness": "0"
        },
        {
          "saturation": "0"
        },
        {
          "color": "#f5f5f2"
        },
        {
          "gamma": "1"
        }
      ]
    },
    {
      "featureType": "landscape.man_made",
      "elementType": "all",
      "stylers": [{
          "lightness": "-3"
        },
        {
          "gamma": "1.00"
        }
      ]
    },
    {
      "featureType": "landscape.natural.terrain",
      "elementType": "all",
      "stylers": [{
        "visibility": "off"
      }]
    },
    {
      "featureType": "poi",
      "elementType": "all",
      "stylers": [{
        "visibility": "off"
      }]
    },
    {
      "featureType": "poi.park",
      "elementType": "geometry.fill",
      "stylers": [{
          "color": "#bae5ce"
        },
        {
          "visibility": "on"
        }
      ]
    },
    {
      "featureType": "road",
      "elementType": "all",
      "stylers": [{
          "saturation": -100
        },
        {
          "lightness": 45
        },
        {
          "visibility": "simplified"
        }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "all",
      "stylers": [{
        "visibility": "simplified"
      }]
    },
    {
      "featureType": "road.highway",
      "elementType": "geometry.fill",
      "stylers": [{
          "color": "#ffffff"
        },
        {
          "visibility": "simplified"
        }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "labels.text",
      "stylers": [{
        "color": "#4e4e4e"
      }]
    },
    {
      "featureType": "road.arterial",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#787878"
      }]
    },
    {
      "featureType": "road.arterial",
      "elementType": "labels.icon",
      "stylers": [{
        "visibility": "off"
      }]
    },
    {
      "featureType": "transit",
      "elementType": "all",
      "stylers": [{
        "visibility": "off"
      }]
    },
    {
      "featureType": "transit.station.airport",
      "elementType": "labels.icon",
      "stylers": [{
          "hue": "#0a00ff"
        },
        {
          "saturation": "-77"
        },
        {
          "gamma": "0.57"
        },
        {
          "lightness": "0"
        }
      ]
    },
    {
      "featureType": "transit.station.rail",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#43321e"
      }]
    },
    {
      "featureType": "transit.station.rail",
      "elementType": "labels.icon",
      "stylers": [{
          "hue": "#ff6c00"
        },
        {
          "lightness": "4"
        },
        {
          "gamma": "0.75"
        },
        {
          "saturation": "-68"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "all",
      "stylers": [{
          "color": "#eaf6f8"
        },
        {
          "visibility": "on"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#c7eced"
      }]
    },
    {
      "featureType": "water",
      "elementType": "labels.text.fill",
      "stylers": [{
          "lightness": "-49"
        },
        {
          "saturation": "-53"
        },
        {
          "gamma": "0.79"
        }
      ]
    }
  ]
  var styledMapOptions = {
    name: 'ouchi-salon てん、'
  }
  var gMapType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
  map.mapTypes.set('gMap', gMapType);
  map.setMapTypeId('gMap');

  /*WEB企画アイコンの取得*/
  var icon = {
    url: '/img/place.png',
    scaledSize: new google.maps.Size(28, 40)
  }

  /*マーカーの設置*/
  var markerOptions = {
    position: latlng,
    /*表示場所と同じ位置に設置*/
    map: map,
    icon: icon,
    title: 'ouchi-salon てん、' /*マーカーのtitle*/
  };
  var marker = new google.maps.Marker(markerOptions);

}

//dot

var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
  if(!($('#animation_container').length)){
        return false;
    }
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	var comp=AdobeAn.getComposition("18B995E7F7805C408C2E19B9F82F7899");
	var lib=comp.getLibrary();
	handleComplete({},comp);
}
function handleComplete(evt,comp) {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	var lib=comp.getLibrary();
	var ss=comp.getSpriteSheet();
	exportRoot = new lib.dot();
	stage = new lib.Stage(canvas);
	//Registers the "tick" event listener.
	fnStartAnimation = function() {
		stage.addChild(exportRoot);
		createjs.Ticker.setFPS(lib.properties.fps);
		createjs.Ticker.addEventListener("tick", stage);
	}
	//Code to support hidpi screens and responsive scaling.
	function makeResponsive(isResp, respDim, isScale, scaleType) {
		var lastW, lastH, lastS=1;
		window.addEventListener('resize', resizeCanvas);
		resizeCanvas();
		function resizeCanvas() {
			var w = lib.properties.width, h = lib.properties.height;
			var iw = window.innerWidth, ih=window.innerHeight;
			var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;
			if(isResp) {
				if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {
					sRatio = lastS;
				}
				else if(!isScale) {
					if(iw<w || ih<h)
						sRatio = Math.min(xRatio, yRatio);
				}
				else if(scaleType==1) {
					sRatio = Math.min(xRatio, yRatio);
				}
				else if(scaleType==2) {
					sRatio = Math.max(xRatio, yRatio);
				}
			}
			canvas.width = w*pRatio*sRatio;
			canvas.height = h*pRatio*sRatio;
			canvas.style.width = dom_overlay_container.style.width = anim_container.style.width =  w*sRatio+'px';
			canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = h*sRatio+'px';
			stage.scaleX = pRatio*sRatio;
			stage.scaleY = pRatio*sRatio;
			lastW = iw; lastH = ih; lastS = sRatio;
			stage.tickOnUpdate = false;
			stage.update();
			stage.tickOnUpdate = true;
		}
	}
	makeResponsive(true,'width',false,1);
	AdobeAn.compositionLoaded(lib.properties.id);
	fnStartAnimation();
}

//smoothscroll
var scroll = new SmoothScroll('a[href*="#"]');
