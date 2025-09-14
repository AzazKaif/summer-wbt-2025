<?php
echo "Q1 <br>";
$principal = 1000;
$rate = 5;
$time = 2;

$simple_interest = ($principal * $rate * $time) / 100;
echo "Simple Interest = $simple_interest <br>";
echo "-------------------------------------------------------------------<br>";
echo "Q2 <br>";
$a = 10;
$b = 20;

echo "Before Swap: a = $a, b = $b<br>";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "After Swap: a = $a, b = $b<br>";

echo "-------------------------------------------------------------------<br>";
echo "Q3 <br>";
$year = 2024;
if(($year%4 == 0 && $year%100 != 0)||($year%400 == 0))
    {
    echo "$year is a Leap Year";
}
else 
    {
    echo "$year is NOT a Leap Year<br><br>";
}

echo "<br>-------------------------------------------------------------------<br>";
echo "Q4 <br>";

$number =4;
$factorial =1;

for ($i=1; $i<=$number; $i++)
    {
    $factorial *= $i;
}
echo "Factorial of $number = $factorial<br>";

echo "-------------------------------------------------------------------<br>";
echo "Q5 <br>";

echo "Primes are:";
for($i=2; $i<=50; $i++)
    {
    $isPrime = true;
    for($j=2; $j<=sqrt($i); $j++)
        {
        if ($i%$j == 0) {
            $isPrime = false;
            break;
        }
    }
    if($isPrime)
        {
        echo $i . " ";
    }
}


echo "<br>-------------------------------------------------------------------<br>";

echo "Q6 <br> #Pattern 1<br>";
for($i = 5; $i>=1; $i--)
    {
    for($j = 1; $j <= $i; $j++)
        {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";


echo "#Pattern 2<br>";
for($i = 1; $i <= 5; $i++)
    {
    for($j = 1; $j <= $i; $j++)
        {
        echo $j;
    }
    echo "<br>";
}

echo "<br>";


echo "#Pattern 3<br>";
$char = 'A';
for($i = 1; $i <= 4; $i++)
    {
    for($j = 1; $j <= $i; $j++)
        {
        echo $char;
    }
    echo "<br>";
    $char++;
}

echo "<br>-------------------------------------------------------------------<br>";

?>
