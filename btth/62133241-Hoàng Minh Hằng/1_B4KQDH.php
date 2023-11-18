<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả thi đại học</title>
</head>
<body>
    <?php 
    if(isset($_GET['submit'])){
        $mathScore = $_GET['diemtoan'];
        $physicsScore = $_GET['diemly'];
        $chemistryScore = $_GET['diemhoa'];
        $cutoffScore = $_GET['diemchuan'];

        $totalScore = $mathScore + $physicsScore + $chemistryScore;

        $result = ($totalScore >= $cutoffScore) ? 'Đậu' : 'Rớt';
    }
    ?>
    <form action="" method="get">
        <table align="center">
            <tr>
                <td colspan="2">
                    <h2>Kết quả thi đại học</h2>
                </td>
            </tr>
            <tr>
                <td>Toán:</td>
                <td><input type="number" name="diemtoan" placeholder="Nhập điểm toán" required></td>
            </tr>
            <tr>
                <td>Lý:</td>
                <td><input type="number" name="diemly" placeholder="Nhập điểm lý" required></td>
            </tr>
            <tr>
                <td>Hóa:</td>
                <td><input type="number" name="diemhoa" placeholder="Nhập điểm hóa" required></td>
            </tr>
            <tr>
                <td>Điểm chuẩn:</td>
                <td><input type="number" name="diemchuan" placeholder="Nhập điểm chuẩn" required></td>
            </tr>
            <tr>
                <td>Tổng điểm:</td>
                <td><input type="number" name="tongdiem" style="background: lightpink; border: none;" readonly value="<?php echo isset($totalScore) ? $totalScore : ''; ?>"></td>
            </tr>
            <tr>
                <td>Kết quả thi:</td>
                <td><input type="text" name="ketqua" style="background: lightpink; border: none;" readonly value="<?php echo isset($result) ? $result : ''; ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Xem kết quả"></td>
            </tr>
        </table>
    </form> 
</body>
</html>