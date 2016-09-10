
<?php

 	 include('./lib/dbcon.php'); 
     dbcon();
	include('session.php');
	$id=$_POST['selector'];
 	$stdev_id  = $_POST['stdev_id'];
 	$id_emp = $_POST['id_emp'];
 	

	if ($id == '' ){ 
	header("location: device_location.php");
	
	?>
			
											

												
																											
	<?php }else{
	
	$query = mysql_query("select * from location_details order by ld_id DESC")or die(mysql_error());

	$row = mysql_fetch_array($query);
	$ld_id  = $row['ld_id'];

	

    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
	$oras = strtotime("now");
	$ora = date("Y-m-d",$oras);




	mysql_query('START TRANSACTION');
    $a = mysql_query("insert location_details (stdev_id,id_emp,date_deployment) values('$id[$i]','$id_emp','$ora')")or die(mysql_error());
    $b = mysql_query("update stdevice set dev_status='Asignado' where id = '$id[$i]'")or die(mysql_error());
    //Inserta en la tabla asignados
    $c = mysql_query("insert asignados (id_emp, id_dev) values('$id_emp', '$id[$i]')")or die(mysql_error());
	if($a && $b && $c) {
		mysql_query('COMMIT');
	}else{
		mysql_query('ROLLBACK');
	}
	
	
	mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Assign Device id $id[$i] to location id $stdev_id')")or die(mysql_error());


    }
    header("location: device_location.php");
    }  
?>
	
	

	
	