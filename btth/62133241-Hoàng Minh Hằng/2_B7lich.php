<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính năm âm lịch</title>
</head>
<body>
    <?php
        $mes='';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mang_can = array("Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm");
            $mang_chi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
            $mang_hinh = array("hoi.jpg", "ty.jpg", "suu.jpg", "dan.jpg", "mao.jpg", "thin.jpg", "ran.jpg", "ngo.jpg", "mui.jpg", "than.jpg", "dau.jpg", "tuat.jpg");
            
            if (!empty($_POST["duongl"]) && is_numeric($_POST["duongl"]) && strlen($_POST["duongl"])==4){
                $nam = $_POST["duongl"];
                $nam = $nam - 3;
                $can = $nam % 10;
                $chi = $nam % 12;
                $nam_al = $mang_can[$can] ." ". $mang_chi[$chi];
                $hinh = $mang_hinh[$chi];
            } else {
                $mes = "vui lòng nhập số có 4 chữ số, số đầu phải lơn hơn 0";
            }
        }
    ?>
    <form action="" method="post">
        <table align="center" bgcolor="#3498DB">
            <tr>
                <td colspan="3" align="center" bgcolor="#1A5276">TÍNH NĂM ÂM LỊCH</td>
            </tr>
            <tr>
                <th>Năm dương lịch</th>
                <th></th>
                <th>Năm âm lịch</th>
            </tr>
            <tr>
                <th><input type="number" name="duongl" value="<?php echo isset($_POST["duongl"]) ? $_POST["duongl"] : ""; ?>"></th>
                <th><input type="submit" name="chuyendoi" value="=>" style="background: yellow" ></th>
                <th><input type="text" name="aml" value="<?php echo isset($nam_al) ? $nam_al : ""; ?>" style="background: yellow" readonly></th>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <img width='150px' style="margin-top:10px;" src='./12congiap/<?php echo isset($hinh) ? $hinh : ""; ?>'>
                </td>
            </tr>
            <tr>
                <th colspan="3" style="color:red" align="center">
                    <?php
                        if(isset($mes)) echo $mes;
                    ?>
                </th>
            </tr>
        </table>
    </form>
</body>
</html>