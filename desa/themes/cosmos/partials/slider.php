<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php if($slider_gambar['gambar']) : ?>
	<section class="slider">
		<div class="owl-carousel owl-theme" id="slides">
			<?php foreach($slider_gambar['gambar'] as $key => $data) : ?>
				<?php $img = $slider_gambar['lokasi'] . 'sedang_' . $data['gambar']; ?>
				<?php if(is_file($img)) : ?>
					<div class="item">
						<?php 
							if ($key == 0) { ?>
								<center>
									<div class="row text-center" style="padding:1em;margin:auto;margin-bottom:2em;position:absolute;left:0;right:0;bottom:0;background-color: #fff;background: rgba(25, 25, 25, .5);color:white">
										<div class="col-sm-12">
											<h4 style="margin:0">Surat Online</h4>
<p>Surat Online merupakan fitur yang mempermudah pengurusan surat-menyurat bagi masyarakat Kelurahan Benteng Utara</p>
											<a href="<?= site_url('..//online') ?>" class="btn btn-success btn-md" style="border-radius: 1em;width:50%">Surat Online</a>
										</div>
									</div>
								</center>
						<?php }
						 ?>
						<img data-src="<?= base_url($img) ?>" alt="<?= $data['judul'] ?>" class="img-fluid lazy">
					</div>
				<?php endif ?>
			<?php endforeach ?>
		</div>
	</section>
<?php endif ?>