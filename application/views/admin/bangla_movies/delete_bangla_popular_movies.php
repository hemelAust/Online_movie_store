
<table border="1" align="center" class="table_popular_bangla_movie">
    <tr>
        <th class="movie_name">Movie Name</th>
        <th class="movie_name">Viewers Rating</th>
        <th class="movie_name">Released Date</th>
        <th class="movie_name">Action</th>
        
    </tr>
    <?php 
	if (is_array($result))
	{
  
        foreach($result as $row)
        {
    ?>
    <tr>
        <td class="p_movie_name"><?php echo $row->p_movie_name;?></td>
        <td class="p_movie_name">
            <?php echo $row->viewers_rating;?>
        
        </td>
        <td class="p_movie_name"><?php echo $row->released_date;?></td>
        <td>
        	<a href="<?php echo base_url()?>">Edit</a> | 
            <a href="<?php echo base_url();?>super_admin/delete_bangla_popular_movie/<?php echo $row->p_id;?>">Delete</a>
        </td>
       
        
    </tr>
    <?php } }?>
    
</table>
