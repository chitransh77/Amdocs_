<?php 
session_start();

$result=$_SESSION['name'];
$password=$_SESSION['password'];

?>

<!DOCTYPE html>
<html>
<head>
<title>User Info</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <style>
        #b :hover {
  background-color: rgba(212, 89, 89, 0.9); 
              transition-duration: 0.4s;
  color: white;
}
   .jumbotron.jumbotron
        {
            background-color: #6f42c2;
            height: 70px;
           
        }
       
        .nav-link
        {
            color:white;
        }
        .nav-link:hover{
            color:#1c1b1b;
        }.nav
        {
            padding:15px;
            
            
            
        }
        .cat
        {
            display:float;
            float:left;
            height:65px;
            width:40;
            position:relative;
            left:20px;
            top:4px;
            border-radius: 80px;
            margin-right: 20px;
            
            
        }
        #corona
        {
            display:grid;
            grid-template-columns: 70% 30%;
            
            
        }
        .second
        {
            display:grid;
            grid-template-columns: 70% 30%;
            margin-top:;
            
            
        }
        .third
        {
            display:grid;
            grid-template-columns: 33% 33% 33%;
            grid-template-rows: repeat(2,1f);
            grid-row-gap: 25px;
            align-items: flex-start;
            
        }
 .ml-1 {
  margin-left: ($spacer * 5) ;
     
}
    </style>
        
    
</head>
<body>
  <?php
    header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header("Connection: close");
?>
    
    <div style="position:sticky">
    <div class="jumbotron jumbotron-fluid">
    <img class="cat" class="img-responsive" src="doodles/cat.jpg">
  <div class="container-fluid">
    <nav class="nav  ">
  <a class="nav-link active nav-fill" href="mainpage.php">Home</a>
  <a class="nav-link" href="AfterUpdate.php">Profile</a>
  <a class="nav-link" href="table.php">Medical Report</a>
  <a class="btn btn-danger"  style="color:aliceblue border:0px"class="nav-link " href="Logout.php"> Logout</a>
    
    
</nav></div ></div ></div >

    
   <div class="container">
  <div class="row align-items-center">
    <div class="col">
   
    </div>
    <div style="width :100% height :50%" class="col">
          <div ><img style="margin-left:70px" src="stratoscope.jpg">
        </div>
    </div>
    <div class="col">
     
    </div>
  </div>
  
</div>
    <div style="margin-bottom: 20px; margin-top: 28px"> <h6 class="display-6"style="text-align: center ">Welcome <?php echo $result;?></h6></div>
    
  <?php include'dataset.php';
     include'connection.php';
    
mysqli_select_db($con,"registration");
  
    $query = mysqli_query($con,"SELECT id FROM user WHERE name='$result' and password='$password'");
  $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
$id = $row['id'];
    $_SESSION['ID']=$id;
      mysqli_query($con,"insert into data(connect,BP,HEART,SUGAR,TEMPERATURE,LUNG,OXYGENLEVEL ) VALUES('$id','$BPH','$HEART','$SUGAR','$TEMPERATURE','$LUNG','$OXYGENLEVEL')");
    
    ?>
    
  <div class="container">
  <div class="row">
    <div class="col col-sm-12 col-md-4">
      <img src="doodles/bp.png">
        <p style="text-align: center">Blood Pressure<br>
        <?php echo $BPH ?></p>
    </div>
    <div class="col col-sm-12 col-md-4">
      <img src="doodles/hearts.png">
        <p style="text-align: center">Heart Rate<br> <?php echo $HEART ?></p>
    </div>
    <div class="col col-sm-12 col-md-4">
       <img src="doodles/sugar2.jpg">
        <p style="text-align: center"> Sugar Level <br><?php echo $SUGAR ?></p>
    </div>
  </div>
  <div class="row">
    <div class="col col-sm-12 col-md-4">
       <img src="doodles/temperature.jpg">
        <p style="text-align: center"> Body Temperature <br> <?php echo $TEMPERATURE ?></p>
    </div>
    <div class="col col-sm-12 col-md-4">
   <img src="doodles/lungs4.jpg">
        <p style="text-align: center">Respiratory Rate <br>  <?php echo $LUNG ?></p>
    </div>
    <div class="col col-sm-12 col-md-4">
           <img src="doodles/oxygen3.jpg">
        <p style="text-align: center">Oxygen Level<br> <?php echo $OXYGENLEVEL ?> </p>
     
    </div>
  </div>
</div>  
    
    


    
    
    
    
    
    
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" ></script> <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>