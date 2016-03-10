<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Toán tử và biểu </title>

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
	<p>Toán tử và quan hệ</p>
	<p>Để so sách trong php dùng $dat == $tien</p>
	<p>	== Bằng</p>
	<p>!= Không bằng</p>

	So sánh giá trị và kiểu dữ liệu
	<br>

	<?php 
	$a = '9900'; //Kiểu string
	$b = 9900; //Kiểu int
	$c = ($a == $b);
	var_dump($c);
	 ?>

<p>Toán tử luận lý là ký hiệu dùng để kết hợp hay phủ định biểu thức có chứa các tiasn tử quan hệ
những biểu thức dùng toán tử luận lý trả về giá trị TRUE HOẶC FALSE</p>

<p>&& nghĩa là và END trả về là true khi cả 2 toán hạng đều là true</p>
<p>|| or trả về kết quả là đúng khi một trong hai giá trị trả về là true</p>
<p>! NOT chuyển đổi giá trị của toán hạng duy nhất thành true hoặc false, đổi đúng
thành sai ấy mà</p>

VD:

<?php 
$a = 1000;
$b = 2000;
$c = ($a + $b);
// echo $c;
$d = ($a < $b) || ($c >= 3000);
var_dump($d);
 ?>



</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>