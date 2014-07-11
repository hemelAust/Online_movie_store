<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title><?php echo $title;?></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>admin_css/login.css" media="screen" />
</head>
<body>
<div class="wrap">
	<div id="content">
		<div id="main">
        	
			<div class="full_w">
            	<h2 align="center" class="a">Admin Login</h2>
          
           		<?php 
				$exception = $this->session->userdata('exception');
				if(isset($exception)){
					echo $exception;
					$this->session->unset_userdata('exception');
					
				}
			
			?>
				<form action="<?php echo base_url();?>admin_login/check_login" method="post" onSubmit="return validateStandard(this)">
					<label for="login">Email Address:</label>
					<input id="login" name="email_address" class="text" required="1" regexp="JSVAL_RX_EMAIL" err="Enter a Valid Email Address" />
					<label for="pass">Password:</label>
					<input id="pass" name="password" type="password" class="text"  required="1" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE" err="Password Incorrect"/>
					<div class="sep"></div>
					<button type="submit" class="ok">Login</button> <a class="button" href="">Forgotten password?</a>
				</form>
			</div>
			<div class="footer">Admin Panel</div>
		</div>
	</div>
</div>

</body>
</html>
