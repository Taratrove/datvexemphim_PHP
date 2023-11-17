<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền điện</title>
</head>
<body>
<?php
$error = ""; // Biến lưu trữ thông báo lỗi

// Kiểm tra xem form đã được gửi đi chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị chỉ số mới và chỉ số cũ từ form
    $chiSoMoi = $_POST["chiSoMoi"];
    $chiSoCu = $_POST["chiSoCu"];
    $tenChuHo = $_POST["tenChuHo"];
    
    // Kiểm tra xem người dùng đã nhập đủ thông tin hay chưa
    if (empty($tenChuHo) || empty($chiSoMoi) || empty($chiSoCu)) {
        $error = "Vui lòng nhập đầy đủ thông tin!";
    } else {
        // Kiểm tra xem chỉ số mới và chỉ số cũ có hợp lệ hay không
        if (!is_numeric($chiSoMoi) || !is_numeric($chiSoCu) || $chiSoMoi < $chiSoCu) {
            $error = "Chỉ số không hợp lệ!";
        } else {
            // Đơn giá tiền điện
            $donGia = 20000;
            
            // Tính số tiền thanh toán
            $soTienThanhToan = ($chiSoMoi - $chiSoCu) * $donGia;
        }
    }
}
?>
<h1>Tính tiền điện</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="tenChuHo">Tên chủ hộ:</label>
    <input type="text" id="tenChuHo" name="tenChuHo" required><br><br>
    
    <label for="chiSoCu">Chỉ số cũ:</label>
    <input type="number" id="chiSoCu" name="chiSoCu" required><br><br>
    
    <label for="chiSoMoi">Chỉ số mới:</label>
    <input type="number" id="chiSoMoi" name="chiSoMoi" required><br><br>

    <input type="submit" value="Tính"><br><br>
    
    <?php
    // Hiển thị thông báo lỗi nếu có
    if ($error != "") {
        echo "<p style='color: red;'>$error</p>";
    }
    
    // Hiển thị kết quả nếu đã tính toán
    if (isset($soTienThanhToan)) {
        echo "Tên chủ hộ: " . $tenChuHo . "<br>";
        echo "Số tiền thanh toán: " . $soTienThanhToan . " VND";
    }
    
    ?>
</form>  
</body>
</html>