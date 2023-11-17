<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thay thế</title>
</head>
<body> 
    <h2>Thay Thế</h2>
<?php

$inputError = "";
$replaceError = "";


if(isset($_POST["thaythe"])) {
   
    $inputArray = isset($_POST["nhappt"]) ? explode(",", $_POST["nhappt"]) : array();
    $valueToReplace = isset($_POST["nhapmang"]) ? $_POST["nhapmang"] : "";
    $replacementValue = isset($_POST["nhapmangthaythe"]) ? $_POST["nhapmangthaythe"] : "";

   
    if(empty($inputArray)) {
        $inputError = "Vui lòng nhập các phần tử.";
    }
    if(empty($valueToReplace)) {
        $replaceError = "Vui lòng nhập giá trị cần thay thế.";
    }
    
    
    if(empty($inputError) && empty($replaceError)) {
     
        function replaceValueInArray($array, $valueToReplace, $replacementValue) {
            foreach($array as &$element) {
                if($element === $valueToReplace) {
                    $element = $replacementValue;
                }
            }
            return $array;
        }

        
        $modifiedArray = replaceValueInArray($inputArray, $valueToReplace, $replacementValue);
    }
}
?>
<form action="" method="post">
    <table>
        <tr>
            <td>
                Nhập các phần tử:
                <input type="text" name="nhappt" value="<?php echo isset($_POST["nhappt"]) ? $_POST["nhappt"] : ""; ?>"><br>
                <span style="color: red"><?php echo $inputError; ?></span>
            </td>
        </tr>
        <tr>
            <td>
                Giá trị cần thay thế:
                <input type="text" name="nhapmang" value="<?php echo isset($_POST["nhapmang"]) ? $_POST["nhapmang"] : ""; ?>"><br>
                <span style="color: red"><?php echo $replaceError; ?></span>
            </td>
        </tr>
        <tr>
            <td>
                Giá trị thay thế:
                <input type="text" name="nhapmangthaythe" value="<?php echo isset($_POST["nhapmangthaythe"]) ? $_POST["nhapmangthaythe"] : ""; ?>"><br>
            </td>
        </tr>
        <tr>
            <td align="center">
                <input type="submit" name="thaythe" style="background-color:aqua;" value="Thay Thế"><br>
            </td>
        </tr>
        <tr>
            <td>
                Mảng cũ:
                <input type="text" name="mangcu" value="<?php echo isset($_POST["nhappt"]) ? $_POST["nhappt"] : ""; ?>" readonly><br>
            </td>
        </tr>
        <tr>
            <td>
                Mảng sau khi thay thế:
                <input type="text" name="mangthaythe" value="<?php echo isset($modifiedArray) ? implode(",", $modifiedArray) : ""; ?>" readonly><br>
            </td>
        </tr>
    </table>
</form>
</body>
</html>