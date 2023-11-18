<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm</title>
    <style>
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Tìm kiếm</h2>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["nhapmang"])) {
            $nhapmang = $_POST["nhapmang"];
            $arr = explode(",", $nhapmang);
        } else {
            echo "Vui lòng nhập vào dãy số";
        }

        if (!empty($_POST["nhapso"])) {
            $nhapso = $_POST["nhapso"];
            $KQ = tim_kiem($arr, $nhapso);
        }
    }

    function tim_kiem($mang, $gia_tri) {
        for ($i = 0; $i < count($mang); $i++) {
            if ($mang[$i] == $gia_tri) {
                return $i + 1;
            }
        }
        return -1;
    }
    ?>

    <form action="" method="post">
        <table align="center" colspan="2">
            <tr>
                <td>Nhập mảng:</td>
                <td>
                    <input type="text" name="nhapmang" value="<?php echo isset($_POST["nhapmang"]) ? $_POST["nhapmang"] : ""; ?>"><br>
                </td>
            </tr>
            <tr>
                <td>Nhập số cần tìm:</td>
                <td>
                    <input type="text" name="nhapso" value="<?php echo isset($_POST["nhapso"]) ? $_POST["nhapso"] : ""; ?>"><br>
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" name="Timkiem" style="background-color: aqua; text-align:center" value="Tìm Kiếm"><br>
                </td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td>
                    <input type="text" name="mang" readonly value="<?php echo isset($_POST["nhapmang"]) ? $_POST["nhapmang"] : ""; ?>"><br>
                </td>
            </tr>
            <tr>
                <td>Kết quả tìm được:</td>
                <td>
                    <input type="text" name="KQ" readonly style="width: 100%; background: lightpink; border: none;" 
                        value="<?php echo $KQ >= 0 ? "Số $nhapso được tìm thấy ở vị trí thứ $KQ trong mảng" : "Không tìm thấy số $nhapso trong mảng"; 
                                ?>"><br>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>