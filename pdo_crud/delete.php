<?php
 include('library.php');
 $lib = new Library();
 $id_siswa = $_GET['id_siswa'];


 if ($lib) {
 
 ?>
 
 
	<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?index.php";
	</script>
	
 <?php
 
 }
 
 ?>
 