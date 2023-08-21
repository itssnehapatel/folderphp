
<!doctype html>
<html>
    <head>constructor</head>
    <body>
        <?PHP
class vehicle
{
    function vehicle()
    {
        echo "<br> it is constructor";
    }
 
    function __construct()
    {
        echo "<br> this is pre-defined ";
    }
}
 
$obj= new vehicle();
?>
</body>
</html>