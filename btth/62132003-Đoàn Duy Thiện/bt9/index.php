<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
</head>
<style>
    
</style>
<body>
    <header>
        <h1>Trang Chủ</h1>
        <nav>
            <ul>
                <li><a href="?page=trangchu">Trang Chủ</a></li>
                <li><a href="?page=gioithieu">Giới Thiệu</a></li>
                <li><a href="?page=tintuc">Tin Tức</a></li>
                <li><a href="?page=lienhe">Liên Hệ</a></li>
                <li><a href="?page=diendan">Diễn Đàn</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
            // Kiểm tra xem trang con nào được chọn và tải nội dung tương ứng
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                if ($page === 'trangchu') {
                    include 'trangchu.php';
                } elseif ($page === 'gioithieu') {
                    include 'gioithieu.php';
                } elseif ($page === 'tintuc') {
                    include 'tintuc.php';
                } elseif ($page === 'lienhe') {
                    include 'lienhe.php';
                } elseif ($page === 'diendan') {
                    include 'diendan.php';
                } else {
                    echo "Trang không tồn tại.";
                }
            }
        ?>
    </main>
</body>
</html>
