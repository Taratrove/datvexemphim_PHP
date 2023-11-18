<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sắp xếp mảng</title>
</head>
<body>
<?php
function taoMang($input) {
    $arr = explode(',', $input);
    return $arr;
}

function xuatMang($mang) {
    return implode(",", $mang);
}

function sapXepTang($mang) {
    $n = count($mang);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($mang[$j] > $mang[$j + 1]) {
                $tam = $mang[$j];
                $mang[$j] = $mang[$j + 1];
                $mang[$j + 1] = $tam;
            }
        }
    }
    return $mang;
}

function sapXepGiam($mang) {
    $n = count($mang);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($mang[$j] < $mang[$j + 1]) {
                $tam = $mang[$j];
                $mang[$j] = $mang[$j + 1];
                $mang[$j + 1] = $tam;
            }
        }
    }
    return $mang;
}

$msg = '';
$str_arr = $sxt = $sxg = '';
if (isset($_POST['tinh'])) {
    $nhap = $_POST['arr'];

    if (!empty($nhap)) {
        $arr = taoMang($nhap);
        $str_arr = xuatMang($arr);
        $sxt = xuatMang(sapXepTang($arr));
        $sxg = xuatMang(sapXepGiam($arr));
    } else {
        $msg = "Vui lòng nhập dãy số.";
    }
}
?>


    <form action="" method="post">
        <table align="center" bgcolor="#ccd9cf">
            <tr>
                <td align="center" colspan="2" bgcolor="#018b8e">
                    <h1>SẮP XẾP MẢNG</h1>
                </td>
            </tr>
            <tr>
                <td>Nhập mảng:</td>
                <td>
                    <input type="text" name="arr" value="<?php echo $str_arr?>"><a href="" style="color:red;text-decoration: none;">(*)</a>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input style="background:white" type="submit" name="tinh" value="Sắp xếp tăng/giảm">
                </td>
            </tr>
            <tr>
                <td style="color:red">Sau khi sắp xếp</td>
            </tr>
            <tr>
                <td>Sắp xếp tăng:</td>
                <td>
                    <input type="text" name="sxt" style="background-color: #01d5da; width: 150px" readonly
                           value="<?php if (isset($sxt)) echo $sxt; ?>">
                </td>
            </tr>
            <tr>
                <td>Sắp xếp giảm:</td>
                <td>
                    <input type="text" name="sxg" style="background-color: #01d5da; width: 150px" readonly
                           value="<?php if (isset($sxg)) echo $sxg; ?>">
                </td>
            </tr>
            <tr>
            <td colspan="2" align="center">
                <span style="color:red;font-weight:bold">(*)</span>Các số được nhập cách nhau bởi dấu phầy (,)
            </td>
        </tr>
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
