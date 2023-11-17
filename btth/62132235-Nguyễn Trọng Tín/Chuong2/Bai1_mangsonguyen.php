<!DOCTYPE html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Mảng số nguyên</title>
</head>

<body>
  <?php
  if (isset($_POST['n']) && is_numeric($_POST['n']) && $_POST['n'] > 0)
      $n = $_POST['n'];
  else $n = 0;
  $ketqua = "";
  if (isset($_POST['hthi'])) {
    $arr = array();
    for ($i = 0; $i < $n; $i++) {
      $x = rand(-100, 200);
      $arr[$i] = $x;
    }
    $ketqua = "Mảng được tạo là:" . implode(" ", $arr) . "&#13;&#10;";
    $count = 0;
    foreach ($arr as $v) {
      if ($v % 2 == 0)

        $count++;
    }
    $ketqua .= "Có $count số chẵn trong mảng" . "&#13;&#10;";
    $count = 0;
    foreach ($arr as $v) {
      if ($v < 100)
        $count++;
    }
    $ketqua .= "Có $count số nhỏ hơn 100 trong mảng" . "&#13;&#10";
    $Sum = 0;
    foreach ($arr as $v) {
      if ($v < 0)
        $Sum = $Sum + $v;
    }
    $ketqua .= "Tổng giá trị các số âm trong mảng là $Sum" . "&#13;&#10";
    $temp;
    $daySo = "";
    for ($i = 0; $i < count($arr); $i++) {
      for ($j = $i + 1; $j < count($arr); $j++) {
        if ($arr[$i] > $arr[$j]) {
          $temp = $arr[$i];
          $arr[$i] = $arr[$j];
          $arr[$j] = $temp;
        }
      }
    }
    $ketqua .= "Dãy số ban đầu được sắp tăng dần là: ";
    for ($i = 0; $i < count($arr); $i++) {
      $daySo .= "$arr[$i]  ";
    }
    $ketqua .= $daySo . "&#13;&#10";
    $ketqua .= "Các số có chữ số cuối là số lẻ là: ";
    $daySo = "";
    for ($i = 0; $i < count($arr); $i++) {
      $soCuoi = $arr[$i] % 10;
      if ($soCuoi % 2 != 0)
        $daySo .= "$arr[$i]  ";
    }
    $ketqua .= $daySo;
  }
  ?>
  <form action="" method="post">
    Nhập n: <input type="text" name="n" value="<?php echo $n ?>" />
    <input type="submit" name="hthi" value="Xử lý" /><br>
    Kết quả: <br>
    <textarea cols="70" rows="10" name="ketqua"><?php echo $ketqua ?>
	</textarea>
  </form>
</body>

</html>