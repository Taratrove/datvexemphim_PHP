<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả thi đại học</title>
</head>
<body>
    <?php 
    if(isset($_GET['submit'])){
        $ten = $_GET['ten'];
        $ho = $_GET['ho'];
        $diachi = $_GET['diachi'];
        $id = $_GET['id'];
        $conn = new mysqli('localhost', 'root', '', 'thongtinsv');
        $conn->query("INSERT INTO `sinhvien` (`ten`, `ho`, `diachi`) VALUES ('$ten','$ho','$diachi');");

    }
    ?>
    <form action="" method="get">
        <table align="center">
            <tr>
                <td colspan="2">
                    <h2>nhập thông tin sinh viên</h2
                </td>
            </tr>
            <tr>
                <td>Tên</td>
                <td><input type="text" name="ten" ></td>
            </tr>
            <tr>
                <td>ho</td>
                <td><input type="text" name="ho" ></td>
            </tr>
            <tr>
                <td>dia chi</td>
                <td><input type="text" name="diachi" ></td>
            </tr>
            <tr>
                <td>id cua lop</td>
                <td><input type="text" name="id" ></td>
            </tr>
            
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="gửi"></td>
                <td colspan="2" align="center"><input type="submit" name="submit1" value="xóa"></td>
                <td colspan="2" align="center"><input type="submit" name="submit2" value="Xem kết quả"></td>
            </tr>
        </table>
    </form> 
</body>
</html>