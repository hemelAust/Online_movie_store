
<?php 
			
	$m_id=$this->session->userdata('m_id');
		if($m_id!=NULL){
			
?>

<form method="post" action="<?php echo base_url();?>member/search_result_" >
  <input type="text" name="keyword" class="input_style_one"  placeholder="Search Awarded Bangla Movies"  size="40" />
  <input type="submit" value="Search" class="search_button" />
</form>

<table border="1" align="center" class="table_popular_bangla_movie" cellpadding="0">
    <tr>
       <th class="movie_name">Movie Name</th>
        <th class="movie_name">Award Type</th>
        <th class="movie_name">Released Date</th>
        <th class="movie_name">Action</th>
    </tr>
    <?php 
        foreach($results as $row)
        {
    ?>
    <tr>
        <td class="p_movie_name"><?php echo $row->a_movie_name;?></td>
        <td class="p_movie_name">
            <?php echo $row->awards_type;?>
        
        </td>
        <td class="p_movie_name"><?php echo $row->year;?></td>
       <td><a href="<?php echo base_url();?>member/shipping_address"class="bangla_movies_a_one">Buy</a></td>
        
    </tr>
    <?php } ?>
    
</table>
<div class="pagination">
    <?php echo $this->pagination->create_links(); ?>
</div>

<?php }
else{
?>

<form method="post" action="<?php echo base_url();?>view_controller/search_result_" >
  <input type="text" name="keyword" class="input_style_one"  placeholder="Search Awarded Bangla Movies"  size="40" />
  <input type="submit" value="Search" class="search_button" />
</form>

<table border="1" align="center" class="table_popular_bangla_movie">
    <tr>
        <th class="movie_name">Movie Name</th>
        <th class="movie_name">Award Type</th>
        <th class="movie_name">Released Date</th>
        <th class="movie_name">Action</th>
    </tr>
    <?php 
        foreach($results as $row)
        {
    ?>
    <tr>
        <td class="p_movie_name"><?php echo $row->a_movie_name;?></td>
        <td class="p_movie_name">
            <?php echo $row->awards_type;?>
        
        </td>
        <td class="p_movie_name"><?php echo $row->year;?></td>
       <td><a href="<?php echo base_url()?>welcome/sign_up"class="bangla_movies_a_one">Buy</a></td>
        
    </tr>
    <?php } ?>
    
</table>
<div class="pagination">
    <?php echo $this->pagination->create_links(); ?>
</div>
<?php } ?>