<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');
	$topic			= $_POST['topic'];	
	$judulnews		= $_POST['judulnews'];	
	$isinews		= $_POST['isinews'];	
	$tambah = mysql_query("INSERT INTO tbnews VALUES(NULL, '$topic', '$judulnews', '$isinews')") or die(mysql_error());
	if($tambah){
		
		echo 'Data berhasil di tambahkan! ';		
		echo '<a href="index.php">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menambahkan data! ';		
		echo '<a href="tambah_news.php">Kembali</a>';	
		
	}
	header('location:index.php');
	exit;
}
?>