

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>



<?php


require 'dataset.php';






 function bph(){
if(  $BPH>120&&  $BPH<140 )
{
echo "Pre_high blood Pressure";

}
if( $BPH>90 &&  $BPH<120 )
{
echo "Normal blood pressure";

}
if( $BPH>140 )
{
echo "high blood pressure";

} }

function heart(){
if( $HEART>50 && $HEART<60)
{
echo "perfect heart beat ";

}
if( $HEART>60&&   $HEART<80)
{
echo "Normal heart beat";

}
if(   $HEART>80)
{
echo "You are at risk,heart beat high";

}
}
function lung(){
if($LUNG>12&& $LUNG<20 )
{
    echo "Awesome breath" ;
}
if($LUNG<12){
  
    echo "Low breath";}
if($LUNG>20)
{
    echo "High breath";
    
}}
function oxygenlevel(){
if($OXYGENLEVEL>94&& $OXYGENLEVEL<110  )
{
    echo "Normal Oxygen level ,fine" ;
}
if($OXYGENLEVEL<94&& $OXYGENLEVEL>89 )
{
    echo "Mild Hypoxemia" ;
}
if($OXYGENLEVEL>85&& $OXYGENLEVEL<89  )
{
    echo "Sever Hypoxemia"; }
if($OXYGENLEVEL<85  )
{
    echo "Run to hospital,emergency"; }}
function temperature(){
if( $TEMPERATURE <=96)
{
echo "Hypothermia,Emergency";

}
if( $TEMPERATURE >=97&& $TEMPERATURE <=99)
{
echo "Normal Temperature";

}
if( $TEMPERATURE >99&& $TEMPERATURE <=103)
{
echo "Fever";

}
if( $TEMPERATURE >103)
{
echo "Hyperpyrexia";

}}





function sugar(){
if(  $SUGAR>120&& $SUGAR<190)
{
echo "Normal Sugar Level";
    

}
    if(  SUGAR>190)
{
echo "Unbalanced Sugar leve;";
}}



?>

   
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Heart Rate</th>
      <th scope="col">Blood Pressure</th>
        <th scope="col">Oxygen Level</th>
        
      <th scope="col">Sugar</th>
        <th scope="col">Respiratory Rate</th>
        <th scope="col">Body Temperature</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php heart(); ?></td>
      <td><?php bph(); ?></td>
      <td><?php oxygenlevel(); ?></td>
        <td><?php sugar(); ?></td>
      <td><?php lung(); ?></td>
      <td><?php temperature(); ?></td>
        
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
         <td>mark</td>
      <td>Otto</td>
      <td>@mdo</td>
        
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >Larry the Bird</td>
      <td>@twitter</td>
         <td>mark</td>
      <td>Otto</td>
      <td>@mdo</td>
        <td>@mdo</td>
           
    </tr>
       
  </tbody>
</table>
    ?>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" ></script> <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>
</html>






</body>
</html>