<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<header>

	<?php $this->load->view($folder_themes . '/partials/marquee'); ?>
	<div class="identitas-desa">
		<div class="container">
			<a href="<?= site_url('first'); ?>" class="brand">
				<div class="logo">
						<img src="<?= LogoDesa($desa['logo']) ?>" alt="<?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" class="img-fluid">
				</div>
				<div class="detail">
					<h1 class="h1">
						<span><?= strtoupper($this->setting->sebutan_desa) ?></span>
						<span><?= strtoupper($desa['nama_desa']); ?></span>
					</h1>
					<div class="ket">
						<span>
						<?= ucfirst($this->setting->sebutan_kecamatan_singkat) ?> 
						<?= ucwords($desa['nama_kecamatan']) ?>
						<?= ucfirst($this->setting->sebutan_kabupaten_singkat) ?>
						<?= ucwords($desa['nama_kabupaten']) ?>
						</span>
						<?php  ?>
					</div>
				</div>

			</a>
		</div>
	</div>
</header>