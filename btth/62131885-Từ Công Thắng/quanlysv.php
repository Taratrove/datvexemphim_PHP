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

<h2>Thông Tin Sinh Viên</h2>

<table>
 
<tr>
<th>Mã Sinh Viên</th>
<th>Tên Sinh Viên</th>
<th>Địa chỉ </th>
<th>Giới Tính</th>
</tr>

<?php 

$conn = new mysqli('localhost', 'root', '', 'quanlysv');
$sinhvien = $conn->query('SELECT * FROM sinhvien');

if (mysqli_num_rows($sinhvien) != 0) {
  foreach ($sinhvien as $row) {
      $gioitinh = $row['gioitinh'];
      if ($gioitinh == 1) {
          $gioitinhtext = "nữ";
      } else {
          $gioitinhtext = "nam";
      }
      ?>
      <tr>
          <td><?= $row['masv'] ?></td>
          <td><?= $row['tensv'] ?></td>
          <td><?= $row['diachi'] ?></td>
          <td><?= $gioitinhtext ?></td>
      </tr>
      <?php
  }
}
?>
</table>
</body>
</html>

