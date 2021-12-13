


<?php include '../shared/header.php';
include  '../general/connection.php';
include  '../general/functions.php';
// ===================================
#Select

$select = "SELECT * FROM levels";
$s = mysqli_query($conn, $select);
#============================================ 



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
                    

                </tr>

                <tr>
                    <?php foreach ($s as $data) { ?>
                        <td><?php echo $data['id'] ?></td>
                        <td><?php echo $data['year'] ?></td>

                </tr>
            <?php } ?>

            </table>
        </div>

    </div>
</div>



<?php include '../shared/script.php'; ?>