<!DOCTYPE HTML >
 <html lang="en">
    <head>
        <meta charset="UTF -8">

    </head>
 <body >
    <?php
        if(isset($_GET['register'])){
            $p1 = $_GET['pass']; $p2=$_GET['repass'];
            $msg="";
            if(!empty($p1) and !empty($p2)){
                if($p1 == $p2) 
                    $msg = "true";
                else $msg="false";
            }
        }
    ?>
    <form action="" method="get">
        Full name: <input type="text" name="name" size="20" maxlength="30"><br>
        Use name: <input type="text" name="usename" size="20" maxlength="30"><br>
        email: <input type="text" name="email" size="20" maxlength="30"><br>
        Phone Number: <input type="text" name="phonenumber" size="20" maxlength="30"><br>
        password: <input type="password" name="pass" size="20" maxlength="30"><br>
        Confrim Password: <input type="password" name="repass" size="20" maxlength="30"><br>
   
        Gender: <br>
        <input type="radio" name="sex" value="nam">Nam<br>
        <input type="radio" name="sex" value="nu">Nu<br>
        <input type="radio" name="sex" value="prefer not to say">prefer not to say<br>
        <input  type= "submit" name="register" value="Register"><br>
    
  </form>
</body >
 </html >