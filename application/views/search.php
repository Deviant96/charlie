<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("_partials/head.php")?>
</head>

<body>

	<?php $this->load->view("_partials/navbar.php")?>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h1>Hasil pencarian ...</h1>


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

		<?php $this->load->view("_partials/footer.php")?>

	

	
</div>



	<?php $this->load->view("_partials/scrolltop.php")?>
	<?php $this->load->view("_partials/modal.php")?>
	<?php $this->load->view("_partials/js.php")?>

</body>
</html>
