
<!doctype html>
<html>
  <head>inheritance</head>  
  <body>
  <?php

class A
{
  function a()
  {
    echo "<br> this is class a";
  }
}


class B extends A
{
  function b()
  {
    echo "<br> this is class b";
  }
}

$Obj = new b();
$Obj->a(); 
$Obj->b(); 
?>
</body>
</html>

