<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $COL_NO_2=$_POST['prnno'];
    $COL_NO_3=$_POST['name'];
    $COL_NO_4=$_POST['fy'];
    $COL_NO_5=$_POST['sy'];
    $COL_NO_6=$_POST['ty'];
    $COL_NO_7=$_POST['be'];
    $COL_NO_8=$_POST['glancing'];

    $sql="insert into `student_data`(srno,prnno,name,fy,sy,ty,be,glancing)
      values('$srno','$COL_NO_2','$COL_NO_3','$COL_NO_4','$COL_NO_5','$COL_NO_6','$COL_NO_7','$COL_NO_8')";
    $result=mysqli_query($con,$sql);
    if($result){
      header('location:17-21.php');
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
      <div class="carousel-item active ">
        <img src="666.jfif" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block" style="top:100px; color:white">
        <form width="150px" method="post" class="container">
          <h1>Add Data</h1><br><br><br>
          <div class="form-group col-md-6">
            <label for="name">PRN NO</label>
            <input type="text" class="form-control" name="prnno" placeholder="RBT">
            </div>
          <div class="form-group col-md-6">
            <label for="subjectmarks">NAME</label>
            <input type="text" class="form-control" name="name" placeholder="CGPA">
          </div>
          <div class="form-group col-md-6">
            <label for="subjectmarks">FY</label>
            <input type="number" class="form-control" name="fy" placeholder="CGPA">
          </div>
          <div class="form-group col-md-6">
            <label for="subjectmarks">SY</label>
            <input type="number" class="form-control" name="sy" placeholder="CGPA">
          </div>
          <div class="form-group col-md-6">
            <label for="subjectmarks">TY</label>
            <input type="number" class="form-control" name="ty" placeholder="CGPA">
          </div>
          <div class="form-group col-md-6">
            <label for="subjectmarks">BE</label>
            <input type="number" class="form-control" name="be" placeholder="CGPA">
          </div>
          <div class="form-group col-md-6">
            <label for="subjectmarks">GLANCING</label>
            <input type="text" class="form-control" name="glancing" placeholder="Passing Type">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        </div>
      </div>
  </div>
</div>
</body>
</html>





