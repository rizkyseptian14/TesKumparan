<?php
if(isset($_GET['idnews'])){
	include('koneksi.php');
	$idnews = $_GET['idnews'];
	$cek = mysql_query("SELECT idnews FROM tbnews WHERE idnews='$idnews'") or die(mysql_error());
	if(mysql_num_rows($cek) == 0){
	}else{
		
		$hapus = mysql_query("DELETE FROM tbnews WHERE idnews='$idnews'");
		
		if($hapus){
			
			echo 'Data berhasil di hapus! ';		
			echo '<a href="index.php">Kembali</a>';	
			
		}else{
			
			echo 'Gagal menghapus data! ';		
			echo '<a href="index.php">Kembali</a>';	
		
		}
	header('location:index.php');
	exit;
}
}
?>