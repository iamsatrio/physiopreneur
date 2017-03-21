<!DOCTYPE html>
<html lang="en">
<head>
<title>Data Pasien - Physiopreneur</title>
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
      <h1>Data Pasien</h1>
    </div>
  <!--End-breadcrumbs-->

  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data Seluruh Pasien</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>ID Pasien</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><center>1</center></td>
                  <td>Nila</td>
                  <td>Bandung</td>
                  <td>AE1012</td>
                  <td>
                    <center>
                      <a href="rekam-medik.php">
                        <button class="btn btn-primary"><i class="icon icon-search"></i> Details</button>
                      </a>
                    </center>
                  </td>
                </tr>
                <tr>
                  <td><center>2</center></td>
                  <td>Satrio</td>
                  <td>Pondok Pancoran Mas B.35 Bondowoso, Jawa Timur</td>
                  <td>BS12321</td>
                  <td>
                    <center>
                      <a href="rekam-medik.php">
                        <button class="btn btn-primary"><i class="icon icon-search"></i> Details</button>
                      </a>
                    </center>
                  </td>
                </tr>
                <tr>
                  <td><center>3</center></td>
                  <td>Ibas</td>
                  <td>Bandung</td>
                  <td>SW12321</td>
                  <td>
                    <center>
                      <a href="rekam-medik.php">
                        <button class="btn btn-primary"><i class="icon icon-search"></i> Details</button>
                      </a>
                    </center>
                  </td>
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
