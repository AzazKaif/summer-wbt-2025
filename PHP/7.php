<?php

$rows = 3;

for ($i = 1; $i <= $rows; $i++)
    {
    for ($j = 1; $j <= $i; $j++)
        {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";

for ($i = $rows; $i >= 1; $i--)
    {
    for ($j = 1; $j <= $i; $j++)
        {
        echo $j;
    }
    echo "<br>";
}

echo "<br>";

$char = 'A';
for ($i = 1; $i <= $rows; $i++)
    {
    for ($j = 1; $j <= $i; $j++)
        {
        echo $char;
        $char++;
    }
    echo "<br>";
}
?>
