<?php ob_start(); 
  include '../../project/shared/header.php';
    include  './general/connection.php';
    
    
#Insert

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password =$_POST['password'];
    $levelid =$_POST['levelId'];
    $insert = "INSERT INTO students VALUES(NULL,'$name',NULL ,$password ,$levelid)";
    $i = mysqli_query($conn, $insert);
    
    $_SESSION['i'] = $i;
    if($i):
    header('location:/project/student/login.php');
    

    
    elseif(empty($_SESSION['i'])):
    echo" <div class='alert text-center w-50 m-auto alert-danger'>
        <h6> addition process is false</h6>
        </div>";
      else:
      
        header('location:/project/student/signup.php');
      endif;
      
}




ob_end_flush();
    ?>





    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->

          
                <h2 class="active"> register As a Student </h2>

            

          
      
          
          <!-- Login Form -->
          <form method="POST">
            
            <input type="text"  class="fadeIn third" minlength="3" required name="name" value="" placeholder="Student name">
            <input type="text" class="fadeIn third" minlength="1" required name="levelId" value="" placeholder="student level">
            <br>
           
           
              <input type="password" minlength="3" required  class="fadeIn third" name="password" placeholder="password" >
            
            <button type="submit" name="submit" class="fadeIn fourth" >SignUp</button>
           
          </form>
      
          
        </div>
      </div>
