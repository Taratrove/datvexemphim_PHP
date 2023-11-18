<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $mes='';
    if(isset($_GET['submit'])){
        $timestart = strtotime($_GET['tstart']);
        $timeend = strtotime($_GET['tend']);

        $thoigian = ($timeend - $timestart) / 3600; // Chuyển đổi thành số giờ
        $tongtien = 0;
        if($timestart >= strtotime('10:00') && $timeend <= strtotime('17:00')){
            $tongtien = $thoigian * 20000;
        }elseif($timestart >= strtotime('17:00') && $timeend <= strtotime('24:00')){
            $tongtien = $thoigian * 45000;
        }else {
            $mes="Trong giờ nghỉ";
        }
    }
    ?>
<form action="" method="get">
    <table align="center" bgcolor="#2E86C1">
        <tr>
            <td colspan="2" bgcolor="#154360">
                <h2>Tính tiền karaoke</h2>
            </td>
        </tr>
        <tr>
            <td>Giờ bắt đầu:</td>
            <td><input type="time" name="tstart" placeholder="nhập giờ bắt đầu" required></td>
        </tr>
        <tr>
            <td>Giờ kết thúc:</td>
            <td><input type="time" name="tend" placeholder="nhập giờ kết thúc" required></td>
        </tr>
        <tr>
            <td>Tiền thanh toán:</td>
            <td><input type="number" name="thanhtoan" placeholder="thanh toán" style="background-color: #5D6D7E" value="<?php echo isset($tongtien) ? $tongtien: ''; ?>" readonly>(VNĐ)</td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="tính tiền"></td>
        </tr>
        <tr>
            <th colspan="2" style="color:red">
                <?php
                    if(isset($mes)) echo $mes;
                ?>
            </th>
        </tr>
    </table>
</form>
</body>
</html>