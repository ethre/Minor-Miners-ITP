 <?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ITP Project</title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
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
	    <link rel="stylesheet" href="style.css" media="all"/>
	    <script type="text/javascript" src="canvasjs.min.js"></script>
	    <script>
           function ajax(){
                var req = new XMLHttpRequest();
                req.onreadystatechange = function(e){
                    if(req.readyState == 4 && req.status == 200){
                        document.getElementById('chat').innerHTML = req.responseText;
                    }
                }
                req.open('GET', 'chat.php', true);
                req.send();
            }
          setInterval(function(){ajax();},100);
          
          </script>
	    <!--ajax test...-->
    </head>
    <body onload="loadScores23(); quotaAppend(); spawnFirstGem(); spawnSecondGem(); spawnThirdGem(); spawnFourthGem(); spawnFifthGem(); spawnSixthGem(); spawnSeventhGem(); loadChart(); onClick(); onClick2(); onClick3(); onClick4(); onClick5(); onClick6(); onClick7(); gemTimer(); countdown(); ajax();" style="cursor: url('img/pickCursor.png'), auto;">
        
        <!-- Game Sounds -->
        <audio id="audio1" src="audio/Upgrade_Purchase.wav"></audio>
        <audio id="audio2" src="audio/clicker_sound.wav"></audio>
        <audio id="audio3" src="audio/menuNav.wav"></audio>
        <audio id="audio4" src="audio/menuBack.wav"></audio>
        <audio id="audio5" src="audio/minerExample.wav"></audio>
        <audio id="audio6" src="audio/audio6.wav"></audio>
        <audio id="gemCollect" src="audio/Sped Up Spyro the Dragon- Gem Sound (HD).wav"></audio>
        <audio id="notSound" src="audio/notSound.wav"></audio>
        <audio id="achSound" src="audio/achSound.wav"></audio>
        <!-- Navbar -->
        <header>
    		<div class="cd-logo"><a class="noselect"><img style="width: 60%; position: relative; top: -50px; left: 80px;" src="img/MinorMinersLogoClearAlmostWhite.png" alt="Logo"></a></div>
            
            
        <!-- Div with GEMS -->
        <div style="cursor: url('img/pickCursor.png'), auto;" id="marketPlaceDiv">
            <div id="gemDiv" style="height: 100vh; width: 100vw; opacity: 100%; z-index: 1000;"></div>
        </div> 
             
        <!-- Div with CHAT -->    
            <div id="chatPlaceDiv">

                <?php
                include 'db.php';
                ?>
                
                    <div id="chatContainer">
                        <h1 class="text-center" style="font-family: 'Press Start 2P', cursive; color: #fff; font-size: 40px; 870px; z-index: 2;">Chat</h1>
                        <div id="chat_box">
                            <form method="post" id="chatForm">
                                <!--<input style="width: 35%; position: relative;" type="text" name="name" placeholder="enter name"/>-->
                                <p class="text-center" style="color: #fff; font-family: 'Sigmar One', cursive; font-size: 25px; padding-top: 20px; padding-bottom: 20px;"><span style="color: #fff;">User:</span> <span style="color: #E8B1B4;"><?php echo $_SESSION['mail'];?></span></p>
                                <textarea style="resize: none;" id="msgChat" name="msg" placeholder="enter message" onkeypress="handle(event);"></textarea>
                            </form>
                            <button style="visibility: hidden;" id="sendBtn" type="button" name="submitv" onclick="RequestPHP();">Send it</button>
                            <div id="chat"></div>
                        </div>
                    </div>
                    <!-- Need to be in this order to work -->
        <!--
         * index_gem_test.php
         *
         * Rev 1
         *
         * 16/04/2016
         *
         * @reference https://www.developphp.com/video/JavaScript/Ajax-Post-to-PHP-File-XMLHttpRequest-Object-Return-Data-Tutorial
         * @author Aaron Fitzgerald, x14715335
         *
         *
         -->
                    <script>
                        function RequestPHP(){
                            // Create our XMLHttpRequest object
                            var hr = new XMLHttpRequest();
                            // Create some variables we need to send to our PHP file
                            var url = "sendToChat.php";
                            //please ignore error, doesn't work another way.
                            var formMail = <?php echo json_encode($_SESSION['mail']);?>;
                            var formMsg = document.getElementById("msgChat").value;
                            var vars = "mail="+formMail+"&msg="+formMsg;
                            hr.open("POST", url, true);
                            // Set content type header information for sending url encoded variables in the request
                            hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                            // Access the onreadystatechange event for the XMLHttpRequest object
                            hr.onreadystatechange = function() {
                        	    if(hr.readyState == 4 && hr.status == 200) {
                        		    var return_data = hr.responseText;
                        			document.getElementById("chat").innerHTML = return_data;
                        			document.getElementById("msgChat").value = '';
                        	    }
                            }
                            // Send the data to PHP now... and wait for response to update the status div
                            hr.send(vars); // Actually execute the request
                            document.getElementById("chat").innerHTML = "processing...";
                        }
                    </script>
                </div>
                <div id="leaderDiv">
                    <h1 class="text-center" style="font-family: 'Press Start 2P', cursive; color: #fff; font-size: 40px; 870px; z-index: 2;">Leaderboard</h1>
                    <div style="border-radius: 10px; margin:0 auto;background-image: url('img/lightCaveWall.png'); color: #fff;width:50%">            
                        <table class="table table-condensed" >
                            <thead>
                                <tr style="font-family: 'Sigmar One', cursive; font-size: 20px;">
                                    <th>Rank</th>
                                    <th>Username</th>
                                    <th>Score</th>
                                </tr>
                            </thead>
                            
                            <?php
                                // establishing the MySQLi connection
                                /*
                                * @author Aaron Fitzgerald, x14715335
                                */
                                $con = mysqli_connect("localhost","root","","users");
                                /*
                                * @reference http://www.onlinetuting.com/create-login-script-in-php/
                                */
                                if (mysqli_connect_errno())
                                
                                {
                                
                                echo "MySQLi Connection was not established: " . mysqli_connect_error();
                                
                                }
                                $sql = "SELECT * FROM leader ORDER BY score DESC LIMIT 10";
                                $result = mysqli_query($con,$sql);
                                $i=0;
                                while ($rs = mysqli_fetch_assoc($result)) {
                                    $user = $rs['user'];
                                    $score = $rs['score'];
                                    $i++;
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $rs['user']; ?></td>
                                        <td><?php echo $rs['score']; ?></td>
                                    </tr>
                                <?php
                                }
                            ?> 
                        </table>
                    </div>
                </div>
          
          
        <!-- Nav bar elements -->     
    		<nav class="cd-main-nav-wrapper noselect">
    			<ul class="cd-main-nav">
    			    <li><a style="font-family: 'Sigmar One', cursive; font-size: 20px; cursor: url('img/pickCursor.png'), auto;" href="logout.php"><span>Log Out</span></a></li>
    				<li style="font-family: 'Press Start 2P', cursive; color: #fff;">
    					<a id="optionsNav" onclick="menuNav();" href="#0" class="cd-subnav-trigger"><span class="noselect">Options</span></a>
    					<ul>
    						<li class="go-back"><a href="#0">Menu</a></li>
    						<li><a style="font-family: 'Sigmar One', cursive; font-size: 20px; cursor: url('img/pickCursor.png'), auto;" onclick="menuNav();" class="cd-bouncy-nav-trigger" href="#0"><span>Upgrades</span></a></li>
    					    <li><a style="font-family: 'Sigmar One', cursive; font-size: 20px; cursor: url('img/pickCursor.png'), auto;" onclick="chatToggle();" href="#0"><span>Chat</span></a></li>
    					    <li><a style="font-family: 'Sigmar One', cursive; font-size: 20px; cursor: url('img/pickCursor.png'), auto;" onclick="leaderToggle();" href="#0"><span>Leaderboard</span></a>
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
                    <div id="col1" class="col-md-4 noselect">
                        <div id="vertical-scroll"></div>
                        <div class="noselect" style="height: 10%; width: 50%; background-color: rgba(0, 0, 0, 0.5); position: relative; top: 5px; left: 27%; border-radius: 20px;">
                            <span style="color: #fff; font-family: 'Lobster', cursive; font-size: 30px; line-height: 40px;"><?php echo "Welcome " . $_SESSION['mail'] . "";?></span>
                            
                        </div>
                        <div class="noselect" style="height: 10%; width: 75%; background-color: rgba(0, 0, 0, 0.5); position: relative; top: 15px; left: 15%; border-radius: 5px;">
                            <img src="img/coin2.gif" style="position: relative; top: 3px; padding-right: 5px;"><span style="color: #FFF146; font-family: 'Lobster', cursive; font-size: 30px; line-height: 40px;">Gold: <span style="color: #fff;"class="text-center" id="Test">...</span></span>
                            </br>
                            <span id="cps" style="font-family: 'Press Start 2P', cursive; color: #fff; font-size: 15px; ">GPC: ...</span>
                            
                            <!--<span><button onclick = "cloneScore();" value="click2clone">Finish and add score to database/leaderboard</button></span>-->
                             <div id="countdown"style="font-family: 'Press Start 2P', cursive; font-size: 15spx; color: #fff;"><span></span></div>
                             <div id="achieve"style="font-family: 'Press Start 2P', cursive; font-size: 15spx; color: #fff;"><span></span></div>
                        </div>
                        <!--onclick="increase()" calls function to increment by 1-->
                        <figure>
                            <button id="clickBtn" style="cursor: url('img/pickCursor.png'), pointer;" onclick="clickPlay(); increase();" class="button clicker"></button>
                            <div class="noselect" id="clone"></div>
                        </figure>
                        <?php
                            // establishing the MySQLi connection
                            
                            /*
                            * @author Aaron Fitzgerald, x14715335
                            */
                            $con = mysqli_connect("localhost","root","","users");
                            /*
                            * @reference http://www.onlinetuting.com/create-login-script-in-php/
                            */
                            if (mysqli_connect_errno())
                            
                            {
                            
                            echo "MySQLi Connection was not established: " . mysqli_connect_error();
                            
                            }
                            // checking the use
                            
                            $tempuser = $_SESSION['mail'];
                            
                            $sel_user = "select * from users where user_email='$tempuser' OR username ='$tempuser'";
                            
                            
                            
                            $run_user = mysqli_query($con, $sel_user);
                            
                            $check_user = mysqli_num_rows($run_user);
                            
                            if($check_user>0){
                            /*
                            * @author Aaron Fitzgerald, x14715335
                            */
                            $gold = "select gold, auto_upgrade1, auto_upgrade2, auto_upgrade3, manual_upgrade1, manual_upgrade2, manual_upgrade3, cps, increment, auto_up1, auto_up2, auto_up3, man_up1, man_up2, man_up3 from users where user_email='$tempuser' OR username = '$tempuser'";
                            $query = mysqli_query($con, $gold);
                            while($rs = mysqli_fetch_assoc($query)){
                                $user_gold = $rs['gold'];
                                $user_au1 = $rs['auto_upgrade1'];
                                $user_au2 = $rs['auto_upgrade2'];
                                $user_au3 = $rs['auto_upgrade3'];
                                $user_mu1 = $rs['manual_upgrade1'];
                                $user_mu2 = $rs['manual_upgrade2'];
                                $user_mu3 = $rs['manual_upgrade3'];
                                $user_cps = $rs['cps'];
                                $user_incr = $rs['increment'];
                                $user_up1 = $rs['auto_up1'];
                                $user_up2 = $rs['auto_up2'];
                                $user_up3 = $rs['auto_up3'];
                                $user_curs1 = $rs['man_up1'];
                                $user_curs2 = $rs['man_up2'];
                                $user_curs3 = $rs['man_up3'];
                            }
                            }
                            
                            /*
                            * @reference http://www.onlinetuting.com/create-login-script-in-php/
                            */
                            else {
                            
                            echo "<script>alert('Error occurred, try again!')</script>";
                            
                            }
                            //fclose($myfile);
                            ?>
                        <div>
                            <h1 style="font-family: 'Press Start 2P', cursive; color: #fff; font-size: 20px; position: fixed; left: 5px; top: 340px; z-index: 2;">Music</h1>
                            <button onclick="menuBack();" class="musicBtn">
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </button>
                        </div>
                        
                        <div id="musicDiv">
                            <h1 style="font-family: 'Sigmar One', cursive; font-size: 25px;">Soundcloud</h1>
                            <iframe width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/167323338&amp;color=7e4d7e&amp;auto_play=true&amp;hide_related=false&amp;show_comments=false&amp;show_user=false&amp;show_reposts=false"></iframe>
                        </div>
                        <!-- Quota Display -->
                        <div id="popUpQuota" style="width: 60%; height: 140px; z-index:2; border-style:solid; border-width:1px; background-image: url('img/greyCaveWall.png'); background-repeat: repeat; opacity:0.9; position: relative; bottom: 230px; left: 20%; border-radius:20px;">
                            <h1 style="font-family: 'Sigmar One', cursive; font-size: 30px;  color: #fff;">Quota this Round</h1>
                            <p id="quotaP" style="font-family: 'Press Start 2P', cursive; font-size: 15px; color: #fff;"></p>
                            </br>
                            <p id="statusP" style="font-family: 'Press Start 2P', cursive; font-size: 15px; color: #fff;"></p>
                            <div style="font-family: 'Press Start 2P'; color:#fff; z-index:5000; height:200px; width:40%; position: relative; left: 30%; top: 20px;"><button id="saveprogbtn" type="submit" style="background-color: #586499; border-radius:35px;" onclick="cloneScore();" value="click2clone">Save Progress</button></div> 
                        </div>
                        
                        <!-- TESTING ACHIEVEMENT -->
                        <div id="popUpAchievement" style="width: 60%; height: 100px; display:none; z-index:500; border-style:solid; border-width:1px; background-image: url('img/achCaveWall.png'); background-repeat: repeat; opacity:0.9; position: relative; left: 20%; bottom: 200px; border-radius:20px;"></div>
                        
                        <!-- TESTING NOTIFICATION -->
                        <div id="popUpNotification" style="width: 60%; height: 100px; display:none; z-index:500; border-style:solid; border-width:1px; background-image: url('img/notCaveWall.png'); background-repeat: repeat; opacity:0.9; position: relative; left: 20%; bottom: 200px; border-radius:20px;"></div>
                        
                        <!-- TESTING WARNING -->
                        <div id="popUpWarning" style="width: 60%; height: 100px; display:none; z-index:500; border-style:solid; border-width:1px; background-image: url('img/warnCaveWall.png'); background-repeat: repeat; opacity:0.9; position: relative; left: 20%; bottom: 200px; border-radius:20px;"></div>
                    </div>
                        
                        <div id="col2" class="col-md-8 noselect" style="background-image: url('img/caveBack.png'); background-repeat: repeat;">
                        <div style="margin-left: -10px; margin-right: -20px;" id="caveTop">
                            <h1 style="font-family: 'Lobster', cursive; font-size: 50px; color: #fff; position: relative; top: 15px;">Round <span id="roundDisplay">1</span></h1>
                        </div>
                        
                         <!-- Platform 1 -->
                        <div class="noselect" style="height: 100px; width: 99%; background-image: url('img/platform.png'); background-repeat: repeat-x; background-position: center bottom; position: relative; bottom: 100px; left: ;border-radius: 5px; padding: 5px;">
                            <div id="minerDivExample" class="noselect container-fluid" style="height: 90%; width: 100%;">
                                <div class="row" id="spawnMiner">
                     
                                </div>
                            </div> 
                        </div>

                        <!-- Platform 2 -->
                        <div class="noselect" style="height: 90px; width: 99%; background-image: url('img/platform.png'); background-repeat: repeat-x; background-position: center bottom; position: relative; bottom: 100px; left: ;border-radius: 5px; padding: 5px;">
                            <div>
                                <h1 style="font-family: 'Press Start 2P', cursive; color: #fff; font-size: 20px; position: fixed; right: 55%; top: 670px; z-index: 10;">Statistics</h1>
                                <button onclick="minerExample();" class="gemStoreBtn">
                                    <i class="glyphicon glyphicon-chevron-left"></i>
                                </button>
                            </div>

                            <div id="minerDivExample2" class="noselect container-fluid" style="height: 90%; width: 100%;">
                                <div class="row" id="spawnMiner">
                     
                                </div>
                            </div> 
                            
                        </div>
    
                        <!-- Platform 3 -->
                        <div class="noselect" style="height: 90px; width: 99%; background-image: url('img/platform.png'); background-repeat: repeat-x; background-position: center bottom; position: relative; bottom: 100px; left: ;border-radius: 5px; padding: 5px;">
                            <div id="minerDivExample3" class="noselect container-fluid" style="height: 90%; width: 100%;">
                                <div class="row" id="spawnMiner">
                        
                                </div>
                            </div> 
                        </div>
                        
                        <!-- Platform 4 -->
                        <div class="noselect" style="height: 90px; width: 99%; background-image: url('img/platform.png'); background-repeat: repeat-x; background-position: center bottom; position: relative; bottom: 100px; left: ;border-radius: 5px; padding: 5px;">
                             <div id="minerDivExample4" class="noselect container-fluid" style="height: 90%; width: 100%;">
                                <div class="row" id="spawnMiner">
                           
                                </div>
                            </div> 
                        </div>
                        
                        <!-- Platform 5 -->
                        <div class="noselect" style="height: 90px; width: 99%; background-image: url('img/platform.png'); background-repeat: repeat-x; background-position: center bottom; position: relative; bottom: 100px; left: ;border-radius: 5px; padding: 5px;">
                             <div id="minerDivExample5" class="noselect container-fluid" style="height: 90%; width: 100%;">
                                <div class="row" id="spawnMiner">
                           
                                </div>
                            </div> 
                        </div>

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
            
                         <div id="statisticDiv" style="z-index:500;">
                            <div class="noselect container-fluid">
                                <div id="chartContainer" style="height: 180px; width: 100%;"></div> 
                            </div>
                        </div>
                        
                        <div style="margin-left: -10px; margin-right: -20px; position: fixed; top: 650px;" id="caveBottom"></div>
                        <div style="margin-left: -10px; margin-right: -20px; position: absolute; top: 650px;" id="caveBottomWall"></div>
                    </div>
                </div>
            </div>
        </main>
        
        <!-- Need to be in this order to work -->
        <!--
         * index_gem_test.php
         *
         * Rev 1
         *
         * 16/04/2016
         *
         * @reference http://stackoverflow.com/questions/2858057/ask-for-confirm-when-closing-a-tab
         * @author Aaron Fitzgerald, x14715335
         *
         *
         -->
        <script type="text/javascript">
            window.onbeforeunload = function() {
                return "All unsaved progress will be lost!";
            };
            $(document).ready(function() {
                $('#saveprogbtn').click(function() { window.onbeforeunload = null; });
            });
        </script>
        <script src="js/jquery-2.1.1.js"></script> <!-- Resource jQuery -->
        <script src="js/main.js"></script>
        <script type="text/javascript">
        var score=parseInt("<?php echo $user_gold;?>");var b=parseInt("<?php echo $user_au1;?>");var c=parseInt("<?php echo $user_au2;?>");var d=parseInt("<?php echo $user_au3;?>");var curs1Own = parseInt("<?php echo $user_mu1;?>");var curs2Own = parseInt("<?php echo $user_mu2;?>");var curs3Own = parseInt("<?php echo $user_mu3;?>");var clickNum = parseInt("<?php echo $user_cps;?>");var incr1 = parseInt("<?php echo $user_incr;?>");var up1 = parseInt("<?php echo $user_up1;?>");var up2 = parseInt("<?php echo $user_up2;?>");var up3 = parseInt("<?php echo $user_up3;?>");var upCursor1 = parseInt("<?php echo $user_curs1;?>");var upCursor2 = parseInt("<?php echo $user_curs2;?>");var upCursor3 = parseInt("<?php echo $user_curs3;?>");
        </script>
        <script src="js/game_logic.js"></script>
    </body>
</html>
