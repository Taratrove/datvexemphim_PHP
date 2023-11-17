<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Tính diện tích HCN</title>
</head>

<body>
  <?php
  const PI = 3.14;
  if (isset($_POST['submit'])) {
      $bk = $_POST['bk'];
      if (is_numeric($bk)) {
          if ($bk > 0) {
              $dt = PI * pow($bk, 2);
              $cv = 2 * PI * $bk;
          } else $msg = "Độ dài, rộng phải lớn hơn 0";
      } else $msg = "Dữ liệu không đúng, vui lòng nhập lại";
  }

  ?>
  <form action="" method="post">
    <table style="background-color: #fff9dc">
        <thead>
            <tr>
                <th colspan="2" align="center" style="background-color: #ffd871">
                    <h3 style="color: #9d5913">DIỆN TÍCH CHU VI HÌNH TRÒN</h3>
                </th>
            </tr>
        </thead>
      <tbody>
      <tr>
          <td>Bán kính:</td>
          <td>
              <input type="text" name="bk" value="<?php if(isset($bk)) echo $bk;?>" />
          </td>
      </tr>
      <tr>
          <td>Diện tích:</td>
          <td>
              <input type="text" disabled style="background-color: #fedada" value="<?php if(isset($dt)) echo $dt;?>" />
          </td>
      </tr>
      <tr>
          <td>Chu vi:</td>
          <td>
              <input type="text" disabled style="background-color: #fedada" value="<?php if(isset($cv)) echo $cv;?>" />
          </td>
      </tr>
      <tr>
          <td colspan="2" align="center">
              <input type="submit" value="Tính" name="submit" />
          </td>
      </tr>
      <tr>
          <td colspan="2">
              <p style="color: red"><?php if(isset($msg)) echo $msg;?></p>
          </td>
      </tr>
      </tbody>
    </table>
  </form>
</body>

</html>