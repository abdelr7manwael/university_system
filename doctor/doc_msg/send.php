<?php ob_start();

include '../shared/header.php';
include '../general/connection.php';
include '../general/functions.php';


    


if (isset($_POST['submit'])) {
  $id = $_SESSION['id'];
  $msg = $_POST['doct_msg'];
  $insert = "INSERT INTO doc_msg VALUES(NULL,$id,'$msg',NULL)";
  $i = mysqli_query($conn,$insert);
  
  $_SESSION['i'] = $i;
  if($i):
    header('location:/project/doctor/doc_msg/list.php');
    
    elseif(empty($_SESSION['i'])):
      echo" <div class='alert text-center w-50 m-auto alert-danger'>
          <h6> addition process is false</h6>
          </div>";
        else:
        
          header('location:/project/doctor/send.php');
        endif;
  

}

  
 
    



ob_end_flush();
    ?>





    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->

        
                <h2 class="active"> send message </h2>

          
          <!-- Login Form -->
          <form action="send.php" method="POST" class="fadeIn third" >
            
            <textarea style="height: 200px; margin-top:5px;" class="fadeIn third w-75 " minlength="3" required name="doct_msg" placeholder="Enter ur message Here...."></textarea><br>
          
            <button type="submit" name="submit" class="fadeIn fourth" >Submit</button>

          </form>
      
          
        </div>
      </div>






<?php include '../shared/script.php';?>