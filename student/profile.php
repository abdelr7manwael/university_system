<?php include './shared/header.php';
include './general/connection.php';
include './general/functions.php';

$id = $_SESSION['id'];
if (isset($_POST['upload'])) {

    $img_type = $_FILES['image']['type'];
    $img_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $location = '../../project/assets/img/uploaded/';
    move_uploaded_file($tmp_name, $location . $img_name);
    

    $update = "UPDATE students SET stu_image= '$img_name' where id= $id ";
    $u = mysqli_query($conn, $update);

    if ($update && $img_name) {
        echo " <div class='alert text-center w-50 m-auto alert-success'>
        <h6> addition process is true</h6>
        </div>";
    } else {
        echo " <div class='alert text-center w-50 m-auto alert-danger'>
        <h6> addition process is false <br> plaese choose photo first</h6>
        </div>";
    }
}

$select = "SELECT * FROM `students` WHERE id = $id";
$s = mysqli_query($conn, $select);

$row = mysqli_fetch_assoc($s);




?>

<div class="">

    <div class="fadeInDown  father">


        <div class=" col-lg-2">


            <div class="child-pic  ">
                <form action="profile.php" method="POST" enctype="multipart/form-data">
                    <div style=" position:relative; top: 180px; left:175px;  cursor: pointer; display:flex;border-radius:50%; border:#ebebeb solid 1px; width:40px; height: 40px; color: #7f7f7f; background:whitesmoke;" calss="upload">
                        <span style=" width: 100%; margin:auto;font-size: 25px;font-weight: bold;"><i class="fas fa-upload"></i></span>
                        <input name="image" type="file" style="opacity:0;  cursor: pointer; position:absolute; top:0; left:0;-webkitiapperance:none; ">
                    </div>
                    <?php if ($row['stu_image']) : ?>
                        <img class="w-75 rounded-circle" style="cursor: pointer; max-height:190px;" src="../../project/assets/img/uploaded/<?php echo $row['stu_image'] ?>" alt="mfe4 sora">
                    <?php else : ?>
                        <img class="w-75 rounded-circle" style="cursor: pointer; max-height:190px;" src="../../project/assets/img/434px-Unknown_person.jpg" alt="mfe4 sora">
                    <?php endif; ?>

                    <button name="upload" class="btn btn-outline-success">upload </button>
                </form>




                <h3 class="mt-2 text-dark fw-bold  "><?php echo $_SESSION['student']; ?></h3>
                <a href="/project/student/index.php"> <button class="butn">Dashboard</button> </a>
                <a href="/project/student/courses/list.php"><button class="butn">Coursers</button></a>
                <a href="/project/student/stu_msg/send.php"><button class="butn">Send Message</button></a>



            </div>
        </div>



        <div class="col-lg-5">
            <div class="child-info">

                <div class="profile-head">profile</div>

                <table class="w-100 ">
                    <tr>
                        <th>
                            <h3 class=" text-center text-dark">first Name:</h3>
                        </th>
                        <th>
                            <h4 class="text-start"><span style=" color:#5fcf80; font-size:20px; font-weight:bold"><?php echo $_SESSION['student']; ?></span></h4>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h3 class=" text-center text-dark">Last Name:</h3>
                        </th>
                        <th>
                            <h4 class="text-start"><span style="color: #5fcf80; font-size:20px; font-weight:bold">Mohammed</span></h4>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h3 class=" text-center text-dark">Student ID:</h3>
                        </th>
                        <th>
                            <h4 class="text-start"><span style="color: #5fcf80; font-size:20px; font-weight:bold"><?php echo $_SESSION['id']; ?></span></h4>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h3 class=" text-center text-dark">Stud Level: </h3>
                        </th>
                        <th>
                            <h4 class="text-start"><span style="color: #5fcf80; font-size:20px; font-weight:bold"><?php echo $_SESSION['level']; ?></span></h4>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h3 class=" text-center text-dark">Country:</h3>
                        </th>
                        <th>
                            <h4 class="text-start"><span style="color: #5fcf80; font-size:20px; font-weight:bold">Egypt </span> <img style="max-width: 30px;" src="../assets/img/egypt.png" alt=""></h4>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h3 class=" text-center text-dark"> mobile: </h3>
                        </th>
                        <th>
                            <h4 class="text-start"><span style="color: #5fcf80; font-size:20px; font-weight:bold"> 01005060639 </span></h4>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h3 class=" text-center text-dark"> Specialty: </h3>
                        </th>
                        <th>
                            <h3 class="text-start" >
                                <spa n style="color: #5fcf80; font-size:20px; font-weight:bold"> Computer Science </spa>
                            </h3>
                        </th>
                    </tr>
                </table>












            </div>

        </div>


    </div>
</div>

<?php include './shared/script.php'; ?>