
  
<?php ob_start();
  include '../../project/shared/header.php';


        include './general/connection.php';
        
        if(isset($_SESSION['student'])){
              
          header('location:/project/student/');
        }else{

        if(isset($_POST['login'])){
            
            $name = $_POST['name'] ;
            $password = $_POST['password'];
            // $role = $_POST['role'];
            $select = "SELECT * FROM `students` WHERE std_name = '$name' and std_password = $password";
            $s = mysqli_query($conn,$select);
            $numros = mysqli_num_rows($s);
           $row = mysqli_fetch_assoc($s);
            if($numros > 0){
              $_SESSION['student'] = $name;
              $_SESSION['id'] = $row['id'];
              $_SESSION['level'] = $row['levelId'];

              
                header('location:/project/student');
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

          
                <h2 class="active">Log In as a student:</h2>

            

          
      
          
          <!-- Login Form -->
          <form action="login.php" method="POST">
            
            <input type="text" minlength="3" required  class="fadeIn third" name="name" placeholder="name">


            <input type="password" minlength="3" required  class="fadeIn third" name="password" placeholder="password" >
           <div  class="w-100 d-flex justify-content-end fadeIn fourth">
           <br><a style="margin-right: 72px; text-decoration:underline;" href="/project/student/signup.php">Don't Have an account?</a><br>
           </div>
            
            
            <button type="submit" name="login" class="fadeIn fourth" >Log In</button>
            
          </form>
      
          
        </div>
      </div>




<?php } include 'shared/script.php';?>

