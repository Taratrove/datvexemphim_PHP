<!DOCTYPE html>
<html>
<head>
    <title>Chuyển đổi năm dương lịch sang năm âm lịch</title>
    <style>
        table {
            text-align: center;
            border: 1px solid #ddd;
            border-collapse: collapse;
            background-color: #faebd7;
            padding: 20px;
            border-radius: 5px;
            width: 400px; /* Điều chỉnh chiều rộng của bảng */
            margin: auto; /* Canh giữa bảng */
        }

        td {
            padding: 10px;
        }

        h1 {
            color: #fff;
            text-align: center;
            padding: 10px;
        }

    </style>
    <?php
    $mang_can = array("Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm");
    $mang_chi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
    $mang_hinh = array("hoi.jpg", "ty.jpg", "suu.jpg", "dan.jpg", "mao.jpg", "thin.jpg", "ran.jpg", "ngo.jpg", "mui.jpg", "than.jpg", "dau.jpg", "tuat.jpg");

    if (isset($_POST['convert'])) {
        $nam = $_POST['nam-duong-lich'] - 3;
        $can = $nam % 10;
        $chi = $nam % 12;
        $nam_am = $mang_can[$can] . " " . $mang_chi[$chi];
        $hinh = $mang_hinh[$chi];
        $hinh_anh = "<img src='12con_giap/$hinh' alt='Hình ảnh con vật' style='max-width: 100%; height: auto;'>";
    }
    ?>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    Dương lịch
                </td>
                <td>
                    Âm lịch
                </td>
            </tr>
            <tr>
                <td>
                    <input type="number" id="nam-duong-lich" name="nam-duong-lich" <?php if (isset($_POST['nam-duong-lich'])) echo "value='{$_POST['nam-duong-lich']}'";?> required>
                </td>
                <td>
                    <input type="submit" name="convert" value="=>">
                </td>
                <td colspan="2">
                    <input type='text' id='nam-am-lich' name='nam-am-lich' value='<?php if (isset($nam_am)) echo $nam_am;?>' readonly>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php if (isset($hinh_anh)) echo $hinh_anh;?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
