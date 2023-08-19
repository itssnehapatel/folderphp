<!DOCTYPE html>
<html>
    <head>
        <title>fabb</title>
    </head>
    <body>

<?php
function generateFibonacci($n) {
    $fibonacciSeries = [];
    $fibonacciSeries[0] = 0;
    $fibonacciSeries[1] = 1;
    
    for ($i = 2; $i < $n; $i++) {
        $fibonacciSeries[$i] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
    }
    
    return $fibonacciSeries;
}

$length = 10;
$fibSeries = generateFibonacci($length);

echo "Fibonacci Series: ";
foreach ($fibSeries as $num) 
{
    echo "$num";
}
?>
</body>
</html>