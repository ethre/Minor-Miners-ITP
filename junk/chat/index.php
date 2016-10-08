<!--
 *index
 *
 * Version information e.g. Rev 1
 *
 * Date e.g. 20/03/2016
 *
 * https://youtu.be/Dd9pbawCvgI?list=PL3oMl9a6mutnyRjxCANg5KmZzVKPJ-34_
 
 *
 *
 -->
<?php
include 'db.php';
?>
<html>
    <head>
        <title>Chat system in php ajax</title>
        <link rel="stylesheet" href="style.css" media="all"/> 
        <!-- Ajax which user the script that allow the chat system not to load while the user send a message. -->
        <script>
            function ajax(){
                var req = new XMLHttpRequest();
                req.onreadystatechange = function(){
                    if(req.readyState == 4 && req.status == 200){
                        document.getElementById('chat').innerHTML = req.responseText;
                    }
                }
                req.open('GET', 'chat.php', true);
                req.send();
            }
          setInterval(function(){ajax();},100);
        </script>
        
    </head>
    
    <!-- The Ajax will load in the body onload. -->
<body onload = "ajax();">
    
<div id="container">
       <form method="post" action="index.php">
          <input type="text" name="name" placeholder="enter name"/>
          <textarea name="msg" placeholder="enter message"></textarea>
          
          <input type="submit" name="submit" value="Send it"/>
          
          
      </form>
    
      <div id="chat_box">
          
         <div id="chat"></div>
        
      </div>
      <!-- form input  -->
   
      
       <!--  //Database connection with phpmyadmin  -->
      <?php
      if(isset($_POST['submit'])){
          
       
        $name = $_POST['name'];
        $msg = $_POST['msg'];
    
      if($name==''){
	     echo "<script>alert('Please enter your name!')</script>";
	     exit();
	    }
          
      $query = "INSERT INTO chat (name,msg) values ('$name','$msg')" ;
      
      $run = $con->query($query);
      
      if($run){
          echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true' />" ;
      }
      
      }
      ?>
      
</div>
</body>
</html>