<title><?php echo $title;?></title>
</head>

<body>

<div  class="table_width">
<h3 align="center" class="header_three">Sign Up</h3>
<h3>
     <?php
     $message=$this->session->userdata('message');
      if(isset($message)){
		  echo $message;
		  $this->session->unset_userdata('message');
		  }	 
	 ?>
     
     </h3>

<form action="<?php echo base_url();?>user_login/save_member_info" method="post" onSubmit="return validateStandard(this)">
	<table border="0"  align="center" align="center"  class="table">

<tr>
	<td class="sign_up">First Name</td>

	<td>
		<input type="text" name="first_name" size="60" placeholder="First Name" maxlength="50"  tabindex="1"  size="40"  class="input_style"  required="1" regexp="JSVAL_RX_ALPHA"  err="Enter Your First Name Properly" /><span class="required">*</span>

	</td>
</tr>


<tr>
    <td class="sign_up" >Last Name</td>
    <td>
    	<input type="text"  name="last_name" size="60" placeholder="Last Name" maxlength="50"  tabindex="2"  size="40"  class="input_style" required="1" regexp="JSVAL_RX_ALPHA"  err="Enter Your Last Name Properly"  /><span class="required">*</span>
    
    </td>
</tr>



<tr>
    <td class="sign_up">Email</td>
    <td>
    	<input type="email"  name="email_address" size="60" placeholder="Email Address" tabindex="3" size="40" class="input_style" required="1" regexp="JSVAL_RX_EMAIL" err="Enter a Valid Email Address" /><span class="required">*</span>
    
    </td>
</tr>

<tr>
    <td class="sign_up">Password</td>
    <td>
    	<input type="password"  name="password" size="60" placeholder="Enter Your password" tabindex="4" size="40" class="input_style" required="1" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE" err="Password Incorrect" /><span class="required">*</span>
    
    </td>
</tr>

<tr>
    <td class="sign_up">Confirm Password</td>
    <td>
    	<input type="password"  name="confirm_password" size="60" placeholder="Confirm Your password" tabindex="5" size="40"   class="input_style" equals="password" err="Incorrect Password"/><span class="required">*</span>
    
    </td>
</tr>




<tr>
    <td class="sign_up">Address</td>
    <td>
    	<textarea  rows="4" cols="40" tabindex="3" name="address" size="40" placeholder="address" class="address"> </textarea>
    </td>
</tr>


<tr>
    <td class="sign_up">Gender</td>
    <td>
        <input type="radio" name="gender" value="male" tabindex="3"  checked="checked" size="40"/>Male
        <input type="radio" name="gender" value="female" tabindex="4" size="40"/>Female
    </td>
</tr>


<tr>
    <td class="sign_up">Date Of Birth</td>
    <td>
    	<input type="text" id="datepicker" name="dob" class="input_style"  size="40"/>
    </td>
</tr>


<tr>
    <td class="sign_up">Country</td>
    <td>
		<select name="contry" tabindex="6" class="input_style" size="">
			<option>Select Country......</option>

				<script type="text/javascript">
                	printCountryOptions();
                </script>


		</select>

	
</tr>

<tr>
    <td class="sign_up">&nbsp;</td>
    <td>
    
        <input type="submit" name="btn" value="Save"  class="back"/>
        <input type="reset" name="reset" class="back" />
        <a href="<?php echo base_url();?>welcome" class="back"><input type="button" name="back" value="Back" class="back" /> </a>
    </td>
</tr>


</form>




</div>



</body>
</html>
