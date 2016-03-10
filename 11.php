<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Giải thuật đệ quy trong PHP</title>

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
	<div class="container">
		<h1 class="text-center">Giải thuật đệ quy trong PHP</h1>
		<p>Đệ quy liên quan rất nhiều trong toán học, một tính chất toán học được gọi là đệ quy
		nếu trong đó một lớp các đối tượng có các tính chất giống nhau và có mối quan hệ với nhau, kết quả 
		của thằng một là thành phần cấu tạo lên thằng 2 và cứ thế tiếp tục</p>
		<p>Muốn dùng được đệ quy thì phải viết hàm vì mỗi lần đệ quy là hàm gọi lại chính
		nó. Một chương trình đệ quy phải có điều kiện dừng, vì nếu không có thì chương trình nó
		sẽ lặp vô hạn. VD tính tổng từ 1 đến n thì điều kiện dừng là tới khi n rồi thì không được
		tính nữa còn nếu tính từ n về 1 thì điều kiện là n = 1</p>

		<h2>Đệ quy tuyến tính</h2>
		<p>Đây là loại đệ quy mà trong hàm đệ quy chỉ gọi duy nhất một lần đến chính nó</p>
		<p>VD: Cho n = 100 tính tổng các số từ 1 đến 100.</p>

		<p>Bài này sử dụng vòng lặp ta làm như sau:</p>
		<?php 
		function total($number) {
			$total = 0;
			for ($i=0; $i <= $number ; $i++) { 
				$total += $i;
			}
			return $total;
		}
		
		$done = 0;
		for ($i=0; $i <=3 ; $i++) { 
			echo $i;
			$done += $i;
		}
		echo $done;


		echo "<br>";
		echo total(2);
		?>

		<p>Còn với giải thuật đệ quy thì ý tưởng là mỗi lần đệ quy ta sẽ lấy số đó cộng với hàm chính
		nó và biến truyền vào là số đó trừ đi 1. Điều kiện dừng là nếu số đó = 1 thì dừng vòng lặp và
		trả kết quả về. Phân tích kĩ thì mỗi lần đệ quy là 1 lần lặp, cộng dồn các lần đệ quy chính là 
		cộng dồn các lần lặp nên kết quả nó sẽ giống với VD trên.</p>

		<?php 
		function total_1($number_1) {
			if ($number_1 == 1) { return $number_1; } 
				return $number_1 + total_1($number_1-1);
			}
		echo "<br/>";
		echo total_1(3);
		?>
		

	</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>