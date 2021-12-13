<?php ob_start(); 
  include '../../project/shared/header.php';
    include  './general/connection.php';
    
    
#Insert

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password =$_POST['password'];
    
    $insert = "INSERT INTO doctors VALUES(NULL,'$name', Null,$password )";
    $i = mysqli_query($conn, $insert);
    
    $_SESSION['i'] = $i;
    if($i):
    header('location:/project/doctor/login.php');
    

    
    elseif(empty($_SESSION['i'])):
    echo" <div class='alert text-center w-50 m-auto alert-danger'>
        <h6> addition process is false</h6>
        </div>";
      else:
      
        header('location:/project/doctor/signup.php');
      endif;
}




ob_end_flush();
    ?>





    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->

          
                <h2 class="active"> register As a doctor </h2>

            

          
      
          
          <!-- Login Form -->
          <form method="POST">
            
            <input type="text"  class="fadeIn third" minlength="3" required name="name" value="" placeholder="doctor name">
            
            <br>
           
           
              <input type="password" minlength="3" required  class="fadeIn third" name="password" placeholder="password" >
            
            <button type="submit" name="submit" class="fadeIn fourth" >SignUp</button>
           
          </form>
      
          
        </div>
      </div>
