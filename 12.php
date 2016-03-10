<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Thuật toán sắp xếp nổi bọt trong PHP</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">Thuật toán sắp xếp nổi bọt trong PHP (bubble sort)</h1>
		<div class="container">
			<h2>Sắp xếp nổi bọt tăng dần.</h2>
			<p>Được xứ lý như sau:</p>
			<p>VD:</p>
			<?php 
 			$array = array(1, 2, 3, 4, 5, 6);
 			$count = count($array);
 			// echo "Mảng gồm có số phần tử là {$count}";
 			//Kiểm tra vòng lặp.
 			// for ($i=0; $i < ($count-1); $i++) { 
 			// 	echo $i;
 			// }
 			
 			//Sắp xếp mảng.
 			// for ($i=0; $i < ($count - 1); $i++) {
 			// 	for ($j=$i+1; $j < $count; $j++) {
 			// 		if ($array[$i] > $array[$j]) {
 			// 			//Hoán vị.
 			// 			$tmp = $array[$j];
 			// 			$array[$j] = $array[$i];
 			// 			$array[$i] = $tmp;
 			// 		}
 			// 	}
 			// }
 			// // Check list
 			// for ($i=0; $i < $count; $i++) { 
 			// 	echo $array[$i] . "<br/>";
 			// }
			?>

			<h2>Sắp xếp nổi bọt giảm dần</h2>
			<p>Thuật toán sắp xếp nổi bọt giảm dần tương tự như so sánh tăng dần, so sánh 2 phần tử
			với nhau nếu phần tử thứ <code>$i</code> bé hơn phần tử  <code>$i+1</code> thì hóa vị hai
			vị trí đó. Ta có cách giải như sau.</p>


		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>