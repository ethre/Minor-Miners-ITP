<html>
    <head>
        <title>Clicker</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js">
        </script>
        <script>
            //initiate variables that count score and number of upgrades
            var a = 1;
            var b = 1;
            var c = 1;
            var d = 1;
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
                if(a>=10 && b<=5){
                    myVar = setInterval(upg1, 1000);
                    var amt = document.getElementById("mini").innerHTML = b;
                    b++;
                    a-=10;
                    if(b>=6){
                        document.getElementById("c1").innerHTML = "Cost: 50";
                    }
                }
                else if(a>=50 && b<=10 && b>=6){
                    myVar = setInterval(upg1, 1000);
                    var amt = document.getElementById("mini").innerHTML = b;
                    b++;
                    a-=50;
                    document.getElementById("c1").innerHTML = "Cost: 50";
                    if(b>=11){
                        document.getElementById("c1").innerHTML = "Cost: 500";
                    }
                }
                else if(a>=500 && b>=11){
                    myVar = setInterval(upg1, 1000);
                    var amt = document.getElementById("mini").innerHTML = b;
                    b++;
                    a-=500;
                    document.getElementById("c1").innerHTML = "Cost: 500";
                }
            }
            function upg2time() {
               if(a>=50 && c<=5){
                myVar = setInterval(upg2, 1000);
                var amt = document.getElementById("good").innerHTML = c;
                c++;
                a-=50;
                if(c>=6){
                        document.getElementById("c2").innerHTML = "Cost: 250";
                    }
                }
                else if(a>=250 && c<=10 && c>=6){
                    myVar = setInterval(upg1, 1000);
                    var amt = document.getElementById("good").innerHTML = c;
                    c++;
                    a-=250;
                    document.getElementById("c2").innerHTML = "Cost: 250";
                    if(c>=11){
                        document.getElementById("c2").innerHTML = "Cost: 2500";
                    }
                }
                else if(a>=2500 && c>=11){
                    myVar = setInterval(upg1, 1000);
                    var amt = document.getElementById("good").innerHTML = c;
                    c++;
                    a-=500;
                    document.getElementById("c2").innerHTML = "Cost: 2500";
                }
            }
            function upg3time() {
                if(a>=100 && d<=5){
                myVar = setInterval(upg3, 1000);
                var amt = document.getElementById("super").innerHTML = d;
                d++;
                a-=100;
                if(d>=6){
                        document.getElementById("c3").innerHTML = "Cost: 500";
                    }
                }
                else if(a>=500 && d<=10 && d>=6){
                    myVar = setInterval(upg1, 1000);
                    var amt = document.getElementById("super").innerHTML = d;
                    d++;
                    a-=500;
                    document.getElementById("c3").innerHTML = "Cost: 500";
                    if(d>=11){
                        document.getElementById("c3").innerHTML = "Cost: 5000";
                    }
                }
                else if(a>=5000 && d>=11){
                    myVar = setInterval(upg1, 1000);
                    var amt = document.getElementById("super").innerHTML = d;
                    d++;
                    a-=500;
                    document.getElementById("c2").innerHTML = "Cost: 5000";
                }
            }
            //upg1, upg2, upg3 functions increment the values differently, depending
            //on level of the upgrade
            function upg1() {
                var inc = document.getElementById("Test").innerHTML = a;
                a+=2;
            }

            function upg2() {
                var inc = document.getElementById("Test").innerHTML = a;
                a+=5;
            }

            function upg3() {
                var inc = document.getElementById("Test").innerHTML = a;
                a+=10;
            }
        </script>
        <style>
        /*CSS style, move to external file later*/
            #wrapper
            {
                margin: 0 auto;
                width:19%;
                background-color: cyan;
                border-radius: 20px;
            }
            .orgbut
            {
                background-color:yellow;
                float:left;
                width:33%;
                border-radius: 20px;
                text-align:center;
                padding-top:5px;
                padding-bottom:5px;
            }
            #Test
            {
                font-size:20px;
                text-align:center;
            }
        </style>        
    </head>
    <body>
        <div id="wrapper">
            <!--onclick="increase()" calls function to increment by 1-->
            <img onclick="increase()" src="click.png"/>
            <br/>
            <p id="Test" onclick="increase()"></p>
            <br/>
            <!--buttons containing individual functions for upgrades-->
            <div class="orgbut"><button type="button" id="but1" onclick="upg1time()">Mini +2</button><p id="c1">Cost: 10</p></div>
            <div class="orgbut"><button type="button" id="but2" onclick="upg2time()">Good +5</button><p id="c2">Cost: 50</p></div>
            <div class="orgbut"><button type="button" id="but3" onclick="upg3time()">Super +10</button><p id="c3">Cost: 100</p></div>
            <!--amount of upgrades bought are displayed here-->
            <p>Mini upgrades: <a id="mini"></a></p>
            <p>Good upgrades: <a id="good"></a></p>
            <p>Super upgrades: <a id="super"></a></p>
            <br/>
        </div>
        <form role="form" method="post">
            Username:<br>
            <input type="user" class="form-control" id="user" name="user">
            <br/>
            Password:<br>
            <input type="pass" class="form-control" id="pass" name="pass">
            <br/><br/>
            <button type="submit" class="btn btn-default" name="submit" value="Submit">Add to database</button>
        </form>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/fa0vY1tvdHQ" frameborder="0" allowfullscreen></iframe>
        <?php

            //Connect to the database
            if(isset($_POST["submit"])){
            $host = "127.0.0.1";
            $user = "ethre";                     //Your Cloud 9 username
            $pass = "";                                 //Remember, there is NO password by default!
            $db = "users";                          //Your database name you want to connect to
            $port = 3306;                               //The port #. It is always 3306
        
            $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
            
        	if ($connection->connect_error) {
        	die("Connection failed: " . $connection->connect_error);
        	}
            //Adds a user and pass to the table userList
           $sql = "INSERT INTO userList (user,pass) VALUES('".$_POST[user]."','".$_POST[pass]."')";
           $connection->query($sql);
            
            
           $connection->close();
           }
        ?>
    </body> 
</html>


//https://www.youtube.com/watch?v=4E-oepPPg7A