<?php 
  
  include "koneksi.php";

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>kategori</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Kategori</h2>
		<br>
		<div class="row">
			<div class="col-5">
				<div class="card">
					<div class="card-header">
						<h5 style="float: left;">Jenis Motor</h5>
						<button style="float: right;" class="a">*</button>
						<button style="float: right; display: none;" class="b">+ Tambah</button>
					</div>
					<div class="card-body b" style="display: none;">
						<table style="border: none; width: 100%">
							<?php 
				            $query = "SELECT * FROM motor";
				            $data = $db->prepare($query);
				            $data->execute();
				            while($tampil = $data->fetch(PDO::FETCH_LAZY)){
				           ?>
				           <tr>
				           	<td style="width: 70%"><?php echo $tampil->nama; ?></td>
				           	<td style="width: 15%">
				                <a href='#edit_motor' class="btn btn-warning btn-small mr-2" data-toggle='modal' data-id="<?php echo $tampil->id; ?>">Ubah</a>
				            </td>
				            <td style="width: 15%">
				                <a onclick="return confirm('HAPUS DATA INI !?')" href="hapus_motor.php?id=<?php echo $tampil->id_motor ?>" class="btn btn-danger">Hapus</a>
			                </td>
				           </tr>
       					 <?php } ?>
						</table>
					</div>
					<script type="text/javascript">
						$(document).ready(function(){
							$('.a').click(function(){
								$('.b').toggle();
							});
						});
					</script>
				</div>
			</div>
		</div>

				<div class="row">
			<div class="col-5">
				<div class="card">
					<div class="card-header">
						<h5 style="float: left;">Merk</h5>
						<button style="float: right;" class="a1">*</button>
						<button style="float: right; display: none;" class="b1">+ Tambah</button>
					</div>
					<div class="card-body b1" style="display: none;">
						<table style="border: none; width: 100%">
							<?php 
				            $query = "SELECT * FROM merk";
				            $data = $db->prepare($query);
				            $data->execute();
				            while($tampil = $data->fetch(PDO::FETCH_LAZY)){
				           ?>
				           <tr>
				           	<td style="width: 70%"><?php echo $tampil->nama; ?></td>
				           	<td style="width: 15%">
				                <a href="form_ubah.php?x=<?php echo $tampil->id ?>" class="btn btn-warning mr-2">Ubah</a>
				            </td>
				            <td style="width: 15%">
				                <a onclick="return confirm('HAPUS DATA INI !?')" href="hapus_merk.php?id=<?php echo $tampil->id_merk ?>" class="btn btn-danger">Hapus</a>
			                </td>
				           </tr>
       					 <?php } ?>
						</table>
					</div>
					<script type="text/javascript">
						$(document).ready(function(){
							$('.a1').click(function(){
								$('.b1').toggle();
							});
						});
					</script>
				</div>
			</div>
		</div>

				<div class="row">
			<div class="col-5">
				<div class="card">
					<div class="card-header">
						<h5 style="float: left;">Jenis Aksesoris / Sparepart</h5>
						<button style="float: right;" class="a2">*</button>
						<button style="float: right; display: none;" class="b2">+ Tambah</button>
					</div>
					<div class="card-body b2" style="display: none;">
						<table style="border: none; width: 100%">
							<?php 
				            $query = "SELECT * FROM sparepart";
				            $data = $db->prepare($query);
				            $data->execute();
				            while($tampil = $data->fetch(PDO::FETCH_LAZY)){
				           ?>
				           <tr>
				           	<td style="width: 70%"><?php echo $tampil->nama; ?></td>
				           	<td style="width: 15%">
				                <a href="form_ubah.php?x=<?php echo $tampil->id ?>" class="btn btn-warning mr-2">Ubah</a>
				            </td>
				            <td style="width: 15%">
				                <a onclick="return confirm('HAPUS DATA INI !?')" href="hapus_sparepart.php?id=<?php echo $tampil->id_sparepart ?>" class="btn btn-danger">Hapus</a>
			                </td>
				           </tr>
       					 <?php } ?>
						</table>
					</div>
					<script type="text/javascript">
						$(document).ready(function(){
							$('.a2').click(function(){
								$('.b2').toggle();
							});
						});
					</script>
				</div>
			</div>
		</div>

	</div>
	<div class="modal fade" id="edit_motor" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">x</button>
					<h4 class="modal-tittle">Edit Kategori Motor</h4>
				</div>
				<div class="modal-body">
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>