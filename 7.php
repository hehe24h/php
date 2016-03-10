<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Vòng lặp while và do while trong PHP</title>

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
		<h1 class="text-center">Vòng lặp while và do while trong PHP</h1>
<div class="container">
	<p>Khác với vòng lặp for vòng lặp while và vòng lặp do while lặp đối với những bài toán
	không xác định được số lần lặp còn vòng lặp for biết được số lần lặp mới lặp.
	được. Tuy nhiên có một số bài toán có thể dùng cả 3 vòng lặp for while và do while
	để giải quyết vấn đề. Nhưng muốn làm được thì trước tiên ta phải tìm hiểu khái
	niệm vòng lặ while và do while</p>

	<h1>Cấu trúc vòng lặp while</h1>
	<pre>
		while ($condition) {
		//Dòng code
		}
	</pre>
	<p>Trong đó <code>$condition</code> là điều kiện để dừng vòng lặp. Nếu <code>$condition</code>
	có giá trị là false thì vòng lặp kết thúc, ngược lại nếu là true thì vòng lặp tiếp tục
	lặp đến khi tèo thì thôi :D
	Vòng lặp while sẽ lặp vô hạn nếu biểu thức điều kiện cho nó lặp truyền vào là luôn đúng
	</p>

	<p>Dùng while để hiện kết quả lặp từ 1 tới 10</p>

	<?php 
	$i = 1; //Biến để lặp.
	while ($i <= 10) { //$i nhỏ hơn 10 thì lặp
		echo $i . " "; //Xuất ra màn hình.
		$i ++; //Tăng $i ++
	}
	?>
	<h1>Cấu trúc vòng lặp do while</h1>
	<p>Vòng lặp while sẽ kiểm tra điều kiện trước rồi thực hiện câu lệnh bên trong
	vòng lặp còn vòng lặp do while ngược lại sẽ thực hiện câu lệnh trong vòng lặp trước 
	rồi mới kiểm tra điều kiện. Nếu điều kiện đúng thì sẽ thực hiện vòng lặp kế tiếp. Nếu
	sai thì sẽ dừng vòng lặp. Vòng lặp do while trong PHP luôn luôn thực hiện ít nhất
	một lần lặp vì nó thực hiện trước xong mới kiểm tra điều kiện.</p>

	<pre>
		do {
			//Code
		} while ($condition);
	</pre>

	VD:
	<?php
	$i = 1; 
	do {
		echo $i;
		$i++;
	} while ($i <= 10);
	?>
	<p>Xuất hiện các số từ 1 đến 10.</p>

	<h1>Truy xuất mảng dùng while và do while</h1>
	<p>Tương tự như vòng lặp for, vòng lặp while và do while có thể dùng để
	truy xuất các phần tử trong mảng chỉ mục</p>
	VD:

	<?php 
	$year = array(
		1969,
		12,
		142,
		194569,
		196549,
		19756669
		);
	$i = 0;
	$count = count($year);
	echo "Có tất cả {$count} phần tử trong mảng <br>";
	//Dùng while để gọi phần tử trong mảng ra.
	// while ($i < $count) {
	// 	// $year = null;
	// 	echo $year[$i] . "<br>";
	// 	$i++;
	// }

	do {
		echo $year[$i] . " ";
		$i++;
	} while ( $i < $count);

	?>









</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>