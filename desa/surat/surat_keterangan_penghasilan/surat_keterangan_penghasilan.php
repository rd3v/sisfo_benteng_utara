<style>
	.error {
		color: #dd4b39;
	}
</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Keterangan</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Keterangan</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<a href="<?=site_url("surat")?>" class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"  title="Kembali Ke Daftar Wilayah">
							<i class="fa fa-arrow-circle-left "></i>Kembali Ke Daftar Cetak Surat
						</a>
					</div>
					<div class="box-body">
						<form action="" id="main" name="main" method="POST" class="form-horizontal">
							<div class="form-group">
								<label for="nik"  class="col-sm-3 control-label">NIK / Nama</label>
								<div class="col-sm-6 col-lg-4">
									<select class="form-control required input-sm select2" id="nik" name="nik" style ="width:100%;" onchange="formAction('main')">
										<option value="">--  Cari NIK / Nama Penduduk --</option>
										<?php foreach ($penduduk as $data): ?>
											<option value="<?= $data['id']?>" <?php if ($individu['nik']==$data['nik']): ?>selected<?php endif; ?>>NIK : <?= $data['nik']." - ".$data['nama']?></option>
										<?php endforeach;?>
									</select>
								</div>
							</div>
						</form>
						<form id="validasi" action="<?= $form_action?>" method="POST" target="_blank" class="form-surat form-horizontal">
							<input type="hidden" id="url_surat" name="url_surat" value="<?= $url ?>">
							<input type="hidden" id="url_remote" name="url_remote" value="<?= site_url('surat/nomor_surat_duplikat')?>">
							<?php if ($individu): ?>
								<?php include("donjo-app/views/surat/form/konfirmasi_pemohon.php"); ?>
							<?php	endif; ?>
							<div class="row jar_form">
								<label for="nomor" class="col-sm-3"></label>
								<div class="col-sm-8">
									<input class="required" type="hidden" name="nik" value="<?= $individu['id']?>">
								</div>
							</div>
							<div class="form-group">
								<label for="nomor"  class="col-sm-3 control-label">Nomor Surat</label>
								<div class="col-sm-8">
									<input  id="nomor" class="form-control input-sm required" type="text" placeholder="Nomor Surat" name="nomor" value="<?= $surat_terakhir['no_surat_berikutnya'];?>">
									<p class="help-block text-red small"><?= $surat_terakhir['ket_nomor']?><strong><?= $surat_terakhir['no_surat'];?></strong> (tgl: <?= $surat_terakhir['tanggal']?>)</p>
								</div>
							</div>
							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Lingkungan</label>
								<div class="col-sm-8">
									<input  id="lingkungan" class="form-control input-sm required" type="text" placeholder="Lingkungan" name="lingkungan">
								</div>
							</div>
							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Nama Orang Tua</label>
								<div class="col-sm-8">
									<input  id="nama_ortu" class="form-control input-sm required" type="text" placeholder="Nama Orang Tua" name="nama_ortu">
								</div>
							</div>
							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Tempat Lahir Orang Tua</label>
								<div class="col-sm-8">
									<input  id="tempat_lahir_ortu" class="form-control input-sm required" type="text" placeholder="Tempat Lahir Orang Tua" name="tempat_lahir_ortu">
								</div>
							</div>

							<div class="form-group">
								<label for="berlaku_dari"  class="col-sm-3 control-label">Tanggal Lahir Orang Tua</label>
								<div class="col-sm-3 col-lg-2">
									<div class="input-group input-group-sm date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input title="Pilih Tanggal" id="tgl_mulai" class="form-control input-sm required" name="tanggal_lahir_ortu" type="text"/>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Jenis Kelamin Orang Tua</label>
								<div class="col-sm-8">
									<select style="font-size:0.9em" name="jk_ortu" id="jk_ortu" class="form-control">
										<option value="Pria">Pria</option>
										<option value="Wanita">Wanita</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Pekerjaan Orang Tua</label>
								<div class="col-sm-8">
									<input  id="pekerjaan_ortu" class="form-control input-sm required" type="text" placeholder="Pekerjaan Orang Tua" name="pekerjaan_ortu">
								</div>
							</div>

							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Alamat Orang Tua</label>
								<div class="col-sm-8">
									<input  id="alamat_lahir_ortu" class="form-control input-sm required" type="text" placeholder="Alamat Orang Tua" name="alamat_ortu">
								</div>
							</div>

							<div class="form-group">
								<label for="nominal_penghasilan"  class="col-sm-3 control-label">Nominal Penghasilan</label>
								<div class="col-sm-8">
									<input id="nominal_penghasilan" class="form-control input-sm required" type="number" placeholder="Nominal Penghasilan" name="nominal_penghasilan">
								</div>
							</div>

							<div class="form-group">
								<label for="terbilang_penghasilan"  class="col-sm-3 control-label">Terbilang Penghasilan</label>
								<div class="col-sm-8">
									<input id="terbilang_penghasilan" class="form-control input-sm required" type="text" placeholder="Terbilang Penghasilan" name="terbilang_penghasilan">
								</div>
							</div>


							<?php include("donjo-app/views/surat/form/_pamong.php"); ?>
						</form>
					</div>
					<?php include("donjo-app/views/surat/form/tombol_cetak.php"); ?>
				</div>
			</div>
		</div>
	</section>
</div>
