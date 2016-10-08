<!--

 *chat.php
 *
 * Version information e.g. Rev 1
 *
 * Date e.g. 20/03/2016
 *
 * https://youtu.be/Dd9pbawCvgI?list=PL3oMl9a6mutnyRjxCANg5KmZzVKPJ-34_
 
 *
 * -->
 <?php
  
  include 'db.php';

  
        $query1 = "SELECT * FROM chat ORDER BY id DESC";
        $run1 = mysqli_query($con,$query1);
          
        while($row = mysqli_fetch_array($run1,MYSQLI_ASSOC)) :
          
?>
 
          
          <div id="chat_data">
                <span style="color:#FFAD9F;display:block;"> <?php echo $row['name']; ?> </span>
                <br/>
                <span style="color:#fff;"> <?php echo chunk_split($row['msg'],34); ?> </span>
                <br/>
                <br/>
                <span style="float:right; color:#fff;"> <?php echo formatDate($row['date']); ?> </span>
                <br/>
           </div>
           
<?php endwhile; ?>
           