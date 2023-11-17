<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập và tính trên dãy số</title>
</head>
<body style="font-family: arial">
    
<?php
    if(isset($_GET['submit'])) {
        if(isset($_GET['ds'])) {
                $ds=explode(",",$_GET['ds']);
                $sum=array_sum($ds);
        }else
            $msg="Du lieu khong dung! Hay nhap lai";
    }
?>
<form action="" method="get">
    <table style="background:#ccd9cf">
        <tr>
            <th colspan="2" style="background:#2d9598; ">NHẬP VÀ TÍNH TRÊN DÃY SỐ</th>
        </tr>
        <tr>
            <td>Nhập dãy số</td>
            <td><input type="text" name="ds" value="<?php
                if(isset($_GET['ds']))
                echo $_GET['ds'];
            ?>" required><span style="color:red">(*)</span></td>
        </tr>
        <tr>
            <td colspan="2" ><input style="margin-left:45%;background:yellow" type="submit" name="submit" value="Tổng dãy số"></td>
        </tr>
        <tr>
            <td>Tổng dãy số</td>
            <td><input style="background:#c4f897;color:red;" type="number" name="dt" disabled value="<?php
                    if(isset($sum))
                        echo $sum;
                ?>"></td>
        </tr>
        <tr>
            <td colspan="2">
                <p>
                    <span style="color:red">(*)</span>
                    Các số được nhập cách nhau bằng dấu ","
                </p>
            </td>
        </tr>
        <tr>
        <td colspan="2">
            <?php
                    if(isset($msg))
                        echo "<p style=' color:red;'> $msg </p>";
                ?>
            </td>
        </tr>
    </table>
</form>
</body>
</html>