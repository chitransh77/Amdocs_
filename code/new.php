


<?php 

$BPH                =rand(120,160);
$HEART              =rand(45,130);
$SUGAR              =rand(120,220);
$LUNG               =rand(9,30);
$OXYGENLEVEL        =rand(70,110);
$TEMPERATURE        =rand(92,105); 



?>


<?php


echo $TEMPERATURE ;

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
if( $HEART>60&& $HEART<80)
{
echo "Normal heart beat";

}
if(  $HEART>80)
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


