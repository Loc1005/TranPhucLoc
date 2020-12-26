<?php
	include_once 'config/db.php';
	session_start();

if(isset($_SESSION['cart'])){
	$sql = "SELECT * FROM `khachhang` WHERE tendangnhap = '".$_SESSION['se']."'";
	$stm = mysqli_query($conn, $sql);
	$kh = $stm->fetch_assoc();

	$makh = $kh['makh'];
	$tenkh = $_POST['tenkh'];
	$diachi = $_POST['dia_chi'];
	$sdt = $_POST['sdt'];
	$ghichu = $_POST['ghichu'];
	$sqldohan = "INSERT INTO `donhang`(`makh`, `tenkh`, `diachi`, `sdt`) VALUES ($makh,'$tenkh','$diachi','$sdt')";
	$stm = mysqli_query($conn, $sqldohan);
	$sqliddonhan = "SELECT `madh` from `donhang` ORDER BY `madh` DESC";
	$stm = mysqli_query($conn, $sqliddonhan);
	$iddonhan = $stm->fetch_assoc();

	$cart = $_SESSION['cart'];
	foreach($cart as $key=> $item){
		$id=$iddonhan['madh'];
		
		$sqlchitietdonhan = "INSERT INTO `chitietdonhang`(`madh`, `masp`, `soluong`) VALUES ($id,$key,$item)";
	
		$stm = mysqli_query($conn, $sqlchitietdonhan);
	}

}else {
}

?>