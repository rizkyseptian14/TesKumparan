<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');
	$judultopic		= $_POST['judultopic'];	
	$isitopic		= $_POST['isitopic'];	
	$tambah = mysql_query("INSERT INTO tbtopic VALUES(NULL,'$judultopic', '$isitopic')") or die(mysql_error());
	if($tambah){
		
		echo 'Data berhasil di tambahkan! ';		
		echo '<a href="topic.php">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menambahkan data! ';		
		echo '<a href="tambah_topic.php">Kembali</a>';	
		
	}
	header('location:topic.php');
	exit;
}
?>