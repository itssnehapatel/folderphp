<!DOCTYPE html>
<html>
    <head>
        <title>addition</title>
    </head>
    <body>
        <?php
        function isPalindrome($str) {
            $str = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $str));
             $str === strrev($str); 
        }
        
        $word = "madam";
        if (isPalindrome($word)) {
            echo "$word is a palindrome.";
        } else {
            echo "$word is not a palindrome.";
        }
        
        
        
       
       ?>    
    </body>
    </html>
