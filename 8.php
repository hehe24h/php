<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Vòng lặp foreach trong PHP</title>

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
		<h1 class="text-center">Vòng lặp foreach trong PHP</h1>

		<div class="container">
			<p>Vòng lặp foreach trong PHP dùng để lặp các phần tử trong mảng, được
			sử dụng rất nhiều trong PHP vì tính đơn giản.</p>
<h1>Cú pháp vòng lặp foreach trong PHP</h1>
<pre>
foreach ($array as $key => $value) {
	//Lệnh
}
</pre>
<p>hoặc</p>

<pre>
	foreach ($array as $value) {
	//Lệnh
	}
</pre>


<p>Trong đó <code>$array</code> là mảng cần lặp, <code>$key</code> là số chỉ mục hoặc là key
<code>$value</code> là giá trị của phần tử ở vị trí <code>$key</code>
</p>

<p>VD</p>

<?php 
$array = array(
	1985,
	1986,
	1987,
	1988,
	1989,
	2010,
	);
foreach ($array as $key => $value){
	echo $key . "-" . $value . "<br>";
}
?>

















		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>