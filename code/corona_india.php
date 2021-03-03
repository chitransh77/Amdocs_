    
<!DOCTYPE html>
<html>
<head>
<title>LiveCorona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <style>
    
     .jumbotron.jumbotron
        {
            background-color: #452083;
            height: 100px;
           
        }
       
        .nav-link
        {
            color:white;
        }
        .nav-link:hover{
            color:#1c1b1b;
        }.nav
        {
            padding:25px;
            
            
            
        }
        .cat
        {
            display:float;
            float:left;
            height:75px;
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
    <div style="position:sticky">
    <div class="jumbotron jumbotron-fluid">
    <img class="cat" class="img-responsive" src="cat.jpg">
  <div class="container-fluid">
    <nav class="nav  ">
  <a class="nav-link active nav-fill" href="home.php">Home</a>
  <a class="nav-link" href="Registration.php">New User</a>
  <a class="nav-link" href="login1.php">Login</a>
  <a class="nav-link " href="Admin.php">Admin</a>
       <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">More</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#"> world wide</a></li>
      <li><a class="dropdown-item" href="#">statewise</a></li>
      <li><a class="dropdown-item" href="#"></a>Local RegionWise</li>
      
    </ul>
</nav></div ></div ></div >
    <div style="margin-top:30px" > <h4 style="text-align:center "class ="display-4"class="font-weight-light">India Fights <i>with </i> Corona</h4></div>

    <div style="margin:50px 60px 90px 60px ">
<div class="table_responsive">
    <table class="table table-border table-striped text-center"
    <tr>
    <th class="text-capitalize">country</th>
    <th class="text-capitalize">state</th>
    <th class="text-capitalize">confirmed</th>
    <th class="text-capitalize">active</th>
    <th class="text-capitalize">recovered</th>
    <th class="text-capitalize">deaths</th>
<?php
$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);

 


$i=1;
while($i < $statescount){
    ?>
<tr>
<td>  
    <?php  echo $coranalive['statewise'][$i]['lastupdatedtime']?>
</td>
    <td>  
    <?php  echo $coranalive['statewise'][$i]['state']?>
</td>
    <td>  
    <?php  echo $coranalive['statewise'][$i]['confirmed']?>
</td>
    <td>  
    <?php  echo $coranalive['statewise'][$i]['active']?>
</td>
    <td>  
    <?php  echo $coranalive['statewise'][$i]['recovered']?>
</td>
    <td>  
    <?php  echo $coranalive['statewise'][$i]['deaths']?>
</td>
</tr>

  
<?php
  $i++;
}



?></div>
    
    



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"> <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>