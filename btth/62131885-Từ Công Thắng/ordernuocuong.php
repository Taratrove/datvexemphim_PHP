<!DOCTYPE html>
<html>
<head>
    <title>Chọn đồ uống</title>
    <style>
        .drink-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .drink-card {
            width: 200px;
            padding: 10px;
            margin: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Chọn đồ uống</h1>

    <form action="ordernuocuong.php" method="post">
        <div class="drink-container">
            <?php
            // Kết nối đến cơ sở dữ liệu
            $conn = new mysqli('localhost', 'root', '', 'quanlycafe');

            // Kiểm tra kết nối
            if ($conn->connect_error) {
                die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
            }

            // Truy vấn dữ liệu từ bảng sanpham
            $sql = "SELECT * FROM sanpham";
            $result = $conn->query($sql);

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Lặp qua các tham số POST để lưu thông tin đặt hàng vào cơ sở dữ liệu
                foreach ($_POST as $key => $value) {
                    if (strpos($key, 'quantity_') !== false) {
                        $productId = substr($key, strlen('quantity_'));
                        $quantity = intval($value);
            
                        // Insert thông tin đặt hàng vào bảng hoadon
                        $sql = "INSERT INTO hoadon (MaSP, SoLuong) VALUES ('$productId', '$quantity')";
                        $conn->query($sql);
                    }
                }
            
                // Chuyển hướng người dùng đến trang inbill.php
                header("Location: inbill.php");
                exit();
            }
            if ($result->num_rows > 0) {
                // Hiển thị danh sách các đồ uống
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="drink-card">';
                    echo '<h3>' . $row["TenSP"] . '</h3>';
                    echo '<p>Loại: ' . $row["LoaiSP"] . '</p>';
                    echo '<p>Giá: ' . $row["Gia"] . '</p>';
                    echo '<input type="number" name="quantity_' . $row["MaSP"] . '" value="0" min="0">';
                    echo '</div>';
                }
            } else {
                echo "Không có sản phẩm nào trong cơ sở dữ liệu.";
            }

            $conn->close();
            ?>
        </div>

        <button type="submit">Đặt hàng</button>
    </form>
</body>
</html>