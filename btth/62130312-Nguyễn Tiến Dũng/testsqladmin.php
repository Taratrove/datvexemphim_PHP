<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập thông tin khách hàng</title>
    
</head>
<body>
    <?php
        // Kết nối cơ sở dữ liệu
        $conn = new mysqli('localhost', 'root', '', 'testkh');

        // Kiểm tra kết nối
        if ($conn->connect_error) {
            die("Kết nối cơ sở dữ liệu thất bại: " . $conn->connect_error);
        }
        // lỗi khi không có dữ liệu trong bảng thay đổi 
        // Xử lý dữ liệu khi form được gửi
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $address = $_POST["address"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];

            // Kiểm tra tính hợp lệ của dữ liệu và chèn vào cơ sở dữ liệu
            if (!empty($name) && !empty($address) && !empty($phone) && !empty($email)) {
                $sql = "INSERT INTO khachhang (name, address, phone, email) VALUES ('$name', '$address', '$phone', '$email')";

                if ($conn->query($sql) === TRUE) {
                    echo "Thêm thông tin khách hàng thành công.<br>";
                } else {
                    echo "Lỗi: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Vui lòng điền đầy đủ thông tin khách hàng.<br>";
            }
        }

        // Kiểm tra xóa dữ liệu khi nút xóa được nhấn
        if (isset($_POST['delete'])) {
            $deleteId = $_POST['deleteId'];
            $sql = "DELETE FROM khachhang WHERE stt = $deleteId";

            if ($conn->query($sql) === TRUE) {
                echo "Xóa thông tin khách hàng thành công.<br>";
            } else {
                echo "Lỗi: " . $sql . "<br>" . $conn->error;
            }
        }

        // Truy vấn danh sách khách hàng
        $sql = "SELECT * FROM khachhang";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h2>Danh sách khách hàng</h2>";
            echo "<table>";
            echo "<tr><th>STT</th><th>Tên</th><th>Địa chỉ</th><th>Số điện thoại</th><th>Email</th><th></th></tr>";

            // Hiển thị từng dòng dữ liệu
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["stt"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>
                        <form action='' method='post'>
                            <input type='hidden' name='deleteId' value='" . $row["stt"] . "'>
                            <input type='submit' name='delete' value='Xóa'>
                        </form>
                    </td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Không có khách hàng nào.<br>";
        }
 
        $conn->close();
    ?>

    <h2>Nhập thông tin khách hàng</h2>

    <form action="" method="post">
        <label for="name">Tên:</label>
        <input type="text" name="name" id="name" required><br><br>
        
        <label for="address">Địa chỉ:</label>
        <input type="text" name="address" id="address" required><br><br>
        
        <label for="phone">Số điện thoại:</label>
        <input type="text" name="phone" id="phone" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" value="Submit">
        <input type="reset" name="Reset" value="Reset" tabindex="50">
    </form>
</body>
</html>