<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = $_POST['fullname'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $gender = $_POST['sex'];
                $country = $_POST['country'];
                $study = isset($_POST['check']) ? $_POST['check'] : array();
                $note = $_POST['texta'];

                if (validateData($name, $address, $phone, $gender, $country)) {
                    saveData($name, $address, $phone, $gender, $country, $study, $note);
                } else {
                    echo "Invalid data.";
                }
            } else {
                echo "Invalid method.";
            }

            function validateData($name, $address, $phone, $gender, $country) {
                if (empty($name) || empty($address) || empty($phone) || empty($gender) || empty($country)) {
                    return false;
                }
                return true;
            }

            function saveData($name, $address, $phone, $gender, $country, $study, $note) {
                echo "Full Name: " . $name . "<br>";
                echo "Address: " . $address . "<br>";
                echo "Phone: " . $phone . "<br>";
                echo "Gender: " . $gender . "<br>";
                echo "Country: " . $country . "<br>";
                if (is_array($study)) {
                    echo "Study: " . implode(", ", $study) . "<br>";
                } else {
                    echo "Study: " . $study . "<br>";
                }   
                echo "Note: " . $note . "<br>";
            }
            ?>
            <tr>
            <td> <a href="javascript:window.history.back(-1);">Trở về trang trước</a></td>
        </tr>
</body>
</html>