<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng phát sinh tính toán</title>
    <style>
        tbody tr td{
            padding: 0 10px;
        }

        input:not(.none-bg) {
            background-color: #fda9a7;
        }
    </style>
</head>

<body>
    <?php
    $mang = array();
    $mangkq = "";
    $max = "";
    $min = "";
    $tong = "";
    function tao_mang($n)
    {
        for ($i = 0; $i < $n; $i++) {
            $mang[$i] = rand(0, 20);
        }
        return $mang;
    }
    function xuat_mang($mang)
    {
        $n = count($mang);
        $chuoi = "";
        for ($i = 0; $i < $n; $i++) {
            $chuoi = implode(" ", $mang);
        }
        return $chuoi;
    }

    function tim_max($mang)
    {
        $n = count($mang);
        $max = $mang[0];
        for ($i = 0; $i < $n; $i++) {
            if ($mang[$i] > $max)
                $max = $mang[$i];
        }
        return $max;
    }

    function tim_min($mang)
    {
        $n = count($mang);
        $min = $mang[0];
        for ($i = 0; $i < $n; $i++) {
            if ($mang[$i] < $min)
                $min = $mang[$i];
        }
        return $min;
    }

    function tong_mang($mang)
    {
        $n = count($mang);
        $tong = 0;
        for ($i = 0; $i < $n; $i++) {
            $tong += $mang[$i];
        }
        return $tong;
    }

    if (isset($_POST['n'])) {
        if (is_numeric($_POST['n'])) {
            $n = $_POST['n'];
            $mang = tao_mang($n);
            $mangkq = xuat_mang($mang);
            $max = tim_max($mang);
            $min = tim_min($mang);
            $tong = tong_mang($mang);
        } else $msg = "Dữ liệu không đúng!";
    } else $n = "";

    ?>
    <form action="" method="post">
        <table>
            <tr style="background: #a70f74;">
                <th colspan="3" align="center">
                    <h3 style="text-transform: capitalize; color: white; font-size: 20px;">PHÁT SINH MẢNG VÀ TÍNH TOÁN</h3>
                </th>
            </tr>
            <tr style="background: #ffdbf5;">
                <td >Nhập số phần tử:</td>
                <td><input class="none-bg" type="text" name="n" value="<?php if (isset($n)) echo $n; ?>" size="20" /></td>
            </tr>
            <tr style="background: #ffdbf5;">
                <td></td>
                <td><input style="background-color: #faf791" type="submit" name="btnTinh" value="Phát sinh và tính toán" /></td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td><input type="text" name="mang" disabled="disabled" value="<?php echo $mangkq; ?>" size="45" /></td>
            </tr>
            <tr>
                <td>GTLN(MAX) trong mảng:</td>
                <td><input type="text" name="max" disabled="disabled" value="<?php echo $max; ?>" size="20" /></td>
            </tr>
            <tr>
                <td>GTNN(MIN) trong mảng:</td>
                <td><input type="text" name="min" disabled="disabled" value="<?php echo $min; ?>" size="20" /></td>
            </tr>
            <tr>
                <td>Tổng mảng:</td>
                <td><input type="text" name="tong" disabled="disabled" value="<?php echo $tong; ?>" size="20" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><label>(<span style="color: red;font-weight: bold;">Ghi chú:</span> Các phần tử trong mảng sẽ có giá trị từ 0 đến 20)</label></td>
            </tr>
            <tr>
                <td colspan="3" style="color: red; text-align: left;">
                    <?= (isset($msg)) ? $msg : "" ?>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>