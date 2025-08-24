<?php
$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Area of Rectangle = $area<br>";
echo "Perimeter of Rectangle = $perimeter<br>";
echo "----------------------------------------------------------------------------------------------------------------<br>";


$amount = 2000;
$vat = $amount * 0.15;


echo "Total = " . ($amount + $vat) . "<br>";
echo "----------------------------------------------------------------------------------------------------------------<br>";


$num = 33;

if ($num % 2 == 0)
{
    echo "$num is Even";
} 

else
{
    echo "$num is Odd <br>";
}
echo "----------------------------------------------------------------------------------------------------------------<br>";


$a = 36;
$b = 17;
$c = 27;

if ($a >= $b && $a >= $c)
{
    echo "Largest number is $a";
}

elseif ($b >= $a && $b >= $c)
{
    echo "Largest number is $b";
}
else
{
    echo "Largest number is $c";
}
echo "<br>----------------------------------------------------------------------------------------------------------------<br>";


for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
echo "<br>----------------------------------------------------------------------------------------------------------------<br>";


$a = [5, 2, 10, 19];
$num = 10;

foreach ($a as $value)
{
    if ($value == $num)
       {
        echo "Found";
        exit();
    }
}
echo "not Found <br>";


?>

