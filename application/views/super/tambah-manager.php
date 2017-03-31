<!DOCTYPE html>
<html lang="en">
<head>
<title>Tambah Manager - Physiopreneur</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url()?>css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url()?>css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url()?>css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url()?>css/matrix-media.css" />
<link href="<?php echo base_url()?>font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<?php include 'header.php';?>

<?php include 'navbar.php';?>
<!--sidebar-menu-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Pendaftaran Pasien</a> </div>
    <h1>Pendaftaran Manager</h1>
  </div>
  <div class="container-fluid">

    <div class="row-fluid">
      <div class="span12">
        <form action="<?php echo base_url('index.php/tambahpasien/tambah_pasien') ?>" method="post" class="form-horizontal">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Informasi Akun</h5>
          </div>
          <div class="widget-content nopadding">
              <div class="control-group">
                <label class="control-label">Username :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Username" name="username" required />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Password :</label>
                <div class="controls">
                  <input type="password" class="span11" placeholder="Password" name="password" required />
                </div>
              </div>
          </div>
        </div>

        <hr>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Data Diri Pegawai</h5>
          </div>
          <div class="widget-content nopadding">

              <div class="control-group">
                <label class="control-label">NIK :</label>
                <div class="controls">
                  <input type="text" class="span11" disabled="" value="12345" name="idPasien"/>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Name :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Nama Lengkap" name="namaPasien" required />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label"> Nomor HP :</label>
                <div class="controls">
                  <input type="phone" class="span11" name="noHP" required />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Alamat</label>
                <div class="controls">
                  <textarea class="span11" name="alamat" required></textarea>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Lokasi :</label>
                <div class="controls">
                  <select class="span11" name="idLokasi" required>
                      <option value="#">---Pilih---</option>
      					      <option value="1">Bandung</option>
                      <option value="2">Jakarta</option>
                 </select>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Foto :</label>
                <div class="controls">
                  <input type="file" class="span11" />
                </div>
              </div>
              <div class="form-actions">
                <button class="btn btn-success">Simpan</button>
              </div>

          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
<!--</div>
<!--end-main-container-part-->


<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--End-Footer-part-->
<!-- JS part -->
<script src="<?php echo base_url()?>js/jquery.min.js"></script>
<script src="<?php echo base_url()?>js/jquery.ui.custom.js"></script>
<script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>js/jquery.peity.min.js"></script>
<script src="<?php echo base_url()?>js/matrix.js"></script>
<script src="<?php echo base_url()?>js/matrix.interface.js"></script>
<script src="<?php echo base_url()?>js/matrix.popover.js"></script>
</body>
</html>
