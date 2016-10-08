<!DOCTYPE html>
<html>
    <head>
        <title>ITP Project</title>
        
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <script type="javascript" src="js/bootstrap.js"></script>
        <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	    <script src="js/modernizr.js"></script> <!-- Modernizr -->
	    <script>
            (function(t,e){if(typeof define==="function"&&define.amd){define(["jquery"],e)}else if(typeof exports==="object"){module.exports=e(require("jquery"))}else{e(t.jQuery)}})(this,function(t){t.transit={version:"0.9.12",propertyMap:{marginLeft:"margin",marginRight:"margin",marginBottom:"margin",marginTop:"margin",paddingLeft:"padding",paddingRight:"padding",paddingBottom:"padding",paddingTop:"padding"},enabled:true,useTransitionEnd:false};var e=document.createElement("div");var n={};function i(t){if(t in e.style)return t;var n=["Moz","Webkit","O","ms"];var i=t.charAt(0).toUpperCase()+t.substr(1);for(var r=0;r<n.length;++r){var s=n[r]+i;if(s in e.style){return s}}}function r(){e.style[n.transform]="";e.style[n.transform]="rotateY(90deg)";return e.style[n.transform]!==""}var s=navigator.userAgent.toLowerCase().indexOf("chrome")>-1;n.transition=i("transition");n.transitionDelay=i("transitionDelay");n.transform=i("transform");n.transformOrigin=i("transformOrigin");n.filter=i("Filter");n.transform3d=r();var a={transition:"transitionend",MozTransition:"transitionend",OTransition:"oTransitionEnd",WebkitTransition:"webkitTransitionEnd",msTransition:"MSTransitionEnd"};var o=n.transitionEnd=a[n.transition]||null;for(var u in n){if(n.hasOwnProperty(u)&&typeof t.support[u]==="undefined"){t.support[u]=n[u]}}e=null;t.cssEase={_default:"ease","in":"ease-in",out:"ease-out","in-out":"ease-in-out",snap:"cubic-bezier(0,1,.5,1)",easeInCubic:"cubic-bezier(.550,.055,.675,.190)",easeOutCubic:"cubic-bezier(.215,.61,.355,1)",easeInOutCubic:"cubic-bezier(.645,.045,.355,1)",easeInCirc:"cubic-bezier(.6,.04,.98,.335)",easeOutCirc:"cubic-bezier(.075,.82,.165,1)",easeInOutCirc:"cubic-bezier(.785,.135,.15,.86)",easeInExpo:"cubic-bezier(.95,.05,.795,.035)",easeOutExpo:"cubic-bezier(.19,1,.22,1)",easeInOutExpo:"cubic-bezier(1,0,0,1)",easeInQuad:"cubic-bezier(.55,.085,.68,.53)",easeOutQuad:"cubic-bezier(.25,.46,.45,.94)",easeInOutQuad:"cubic-bezier(.455,.03,.515,.955)",easeInQuart:"cubic-bezier(.895,.03,.685,.22)",easeOutQuart:"cubic-bezier(.165,.84,.44,1)",easeInOutQuart:"cubic-bezier(.77,0,.175,1)",easeInQuint:"cubic-bezier(.755,.05,.855,.06)",easeOutQuint:"cubic-bezier(.23,1,.32,1)",easeInOutQuint:"cubic-bezier(.86,0,.07,1)",easeInSine:"cubic-bezier(.47,0,.745,.715)",easeOutSine:"cubic-bezier(.39,.575,.565,1)",easeInOutSine:"cubic-bezier(.445,.05,.55,.95)",easeInBack:"cubic-bezier(.6,-.28,.735,.045)",easeOutBack:"cubic-bezier(.175, .885,.32,1.275)",easeInOutBack:"cubic-bezier(.68,-.55,.265,1.55)"};t.cssHooks["transit:transform"]={get:function(e){return t(e).data("transform")||new f},set:function(e,i){var r=i;if(!(r instanceof f)){r=new f(r)}if(n.transform==="WebkitTransform"&&!s){e.style[n.transform]=r.toString(true)}else{e.style[n.transform]=r.toString()}t(e).data("transform",r)}};t.cssHooks.transform={set:t.cssHooks["transit:transform"].set};t.cssHooks.filter={get:function(t){return t.style[n.filter]},set:function(t,e){t.style[n.filter]=e}};if(t.fn.jquery<"1.8"){t.cssHooks.transformOrigin={get:function(t){return t.style[n.transformOrigin]},set:function(t,e){t.style[n.transformOrigin]=e}};t.cssHooks.transition={get:function(t){return t.style[n.transition]},set:function(t,e){t.style[n.transition]=e}}}p("scale");p("scaleX");p("scaleY");p("translate");p("rotate");p("rotateX");p("rotateY");p("rotate3d");p("perspective");p("skewX");p("skewY");p("x",true);p("y",true);function f(t){if(typeof t==="string"){this.parse(t)}return this}f.prototype={setFromString:function(t,e){var n=typeof e==="string"?e.split(","):e.constructor===Array?e:[e];n.unshift(t);f.prototype.set.apply(this,n)},set:function(t){var e=Array.prototype.slice.apply(arguments,[1]);if(this.setter[t]){this.setter[t].apply(this,e)}else{this[t]=e.join(",")}},get:function(t){if(this.getter[t]){return this.getter[t].apply(this)}else{return this[t]||0}},setter:{rotate:function(t){this.rotate=b(t,"deg")},rotateX:function(t){this.rotateX=b(t,"deg")},rotateY:function(t){this.rotateY=b(t,"deg")},scale:function(t,e){if(e===undefined){e=t}this.scale=t+","+e},skewX:function(t){this.skewX=b(t,"deg")},skewY:function(t){this.skewY=b(t,"deg")},perspective:function(t){this.perspective=b(t,"px")},x:function(t){this.set("translate",t,null)},y:function(t){this.set("translate",null,t)},translate:function(t,e){if(this._translateX===undefined){this._translateX=0}if(this._translateY===undefined){this._translateY=0}if(t!==null&&t!==undefined){this._translateX=b(t,"px")}if(e!==null&&e!==undefined){this._translateY=b(e,"px")}this.translate=this._translateX+","+this._translateY}},getter:{x:function(){return this._translateX||0},y:function(){return this._translateY||0},scale:function(){var t=(this.scale||"1,1").split(",");if(t[0]){t[0]=parseFloat(t[0])}if(t[1]){t[1]=parseFloat(t[1])}return t[0]===t[1]?t[0]:t},rotate3d:function(){var t=(this.rotate3d||"0,0,0,0deg").split(",");for(var e=0;e<=3;++e){if(t[e]){t[e]=parseFloat(t[e])}}if(t[3]){t[3]=b(t[3],"deg")}return t}},parse:function(t){var e=this;t.replace(/([a-zA-Z0-9]+)\((.*?)\)/g,function(t,n,i){e.setFromString(n,i)})},toString:function(t){var e=[];for(var i in this){if(this.hasOwnProperty(i)){if(!n.transform3d&&(i==="rotateX"||i==="rotateY"||i==="perspective"||i==="transformOrigin")){continue}if(i[0]!=="_"){if(t&&i==="scale"){e.push(i+"3d("+this[i]+",1)")}else if(t&&i==="translate"){e.push(i+"3d("+this[i]+",0)")}else{e.push(i+"("+this[i]+")")}}}}return e.join(" ")}};function c(t,e,n){if(e===true){t.queue(n)}else if(e){t.queue(e,n)}else{t.each(function(){n.call(this)})}}function l(e){var i=[];t.each(e,function(e){e=t.camelCase(e);e=t.transit.propertyMap[e]||t.cssProps[e]||e;e=h(e);if(n[e])e=h(n[e]);if(t.inArray(e,i)===-1){i.push(e)}});return i}function d(e,n,i,r){var s=l(e);if(t.cssEase[i]){i=t.cssEase[i]}var a=""+y(n)+" "+i;if(parseInt(r,10)>0){a+=" "+y(r)}var o=[];t.each(s,function(t,e){o.push(e+" "+a)});return o.join(", ")}t.fn.transition=t.fn.transit=function(e,i,r,s){var a=this;var u=0;var f=true;var l=t.extend(true,{},e);if(typeof i==="function"){s=i;i=undefined}if(typeof i==="object"){r=i.easing;u=i.delay||0;f=typeof i.queue==="undefined"?true:i.queue;s=i.complete;i=i.duration}if(typeof r==="function"){s=r;r=undefined}if(typeof l.easing!=="undefined"){r=l.easing;delete l.easing}if(typeof l.duration!=="undefined"){i=l.duration;delete l.duration}if(typeof l.complete!=="undefined"){s=l.complete;delete l.complete}if(typeof l.queue!=="undefined"){f=l.queue;delete l.queue}if(typeof l.delay!=="undefined"){u=l.delay;delete l.delay}if(typeof i==="undefined"){i=t.fx.speeds._default}if(typeof r==="undefined"){r=t.cssEase._default}i=y(i);var p=d(l,i,r,u);var h=t.transit.enabled&&n.transition;var b=h?parseInt(i,10)+parseInt(u,10):0;if(b===0){var g=function(t){a.css(l);if(s){s.apply(a)}if(t){t()}};c(a,f,g);return a}var m={};var v=function(e){var i=false;var r=function(){if(i){a.unbind(o,r)}if(b>0){a.each(function(){this.style[n.transition]=m[this]||null})}if(typeof s==="function"){s.apply(a)}if(typeof e==="function"){e()}};if(b>0&&o&&t.transit.useTransitionEnd){i=true;a.bind(o,r)}else{window.setTimeout(r,b)}a.each(function(){if(b>0){this.style[n.transition]=p}t(this).css(l)})};var z=function(t){this.offsetWidth;v(t)};c(a,f,z);return this};function p(e,i){if(!i){t.cssNumber[e]=true}t.transit.propertyMap[e]=n.transform;t.cssHooks[e]={get:function(n){var i=t(n).css("transit:transform");return i.get(e)},set:function(n,i){var r=t(n).css("transit:transform");r.setFromString(e,i);t(n).css({"transit:transform":r})}}}function h(t){return t.replace(/([A-Z])/g,function(t){return"-"+t.toLowerCase()})}function b(t,e){if(typeof t==="string"&&!t.match(/^[\-0-9\.]+$/)){return t}else{return""+t+e}}function y(e){var n=e;if(typeof n==="string"&&!n.match(/^[\-0-9\.]+/)){n=t.fx.speeds[n]||t.fx.speeds._default}return b(n,"ms")}t.transit.getTransitionValue=d;return t});
        </script>
    </head>
    <body style="cursor: url('img/pickCursor.png'), auto;">
        
        <!-- Game Sounds -->
        <audio id="audio1" src="audio/Upgrade_Purchase.wav"></audio>
        <audio id="audio2" src="audio/clicker_sound.wav"></audio>
        <audio id="audio3" src="audio/menuNav.wav"></audio>
        <audio id="audio4" src="audio/menuBack.wav"></audio>
        <audio id="audio5" src="audio/minerExample.wav"></audio>
        
        <!-- Navbar -->
        <header>
    		<div class="cd-logo"><a class="noselect"><img style="width: 40%; position: relative; top: -70px; left: 20px;" src="img/MinorMinersLogoClearAlmostWhite.png" alt="Logo"></a></div>
               
            <div id="marketPlaceDiv"></div>
               
    		<nav class="cd-main-nav-wrapper noselect">
    			<ul class="cd-main-nav">
    				<li style="font-family: 'Press Start 2P', cursive; color: #fff;">
    					<a onclick="menuNav();" href="#0" class="cd-subnav-trigger"><span class="noselect">Options</span></a>
    					<ul>
    						<li class="go-back"><a href="#0">Menu</a></li>
    						<li><a style="font-family: 'Sigmar One', cursive; font-size: 25px; cursor: url('img/pickCursor.png'), auto;" onclick="menuNav();" class="cd-bouncy-nav-trigger" href="#0"><span>Upgrades</span></a></li>
    						<li><a style="font-family: 'Sigmar One', cursive; font-size: 25px; cursor: url('img/pickCursor.png'), auto;" onclick="toggleFadeDiv();" href="#0"><span>Market</span></a></li>
    					    <li><a href="#0" class="placeholder">Placeholder</a></li>
    					</ul>
    				</li>
    			</ul> <!-- .cd-main-nav -->
    		</nav> <!-- .cd-main-nav-wrapper -->
    		
    		<a href="#0" class="cd-nav-trigger"><span></span></a>
    		
    		<!-- Upgrades Menu -->
    		<div class="cd-bouncy-nav-modal noselect">
            	<nav>
            	    <div style="width: 100vw; height: 100vh; background-color: rgba(13, 15, 18, 0.6); position: center;">
            		<ul class="cd-bouncy-nav upgradeCirc">
            		    <h1 class="text-center autoUp" style="font-family: 'Press Start 2P', cursive; color: #fff; font-size: 25px; padding-bottom: 5px;">Manual Upgrades</h1>

            			<li class="cursorUpgrade1" style="color: #fff;"><a style="font-family: 'Sigmar One', cursive; font-size: 18px;" onclick="click1play(); cursorUpgrade1();" href="#0">Reinforce +1 </br><span style="font-family: 'Poppins', sans-serif; font-size: 15px;" id="curs1">Cost: 100</span> <span style="font-family: 'Poppins', sans-serif; font-size: 15px;" id="curs1Own">Owned: 0</span> </a></li>
            			<li class="cursorUpgrade2" style="color: #fff;"><a style="font-family: 'Sigmar One', cursive; font-size: 18px;" onclick="click2play(); cursorUpgrade2();" href="#0">Reinforce +5 </br><span style="font-family: 'Poppins', sans-serif; font-size: 15px;" id="curs2">Cost: 200</span> <span style="font-family: 'Poppins', sans-serif; font-size: 15px;" id="curs2Own">Owned: 0</span></a></li>
            			<li class="cursorUpgrade3" style="color: #fff;"><a style="font-family: 'Sigmar One', cursive; font-size: 18px;" onclick="click3play(); cursorUpgrade3();" href="#0">Reinforce +10 </br><span style="font-family: 'Poppins', sans-serif; font-size: 15px;" id="curs3">Cost: 300</span> <span style="font-family: 'Poppins', sans-serif; font-size: 15px;" id="curs3Own">Owned: 0</span></a></li>
            		    
            			<!-- Auto Increment Upgrades -->
            		    <h1 class="text-center autoUp" style="font-family: 'Press Start 2P', cursive; color: #fff; font-size: 25px; padding-bottom: 5px;">Auto Upgrades</h1>

            			<li class="upgrade1" style="color: #fff;"><a style="font-family: 'Sigmar One', cursive; font-size: 18px;" onclick="up1play(); upg1time();" href="#0">Regular Miner </br><span style="font-family: 'Poppins', sans-serif; font-size: 15px;" id="c1">Cost: 10</span> <span style="font-family: 'Poppins', sans-serif; font-size: 15px;" id="mini">Owned: 0</span> </a></li>
            			<li class="upgrade2" style="color: #fff;"><a style="font-family: 'Sigmar One', cursive; font-size: 18px;" onclick="up2play(); upg2time();" href="#0">Skilled Miner </br><span style="font-family: 'Poppins', sans-serif; font-size: 15px;" id="c2">Cost: 50</span> <span style="font-family: 'Poppins', sans-serif; font-size: 15px;" id="good">Owned: 0</span></a></li>
            			<li class="upgrade3" style="color: #fff;"><a style="font-family: 'Sigmar One', cursive; font-size: 18px;" onclick="up3play(); upg3time();" href="#0">Divine Miner </br><span style="font-family: 'Poppins', sans-serif; font-size: 15px;" id="c3">Cost: 100</span> <span style="font-family: 'Poppins', sans-serif; font-size: 15px;" id="super">Owned: 0</span></a></li>
            		</ul>
            		<div class="noselect" id="clone1"></div>
            		<div class="noselect" id="clone2"></div>
            		</div>
            	</nav>
        	
        	    <a href="#0" class="cd-close">Close modal</a>
            </div> <!-- cd-bouncy-nav-modal -->
	    </header>
	
	    <!-- Testing Layout -->
            <main class="cd-main-content">
            <div class="container-fluid text-center" style="margin-left: -20px; margin-right: -20px;">
                <div class="row">
                    <div id="col1" class="col-md-4">
                        <div id="vertical-scroll"></div>
                        <div class="noselect" style="height: 10%; width: 50%; background-color: rgba(0, 0, 0, 0.5); position: relative; top: 5px; left: 27%; border-radius: 20px;">
                            <span style="color: #fff; font-family: 'Lobster', cursive; font-size: 30px; line-height: 40px;">Minor Miner</span>
                        </div>
                        <div class="noselect" style="height: 10%; width: 75%; background-color: rgba(0, 0, 0, 0.5); position: relative; top: 15px; left: 15%; border-radius: 5px;">
                            <img src="img/coin2.gif" style="position: relative; top: 3px; padding-right: 5px;"><span style="color: #FFF146; font-family: 'Lobster', cursive; font-size: 30px; line-height: 40px;">Gold: <span style="color: #fff;"class="text-center" id="Test">0</span></span>
                            </br>
                            <span id="cps" style="font-family: 'Press Start 2P', cursive; color: #fff; font-size: 15px; ">CPS: 1</span>
                        </div>
                        <!--onclick="increase()" calls function to increment by 1-->
                        <figure>
                            <button id="clickBtn" style="cursor: url('img/pickCursor.png'), pointer;" onclick="clickPlay(); increase();" class="button clicker"></button>
                            <div class="noselect" id="clone"></div>
                        </figure>
                        
                        <!--
                        <div class="noselect" style="height: 100%; width: 95%; background-color: rgba(0, 0, 0, 0.5); position: relative; top: 40px; left: 4%; border-radius: 5px;">
                            <h1 style="font-family: 'Sigmar One', cursive; font-size: 35px; color: #fff;">Changelog</h1>
                            <ul class="text-left" style="color: #fff; font-family: 'Poppins', sans-serif; font-size: 15px; line-height: 30px; padding-left: 5px;">
                                <li><span class="glyphicon glyphicon-plus"></span>Added Navbar.</li>
                                <li><span class="glyphicon glyphicon-plus"></span>Added Upgrades UI (In Options).</li>
                                <li><span class="glyphicon glyphicon-plus"></span>Added CSS Clicker Object.</li>
                                <li><span class="glyphicon glyphicon-plus"></span>Added CSS animated background.</li>
                                <li><span class="glyphicon glyphicon-plus"></span>Added various audio components.</li>
                                <li><span class="glyphicon glyphicon-plus"></span>Added Opacity background to Upgrades UI.</li>
                                <li><span class="glyphicon glyphicon-plus"></span>Changed Upgrades to ALL increment by ONE at different speeds.</li>
                            </ul>
                        </div>
                        -->
                        <div>
                            <button onclick="menuBack();" class="musicBtn">
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </button>
                        </div>
                        <div id="musicDiv">
                            <h1 style="font-family: 'Sigmar One', cursive; font-size: 25px;">Soundcloud</h1>
                            <iframe width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/167323338&amp;color=7e4d7e&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=false&amp;show_reposts=false"></iframe>
                        </div>
                    </div>
                    <div id="col2" class="col-md-8" style="background-image: url('img/caveBack.png'); background-repeat: repeat;">
                        <div style="margin-left: -10px; margin-right: -20px;" id="caveTop"></div>
                        <div class="noselect" style="height: 100px; width: 99%; background-image: url('img/platform.png'); background-repeat: repeat-x; background-position: center bottom; position: relative; bottom: 100px; left: ;border-radius: 5px; padding: 5px;">
                            <h1 style="font-family: 'Sigmar One', cursive; font-size: 35px; color: #fff;">How Miners Appear</h1>
                        </div>
                        
                    
                        
                        <div class="noselect" style="height: 90px; width: 99%; background-image: url('img/platform.png'); background-repeat: repeat-x; background-position: center bottom; position: relative; bottom: 100px; left: ;border-radius: 5px; padding: 5px;">
                            <div>
                                <button onclick="minerExample();" class="minerExampleBtn">
                                    <i class="glyphicon glyphicon-chevron-left"></i>
                                </button>
                            </div>
                            <!-- How the Miners Should Appear after Buying their Respective Upgrades -->
                            <div id="minerDivExample" class="noselect container-fluid" style="height: 90%; width: 100%;">
                                <div class="row">
                                    <div class="col-md-2" style="height: 100%;">
                                        <img src="img/pixelMiner1.png">
                                    </div>
                                    <div class="col-md-2" style="height: 100%;">
                                        <img src="img/pixelMiner2.png">
                                    </div>
                                    <div class="col-md-2" style="height: 100%;">
                                        <img src="img/pixelMiner3.png">
                                    </div>
                                    <div class="col-md-2" style="height: 100%;">
                                        <img src="img/pixelMiner1.png">
                                    </div>
                                    <div class="col-md-2" style="height: 100%;">
                                        <img src="img/pixelMiner2.png">
                                    </div>
                                    <div class="col-md-2" style="height: 100%;">
                                        <img src="img/pixelMiner3.png">
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="noselect" style="height: 90px; width: 99%; background-repeat: repeat-x; background-position: center bottom; position: relative; bottom: 100px; left: ;border-radius: 5px; padding: 5px;">
                            <h1 style="font-family: 'Sigmar One', cursive; font-size: 35px; color: #fff;"></h1>
                            <div class="row" style="width: 80%; border-radius: 20px; height: 400px; background-color: rgba(0, 0, 0, 0.5); position: relative; left: 11%; top: 22px;">
                                <h1 class="text-center" style="padding-top: 10px; font-family: 'Press Start 2P', cursive; color: #fff; font-size: 40px;">Purpose</h1>
                                <ul class="text-left" style="color: #fff; font-family: 'Poppins', sans-serif; font-size: 20px; line-height: 35px; padding-left: 5px;">
                                <li><span class="glyphicon glyphicon-chevron-right"></span>To <code>click</code> is to mine resources that are converted to gold.<img src="img/coin2.gif" style="position: relative; top: 4px;"></li>
                                <li><span class="glyphicon glyphicon-chevron-right"></span>A <code>quota</code> of gold must be met within a 4 minute time period to be given to the governor.</li>
                                <li><span class="glyphicon glyphicon-chevron-right"></span>Gold can in turn be used to purchase both <code>automatic</code> and <code>manual</code> upgrades.</li>
                                <li><span class="glyphicon glyphicon-chevron-right"></span>You must manage <code>when</code> to buy upgrades in case you do not meet the quota for the governor.</li>
                                <li><span class="glyphicon glyphicon-chevron-right"></span>When a <code>milestone</code> is reached a real-time event is triggered, such as catching gems or destroying minions which give more gold than regular means.</li>
                                <li><span class="glyphicon glyphicon-chevron-right"></span>Gems are exchanged on the <code>marketplace</code> for gold.</li>
                            </ul>
                            </div>
                        </div>
                        <div style="margin-left: -10px; margin-right: -20px; position: absolute; top: 650px;" id="caveBottom"></div>
                        <div style="margin-left: -10px; margin-right: -20px; position: absolute; top: 650px;" id="caveBottomWall"></div>
                    </div>
                </div>
            </div>
        </main>
        
        <!-- Need to be in this order to work -->
        <script src="js/jquery-2.1.1.js"></script> <!-- Resource jQuery -->
        <script src="js/main.js"></script>
        <script src="js/game_logic.js"></script>
    </body>
</html>
