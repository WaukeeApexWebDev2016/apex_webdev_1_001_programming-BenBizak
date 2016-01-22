<?php
//$name = readline("Enter your name: ");

// echo "Hello: " . $name . "\n";
//
// $myNumber = 5;
// $other = 9;
//
// echo $myNumber * $other;
//
// echo "\n";
//
// echo var_dump(true and true);
// echo var_dump(true and false);
// echo var_dump(true or false);
// echo var_dump(false or false);
//
// echo var_dump(!false);
// if (true) {
//   echo "1) Yes\n";
// }
// if (false) {
//   echo "2) Yes\n";
// }

//Else if tutorial
// $username = readline("Enter your unsername: ");
//
// if ($username == "admin") {
//   echo "you are admin, all access granted!\n";
// }else if ($username == "Ben") {
//   echo "you are Ben\n";
// }
// else {
//   echo "access denied\n";
// }

//Functions
// function sub($first, $second) {
//   return $first - $second;
// }
//
// echo sub(5,1);
//
// $result = sub(10, 9);
// echo $result;
//
// echo "\nYour result: " . $result;

function superhardmath($x, $y, $z) {
  $b = $x + $y;

  return $b * $z;
}

// echo superhardmath(1, 2, 9);
// echo superhardmath(9, 9, 9);

function areaofrectangle($base, $height) {
  return $base * $height;
}
echo areaofrectangle(5, 5);
?>
