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
    </head>
    <body>
        <script>
             //initiate variables that count score and number of upgrades
            var a = 1;
            var b = 1;
            var c = 1;
            var d = 1;
            var up1 = 10;
            var up2 = 50;
            var up3 = 100;
            //this function will increase score by 1 when "increase" function is called(onclick)
            function increase(){
                var inc = document.getElementById("Test").innerHTML = a;
                a++;
            }
            //initiate variable for use with setInterval (the time)
            var myVar;
            //upg1time, upg2time, upg3time these functions start the counters for
            //upgrades and keep track of how many were bought
            //the if statement checks if they have enough to buy upgrade, only
            //then will the upgrade activate
            function upg1time() {
                if(a>=up1){
                    myVar = setInterval(upg1, 1000);
                    var amt = document.getElementById("mini").innerHTML = "Owned: " + b;
                    b++;
                    a-=up1;
                    up1=up1*2;
                    if(b>=1){
                        document.getElementById("c1").innerHTML = "Cost: " + up1;
                    }
                }
            }
            function upg2time() {
               if(a>=up2){
                myVar = setInterval(upg2, 500);
                var amt = document.getElementById("good").innerHTML = "Owned: " + c;
                c++;
                a-=up2;
                up2 = up2*2;
                if(c>=1){
                        document.getElementById("c2").innerHTML = "Cost: " + up2;
                    }
                }
            }
            function upg3time() {
                if(a>=up3){
                myVar = setInterval(upg3, 100);
                var amt = document.getElementById("super").innerHTML = "Owned: " + d;
                d++;
                a-=up3;
                up3 = up3*2;
                 if(d>=1){
                        document.getElementById("c3").innerHTML = "Cost: " + up3;
                    }
                }
            }
            //upg1, upg2, upg3 functions increment the values differently, depending
            //on level of the upgrade
            function upg1() {
                var inc = document.getElementById("Test").innerHTML = a;
                a+=1;
            }

            function upg2() {
                var inc = document.getElementById("Test").innerHTML = a;
                a+=1;
            }

            function upg3() {
                var inc = document.getElementById("Test").innerHTML = a;
                a+=1;
            }
            
            //Game Audio
            function up1play() {
                    if(a>=up1){
                        var audio = document.getElementById('audio1');
                        if (audio.paused) {
                            audio.play();
                        }else{
                            audio.currentTime = 0
                        }
                    }
                }
                
            function up2play() {
                    if(a>=up2){
                        var audio = document.getElementById('audio1');
                        if (audio.paused) {
                            audio.play();
                        }else{
                            audio.currentTime = 0
                        }
                    }
                }
                
            function up3play() {
                    if(a>=up3){
                        var audio = document.getElementById('audio1');
                        if (audio.paused) {
                            audio.play();
                        }else{
                            audio.currentTime = 0
                        }
                    }
                }
            function clickPlay(){
                var audio = document.getElementById('audio2');
                if(audio.paused){
                    audio.play();
                }else{
                    audio.currentTime = 0;
                }
            }
            
            function menuNav(){
                var audio = document.getElementById('audio3');
                if(audio.paused){
                    audio.play();
                }else{
                    audio.currentTime = 0;
                }
            }
            
            
            function menuBack(){
                var audio = document.getElementById('audio4');
                if(audio.paused){
                    audio.play();
                }else{
                    audio.currentTime = 0;
                }
            }
            
            //achievement
            setInterval(function achievement(){
                if(a>=11){
                    document.getElementById("achieve1").src = "achievement1.png";
                    //document.getElementById('achieve').innerHTML = "WELL DONE";
                    //can be projected to a div or whatever
                }
            }, 0001);
        </script>
        <!-- Game Sounds -->
        <audio id="audio1" src="audio/Upgrade_Purchase.wav"></audio>
        <audio id="audio2" src="audio/clicker_sound.wav"></audio>
        <audio id="audio3" src="audio/menuNav.wav"></audio>
        <audio id="audio4" src="audio/menuBack.wav"></audio>
        
        <!-- Navbar -->
        <header>
    		<div class="cd-logo"><a href="#0"><img src="img/cd-logo.svg" alt="Logo"></a></div>
    
    		<nav class="cd-main-nav-wrapper">
    			<ul class="cd-main-nav">
    				<li style="font-family: 'Lobster', cursive; color: #fff;"><a style="font-size: 30px;" href="#0">Login</a></li>
    				<li style="font-family: 'Lobster', cursive; color: #fff;"><a style="font-size: 30px;" href="#0">Sign Up</a></li>
    				<li style="font-family: 'Press Start 2P', cursive; color: #fff;">
    					<a onclick="menuNav();" href="#0" class="cd-subnav-trigger"><span>Options</span></a>
    
    					<ul>
    						<li class="go-back"><a href="#0">Menu</a></li>
    						<li><a style="font-family: 'Sigmar One', cursive; font-size: 25px;" onclick="menuNav();" class="cd-bouncy-nav-trigger" href="#0">Upgrades</a></li>
    						<li><a href="#0" class="placeholder">Placeholder</a></li>
    					</ul>
    				</li>
    			</ul> <!-- .cd-main-nav -->
    		</nav> <!-- .cd-main-nav-wrapper -->
    		
    		<a href="#0" class="cd-nav-trigger"><span></span></a>
    		
    		<!-- Upgrades Menu -->
    		<div class="cd-bouncy-nav-modal">
            	<nav>
            	    <div style="width: 100vw; height: 100vh; background-color: rgba(13, 15, 18, 0.6); position: center;">
            		<ul class="cd-bouncy-nav upgradeCirc">
            			<li class="upgrade1" style="color: #fff;"><a style="font-family: 'Sigmar One', cursive; font-size: 18px;" onclick="up1play(); upg1time();" href="#0">Mini </br><span style="font-family: 'Poppins', sans-serif; font-size: 15px;" id="c1">Cost: 10</span> <span style="font-family: 'Poppins', sans-serif; font-size: 15px;" id="mini">Owned: 0</span> </a></li>
            			<li class="upgrade2" style="color: #fff;"><a style="font-family: 'Sigmar One', cursive; font-size: 18px;" onclick="up2play(); upg2time();" href="#0">Good </br><span style="font-family: 'Poppins', sans-serif; font-size: 15px;" id="c2">Cost: 50</span> <span style="font-family: 'Poppins', sans-serif; font-size: 15px;" id="good">Owned: 0</span></a></li>
            			<li class="upgrade3" style="color: #fff;"><a style="font-family: 'Sigmar One', cursive; font-size: 18px;" onclick="up3play(); upg3time();" href="#0">Super </br><span style="font-family: 'Poppins', sans-serif; font-size: 15px;" id="c3">Cost: 100</span> <span style="font-family: 'Poppins', sans-serif; font-size: 15px;" id="super">Owned: 0</span></a></li>
            		</ul>
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
                        <div style="height: 10%; width: 50%; background-color: rgba(0, 0, 0, 0.5); position: relative; top: 5px; left: 27%; border-radius: 20px;">
                            <span style="color: #fff; font-family: 'Lobster', cursive; font-size: 30px; line-height: 40px;">Mining or Something</span>
                        </div>
                        <div style="height: 10%; width: 75%; background-color: rgba(0, 0, 0, 0.5); position: relative; top: 15px; left: 15%; border-radius: 5px;">
                            <img src="img/goldCoin.png" style="width: 8%; position: relative; top: 6px;"><span style="color: #FFF146; font-family: 'Lobster', cursive; font-size: 30px; line-height: 40px;">Gold: <span style="color: #fff;"class="text-center" id="Test">0</span></span>
                        </div>
                        <!--onclick="increase()" calls function to increment by 1-->
                        <button onclick="clickPlay(); increase();" class="button clicker"></button>
                        <div style="height: 100%; width: 95%; background-color: rgba(0, 0, 0, 0.5); position: relative; top: 40px; left: 4%;border-radius: 5px;">
                            <h1 style="font-family: 'Sigmar One', cursive; font-size: 35px; color: #fff;">Changelog</h1>
                            <ul class="text-left" style="color: #fff; font-family: 'Poppins', sans-serif; font-size: 20px; line-height: 40px; padding-left: 5px;">
                                <li><span class="glyphicon glyphicon-plus"></span>Added Navbar.</li>
                                <li><span class="glyphicon glyphicon-plus"></span>Added Upgrades UI (In Options).</li>
                                <li><span class="glyphicon glyphicon-plus"></span>Added CSS Clicker Object.</li>
                                <li><span class="glyphicon glyphicon-plus"></span>Added CSS animated background.</li>
                                <li><span class="glyphicon glyphicon-plus"></span>Added various audio components.</li>
                                <li><span class="glyphicon glyphicon-plus"></span>Added Opacity background to Upgrades UI (Helps keep player focus on upgrades).</li>
                                <li><span class="glyphicon glyphicon-plus"></span>Changed Upgrades to ALL increment by ONE at different speeds.</li>
                                <li><span class="glyphicon glyphicon-plus"></span>Added achievement.</li>
                            </ul>
                        </div>
                    </div>
                    <div id="col2" class="col-md-8" style="background-color: #5D697F">
                        <div style="margin-left: -10px; margin-right: -20px;" id="caveTop"></div>
                        <div style="margin-left: -10px; margin-right: -20px;" id="caveBack">
                            <h1 style="font-family: 'Sigmar One', cursive; font-size: 35px; color: #fff;">Example Themed Context</h1>
                            <div style="height: 35%; width: 50%; background-color: rgba(0, 0, 0, 0.5); position: relative; top: 40px; left: 25%;border-radius: 5px;">
                                <h1 style="font-family: 'Sigmar One', cursive; font-size: 35px; color: #fff;">Context</h1>
                                <ul class="text-left" style="color: #fff; font-family: 'Poppins', sans-serif; font-size: 20px; line-height: 40px; padding-left: 5px;">
                                    <li><span class="glyphicon glyphicon-chevron-right"></span>Better graphically looped background.</li>
                                    <li><span class="glyphicon glyphicon-chevron-right"></span>Sprite-like animation, perhaps with CSS transformations or other methods.</li>
                                    <li><span class="glyphicon glyphicon-chevron-right"></span>Animation plays onclick of the clicker object (Would have to be very short to account for extreme clicking speeds).</li>
                                </ul>
                                <div><img id="achieve1" src=""></div>
                            </div>
                        </div>
                        <div style="margin-left: -10px; margin-right: -20px;" id="caveBottom"></div>
                    </div>
                </div>
            </div>
        </main>
        
        <!-- Need to be in this order to work -->
        <script src="js/jquery-2.1.1.js"></script> <!-- Resource jQuery -->
        <script src="js/main.js"></script>
    </body>
</html>
