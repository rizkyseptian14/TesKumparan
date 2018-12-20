<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');	
	$idtopic		= $_POST['idtopic'];
	$judultopic		= $_POST['judultopic'];	
	$isitopic		= $_POST['isitopic'];	
	$update = mysql_query("UPDATE tbtopic SET judultopic='$judultopic', isitopic='$isitopic' WHERE idtopic='$idtopic'") or die(mysql_error());
	if($update){
		
		echo 'Data berhasil di simpan! ';	
		echo '<a href="topic.php?idtopic='.$idtopic.'">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menyimpan data! ';		
		echo '<a href="edit_topic.php?idtopic='.$idtopic.'">Kembali</a>';	
		
	}
	header('location:topic.php');
	exit;
}
?>