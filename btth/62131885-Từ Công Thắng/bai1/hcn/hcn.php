
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính diện tích hình chữ nhật</title>
	<style>
        body {
			padding: 20px;
			max-width: 400px;
			margin: 1%;
			border: 1px solid black;

		}

		button[name="tinh"] {
			background-color: green;
			color: white;
		}
		h1 {
			color: red;
            background-color: yellow;
		}
	</style>
</head>
<body>
<?php
		$chieuDai = '';
		$chieuRong = '';
		$dienTich = '';

		if (isset($_POST['tinh'])) {
			$chieuDai = $_POST['chieu-dai'];
			$chieuRong = $_POST['chieu-rong'];

			$dienTich = $chieuDai * $chieuRong;
		}
	?>
	<form method="POST" action="">
		<h1>Tính diện tích hình chữ nhật</h1>

		<label for="chieu-dai">Chiều dài:</label>
		<input type="number" id="chieu-dai" name="chieu-dai" value="<?php echo $chieuDai; ?>" min="0" required><br>

		<label for="chieu-rong">Chiều rộng:</label>
		<input type="number" id="chieu-rong" name="chieu-rong" value="<?php echo $chieuRong; ?>" min="0" required><br>

		<label for="dien-tich">Diện tích:</label>
		<input type="text" id="dien-tich" name="dien-tich" value="<?php echo $dienTich; ?>" readonly><br>

		<button type="submit" name="tinh">Tính</button>
	</form>
</body>
</html>