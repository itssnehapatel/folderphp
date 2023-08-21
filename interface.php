<!DOCTYPE html>
<html>
<body>

<?php
interface A{
  public function display();
}

class B implements A
 {
  public function display() 
  {
    echo "interface class";
  }
}

$obj = new b();
$obj->display();
?>
 
</body>
</html>
