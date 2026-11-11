<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .khoi{
            border: 1px solid black;
            border-radius: 10px;
            width:200px;
            margin:20vh auto;
            background-color: antiquewhite;
            text-align: center;
        }
        
    </style>
</head>
<body>
    <div class="khoi">
        <h1>Đăng nhập</h1>
        <div style="width: 80%; margin: auto; text-align: center;" class="">
            <form action="dangnhap.php" method="POST">
                <div class="login">
                    <p><b>Tên đăng nhập</b></p>
                    <input type="text" name="tenDangNhap" id="">
                </div>
                <div>
                    <p><b>Mật khẩu</b></p>
                    <input type="password" name="matKhau" id="">
                </div>
                <div class="">
                    <button type="submit">Dang nhap</button>
                </div>
            </form>
        </div>
    </div>
    <?php
        if(isset($_POST['tenDangNhap']) && isset($_POST['matKhau']) ){
            $tenDangNhap = $_POST['tenDangNhap'];
            $matKhau = $_POST['matKhau'];
            if($tenDangNhap == "admin" && $matKhau == "123"){
                session_start();
                $_SESSION['dangnhap'] = "thanhcong";
                header("location: trangchu.php");
            }
            else{
                echo "ten dang nhap hoac mat khau khong chinh xac";
            }
        }
    ?>
    </body>
    </body>
</body>
</html>