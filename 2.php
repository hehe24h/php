<!DOCTYPE html>
<html lang="vi-VN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <meta http-equiv="refresh" content="30"> -->
		<title>Bài 2</title>

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
		<h1 class="text-center">Bài số 2: Các kiểu dữ liệu trong PHP</h1>

		<div class="container">
Trong PHP có tất cả 7 kiểu dữ liệu, trong đó gồm INT, kiểu boolean, kiểu số thực float, double,
kiểu chuỗi, kiểu mảng array, kiểu null, kiểu đối tượn object.

<p>Kiểu dữ liệu int</p>
Chữ int là viết tắt của INTEGER là một kiểu dữ liệu dạng số và có thể viết ở nhiều cơ số khác nhau.
<br/>
VD:
<br/>
<?php 
$thap_phan = 123; //Số thập phân.
$so_am = -123; //Số âm
$bat_phan = 0123; //Số bát phân.
$thap_luc_phan = 0x1A //Số thập lục phân.
?>
<br/>
Kiểu số int không dùng dấu nháu để bao quanh nó và kích thước của kiểu int là 32 bit. Trong PHP không hỗ trợ nhiều kiểu Unsigned Integer "Số Nguyên Dương" nên nếu sử dụng quá giới hạn thì mặc nhiên trình biên dịch sẽ hiểu là kiểu số thực float. Tuy nhiên không phải lúc nào trường hợp đó cũng đúng.
<br/>


Khai báo kiểu INT, sẽ gán giá trị cho nó kể cả số là âm.
<br/>
<br/>
<?php
$tuoi = -99494;
// echo $tuoi;
$tuoi = (int)$tuoi;
echo $tuoi;
?>

<br/>
<?php 
$rom = '123'; //Kiểu chuỗi có giá trị là 123
$tien = 123; //Kiểu int có giá trị là 123
$dat = $rom + $tien; //Kết quả có kiểu là int
var_dump(is_int($rom));
var_dump(is_int($tien));
?>


<br/>

<?php
$rom = 'A123';
$rom = (int)$rom;
echo $rom;
//Ban đầu ròm là 1 chuỗi có giá trị là a123, gán cho ròm là integer rồi xuất ra ròm có kết quả là 0. Tại sao? vì kí tự đầu không phải là dạng số nên sẽ tự động cắt bỏ tất cả các kí tự đằng sau a nên chuỗi này sẽ rỗng, mà giá trị rỗng khi chuyển sang int sẽ có giá trị là 0.
?>

<br/>


<?php
$rom = '123a';
// $rom = (int)$rom;
// echo $rom;
//Xóa a vì không thuộc kiểu int. Giá trị xuất ra sẽ là 123

echo (is_integer($rom)); //Kiểm tra xem có phải là integer hay không, dùng is_integer hoặc is_int
?>
<br/>
<br/><br/>


<?php
$a = false;
// print_r($a);
//Kiểu dữ liệu boolean, là kiểu dữ liệu đơn giản nhất trong các kiểu dữ liệu PHP. Chưa hai giá trị duy nhất là TRUE and FALSE.
?>

====


<?php 
$bool = 1; //kieu int
$bool = (boolean)$bool;
echo (is_bool($bool));

?>

====

Kiểu số thực là kiểu số có phần dư, kiểu int là những số không có phần dư nào.
1.223.3 là kiểu số thực, 123 là kiểu nguyên int
gồm có kiểu float và double

<?php
$a = 1234;
$a = (float)$a;
$a = (double)$a;
echo $a . "<br/>";
echo (is_float($a));
?>



Kiểu chuỗi "string" và char ký tự mỗi ký tự là 1 byte là một trong 256 ký tự khác nhau. Để khai báo thì chỉ cần khai báo một biến và gán giá trị chuỗi cho nó.

Được bao quanh dấu nháy đơn hoặc nháy kép
ép kiểu cũng như các vd trên.
==
<?php 
$rom = 123;
$rom = (string)$rom;
echo (is_string($rom));
 ?>
==


Kiểu mảng array là danh sách phần tử có cùng kiểu dữ liệu là một trong những kiểu dữ liệu trong php. Có hai loại mảng là mảng một chiều và mảng nhiều chiều. Các phần tử của mảng có thể không cùng kiểu dữ liệu và các phần tử của mảng được truy xuất thông qua các chỉ mục vị trí của nó nằm trong mảng.


vd:

<?php 
	$rom = array(); //khởi tạo mảng gán vào biến rom
	$sinh_vien = array('Tiến Đạt', 'Ròm Đạt');
	$sinh_vien1 = array(
		0 => 'Ròm Tiến Đạt',
		1 => 'Tiên Đạt Ròm'
		);

	echo "<pre>";
	print_r($sinh_vien);
	var_dump($sinh_vien);
	var_dump($sinh_vien1);
	echo "</pre>";
 ?>

<br>


<?php 
$tiendat = array(
	0 => 'Tiến Đạt',
	1 => 'Ròm'
	);
echo "<pre>";
var_dump($tiendat);
echo "</pre>";
?>


<?php
$rom = array();
$rom[] = 'Vũ Tiến Đạt';
$rom[] = 'Đạt Vũ Tiến';
var_dump($rom);
?>

<strong>Mảng có chỉ mục</strong>

<p>Là mảng có các phần tử được định danh một kiểu chỉ mục kiểu số và bắt đầu bằng số 0 và phần tử cuối cùng có chỉ mục là (n-1) trong đó n là tổng số phần tử của mảng. Điều này có nghĩa nếu mảng của bạn có 10 phần tử thì các vị trí lần lượt của mảng là từ 0 - đến 9</p>


Truy suất phần tử của mảng dùng cú pháp $tenmang[1];

<br>

VD:

<?php 
$tiendat = array(
0 => 'Ròm Tiến Đạt',
1 => 'Đạt Vũ Tiến'
	);
echo $tiendat[1];


 ?>


<p>Mảng kết hợp: Là mảng cps các phần tử được định danh bằng một cacis tên và các vị trí các phần tử không có thứ tự</p>

	<?php 
		$tiendat = array(
			'tiendat_1' => 'Ròm Tiến Đạt',
			'tiendat_2' => 'Đạt Vũ Tiến'
						);
		echo "<pre>";
		var_dump($tiendat);
		echo "</pre>";
 	?>	
















		</div>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>		