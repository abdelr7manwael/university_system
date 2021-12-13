

<?php ob_start();
   include '../shared/header.php';
    include  '../general/connection.php'; 
    include  '../general/functions.php';
    
#Insert

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $insert = "INSERT INTO courses VALUES(NULL,'$name')";
    $i = mysqli_query($conn, $insert);
    testmessage($i,"addition");
}

# update 
$name = "";
$update=false;
if (isset($_GET['edit'])) {
    $update=true;
    $id = $_GET['edit'];
    $edit_select = "SELECT * FROM courses WHERE id = $id ";
    $ss = mysqli_query($conn, $edit_select);
    foreach ($ss as $row){
    $name = $row['name'];
    }
    if(isset($_POST['up'])){
        $name = $_POST['name'];
        
       
        $update ="UPDATE courses SET name= '$name' where id=$id ";
        $u = mysqli_query($conn , $update);
        testmessage($update,"edit");

        header("location: /project/admin/courses/list.php");
    }
}

ob_end_flush();
    ?>





    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->

          <?php if($update):?>
            <h2 class="active"> update course's data </h2>
            <?php else:?>
                <h2 class="active"> Add course </h2>

            <?php endif?>

          
      
          
          <!-- Login Form -->
          <form method="POST">
            
            <input type="text"  class="fadeIn third" minlength="3" required name="name" value="<?php echo $name ?>" placeholder="course Name">
            <br>
           <?php if($update):?>
            <button type="submit" name="up" class="fadeIn fourth" >UPDATE</button>
            <?php else:?>
            
            <button type="submit" name="submit" class="fadeIn fourth" >Submit</button>
            <?php endif?>
          </form>
      
          
        </div>
      </div>






<?php include '../shared/script.php';?>