<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sắp xếp mảng</title>
</head>
<body>
    <?php
        function hoan_vi(&$a, &$b) {
            $tam = $a;
            $a = $b;
            $b = $tam;
        } 

        function sap_tang($mang) {
            $n = count($mang);
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = $i + 1; $j < $n; $j++) {
                    if ($mang[$i] > $mang[$j]) {
                        hoan_vi($mang[$i], $mang[$j]);
                    }
                }
            }
            return implode(",", $mang);
        }

        function sap_giam($mang) {
            $n = count($mang);
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = $i + 1; $j < $n; $j++) {
                    if ($mang[$i] < $mang[$j]) {
                        hoan_vi($mang[$i], $mang[$j]);
                    }
                }
            }
            return implode(",", $mang);
        }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mes = '';
            if (!empty($_POST["mang"])) {
                $dayso = $_POST["mang"];
                $arr = explode(",", $dayso);
            } else {
                $mes = "Vui lòng nhập vào dãy số";
            }
            
            if (!empty($_POST["mang"])) {
                $mangt = sap_tang($arr);
                $mangg = sap_giam($arr);
            }
        }
    ?>

    <form action="" method="post">
        <table align="center" bgcolor="#5984A0">
            <tr>
                <td align="center" bgcolor="#05588F">Sắp xếp mảng</td>
            </tr>
            <tr>
                <td>Nhập mảng:<input type="text" name="mang" 
                        value="<?php echo isset($_POST["mang"]) ? $_POST["mang"]: ""; ?>"></td>
            </tr>
            <tr>
                <th colspan="2">
                    <input type="submit" name="submit" value="Sắp xếp tăng/giảm">
                </th>
            </tr>
            <tr>
                <td style="color: red">Sau khi sắp xếp:</td>
            </tr>
            <tr>
                <td>Tăng dần:<input type="text" name="tang" style="background: lightpink; border: none;" 
                        value="<?php echo isset($mangt) ? $mangt: ""; ?>" readonly></td>
            </tr>
            <tr>
                <td>Giảm dần:<input type="text" name="giam" style="background: lightpink; border: none;" 
                        value="<?php echo isset($mangg) ? $mangg: ""; ?>" readonly></td>
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