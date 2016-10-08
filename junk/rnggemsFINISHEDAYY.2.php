<html>
    <head>
        <title>RNG Gems</title>
         <link rel="stylesheet" href="rngcss.css"/>
         <script type="javascript" src="rng.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
         <script>
             (function(t,e){if(typeof define==="function"&&define.amd){define(["jquery"],e)}else if(typeof exports==="object"){module.exports=e(require("jquery"))}else{e(t.jQuery)}})(this,function(t){t.transit={version:"0.9.12",propertyMap:{marginLeft:"margin",marginRight:"margin",marginBottom:"margin",marginTop:"margin",paddingLeft:"padding",paddingRight:"padding",paddingBottom:"padding",paddingTop:"padding"},enabled:true,useTransitionEnd:false};var e=document.createElement("div");var n={};function i(t){if(t in e.style)return t;var n=["Moz","Webkit","O","ms"];var i=t.charAt(0).toUpperCase()+t.substr(1);for(var r=0;r<n.length;++r){var s=n[r]+i;if(s in e.style){return s}}}function r(){e.style[n.transform]="";e.style[n.transform]="rotateY(90deg)";return e.style[n.transform]!==""}var s=navigator.userAgent.toLowerCase().indexOf("chrome")>-1;n.transition=i("transition");n.transitionDelay=i("transitionDelay");n.transform=i("transform");n.transformOrigin=i("transformOrigin");n.filter=i("Filter");n.transform3d=r();var a={transition:"transitionend",MozTransition:"transitionend",OTransition:"oTransitionEnd",WebkitTransition:"webkitTransitionEnd",msTransition:"MSTransitionEnd"};var o=n.transitionEnd=a[n.transition]||null;for(var u in n){if(n.hasOwnProperty(u)&&typeof t.support[u]==="undefined"){t.support[u]=n[u]}}e=null;t.cssEase={_default:"ease","in":"ease-in",out:"ease-out","in-out":"ease-in-out",snap:"cubic-bezier(0,1,.5,1)",easeInCubic:"cubic-bezier(.550,.055,.675,.190)",easeOutCubic:"cubic-bezier(.215,.61,.355,1)",easeInOutCubic:"cubic-bezier(.645,.045,.355,1)",easeInCirc:"cubic-bezier(.6,.04,.98,.335)",easeOutCirc:"cubic-bezier(.075,.82,.165,1)",easeInOutCirc:"cubic-bezier(.785,.135,.15,.86)",easeInExpo:"cubic-bezier(.95,.05,.795,.035)",easeOutExpo:"cubic-bezier(.19,1,.22,1)",easeInOutExpo:"cubic-bezier(1,0,0,1)",easeInQuad:"cubic-bezier(.55,.085,.68,.53)",easeOutQuad:"cubic-bezier(.25,.46,.45,.94)",easeInOutQuad:"cubic-bezier(.455,.03,.515,.955)",easeInQuart:"cubic-bezier(.895,.03,.685,.22)",easeOutQuart:"cubic-bezier(.165,.84,.44,1)",easeInOutQuart:"cubic-bezier(.77,0,.175,1)",easeInQuint:"cubic-bezier(.755,.05,.855,.06)",easeOutQuint:"cubic-bezier(.23,1,.32,1)",easeInOutQuint:"cubic-bezier(.86,0,.07,1)",easeInSine:"cubic-bezier(.47,0,.745,.715)",easeOutSine:"cubic-bezier(.39,.575,.565,1)",easeInOutSine:"cubic-bezier(.445,.05,.55,.95)",easeInBack:"cubic-bezier(.6,-.28,.735,.045)",easeOutBack:"cubic-bezier(.175, .885,.32,1.275)",easeInOutBack:"cubic-bezier(.68,-.55,.265,1.55)"};t.cssHooks["transit:transform"]={get:function(e){return t(e).data("transform")||new f},set:function(e,i){var r=i;if(!(r instanceof f)){r=new f(r)}if(n.transform==="WebkitTransform"&&!s){e.style[n.transform]=r.toString(true)}else{e.style[n.transform]=r.toString()}t(e).data("transform",r)}};t.cssHooks.transform={set:t.cssHooks["transit:transform"].set};t.cssHooks.filter={get:function(t){return t.style[n.filter]},set:function(t,e){t.style[n.filter]=e}};if(t.fn.jquery<"1.8"){t.cssHooks.transformOrigin={get:function(t){return t.style[n.transformOrigin]},set:function(t,e){t.style[n.transformOrigin]=e}};t.cssHooks.transition={get:function(t){return t.style[n.transition]},set:function(t,e){t.style[n.transition]=e}}}p("scale");p("scaleX");p("scaleY");p("translate");p("rotate");p("rotateX");p("rotateY");p("rotate3d");p("perspective");p("skewX");p("skewY");p("x",true);p("y",true);function f(t){if(typeof t==="string"){this.parse(t)}return this}f.prototype={setFromString:function(t,e){var n=typeof e==="string"?e.split(","):e.constructor===Array?e:[e];n.unshift(t);f.prototype.set.apply(this,n)},set:function(t){var e=Array.prototype.slice.apply(arguments,[1]);if(this.setter[t]){this.setter[t].apply(this,e)}else{this[t]=e.join(",")}},get:function(t){if(this.getter[t]){return this.getter[t].apply(this)}else{return this[t]||0}},setter:{rotate:function(t){this.rotate=b(t,"deg")},rotateX:function(t){this.rotateX=b(t,"deg")},rotateY:function(t){this.rotateY=b(t,"deg")},scale:function(t,e){if(e===undefined){e=t}this.scale=t+","+e},skewX:function(t){this.skewX=b(t,"deg")},skewY:function(t){this.skewY=b(t,"deg")},perspective:function(t){this.perspective=b(t,"px")},x:function(t){this.set("translate",t,null)},y:function(t){this.set("translate",null,t)},translate:function(t,e){if(this._translateX===undefined){this._translateX=0}if(this._translateY===undefined){this._translateY=0}if(t!==null&&t!==undefined){this._translateX=b(t,"px")}if(e!==null&&e!==undefined){this._translateY=b(e,"px")}this.translate=this._translateX+","+this._translateY}},getter:{x:function(){return this._translateX||0},y:function(){return this._translateY||0},scale:function(){var t=(this.scale||"1,1").split(",");if(t[0]){t[0]=parseFloat(t[0])}if(t[1]){t[1]=parseFloat(t[1])}return t[0]===t[1]?t[0]:t},rotate3d:function(){var t=(this.rotate3d||"0,0,0,0deg").split(",");for(var e=0;e<=3;++e){if(t[e]){t[e]=parseFloat(t[e])}}if(t[3]){t[3]=b(t[3],"deg")}return t}},parse:function(t){var e=this;t.replace(/([a-zA-Z0-9]+)\((.*?)\)/g,function(t,n,i){e.setFromString(n,i)})},toString:function(t){var e=[];for(var i in this){if(this.hasOwnProperty(i)){if(!n.transform3d&&(i==="rotateX"||i==="rotateY"||i==="perspective"||i==="transformOrigin")){continue}if(i[0]!=="_"){if(t&&i==="scale"){e.push(i+"3d("+this[i]+",1)")}else if(t&&i==="translate"){e.push(i+"3d("+this[i]+",0)")}else{e.push(i+"("+this[i]+")")}}}}return e.join(" ")}};function c(t,e,n){if(e===true){t.queue(n)}else if(e){t.queue(e,n)}else{t.each(function(){n.call(this)})}}function l(e){var i=[];t.each(e,function(e){e=t.camelCase(e);e=t.transit.propertyMap[e]||t.cssProps[e]||e;e=h(e);if(n[e])e=h(n[e]);if(t.inArray(e,i)===-1){i.push(e)}});return i}function d(e,n,i,r){var s=l(e);if(t.cssEase[i]){i=t.cssEase[i]}var a=""+y(n)+" "+i;if(parseInt(r,10)>0){a+=" "+y(r)}var o=[];t.each(s,function(t,e){o.push(e+" "+a)});return o.join(", ")}t.fn.transition=t.fn.transit=function(e,i,r,s){var a=this;var u=0;var f=true;var l=t.extend(true,{},e);if(typeof i==="function"){s=i;i=undefined}if(typeof i==="object"){r=i.easing;u=i.delay||0;f=typeof i.queue==="undefined"?true:i.queue;s=i.complete;i=i.duration}if(typeof r==="function"){s=r;r=undefined}if(typeof l.easing!=="undefined"){r=l.easing;delete l.easing}if(typeof l.duration!=="undefined"){i=l.duration;delete l.duration}if(typeof l.complete!=="undefined"){s=l.complete;delete l.complete}if(typeof l.queue!=="undefined"){f=l.queue;delete l.queue}if(typeof l.delay!=="undefined"){u=l.delay;delete l.delay}if(typeof i==="undefined"){i=t.fx.speeds._default}if(typeof r==="undefined"){r=t.cssEase._default}i=y(i);var p=d(l,i,r,u);var h=t.transit.enabled&&n.transition;var b=h?parseInt(i,10)+parseInt(u,10):0;if(b===0){var g=function(t){a.css(l);if(s){s.apply(a)}if(t){t()}};c(a,f,g);return a}var m={};var v=function(e){var i=false;var r=function(){if(i){a.unbind(o,r)}if(b>0){a.each(function(){this.style[n.transition]=m[this]||null})}if(typeof s==="function"){s.apply(a)}if(typeof e==="function"){e()}};if(b>0&&o&&t.transit.useTransitionEnd){i=true;a.bind(o,r)}else{window.setTimeout(r,b)}a.each(function(){if(b>0){this.style[n.transition]=p}t(this).css(l)})};var z=function(t){this.offsetWidth;v(t)};c(a,f,z);return this};function p(e,i){if(!i){t.cssNumber[e]=true}t.transit.propertyMap[e]=n.transform;t.cssHooks[e]={get:function(n){var i=t(n).css("transit:transform");return i.get(e)},set:function(n,i){var r=t(n).css("transit:transform");r.setFromString(e,i);t(n).css({"transit:transform":r})}}}function h(t){return t.replace(/([A-Z])/g,function(t){return"-"+t.toLowerCase()})}function b(t,e){if(typeof t==="string"&&!t.match(/^[\-0-9\.]+$/)){return t}else{return""+t+e}}function y(e){var n=e;if(typeof n==="string"&&!n.match(/^[\-0-9\.]+/)){n=t.fx.speeds[n]||t.fx.speeds._default}return b(n,"ms")}t.transit.getTransitionValue=d;return t});
        </script>
    
    <script>
    
        var score = 0;
        var countClicks = 0;
        
        var firstGem = Math.floor((Math.random() * 6) + 1);
        var secondGem = Math.floor((Math.random() * 6) + 1);
        var thirdGem = Math.floor((Math.random() * 6) + 1);
        var fourthGem = Math.floor((Math.random() * 6) + 1);
        var fifthGem = Math.floor((Math.random() * 6) + 1);
        var sixthGem = Math.floor((Math.random() * 6) + 1);
        
    
         alert(firstGem+" "+secondGem+" "+thirdGem+" "+fourthGem+" "+fifthGem+" "+sixthGem);
        
      
        function spawnFirstGem(){
        if(firstGem==1){
       
        $('body').append("<div class='a'></div>");
        animateDiv($('.a'));
        
        }else if(firstGem==2){
        
        $('body').append("<div class='a2'></div>");
        animateDiv($('.a2'));
        
        }else if(firstGem==3){
            
        $('body').append("<div class='a3'></div>");
        animateDiv($('.a3'));
        
        }else if(firstGem==4){
            
        $('body').append("<div class='a4'></div>");
        animateDiv($('.a4'));
        
        }else if(firstGem==5){
            
        $('body').append("<div class='a5'></div>");
        animateDiv($('.a5'));
        
        }else if(firstGem==6){
        
        $('body').append("<div class='a6'></div>");    
        animateDiv($('.a6'));
        }
    }    
       
    
         function spawnSecondGem(){
        if(secondGem==1){
       
        $('body').append("<div class='c'></div>");
        animateDiv($('.c'));
        
        }else if(secondGem==2){
        
        $('body').append("<div class='c2'></div>");
        animateDiv($('.c2'));
        
        }else if(secondGem==3){
            
        $('body').append("<div class='c3'></div>");
        animateDiv($('.c3'));
        
        }else if(secondGem==4){
            
        $('body').append("<div class='c4'></div>");
        animateDiv($('.c4'));
        }else if(secondGem==5){
           
        $('body').append("<div class='c5'></div>"); 
        animateDiv($('.c5'));
        }else if(secondGem==6){
        
        $('body').append("<div class='c6'></div>");    
        animateDiv($('.c6'));
        }
    }    
 
        function spawnThirdGem(){
        if(thirdGem==1){
       
        $('body').append("<div class='d'></div>");
        animateDiv($('.d'));
    
        }else if(thirdGem==2){
        
        $('body').append("<div class='d2'></div>");
        animateDiv($('.d2'));
        
        }else if(thirdGem==3){
            
        $('body').append("<div class='d3'></div>");
        animateDiv($('.d3'));
        
        }else if(thirdGem==4){
            
        $('body').append("<div class='d4'></div>");
        animateDiv($('.d4'));
 
        
        }else if(thirdGem==5){
            
        $('body').append("<div class='d5'></div>");
         animateDiv($('.d5'));
        
        }else if(thirdGem==6){
        
        $('body').append("<div class='d6'></div>");    
        animateDiv($('.d6'));
     
            
        }
    }  

        function spawnFourthGem(){
        if(fourthGem==1){
       
        $('body').append("<div class='e'></div>");
        animateDiv($('.e'));
        }else if(fourthGem==2){
        
        $('body').append("<div class='e2'></div>");
        animateDiv($('.e2'));
        }else if(fourthGem==3){
            
        $('body').append("<div class='e3'></div>");
        animateDiv($('.e3'));
        }else if(fourthGem==4){
            
        $('body').append("<div class='e4'></div>");
        animateDiv($('.e4'));
        }else if(fourthGem==5){
            
        $('body').append("<div class='e5'></div>");
        animateDiv($('.e5'));
        
        }else if(fourthGem==6){
        
        $('body').append("<div class='e6'></div>");    
      animateDiv($('.e6'));
            
        }
    }  
    
         function spawnFifthGem(){
        if(fifthGem==1){
       
        $('body').append("<div class='f'></div>");
        animateDiv($('.f'));
    
        }else if(fifthGem==2){
        
        $('body').append("<div class='f2'></div>");
        animateDiv($('.f2'));
        
        }else if(fifthGem==3){
            
        $('body').append("<div class='f3'></div>");
         animateDiv($('.f3'));
        
        }else if(fifthGem==4){
            
        $('body').append("<div class='f4'></div>");
        animateDiv($('.f4'));
        
        }else if(fifthGem==5){
            
        $('body').append("<div class='f5'></div>");
        animateDiv($('.f5'));
        
        }else if(fifthGem==6){
        
        $('body').append("<div class='f6'></div>");    
        animateDiv($('.f6'));
            
        }
    } 
    
     function spawnSixthGem(){
        if(sixthGem==1){
       
        $('body').append("<div class='g'></div>");
        animateDiv($('.g'));
     
    
        }else if(sixthGem==2){
        
        $('body').append("<div class='g2'></div>");
        animateDiv($('.g2'));
    
        
        }else if(sixthGem==3){
            
        $('body').append("<div class='g3'></div>");
        animateDiv($('.g3'));
       
        
        }else if(sixthGem==4){
            
        $('body').append("<div class='g4'></div>");
        animateDiv($('.g4'));
       
        
        }else if(sixthGem==5){
            
        $('body').append("<div class='g5'></div>");
        animateDiv($('.g5'));
       
        
        }else if(sixthGem==6){
        
        $('body').append("<div class='g6'></div>");    
        animateDiv($('.g6'));
            
        }
    } 
    

  
         $(document).ready(function() {
        animateDiv($('.a'));
        animateDiv($('.a2'));
        animateDiv($('.a3'));
        animateDiv($('.a4'));
        animateDiv($('.a5'));
        animateDiv($('.a6'));
        
        animateDiv($('.c'));
        animateDiv($('.c2'));
        animateDiv($('.c3'));
        animateDiv($('.c4'));
        animateDiv($('.c5'));
        animateDiv($('.c6'));
        
        animateDiv($('.d'));
        animateDiv($('.d2'));
        animateDiv($('.d3'));
        animateDiv($('.d4'));
        animateDiv($('.d5'));
        animateDiv($('.d6'));
        
        animateDiv($('.e'));
        animateDiv($('.e2'));
        animateDiv($('.e3'));
        animateDiv($('.e4'));
        animateDiv($('.e5'));
        animateDiv($('.e6'));
        
        animateDiv($('.f'));
        animateDiv($('.f2'));
        animateDiv($('.f3'));
        animateDiv($('.f4'));
        animateDiv($('.f5'));
        animateDiv($('.f6'));
        
        animateDiv($('.g'));
        animateDiv($('.g2'));
        animateDiv($('.g3'));
        animateDiv($('.g4'));
        animateDiv($('.g5'));
        animateDiv($('.g6'));

        });

    
        function animateDiv($target) {
        var newq = makeNewPosition($target.parent());
        var oldq = $target.offset();
        var speed = calcSpeed([oldq.top, oldq.left], newq);
        
        $target.animate({
            top: newq[0],
            left: newq[1]
        }, speed, function() {
            animateDiv($target);
        });
    
    };
    
    
        
       function makeNewPosition() {
    
        // Get viewport dimensions (remove the dimension of the div)
        var h = $(window).height() - 50;
        var w = $(window).width() - 50;
    
        var nh = Math.floor(Math.random() * h);
        var nw = Math.floor(Math.random() * w);
    
        return [nh, nw];
    
    }
                  
              
       function calcSpeed(prev, next) {

        var x = Math.abs(prev[1] - next[1]);
        var y = Math.abs(prev[0] - next[0]);
    
        var greatest = x > y ? x : y;
    
        var speedModifier = 0.3;
    
        var speed = Math.ceil(greatest / speedModifier);
    
        return speed;

        }
         
         
      function onClick(){
   
      $( ".a,.a2,.a3,.a4,.a5,.a6" ).on( "click", function() {
      countClicks++;
      
      document.getElementById("c1").innerHTML = "Gem collected!" + countClicks;
      
      
      if(countClicks>=6){
              
          score = score + 500;
          document.getElementById("c2").innerHTML = "Additonal score!"+score;
      }
      
      if(countClicks>=1){
    
    
      $('.a,.a2,.a3,.a4,.a5,.a6').transition({
      perspective: '100px',
      rotateY: '180deg'
      }); 
    
      $('.a,.a2,.a3,.a4,.a5,.a6').transition({ opacity: 0 });

      $(".a,.a2,.a3,.a4,.a5,.a6").stop();  
      $('.a,.a2,.a3,.a4,.a5,.a6').unbind("click");
      }
      
      
      })};
      
      function onClick2(){
   
      $( ".c,.c2,.c3,.c4,.c5,.c6" ).on( "click", function() {
      countClicks++;
      
      document.getElementById("c1").innerHTML = "Gem collected!" + countClicks;
      
      
      if(countClicks>=6){
              
          score = score + 500;
          document.getElementById("c2").innerHTML = "Additonal score!"+score;
      }
      
      if(countClicks>=1){
    
    
      $('.c,.c2,.c3,.c4,.c5,.c6').transition({
      perspective: '100px',
      rotateY: '180deg'
      }); 
    
      $('.c,.c2,.c3,.c4,.c5,.c6').transition({ opacity: 0 });

      $(".c,.c2,.c3,.c4,.c5,.c6").stop();  
      $('.c,.c2,.c3,.c4,.c5,.c6').unbind("click");
      }
      
      
      })};
      
      function onClick3(){
   
      $( ".d,.d2,.d3,.d4,.d5,.d6" ).on( "click", function() {
      countClicks++;
      
      document.getElementById("c1").innerHTML = "Gem collected!" + countClicks;
      
      
      if(countClicks>=6){
              
          score = score + 500;
          document.getElementById("c2").innerHTML = "Additonal score!"+score;
      }
      
      if(countClicks>=1){
    
    
      $('.d,.d2,.d3,.d4,.d5,.d6').transition({
      perspective: '100px',
      rotateY: '180deg'
      }); 
    
      $('.d,.d2,.d3,.d4,.d5,.d6').transition({ opacity: 0 });

      $(".d,.d2,.d3,.d4,.d5,.d6").stop();  
      $('.d,.d2,.d3,.d4,.d5,.d6').unbind("click");
      }
      
      
      })};
      
       function onClick4(){
   
      $( ".e,.e2,.e3,.e4,.e5,.e6" ).on( "click", function() {
      countClicks++;
      
      document.getElementById("c1").innerHTML = "Gem collected!" + countClicks;
      
      
      if(countClicks>=6){
              
          score = score + 500;
          document.getElementById("c2").innerHTML = "Additonal score!"+score;
      }
      
      if(countClicks>=1){
    
    
      $('.e,.e2,.e3,.e4,.e5,.e6').transition({
      perspective: '100px',
      rotateY: '180deg'
      }); 
    
      $('.e,.e2,.e3,.e4,.e5,.e6').transition({ opacity: 0 });

      $(".e,.e2,.e3,.e4,.e5,.e6").stop();  
      $('.e,.e2,.e3,.e4,.e5,.e6').unbind("click");
      }
      
      
      })};
      
       function onClick5(){
   
      $( ".f,.f2,.f3,.f4,.f5,.f6" ).on( "click", function() {
      countClicks++;
      
      document.getElementById("c1").innerHTML = "Gem collected!" + countClicks;
      
      
      if(countClicks>=6){
              
          score = score + 500;
          document.getElementById("c2").innerHTML = "Additonal score!"+score;
      }
      
      if(countClicks>=1){
    
    
      $('.f,.f2,.f3,.f4,.f5,.f6').transition({
      perspective: '100px',
      rotateY: '180deg'
      }); 
    
      $('.f,.f2,.f3,.f4,.f5,.f6').transition({ opacity: 0 });

      $(".f,.f2,.f3,.f4,.f5,.f6").stop();  
      $('.f,.f2,.f3,.f4,.f5,.f6').unbind("click");
      }
      
      
      })};
      
       function onClick6(){
   
      $( ".g,.g2,.g3,.g4,.g5,.g6" ).on( "click", function() {
      countClicks++;
      
      document.getElementById("c1").innerHTML = "Gem collected!" + countClicks;
      
      
      if(countClicks>=6){
              
          score = score + 500;
          document.getElementById("c2").innerHTML = "Additonal score!"+score;
      }
      
      if(countClicks>=1){
    
    
      $('.g,.g2,.g3,.g4,.g5,.g6').transition({
      perspective: '100px',
      rotateY: '180deg'
      }); 
    
      $('.g,.g2,.g3,.g4,.g5,.g6').transition({ opacity: 0 });

      $(".g,.g2,.g3,.g4,.g5,.g6").stop();  
      $('.g,.g2,.g3,.g4,.g5,.g6').unbind("click");
      }
      
      
      })};
    
    
    </script>
    </head>
         
         <body onload="spawnFirstGem(); spawnSecondGem(); spawnThirdGem(); spawnFourthGem(); spawnFifthGem(); spawnSixthGem(); onClick(); onClick2(); onClick3(); onClick4(); onClick5(); onClick6();">
         
        <div id="c1"></div>
        <div id="c2"></div>
         </body>
      <html>  