<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// 1. Declare and initialize the array
$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

// 2. Print all elements
echo "All Elements:<br>";

foreach ($numbers as $number) {
    echo $number . " ";
}

echo "<br><br>";

// 3. Calculate total of all elements
$total = 0;

foreach ($numbers as $number) {
    $total += $number;
}

echo "Total of all elements = " . $total . "<br>";

// 4. Calculate total of even elements
$evenTotal = 0;

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $evenTotal += $number;
    }
}

echo "Total of even elements = " . $evenTotal . "<br>";

// 5. Calculate total of odd elements
$oddTotal = 0;

foreach ($numbers as $number) {
    if ($number % 2 != 0) {
        $oddTotal += $number;
    }
}

echo "Total of odd elements = " . $oddTotal . "<br>";

// 6. Find minimum element and its positions
$min = min($numbers);

echo "Minimum element = " . $min . "<br>";
echo "Minimum positions: ";

foreach ($numbers as $index => $number) {
    if ($number == $min) {
        echo $index . " ";
    }
}

echo "<br>";

// 7. Find maximum element and its positions
$max = max($numbers);

echo "Maximum element = " . $max . "<br>";
echo "Maximum positions: ";

foreach ($numbers as $index => $number) {
    if ($number == $max) {
        echo $index . " ";
    }
}

?>

</body>
</html>

http://localhost/fullAssementphp/one-dimensional.php