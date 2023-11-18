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
.center{
  margin-left: auto;
  text-align: center;
  color: blue;
}
</style>
</head>
<body>

<div class="center"><h2>Thông Tin Các Sản Phẩm</h2></div>

<table>
<th>Hình</th>
 <th>Tên hãng sữa</th>
<th>Dịa chỉ</th>

</tr>

<?php 

$conn = new mysqli('localhost', 'root', '', 'quanlybansua');
$sua = $conn->query('SELECT * FROM sua join hang_sua');



if( mysqli_num_rows ($sua) !=0){
    foreach($sua as $row)
    {
        ?>
        <tr>
        
        <td><img style="width: 150px;" src="Hinh_sua/<?= $row['Hinh'] ?>" alt=""></td>  
        <td><?= $row['Ten_sua'] ?><br>
            <?= $row['TP_Dinh_Duong'] ?></td>
           <td><?= $row['Dia_chi'] ?></td>
        </tr>
        <?php
    }
}



?>

</table>


</body>
</html>

