<form action="<?php echo base_url();?>super_admin/save_bangla_awarded_movies" method="post">

	<table border="0">
    	<tr>
        	<td class="admin_Bangla_Populer_Movie_Name">Bangla Awarded Movie Name</td>
            <td>
            	<input type="text" name="a_movie_name" placeholder="Bangla Awarded Movie Name" size="40" class="admin_Bangla_Populer_Movie_Name_input">
            </td>
        </tr>
        <tr>
        	<td class="admin_Bangla_Populer_Movie_Name">Award Type</td>
            <td>
            	<input type="text" name="awards_type" placeholder="Award Type" size="40" class="admin_Bangla_Populer_Movie_Name_input">
            </td>
        </tr>
        <tr>
        	<td class="admin_Bangla_Populer_Movie_Name">Released Date</td>
            <td>
            	<input type="date" name="year" size="40" class="admin_Bangla_Populer_Movie_Name_input">
            </td>
        </tr>
    </table>
    <input type="submit" name="btn" value="Insert" class="back1">

</form>