<!DOCTYPE html>
<html>
<head>
    <title>Kết quả thi đại học</title>
    <style>
        body {
            background-color: lightblue;
            
        }
        
        form {
            background-color: white;
            padding: 20px;
            width: 300px;
            margin: 0 auto;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }
        
        input[type="button"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Kết quả thi đại học</h1>

    <?php
    $error = ""; // Biến lưu trữ thông báo lỗi

    // Kiểm tra xem form đã được gửi đi chưa
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $toan = validateInput($_POST["toan"]);
        $ly = validateInput($_POST["ly"]);
        $hoa = validateInput($_POST["hoa"]);

        // Kiểm tra xem người dùng đã nhập đủ thông tin hay chưa
        if (empty($toan) || empty($ly) || empty($hoa)) {
            $error = "Vui lòng nhập đầy đủ thông tin!";
        } else {
            // Kiểm tra xem điểm nhập vào có hợp lệ hay không
            if (!is_numeric($toan) || !is_numeric($ly) || !is_numeric($hoa) || $toan < 0 || $toan > 10 || $ly < 0 || $ly > 10 || $hoa < 0 || $hoa > 10) {
                $error = "Vui lòng nhập điểm từ 0 đến 10!";
            } else {
                $tongDiem = $toan + $ly + $hoa;
                $diemChuan = 15; // Điểm chuẩn

                if ($toan === 0 || $ly === 0 || $hoa === 0 || $tongDiem < $diemChuan) {
                    $ketQua = "Rớt";
                } else {
                    $ketQua = "Đậu";
                }
            }
        }
    }

    function validateInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="toan">Toán:</label>
        <input type="text" id="toan" name="toan" required><br>

        <label for="ly">Lý:</label>
        <input type="text" id="ly" name="ly" required><br>

        <label for="hoa">Hóa:</label>
        <input type="text" id="hoa" name="hoa" required><br>

        <input type="submit" value="Xem kết quả"><br>

        <label for="tong-diem">Điêm chuẩn:</label>
        <input type="text" id="diemChuan" name="diem-chuan" value="<?php echo isset($diemChuan) ? $diemChuan : ''; ?>" readonly><br>

        <label for="tong-diem">Tổng điểm:</label>
        <input type="text" id="tong-diem" name="tong-diem" value="<?php echo isset($tongDiem) ? $tongDiem : ''; ?>" readonly><br>

        <label for="ket-qua">Kết quả thi:</label>
        <input type="text" id="ket-qua" name="ket-qua" value="<?php echo isset($ketQua) ? $ketQua : ''; ?>" readonly><br>

        <?php
        // Hiển thị thông báo lỗi nếu có
        if ($error != "") {
            echo "<p style='color: red;'>$error</p>";
        }
        ?>
    </form>
</body>
</html>