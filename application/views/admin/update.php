<div class="container">
	<div class="card shadow">
		<div class="card-body">
			
				<?php echo form_open_multipart('admin/Admin/update'); ?>
				<input type="hidden" name="id" value="<?php echo $update->id ?>">

				<div class="form-group">
					<label>Nama Uploader </label>
					<input type="text" name="nama_uploder" class="form-control" value="<?php echo $update->nama_uploder ?>">
				</div>
				<div class="form-group">
					<label>Tanggal Upload</label>
					<input type="date" name="tgl_upload" class="form-control" value="<?php echo $update->tgl_upload ?>">
				</div>
				<div class="form-group">
					<label>judul</label>
					<input type="text" name="judul" class="form-control" value="<?php echo $update->judul ?>">
				</div>
				<div class="form-group">
					<label>kategori</label>

					<select class="form-control" name="kategori" >

						<?php foreach ($tampil->result() as $key) { ?>
							<option value="<?php echo $key->kategori?>"
								<?php if ($update->kategori == $key->kategori) {
									echo 'selected','';
								# code...
								} else {
									echo"";
								} ?>>
								<?php echo  $key->kategori ?>

							</option>
						<?php } ?>

					</select>
				</div>
				<div class="form-group">
					<label>Type menu</label>
					<select class="form-control" name="type" >
						<?php foreach ($menu->result() as $key) { ?>
							<option value="<?php echo $key->type?>"
								<?php if ($update->type == $key->type) {
									echo 'selected','';
								# code...
								} else {
									echo"";
								} ?>>
								<?php echo  $key->type ?>

							</option>
						<?php } ?>			
					</select>
				</div>
				<div class="form-group">
					<label>Sub Berita Nasional</label>
					<select class="form-control" name="sub" >
						<option value="" disabled selected>Sub Nasional</option>
						<?php foreach ($sub_n->result() as $key) { ?>
							<option value="<?php echo $key->sub_n?>"
								<?php if ($update->suberita == $key->sub_n) {
									echo 'selected','';
								# code...
								} else {
									echo"";
								} ?>>
								<?php echo  $key->sub_n ?>

							</option>
						<?php } ?>

					</select>
				</div>
				<div class="form-group">
					<label>Sub Berita Ekonomi</label>
					<select class="form-control" name="sub">
						<option value="" disabled selected>Sub Ekonomi</option>
						<?php foreach ($sub_e->result() as $key) { ?>
							<option value="<?php echo $key->sub_e?>"
								<?php if ($update->suberita == $key->sub_e) {
									echo 'selected','';
								# code...
								} else {
									echo"";
								} ?>>
								<?php echo  $key->sub_e ?>

							</option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label>Sub Berita Olahraga</label>
					
					<select class="form-control" name="sub">
						<option value="" disabled selected>Sub Olahraga</option>
						<?php foreach ($sub_o->result() as $key) { ?>
							<option value="<?php echo $key->sub_o?>"
								<?php if ($update->suberita == $key->sub_o) {
									echo 'selected','';
								# code...
								} else {
									echo"";
								} ?>>
								<?php echo  $key->sub_o ?>

							</option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">

					<label>Sub Berita Teknologi</label>
					
					<select class="form-control" name="sub">
						<option value="" disabled selected>Sub Teknologi</option>
						<?php foreach ($sub_t->result() as $key) { ?>
							<option value="<?php echo $key->sub_t?>"
								<?php if ($update->suberita == $key->sub_t) {
									echo 'selected','';
								# code...
								} else {
									echo"";
								} ?>>
								<?php echo  $key->sub_t ?>

							</option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label>foto</label>
					<input type="file" name="foto" class="apaa" data-height="300" value="<?php echo $update->foto ?>">
				</div>
				<div class="form-group">
					<label>Deskripsi</label>
					<textarea name="descripsi" id="edit" rows="10" cols="80" ><p ><?php echo $update->descripsi ?></p></textarea> 
				</div>

				<button type="submit" class="btn btn-sm btn-primary">simpan</button>
			</form>
	</div>
</div>
</div>