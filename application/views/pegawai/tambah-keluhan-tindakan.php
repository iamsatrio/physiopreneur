<!DOCTYPE html>
<html lang="en">
<head>
<title>Keluhan & Tindakan - Physiopreneur</title>
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
      <h1>Tambah Keluhan & Tindakan</h1>
    </div>
  <!--End-breadcrumbs-->
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span10">
        <div class="span2"></div>

        <div class="span5">
            <label class="control-label">Tanggal:&nbsp; 3/2/2017</label>
        </div>

        <div class="span3">
              <label class="control-label">Physioterapist:&nbsp; Zona</label>
        </div>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Pasien : Satrio Wibowo</h5>
          </div>

          <div class="widget-content nopadding">

            <form action="#" method="get" class="form-horizontal">
  		        <div class="control-group">
                <label class="control-label">Keluhan</label>
                <div class="controls">
                  <textarea class="span11" ></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Tindakan</label>
                <div class="controls">
                  <div class="span4">
                    <label><input type="checkbox" name="radios" />Manual Therapy</label>
                    <label><input type="checkbox" name="radios" />Infrared</label>
                    <label><input type="checkbox" name="radios" />Laser</label>
                  </div>
                  <div class="span4">
                    <label><input type="checkbox" name="radios" />Functional Exercise</label>
                    <label><input type="checkbox" name="radios" />Hot / Ice</label>
                    <label><input type="checkbox" name="radios" />Ultrasound Dithermy</label>
                  </div>
                  <div class="span4">
                    <label><input type="checkbox" name="radios" />Tens/Es</label>
                    <label><input type="checkbox" name="radios" />Gym</label>
                    <label><input type="checkbox" name="radios" />Drill</label>
                  </div>
                </div>
              </div>
              <div class="form-actions">
                      <span class="pull-right"><a type="submit" href="rekam-medik.php" class="btn btn-success" /> Simpan</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!--Footer-part-->

<!--end-Footer-part-->

<script>
	$('.textarea_editor').wysihtml5();
</script>
</body>
</html>
