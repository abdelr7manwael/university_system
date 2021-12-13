
  
<?php  ob_start();
   include '../shared/header.php';


include '../general/connection.php';
include '../general/functions.php';


if($_SESSION['role'] == 0){
 
   if(isset($_POST['add'])){
   
      $name = $_POST['name'] ;
     $password = $_POST['password'];
     $role = $_POST['role'];
     
     
     $insert = "INSERT INTO  `admins` VALUES(NULL,'$name','$password',$role)";
     $s = mysqli_query($conn,$insert);
     testmessage($insert,"addition");
     
     
     
    }
    
    

    ob_end_flush();

    

?>

<div class="wrapper fadeInDown">
<div id="formContent">
  <!-- Tabs Titles -->

  
        <h2 class="active">add admin page</h2>

    

  

  
  <!-- Login Form -->
  <form action="add.php" method="POST">
    
    <input type="text" minlength="3"  class="fadeIn third" name="name" placeholder="name" required>


    <input type="password" minlength="3" required  class="fadeIn third" name="password" placeholder="password" >

    <div aria-required="" class="d-flex w-25 m-auto fadeIn third">
    <input type="radio" class="role" name="role" value="0">All Access
    <input type="radio" class="role" name="role" value="1">Semi Access 
    
    </div>
    
    

   
    

    <button type="submit" name="add" class="fadeIn fourth" >Add admin</button>
    
  </form>

  
</div>
</div>




<?php }else{
    header('location:/project/admin');
}?>

<script>


<?php include '../shared/script.php';?>

