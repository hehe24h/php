<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Hàm và xây dựng hàm trong PHP</title>

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
		<h1 class="text-center">Hàm và xây dựng hàm trong PHP</h1>
		<div class="container">
			<p>Hàm là một chương trình thực hiện một tác vụ cụ thể, chúng thực chất
			là những đoạn chương trình nhỏ giúp giải quyết một vấn đề lớn. Hàm là
			một phương pháp lập trình hướng thủ tục trong ngôn ngữ PHP và các ngôn ngữ
			bậc cao khác, hiểu được nó bản mới có thể học những kiến thức kiểu lập
			trình hướng đéo tượng</p>

<h1>Cấu trúc của một hàm trong PHP</h1>

VD:

<?php 
$number = 26;
if (check_number($number)) {
	echo "Số chẵn em eii";
} else {
	echo "Số lẻ mất rồi";
}

function check_number($number) {
	if ($number % 2 == 0) {
		return true;
	} else {
		return false;
	}
}
?>

<h1>Truyền nhiều biến vào hàm trong PHP</h1>

<?php 
// $a = 96;
// $b = 69;

// echo ab($a, $b);

// function ab($a, $b) {
// 	return $a + $b;
// }
?>

<h1>Gán giá trị mặc đinh cho biến truyền vào</h1>
<p>Nếu một hàm trong PHP bạn khai báo có hai biến truyền vào mà lúc sử dụng bạn chỉ truyền
có một biến vào thì hệ thống sẽ báo lỗi. Trong thực tế nếu muốn có những hàm không ràng
buộc phải bắt buộ truyền đủ biến vào nên ta sẽ có chức năng là truyền giá trị mặc định cho 
biến trong các hàm.</p>


<?php 
$a = 1;
$b = 1;
$h = 666;

echo result($a, $b);

function result($a, $b, $c = false) {
	$result = $a + $b;
	if ($c =! true) {
		$result = $result + $c;
	}
	return $result;
}
?>

<h1>Biến toàn cục và biến cục bộ</h1>

<?php 
$bien_toan_cuc = 2; //Biến toàn cục.

function check() {
	$bien_cuc_bo = 2; //Biến cục bộ.
	global $bien_toan_cuc; //Lấy biến toàn cục cho vào function.
	if ($bien_toan_cuc % $bien_cuc_bo) {
		echo "Chia không dư";
	} else {
		echo "Chia có dư";
	}
}
echo check();
?>



<h1>Biến Tĩnh</h1>
<p>Biến tĩnh là các biến cố định bên trong các hàm, không giống như các biến toàn cục
chúng không được biết đến bên ngoài hàm tức là chỉ biến đến bên trong hàm nhưng giá
trị của chúng sẽ lưu lại sau mỗi lần gọi hàm. Để khai báo biến tĩnh ta dùng <code>static $bien</code></p>
<?php 
function check_static() {
	static $a = 69;
	$a++;
	echo "Số là {$a} <br>";
}

check_static();
check_static();
check_static();
check_static();
check_static();
?>



<h1>Cách gọi hàm trong PHP</h1>
<h2>Truyền bằng giá trị</h2>
<p>Mặc định tất cả các đối số truyền vào hàm đều là truyền bằng giá trị. Điều này có nghĩa là
khi các đối số được truyền đến hàm được gọi giá trị được truyền thông qua các biến tạm (tham số hình thức)
, mọi thao tác chỉ thực hiện trên biến ttamj này nên nó không hề tác động lên biến chính của
mình. Điều này có nghĩa là nếu truyền bằng giá trị thì trong hàm nếu ta tác động đến
giá trị biến truyền vào thì sau khi thoát khỏi hàm giá trị đó không thay đổi</p>

VD:

<?php 
$number_1 = 69;
//Tăng giá trị lên 1.
function number_1($number) {
	return $number + 1;
}
echo number_1($number_1);

?>

<h2>Truyền bằng tham chiếu</h2>
<p>Khi các đối số của hàm được truyền bằng giá trị thì giá trị của các đối số của hàm
đang gọi không bị thay đổi. Tuy nhiên đôi khi bạn muốn những giá trị đó thay đổi theo
thì lúc này phải truyền biến vào hàm dạng tham chiếu.</p>

<p>VD:</p>

<?php 
$tham_chieu = 96;
//Hàm tăng giá trị tham số truyền vào lên 1.
function tham_chieu(&$tham_chieu) {
	$tham_chieu = $tham_chieu + 1;
	return $tham_chieu;
}
echo tham_chieu($tham_chieu) . "<br>";
echo $tham_chieu;
?>
<p>Biến <code>$tham_chieu</code> đã bị thay đổi từ 96 thành 97. Dấu & có nghĩa là cú pháp
trong PHP báo cho trình biên dịch biết đó là một biến ở dạng tham chiếu.
</p>

<h1>Các quy tắc và phạm vi của hàm</h1>
<?php 
function A() {
	B();	
}
?>

		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>