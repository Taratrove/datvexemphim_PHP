<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thay thế</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST["dayso"])) {
                $dayso = $_POST["dayso"];
                $arr = explode(",", $dayso);
            } else {
                echo "Vui lòng nhập vào dãy số";
            }

            if(!empty($_POST["gtct"]) && !empty($_POST["gtt"])){
                    $cu=$_POST["gtct"];
                    $moi = $_POST["gtt"];
                    $mangm = thay_the($arr,$cu,$moi);
                
            }

        }

        function thay_the($mang,$cu,$moi){
            for($i = 0 ;$i < count($mang);$i++){
                if($mang[$i] == $cu){
                    $mang[$i] = $moi;
                }
            }
            return implode(",",$mang);
        }
    ?>
   <form action="" method="post">
        <table align="center" colspan="2" >
                <tr>
                    <td align="center" colspan="2" bgcolor="#7400A3" style="color: white">Thay thế</td>
                </tr>
                <tr>
                    <td>Nhập các phần tử: </td>
                    <td><input type="text" name="dayso" value="<?php echo isset($_POST["dayso"]) ? $_POST["dayso"] : ""; ?>"></td>
                </tr>
                <tr>
                    <td>Giá trị cần thay thế: </td>
                    <td><input type="number" name="gtct" value="<?php echo isset($_POST["gtct"]) ? $_POST["gtct"] : ""; ?>"></td>
                </tr>
                <tr>
                    <td>Giá trị thay thế: </td>
                    <td><input type="number" name="gtt" value="<?php echo isset($_POST["gtt"]) ? $_POST["gtt"] : ""; ?>"></td>
                </tr>
                <tr>
                    <th colspan="2"><input type="submit" name="thaythe"  style="text-align:center" value="thay thế"></th>
                </tr>
                <tr>
                    <td>Mảng cũ:</td>
                    <td><input type="text" name="mangc" style="width: 100%; background: lightpink; border: none;"
                             value="<?php echo isset($_POST["dayso"]) ? $_POST["dayso"] : ""; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Mảng sau khi thay thế: </td>
                    <td><input type="text" name="mangm" style="width: 100%; background: lightpink; border: none;"
                             value="<?php echo isset($mangm) ? $mangm : "";  ?>" readonly><br></td>
                </tr>
                <tr>
                    <th style="color: red " >(*) các con số cách nhau bằng dấu phẩy (,)</th>
                </tr>   
            </table>
   </form>
</body>
</html>