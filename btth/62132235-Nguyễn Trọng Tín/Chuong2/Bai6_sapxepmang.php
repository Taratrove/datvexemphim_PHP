<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sắp xếp mảng</title>
    <style type="text/css">
        table {
            background-color: #d1ded4;
        }

        table th {
            background-color: #2f9d94;
            color: white;
            width: 400px;
        }

        table tr td {
            padding: 0 10px;
        }

        table input[type="submit"] {
            background-color: white;
        }

        table input[disabled] {
            background-color: #cffcff;
        }
    </style>
</head>

<body>
<?php

function swap(&$a, &$b)
{
    $tam = $a;
    $a = $b;
    $b = $tam;
}

function sapxeptang($arr)
{
    for ($i = 0; $i < count($arr); $i++)
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] > $arr[$j]) {
                swap($arr[$i], $arr[$j]);
            }
        }
    return $arr;
}

function sapxepgiam($arr)
{
    for ($i = 0; $i < count($arr); $i++)
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] < $arr[$j]) {
                swap($arr[$i], $arr[$j]);
            }
        }
    return $arr;
}

$array = array();
$str = "";
$array = "";
$arr = "";
$tang = " ";
$giam = " ";
if (isset($_POST['arr'])) {
    $arr = $_POST['arr'];
}
if (isset($_POST['sapxep'])) {
    $str = $_POST['arr'];
    $array = explode(",", $str);
    $tang = implode(",", sapxeptang($array));
    $giam = implode(",", sapxepgiam($array));
}
?>
<form action="" method="post">
    <table>
        <tr>
            <th colspan="3" align="center">
                <h3>SẮP XẾP MẢNG</h3>
            </th>
        </tr>
        <tr>
            <td><label>Nhập mảng :</label></td>
            <td>
                <input type="text" name="arr" value="<?php echo $arr; ?>" size="20"/>
                <span style="color: red; font-weight: bold"> (*) </span>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="sapxep" value="Sắp xếp tăng/giảm "/></td>
        </tr>
        <tr style="background: #c9e7e9;">
            <td style="color: red; font-weight: bold">Sau khi sắp xếp:</td>
            <td></td>
        </tr>
        <tr style="background: #c9e7e9;">
            <td>Tăng dần:</td>
            <td><input type="text" name="tang" disabled="disabled" value="<?php echo $tang; ?>" size="20"/></td>
        </tr>
        <tr style="background: #c9e7e9;">
            <td>Giảm dần :</td>
            <td><input type="text" name="giam" disabled="disabled" value="<?php echo $giam; ?>" size="20"/></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><label><span style="color: red; font-weight: bold"> (*) </span>Các phần tử
                    trong mảng được ngăn cách bởi dấu phẩy</label></td>
        </tr>
    </table>
</form>
</body>

</html>