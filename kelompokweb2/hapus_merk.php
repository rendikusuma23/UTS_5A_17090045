<?php 

	include "koneksi.php";

    $id = $_GET['id'];

	$query = "DELETE FROM merk WHERE id_merk='$id'";

	$hapus = $db->prepare($query);
	$hapus->execute();

	header("location: kategori.php");

 ?>