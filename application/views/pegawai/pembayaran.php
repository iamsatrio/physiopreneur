<!DOCTYPE html>
<html lang="en">
<head>
<title>Physiopreneur</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>css/fullcalendar.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>css/matrix-style.css" />
<link rel="stylesheet" href="c<?php echo base_url() ?>ss/matrix-media.css" />
<link href="<?php echo base_url() ?>font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url() ?>css/jquery.gritter.css" />
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
      <h1>Pembayaran</h1>
    </div>
  <!--End-breadcrumbs-->

  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span2"></div>

      <div class="span5">
          <label class="control-label">Tanggal:&nbsp; 3/2/2017</label>
      </div>

      <div class="span3">
            <label class="control-label">Physioterapist:&nbsp; Zona Wibowo</label>
      </div>
      <div class="span11">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Formulir Pembayaran</h5>
          </div>

          <div class="widget-content nopadding">
            <form action="rekam-medik.php" method="post" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">ID Pasien :</label>
                <div class="controls">
                  <input type="text" class="span5" placeholder="Input ID Pasien"/>
                  <button type="button" name="button" class="btn btn-primary"><i class="icon-search"></i></button>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Nama Pasien :</label>
                <div class="controls">
                  <input type="text" class="span8" disabled="" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Untuk Pembayaran :</label>
                <div class="controls">
                  <input type="text" class="span8"/>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Jenis Pembayaran :</label>
                <div class="controls">
                  <select class="span2" name="jenis-pembayaran">
                    <option value="1">Single Visit</option>
                    <option value="2">5 Cares</option>
                    <option value="3">10 Cares</option>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label"> + Regio :</label>
                <div class="controls">
                  <input type="number" min="0" class="span1" value="0" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Total Pembayaran :</label>
                <div class="controls">
                  <input type="number" class="span8" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Metode Pembayaran :</label>
                <div class="controls">
                  <select class="span2" name="metode-pembayaran">
                    <option value="1">Cash</option>
                    <option value="2">Debet</option>
                    <option value="3">Transfer</option>
                  </select>
                </div>
              </div>
              <div class="form-actions">
                <button class="btn btn-success">Checkout</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!--Chart-box-->

<!--End-Chart-box-->


<!--end-main-container-part-->

<!--Footer-part-->



<!--end-Footer-part-->
script src="<?php echo base_url() ?>js/excanvas.min.js"></script>
<script src="<?php echo base_url() ?>js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>js/jquery.ui.custom.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>js/jquery.flot.min.js"></script>
<script src="<?php echo base_url() ?>js/jquery.flot.resize.min.js"></script>
<script src="<?php echo base_url() ?>js/jquery.peity.min.js"></script>
<script src="<?php echo base_url() ?>js/fullcalendar.min.js"></script>
<script src="<?php echo base_url() ?>js/matrix.js"></script>
<script src="<?php echo base_url() ?>js/matrix.dashboard.js"></script>
<script src="<?php echo base_url() ?>js/jquery.gritter.min.js"></script>
<script src="<?php echo base_url() ?>js/matrix.interface.js"></script>
<script src="<?php echo base_url() ?>js/matrix.chat.js"></script>
<script src="<?php echo base_url() ?>js/jquery.validate.js"></script>
<script src="<?php echo base_url() ?>js/matrix.form_validation.js"></script>
<script src="<?php echo base_url() ?>js/jquery.wizard.js"></script>
<script src="<?php echo base_url() ?>js/jquery.uniform.js"></script>
<script src="<?php echo base_url() ?>js/select2.min.js"></script>
<script src="<?php echo base_url() ?>js/matrix.popover.js"></script>
<script src="<?php echo base_url() ?>js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>js/matrix.tables.js"></script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {

          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();
          }
          // else, send page to designated URL
          else {
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
