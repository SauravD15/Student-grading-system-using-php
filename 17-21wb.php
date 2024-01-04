<?php

include 'connect.php';


?>



<!DOCTYPE html>
<html>
    <title>All Clear</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</html>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" >SOPP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="direct.php">Year<span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
  <br><br><br>
<h1 style="text-align:center;"> Data Analysis </h1>
<h4 style="text-align:center;">Batch :- 2017 - 2021</h4>
  <p style="text-align:center;">Including DSY</p>
  <h4 style="text-align:center;">All Clear </h4><br><br>

  
    <div class="container">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">SR.NO</th>
      <th scope="col">PRN NO</th>
      <th scope="col">NAME</th>
      <th scope="col">F.Y</th>
      <th scope="col">S.Y</th>
      <th scope="col">T.Y</th>
      <th scope="col">BE</th>
      <th scope="col">
      <div align="left" class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Glance  </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="17-21wb.php">All Clear</a>
          <a class="dropdown-item" href="17-21b.php">Backlog</a>
      </div>
      </th>
    </tr>
  </thead>
  <tbody>

<?php

$sql="SELECT * FROM `student_data` WHERE `sy` != 0 AND `ty` != 0 AND `be` != 0";
$result=mysqli_query($con,$sql);
$run= mysqli_query($con,$sql);
$count= mysqli_num_rows($run);
echo "No. of Students=$count";
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $COL_NO_1=$row['srno'];
        $COL_NO_2=$row['prnno'];
        $COL_NO_3=$row['name'];
        $COL_NO_4=$row['fy'];
        $COL_NO_5=$row['sy'];
        $COL_NO_6=$row['ty'];
        $COL_NO_7=$row['be'];
        $COL_NO_8=$row['glancing'];
        echo '<tr>
        <th scope="row">'.$COL_NO_1.'</th>
        <td>'.$COL_NO_2.'</td>
        <td>'.$COL_NO_3.'</td>
        <td>'.$COL_NO_4.'</td>
        <td>'.$COL_NO_5.'</td>
        <td>'.$COL_NO_6.'</td>
        <td>'.$COL_NO_7.'</td>
        <td>'.$COL_NO_8.'</td>
        </tr>';}
    }
?>   
  
  
  </tbody>
</table>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>