<?php
$servername ="localhost";
$username = "root";
$password = "root";
$dbname = "quanlybansua";
$conn = new mysqli($servername, $username,'', $dbname);
mysqli_set_charset($conn, charset:'utf8');
if($conn -> connect_errno ) {
    die ("connection faild: " .$conn -> connect_errno);
}
echo"thanhcong";
$QUERY = 'select * from NHANVIEN'
?>