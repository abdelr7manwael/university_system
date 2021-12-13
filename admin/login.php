
  
<?php ob_start();
  include '../../project/shared/header.php';


        include './general/connection.php';
        
      
          if(isset($_SESSION['admin'])){
              
            header('location:/project/admin/');
          }else{
             
         
     
        

        if(isset($_POST['login'])){
            $name = $_POST['name'] ;
            $password = $_POST['password'];
#$role = $_POST['role'];
            $select = "SELECT * FROM `admins` WHERE name = '$name' and password = $password";
            $s = mysqli_query($conn,$select);
            $numros = mysqli_num_rows($s);
             $row = mysqli_fetch_assoc($s);
            if($numros > 0){
              $_SESSION['admin'] = $name;
              $_SESSION['id'] = $row['id'];
              $_SESSION['role'] = $row['role'];
                header('location:/project/admin');
                
            }
            else{
              echo" <div class='alert text-center w-50 m-auto alert-danger'>
              <h6> wrong name or password</h6>
              </div>";
            }
        }
        
        

        ob_end_flush();
?>

<div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->

          
                <h2 class="active">Log In as Admin:</h2>
                

            

          
      
          
          <!-- Login Form -->
          <form action="login.php" method="POST">
            
            <input type="text" minlength="3" required  class="fadeIn third" name="name" placeholder="name">


            <input type="password" minlength="3" required  class="fadeIn third" name="password" placeholder="password" >
           
            
            <button type="submit" name="login" class="fadeIn fourth" >Log In</button>
            
          </form>
      
          
        </div>
      </div>




  <?php  } include 'shared/script.php';?>

