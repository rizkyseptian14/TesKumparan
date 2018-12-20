<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');
	$idnews			= $_POST['idnews'];	
	$topic			= $_POST['topic'];	
	$judulnews		= $_POST['judulnews'];	
	$isinews		= $_POST['isinews'];	
	$update = mysql_query("UPDATE tbnews SET topic='$topic', judulnews='$judulnews', isinews='$isinews' WHERE idnews='$idnews'") or die(mysql_error());
	if($update){
		
		echo 'Data berhasil di simpan! ';	
		echo '<a href="index.php?idnews='.$idnews.'">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menyimpan data! ';		
		echo '<a href="edit_news.php?idnews='.$idnews.'">Kembali</a>';	
		
	}
	header('location:index.php');
	exit;
}
?>