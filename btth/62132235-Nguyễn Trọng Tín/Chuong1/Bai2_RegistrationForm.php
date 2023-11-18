<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
</head>
<body>
    <?php
        if(isset($_GET['register'])) {
            $p1 = $_GET['pass'];
            $p2 = $_GET['repass'];
            $name = $_GET['name'];
            $user = $_GET['user'];
            $email = $_GET['email'];
            $tel = $_GET['tel'];
            $sex = $_GET['sex'];
            $msg = "";

            if (empty($p1) || empty($p2)) {
                $msg .= "Mật khẩu không được để trống!!!! <br>";
            }

            if ($p1 != $p2) $msg .= "Mật khẩu không trùng khớp. <br>";

            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $msg .= "Chỉ có chữ và khoảng trắng được cho phép. <br>";
            }

            if (empty($name)) {
                $msg .= "Name không được để trống. <br>";
            }

            if (empty($user)) {
                $msg .= "Username không được để trống. <br>";
            }

            if (!empty($tel)) {
                if (!is_numeric($tel)) {
                    $msg .= "Số điện thoại phải là số. <br>";
                }
            } else $msg .= "Số điện thoại không được để trống. <br>";

            if (!empty($email)){
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $msg .= "Email không đúng định dạng. <br>";
                }
            } else $msg .= "Email không được để trống <br>";



            if (strlen($p1) < 8 || strlen ($p2) < 8) {
                $msg .= "Mật khẩu không đủ 8 ký tự. <br>";
            }

            $kytuhoa = '/(?=\S*[A-Z])/';
            $kytuthuong = '/(?=\S*[a-z])/';
            $kytuso = '/(?=\S*[\d])/';
            $kytudacbiet = '/(?=\S*[\W])/';

            if (!preg_match($kytuhoa, $p1) || !preg_match($kytuhoa, $p2)) {
                $msg .= "Phải có ít nhất một ký tự hoa. <br>";
            }

            if (!preg_match($kytuthuong, $p1) || !preg_match($kytuthuong, $p2)) {
                $msg .= "Phải có ít nhất một ký tự thường. <br>";
            }

            if (!preg_match($kytuso, $p1) || !preg_match($kytuso, $p2)) {
                $msg .= "Phải có ít nhất một ký tự số. <br>";
            }

            if (!preg_match($kytudacbiet, $p1) || !preg_match($kytudacbiet, $p2)) {
                $msg .= "Phải có ít nhất một ký tự đặc biệt. <br>";
            }

            if (empty($msg)) {
                $msg = "Thank $name $email $user $sex";
            }

        }
    ?>
    <form action="" method="get">
        <table>
            <tr>
                <td colspan="2">
                    <h2>Registration Form</h2>
                </td>
            </tr>
            <tr>
                <td>Full name</td>
                <td>Username</td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="name" value="<?php if(isset($_GET['name'])) echo $_GET['name']?>">
                </td>
                <td>
                    <input type="text" name="user" value="<?php if(isset($_GET['user'])) echo $_GET['user']?>">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>Phone Number</td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="email" value="<?php if(isset($_GET['email'])) echo $_GET['email']?>">
                </td>
                <td>
                    <input type="text" name="tel" value="<?php if(isset($_GET['tel'])) echo $_GET['tel']?>">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>Confirm Password</td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="pass" value="<?php if(isset($_GET['pass'])) echo $_GET['pass']?>">
                </td>
                <td>
                    <input type="password" name="repass" value="<?php if(isset($_GET['repass'])) echo $_GET['repass']?>">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="radio" name="sex" value="Male">Male
                    <input type="radio" name="sex" value="Female">Female
                    <input type="radio" name="sex" value="none" checked>Perfer not to say
                </td>
            </tr>
            <tr>
                <th colspan="2" style="background-color: antiquewhite">
                    <input type="submit" name="register" value="Register" style="background: antiquewhite; border: none">
                </th>
            </tr>
            <tr>
                <th colspan="2" style="color: red">
                    <?php
                        if(isset($msg)) echo $msg;
                    ?>
                </th>
            </tr>
        </table>
    </form>
</body>
</html>