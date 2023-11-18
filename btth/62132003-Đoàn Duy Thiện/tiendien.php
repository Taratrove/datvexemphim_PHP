<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tính tiền điện</title>
</head>
<body>
<?php
    if(isset($_POST['tinh'])){
        $csc = $_POST['csc'];
        $csm = $_POST['csm'];
        $dg = 20000;
        $tch = $_POST['tch'];
        $st=0;
        $msg = array();

        if (isset($_POST['tinh'])) {
            if (empty($tch)) {
                $msg[] = "Tên chủ hộ không được để trống.";
            }
            if (empty($csc)) {
                $msg[] = "Chỉ số cũ không được để trống.";
            }
            if (empty($csm)) {
                $msg[] = "Chỉ số mới không được để trống.";
            }

            if (empty($msg)) {
                $st = ($csm - $csc) * $dg;
            }
        }
    }
?>
<form action="" method="post">
    <table align="center" bgcolor="#faebd7">
        <tr>
            <td colspan="2" bgcolor="orange"><h1>Tính tiền điện</h1></td>
        </tr>
        <tr>
            <td>Tên chủ hộ:</td>
            <td> <input type="text" name="tch" value="<?php if (isset($tch)) echo $tch;?>"><p></p></td>
        </tr>
        <tr>
            <td>Chỉ số cũ:</td>
            <td> <input type="text" name="csc" style="width: 150px" 
                        value="<?php if (isset($csc)) echo $csc; else echo "";?>">(kW)</td>
        </tr>
        <tr>
            <td>Chỉ số mới:</td>
            <td> <input type="text" name="csm" style="width: 150px" 
                        value="<?php if (isset($csm)) echo $csm;echo "";?>" >(kW)</td>
        </tr>
        <tr>
        <tr>
            <td>Đơn giá:</td>
            <td> <input type="text" name="dg" style="width: 150px" 
                        value="<?php if (isset($dg)) echo $dg;echo "";?>" >(VND)</td>
        </tr>
        <tr>
        <tr>
            <td>Số tiền thanh toán:</td>
            <td> <input type="number" name="st" style="background-color: lightpink; width: 150px" readonly
                        value="<?php if (isset($st)) echo $st;echo "";?>" >(VND)</td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="tinh" value="Tính">
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