<!DOCTYPE html>
<html>
<head>
    <title>Tính tiền Karaoke</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="time"],
        input[type="text"] {
            padding: 5px;
            width: 100%;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Tính tiền Karaoke</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="start_time">Giờ bắt đầu:</label>
        <input type="time" id="start_time" name="start_time" required>

        <label for="end_time">Giờ kết thúc:</label>
        <input type="time" id="end_time" name="end_time" required>

        <label for="payment">Tiền thanh toán:</label>
        <input type="text" id="payment" name="payment" readonly>

        <input type="submit" value="Tính tiền" name="calculate">
    </form>

    <?php
    if(isset($_POST['calculate'])) {
        $start_time = $_POST['start_time'];
        $end_time = $_POST['end_time'];

        // Kiểm tra giờ kết thúc phải lớn hơn giờ bắt đầu
        if(strtotime($end_time) > strtotime($start_time)) {
            $start_timestamp = strtotime($start_time);
            $end_timestamp = strtotime($end_time);

            // Tính số giờ sử dụng
            $hours_used = ($end_timestamp - $start_timestamp) / 3600;

            // Quy cách tính tiền: ví dụ 100.000 đồng/giờ
            $hourly_rate = 100000;

            // Tính tiền thanh toán
            $payment = $hours_used * $hourly_rate;

            // Hiển thị tiền thanh toán
            echo '<script>document.getElementById("payment").value = "' . number_format($payment) . ' đồng";</script>';
        } else {
            echo "Giờ kết thúc phải lớn hơn Giờ bắt đầu";
        }
    }
    ?>
</body>
</html>