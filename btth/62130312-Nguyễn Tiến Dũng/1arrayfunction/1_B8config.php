<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kết quả</title>
</head>
    <?php 
        $gender = $_POST['sex'];
        $study = !empty($_POST['study']) ? implode(", ", $_POST['study']) : "" ;
    ?>
<body>
    <table>
        <tr>
            <td>
                Họ tên: <?php echo $_POST["Fname"]; ?><br>
            </td>
        </tr>

        <tr>
            <td>
                Address: <?php echo $_POST["address"]; ?><br>
            </td>
        </tr>

        <tr>
            <td>
                Phone: <?php echo $_POST["phone"]; ?><br>
            </td>
        </tr>

        <tr>
            <td>
                Gender: <?php echo $gender?><br>
            </td>
        </tr>

        <tr>
            <td>
                Country: <?php echo $_POST["country"]; ?><br>
            </td>
        </tr>

        <tr>
            <td>
                Study: <?php  echo $study; ?><br>
            </td>
        </tr>

        <tr>
            <td>
                Note: <?php echo $_POST["texta"]; ?><br>
            </td>
        </tr>

        <tr>
            <td> <a href="javascript:window.history.back(-1);">Trở về trang trước</a></td>
        </tr>
    </table>
</body>
</html>