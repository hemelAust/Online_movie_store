
<table border="1" align="center">
    <tr>
        <th >Order No</th>
        <th>Member Id</th>
         <th>First Name</th>
          <th>Last Name</th>
        <th>Email Address</th>
        <th>Phone No</th>
        <th>Address</th>
         <th>Country</th>
          <th>Payment Type</th>
    </tr>
    <?php 
		$results='';
		if(is_array($results)){
        foreach($results as $row)
        {
    ?>
    <tr>
        <td><?php echo $row->o_id;?></td>
        <td>
            <?php echo $row->m_id;?>
        
        </td>
        	 <td><?php echo $row->first_name;?></td>
             <td><?php echo $row->last_name;?></td>
             <td><?php echo $row->email_address;?></td>
             <td><?php echo $row->phone_no;?></td>
             <td><?php echo $row->address;?></td>
             <td><?php echo $row->country;?></td>
             <td><?php echo $row->payment_method;?></td>
       
        
    </tr>
    <?php }} ?>
    
</table>
