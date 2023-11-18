<!DOCTYPE html>
<html lang="en">

<head>
  <title>Năm âm lịch</title>
    <style type="text/css">
        table {
            background-color: #b9eeff;
        }

        table th {
            background-color: #0965c7;
            color: white;
            width: 400px;
        }

        table tr td {
            padding: 0 10px;
        }

        table input[type="submit"]{
            background-color: #fdffd7;
            color: red;
        }

        table input[disabled] {
            background-color: #fdffd7;
            color: red;
        }
    </style>
</head>

<body>
  <?php
  if (isset($_POST['nam']))
    if(is_numeric($_POST['nam'])) {
        $nam = trim($_POST['nam']);
    } else $msg = "Số năm không hợp lệ";
  else $nam = 0;
  $nam_al = "";
  if (isset($_POST['tinh'])) {
    $mang_can = array("Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm");
    $mang_chi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
    $mang_hinh = array("heo.webp", "chuot.webp", "trau.webp", "ho.webp", "tho.webp", "rong.webp", "ran.webp", "ngua.webp", "de.webp", "khi.webp", "ga.webp", "cho.webp");
    $nam = $nam - 3;
    $can = $nam % 10;
    $chi = $nam % 12;
    $nam_al = $mang_can[$can];
    $nam_al = $nam_al . " " . $mang_chi[$chi];
    $hinh = $mang_hinh[$chi];
    $hinh_anh = $hinh;
  }
  ?>
  <form action="" method="post">
    <table border="0" cellpadding="0">
      <th colspan="3">
        <h2>TÌM KIẾM</h2>
      </th>
      <tr>
        <td>Năm dương lịch:</td>
        <td>Năm âm lịch:</td>
      </tr>
      <tr>
          <td><input type="text" name="nam" value="<?php if (isset($_POST['nam'])) echo $nam + 3; ?>" /></td>
          <td><input type="submit" name="tinh" size="15" value="=>" /></td>
          <td><input type="text" name="nam_al" size="20" disabled value="<?php echo $nam_al; ?> " /></td>
      </tr>
      <tr>
        <td colspan="3" align="center">
          <img src="12congiap/<?php echo $hinh_anh ?>" width="200px" alt="">
        </td>
      </tr>
    </table>
      <p style="color: red;font-weight: bold;"><?php if(isset($msg)) echo $msg ?></p>
  </form>
</body>

</html>