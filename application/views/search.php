<thead>
	<tr>
		<th>Nama Kendaraan</th>
		<th>Harga</th>
		<th>Foto</th>
		<th>Deskripsi</th>
	</tr>
</thead>
<tbody>

<?php
if(!empty($searchproduct ))  
{ 
	$output = '';
	$outputdata = '';  
	$outputtail ='';
	foreach ($searchproduct as $objects)    
	{   
		$outputdata .= ' 
			<tr> 
				<td>'.$objects->name.'</td>
				<td>'.$objects->price.'</td>
				<td><img class=img-thumbnail src='.base_url('upload/product/'.$objects->image).' width=64 /></td>
				<td>'.$objects->description.'</td>
			</tr> 
		';
		//  echo $outputdata; 		
	}  

	$outputtail .= ' 
	</tbody>
	';
	echo $output; 
	echo $outputdata; 
	echo $outputtail; 
}  
else  
{  
	echo "<td colspan=4 class=text-center>Tidak ditemukan..</td>";
} 