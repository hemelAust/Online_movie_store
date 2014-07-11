<h2 align="center" class="header_three_">Shipping Address And Payment Method</h2>
<form action="<?php echo base_url();?>member/save_order_info" method="post" onSubmit="return validateStandard(this)">
	<table border="0">
    	<tr>
        	<td class="sign_up">First Name</td>
            <td>
            	<input type="text" name="first_name" placeholder="First Name" size="40"  required="1" regexp="JSVAL_RX_ALPHA"  err="Enter Your First Name Properly" class="input_style"/><span class="required">*</span>
            </td>
        </tr>
        <tr>
        	<td class="sign_up">Last Name</td>
            <td>
            	<input type="text" class="input_style" name="last_name" size="40" placeholder="Last Name" required="1" regexp="JSVAL_RX_ALPHA"  err="Enter Your Last Name Properly" /><span class="required">*</span>
            </td>
        </tr>
        <tr>
        	<td class="sign_up">Email Address</td>
            <td>
            	<input type="email"  name="email_address" class="input_style" size="40" placeholder="Email Address" required="1" regexp="JSVAL_RX_EMAIL" err="Enter a Valid Email Address" /><span class="required">*</span>
            </td>
        </tr>
        <tr>
        	<td class="sign_up">Phone No</td>
            <td>
            	<input type="text"  name="phone_no" placeholder="Phone No" required="1" size="40" class="input_style" /><span class="required">*</span>
            </td>
        </tr>
        <tr>
        	<td class="sign_up">Address</td>
            <td>
            	<textarea  rows="4" cols="40" name="address" required="1" regexp="JSVAL_RX_ALPHA"  err="Enter Your Address Properly"></textarea><span class="required">*</span>
            </td>
        </tr>
		<tr>
    		<td class="sign_up">Country</td>
				<td>
					<select name="country">
						<option>Select Country......</option>

							<script type="text/javascript">
                                printCountryOptions();
                            </script>


					</select><span class="required">*</span>

	
		</tr>
         <tr>
        <td class="sign_up">Payment method</td>
        <td>
            <input type="radio" name="payment_method" value="cash_on_delevery"  required="1" title="Required">Cash On Delevery</br>
            <input type="radio" name="payment_method" value="paypal" title="Use Cash On Delevery">Paypal</p>
                
            
        </td>
    </tr>
        <tr>
    <td>&nbsp;</td>
    <td>
    
        <input type="submit" name="btn" value="Order"  class="back"/>
        <input type="reset" name="reset" class="back" />
        <a href="<?php echo base_url();?>welcome"><input type="button" name="back" value="Back" class="back" /> </a>
    </td>
</tr>
    
    </table>

</form>