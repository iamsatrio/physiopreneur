<!-- CSS part -->
<link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>css/uniform.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>css/select2.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>css/matrix-media.css" />
<link href="<?php echo base_url() ?>font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

<?php
	if(!$this->session->userdata('username') && $this->session->userdata('status') == 0){
		redirect(base_url());
	}
?>

<!--Header-part-->
<div id="header">
  <img src="<?php echo base_url() ?>img/logo-orang.png" alt="" style="height:70px; width:70px; margin-left:5%;">
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome <?php echo $this->session->userdata("username"); ?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
      </ul>
    </li>

    <li class=""><a title="" href="<?php echo base_url('index.php/login/action_logout'); ?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->

<!-- JS part -->
<script src="<?php echo base_url() ?>js/excanvas.min.js"></script>
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
