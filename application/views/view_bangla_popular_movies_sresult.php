<?php 
			
	$m_id=$this->session->userdata('m_id');
		if($m_id!=NULL){
		
?>

<form method="post" action="<?php echo base_url();?>member/search_result" >
  <input type="text" name="keyword" class="input_style_one"  placeholder="Search Popular Bangla Movies"  size="40"  />
  <input type="submit" value="Search" class="search_button"/>
</form>

<table border="1" align="center" class="table_popular_bangla_movie">
    <tr>
        <th class="movie_name">Movie Name</th>
        <th class="movie_name">Viewers Rating</th>
        <th class="movie_name">Released Date</th>
        <th class="movie_name">Action</th>
    </tr>
    <?php 
        foreach($results as $row)
        {
    ?>
    <tr>
        <td class="p_movie_name"><?php echo $row->p_movie_name;?></td>
        <td class="p_movie_name">
            <?php echo $row->viewers_rating;?>
        
        </td>
        <td class="p_movie_name"><?php echo $row->released_date;?></td>
       <td><a href="<?php echo base_url();?>member/shipping_address"class="bangla_movies_a_one">Buy</a></td>
        
    </tr>
    <?php } ?>
    
</table>
<a href="<?php echo base_url();?>member/view_bangla_populer_movies" class="back"><input type="button" name="back" value="Back" class="back_" /> </a>

<?php } else{ ?>




<form method="post" action="<?php echo base_url();?>view_controller/search_result" >
  <input type="text" name="keyword" class="input_style_one"  placeholder="Search Popular Bangla Movies"  size="40"  />
  <input type="submit" value="Search" class="search_button"/>
</form>

<table border="1" align="center" class="table_popular_bangla_movie">
    <tr>
        <th class="movie_name">Movie Name</th>
        <th class="movie_name">Viewers Rating</th>
        <th class="movie_name">Released Date</th>
        <th class="movie_name">Action</th>
    </tr>
    <?php 
        foreach($results as $row)
        {
    ?>
    <tr>
        <td class="p_movie_name"><?php echo $row->p_movie_name;?></td>
        <td class="p_movie_name">
            <?php echo $row->viewers_rating;?>
        
        </td>
        <td class="p_movie_name"><?php echo $row->released_date;?></td>
       <td><a href="<?php echo base_url()?>welcome/sign_up"class="bangla_movies_a_one">Buy</a></td>
        
    </tr>
    <?php } ?>
    
</table>
<a href="<?php echo base_url();?>view_controller/view_bangla_populer_movies" class="back"><input type="button" name="back" value="Back" class="back_" /> </a>
<?php } ?>