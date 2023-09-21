<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            require 'conn.php';
            $sql_update ="UPDATE members SET MfirstName ='$_POST[MfirstName]', Mlastname ='$_POST[Mlastname]' , Email ='$_POST[Email]' ,Mtelephone='$_POST[Mtelephone]' WHERE MemberID ='$_POST[MemberID]' ";

            $result= $conn->query($sql_update);

            if(!$result) {
            die("Error God Damn it : ". $conn->error);
            } else {

            echo "Edit Success <br>";
            header("refresh: 1; url=http://localhost/member/mainmenu.php");
            }

        ?>

    
</body>
</html>