<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            var_dump(test(20, 85));
            echo "<br>";
            var_dump(test(14, 50));
            echo "<br>";
            var_dump(test(11, 45));
            echo "<br>";
            var_dump(test(25, 40));
    
            function test($x, $y) 
    {
            $isXInRange = ($x >= 20 && $x <= 50);
            $isYInRange = ($y >= 20 && $y <= 50);
    
            return ($isXInRange && !$isYInRange) || (!$isXInRange && $isYInRange);
    }
    








    ?>
</body>
</html>