<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phép tính</title>
</head>
<body>
    <?php
    if(isset($_GET['tinh'])){
        $s1= $_GET['sothunhat']; $s2= $_GET['sothuhai'];
        $chon= $_GET['select'];
    }
    ?>
    <form action="KQ.php" method="post">
        <table align="center">
            <tr colspan="2" >
                <h2 style="color:red" align="center">PHÉP TÍNH TRÊN HAI SỐ</h2>
            </tr>
            <tr>
                <td style="color:red">Chọn phép tính:</td>
                <td style="color:red">
                <input type="radio" name="select" value="Cộng">Cộng
                <input type="radio" name="select" value="Trừ">Trừ
                <input type="radio" name="select" value="Nhân">Nhân
                <input type="radio" name="select" value="Chia">Chia
                </td>
            
            </tr>
            <tr>
                <td style="color:blue">số thứ nhất:</td>
                <td><input type="number" step="0.01" name="sothunhat" value="số thứ nhất"><br></td>
            </tr>
            <tr>
                <td style="color:blue">số thứ hai:</td>
                <td><input type="number" step="0.01" name="sothuhai" value="số thứ hai"><br></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" name="tinh" value="tính"></td>
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