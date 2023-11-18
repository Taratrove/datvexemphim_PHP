<?php
    echo "Bạn đã nhập thành công, dưới đây là thông tin bạn đã nhập: <br>";

$fullname = $_POST['fullname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$rdi_gender = $_POST['rdi-gender']==="male" ? "Nam" : "Nữ";
$country = $_POST['country'];
$chx_study = isset($_POST['chx-study']) ? implode(", ", $_POST['chx-study']) : "";
$note = $_POST['note'];

echo "Họ tên: " . $fullname . "<br>";
echo "Địa chỉ: " . $address . "<br>";
echo "Số điện thoại: " . $phone . "<br>";
echo "Giới tính: " . $rdi_gender . "<br>";
echo "Quốc tịch: " . $country . "<br>";
echo "Study: " . $chx_study . "<br>";
echo "Note:" . $note . "<br>";