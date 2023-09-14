<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo test("Red") . "\n";
        echo "<br>";
        echo test("Green") . "\n";
        echo "<br>";
        echo test("1") . "\n";

        function test($str) 
        {
        $s = substr($str, -1);
        return $s . $str . $s;
        }

    ?>
</body>
</html>