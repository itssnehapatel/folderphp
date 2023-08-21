<!doctype html>
<html>
    <head>destructor</head>
    <body>
        <?php
class A
    {
 
        function __construct()
        {
            echo "<br> constructor, ";
            $this->name = "class obj ";
        }
 
        function __destruct()
        {
            echo "<br> destroy " . $this->name . "\n";
        }
    }
$obj = new A();
 
?>
</body>
</html>