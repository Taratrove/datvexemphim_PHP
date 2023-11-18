<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Tính tiền điện</title>
</head>

<body>
  <?php
  if (isset($_POST['submit'])) {
      $cc = $_POST['cc'];
      $cm = $_POST['cm'];
      $dg = $_POST['dg'];
      if (is_numeric($cc) && is_numeric($cm) && is_numeric($dg)) {
          if ($cc > 0 && $cm > 0 && $dg > 0) {
              if ($cm > $cc) {
                  $st = ($cm - $cc) * $dg;
              } else $msg = "Chỉ số mới phải lớn hơn chỉ số cũ";
          } else $msg = "Chỉ số và đơn giá phải lớn hơn 0";
      } else $msg = "Dữ liệu không đúng, vui lòng nhập lại";
  }

  ?>
  <form action="" method="post">
    <table style="background-color: #fff9dc">
        <thead>
            <tr>
                <th colspan="2" align="center" style="background-color: #ffd871">
                    <h3 style="color: #9d5913">Thanh Toán Tiền Điện</h3>
                </th>
            </tr>
        </thead>
      <tbody>
      <tr>
          <td>Chỉ số cũ:</td>
          <td>
              <input type="text" name="cc" value="<?php if(isset($cc)) echo $cc;?>" />
          </td>
      </tr>
      <tr>
          <td>Chỉ số mới:</td>
          <td>
              <input type="text" name="cm" value="<?php if(isset($cm)) echo $cm;?>" />
          </td>
      </tr>
      <tr>
          <td>Đơn giá:</td>
          <td>
              <input type="text" name="dg" value="<?php echo (!empty($dg) && $dg >= 0) ? $dg : 20000; ?>" />
          </td>
      </tr>
      <tr>
          <td>Số tiền thanh toán:</td>
          <td>
              <input type="text" disabled style="background-color: #fedada" value="<?php if(isset($st)) echo $st;?>" />
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