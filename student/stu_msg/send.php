<?php ob_start();

include '../shared/header.php';
include '../general/connection.php';
include '../general/functions.php';


    


if (isset($_POST['submit'])) {
  $id = $_SESSION['id'];
  $msg = $_POST['stud_msg'];
  $insert = "INSERT INTO stu_msg VALUES(NULL,$id,'$msg',NULL)";
  $i = mysqli_query($conn,$insert);
  
  header('location:/project/student/stu_msg/list.php');
  testmessage($i,"addition");
}



ob_end_flush();
    ?>





    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->

        
                <h2 class="active"> send message </h2>

          
          <!-- Login Form -->
          <form action="send.php" method="POST" class="fadeIn third" >
            
            <textarea style="height: 200px; margin-top:5px;" class="fadeIn third w-75 " minlength="3" required name="stud_msg" placeholder="Enter ur message Here...."></textarea><br>
          
            <button type="submit" name="submit" class="fadeIn fourth" >Submit</button>

          </form>
      
          
        </div>
      </div>






<?php include '../shared/script.php';?>