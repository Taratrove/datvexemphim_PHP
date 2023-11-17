<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phát sinh mảng và tính toán</title>
</head>
<body>
        <?php
            function taomang($n) {
                $mang = [];
                for ($i = 0; $i < $n; $i++) {
                    $mang[] = rand(0, 20);
                }
                return $mang;
            }

            function xuat_mang($mang) {
                return implode(", ", $mang);
            }

            function tinh_tong($mang) {
                return array_sum($mang);
            }

            function tim_max($mang) {
                return max($mang);
            }

            function tim_min($mang) {
                return min($mang);
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $n = $_POST["nhap"];
                $mang = taomang($n);
                $mang_kq = xuat_mang($mang);
                $tong = tinh_tong($mang);
                $max = tim_max($mang);
                $min = tim_min($mang);
            }
        ?>
    <form action="" method="post">
        <table align="center">
            <tr>
                <td align="center" colspan="2" bgcolor="#D7BDE2">
                    <h2 style="color : white">Phát sinh mảng và tính toán</h2>
                </td>
            </tr>
            <tr bgcolor="#9B59B6 ">
                <td>Nhập số phần tử: </td>
                <td><input type="number" name="nhap" value="<?php echo isset($_POST["nhap"]) ? $_POST["nhap"] : ""; ?>"></td>
            </tr>
            <tr align="center" bgcolor="#9B59B6 ">
                <td colspan="2"><input type="submit" name="submit" value="Phát sinh và tính toàn" style="text-align: center;"></td>
            </tr>   
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                <tr>
                    <td>Mảng: </td>
                    <td><input type="text" name="dayso" value="<?php echo $mang_kq; ?>" style="background: lightpink; border: none; width: 100%;" readonly></td>
                </tr>
                <tr>
                    <td>GTLN (MAX) trong mảng: </td>
                    <td><input type="number" name="max" value="<?php echo $max; ?>" style="background: lightpink; border: none;" readonly></td>
                </tr>
                <tr>
                    <td>TTLN (MIN) trong mảng: </td>
                    <td><input type="number" name="min" value="<?php echo $min; ?>" style="background: lightpink; border: none;" readonly></td>
                </tr>
                <tr>
                    <td>Tổng mảng: </td>
                    <td><input type="number" name="tong" value="<?php echo $tong; ?>" style="background: lightpink; border: none;" readonly></td>
                </tr>
            <?php endif; ?>
            <tr>
                <td style="color: red " >Chú ý:</td>
                <td>các phần tử trong mảng sẽ có giá trị từ 0 đến 20</td>
            </tr>
        </table>
    </form>
</body>
</html>