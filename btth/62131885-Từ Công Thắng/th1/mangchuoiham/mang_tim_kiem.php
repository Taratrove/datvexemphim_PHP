<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm</title>
</head>
<body>
    <h2>Tiềm kiếm</h2>
    
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!empty($_POST["nhapmang"])){
            $nhapmang = $_POST["nhapmang"];
            $arr = explode(",", $nhapmang);
        } else {
            echo("Vui lòng nhập vào dãy số");
        }

        if(!empty($_POST["nhapso"])){
            $nhapso = $_POST["nhapso"];
            $KQ = tim_kiem($arr, $nhapso);
        }
    }

    function tim_kiem($mang, $gia_tri){
        for($i = 0; $i < count($mang); $i++){
            if($mang[$i] == $gia_tri){
                return $i+1;
            }
        }
        return -1;
    }
?>
<form action="" method="post">
        <table align="left" colspan = "2">
            <tr>
                <td>
                    Nhập mảng:
                    <input type="text" name="nhapmang" value =" <?php echo isset($_POST["nhapmang"])? $_POST["nhapmang"] : ",";  ?>"><br>
                </td>
            </tr>
            <tr>
                <td>
                    Nhập số cần tìm:
                    <input type="text" name="nhapso" value =" <?php echo isset($_POST["nhapso"])? $_POST["nhapso"] : "";  ?>"><br>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <input type="submit" name="Timkiem" style="background-color: aqua;" value="Tiềm Kiếm"><br>
                </td>
            </tr>
            <tr>
                <td>Mảng:
                <input type="text" name="mang" readonly value="<?php echo isset($_POST["nhapmang"]) ? $_POST["nhapmang"] : " "; ?>"><br>
                </td>
            </tr>
            <tr>
                <td>
                    Kết quả tìm được: 
                    <input type="text" name="KQ" readonly value="<?php echo $KQ >= 0 ? "Số $nhapso được tìm thấy ở vị trí thứ $KQ trong mảng" : "Không tìm thấy số $nhapso trong mảng"; ?>"><br>     
                </td>
            </tr>
        </table>
        </form>        
</body>
</html>