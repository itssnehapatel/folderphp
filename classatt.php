<!doctype html>
<html>
    <head>></head>
    <body>
        <?php
class Car {
 
 public $comp;
 public $color = 'beige';
 public $hasSunRoof = true;

 public function hello() 
 {
   return "beep";
 }
}
$bmw = new Car ();
$mercedes = new Car ();
    

echo $mercedes -> hello();
?>
</body>
</html>
