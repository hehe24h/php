<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Lệnh break, continue, goto, die, exit trong PHP</title>

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
		<h1 class="text-center">Lệnh break, continue, goto, die, exit trong PHP</h1>
<div class="container">
	<h1>Câu lênh break</h1>
	<p>Dùng để thoát vòng lặp mặc dù vòng lặp chưa kết thúc.</p>

<?php 
for ($i=1; $i <200 ; $i++) { 
	echo $i . "<br>";
	if ($i == 40) { //Nếu i bằng 40 thì dừng lại không lặp nữa
		break;
	}
}
?>


<h1>Câu lệnh continue</h1>
<p>Nó sẽ bỏ qua đoạn dưới nó và tiếp tục điều kiện</p>

<?php 
for ($i=0; $i<=50  ; $i++) { 
	if ($i == 23) { //Sẽ bỏ 23 khỏi vòng lặp
		continue;
	}
	echo $i . "<br>";
}
?>

<p>Nếu i bằng 23 thì sẽ nhảy qua vòng lặp mới nên lệnh echo i sẽ k thực hiện được và từ 
đó số 23 k hiện.</p>
<p>Có thể thực hiện lệnh này cho tất cả các vòng khác</p>


<h1>Câu lệnh goto</h1>
<p>Câu lệnh này dùng để nhảy đến một dòng code nào đó</p>


<pre>
$a = 12;
$b = 13;
$c = $a + $b;
  
echo $a;
  
goto label_end;
  
echo $b;
  
label_end;
</pre>

<h1>Lệnh die và exit</h1>
<p>Trong khi lệnh break và continue chỉ ảnh hưởng trong vòng lặp thì lệnh die và exit
lại ảnh hưởng cả tới chương trình, nếu sử dụng hai lệnh die và exit này thì chương
trình sẽ dừng ngay lập tức và những dòng code dưới die và exit sẽ không được thực hiện</p>

<p>VD:</p>

<?php 
echo "Ròm Tiến Đạt";
die();
echo "Tiến Đạt Ròm";
exit();
?>















</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>