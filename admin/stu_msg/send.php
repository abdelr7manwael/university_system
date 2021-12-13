<?php ob_start();

include '../shared/header.php';
include '../general/connection.php';
include '../general/functions.php';


    
#Insert



 
  

    
  $no = $_GET['reply'];
  
  
  if(isset($_POST['submit'])){
      
      $msg= $_POST['admin_reply'];
      
     
     
      $update ="UPDATE `stu_msg` SET `admin_reply` ='$msg' WHERE no = $no";
      $u = mysqli_query($conn , $update);

      testmessage($u,"uuuu");


      header("location:/project/admin/stu_msg/list.php");
      
  }

  


ob_end_flush();
    ?>





    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->

        
                <h2 class="active"> message reply </h2>

          
          <!-- Login Form -->
          <form  method="POST" class="fadeIn third" >
            
            <textarea style="height: 200px; margin-top:5px;" class="fadeIn third w-75 " minlength="3" required name="admin_reply" placeholder="Enter ur message Here...."></textarea><br>
          
            <button type="submit" name="submit" class="fadeIn fourth" >Submit</button>

          </form>
      
          
        </div>
      </div>






<?php include '../shared/script.php';?>