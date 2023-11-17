<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả phép tính</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chon = $_POST['select'];
        $s1 = $_POST['sothunhat'];
        $s2 = $_POST['sothuhai'];
        $total = 0;

        // header("Location: {$_SERVER['HTTP_REFERER']}"): dùng để quay trở lại trang đầu tiên chuyền dữ liệu
        if (!empty($chon) && is_numeric($s1) && is_numeric($s2)) {
            switch ($chon) {
                case 'Cộng':
                    $total = $s1 + $s2;
                    break;
                case 'Trừ':
                    $total = $s1 - $s2;
                    break;
                case 'Nhân':
                    $total = $s1 * $s2;
                    break;
                case 'Chia':
                    if ($s2 != 0) {
                        $total = $s1 / $s2;
                    } else {
                        // nếu số thứ 2 là 0 trở về lại trang đầu tiên
                        header("Location: {$_SERVER['HTTP_REFERER']}");
                        exit();
                    }
                    break;
            }
        } else {
            // nếu sai đk if trên quay lại trang đầu
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit();
        }
    } else {
        // không có dữ liệu truyền
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    }
    ?>

    <table colspan="2" align="center">
        <tr>
            <h2 align="center" style="color:red" >PHÉP TÍNH TRÊN HAI SỐ</h2>
        </tr>
        <tr>
            <td style="color:red">Chọn phép tính: <?php echo $chon ?><br></td>
        </tr>
        <tr>
            <td style="color:blue">Số 1: <?php echo $s1 ?><br></td>
        </tr>
        <tr>
            <td style="color:blue">Số 2: <?php echo $s2 ?><br></td>
        </tr>
        <tr>
                <td style="color:blue">Kết quả: <?php echo is_float($total) ? number_format($total, 2) : $total; ?><br></td>
        </tr>
        <tr>
            <td> <a href="javascript:window.history.back(-1);">Trở về trang trước</a></td>
        </tr>
    </table>
</body>
</html>