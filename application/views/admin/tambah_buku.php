<div class="container">
	<?php echo form_open_multipart('Login/do_tambah') ?>
		<div class="form-group">
			<label>Masukan ISBN</label>
			<input type="text" name="isbn" class="form-control">
		</div>
		<div class="form-group">
			<label>Masukan Judul</label>
			<input type="text" name="judul" class="form-control">
		</div>
		<div class="form-group">
			<label>Masukan Pengarang</label>
			<input type="text" name="pengarang" class="form-control">
		</div>
		<div class="form-group">
			<label>Masukan Penerbit</label>
			<input type="text" name="penerbit" class="form-control">
		</div>
		<div class="form-group">
			<label>Masukan Foto</label>
			<input type="file" name="foto" class="form-control">
		</div>
		<input type="submit" name="simpan" value="SAVE" class="btn btn-info">
	</form>
</div>