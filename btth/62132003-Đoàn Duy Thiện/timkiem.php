<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tìm kiếm</title>
</head>
<body>
<?php
function timKiem($mang, $soCanTim) {
    $viTri = array_search($soCanTim, $mang);
    return $viTri !== false ? "Đã tìm thấy $soCanTim tại vị trí thứ $viTri của mảng" : "Không tìm thấy $soCanTim trong mảng";
}

if (isset($_POST['timkiem'])) {
    $nhap = $_POST['nhap'];
    $search = $_POST['search'];

    if (!empty($nhap) && !empty($search)) {
        $mang = explode(",", $nhap); // Tách chuỗi và gán vào mảng

        $kq = timKiem($mang, $search);
        $str_arr = implode(", ", $mang);
    } else {
        $str_arr = $kq = "";
        $msg = "Vui lòng nhập mảng và số cần tìm.";
    }
}
?>

<form action="" method="post">
    <table align="center" bgcolor="#faebd7">
        <tr>
            <td colspan="2" bgcolor="orange"><h1>Tìm kiếm.</h1></td>
        </tr>
        <tr>
            <td>Nhập mảng:</td>
            <td> <input type="text" name="nhap" value="<?php if (isset($nhap)) echo $nhap;?>"><p></p></td>
        </tr>
        <tr>
            <td>Nhập số cần tìm:</td>
            <td> <input type="text" name="search" value="<?php if (isset($search)) echo $search;?>"><p></p></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input style="background:yellow" type="submit" name="timkiem" value="tìm kiếm">
            </td>
        </tr>
        <tr>
            <td>Mảng:</td>
            <td> <input type="text" name="arr" style="background-color: lightpink; width: 150px" readonly 
                        value="<?php if (isset($str_arr)) echo $str_arr;?>"></td>
        </tr>
        <tr>
            <td>Kết quả tìm kiếm:</td>
            <td> <input type="text" name="kq" style="background-color: lightpink; width: 150px;color:red" readonly value="<?php if (isset($kq)) echo $kq;echo "";?>" ></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                (Các phần tử trong mảng phải cách nhau bằng dấu ",")
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