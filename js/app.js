var istouch = $('#touch-detect').is(':visible');
var stage1Arr = {
    "mode": 'star',
    "particles": {
      "number": {
        "value": 80,
        "density": {
          "enable": false,
          "value_area": 100
        }
      },
      "color": {
        "value": ["#893d33"]
      },
      "shape": {
        "type": "image",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": [base_url+"images/blur3.png"],
          "width": 912,
          "height": 600
        }
      },
      "opacity": {
        "value": .4,
        "random": true,
        "anim": {
          "enable": false,
          "speed": .2,
          "opacity_min": 0.5,
          "sync": false
        }
      },
      "size": {
        "value": 35,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 30,
          "size_min": 40,
          "sync": false
        }
      },
      "line_linked": {
        "enable": false,
        "distance": 150,
        "color": "#ffffff",
        "opacity": 0.4,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 12,
        "direction": "left",
        "random": false,
        "straight": true,
        "out_mode": "out",
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": false,
          "mode": "bubble"
        },
        "onclick": {
          "enable": false,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 400,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 80,
          "size": 150,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 200
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true,
  };


function stage2(){
  var stage2Arr = {
        "mode": 'floating',
        "particles": {
          "number": {
            "value": 9,
            "density": {
              "enable": false,
              "value_area": 100
            }
          },
          "color": {
            "value": ["#893d33", '#a44532', '#a35d33', '#c1914c', '#60684e', '#4e512a', '#638478', '#607d90', '#38455f', '#3d3c5b']
          },
          "shape": {
            "type": "image",
            "stroke": {
              "width": 0,
              "color": "#000000"
            },
            "polygon": {
              "nb_sides": 5
            },
            "image": {
              "src": [base_url+"images/1.png?c", base_url+"images/2.png?d", base_url+"images/3.png?c", base_url+"images/4.png?c", base_url+"images/5.png?c", base_url+"images/6.png?c", base_url+"images/7.png?c", base_url+"images/8.png?c", base_url+"images/9.png?c"],
              "active_src": [base_url+"images/1-active.png?c", base_url+"images/2-active.png?c", base_url+"images/3-active.png?c", base_url+"images/4-active.png?c", base_url+"images/5-active.png?c", base_url+"images/6-active.png?c", base_url+"images/7-active.png?c", base_url+"images/8-active.png?c", base_url+"images/9-active.png?c"],
              "width": 234,
              "height": 234
            }
          },
          "opacity": {
            "value": .8,
            "random": false,
            "anim": {
              "enable": false,
              "speed": .4,
              "opacity_min": 0.5,
              "sync": false
            }
          },
          "size": {
            "value": ((mode == 'l')? 300 : 200),
            "random": true,
            "anim": {
              "enable": true,
              "speed": 20,
              "size_min": 200,
              "sync": false
            }
          },
          "line_linked": {
            "enable": false,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
          },
          "move": {
            "enable": true,
            "speed": 2,
            "direction": "none",
            "random": true,
            "straight": false,
            "out_mode": "out",
            "attract": {
              "enable": false,
              "rotateX": 600,
              "rotateY": 1200
            }
          }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": {
            "onhover": {
              "enable": ((istouch)?false:true),
              "mode": "bubble"
            },
            "onclick": {
              "enable": true,
              "mode": "custom"
            },
            "resize": true
          },
          "modes": {
            "grab": {
              "distance": 400,
              "line_linked": {
                "opacity": 1
              }
            },
            "bubble": {
              "distance": 80,
              "size": 150,
              "duration": 2,
              "opacity": 8,
              "speed": 3
            },
            "inactive":{
              "opacity": 0,
            },
            "custom":{
              "size": 600,
              "opacity": .8
            },
            "repulse": {
              "distance": 200
            },
            "push": {
              "particles_nb": 4
            },
            "remove": {
              "particles_nb": 2
            }
          }
        },
        "retina_detect": true,
        
      };
  $('#particles-js canvas').addClass('hide');
  setTimeout(function(){
    updateParticlesJS(stage2Arr);
    $('#particles-js canvas').removeClass('hide');
    setTimeout(function(){

      $('#bg').addClass('hide');
      pageHandler.nextPage();
    }, 2500);
  }, 410);
  
}

var mode = 'l', scrollable = true;
var pageHandler = {
  pages: ["intro", "landing", "landing2", "story"],
  cur_page: 0,
  cur_id: null,
  init: function(){
    var _ = this;
    particlesJS('particles-js', stage1Arr);
    var $canvas = $('#particles-js canvas');
    var $memoryWrap = $('#bg'), 
      memoryData = [
      {src: base_url+"images/intro-img1-2.jpg", width: 807, ratio: 1, top: 59, left: 6.63}, 
      {src: base_url+"images/intro-img2-2.jpg", width: 823, ratio: 0.8639, top: 878, left: 0.53}, 
      {src: base_url+"images/intro-img3.jpg", width: 670, ratio: 1, top: 898, left: 38.3}, 
      {src: base_url+"images/2.png", width: 435, ratio: 1, top: 909, left: 55.73, opacity: .7}, 
      {src: base_url+"images/5.png", width: 480, ratio:1, top: 589, left: 19.93, opacity: .4},
      {src: base_url+"images/intro-img4.png", width: 579, ratio: 1, top: 519, left: 21.93},


      {src: base_url+"images/intro-img5.jpg", width: 880, ratio: 1, top: -100, left: 50.4, opacity: .4}, 
      {src: base_url+"images/intro-img7.jpg", width: 760, ratio: 1, top: 835, left: 73.93, opacity: .6}, 
      {src: base_url+"images/intro-img8.png", width: 670, ratio: 1, top: 507, left: 85.1}, 
      {src: base_url+"images/intro-img6.png", width: 670, ratio: 1, top: 442, left: 66.2}, 
      {src: base_url+"images/9.png", width: 620, ratio:1, top: 247, left: 64.26, opacity: .4},
      {src: base_url+"images/4.png", width: 600, ratio: 1, top: 974, left: 88.2, opacity: .4}];
    var multiply = .6, duration = 10000;
    if($(window).width()<$(window).height()){
      multiply = 0.5;
      duration = 7500;
      mode = 'p';
    }
    for(var m = 0; m<memoryData.length; m++){
      var $m = $('<div id="memory'+(m+1)+'" class="memory" />'), memory = memoryData[m];
      var w  = memory.width, h = w * memory.ratio;
      $m.css({'backgroundImage':'url('+memory.src+')',width: w*multiply, height: h*multiply, top: memory.top*multiply, left: memory.left/multiply+'%'});
      if(memory.opacity != undefined){
        $m.css({opacity: memory.opacity});

      }
      $memoryWrap.append($m);
    }
    // duration = 1000;
    $('#intro').addClass('active');
    setTimeout(function(){
      stage2();
    }, duration); //7800

    var mc = new Hammer(document.getElementsByTagName('body')[0]);
    mc.get('swipe').set({ direction: Hammer.DIRECTION_VERTICAL });
    mc.on("swipeup swipedown", function(ev) {
      // console.log(ev.type +" gesture detected.");
      if(ev.type == 'swipeup'){
        // if($('body').hasClass('landing-state')){
          // changePage($('#landing'), $('#landing2'));
        // }
        if(story.$section != null && scrollable){
          $('.detail-article.active .frame'+(story.frame+1)+' .next-btn').trigger('click');
        }
        else if($('body').hasClass('landing-state')){
          _.nextPage();
        }
        setTimeout(function(){
          $("html, body").animate({ scrollTop: 0 }, 0);
        }, 200);
      }
    });
    $('#intro .next-btn').click(function(e){
      e.preventDefault();
      _.nextPage();
    });
  },
  nextPage: function(){
    var _ = this;
    if(_.cur_page >= _.pages.length){
      return;
    }
    var to = _.pages[(_.cur_page+1)];
    if(to == 'story'){
      to = to + (_.cur_id+1);
      $('#'+to+' .detail-intro').show().addClass('active'); 
    }
    _.changePage($('#'+_.pages[_.cur_page]), $('#'+to));
    _.cur_page++;
    // if(_.pages[_.cur_page] == 'sound'){

    // }
    // changePage($('#intro'), $('#sound'));
  },
  changePage: function($from, $to){
    var _ = this;
    if(story.$section != null){
      story.$section.removeClass('in');
    }
    $from.fadeOut(200);
    $to.fadeIn(400, function(){
      $from.removeClass('active');
      $to.addClass('active');
      $('body').attr('class', $to.attr('id')+'-state');
      if(story.$section!=null){story.$section.addClass('in');}
    });
  }
};
var touchEvent = (istouch)? 'touchstart' : 'click';
pageHandler.init();
$('body').on('detail-intro', function(e){
  pageHandler.cur_id = e.bubble;
  pageHandler.nextPage();
  console.log('trigger: '+pageHandler.cur_id);
  
});
var story = {
  frame: -1,
  $section: null,
  num: 0
};
var nextFrame = function(){
  story.frame++;
  if(story.frame == 0){
    story.$section = $('#story'+(pageHandler.cur_id+1));
    story.num = story.$section.find('.frame').length;
    var $to = story.$section.find('.detail-article');
    pageHandler.changePage(story.$section.find('.detail-intro'), $to);  
  }
  if(story.frame >= story.num) return;
  
  var $current = story.$section.find('.frame'+(story.frame));
  var $frame = story.$section.find('.frame'+(story.frame+1));
  if($current.find('.video-wrapper').length == 1){
    $current.find('.video-wrapper').html('');  
  }
  if($frame.find('.video-wrapper').length == 1){
    var $wrap = $frame.find('.video-wrapper');
    var src = (mode == 'l')? $wrap.data('video'):$wrap.data('video-m');
    $wrap.html('<video width="400" ><source src="'+src+'" type="video/mp4">Your browser does not support HTML5 video.</video>');
    $frame.find('.video-btn').trigger('click');
  }
  pageHandler.changePage($current, $frame);
  var t = $frame.data('template');
  var event = jQuery.Event( "detail-article");
  event.frame = story.frame;
  event.template = t;
  var time = 2100;
  if(t == 'e'){
    time = 4600;
  }
  else if(t == 'f'){
    time = 4100;
  }
  setTimeout(function(){
    scrollable = true;
  }, time);
  if(event.frame == 1){event.animate = [{propname: 'x', to: '(W*.8)', duration: 1300, starttime: new Date().getTime() }, {propname: 'y', to: '(H*.9)', duration: 1300, starttime: new Date().getTime() }];}
  else if(event.frame == 2){event.animate = [{propname: 'x', to: '0+S*.6', duration: 1300, starttime: new Date().getTime() }, {propname: 'y', to: '(H*.36)', duration: 1300, starttime: new Date().getTime() }];}
  else if(event.frame == 3){event.animate = [{propname: 'x', to: '0+S*.5', duration: 1300, starttime: new Date().getTime() }, {propname: 'y', to: '(H-S*.65)', duration: 1300, starttime: new Date().getTime() }];}
  else if(event.frame == 4){event.animate = [{propname: 'x', to: 'W', duration: 1300, starttime: new Date().getTime() }, {propname: 'y', to: '(H-S)', duration: 1300, starttime: new Date().getTime() }];}
  else if(event.frame == 5){event.animate = [{propname: 'x', to: 'W/2', duration: 1300, starttime: new Date().getTime() }, {propname: 'y', to: '(H/2)', duration: 1300, starttime: new Date().getTime() }];}
  else{event.animate = [];}
  $(window).trigger(event);
};
$('body').on('detail-article-0', function(e){
  //caught after the intro audio finished
  nextFrame();
});
$('.detail-article .home-btn').bind('click', function(e){
  e.preventDefault();
  pageHandler.changePage(story.$section, $('#landing2'));
  story.$section.find('.detail-article.active, .frame.active').removeClass('active');
  story.frame = -1;
  story.num = 0;
  story.$section = null;
  pageHandler.cur_page = 2;
  pageHandler.cur_id = null;
  $(window).trigger('landing');
});
$('.detail-article .next-btn').bind('click', function(e){
  e.preventDefault();
  scrollable = false;
  nextFrame();
});
$('.detail-article .video-btn').bind('click', function(e){
  e.preventDefault();
  var video = $(this).parent().find('video').get(0);
  // alert(video.paused);
  console.log('video play');
  if (video.paused) {
    video.play();
    video.addEventListener('playing', (event) => {
      $(this).addClass('disabled');
    });
    video.addEventListener('pause', (event) => {
      $(this).removeClass('disabled');
    });
  } else {
    video.pause();
  }
});
$(window).load(function(){
  setTimeout(function(){
    $("html, body").animate({ scrollTop: 0 }, 0);
  }, 200);
});
