<div class="bangla_movies fix">
	<ul class="bangla_movies_li">
    	<?php 
			
			$m_id=$this->session->userdata('m_id');
					   		if($m_id!=NULL){
			
			?>
            <li class="bangla_movies_li"><a href="<?php echo base_url();?>member/view_bangla_populer_movies" class="bangla_movies_a">Bangla Popular Movies</a></li>
        <li class="bangla_movies_li"><a href="<?php echo base_url();?>member/view_bangla_awarded_movies" class="bangla_movies_a">Bangla Awarded Movies</a></li>
        <li class="bangla_movies_li"><a href="<?php echo base_url();?>member/view_bangla_latest_movies" class="bangla_movies_a">Bangla Latest Released</a></li>
        
        <li class="bangla_movies_li"><a href="<?php echo base_url();?>member/view_bangla_old_movies" class="bangla_movies_a">Bangla Old Movies</a></li>
         <li class="bangla_movies_li"><a href="<?php echo base_url();?>" class="bangla_movies_a">Bangla Upcoming Movies</a></li>
         <?php }
		 else{
		 ?>
            
         
            
    	<li class="bangla_movies_li"><a href="<?php echo base_url();?>view_controller/view_bangla_populer_movies" class="bangla_movies_a">Bangla Popular Movies</a></li>
        <li class="bangla_movies_li"><a href="<?php echo base_url();?>view_controller/view_bangla_awarded_movies" class="bangla_movies_a">Bangla Awarded Movies</a></li>
        <li class="bangla_movies_li"><a href="<?php echo base_url();?>view_controller/view_bangla_latest_movies" class="bangla_movies_a">Bangla Latest Released</a></li>
        
        <li class="bangla_movies_li"><a href="<?php echo base_url();?>view_controller/view_bangla_old_movies" class="bangla_movies_a">Bangla Old Movies</a></li>
         <li class="bangla_movies_li"><a href="<?php echo base_url();?>" class="bangla_movies_a">Bangla Upcoming Movies</a></li>
    <?php } ?>
    </ul>

</div>