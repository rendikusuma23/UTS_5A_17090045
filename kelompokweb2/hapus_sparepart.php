<?php 

	include "koneksi.php";

    $id = $_GET['id'];

	$query = "DELETE FROM sparepart WHERE id_sparepart='$id'";

	$hapus = $db->prepare($query);
	$hapus->execute();

	header("location: kategori.php");

 ?>