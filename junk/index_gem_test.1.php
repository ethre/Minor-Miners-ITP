<!DOCTYPE html>
<html>
    <head>
        <title>ITP Project</title>
        
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
        
        <link rel="icon" href="img/coin2.gif"/>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <script type="javascript" src="js/bootstrap.js"></script>
        <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	    <link rel="stylesheet" href="rngcss.css"><!-- Gems CSS -->
	    <script src="js/modernizr.js"></script> <!-- Modernizr -->
    </head>
    <body onload="spawnFirstGem(); spawnSecondGem(); spawnThirdGem(); spawnFourthGem(); spawnFifthGem(); spawnSixthGem(); onClick(); onClick2(); onClick3(); onClick4(); onClick5(); onClick6(); gemTimer(); countdown();" style="cursor: url('img/pickCursor.png'), auto;">
        
        <!-- Game Sounds -->
        <audio id="audio1" src="audio/Upgrade_Purchase.wav"></audio>
        <audio id="audio2" src="audio/clicker_sound.wav"></audio>
        <audio id="audio3" src="audio/menuNav.wav"></audio>
        <audio id="audio4" src="audio/menuBack.wav"></audio>
        <audio id="audio5" src="audio/minerExample.wav"></audio>
        
        <!-- Navbar -->
        <header>
    		<div class="cd-logo"><a class="noselect"><img style="width: 40%; position: relative; top: -70px; left: 20px;" src="img/MinorMinersLogoClearAlmostWhite.png" alt="Logo"></a></div>
            
            <div style="cursor: url('img/pickCursor.png'), auto;" id="marketPlaceDiv">
                <div id="gemDiv" style="height: 100vh; width: 100vw; opacity: 100%; z-index: 1000;">
                   
                </div>
            </div> 
               
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
                            <span id="cps" style="font-family: 'Press Start 2P', cursive; color: #fff; font-size: 15px; ">GPC: 1</span>
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
                            <h1 style="font-family: 'Press Start 2P', cursive; color: #fff; font-size: 20px; position: fixed; left: 5px; top: 340px; z-index: 2;">Music</h1>
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
                        <div style="margin-left: -10px; margin-right: -20px;" id="caveTop">
                            <h1 style="font-family: 'Lobster', cursive; font-size: 50px; color: #fff; position: relative; top: 15px;">Round <span id="roundDisplay">1</span></h1>
                        </div>
                        <div class="noselect" style="height: 100px; width: 99%; background-image: url('img/platform.png'); background-repeat: repeat-x; background-position: center bottom; position: relative; bottom: 100px; left: ;border-radius: 5px; padding: 5px;">
                            <div id="countdown"style="font-family: 'Sigmar One', cursive; font-size: 35px; color: #fff;"><span></span></div>
                            <div id="gemDisplay" style="font-family: 'Sigmar One', cursive; font-size: 35px; color: #fff;">x</div>
                            
                            <a id="add_row" style="z-index: 2;" class="btn btn-default pull-left">Add Gem</a><a id='delete_row' class="pull-right btn btn-default">Delete Gem</a>
                            
                            <div id="c1"></div>
                            <div id="c2"></div>
                        </div>
                        
                        <div id="gemStoreDiv">
                            <div class="noselect container-fluid">
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <table class="table" id="tab_logic">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">
                                                        <h1 style="font-family: 'Sigmar One', cursive; font-size: 25px;">Sell Gems</h1>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="gem1"></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="noselect" style="height: 90px; width: 99%; background-image: url('img/platform.png'); background-repeat: repeat-x; background-position: center bottom; position: relative; bottom: 100px; left: ;border-radius: 5px; padding: 5px;">
                            <div>
                               <button onclick="minerExample();" class="gemStoreBtn">
                                    <i class="glyphicon glyphicon-chevron-left"></i>
                                </button>
                            </div>

                            <div id="minerDivExample" class="noselect container-fluid" style="height: 90%; width: 100%;">
                                <div class="row" id="spawnMiner">
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
                        <div class="noselect" style="height: 90px; width: 99%; background-image: url('img/platform.png'); background-repeat: repeat-x; background-position: center bottom; position: relative; bottom: 100px; left: ;border-radius: 5px; padding: 5px;"></div>
                        <div class="noselect" style="height: 90px; width: 99%; background-image: url('img/platform.png'); background-repeat: repeat-x; background-position: center bottom; position: relative; bottom: 100px; left: ;border-radius: 5px; padding: 5px;"></div>
                        <div class="noselect" style="height: 90px; width: 99%; background-image: url('img/platform.png'); background-repeat: repeat-x; background-position: center bottom; position: relative; bottom: 100px; left: ;border-radius: 5px; padding: 5px;"></div>
                        
                        <div class="noselect" style="height: 90px; width: 99%; background-repeat: repeat-x; background-position: center bottom; position: relative; bottom: 100px; left: ;border-radius: 5px; padding: 5px;">
                            <!--
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
                            -->
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
