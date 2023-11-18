<!DOCTYPE html>
<html>
<head>
    <title>Tính diện tích hình chữ nhật</title>
    <style>
        table {
            background-color: #f2f2f2;
        }
        
        .custom-font {
            font-family: Arial, sans-serif;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        if (isset($_POST['tinh'])) {
            $chieuDai = floatval($_POST['chieu-dai']);
            $chieuRong = floatval($_POST['chieu-rong']);

            if ($chieuDai > 0 && $chieuRong > 0) {
                $dienTich = $chieuDai * $chieuRong;
            } else {
                $errorMessage = "Chiều dài và chiều rộng phải lớn hơn 0";
            }
        }
    ?>
    <form method="POST" action="">
        <table>
            <label for="chieu-dai">Chiều dài:</label>
            <input type="number" step="0.01" id="chieu-dai" name="chieu-dai" value="<?php echo isset($chieuDai) ? $chieuDai : ''; ?>" required><br>

            <label for="chieu-rong">Chiều rộng:</label>
            <input type="number" step="0.01" id="chieu-rong" name="chieu-rong" value="<?php echo isset($chieuRong) ? $chieuRong : ''; ?>" required><br>

            <label for="dien-tich">Diện tích:</label>
            <input type="text" id="dien-tich" name="dien-tich" value="<?php echo isset($dienTich) ? $dienTich : ''; ?>" readonly><br>

            <?php if (isset($errorMessage)): ?>
                <p class="custom-font"><?php echo $errorMessage; ?></p>
            <?php endif; ?>

            <button type="submit" name="tinh">Tính</button>
        </table>
    </form>
</body>
</html>