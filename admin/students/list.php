



<?php ob_start();
 include '../shared/header.php';
include  '../general/connection.php';
include  '../general/functions.php';
// ===================================
#Select

$select = "SELECT * FROM students";
$s = mysqli_query($conn, $select);
#============================================ 
#delete

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM students WHERE id=$id";
    $d = mysqli_query($conn, $delete);
    testmessage($delete,"delete");

    header("location: /project/admin/students/list.php");
}
#=====================================================
#updae OR Edit 


$name = "";
$levelid = "";
$update=false;
if (isset($_GET['edit'])) {
    $update=true;
    $id = $_GET['edit'];
    $edit_select = "SELECT * FROM students WHERE id = $id ";
    $ss = mysqli_query($conn, $edit_select);
    foreach ($ss as $row){
    $name = $row['name'];
    $levelid =$row['levelId'];
    }
    if(isset($_POST['up'])){
        $name = $_POST['name'];
        $levelid =$_POST['levelId'];

        
       
        $update ="UPDATE students SET name= '$name', levelId=$levelid where id=$id ";
        $u = mysqli_query($conn , $update);
        testmessage($update,"edit");


        header("location: /project/admin/students/list.php");
    }
}

#=====================================================
ob_end_flush();
?>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active">Students List </h2>


        <div class="container col-11 mt-3 justify-content-center  text-ceter">
            <table class="table text-ceter">

                <tr>

                    <th>id</th>
                    <th>name</th>
                    <th>level</th>
                    
                    <th>Delete</th>
                    <th>Edit</th>

                </tr>

                <tr>
                    <?php foreach ($s as $data) { ?>
                        <td><?php echo $data['id'] ?></td>
                        <td><?php echo $data['std_name'] ?></td>
                        <td><?php echo $data['levelId'] ?></td>
                        <td> <a href="list.php?delete=<?php echo $data['id'] ?>" class="btn btn-danger">DELETE</a></td>
                        <td> <a href="add.php?edit=<?php echo $data['id'] ?>" class="btn btn-success">EDIT</a></td>

                </tr>
            <?php } ?>

            </table>
        </div>

    </div>
</div>



<?php include '../shared/script.php'; ?>