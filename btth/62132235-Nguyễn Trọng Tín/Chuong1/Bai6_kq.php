<!DOCTYPE html>
<html lang="en">

<head>
  <title>Phép toán</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>
    p {
        margin: 0;
    }
</style>


<body>
  <?php
  $a = $_POST['a'];
  $b = $_POST['b'];
  if (is_numeric($a) && is_numeric($b)) {
      switch ($_POST['pt']) {
          case "cong":
              $pt = "Cộng";
              $c = $a + $b;
              break;
          case "tru":
              $pt = "Trừ";
              $c = $a - $b;
              break;
          case "nhan":
              $pt = "Nhân";
              $c = $a * $b;
              break;
          case "chia":
              $pt = "Chia";
              if ($b != 0)
                  $c = $a / $b;
              else {
                  echo 'Số thứ 2 phải khác 0!';
                  $pt = $_POST['pt'];
              }
              break;
      }
  } else {
      echo "Dữ liệu không đúng!";
      $pt = $_POST['pt'];
      $c = "";
  }
  ?>
  <form action="" method="post">
    <table>
      <thead>
        <th colspan="5" align="center">
          <h3 style="color: darkcyan;">PHÉP TÍNH TRÊN 2 SỐ</h3>
        </th>
      </thead>
      <tr>
        <td>
          <p style="color: brown;">Chọn phép tính:</p>
        </td>
        <td colspan="4">
          <input type="text" style="background: none; border: none;" disabled name="pt" value="<?php echo $pt; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <p style="color: blue">Số thứ 1:</p>
        </td>
        <td colspan="4">
          <input type="text" disabled name="a" value="<?php echo $a; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <p style="color: blue">Số thứ 2:</p>
        </td>
        <td colspan="4">
          <input type="text" disabled name="b" value="<?php echo $b; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <p style="color: blue">Kết quả:</p>
        </td>
        <td colspan="4">
          <input type="text" disabled name="c" value="<?php if(isset($c)) echo $c; ?>">
        </td>
      </tr>
      <tr>
        <td></td>
        <td><a href="javascript:window.history.back(-1);">Quay lại trang trước</a></td>
      </tr>
    </table>
  </form>
</body>

</html>