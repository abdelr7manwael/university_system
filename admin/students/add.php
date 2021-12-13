



<?php ob_start(); 
  include '../shared/header.php';
    include  '../general/connection.php';
    include  '../general/functions.php'; 
    
#Insert

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password =$_POST['password'];
    $levelid =$_POST['levelId'];
    $insert = "INSERT INTO students VALUES(NULL,'$name',$password ,$levelid)";
    $i = mysqli_query($conn, $insert);
    testmessage($insert,"addition");
    
}

# update 
$name = "";
$levelid = "";
$update=false;
if (isset($_GET['edit'])) {
    $update=true;
    $id = $_GET['edit'];
    $edit_select = "SELECT * FROM students WHERE id = $id ";
    $ss = mysqli_query($conn, $edit_select);
    foreach ($ss as $row){
    $name = $row['std_name'];
    $levelid =$row['levelId'];
    }
    if(isset($_POST['up'])){
        $name = $_POST['name'];
        $levelid =$_POST['levelId'];

        
       
        $update ="UPDATE students SET std_name= '$name', levelId=$levelid where id=$id ";
        $u = mysqli_query($conn , $update);
        testmessage($update,"edit");

        header("location: /project/admin/students/list.php");
    }
}


ob_end_flush();
    ?>





    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->

          <?php if($update):?>
            <h2 class="active"> update Students's data </h2>
            <?php else:?>
                <h2 class="active"> Add Student </h2>

            <?php endif?>

          
      
          
          <!-- Login Form -->
          <form method="POST">
            
            <input type="text"  class="fadeIn third" minlength="3" required name="name" value="<?php echo $name ?>" placeholder="Student name">
            <input type="text" class="fadeIn third" minlength="1" required name="levelId" value="<?php echo $levelid ?>" placeholder="student level">
            <br>
           <?php if($update):?>
            <button type="submit" name="up" class="fadeIn fourth" >UPDATE</button>
            <?php else:?>
              <input type="password" minlength="3" required  class="fadeIn third" name="password" placeholder="password" >
            
            <button type="submit" name="submit" class="fadeIn fourth" >Submit</button>
            <?php endif?>
          </form>
      
          
        </div>
      </div>






<?php include '../shared/script.php';?>