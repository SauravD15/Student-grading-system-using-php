<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha34-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ74/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
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
  <br><br>
<h1 style="text-align:center;"> Data Analysis </h1>
<h4 style="text-align:center;">Batch :- 2017 - 2021</h4>
  <p  style="text-align:center;">Sem - IV</p>
  <div class="container">
  <div align="left" class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Glance  </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="sem4nb.php">All Clear</a>
          <a class="dropdown-item" href="sem4b.php">Backlog</a>
      </div><br>

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">SR.NO</th>
      <th scope="col">PRN NO</th>
      <th scope="col">NAME</th>
      <th scope="col">ISE TOTAL</th>
      <th scope="col">PR</th>
      <th scope="col">ESE</th>
      <th scope="col">TOTAL</th>
      <th scope="col">GR</th>
      <th scope="col">ISE TOTAL</th>
      <th scope="col">PR</th>
      <th scope="col">ESE</th>
      <th scope="col">TOTAL</th>
      <th scope="col">GR</th>
      <th scope="col">ISE TOTAL</th>
      <th scope="col">PR</th>
      <th scope="col">ESE</th>
      <th scope="col">TOTAL</th>
      <th scope="col">GR</th>
      <th scope="col">ISE TOTAL</th>
      <th scope="col">PR</th>
      <th scope="col">ESE</th>
      <th scope="col">TOTAL</th>
      <th scope="col">GR</th>
      <th scope="col">ISE TOTAL</th>
      <th scope="col">PR</th>
      <th scope="col">ESE</th>
      <th scope="col">TOTAL</th>
      <th scope="col">GR</th>
      <th scope="col">CGPA</th>
      <th scope="col">CLASS</th>
     

    </tr>
  </thead>
  <tbody>

<?php

$sql="SELECT * FROM `iv_sem` WHERE `COL 6` >= 24 AND `COL 7` >= 40 AND `COL 11` >= 24 AND `COL 12` >= 40 AND `COL 16` >= 24 AND `COL 17` >= 40 AND `COL 21` >= 24 AND `COL 22` >= 40 AND `COL 26` >= 24 AND `COL 27` >= 40";
$result=mysqli_query($con,$sql);
$run= mysqli_query($con,$sql);
$count= mysqli_num_rows($run);
echo "No. of students=$count";
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $COL_NO_1=$row['COL 1'];
        $COL_NO_2=$row['COL 2'];
        $COL_NO_3=$row['COL 3'];
        $COL_NO_4=$row['COL 4'];
        $COL_NO_5=$row['COL 5'];
        $COL_NO_6=$row['COL 6'];
        $COL_NO_7=$row['COL 7'];
        $COL_NO_8=$row['COL 8'];
        $COL_NO_9=$row['COL 9'];
        $COL_NO_10=$row['COL 10'];
        $COL_NO_11=$row['COL 11'];
        $COL_NO_12=$row['COL 12'];
        $COL_NO_13=$row['COL 13'];
        $COL_NO_14=$row['COL 14'];
        $COL_NO_15=$row['COL 15'];
        $COL_NO_16=$row['COL 16'];
        $COL_NO_17=$row['COL 17'];
        $COL_NO_18=$row['COL 18'];
        $COL_NO_19=$row['COL 19'];
        $COL_NO_20=$row['COL 20'];
        $COL_NO_21=$row['COL 21'];
        $COL_NO_22=$row['COL 22'];
        $COL_NO_23=$row['COL 23'];
        $COL_NO_24=$row['COL 24'];
        $COL_NO_25=$row['COL 25'];
        $COL_NO_26=$row['COL 26'];
        $COL_NO_27=$row['COL 27'];
        $COL_NO_28=$row['COL 28'];
        $COL_NO_29=$row['COL 29'];
        echo
        '<tr>
        <th scope="row">'.$COL_NO_1.'</th>
        <td>'.$COL_NO_2.'</td>
        <td>'.$COL_NO_3.'</td>
        <td>'.$COL_NO_4.'</td>
        <td>'.$COL_NO_5.'</td>
        <td>'.$COL_NO_6.'</td>
        <td>'.$COL_NO_7.'</td>
        <td>'.$COL_NO_8.'</td>
        <td>'.$COL_NO_9.'</td>
        <td>'.$COL_NO_10.'</td>
        <td>'.$COL_NO_11.'</td>
        <td>'.$COL_NO_12.'</td>
        <td>'.$COL_NO_13.'</td>
        <td>'.$COL_NO_14.'</td>
        <td>'.$COL_NO_15.'</td>
        <td>'.$COL_NO_16.'</td>
        <td>'.$COL_NO_17.'</td>
        <td>'.$COL_NO_18.'</td>
        <td>'.$COL_NO_19.'</td>
        <td>'.$COL_NO_20.'</td>
        <td>'.$COL_NO_21.'</td>
        <td>'.$COL_NO_22.'</td>
        <td>'.$COL_NO_23.'</td>
        <td>'.$COL_NO_24.'</td>
        <td>'.$COL_NO_25.'</td>
        <td>'.$COL_NO_26.'</td>
        <td>'.$COL_NO_27.'</td>
        <td>'.$COL_NO_28.'</td>
        <td>'.$COL_NO_29.'</td>
        </tr>';}
    }
?>   
  
  
  </tbody>
</table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha34-qi/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha34-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF6dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha34-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
