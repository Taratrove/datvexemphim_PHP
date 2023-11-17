<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tổng dãy số</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        tbody tr td{
            padding: 0 10px;
        }
    </style>
</head>
<body>
  <?php
  function tongdayso($arr)
  {
      $s = 0;
      foreach ($arr as $i) {
          $s += $i;
      }
      return $s;
  }
  $str = "";
  $tong = "";
  if (isset($_POST['tinh'])) {
      $str = $_POST['mang'];
      $arr = explode(",", $str);
      $tong = tongdayso($arr);
  }
  ?>
  <form action="" method="post">
    <table style="background-color: #ccd9cf; width: 360px;" class="modified-table">
      <thead style="background-color: #2d9595">
        <th colspan="2" align="center">
          <h3 style="font-size:20px; color: white; text-transform: capitalize;">Nhập và tính trên dãy số</h3>
        </th>
      </thead>
      <tbody>
      <tr>
          <td>Nhập dãy số:</td>
          <td>
              <input type="text" name="mang" value="<?php echo $str; ?>"> <span style="color: red;font-weight: bold;">(*)</span>
          </td>
      </tr>
      <tr>
          <td></td>
          <td>
              <input style="background-color: #faf791" type="submit" value="Tổng dãy số" name="tinh">
          </td>
      </tr>
      <tr>
          <td>Tổng dãy số:</td>
          <td>
              <input type="text" style="background: lightgreen; color: red" disabled name="ketqua" value="<?php echo $tong; ?>">
          </td>
      </tr>
      <tr>
          <td colspan="2" align="center"><label><span style="color: red;font-weight: bold;">(*) </span>Các số được nhập cách nhau bằng dấu ","</label></td>
      </tr>
      </tbody>
    </table>
  </form>
</body>

</html>