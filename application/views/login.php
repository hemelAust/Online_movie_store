<h2 class="login_form">Login form</h2>
<h3>
    <?php
    $exception=$this->session->userdata('exception');
    if(isset($exception))
    {
        echo $exception;
        $this->session->unset_userdata('exception');
    }
    
    
    ?>
</h3>
<form action="<?php echo base_url();?>user_login/check_login" method="post" onsubmit="return validateStandard(this)">
    <table  align="center" class="table1">
        <tr>
            <td class="user_email">User Email:</td>
            <td><input type="text" name="email_address" placeholder="Email Address" tabindex="1"  required="1" regexp="JSVAL_RX_EMAIL" err="Enter Email Address.." class="input_style" size="40"/></td>
        </tr>
        
        <tr>
            <td class="user_email">Password:</td>
            <td><input type="password" name="password" placeholder="Your Password" tabindex="2"  required="1" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE" err="passwored not valid" class="input_style" size="40"/></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="btn" tabindex="3" value="Login" class="back"/></td>
        </tr>
    </table>
</form>