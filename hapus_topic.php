<?php
if(isset($_GET['idtopic'])){
	include('koneksi.php');
	$idtopic = $_GET['idtopic'];
	$cek = mysql_query("SELECT idtopic FROM tbtopic WHERE idtopic='$idtopic'") or die (mysql_error());
	if(mysql_num_rows($cek) == 0){
	}else {
		$hapus = mysql_query("DELETE FROM tbtopic WHERE idtopic='$idtopic'");

		if ($hapus) {
			echo 'Data Berhasil di Hapus';
			echo '<a href="topic.php">Kembali</a>';

		} else {
			echo 'Data tidak Terhapus';
			echo '<a href="topic.php">Kembali</a>';

		}
		header('location:topic.php');
	exit;
	}
	
}

	
?>