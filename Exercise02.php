<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
            var_dump(test(120, -10));
            echo "<br>";
            var_dump(test(-1, 120));
            echo "<br>";
            var_dump(test(2, 120));

            function test($temp1, $temp2) 
        {
            $isTemp1BelowZero = $temp1 < 0;
            $isTemp2Above100 = $temp2 > 100;

            $isTemp2BelowZero = $temp2 < 0;
            $isTemp1Above100 = $temp1 > 100;

            $result = ($isTemp1BelowZero && $isTemp2Above100) || ($isTemp2BelowZero && $isTemp1Above100);
    
            return $result;
        }

    ?>

</body>
</html>