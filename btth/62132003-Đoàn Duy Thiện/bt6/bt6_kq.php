<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả nhập liệu</title>
</head>
<body>
<?php
    $st1 = $_POST['stn'];
    $st2 = $_POST['st2'];
    switch($_POST['gt']){
        case('Cộng'):
            $kq = $st1 + $st2;
        break;
        case('Trừ'):
            $kq = $st1 - $st2;
        break;
        case('Nhân'):
            $kq = $st1 * $st2;
        break;
        case('Chia'):
            $kq = $st1 / $st2;
        break;
    }
?>
<form action="bt6_nhaplieu.php" method="post">
    <table align="center">
        <tr>
            <th colspan="2" style="color:blue"><h1>Phép tính trên 2 số</h1></th>
        </tr>
        <tr>
            <td colspan="2" style="color:red">Phép tính đã chọn:  <?php echo $_POST['gt'];?></td>
        </tr>
        <tr>
            <td style="color:blue">Số thứ nhất: </td>
            <td><input type="text" name="stn" value="<?php echo $st1;?>"></td>
        </tr>
        <tr>
            <td style="color:blue">Số thứ hai: </td>
            <td><input type="text" name="sth" value="<?php echo $st2;?>"></td>
        </tr>
        <tr>
            <td style="color:blue">Kết quả: </td>
            <td><input type="text" name="ketqua" value="<?php echo $kq;?>"></td>
        </tr>
        <tr>
            <td><a href="javascript:window.history.back(-1)">Quay về trang trước</a></td>
        </tr>
    </table>
</form>
</body>
</html>