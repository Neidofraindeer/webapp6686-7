<?php
if(!isset($_GET['sid'])){
    header("refresh: 0; url=http://localhost/student/mainmenu.php");
}
require 'conn.php';
$sql = "SELECT * FROM members WHERE memberid ='$_GET[sid]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="editsuccess.php">
        <p>

        <label for="MemberID">รหัส</label>
        <input type="text" name="MemberID" id="MemberID" value="<?=$row['MemberID'];?>" hidden>
        <input type="text" name="MemberID" id="MemberID" value="<?=$row['MemberID'];?>" />

        </p>
        <p>

            <label for="MfirstName">ชื่อ</label>
            <input type="text" name="MfirstName" id="MfirstName" value="<?=$row['MfirstName'];?>" />

        </p>

        <p>

            <label for="Mlastname">นามสกุล</label>

            <input type="text" name="Mlastname" id="Mlastname" value="<?=$row['Mlastname'];?>" />

        </p>

        <p>

            <label for="Email">อีเมล</label>

            <input type="text" name="Email" id="Email" value="<?=$row['Email'];?>" />

        </p>

        <p>

            <label for="Mtelephone">เบอร์โทร</label>

            <input type="text" name="Mtelephone" id="Mtelephone" value="<?=$row['Mtelephone'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmenu.php'>Home</a>
    </form>
</body>

</html>
