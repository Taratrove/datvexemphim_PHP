<! DOCTYPE html >
2 <html lang ="en">
3 <head >
4 <meta charset ="UTF -8">
5 <title > timsach .php </ title >
6 </head >
7 <body >
8 <h1 > Tim Sach </h1 >
9 Tu khoa tim sach la:
10 <?php
// Lấy thông tin username và password từ form
$username = $_POST['username'];
$password = $_POST['password'];

// Kiểm tra xem username và password có chính xác không
if ($username === 'admin' && $password === '12345') {
    // Nếu chính xác, đưa ra thông báo "welcome, admin" với kiểu chữ Tahoma và màu đỏ
    echo '<p style="font-family: Tahoma; color: red;">Welcome to, admin</p>';
} else {
    // Nếu sai, đưa ra thông báo "Username hoặc password sai. Vui lòng nhập lại."
    echo 'Username hoặc password sai. Vui lòng nhập lại<form>';
}
?>
13 </body >
14 </html >
