<?php
session_start();
$id=$_SESSION['ID'];
//$id=2;
?>
<!DOCTYPE html>
<html>
<head>
    
<title>Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <table class="table">
  <caption>Medical Report</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Heart</th>
      <th scope="col">Blood Pressure</th>
      <th scope="col">Respiratory Rate</th>
      <th scope="col">Oxygen Level</th>
      <th scope="col">Sugar</th>
      <th scope="col">Temperature</th>
    </tr>
  </thead>
  <tbody>
 <?php   include 'connection.php';
mysqli_select_db($con,'Registration');
     
   
   $retval = mysqli_query( $con,"SELECT BP,HEART,SUGAR,TEMPERATURE,LUNG,OXYGENLEVEL FROM data where connect= '$id'" );?><?php $a=0;
 while($row = mysqli_fetch_array($retval)){ 
    
       
     $a=$a+1;?>
     <tr>
      <th scope="row"><?php echo $a ?></th>
      <td><?php echo $row['HEART'] ?></td>
      <td><?php echo $row['BP'] ?></td>
      <td><?php echo $row['LUNG'] ?></td>
      <td><?php echo $row['OXYGENLEVEL'] ?></td>
      <td><?php echo $row['SUGAR'] ?></td>
      <td><?php echo $row['TEMPERATURE'] ?></td>
      
    </tr> <?php }  ?>    
    
  </tbody>
</table> 
    


    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
