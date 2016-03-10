
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Tìm kiếm tuyến tính trong PHP</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">Tìm kiếm tuyến tính trong PHP</h1>
		<div class="container">
			<p>Tìm kiếm tuyến tính hay tìm kiếm tuần tự là một thuật toán tìm kiếm một phần tử cho trước
			nằm trong một danh sách (mảng) bằng cách duyệt lần lượt các phần tử và so sánh đến
			khi tìm thấy nó và phang.</p>

			<p>VD:</p>

			<?php 
			$array = array(10, 20, 69, 44, 16, 11);
			echo "<pre>";
			var_dump($array);
			echo "</pre>";
			$search = 69;
			$count_array = count($array);
			$check = null;
			// Duyệt mảng
			echo "Mảng có số phần tử là {$count_array} <br>";
			for ($i=0; $i < $count_array; $i++) { 
				// echo $i . "<br>";
				// break;
				echo $array[$i];
				echo "<br>";
			}
			?>



		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>