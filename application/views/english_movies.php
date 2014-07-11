<div class="bangla_movies fix">
	<ul class="bangla_movies_li">
    	<?php 
			
			$m_id=$this->session->userdata('m_id');
					   		if($m_id!=NULL){
			
			?>
            <li class="bangla_movies_li"><a href="#" class="bangla_movies_a">English Popular Movies</a></li>
        <li class="bangla_movies_li"><a href="#" class="bangla_movies_a">English Awarded Movies</a></li>
        <li class="bangla_movies_li"><a href="#" class="bangla_movies_a">English Latest Released</a></li>
        
        <li class="bangla_movies_li"><a href="#" class="bangla_movies_a">English Old Movies</a></li>
         <li class="bangla_movies_li"><a href="#" class="bangla_movies_a">English Upcoming Movies</a></li>
         <?php }
		 else{
		 ?>
            
         
            
    	<li class="bangla_movies_li"><a href="#" class="bangla_movies_a">English Popular Movies</a></li>
        <li class="bangla_movies_li"><a href="#" class="bangla_movies_a">English Awarded Movies</a></li>
        <li class="bangla_movies_li"><a href="#" class="bangla_movies_a">English Latest Released</a></li>
        
        <li class="bangla_movies_li"><a href=#" class="bangla_movies_a">English Old Movies</a></li>
         <li class="bangla_movies_li"><a href="#" class="bangla_movies_a">English Upcoming Movies</a></li>
    <?php } ?>
    </ul>

</div>