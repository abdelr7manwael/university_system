

<?php ob_start();
 include '../shared/header.php';
include  '../general/connection.php';
include  '../general/functions.php';
// ===================================
#Select

$select = "SELECT coursedr.id , doctors.doc_name, courses.name FROM `coursedr` JOIN doctors JOIN courses WHERE doctorId = doctors.id AND courseId = courses.id;";
$s = mysqli_query($conn, $select);


#============================================ 
#delete

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM coursedr WHERE id=$id";
    $d = mysqli_query($conn, $delete);
    testmessage($delete,"delete");

    header("location: /project/admin/coursedr/list.php");
}
#=====================================================
#updae OR Edit 




#=====================================================
ob_end_flush();
?>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active">coursedr List </h2>


        <div class="container col-11 mt-3 justify-content-center  text-ceter">
            <table class="table text-ceter">

                <tr>

                    <th>id</th>
                    <th>Doctor name</th>
                    <th>course title</th>
                    
                    <th>Delete</th>
                    

                </tr>

                <tr>
                    <?php foreach ($s as $data) { ?>
                        <td><?php echo $data['id'] ?></td>
                        <td><?php echo $data['doc_name'] ?></td>
                        <td><?php echo $data['name'] ?></td>
                        <td> <a href="list.php?delete=<?php echo $data['id'] ?>" class="btn btn-danger">DELETE</a></td>

                </tr>
            <?php } ?>

            </table>
        </div>

    </div>
</div>



<?php include '../shared/script.php'; ?>