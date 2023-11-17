<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Payment</title>
</head>
<body>
<?php 
    if(isset($_GET['calculate'])){
        $Sodiencu = $_GET['socu'];
        $Sodienmoi = $_GET['somoi'];
        $Dongia = $_GET['dongia'];

        $Tiendienthang = $Sodienmoi - $Sodiencu;
        $Tongsotien = $Tiendienthang * $Dongia;
    } else {
        $Dongia = 20000;
    }
    ?>
    
    <form action="" method="get">
       <table align="center" bgcolor="#F5B041" >
        <tr>
            <td colspan="2" bgcolor="#F1C40F">
                <h2>Thanh toán tiền điện</h2>
            </td>
        </tr>
        <tr>
            <td >Tên chủ hộ:</td>
            <td><input type="text" name="ten" placeholder="Nhập tên chủ hộ" required></td>
        </tr>
        <tr>
            <td>Chỉ số cũ:</td>
            <td><input type="number" name="socu" placeholder="nhập chỉ số cũ" required>(Kw)</td>
        </tr>
        <tr>
            <td>Chỉ số mới:</td>
            <td><input type="number" name="somoi" placeholder="nhập chỉ số mới" required>(Kw)</td>
        </tr>
        <tr>
            <td>Đơn giá:</td>
            <td><input type="number" name="dongia" value="<?php echo $Dongia; ?>" required>(VNĐ)</td>
        </tr>
        <tr>
            <td>Số tiền thanh toán:</td>
            <td><input type="text" name="sotien" value="<?php if(isset($Tongsotien)) echo $Tongsotien; ?>" style="background: lightpink; border: none;" readonly>(VNĐ)</td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="Tính" value="Calculate"  ></td>
        </tr>
       </table>
    </form>
</body>
</html>