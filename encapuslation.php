<!doctype html>
<html>
    <head>enscapsulation use</head>
    <body>
    <?php
   class person 
   {
      private $name;
      public function setname($name)
      {
        $this->name=$name;
      }
      public function display()
      {
        echo "<br>welcome  =".$this->name;
        
      }
    
    }
    $sneha=new person();
    $sneha->setname("anshu");
    $sneha->display();
    ?>
    </body>
    </html>
