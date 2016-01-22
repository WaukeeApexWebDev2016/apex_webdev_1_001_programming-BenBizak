<?php

$C = "Circle";
$R = "Rectangle";
$T = "Triangle";
$Trap = "Trapazoid"; //Variables
$pi = 3.14;
// $everyShape = $C . $R . $T . $Trap; //Just messing around.

$ask = readline("|``````````````````````````````|
|          Circle or,          |
|         Rectangle or,        |
|          Triangle or,        |
|          Trapazoid:          |
|,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,|\n");
if ($ask == $C) {
  $Radius = Readline("Enter a Radius: ");
  echo "Your area is: " . $pi * $Radius ^ 2 . "\n";
  echo "Ahhhh so you want to find the area of a circle. Well that is simple take pi and multiply it to the radius-squared.\n";
}

if ($ask == $R) {
  $length = readline("Enter Length:\n");
  $width = readline("Enter Width:\n");
  echo "Your area is: " . $length * $width . "\n";
  echo "Its a simple rectangle, Length * Width and then you get your area.\n";
}
if($ask == $T) {
    $Base = readline("Enter Base:\n");
    $Height = readline("Enter Height:\n");
    echo "Your area is: " . $Base * $Height / 2 . "\n";
    echo "All you have to do to get the area of this triangle is simple. Base * Height / 2, homie.\n";
}
if ($ask == $Trap) {
 $SB = readline("Enter Short Base: \n");
 $LB = readline("Ener Long Base: \n");
 $H = readline("Enter the height: \n");
 echo "Your area is: " . (($SB + $LB) / 2) * $H . "\n";
 echo "To do this just simply add your two bases, divide them by 2 and multiply by the height of the Trapazoid. \n";
}
// if ($ask !== $everyShape) {
//   echo "LOL at least you tried, unfortunatly you are going to have to go to google for that answer. \n";
// }
//Just messing around here, you can ignore the comments.


 ?>
