<!DOCTYPE html>
<html >
    <head>
        <title>environment variable</title>
    </head>
    <body>
        <?php
        $arr=getenv();
        foreach ( $arr as $key=>$val )
        echo "$key=>$val";

    
        ?>    
    </body>
    </html>
