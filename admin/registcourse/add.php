


<?php ob_start();
 include '../shared/header.php';
include  '../general/connection.php';
include  '../general/functions.php';

#Insert

if (isset($_POST['submit'])) {
  $studentId = $_POST['studentId'];
  $courseId = $_POST['courseId'];
  $insert = "INSERT INTO registcourse VALUES(NULL,'$studentId',$courseId)";
  $i = mysqli_query($conn, $insert);
  testmessage($insert,"addition");
}

$stdselect = "SELECT * FROM students";
$stds = mysqli_query($conn, $stdselect);


$couselect = "SELECT *FROM courses";
$cours = mysqli_query($conn, $couselect);


ob_end_flush();
?>





<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    
      <h2 class="active"> Add regist Course </h2>

   




    <!-- Login Form -->
    <form method="POST">

      <select name="studentId" required class="fadeIn third">
        <option value="">student Name </option>
        <?php foreach ($stds as $data) { ?>
          <option value="<?php echo $data['id'] ?>"><?php echo $data['std_name'] ?></option>
        <?php } ?>
      </select>

      

      <select name="courseId" required class="fadeIn third">
        <option  value="">course Name </option>
        <?php foreach ($cours as $data) { ?>
          <option value="<?php echo $data['id'] ?>"><?php echo $data['name'] ?></option>
        <?php } ?>
      </select>


      <br>
     

        <button type="submit" name="submit" class="fadeIn fourth">Submit</button>
     
    </form>


  </div>
</div>






<?php include '../shared/script.php'; ?>