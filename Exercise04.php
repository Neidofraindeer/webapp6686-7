<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
        echo test("bbaaccaag") . "\n";
        echo "<br>";
        echo test("jjkiaaasew") . "\n";
        echo "<br>";
        echo test("JSaaakoiaa") . "\n";
        
        function test($s) 
        {
            $ctr_aa = 0;
        
            for ($i = 0; $i < strlen($s) - 1; $i++) {
                if (substr($s, $i, 2) == "aa") {
                    $ctr_aa++;
                }
            }
        
            return $ctr_aa;
        }
        
    ?>
</body>
</html>