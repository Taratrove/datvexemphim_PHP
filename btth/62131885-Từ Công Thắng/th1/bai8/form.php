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
    <form action="config.php" method="post">
        <table>
            <tr>
                <td>name</td>
                <td><input type="text" name="fullname"></td>
            </tr>
            <tr>
                <td>address</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>phone</td>
                <td><input type="number" name="phone"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="sex">Nam
                    <input type="radio" name="sex">Nữ
                </td>
            </tr>
            <tr>
                <td>Country</td>
                <td>
                    <select name="country">
                        <?php
                        $countries = array(
                            "USA" => "United States",
                            "UK" => "United Kingdom",
                            "Canada" => "Canada",
                            "Australia" => "Australia"
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
                    <input type="checkbox" name="check">PHP & MySQL
                    <input type="checkbox" name="check">ASP.NET
                    <input type="checkbox" name="check">CCNA
                    <input type="checkbox" name="check">Security+
                </td>
            </tr>
            <tr>
                <td>note</td>
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