<div class="container">
	<a href class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Buku</a>

	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>ISBN</th>
			<th>Judul</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th colspan="3">Aksi</th>
		</tr>

		<?php
		$no=1;
		foreach ($buku as $bk) : ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $bk->isbn ?></td>
			<td><?php echo $bk->judul ?></td>
			<td><?php echo $bk->pengarang ?></td>
			<td><?php echo $bk->penerbit ?></td>
			<td><div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div></td>
			<td><div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div></td>

		</tr>

	<?php endforeach; ?>

</table>
		

</div>