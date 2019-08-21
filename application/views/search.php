<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php echo form_open('product/search') ?>
		<input type="text" name="keyword" placeholder="search">
		<input type="submit" name="search_submit" value="Cari">
	<?php echo form_close() ?>
 
	<table>
 
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
 
 
	</table>
</body>
</html>