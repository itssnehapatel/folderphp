<!doctype html>
<html>
    <head>override</head>
    <body>
        <?php

class A 
{
     
    
    function display()
     {
        echo "<br> baseclass";
    }
}
 

class B extends A 
{
     
    
    function display() 
    {
        echo "<br> \n override";
    }
}
 

$A = new A;
 

$B= new B;
 

$A->display();
 

$B->display();
?>
</body>
</html>