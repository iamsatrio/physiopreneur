<!DOCTYPE html>
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<html lang="en">
    <head>
        <title>Fisioterapi</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    		<link rel="stylesheet" href="css/bootstrap.min.css" />
    		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
	<script>
		var status = <?php $this->session->userdata('salah')?>
		if(status){
			windows.alert('Maaf, kombinasi username dan password salah');
		}
	</script>
    </head>
    <body>
        <div id="loginbox">
		<?php //echo base_url('login/action_login') ?>
            <form id="loginform" class="form-vertical" action="<?php echo base_url('index.php/login/action_login') ?>" method="post">
				 <div class="control-group normal_text"> <h3><img src="<?php echo base_url() ?>img/logo-orang.png" alt="Logo" style="width:30%;"/></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="Username" name="username" required/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="password" required/>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-right"><input type="submit" value="Login" class="btn btn-success"/></span>
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>

                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>

                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
                </div>
            </form>
        </div>

        <script src="<?php echo base_url() ?>js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>js/matrix.login.js"></script>



<script src="https://www.gstatic.com/firebasejs/3.7.2/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCAaDgjBkWi3FrmsKnL31d56wgmJLUtxh0",
    authDomain: "physioapps-80a31.firebaseapp.com",
    databaseURL: "https://physioapps-80a31.firebaseio.com",
    storageBucket: "physioapps-80a31.appspot.com",
    messagingSenderId: "591795577331"
  };
  firebase.initializeApp(config);
</script>

    </body>

</html>
