<?php 

	include "koneksi.php";

    $id = $_GET['id'];

	$query = "DELETE FROM motor WHERE id_motor='$id'";

	$hapus = $db->prepare($query);
	$hapus->execute();

	header("location: kategori.php");

 ?>