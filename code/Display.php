<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <style>
   .nav-link:hover{
       color:#1c1b1b;}
    .nav-link
        {
            color:white;
        }
        .navbar-brand {color:white;}
          .navbar-brand:hover,#chitransh:hover{
       color:#1c1b1b;}
        .btn-primary.custom-btn {
	background-color: rgb(106, 110, 155);
	border-color: #000;
}
    
    </style>


</head>
<body>

<nav class="navbar navbar-expand-lg" style="background-color:#622ec4">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
    <a class="navbar-brand " href="Display.php">Admin</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" style="margin-top:9px;"href="Insert.php"><h5 class="fw-normal">Insert</h5> <span class="sr-only"></span></a>
      </li>
        
      <li class="nav-item">
        <a class="nav-link" style="margin-left:12px;" href="Admin_Logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
        </li></ul>
      
  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button type="Submit" style="background-color:" id="chitransh">search</button>
    </form>
  </div>
</nav>

 <div>
 <div class="col-lg-12">
 <br><br>
 <h1 class=" font-weight-normal text-center" style="color:#000000;font-family:Snell Roundhand, cursive"> Employees Health Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Username </th>
 <th> Password </th>
 <th>Insert </th>
 <th> Update</th>
     <th> View</th>
     <th> Delete</th>

 </tr >

 <?php

 include 'connection.php'; 
     mysqli_select_db($con,"registration");


 $query = mysqli_query($con,"select name,id,password from user");

 while($res = mysqli_fetch_array($query,MYSQLI_ASSOC)){ 
 ?>
  <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['name'];  ?> </td>
 <td> <?php echo $res['password'];  ?> </td>

 <td> <button type="button" class="btn-outline-warning btn"> <a href="Insert.php?id=<?php echo $res['id']; ?>" class="text-white"> <div style="color:black">Insert</div> </a> </button> </td>
        <td> <button class="btn-outline-success btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> <div style="color:black">Update</div>  </a> </button> </td>
        <td> <button class="btn-outline-primary btn"> <a href="View1.php?id=<?php echo $res['id']; ?>" class="text-white"> <div style="color:black">View</div> </a> </button> </td>
       <td> <button class="btn-danger btn"> <a href="Delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
     

 </tr>


 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>


