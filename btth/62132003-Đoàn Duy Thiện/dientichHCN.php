
<?php
    if(isset($_GET['submit'])){
        if(is_numeric($_GET['cr']) && is_numeric($_GET['cd']) && $_GET['cr'] >= 0 && $_GET['cd'] >= 0) {
            if( $_GET['cr'] < $_GET['cd']){
                $cd=$_GET['cd'];
                $cr=$_GET['cr'];
                $dt=$cd*$cr;
            }else
                $msg="Chiều dài phải > chiều rộng tml à!!!";
        }else
            $msg="Du lieu khong dung! Hay nhap lai";
    }
?>

<form action="" method="get">
    <table style="background:#FFFADD">
        <tr>
            <th colspan="2" style="background:#E55604; ">Diện tích hình chữ nhật</th>
        </tr>
        <tr>
            <td>Chiều dài: </td>
            <td><input type="number" name="cd" value="<?php
                if(isset($cd))
                echo $cd;
            ?>" min="0" step="any" required></td>
        </tr>
        <tr>
            <td>Chiều rộng: </td>
            <td><input type="number" name="cr" value="<?php
                if(isset($cr))
                echo $cr;
            ?>" step="any"></td>
        </tr>
        <tr>
            <td>Diện tích </td>
            <td><input style="background:#FF6969" type="number" name="dt" disabled value="<?php
                    if(isset($dt))
                        echo $dt;
                ?>"></td>
        </tr>
        <tr>
            <td colspan="2" ><input style="margin-left:45%" type="submit" name="submit" value="tinh"></td>
        </tr>
        <tr>
        <td colspan="2">
            <?php
                    if(isset($msg))
                        echo "<p style=' color:red;'> $msg </p>";
                ?>
            </td>
        </tr>
    </table>
</form>