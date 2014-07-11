 <script type="text/javascript">
            function checkDelete()
            {
                var chk=confirm("Are you sure to delete this ? ");
                if(chk)
                    {
                        return true;
                    }
                else{
                    return false;
                }
            }
        </script>
<table border="1" align="center" class="table_popular_bangla_movie">
    <tr>
        <th class="movie_name">Movie Name</th>
        <th class="movie_name">Director Name</th>
        <th class="movie_name">Released Date</th>
        <th class="movie_name">Action</th>
        
    </tr>
    <?php 
	
        foreach($result as $row)
        {
    ?>
    <tr>
        <td class="p_movie_name"><?php echo $row->b_o_movie_name;?></td>
        <td class="p_movie_name">
            <?php echo $row->director_name;?>
        
        </td>
        <td class="p_movie_name"><?php echo $row->released_date;?></td>
        <td>
        	<a href="<?php echo base_url()?>super_admin/edit_bangla_old_movie/<?php echo $row->b_o_id;?>" class="edit_">Edit</a> | 
            <a href="<?php echo base_url();?>super_admin/delete_bangla_old_movie/<?php echo $row->b_o_id;?>"  class="edit_" onclick="return checkDelete();">Delete</a>
        </td>
       
        
    </tr>
    <?php } ?>
    
</table>
<div class="pagination">
    <?php echo $this->pagination->create_links(); ?>
</div>