<?php ob_start();
 include '../shared/header.php';
include  '../general/connection.php';
include  '../general/functions.php';
// ===================================
#Select
$id = $_SESSION['id'];
$select = "SELECT * FROM doc_msg where doct_id = $id";
$s = mysqli_query($conn, $select);
#============================================ 
#delete

if (isset($_GET['delete'])) {
    $no = $_GET['delete'];
    $delete = "DELETE FROM doc_msg WHERE no=$no";
    $d = mysqli_query($conn, $delete);
    testmessage($delete,"delete");

    header("location: /project/doctor/doc_msg/list.php");
}
#=====================================================
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
        <h2 class="active">messages List </h2>


        <div class="container col-11 mt-3 justify-content-center  text-ceter">
            <table class="table text-ceter">

                <tr>

                    
                    <th class="text-center" colspan="2">ur msg</th>
                    <th class="text-center" colspan="2">admin_reply</th>
                    
                    <th class="text-center">Action</th>

                </tr>

                <tr>
                    <?php foreach ($s as $data) { ?>
                       
                        <td class="text-center" colspan="2"><?php echo $data['doct_msg'] ?></td>
                        <td class="text-center" colspan="2">
                            <?php
                            if($data['admin_reply']):
                            echo $data['admin_reply'];
                            else:
                                echo "will reply soon... ";
                            endif;

                             ?>
                            </td>
                        <td class="text-center"> <a href="list.php?delete=<?php echo $data['no'] ?>" class="btn btn-outline-danger">DELETE</a></td>
                        

                </tr>
            <?php } ?>

            </table>
        </div>

    </div>
</div>



<?php include '../shared/script.php'; ?>