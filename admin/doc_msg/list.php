<?php ob_start();
 include '../shared/header.php';
include  '../general/connection.php';
include  '../general/functions.php';
// ===================================
#Select
$id = $_SESSION['id'];
$select = "SELECT * FROM doc_msg";
$s = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($s);
#============================================ 
#delete

if (isset($_GET['reply'])) {
    
    $no = $_GET['reply'];
    $edit_select = "SELECT * FROM doctors WHERE no = $no ";
    $ss = mysqli_query($conn, $edit_select);
    
    if(isset($_POST['submit'])){
        
        $msg= $_POST['admin_reply'];
        
       
        $update ="UPDATE doc_msg SET admin_reply=$msg where no = $no ";
        $u = mysqli_query($conn , $update);
        testmessage($update,"edit");


        header("location:/project/admin/doc_msg/list.php");
        
    }

    
}


  
    
    

#===========================================================
if (isset($_GET['delete'])) {
    $no = $_GET['delete'];
    $delete = "DELETE FROM doc_msg WHERE no=$no";
    $d = mysqli_query($conn, $delete);
    
    

    header("location: /project/admin/doc_msg/list.php");
}
#=====================================================



ob_end_flush();
?>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active"> doctors messages List </h2>


        <div class="container col-11 mt-3 justify-content-center  text-ceter">
            <table class="table text-ceter">

                <tr>

                <th class="text-center" >No.</th>
                <th class="text-center">doc_id</th>
                    
                    <th class="text-center" colspan="2">msg</th>
                    <th class="text-center" colspan="2">admin_reply</th>
                    
                    <th class="text-center" colspan="2">Action</th>

                </tr>

                <tr>
                    <?php foreach ($s as $data) { ?>
                        
                        <td class="text-center" ><?php echo $data['no'] ?></td>
                        <td class="text-center" ><?php echo $data['doct_id'] ?></td>
                        <td class="text-center" colspan="2"><?php echo $data['doct_msg'] ?></td>
                        <td class="text-center" colspan="2">
                            <?php
                            
                            if($data['admin_reply']):
                            echo $data['admin_reply'];
                            else:
                                echo "will reply soon.. ";
                            endif;

                             ?>
                            </td>
                        
                            <td class="text-center"> <a href="send.php?reply=<?php echo $data['no'] ?>"  class="btn  text-dark btn-outline-success ">REPLY</a></td>
                            <td class="text-center"> <a href="list.php?delete=<?php echo $data['no'] ?>" class="btn text-dark  btn-outline-danger ">delete</a></td>
                        

                </tr>
            <?php } ?>

            </table>
        </div>

    </div>
</div>



<?php include '../shared/script.php'; ?>