				
	 				<?php $query_yes1 = mysql_query("select * from stdevice where dev_status = 'Dañado'")or die(mysql_error());
					$count_no = mysql_num_rows($query_yes1);

		
		            ?>
					<?php $query_no = mysql_query("select * from stdevice where dev_status = 'Ninguno'					
					")or die(mysql_error());
					$count_yes = mysql_num_rows($query_no);
					
		            ?>
					
					<?php $not_read1 = $count_no -  $count_yes; ?>
