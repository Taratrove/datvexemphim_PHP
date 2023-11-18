<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tính tiền Karaoke</title>
</head>
<body>
<?php
if (isset($_POST['tinh'])) {
    $gkt = $_POST['gkt'];
    $dg1 = 20000; // Đơn giá từ 10h đến 17h
    $dg2 = 45000; // Đơn giá từ 17h đến 24h
    $gbd = $_POST['gbd'];
    $ttt = 0;
    $msg = array();

    if (is_numeric($gbd) && is_numeric($gkt)) {
        $gbd = floatval($gbd);
        $gkt = floatval($gkt);

        if ($gbd >= 10 && $gbd < 24 && $gkt > 10 && $gkt <= 24) {
            if ($gkt > $gbd) {
                $soGioSuDung = $gkt - $gbd;

                if ($gbd >= 10 && $gbd <= 17 && $gkt <= 17) {
                    $ttt = $soGioSuDung * $dg1;
                } elseif ($gbd >= 10 && $gbd <= 17 && $gkt > 17) {
                    $gioTruoc17h = 17 - $gbd;
                    $gioSau17h = $gkt - 17;
                    $ttt = ($gioTruoc17h * $dg1) + ($gioSau17h * $dg2);
                } elseif ($gbd > 17 && $gkt > 17 ) {
                    $ttt = $soGioSuDung * $dg2;
                }

                $msg[] = "Tính tiền thành công!";
            } else {
                $msg[] = "Giờ kết thúc phải lớn hơn giờ bắt đầu.";
            }
        } else {
            $msg[] = "Karaoke không hoạt động trong thời gian $gbd h đến $gkt h.";
        }
    } else {
        $msg[] = "Phải nhập đúng số cho giờ bắt đầu và giờ kết thúc.";
    }
}
?>

<form action="" method="post">
    <table align="center" bgcolor="#2d9598">
        <tr>
            <td colspan="2" bgcolor="#018b8e"><h1>Tính tiền Karaoke</h1></td>
        </tr>
        <tr>
            <td>Giờ bắt đầu:</td>
            <td> <input type="text" name="gbd" style="background-color:#ffe8fa" value="<?php if (isset($gbd)) echo $gbd;?>">(h)</td>
        </tr>
        <tr>
            <td>Giờ kết thúc:</td>
            <td> <input type="text" name="gkt" style="width: 150px; background-color:#ffe8fa" 
                        value="<?php if (isset($gkt)) echo $gkt; else echo "";?>">(h)</td>
        </tr>
        <tr>
            <td>Tiền thanh toán:</td>
            <td> <input type="number" name="ttt" style="background-color: #c4f897; width: 150px" readonly
                        value="<?php if (isset($ttt)) echo $ttt;echo "";?>" >(VND)</td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="tinh" style="background-color:#ccd9cf" value="Tính tiền">
            </td>
        </tr>
        <tr>
        <tr>
            <th colspan="2" style="color:red">
                <?php
                    if (!empty($msg)) {
                        foreach ($msg as $msg) {
                            echo "<p>$msg</p>";
                        }
                    }
                ?>
            </th>
        </tr>
    </table>
</form>
</body>
</html>