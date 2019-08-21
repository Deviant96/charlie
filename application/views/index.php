<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo SITE_NAME .": ". ucfirst($this->uri->segment(1)) ." - ". ucfirst($this->uri->segment(2))?></title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('css/sb-admin.css')?>" rel="stylesheet">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h1>Cari Kendaraan yang Bagus untuk Anda!</h1>

			<?php echo form_open('main/search') ?>
				<input type="text" name="keyword" placeholder="search">
				<input type="submit" name="search_submit" value="Cari">
			<?php echo form_close() ?>

			<div id="body">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Nama Kendaraan</th>
							<th>Harga</th>
							<th>Foto</th>
							<th>Deskripsi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($products as $product): ?>
						<tr>
							<td>
								<?php echo $product->name ?>
							</td>
							<td>
								<?php echo $product->price ?>
							</td>
							<td>
								<img class="img-thumbnail" src="<?php echo base_url('upload/product/'.$product->image) ?>" width="64" />
							</td>
							<td class="small">
								<?php echo substr($product->description, 0, 120) ?>...
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>

			
		</div>
	</div>

	<div class="row">
		<div class="col-sm">
		</div>
		<div class="col-sm">
		<p class="small">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?><br>
			If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.	</p>
		</div>
	</div>
</div>

</body>
</html>