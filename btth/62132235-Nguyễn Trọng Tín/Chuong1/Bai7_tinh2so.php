<!DOCTYPE html>
<html lang="en">

<head>
  <title>Phép toán 2 số</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>
    p {
        margin: 0;
        padding: 0;
    }
</style>

<body>
<?php
session_start();
if (isset($_SESSION['error_message'])) {
    $error_message = $_SESSION['error_message'];
    unset($_SESSION['error_message']);
    echo "<p style='color: red'>" . $error_message . "</p>";
}
?>
  <form action="Bai7_kq.php" method="post">
    <table>
      <thead>
        <th colspan="5" align="center">
          <h3 style="color: darkcyan;">PHÉP TÍNH TRÊN 2 SỐ</h3>
        </th>
      </thead>
      <tr>
        <td>
          <font color='brown'>Chọn phép tính:</font>
        </td>
        <td>
          <input type="radio" name="pt" value="cong" checked>
          <label for="cong">
            <font color='orange'>Cộng</font>
          </label>
        </td>
        <td>
          <input type="radio" name="pt" value="tru">
          <label for="tru">
            <font color='orange'>Trừ</font>
          </label>
        </td>
        <td>
          <input type="radio" name="pt" value="nhan">
          <label for="nhan">
            <font color='orange'>Nhân</font>
          </label>
        </td>
        <td>
          <input type="radio" name="pt" value="chia">
          <label for="chia">
            <font color='orange'>Chia</font>
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <font color='blue'>Số thứ 1:</font>
        </td>
        <td colspan="4">
          <input type="text" name="a" >
        </td>
      </tr>
      <tr>
        <td>
          <font color='blue'>Số thứ 2:</font>
        </td>
        <td colspan="4">
          <input type="text" name="b">
        </td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Tính" name="tinh"></td>
      </tr>
    </table>
  </form>

</body>

</html>