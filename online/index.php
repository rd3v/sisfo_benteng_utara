<?php 
$host = "localhost";
$user = "root";
$pass = "c!NT2~q[cF";
$db = "benteng_utara";

$connect = mysqli_connect($host,$user,$pass,$db);
if(!$connect) {
    die(mysql_error());
} 

if (isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $nik = $_POST['nik'];
    $email = $_POST['email'];
    $id_format_surat = $_POST['id_format_surat'];
    $message = $_POST['message'];
    
    $str_id_pend = "SELECT id FROM tweb_penduduk WHERE nik = '$nik'";
    $exec_str_id_pend = mysqli_query($connect,$str_id_pend);
    if($exec_str_id_pend) {

        if($exec_str_id_pend->num_rows == 0) { 
            ?>
        <script>
            alert("Mohon maaf, permintaan permohonan surat anda ditolak karena NIK yang anda masukkan tidak terdaftar pada sistem. Silahkan menghubungi Admin Kelurahan Benteng Utara");
            document.location='http://imtoor.tech/sisfo_benteng_utara/online/';
        </script>
<?php }

    }

    $str = "INSERT INTO tweb_surat_online(nama,nik,email,jenis_surat_id,keterangan) VALUES('$name','$nik','$email','$id_format_surat','$message')";
    
    $exec = mysqli_query($connect,$str);
    
      if($exec) { ?>
        <script>
            alert("Sukses mengirim permohonan");
            document.location = 'http://imtoor.tech/sisfo_benteng_utara/online/';
        </script>
<?php } else { 
        ?>
        <script>
            alert("Gagal mengirim permohonan, silahkan hubungi admin kelurahan");
            document.location = 'http://imtoor.tech/sisfo_benteng_utara/online/';
        </script>        
<?php }
}

$strSelectSurat = "SELECT * FROM tweb_surat_format";
$querySelectSurat = mysqli_query($connect,$strSelectSurat);
if (!$querySelectSurat) {
    die(mysql_error());
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Surat Online Kelurahan Benteng Utara</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='custom.css' rel='stylesheet' type='text/css'>
</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col-xl-8 offset-xl-2 py-5">

                <h1  align="center"><p>Pelayanan Surat Online</p>
                    <a href="..">Kelurahan Benteng Utara</a>
                </h1>

                 <p class="lead">Silahkan lengkapi semua isian sesuai dengan data yang diperlukan</p>


                <form id="contact-form" method="post" action="" role="form" onsubmit="return confirm('Apakah permohonan surat anda sudah benar ?');">

                    <div class="messages"></div>

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Nama *</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Silahkan masukkan nama anda *" required="required" data-error="Nama harus diisi!.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_lastname">NIK *</label>
                                    <input id="form_lastname" type="text" name="nik" class="form-control" placeholder="Silahkan masukkan NIK anda *" required="required" data-error="NIK Harus diisi!.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Email *</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Silahkan masukkan email anda *" required="required" data-error="Format email salah.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_need">Pilih Jenis Surat *</label>
                                    <select id="form_need" name="id_format_surat" class="form-control" required="required" data-error="Pilih jenis surat yang anda perlukan">
                                    <option value=""></option>
                                    <?php while ($get = mysqli_fetch_assoc($querySelectSurat)) { ?>
                                        <option value="<?= $get['id'] ?>"><?= $get['nama'] ?></option>    
                                    <?php } ?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Pesan *</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Silahkan isi keperluan atau keterangan lainnya disini *" rows="4" required="required" data-error="Silahkan isi pesan atau keterangan anda."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input type="submit" name="submit" class="btn btn-success btn-send" value="Kirim Permohonan">
                            </div>
                            <div class="col-md-6">
                                <a type="button" class="btn btn-primary" href="../index.php/first">Kembali</a>
                                </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-muted">
                                    <strong>*</strong> Harus diisi
                                    </p>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
            <!-- /.8 -->

        </div>
        <!-- /.row-->

    </div>
    <!-- /.container-->

    <script src="cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../lib/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
    <script src="contact.js"></script>

</body>

</html>