<script src="<?= base_url()?>assets/js/jquery.validate.min.js"></script>
<div class="content-wrapper">
	<section class="content-header">
		<?php if ($tampil == 0): ?>
			<h1>Pengelolaan Program Bantuan</h1>
		<?php else: ?>
			<h1>Pengelolaan Program Bantuan dengan Sasaran <?=$sasaran[$tampil];?></h1>
		<?php endif; ?>
		<ol class="breadcrumb">
			<li><a href="<?=site_url('hom_sid')?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?=site_url('program_bantuan')?>"> Daftar Program Bantuan</a></li>
			<li class="active">Pengelolaan Program Bantuan</li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<a href="<?=site_url('program_bantuan')?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Daftar Program Bantuan"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Daftar Program Bantuan</a>
					</div>
					<form id="validasi" action="<?= $form_action?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
						<div class="box-body">
							<?php $cid = @$_REQUEST["cid"]; ?>
							<div class="form-group">
								<label class="col-sm-3 control-label">Sasaran Program</label>
								<div class="col-sm-8">
									<select class="form-control input-sm required" name="cid" id="cid">
										<option value="">Pilih Sasaran Program <?= $cid;?></option>
										<option value="1" <?php if ($cid == 1): ?>selected<?php endif; ?>>Penduduk Perorangan</option>
										<option value="2" <?php if ($cid == 2): ?>selected<?php endif; ?>>Keluarga - KK</option>
										<option value="3" <?php if ($cid == 3): ?>selected<?php endif; ?>>Rumah Tangga</option>
										<option value="4" <?php if ($cid == 4): ?>selected<?php endif; ?>>Kelompok / Organisasi</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3" for="nama">Nama Program</label>
								<div class="col-sm-8">
									<input name="nama" class="form-control input-sm required" placeholder="Nama Program"  type="text"></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="ndesc">Keterangan</label>
								<div class="col-sm-8">
									<textarea id="ndesc" name="ndesc" class="form-control input-sm required" placeholder="Isi Keterangan" style="height: 200px;"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="alamat">Alamat</label>
								<div class="col-sm-8">

									<input class="form-control input-sm required" id="alamat" name="alamat" placeholder="Alamat" type="text">

								</div>
			             	</div>
						</div>
						<div class='box-footer'>
							<div class='col-xs-12'>
								<button type='reset' class='btn btn-social btn-flat btn-danger btn-sm'><i class='fa fa-times'></i> Batal</button>
								<button type='submit' class='btn btn-social btn-flat btn-info btn-sm pull-right confirm'><i class='fa fa-check'></i> Simpan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>

