<!DOCTYPE html>
<html>
<head>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change the link color to #111 (black) on hover */
        li a:hover {
            background-color: #111;
        }
    </style>
</head>
<body>

<ul>
    <li><a href="?page=Bai9_trangchu">Trang chủ</a></li>
    <li><a href="?page=Bai9_gioithieu">Giới thiệu</a></li>
    <li><a href="?page=Bai9_tintuc">Tin tức</a></li>
    <li><a href="?page=Bai9_lienhe">Liên hệ</a></li>
    <li><a href="?page=Bai9_diendan">Diễn Đàn</a></li>
</ul>

<div id="content">
    <?php
    if(isset($_GET['page'])) {
        $page = $_GET['page'] . '.php';
        if(file_exists($page)) {
            include($page);
        } else {
            echo "Trang không tồn tại.";
        }
    }
    ?>
</div>

</body>
</html>
