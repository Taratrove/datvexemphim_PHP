<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Tính Tiền Karaoke</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    input[type="time"], input[disabled] {
        width: 170px;
    }
</style>

<body>
  <?php

  if (isset($_POST['submit'])) {
      $bd = $_POST['bd'];
      $kt = $_POST['kt'];

      $bd_parts = explode(':', $bd);
      $kt_parts = explode(':', $kt);

      $bd_hour = $bd_parts[0];
      $bd_minute = $bd_parts[1];
      $kt_hour = $kt_parts[0];
      $kt_minute = $kt_parts[1];

      if ($bd_hour >= 10 && $bd_hour < 24 && $kt_hour >= 10 && $kt_hour < 24 &&
          $bd_minute >= 0 && $bd_minute < 60 && $kt_minute >= 0 && $kt_minute < 60) {

          if ($bd_hour < $kt_hour || ($bd_hour == $kt_hour && $bd_minute < $kt_minute)) {
              $so_gio = $kt_hour - $bd_hour;
              $so_phut = $kt_minute - $bd_minute;

              if ($bd_hour < 17 && $kt_hour < 17) {
                  $thanhtien = ($so_gio * 20000) + ($so_phut * 20000 / 60);
              } elseif ($bd_hour >= 17 && $kt_hour >= 17) {
                  $thanhtien = ($so_gio * 45000) + ($so_phut * 45000 / 60);
              } else {
                  $tien1 = (17 - $bd_hour) * 20000 + (60 - $bd_minute) * 20000 / 60;
                  $tien2 = ($kt_hour - 17) * 45000 + $kt_minute * 45000 / 60;
                  $thanhtien = $tien1 + $tien2;
              }
          } else {
              $msg = "Giờ bắt đầu phải nhỏ hơn giờ kết thúc";
          }
      } else {
          $msg = "Đây là giờ nghỉ";
      }

  }


  ?>
  <form action="" method="post">
    <table style="background-color: #00ffff;">
        <thead>
            <tr style="background: #6a00ff;  height: 30px; vertical-align: middle">
                <th colspan="3" align="center">
                    <h2 style="color: white; text-transform: uppercase;font-size: 20px;">tính tiền karaoke</h2>
                </th>
            </tr>
        </thead>
      <tbody>
      <tr>
          <td>Giờ bắt đầu:</td>
          <td>
<!--              <input type="time"  name="bd" min="10:00" max="23:59" value="--><?php //if(isset($bd)) echo $bd;?><!--" />-->
              <input type="time"  name="bd" value="<?php if(isset($bd)) echo $bd;?>" />
          </td>
          <td>(hh:mm)</td>
      </tr>
      <tr>
          <td>Giờ kết thúc:</td>
          <td>
<!--              <input type="time"  name="bd" min="10:00" max="23:59" value="--><?php //if(isset($bd)) echo $bd;?><!--" />-->
              <input type="time"  name="kt" value="<?php if(isset($kt)) echo $kt;?>" />
          </td>
          <td>(hh:mm)</td>
      </tr>
      <tr>
          <td>Số tiền thanh toán:</td>
          <td>
              <input type="text" disabled style="background-color: #fdffd7" value="<?php if(isset($thanhtien)) echo $thanhtien;?>" />
          </td>
      </tr>
      <tr>
          <td colspan="2" align="center">
              <input type="submit" value="Tính tiền" name="submit" />
              <input type="reset" value="Nhập lại" name="submit" />
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