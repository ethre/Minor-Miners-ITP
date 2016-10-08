 <?php
   include 'db.php';
    
 
$mail = $_POST['mail'];
$msg = $_POST['msg'];

/*if($name==''){
 echo "<script>alert('Please enter your name!')</script>";
 exit();
}*/
    
$query = "INSERT INTO chat (name,msg) values ('$mail','$msg')";

$run = mysqli_query($con,$query);

if($run){
    echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true' />" ;
}

  
        $query1 = "SELECT * FROM chat ORDER BY id DESC";
        $run1 = mysqli_query($con,$query1);
          
        while($row = mysqli_fetch_array($run1,MYSQLI_ASSOC)) :
          
?>
 
          
          <div id="chat_data">
                <span style="color:#FFAD9F;"> <?php echo $row['name']; ?> </span> :
                <span style="color:#fff;"> <?php echo $row['msg']; ?> </span>
                <span style="float:right; color:#fff;"> <?php echo formatDate($row['date']); ?> </span>
           </div>
           
<?php endwhile; ?>