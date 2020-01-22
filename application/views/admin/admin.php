<div class="container">
	<div class="card shadow">
		<div class="card-body">
			<?php echo form_open_multipart('admin/Admin/add'); ?>

			<div class="form-group">
				<label>Nama Uploader </label>
				<input type="text" name="nama_uploder" class="form-control">
			</div>
			<div class="form-group">
				<label>Tanggal Upload</label>
				<input type="date" name="tgl_upload" class="form-control">
			</div>
			<div class="form-group">
				<label>judul</label>
				<input type="text" name="judul" class="form-control">
			</div>
			<div class="form-group">
				<label>kategori</label>
				<select class="form-control" name="kategori" >
					<?php foreach ($kategori->result() as $key ) { ?>
						<option value="<?php echo $key->kategori ?>"><?php echo $key->kategori ?></option>
					<?php } ?>	
				</select>
			</div>
			<div class="form-group">
				<label>Type menu</label>
				<select class="form-control" name="type" >
					<?php foreach ($menu->result() as $key ) { ?>
						<option value="<?php echo $key->type ?>"><?php echo $key->type ?></option>
					<?php } ?>			
				</select>
			</div>
			<div class="form-group">
				<label>Sub Berita Nasional</label>
				<select class="form-control" name="sub" >
					<option value="" disabled selected>Sub Nasional</option>
					<?php foreach ($sub_n->result() as $key ) { ?>
						<option value="<?php echo $key->sub_n ?>"><?php echo $key->sub_n ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label>Sub Berita Ekonomi</label>
				<select class="form-control" name="sub">
					<option value="" disabled selected>Sub Ekonomi</option>
					<?php foreach ($sub_e->result() as $key ) { ?>
						<option value="<?php echo $key->sub_e ?>"><?php echo $key->sub_e ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label>Sub Berita Olahraga</label>
				<select class="form-control" name="sub">
					<option value="" disabled selected>Sub Olahraga</option>
					<?php foreach ($sub_o->result() as $key ) { ?>
						<option value="<?php echo $key->sub_o ?>"><?php echo $key->sub_o ?></option>
					<?php } ?>	
				</select>
			</div>
			<div class="form-group">
				<label>Sub Berita Teknologi</label>
				<select class="form-control" name="sub">
					<option value="" disabled selected>Sub Teknologi</option>
					<?php foreach ($sub_t->result() as $key ) { ?>
						<option value="<?php echo $key->sub_t ?>"><?php echo $key->sub_t ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label>foto</label>
				<input type="file" name="foto" class="dropify" data-height="300">
			</div>
			<div class="form-group">
				<label>Deskripsi</label>
				<textarea name="descripsi" id="editor" rows="10" cols="80"></textarea>
			</div>

			<button type="submit" class="btn btn-sm btn-primary">simpan</button>
		</form>
	</div>
</div>
</div>