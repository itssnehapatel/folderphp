<!doctype html>
<html>
    <head>abstract</head>
    <body>
        <?php
  
abstract class A
{
    
    abstract function display();
}
class B extends A
{
    function display() 
    {
        echo "Derived class";
    }
} 

      
$b = new B;
$b->display();
?>
</body>
</html>
