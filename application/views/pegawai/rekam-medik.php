<!DOCTYPE html>
<html lang="en">
<head>
<title>Rekam Medik - Physiopreneur</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
          <?php foreach ($listRekam as $data){ ?>
              <label class="control-label">ID Pasien &nbsp; : &nbsp;<?php echo $this->$data->id; ?> </label>
              <label class="control-label">Nama Pasien &nbsp; : &nbsp; </label>
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
                <tr>
                  <td>2 Maret 2017</td>
                  <td>Sakit Pinggang</td>
                  <td>Tens/ES</td>
                  <td class="center">Zona</td>
                </tr>
                <tr>
                  <td>10 Maret 2017</td>
                  <td></td>
                  <td>Functional Exercise</td>
                  <td class="center">Zona</td>
                </tr>
                <tr>
                  <td>15 Maret 2017</td>
                  <td></td>
                  <td>Functional Exercise, Infrared</td>
                  <td class="center">Zona</td>
                </tr>

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
</body>
</html>
