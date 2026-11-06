<?php
    // Hello World
    echo "Hello World! <br>";
    //Biến: $tên biến = giá trị;
    $hoTen = "Duck in Dark";
    $tuoi = 29;
    echo $hoTen . " " . $tuoi . "<br>";

    //strlen() độ dài chuỗi
    echo strlen($hoTen)."<br>";

    //đếm số từ
    echo str_word_count($hoTen) . "<br>";

    //Tìm kiếm ký tự trong chuỗi
    echo strpos($hoTen, "u") . "<br>";

    //Thay thế ký tự trong chuỗi
    echo str_replace("Duck", "Chicken", $hoTen) . "<br>";

    $soThuNhat = 10;
    $soThuHai = 5;

    //Phép toán
    echo $soThuNhat + $soThuHai . "<br>";
    echo $soThuNhat - $soThuHai . "<br>";
    echo $soThuNhat * $soThuHai . "<br>";
    echo $soThuNhat / $soThuHai . "<br>";
    echo $soThuNhat % $soThuHai . "<br>";

    //Toán tử gán
    $soThuNhat += $soThuHai;
    echo $soThuNhat . "<br>";

    //Toán tử so sánh : ==; !=; >; <; <=; >=; ===;
    echo $soThuNhat > $soThuHai ;
    echo "<br>";

    //Câu điều kiện
    //  if("Điều kiện"){
    //      logic
    //  } 
    //  elseif("Điều kiện") {
    //      logic
    //  } else {
    //        logic
    //  }
    // $soThu1 = 10;
    // $soThu2 = 5;
    $ketQua= $soThuNhat + $soThuHai;
    if($ketQua > 15){
        echo "Lớn hơn 15 <br>";
    } elseif($ketQua < 15){
        echo "Nhỏ hơn 15 <br>";
    }   else{
        echo "Bằng 15 <br>";
    }

    //switch-case
    $color="red";
    switch($color){
        case "red":
            echo "<br>";
            echo "IS RED";
            break;
        case "blue":
            echo "<br>";
            echo "IS BLUE";
            break;
        default:
            echo "<br>";
            echo "no color";
            break;
    }

    echo "<br>";

    //for 
    for ($i = 0; $i <= 10; $i++){
        echo $i . "<br>";
    }

    echo "<br>";

    //Mảng
    $mang = ["Anh", "Nhật Anh", "Vũ Anh"];
    //đếm phần tử
    echo count ($mang) . "<br>";
    echo "<br>";
    echo $mang[1] . "<br>";

    $mang[] = "Quang Anh";
    print_r($mang);
    echo "<br>";
    //xóa phần tử trong mảng
    unset($mang[3]);
    print_r($mang);
?>
