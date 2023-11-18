<!DOCTYPE html>
<html>
<head>
    <title>In hóa đơn</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Thông tin hóa đơn</h1>

    <table>
        <tr>
            <th>Mã hóa đơn</th>
            <th>Ngày bán hàng</th>
            <th>Giờ vào</th>
            <th>Giờ ra</th>
            <th>Mã sản phẩm</th>
            <th>Số lượng</th>
            <th>Tổng Tiền</th>
        </tr>
        <?php
        // Kết nối đến cơ sở dữ liệu
        $conn = new mysqli('localhost', 'root', '', 'quanlycafe');

        // Kiểm tra kết nối
        if ($conn->connect_error) {
            die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
        }

        // Truy vấn dữ liệu từ bảng hoadon
        $sql = "SELECT MaHD, NgayBH, Giovao, Giora, MaSP, Soluong, Tongtien FROM hoadon";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Hiển thị thông tin hóa đơn trong bảng
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["MaHD"] . "</td>";
                echo "<td>" . $row["NgayBH"] . "</td>";
                echo "<td>" . $row["Giovao"] . "</td>";
                echo "<td>" . $row["Giora"] . "</td>";
                echo "<td>" . $row["MaSP"] . "</td>";
                echo "<td>" . $row["Soluong"] . "</td>";
                echo "<td>" . $row["Tongtien"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Không có thông tin hóa đơn.</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>