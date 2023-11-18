<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resgistation Form</title>
</head>
<body>
    <?php 
    if(isset($_GET['register'])){
        $p1 = $_GET['pass']; $p2 = $_GET['repass'];
        $name=$_GET['name']; $user=$_GET['user'];
        $email=$_GET['email']; $sex= $_GET['sex'];
        $mes="";
        // ký tự hoa, thường, đặc biệt
        // $strongpss="/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
        // so sánh 2 chuỗi
        if(!empty($p1) and !empty($p2) ){
            if($p1 ==$p2) $mes .="chào mừng $name $email $user $sex <br>";
            else $mes .="mật khẩu không trùng hợp <br>";
        } else $mes .="mật khẩu không được để trống!! <br>";
        //preg_match kiểm tra chuỗi
        if (!preg_match('/@/', $email)) {
            $mes .= "Email không đúng định dạng <br>";
        }
        if (strlen($p1) < 8 || strlen($p1) > 16) {
            $mes .= "mật khẩu ít nhất có 8 kí tự<br>";
        }
        if (!preg_match("/\d/", $p1)) {
            $mes .= "Password should contain at least one digit<br>";
        }
        if (!preg_match("/[A-Z]/", $p1)) {
            $mes .= "mật khẩu có ít nhất có kí tự hoa<br>";
        }
        if (!preg_match("/[a-z]/", $p1)) {
            $mes .= "mật khẩu có ít nhất 1 ký tự thường<br>";
        }
        if (!preg_match("/\W/", $p1)) {
            $mes .= "mật khẩu có ít nhất có ký tự đặc biệt<br>";
        }
        if (preg_match("/\s/", $p1)) {
            $mes .= "mật khẩu không có khoảng trống<br>";
        }
    }
    ?>
    <form action="" method="get">
       <table>
        <tr>
            <td colspan="2">
                <h2>Resgistation Form</h2>
            </td>
        </tr>
        
        <tr>
            <td>Full name</td>
            <td>Username</td>
        </tr>
        
        <tr>
            <td>
                <input type="text" name="name" value="<?php
                if(isset($_GET['name'])) echo $_GET['name'];?>"
                playceholder="enter fullname" size="20">
            </td>
            <td>
                <input type="text" name="user" value="<?php
                if(isset($_GET['user'])) echo $_GET['user'];?>"
                playceholder="enter user" size="20" >
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>Phone Number</td>
        </tr>
        <tr>
            <td>
                <input type="text" name="email" value="<?php
                if(isset($_GET['email'])) echo $_GET['email'];
                ?>"
                playceholder="enter email" size="20">
            </td>
            <td>
                <input type="number" name="tel" value="<?php
                if(isset($_GET['tel'])) echo $_GET['tel'];?>"
                playceholder="enter tel" size="20">
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>Confirm password</td>
        </tr>
        <tr>
            <td>
                <input type="password" name="pass" value="<?php
                if(isset($_GET['pass'])) echo $_GET['pass'];?>"
                playceholder="enter password" size="20">
            </td>
            <td>
                <input type="password" name="repass" value="<?php
                if(isset($_GET['repass'])) echo $_GET['repass'];?>"
                playceholder="enter repass" size="20">
            </td>
        </tr>
        <tr>
            <td colspan="2"><h3>Gender</h3></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="radio" name="sex" value="nam">Nam<br>
                <input type="radio" name="sex" value="nu">Nu<br>
                <input type="radio" name="sex" value="none" checked>prefer not to say<br>
            </td>
        </tr>
        <tr>
            <th colspan="2" style=" background: antiquewhite">
                <input type="submit" name="register" value="register" style="background: antiquewhite; border: none;">
            </th>
        </tr>
        <tr>
            <th colspan="2" style="color:red">
                <?php
                    if(isset($mes)) echo $mes;
                ?>
            </th>
        </tr>
       </table>
    </form>
</body>
</html>