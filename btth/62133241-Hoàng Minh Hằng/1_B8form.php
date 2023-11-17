<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        .navbar {
            border: 1px solid black;
            padding: 30px;
            position: relative;
        }

        .navbar-name {
            position: absolute;
            top: -10px;
            left: 10px;
            background-color: white;
            padding: -3px;
        }
    </style>
</head>
<body>
<div class="navbar">
    <div class="navbar-name">Enter your information</div>
    <form action="1_B8config.php" method="post">
        <table>
            <tr>
                <td>Full name</td>
                <td><input type="text" name="Fname"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="number" name="phone"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="sex" value="Nam">Nam
                    <input type="radio" name="sex" value="Nữ">Nữ
                </td>
            </tr>
            <tr>
                <td>Country</td>
                <td>
                    <select name="country">
                        <?php
                        $countries = array(
                            "USA" => "United States",
                            "Canada" => "Canada",
                            "Việt Nam" => "Việt Nam"
                            // Add more countries here
                        );

                        foreach ($countries as $code => $name) {
                            echo '<option value="' . $code . '">' . $name . '</option>';
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Study</td>
                <td>
                    <input type="checkbox" name="study[]" value="PHP & MySQL">PHP & MySQL
                    <input type="checkbox" name="study[]" value="ASP.NET">ASP.NET
                    <input type="checkbox" name="study[]" value="CCNA">CCNA
                    <input type="checkbox" name="study[]" value="Security+">Security+
                </td>
            </tr>
            <tr>
                <td>Note</td>
                <td><textarea name="texta" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td align="center">
                    <input type="submit" name="submit" value="Gửi">
                    <input type="reset" name="reset" value="Hủy">
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>