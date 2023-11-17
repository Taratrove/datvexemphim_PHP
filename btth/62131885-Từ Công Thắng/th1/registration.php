<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <?php 
        if (isset($_GET['register'])){
            $p1 = $_GET['pass']; $p2=$_GET['repass'];
            $name = $_GET['name']; $user= $_GET['user'];
            $email = $_GET['email']; $phone= $_GET['phone'];
            $sex= $_GET['sex'];
            $msg = "";
            if(!empty ($p1) and !empty ($p2)){
                if($p1 == $p2) {
                    $msg = "Thank you for registering, $name! Your email is $email, username is $user, phone number is $phone, and gender is $sex.";
                } else {
                    $msg = "Incorrect confirm password.";
                }
            } else {
                $msg = "Password cannot be blank!";
            }
        }
    ?>
    <form name="registration" method="get">
        <table>
            <tr>
                <td colspan="2">
                    <h2>Registration Form</h2>
                </td>
            </tr>
            <tr>
                <td>
                    Full Name:
                </td>
                <td>
                    Username:
                </td>
            </tr>    
            <tr>
                <td>
                    <input type="text" name="name" value="<?php if(isset($_GET['name'])) echo $_GET['name']; ?>" placeholder="Enter full name" size="20" required>
                </td>
                <td>
                    <input type="text" name="user" value="<?php if(isset($_GET['user'])) echo $_GET['user']; ?>" placeholder="Enter username" size="20" required>
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    Phone Number:
                </td>
            </tr>
            <tr>
                <td>
                    <input type="email" name="email" value="<?php if(isset($_GET['email'])) echo $_GET['email']; ?>" placeholder="Enter email" size="20" required>
                </td>
                <td>
                    <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="<?php if(isset($_GET['phone'])) echo $_GET['phone']; ?>" placeholder="XXX-XXX-XXXX" size="20" required>
                </td>
            </tr>
            <tr>
                <td>
                    Password:
                </td>
                <td>
                    Confirm Password:
                </td>

                <td>
            
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="pass" placeholder="Enter password" size="20" required>
                </td>
                <td>
                    <input type="password" name="repass" placeholder="Confirm password" size="20" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h3>Gender:</h3>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="radio" name="sex" value="Male" required>Male
                    <input type="radio" name="sex" value="Female" required>Female
                    <input type="radio" name="sex" value="None" required>Prefer not to say
                </td>
            </tr>
            <tr>
                <th colspan="2" style="background: antiquewhite;">
                    <input type="submit" name="register" value="Register" style="background: antiquewhite; border: none;">
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

