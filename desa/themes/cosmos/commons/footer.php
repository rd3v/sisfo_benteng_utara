<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="logo">
				<img src="<?= LogoDesa($desa['logo']) ?>" alt="<?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" class="img-fluid">
				</div>
				<div class="detail">
					<span>
						Pemerintah <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>
					</span>
					<span>
						<?= ucfirst($this->setting->sebutan_kecamatan_singkat) ?>
						<?= ucwords($desa['nama_kecamatan']) ?>
						<?= ucfirst($this->setting->sebutan_kabupaten_singkat) ?>
						<?= ucwords($desa['nama_kabupaten']) ?>,
						<?= ucwords($data_config['nama_propinsi']) ?>,
						Indonesia
					</span>
				</div>
			</div>
		</div>
	</div>
</footer>
<div id="kembali-ke-atas">
	<a href="#" class="tombol-ke-atas hide" title="Kembali ke atas">
		<i class="fa fa-arrow-up"></i>
	</a>
</div>