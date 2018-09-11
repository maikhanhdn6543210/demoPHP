<?php 
echo "Hello";
$a = 5;
$b = 10;
echo "<br/>";
echo "sum a + b =  $a + $b ";

/*
    Description: divide y - x 
    Create by Khanh
    Create Date: 06/09/2018
*/
function funName($x = 1, $y = 2) {
    return $y - $x;
}
echo "<br/>";
echo funName(5, 10);
echo "<br/> no param below <br/>";
echo funName();

//Condition
$con = true;
if($con) {
    echo "True";
} else {
    echo "False";
}

//Switch Case
$var = 2;
switch ($var) {
    case 2:
        break;
    case 3:
        break;
    default:
        break;
}

for($i = 1; $i < 10; $i++) {
    echo $i;
}

echo "<br/>";

for($i = 1; $i < 40; $i++) {
    if($i % 3 == 0) {
        echo "<br/>";
        echo $i;
        echo " BA";
    } else if ($i % 5 == 0) {
        echo "<br/>";
        echo $i;
        echo " NAM";
    } else if ($i % 15 == 0) {
        echo "<br/>";
        echo $i;
        echo " Muoi Lam";
    } else {
        echo "<br/>";
        echo $i;
        echo " Khong Chia Het Cho 3, 5, 15";
    }
}

?>