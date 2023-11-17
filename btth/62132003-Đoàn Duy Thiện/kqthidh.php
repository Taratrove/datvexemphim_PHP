<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kết quả thi đại học</title>
</head>
<body>
<?php
    if(isset($_POST['xemkq'])){
        // Khai báo biến
        $toan = $_POST['toan'];
        $ly = $_POST['ly'];
        $hoa = $_POST['hoa'];
        $dc = $_POST['dc'];
        $td = 0;
        $kqt = '';
        $msg=array();
    }
    // Xử lý khi nhấn nút "Xem kết quả"
    if (isset($_POST['xemkq'])) {
        // Kiểm tra điểm nhập vào
        if(empty($toan)){
            $msg[]="Điểm toán không được để trống.";
        }
        if ($toan <0 || $toan > 10) {
            $msg[] = "Điểm Toán phải nằm trong khoảng từ 0 đến 10.";
        }
        if(empty($ly)){
            $msg[]="Điểm lý không được để trống.";
        }
        if ($ly <0 || $ly > 10) {
            $msg[] = "Điểm Lý phải nằm trong khoảng từ 0 đến 10.";
        }
        if(empty($hoa)){
            $msg[]="Điểm hóa không được để trống.";
        }
        if ($hoa <0 || $hoa > 10) {
            $msg[] = "Điểm Hóa phải nằm trong khoảng từ 0 đến 10.";
        }

        // Nếu không có lỗi về điểm, tính tổng điểm và kết quả thi
        if (empty($msg)) {
            // Tính tổng điểm
            $td = $toan + $ly + $hoa;

            // Kiểm tra kết quả thi
            if ($td >= $dc) {
                $kqt = "Đậu";
            } else {
                $kqt = "Rớt";
            }
        }
    }
?>
<form action="" method="post">
    <table align="center" bgcolor="#ffe8fa" >
        <tr>
            <th colspan="2" bgcolor="#e64c80"><h1>Kết quả thi đại học</h1></th>
        </tr>
        <tr>
            <td>Toán:</td>
            <td> <input type="text" name="toan" value="<?php if (isset($toan)) echo $toan;?>"><p></p></td>
        </tr>
        <tr>
            <td>Lý:</td>
            <td> <input type="text" name="ly" style="width: 150px" 
                        value="<?php if (isset($ly)) echo $ly; else echo "";?>"></td>
        </tr>
        <tr>
            <td>Hóa:</td>
            <td> <input type="text" name="hoa" style="width: 150px" 
                        value="<?php if (isset($hoa)) echo $hoa;echo "";?>" ></td>
        </tr>
        <tr>
        <tr>
            <td>Điển chuẩn:</td>
            <td> <input type="text" name="dc" style="width: 150px" 
                        value="<?php if (isset($dc)) echo $dc;echo "";?>" ></td>
        </tr>
        <tr>
        <tr>
            <td>Tổng điểm:</td>
            <td> <input type="text" name="td" style="background-color: #c4f897; width: 150px" readonly
                        value="<?php if (isset($td)) echo $td;echo "";?>" ></td>
        </tr>
        <tr>
            <td>Kết quả thi:</td>
            <td> <input type="text" name="kqt" style="background-color: #c4f897; width: 150px" readonly
                        value="<?php if (isset($kqt)) echo $kqt;echo "";?>" ></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="xemkq" value="Xem kết quả">
            </td>
        </tr>
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