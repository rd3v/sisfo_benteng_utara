<html>
	<?php $this->load->view('print/headjs.php');?>
	<body>
		<div id="content" class="container_12 clearfix">
			<div id="content-main" class="grid_7">
				<link href="<?= base_url()?>assets/css/surat.css" rel="stylesheet" type="text/css" />
				<div>
					<table width="100%">
						<tr> 
							<td align="center">		
							<img src="<?= LogoDesa($desa['logo']);?>" alt=""  width="100" height="80">
							</td>
						</tr>
						<tr>
							<td>
								<div class="header">
									<h4 class="kop3">PEMERINTAH KABUPATEN <?= strtoupper(unpenetration($desa['nama_kabupaten']))?> </h4>
									<h4 class="kop3">KECAMATAN <?= strtoupper(unpenetration($desa['nama_kecamatan']))?> </h4>
									<h4 class="kop3">DESA <?= strtoupper(unpenetration($desa['nama_desa']))?></h4>
									<h5 class="kop2"><?= ($desa['alamat_kantor'])?> </h5>
									<div style="text-align: center;"><hr></div>
								</div>								
							</td>
						</tr>
						<tr>
							<td>
						<div align="center"><u><h4 class="kop3">SURAT KETERANGAN DOMISILI</h4></u></div>
						<div align="center"><h4 class="kop3">Nomor : <?= $input['nomor']?></h4></div>								
							</td>
						</tr>
					</table>
					<table width="100%">
						<tr>
							<td colspan="3"><p>Yang bertanda tangan dibawah ini : </p></td>
						</tr>
						<tr>
							<td width="10%">a. Nama</td>
							<td width="2%">:</td>
							<td><?= unpenetration($input['pamong']) ?></td>
						</tr>
						<tr>
							<td width="10%">b. Jabatan</td>
							<td width="2%">:</td>
							<td><?= unpenetration($input['jabatan']) ?></td>
						</tr>
					</table>
					<div id="isi3">
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr><td>
							<table width="100%">
								<tr><td width="20%">1. Nama Lengkap</td><td width="2%">:</td><td width="64%"><?= unpenetration($data['nama'])?></td></tr>
								<tr><td>2. NIK / Nomor KTP</td><td>:</td><td><?= $data['nik']?></td></tr>
								<tr><td>3. No. KK</td><td>:</td><td><?= $data['no_kk']?></td></tr>
								<tr><td>4. Tempat dan Tgl. Lahir </td><td>:</td><td><?= ($data['tempatlahir'])?>, <?= tgl_indo($data['tanggallahir'])?> </td></tr>
								<tr><td>5. Jenis Kelamin</td><td>:</td><td><?= $data['sex']?></td></tr>
								<tr><td>6. Alamat / Tempat Tinggal</td><td>:</td><td>RT. <?= $data['rt']?>, RW. <?= $data['rw']?>, Dusun <?= ununderscore(unpenetration($data['dusun']))?>, Desa <?= unpenetration($desa['nama_desa'])?>, Kec. <?= unpenetration($desa['nama_kecamatan'])?>, Kab. <?= unpenetration($desa['nama_kabupaten'])?></td></tr>
								<tr><td>7. Agama</td><td>:</td><td><?= $data['agama']?></td></tr>
								<tr><td>8. Status</td><td>:</td><td><?= $data['status_kawin']?></td></tr>
								<tr><td>9. Pendidikan</td><td>:</td><td><?= $data['pendidikan']?></td></tr>
								<tr><td>10. Pekerjaan</td><td>:</td><td><?= $data['pekerjaan']?></td></tr>
								<tr><td>11. Kewarganegaraan </td><td>:</td><td><?= $data['warganegara']?></td></tr>
								<tr>
									<td colspan="3"><p></p></td>
								</tr>
								<tr>
									<td><p><b>&nbsp;&nbsp;&nbsp;&nbsp;Maksud</b></p></td>
									<td><p>:</p></td>
									<td>
										<p>
											Bahwa yang tersebut di atas Benar Berdomisili di Jalan <?= $data['alamat'] ?> Lingkungan <?= $input['lingkungan'] ?> Kelurahan Benteng Utara Kecamatan Benteng Kabupaten Kepulauan Selayar.
										</p>
									</td>
								</tr>
								
							</table>
							<table width="100%" style="margin: 0">
								<tr><td  class="indentasi">Demikian Surat Keterangan ini dibuat dan dan diberikan kepada yang bersangkutan untuk digunakan sebagaimana mestinya. </td></tr>
								<tr></tr>
								<tr></tr>
								<tr></tr>
								<tr></tr>
								<tr></tr>
								<tr></tr>
							</table>
						</div>
						<table width="100%">
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr><td></td><td width="30%"></td><td  align="center"><?= unpenetration($desa['nama_desa'])?>, <?= $tanggal_sekarang?></td></tr>
							<tr><td></td><td width="30%"></td><td align="center"><?= unpenetration($input['jabatan'])?> <?= unpenetration($desa['nama_desa'])?></td></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr><td> <td></td><td align="center">( <?= unpenetration($input['pamong'])?> )</td></tr>
						</table>
					</div>
				</div>
			</div>
			<div id="aside"></div>
			<div id="footer" class="container_12"></div>
		</div>
	</body>
</html>

