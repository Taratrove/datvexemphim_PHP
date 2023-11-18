<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Kết quả thi đại học</title>
</head>

<body>
  <?php
  const DC = 20;
  if (isset($_POST['submit'])) {
      $toan = $_POST['toan'];
      $ly = $_POST['ly'];
      $hoa = $_POST['hoa'];
      if (is_numeric($toan) && is_numeric($ly) && is_numeric($hoa)) {
          if ($toan > 0 && $ly > 0 && $hoa > 0) {
              if ($toan <=10 && $ly <=10 && $hoa <=10) {
                  $tongdiem = $toan + $ly + $hoa;
                  $ketquathi = ($tongdiem > DC) ? "Đậu" : "Rớt";
              } else $msg = "Điểm phải bé hơn hoặc bằng 10";
          } else $msg = "Điểm phải lớn hơn 0";
      } else $msg = "Dữ liệu không đúng, vui lòng nhập lại";
  }

  ?>
  <form action="" method="post">
    <table style="background-color: #fff9dc">
        <thead>
            <tr>
                <th colspan="2" align="center" style="background-color: #ffd871">
                    <h3 style="color: #9d5913">KếT QUẢ THI ĐẠI HỌC</h3>
                </th>
            </tr>
        </thead>
      <tbody>
      <tr>
          <td>Toán:</td>
          <td>
              <input type="text" name="toan" value="<?php if(isset($toan)) echo $toan;?>" />
          </td>
      </tr>
      <tr>
          <td>Lý:</td>
          <td>
              <input type="text" name="ly" value="<?php if(isset($ly)) echo $ly;?>" />
          </td>
      </tr>
      <tr>
          <td>Hóa:</td>
          <td>
              <input type="text" name="hoa" value="<?php if(isset($hoa)) echo $hoa;?>" />
          </td>
      </tr>
      <tr>
          <td>Điểm chuẩn:</td>
          <td>
              <input type="text" disabled style="background-color: #fedada" value="<?php echo DC;?>" />
          </td>
      </tr>
      <tr>
          <td>Tổng điểm:</td>
          <td>
              <input type="text" disabled style="background-color: lightgoldenrodyellow" value="<?php if(isset($tongdiem)) echo $tongdiem;?>" />
          </td>
      </tr>
      <tr>
          <td>Kết quả thi:</td>
          <td>
              <input type="text" disabled style="background-color: lightgoldenrodyellow" value="<?php if(isset($ketquathi)) echo $ketquathi;?>" />
          </td>
      </tr>
      <tr>
          <td colspan="2" align="center">
              <input type="submit" value="Xem kết quả" name="submit" />
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