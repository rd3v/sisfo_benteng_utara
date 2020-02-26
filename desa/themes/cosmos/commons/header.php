<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<header>

	<?php $this->load->view($folder_themes . '/partials/marquee'); ?>
	<div class="identitas-desa" style="padding:0">
		<a href="<?= site_url('first'); ?>" class="brand">
			<img src="<?= base_url('assets/images/banner.png') ?>" width="100%" alt="banner">
		</a>
	</div>
</header>