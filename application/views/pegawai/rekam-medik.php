<!DOCTYPE html>
<html lang="en">
<head>
<title>Rekam Medik - Physiopreneur</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>css/uniform.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>css/select2.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>css/matrix-media.css" />
<link href="<?php echo base_url() ?>font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

  <!--Header-part-->
  <?php include 'header.php';?>

  <?php include 'navbar.php';?>
  <!--sidebar-menu-->

  <!--main-container-part-->
  <div id="content">
  <!--breadcrumbs-->
    <div id="content-header">
      <div id="breadcrumb"></div>
      <h1>Rekam Medik</h1>
    </div>
  <!--End-breadcrumbs-->

  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">

        <div class="span4">
          <div class="span4"></div>
          <?php foreach ($rekamMedik->result() as $data){ ?>
              <label class="control-label">ID Pasien &nbsp; : &nbsp;<?= $data->id; ?> </label>
              <label class="control-label">Nama Pasien &nbsp; : &nbsp;<?= $data->nama_pasien; ?> </label>
          <?php }?>
        </div>

        <div class="span4">  </div>

        <div class="span4">
          <img src="img/patient.png" alt="" style="width:100px; height:100px;">
        </div>
        <div class="span4"></div>
        <div class="span4">
          <div class="span3"></div>
            <a href="tambah-keluhan-tindakan.php">
              <button class="btn btn-info"><i class="icon icon-plus"></i> Rekam Medik</button>
            </a>
        </div>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Rekam Medik - Satrio</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Keluhan</th>
                  <th>Tindakan</th>
                  <th>Physioterapist</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($medik->result() as $data){ ?>
                <tr>
                  <td><?= $data->tanggal  ?></td>
                  <td><?= $data->diagnosa  ?></td>
                  <td><?= $data->tindakan  ?></td>
                  <td class="center"><?= $data->nama  ?></td>
                </tr>
                <?php } ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<script src="<?php echo base_url() ?>js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>js/jquery.ui.custom.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>js/jquery.uniform.js"></script>
<script src="<?php echo base_url() ?>js/select2.min.js"></script>
<script src="<?php echo base_url() ?>js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>js/matrix.js"></script>
<script src="<?php echo base_url() ?>js/matrix.tables.js"></script>
</body>
</html>
