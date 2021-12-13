


<?php ob_start();
 include '../shared/header.php';
include  '../general/connection.php';
include  '../general/functions.php';
// ===================================
#Select
$id = $_SESSION['id'];
$select = "SELECT registcourse.studentId,courses.name FROM `registcourse`JOIN courses WHERE registcourse.studentId=$id AND registcourse.courseId = courses.id;";
$s = mysqli_query($conn, $select);
#============================================ 



ob_end_flush();
?>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active">courses registered List </h2>


        <div class="container col-11 mt-3 justify-content-center  text-ceter">
            <table class="table text-ceter">

                <tr>

                    
                    <th class="text-center">course title</th>
                    

                </tr>

                <tr>
                    <?php foreach ($s as $data) { ?>
                        
                        <td class="text-center"><?php echo $data['name'] ?></td>
                        
                        
                </tr>
            <?php } ?>

            </table>
        </div>

    </div>
</div>



<?php include '../shared/script.php'; ?>