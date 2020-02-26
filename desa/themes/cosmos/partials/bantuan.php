<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<h2 class="judul-artikel">
	Daftar Warga Penerima Bantuan Sosial di Kelurahan  <?=$desa["nama_desa"]?>
</h2>
<div class="mt-3 arsip stat">
	<div class="table-responsive">
		<?php if(count($bantuan_sosial)>0): ?>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<td width="3%"><b>No.</b></td>
						<td width="20%"><b>Nama</b></td>
						<td><b>NIK</b></td>
						<td><b>Program</b></td>
						<td width="20%"><b>Alamat</b></td>
					</tr>
				</thead>
				<tbody>
				<?php foreach($bantuan_sosial AS $data): ?>
					<tr>
						<td style="text-align:center;">
							<?= $data['no'] ?>
						</td>
						<td>
							<?= $data["nama"] ?>
						</td>
						<td>
							<?= $data["nik"] ?>
						</td>
						<td>
							<?= $data['program'] ?>
						</td>
						<td style="text-align:center;">
							<?= $data["alamat"] ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		<?php else: ?>
			Belum ada daftar penerima bantuan.
		<?php endif; ?>
	</div>
</div>