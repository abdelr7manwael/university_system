
  
<?php ob_start();
  include '../../project/shared/header.php';


        include './general/connection.php';
        
        if(isset($_SESSION['doctor'])){
              
          header('location:/project/doctor/');
        }else{

        if(isset($_POST['login'])){
            
            $name = $_POST['name'] ;
            $password = $_POST['password'];
            // $role = $_POST['role'];
            $select = "SELECT * FROM `doctors` WHERE doc_name = '$name' and doc_password = $password";
            $s = mysqli_query($conn,$select);
            $numros = mysqli_num_rows($s);
           $row = mysqli_fetch_assoc($s);
            if($numros > 0){
              $_SESSION['doctor'] = $name;
              $_SESSION['id'] = $row['id'];
              

              
                header('location:/project/doctor');
            }
            else{
              echo" <div class='alert text-center w-50 m-auto alert-danger'>
              <h6> wrong name or password</h6>
              </div>";
            }
        }
        if(isset($_SESSION['i'])){
          echo" <div class='alert text-center w-50 m-auto alert-success'>
          <h6> addition process is true</h6>
          </div>";    
      }

        ob_end_flush();
?>

<div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->

          
                <h2 class="active">Log In as a doctor:</h2>

            

          
      
          
          <!-- Login Form -->
          <form action="login.php" method="POST">
            
            <input type="text" minlength="3" required  class="fadeIn third" name="name" placeholder="name">


            <input type="password" minlength="3" required  class="fadeIn third" name="password" placeholder="password" >
           <div  class="w-100 d-flex justify-content-end fadeIn fourth">
           <br><a style="margin-right: 72px; text-decoration:underline;" href="/project/doctor/signup.php">Don't Have an account?</a><br>
           </div>
            
            
            <button type="submit" name="login" class="fadeIn fourth" >Log In</button>
            
          </form>
      
          
        </div>
      </div>




<?php } include 'shared/script.php';?>

