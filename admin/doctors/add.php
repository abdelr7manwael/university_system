


<?php ob_start(); 
  include '../shared/header.php';
    include  '../general/connection.php'; 
    include  '../general/functions.php';
    
#Insert

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password =$_POST['password'];
    $insert = "INSERT INTO doctors VALUES(NULL,'$name',$password)";
    $i = mysqli_query($conn, $insert);
    testmessage($insert,"addition");
    
}

# update 
$name = "";
$update=false;
if (isset($_GET['edit'])) {
    $update=true;
    $id = $_GET['edit'];
    $edit_select = "SELECT * FROM doctors WHERE id = $id ";
    $ss = mysqli_query($conn, $edit_select);
    foreach ($ss as $row){
    $name = $row['doc_name'];
    }
    if(isset($_POST['up'])){
        $name = $_POST['name'];
        
       
        $update ="UPDATE doctors SET doc_name= '$name' where id=$id ";
        $u = mysqli_query($conn , $update);
        testmessage($update,"edit");


        header("location:/project/admin/doctors/list.php");
        
    }
}

ob_end_flush();
    ?>





    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->

          <?php if($update):?>
            <h2 class="active"> update Doctor's data </h2>
            <?php else:?>
                <h2 class="active"> Add Doctor </h2>

            <?php endif?>

          
      
          
          <!-- Login Form -->
          <form method="POST">
            
            <input type="text" minlength="3" required class="fadeIn third" name="name" value="<?php echo $name ?>" placeholder="Doctor Name">
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