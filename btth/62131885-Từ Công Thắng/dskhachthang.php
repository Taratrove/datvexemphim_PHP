<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Thông Tin Khách Hàng</h2>

<table>
 
<tr>
<th>Mã khách hàng</th>
<th>Tên khách hàng</th>
<th>Phái</th>
<th>Địa chỉ </th>
<th>Điện thoại</th>
<th>Email</th>
</tr>

<?php 

$conn = new mysqli('localhost', 'root', '', 'quanlybansua');
$khachhang = $conn->query('SELECT * FROM khach_hang');

if (mysqli_num_rows($khachhang) != 0) {
  foreach ($khachhang as $row) {
      $phai = $row['Phai'];
      if ($phai == 1) {
          $phaiText = "nữ";
      } else {
          $phaiText = "nam";
      }
      ?>
      <tr>
          <td><?= $row['Ma_khach_hang'] ?></td>
          <td><?= $row['Ten_khach_hang'] ?></td>
          <td><?= $phaiText ?></td>
          <td><?= $row['Dia_chi'] ?></td>
          <td><?= $row['Dien_thoai'] ?></td>
          <td><?= $row['Email'] ?></td>
      </tr>
      <?php
  }
}

?>

</table>


</body>
</html>

