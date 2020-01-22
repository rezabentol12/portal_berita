<div class="container">
	<div class="card">
		<div class="card-body">
			<table class="table table-responsive">
				<thead>
					<tr>
						<th>judul</th>
						<th>gambar</th>
						<th>descripsi</th>		
					</tr>
				</thead>
				<tbody>
					<?php foreach ($tampil->result() as $key ) {?>
				<tr>
					<td><?php echo $key->judul ?></td>
					<td><img src="<?php echo base_url() ?>assets/img/<?php echo $key->foto ?>" height="90px" width="90px"></td>
					<td><?php echo $key->descripsi ?></td>
					<td><a href="<?php echo site_url("admin/Admin/delete/$key->id") ?>" class="btn btn-danger btn-sm">Delete</a></td>
					<td><a href="<?php echo site_url("admin/Admin/data_update/$key->id") ?>" class="btn btn-success btn-sm">update</a></td>
				</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>