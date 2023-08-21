<!doctype html>'
<html>
    <head>overloading</head>
    <body>
        <?php
        class A
    {
       public function add(int $a,int $b)
        {
            return $a+$b;
        }
       public  function add(int $a,float $b)
        {
          return $a+$b;
        }
    }
    $obj=new A();
    echo $obj->add(4,5);
    $obj=new A();
    echo $obj->add(6,8.8);

    ?>

    </body>
</html>'