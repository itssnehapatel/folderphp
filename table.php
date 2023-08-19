<!DOCTYPE html>
<html >
    <head>
        <title>table</title>
    </head>
    <body>
        <?php
     $i=0;
     $j=0;
     for($i=1;$i<=10;$i++)
     {
        for($j=1;$j<=10;$j++)
        {
        $c=$i*$j;
        echo "table =".$c;
        }
        echo "\n";
    }
        
        ?>    
    </body>
    </html>
