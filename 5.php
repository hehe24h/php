<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Câu lệnh switch trong PHP</title>

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
		<h1 class="text-center">Câu lệnh switch trong PHP</h1>

		<div class="container">
			<?php 
			$number = 8;
			switch ($number) {
				case '1':
					echo "Số 1";
					break;
				case '2':
					echo "Số 2";
					break;
				case '3':
					echo "Số 3";
					break;
				default:
					echo "Méo có số";
					break;
			}
			var_dump($number)
			 ?>

			 <p>Kiểm tra số dư hay không dư</p>
			 <?php 
			 $number = 60;
			 $chia = null;
			 switch ($number) {
			 	case is_int($number): //Kiểm tra xem nó có phải là int hay không
			 		$chia = $number % 2; //Thực hiện biểu thức chia cho 2
			 		switch ($chia) {
			 			case '0':
			 				echo "Nó là số chẵn";
			 				break;
			 			
			 			default:
			 				echo "Nó là số lẻ";
			 				break;
			 		}
			 		break;
			 	default:
			 		# code...
			 		break;
			 }
			  ?>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>