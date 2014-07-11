<form action="<?php echo base_url();?>super_admin/save_bangla_old_movies" method="post">

	<table border="0">
    	<tr>
        	<td class="admin_Bangla_Populer_Movie_Name">Bangla Old Movie Name</td>
            <td>
            	<input type="text" name="b_o_movie_name"  placeholder="Bangla Old Movie Name" size="40" class="admin_Bangla_Populer_Movie_Name_input">
            </td>
        </tr>
        <tr>
        	<td class="admin_Bangla_Populer_Movie_Name">Director Name</td>
            <td>
            	<input type="text" name="director_name" placeholder="Director Name" size="40" class="admin_Bangla_Populer_Movie_Name_input">
            </td>
        </tr>
        <tr>
        	<td class="admin_Bangla_Populer_Movie_Name">Released Date</td>
            <td>
            	<input type="date" name="released_date" size="40" class="admin_Bangla_Populer_Movie_Name_input">
            </td>
        </tr>
    </table>
    <input type="submit" name="btn" value="Insert" class="back1">

</form>