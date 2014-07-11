<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>admin_css/style.css" />

<title><?php echo $title;?></title>

</head>

<body onLoad="show_clock()">
	<div class="mainarea fix">
    	<div class="header_area fix">
        	<div class="left_header fix align_left">
            	<p class="left_header_font">Online Movie Store Admin Panel</p>
               
            </div>
            <div class="right_header fix align_right">
            <script language="javascript" src="<?php echo base_url();?>admin_js/a.js">

			</script>
            	<a href="<?php echo base_url();?>admin_login" class="sign_up_link_style"><input type="button" name="login" value="Log Out"  class="right_header_button"/></a>
                
                
            </div>
        </div>
        <div class="menu_area">
        	<div class="menu fix">
            	 <div class="mainmenu">
     				<ul>
                       
                       <li><a href="<?php echo base_url();?>super_admin/home_message">View All</a></li>
                       <li><a href="<?php echo base_url();?>super_admin/bangla_movies_list">Insert Bangla Movies</a></li>
                       <li><a href="<?php echo base_url();?>super_admin/hindhi_movies_list">Insert Hindhi Movies</a></li>
                       <li><a href="<?php echo base_url();?>super_admin/english_movies_list">Insert English Movies</a></li>
                       <li><a href="<?php echo base_url();?>super_admin/bar_chart">Report</a></li>
                       
     				</ul>
  				 </div>
            </div>
        
        </div>
        <div class="images_area fix">
        	
          	<?php echo $admin_maincontent;?>
                
        </div>
         <?php 
	  	if(isset($footer_area)){
	  ?>
        <div class="footer_area fix">
        
            <div class="left_footer ">
            	<p class="left_footer_heading">Company Info</p>
                <ul class="left_footer_ul">
                	<li><a href="#" class="left_footer_li_none">About Us</a></li>
                    <li><a href="#" class="left_footer_li_none">Safe Shopping Gurantee</a></li>
                    
                </ul>
            </div>
         
            <div class="left_footer ">
            <p class="left_footer_heading">Help</p>
                <ul class="left_footer_ul">
                	<li><a href="#" class="left_footer_li_none">Shopping Info</a></li>
                    <li><a href="#" class="left_footer_li_none">Purchasing Info</a></li>
                    
                </ul>
            </div>
            <div class="left_footer">
            	 <p class="left_footer_heading">Follow US</p>
              
                <div class="social_bookmarks fix">
            		<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/facebook.png" alt=""  /></a>
                	<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/feed.png" alt=""  /></a>
                	<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/twitter.png" alt=""  /></a>
                	<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/flicker.png" alt=""  /></a>
                	<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/in.png" alt=""  /></a>
                </div>
                
            </div>
            
        
        </div>
   <?php } ?>
        	
    </div>
</body>
</html>
