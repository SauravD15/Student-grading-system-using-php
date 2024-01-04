<?php

include 'connect.php';
$COL_NO_2=$_GET['updateprnno'];
if(isset($_POST['submit'])){
    $COL_NO_2=$_POST['prnno'];
    $COL_NO_3=$_POST['name'];
    $COL_NO_4=$_POST['fy'];
    $COL_NO_5=$_POST['sy'];
    $COL_NO_6=$_POST['ty'];
    $COL_NO_7=$_POST['be'];
    $COL_NO_8=$_POST['glancing'];

    $sql="update `student_data` set prnno='$COL_NO_2',name='$COL_NO_3',fy=$COL_NO_4,sy=$COL_NO_5,ty=$COL_NO_6,be=$COL_NO_7,glancing='$COL_NO_8' where prnno=$COL_NO_2'";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:edit.php');
    }
    else{
        die(mysqli_error($con));
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="666.jfif" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block" style=" top:100px; color:black">
        <form width="150px" method="post" class="container">
          <h1>Add Data</h1><br><br><br>
          <div class="form-group">
            <label for="name">PRN NO</label>
            <input type="text" class="form-control" name="prnno" placeholder="RBT">
            </div>
          <div class="form-group">
            <label for="subjectmarks">NAME</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="subjectmarks">FY</label>
            <input type="number" class="form-control" name="fy">
          </div>
          <div class="form-group">
            <label for="subjectmarks">SY</label>
            <input type="number" class="form-control" name="sy">
          </div>
          <div class="form-group">
            <label for="subjectmarks">TY</label>
            <input type="number" class="form-control" name="ty">
          </div>
          <div class="form-group">
            <label for="subjectmarks">BE</label>
            <input type="number" class="form-control" name="be">
          </div>
          <div class="form-group">
            <label for="subjectmarks">GLANCING</label>
            <input type="text" class="form-control" name="glancing" placeholder="backlog or not">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
        </div>
      </div>
  </div>
</div>
</body>
</html>





