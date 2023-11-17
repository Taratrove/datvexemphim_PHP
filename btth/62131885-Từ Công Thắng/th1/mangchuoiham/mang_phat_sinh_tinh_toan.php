<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng phát sinh tính toán</title>
    <style>
        body{
            margin: 2px;
            margin: 2px;
            font-family: Arial, sans-serif;
            border: 1px solid #333;
            border-bottom: auto;
        }

        header {
            background-color: antiquewhite;
            padding: 5px;
        }

        .boxed {
            background-color: #f2f2f2;
            border: 1px solid #333;
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h2>Mảng phát sinh và tính toán</h2>
    </header>
    
<form method="POST" action="mang_phat_sinh_tinh_toan.php">
        Số phần tử: <input type="number" name="num_elements" min="1" value="<?php echo $n; ?>"><br>
        <input type="submit" value="Phát sinh và tính toán">
    </form>
<?php
    function tao_mang($n)
    {
        $mang = array();
        if ($n > 0 && is_numeric($n)) {
            for ($i = 0; $i < $n; $i++) {
                $mang[] = rand(0, 20);
            }
        }
        return $mang;
    }

    function xuat_mang($mang)
    {
        if (!empty($mang)) {
            echo "Mảng được phát sinh: ";
            echo implode(" ", $mang);
            echo "<br>";
        }
    }

    function tinh_tong($mang)
    {
        if (!empty($mang)) {
            $tong = array_sum($mang);
            return $tong;
        }
        return 0;
    }

    function tim_max($mang)
    {
        if (!empty($mang)) {
            $max = max($mang);
            return $max;
        }
        return 0;
    }

    function tim_min($mang)
    {
        if (!empty($mang)) {
            $min = min($mang);
            return $min;
        }
        return 0;
    }
    
    $n = $_POST ["num_elementeric"] ?? '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["num_elements"];
        if (!empty($n) && is_numeric($n) && $n > 0) {
            $mang = tao_mang($n);
            xuat_mang($mang);

            $tong = tinh_tong($mang);
            $max = tim_max($mang);
            $min = tim_min($mang);
    ?>
            <form>
                GTNN: <input type="text" value="<?php echo $min; ?>" readonly><br>
                GTLN: <input type="text" value="<?php echo $max; ?>" readonly><br>
                Tổng: <input type="text" value="<?php echo $tong; ?>" readonly><br>
                
            </form>
           
    <?php
        } else {
            echo "Vui lòng nhập số nguyên dương cho số phần tử.";
        }
    }
    ?>
    <tr>
        <td style="color: red;" chú ý:>
        <td> các phần tử trong mảng sẽ có giá trị từ 0 đến 20</td>
        </td>
    </tr>
</body>
</html>