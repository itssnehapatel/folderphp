<!doctype html>
<html>
  <head>
</head>
<body>
  <?php
function max($x, $y, $z) {
  $m= $x;
  $m = ($x > $y)? (($x > $z)? $x : $z) : (($y > $z)? $y : $z);
  
  echo "max number among $x, $y and $z is: $m\n";
}

max(100, 50, 25);
max(50, 50, 25);
?>
</body>
</html>
