<!DOCTYPE html>
<html>
<body>

<?php
trait A1
{
  public function A1() 
  {
    echo "trait is used to inherit similar message for all class "; 
  }
}

class B 
{
  use A1;
}

$obj = new B();
$obj->A1();
?>
 
</body>
</html>
