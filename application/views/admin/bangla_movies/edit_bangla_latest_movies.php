<form action="<?php echo base_url();?>super_admin/update_bangla_latest_movies" method="post">
<table border="1" align="center" class="table_popular_bangla_movie">
    <tr>
        <th class="movie_name">Movie Name</th>
        <th class="movie_name">Director Name</th>
        <th class="movie_name">Released Date</th>
        <th class="movie_name">Action</th>
        
    </tr>
 
    <tr>
        <td class="p_movie_name">
        	<input  type="text" name="l_m_name" value="<?php echo $result->l_m_name;?>" class="p_movie_name_" size="30"/>
            <input type="hidden" name="l_id" value="<?php echo $result->l_id;?>" class="p_movie_name_"  />
        </td>
        <td class="p_movie_name">
            
        	<input  type="text" name="director_name" value="<?php echo $result->director_name;?>" class="p_movie_name_"  size="30"/>
            <td><input  type="text" name="released_date" value="<?php echo $result->released_date;?>" class="p_movie_name_r"  size="30"/></td>
     		 <td> <input type="submit" name="btn" tabindex="" value="Update" class="update"/>
        </td>
       
        </td>
       
        
    </tr>
 
    
</table>
</form>
<a href="<?php echo base_url();?>super_admin/view_bangla_latest_movies" class="back"><input type="button" name="back" value="Back" class="back1" /> </a>
