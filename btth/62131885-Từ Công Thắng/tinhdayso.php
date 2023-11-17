<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Kiểm tra xem người dùng đã nhập dãy số hay chưa
        if (!empty($_POST["dayso"])) {
            // Lấy dữ liệu dãy số từ form
            $dayso = $_POST["dayso"];

            // Tách dãy số thành các phần tử riêng biệt
            $arr = explode(",", $dayso);

            // Tính tổng dãy số
            $tong = array_sum($arr);
        } else {
            // Nếu người dùng không nhập dãy số, tổng sẽ là 0
            $tong = 0;
        }
    }
    ?>
    <form action="" method="post">
        <table align="center" bgcolor="#979A9A">
            <tr>
                <td align="center" colspan="2" bgcolor="#85C1E9">Nhập và tính dãy số</td>
            </tr>
            <tr>
                <td>
                    Nhập dãy số: 
                    <input type="text" name="dayso" value="<?php echo isset($_POST["dayso"]) ? $_POST["dayso"] : ""; ?>"><br>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <input type="submit" name="tongds" value="Tính tổng dãy số"><br>
                </td>
            </tr>
            <tr>
                <td>
                    Tổng dãy số: 
                    <input type="number" name="tong" style="background-color: lightpink; width: 150px" readonly value="<?php echo $tong; ?>"><br>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>