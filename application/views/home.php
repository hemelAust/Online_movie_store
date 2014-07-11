<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/style.css" />
<script type="text/javascript" src="<?php echo base_url();?>scripts/country.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>scripts/jsval.js"></script>


<!-- gallery Start-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
		<!--script src="js/jquery.lint.js" type="text/javascript" charset="utf-8"></script-->
<link rel="stylesheet" href="<?php echo base_url();?>gallery/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="<?php echo base_url();?>gallery/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$.noConflict();
jQuery(document).ready(function(){
  jQuery("button").click(function(){
    jQuery("p").text("jQuery is still working!");
  });
});
</script>

<!-- gallery End-->


<!--DatePicker start-->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="<?php echo base_url();?>js/jquery-1.9.1.js"></script>
<script src="<?php echo base_url();?>js//jquery-ui.js"></script>
 
<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
<!--DatePicker End-->



<title><?php echo $title;?></title>
</head>

<body onLoad="show_clock()">
	<div class="mainarea fix">
    	<div class="header_area fix">
        	<div class="left_header fix align_left">
            	<p class="left_header_font">Online Movie Store</p>
            </div>
            <div class="right_header fix align_right">
         
		
			<script language="javascript" src="js/a.js">

			</script>
          	<?php 
			
			$m_id=$this->session->userdata('m_id');
					   		if($m_id!=NULL){
			
			?>	<a href="<?php echo base_url();?>member/logout" class="sign_up_link_style"><input type="button" name="login" value="LogOut"  class="right_header_button"/></a>
            <?php }
			else{
			?>
            	<a href="<?php echo base_url();?>welcome/login/" class="sign_up_link_style"><input type="button" name="login" value="Login"  class="right_header_button"/></a>
                <a href="<?php echo base_url();?>welcome/sign_up/" class="sign_up_link_style"><input type="button" name="Sign Up" value="Sign Up" class="right_header_login_button" /></a>
                <?php } ?>
                
            </div>
        </div>
        <div class="menu_area">
        	<div class="menu fix">
            	 <div class="mainmenu">
     				<ul>
                    	<li><a href="<?php echo base_url();?>">Home</a></li>
                       
                       <?php 
					   
					   		$m_id=$this->session->userdata('m_id');
					   		if($m_id!=NULL){
					   ?>
                       
                      	<li><a href="<?php echo base_url();?>member/bangla_movies">Buy Bangla Movies</a></li>
                       <li><a href="<?php echo base_url();?>member/hindhi_movies">Buy Hindhi Movies</a></li>
                       <li><a href="<?php echo base_url();?>member/english_movies">Buy English Movies</a></li>
                       
                       <?php }
					   else{
					   
					   ?>

                       <li><a href="<?php echo base_url();?>welcome/bangla_movies">Bangla Movies</a></li>
                       <li><a href="<?php echo base_url();?>welcome/hindhi_movies">Hindhi Movies</a></li>
                       <li><a href="<?php echo base_url();?>welcome/english_movies">English Movies</a></li>
                       <?php } ?>
                       <li><a href="<?php echo base_url();?>welcome/free_movie">Free Online Movie</a></li>
     				</ul>
  				 </div>
            </div>
        
        </div>
       <div class="maincontent fix"> 
      	
       <?php echo $maincontent;?>
        
        
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
            		<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/facebook.png" alt=""  title="Facebook" /></a>
                	<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/feed.png" alt=""  title="Feed Orange"  /></a>
                	<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/twitter.png" alt="" title="Twitter"   /></a>
                	<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/flicker.png" alt="" title="Flicker"   /></a>
                	<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/in.png" alt=""  title="Linkedin"  /></a>
                </div>
                
            </div>
            
        
        </div>
   <?php } ?>
    </div>
</body>
</html>
<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();
				
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		
				$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
					custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
					changepicturecallback: function(){ initialize(); }
				});

				$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
					custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
					changepicturecallback: function(){ _bsap.exec(); }
				});
			});
</script>