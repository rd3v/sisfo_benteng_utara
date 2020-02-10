<aside class="main-sidebar">
	<section class="sidebar">
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?= LogoDesa($desa['logo']);?>" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<strong><?= ucwords($this->setting->sebutan_desa." ".$desa['nama_desa']);?></strong>
				</br>
				<?php
					$nam_kec = strlen($desa['nama_kecamatan']);
					$nam_kab = strlen($desa['nama_kabupaten']);
				?>
				<?php	if ($nam_kec<=12 AND $nam_kab<=12): ?>
					<?=ucwords($this->setting->sebutan_kecamatan." ".$desa['nama_kecamatan']);?>
					</br>
					<?=ucwords($this->setting->sebutan_kabupaten." ".$desa['nama_kabupaten']);?>
				<?php	else: ?>
					<?=ucwords(substr($this->setting->sebutan_kecamatan,0,3).". ".$desa['nama_kecamatan']);?>
					</br>
					<?=ucwords(substr($this->setting->sebutan_kabupaten,0,3).". ".$desa['nama_kabupaten']);?>
				<?php	endif; ?>
			</div>
		</div>
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MENU UTAMA</li>
			<?php foreach ($modul AS $mod): ?>
				<?php if (count($mod['submodul']) == 0): ?>
					<li class="<?php ($this->modul_ini==$mod['id']) and print('active')?>">
						<a href="<?= site_url()?><?=$mod['url']?>">
							<i class="fa <?= $mod['ikon']?> <?php ($this->modul_ini==$mod['id']) and print('text-aqua')?>"></i> <span><?=$mod['modul']?></span>
							<span class="pull-right-container"></span>
						</a>
					</li>
				<?php else : ?>
					<li class="treeview <?php ($this->modul_ini==$mod['id']) and print('active')?>">
						<a href="<?= site_url() ?><?= $mod['url'] ?>">
							<i class="fa <?= $mod['ikon']?> <?php ($this->modul_ini==$mod['id']) and print('text-aqua')?>"></i> <span><?=$mod['modul']?></span>
							
							<?php if($mod['url'] == "surat"): ?>
								<?php if(isset($mod['surat_online'])): ?>
	
									<?php if($mod['surat_online'] == 0): ?>
										<span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
									<?php else: ?>

<span class="pull-right-container badge badge-danger" style="padding:0.7em"><?= "Surat Online (".$mod['surat_online'].")" ?></span>										
									<?php endif; ?>
	
								<?php endif; ?>
							<?php else: ?>
								<span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
							<?php endif; ?>


						</a>
						<ul class="treeview-menu <?php ($this->modul_ini==$mod['id']) and print('active')?>">
							<?php foreach ($mod['submodul'] as $submod): ?>
								<li class="<?php ($act_sub==$submod['id']) and print('active')?>">
									<a href="<?= site_url()?><?=$submod['url']?>">

										<?php if($submod['url']=="surat_online"): ?>

									<?php if($mod['surat_online'] == 0): ?>

									<?php else: ?>

											<span class="pull-right-container badge badge-danger"><?= $mod['surat_online'] ?></span>										
									<?php endif; ?>

										<?php endif; ?>

										<i class="fa <?= ($submod['ikon'] != NULL) ? $submod['ikon'] : 'fa-circle-o'?> <?php ($act_sub==$submod['id']) and print('text-red')?>"></i>
										<?=$submod['modul']?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
	</section>
 </aside>