<!doctype html>
<html>
    <head>this keyword</head>
    <body>
        <?php
class A{
  
    public $X = 9;
  
    public function display(){
        return $this->X;
    }
}
  
$obj = new A();
echo $obj->display();
  
?>
</body>
</html>