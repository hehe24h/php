<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Vòng lặp for trong php</title>

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
		<h1 class="text-center">Vòng lặp for trong php</h1>
		<div class="container">
<p>Vòng lặp là một mã lệnh trong đó chương trình được thực hiện lặp đi lặp lại
nhiều lần cho đến khi thỏa mãn một điều kiện nào đó. Vòng lặp là một khái
niệm cơ bản trong lập trình cấu trúc</p>
<p>Trong PHP có các vòng lặp sau: vòng for vòng while và do while, vòng lặp foreach</p>

VD:
<pre>
	for($bien_dieu_khien; $bieu_thuc_dieu_khien; $bieu_thuc_thay_doi_bien_dieu_khien)
	{

	}
</pre>

<?php 
for ($i=0; $i <= 100; $i++) { 
	echo $i . "-";
}
 ?>

<p>Vòng lặp for kết hợp với mảng</p>

VD:
	<?php 
	$sinh_vien = array(
		'Nguyễn Văn Tèo',
		'Lò Thị Chịch',
		'Sướng Xong Phê'
		);
	$count = count($sinh_vien); //Đếm số phần tử trong mảng sinh viên.
	for ($i=0; $i < $count ; $i++) { 
		echo $sinh_vien[$i] . "<br/>";
	}
	?>











		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>