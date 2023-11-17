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

<h2>HTML Table</h2>

<table>
 
<tr>
<th>Mã sữa</th>
<th>Tên sữa</th>
<th>Mã hàng sữa</th>
<th>Mã loại sữa</th>
<th>Trọng lượng</th>
<th>Đơn giá</th>
<th>TP Dinh dưỡng</th>
<th>Lợi ích</th>
<th>Hình</th>
</tr>

<?php 

$conn = new mysqli('localhost', 'root', '', 'quanlysua');
$sua = $conn->query('SELECT * FROM sua');


if( mysqli_num_rows ($sua) !=0){
    foreach($sua as $row)
    {
        ?>
        <tr>
            <td><?= $row['Ma_sua'] ?></td>
            <td><?= $row['Ten_sua'] ?></td>
            <td><?= $row['Ma_hang_sua'] ?></td>
            <td><?= $row['Ma_loai_sua'] ?></td>
            <td><?= $row['Trong_luong'] ?></td>
            <td><?= $row['Don_gia'] ?></td>
            <td><?= $row['TP_Dinh_Duong'] ?></td>
            <td><?= $row['Loi_ich'] ?></td>
            <td><img style="width: 200px;" src="Hinh_sua/<?= $row['Hinh'] ?>" alt=""></td>
        </tr>
        <?php
    }
}


?>

</table>


</body>
</html>

