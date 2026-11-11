<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
    <?php
        session_start();
        if(isset($_SESSION['dangnhap'])  && isset($_SESSION['dangnhap'] = "thanhcong")){
            header("location: trangchu.php");
        }
    ?>
</body>
</html>