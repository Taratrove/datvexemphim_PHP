<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phát sinh mảng và tính toán</title>
</head>
<body>
<?php
function taoMang($soPhanTu) {
    $mang = array();
    for ($i = 0; $i < $soPhanTu; $i++) {
        $mang[] = rand(0, 20);
    }
    return $mang;
}

function xuatMang($mang) {
    return implode(", ", $mang);
}

function tinhTong($mang) {
    return array_sum($mang);
}

function timMin($mang) {
    return min($mang);
}

function timMax($mang) {
    return max($mang);
}

if(isset($_POST['tinh'])){
    $nhap = $_POST['nhap'];

    if (!empty($nhap)) {
        if(is_numeric($nhap)){
            if($nhap > 0 && $nhap < 20){
                $arr = taoMang($nhap);
                $str_arr = xuatMang($arr);
                $tong = tinhTong($arr);
                $min = timMin($arr);
                $max = timMax($arr);
            }
            else
                $msg = "Nhập số trong khoảng 0 - 20.";
        }else
            $msg = "Dữ liệu không hợp lệ.";
    } else {
        $arr = $max = $min = $tong = "";
        $msg = "Vui lòng nhập số nguyên dương.";
    }
}
?>

<form action="" method="post">
    <table align="center" bgcolor="#faebd7">
        <tr>
            <td colspan="2" bgcolor="orange"><h1>Phát sinh mảng và tính toán.</h1></td>
        </tr>
        <tr>
            <td>Nhập số phần tử:</td>
            <td> <input type="text" name="nhap" value="<?php if (isset($nhap)) echo $nhap;?>"><p></p></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input style="background:yellow" type="submit" name="tinh" value="Phát sinh và tính toán">
            </td>
        </tr>
        <tr>
            <td>Mảng:</td>
            <td> <input type="text" name="arr" style="background-color: lightpink; width: 150px" readonly 
                        value="<?php if (isset($str_arr)) echo $str_arr;?>"></td>
        </tr>
        <tr>
            <td>GTNL (MAX) trong mảng:</td>
            <td> <input type="text" name="max" style="background-color: lightpink; width: 150px" readonly 
                        value="<?php if (isset($max)) echo $max;echo "";?>" ></td>
        </tr>
        <tr>
        <tr>
            <td>TTNL (MIN) trong mảng:</td>
            <td> <input type="text" name="min" style="background-color: lightpink; width: 150px" readonly 
                        value="<?php if (isset($min)) echo $min;echo "";?>" ></td>
        </tr>
        <tr>
        <tr>
            <td>Tổng mảng:</td>
            <td> <input type="number" name="tong" style="background-color: lightpink; width: 150px" readonly
                        value="<?php if (isset($tong)) echo $tong;echo "";?>" ></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                (<span style="color:red;font-weight:bold">Ghi chú:</span>Các phần tử trong mảng sẽ có giá trị từ 0 đến 20)
            </td>
        </tr>
        <tr>
        <tr>
            <th colspan="2" style="color:red">
                <?php
                    if (!empty($msg)) {     
                            echo "<p>$msg</p>";
                    }
                ?>
            </th>
        </tr>
    </table>
</form>
</body>
</html>