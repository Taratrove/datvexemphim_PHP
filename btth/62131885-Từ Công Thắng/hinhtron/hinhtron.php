<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chu vi và diện tích hình tròn</title>
	<style>
		body {
			padding: 20px;
			max-width: 400px;
			margin: 3%;
			border: 1px solid black;
		}

		h1 {
			color: red;
            background-color: burlywood;
		}

		input[type="text"] {
			background-color: #f0f0f0;
		}

		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		.button-container {
			margin-top: 20px;
		}

		button[name="tinh"] {
			background-color: green;
			color: white;
            padding: 5px;
            width: 15%;


		}
	</style>
</head>
<body>
<?php
		$banKinh = '';
		$dienTich = '';
		$chuVi = '';

		if (isset($_POST['tinh'])) {
			$banKinh = $_POST['ban-kinh'];

			if ($banKinh > 0) {
				$dienTich = 3.14 * pow($banKinh, 2);
				$chuVi = 2 * 3.14 * $banKinh;
			} else {
				echo "<p>Bán kính phải lớn hơn 0!</p>";
			}
		}
	?>
	<form method="POST" action="">
		<h1>Tính diện tích và chu vi hình tròn</h1>

		<label for="ban-kinh">Bán kính:</label>
		<input type="number" id="ban-kinh" name="ban-kinh" value="<?php echo $banKinh; ?>" min="0.01" step="0.01" required><br>

		<label for="dien-tich">Diện tích:</label>
		<input type="text" id="dien-tich" name="dien-tich" value="<?php echo $dienTich; ?>" readonly><br>

		<label for="chu-vi">Chu vi:</label>
		<input type="text" id="chu-vi" name="chu-vi" value="<?php echo $chuVi; ?>" readonly><br>

		<button type="submit" name="tinh">Tính</button>
	</form>
</body>
</html>