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
  padding: 5px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.center{
  margin-left: auto;
  text-align: center;
  color: blue;
}
</style>
</head>
<body>

<div class="center"><h2>Thông Tin Hãng Sữa</h2></div>

<table>
 
<tr>
<th>Mã HS</th>
<th>Tên hãng sữa</th>
<th>địa chỉ</th>
<th>Điện thoại</th>
<th>Email</th>
</tr>

<?php 

$conn = new mysqli('localhost', 'root', '', 'quanlybansua');
$hangsua = $conn->query('SELECT * FROM hang_sua');
 
if( mysqli_num_rows ($hangsua) !=0){
    foreach($hangsua as $row)
    {
      ?>
      <tr>
          <td><?= $row['Ma_hang_sua'] ?></td>
          <td><?= $row['Ten_hang_sua'] ?></td>
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


