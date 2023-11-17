<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập liệu</title>
</head>
<body>
    <form action="bt6_kq.php" method="post"> 
        <table align="center"> 
        <tr>
            <th colspan="2" style="color:blue"><h1>Phép tính trên 2 số</h1></th>
        </tr>
            <tr>
                <td style="color:red">Chọn phép tính:</td>
                <td><input  type="radio" name="gt" value="Cộng" >Cộng
                    <input type="radio" name="gt" value="Trừ">Trừ
                    <input type="radio" name="gt" value="Nhân">Nhân
                    <input type="radio" name="gt" value="Chia">Chia
                </td>
            </tr>
            <tr>
                <td style="color:blue">Số thứ nhất: </td>
                <td><input type="text" name="stn"></td>
            </tr>
            <tr>
                <td style="color:blue">Số thứ hai: </td>
                <td><input type="text" name="st2"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="tinh" style="background-color:#ccd9cf" value="Tính">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>