
<?php ob_start();
 include '../shared/header.php';
include  '../general/connection.php';
include  '../general/functions.php';
// ===================================
#Select

$select = "SELECT * FROM admins";
$s = mysqli_query($conn, $select);
#============================================ 
if($_SESSION['role'] == 0){
#delete

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM `admins` WHERE id=$id";
    $d = mysqli_query($conn, $delete);
    testmessage($delete,"delete");

    header("location: /project/admin/admins/list.php");
}

ob_end_flush();

?>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active">levels List </h2>


        <div class="container col-11 mt-3 justify-content-center  text-ceter">
            <table class="table text-ceter">

                <tr>

                    <th>id</th>
                    <th>year</th>
                    <th>role</th>
                    <th>Delete</th>


                    

                </tr>

                <tr>
                    <?php foreach ($s as $data) { ?>
                        <td><?php echo $data['id'] ?></td>
                        <td><?php echo $data['name'] ?></td>
                        <td><?php echo $data['role'] ?></td>
                        <td> <a href="list.php?delete=<?php echo $data['id'] ?>" class="btn btn-danger">DELETE</a></td>
                        



                </tr>
            <?php } ?>

            </table>
        </div>

    </div>
</div>



<?php }
else{
    header('location:/project');
}
 include '../shared/script.php'; ?>