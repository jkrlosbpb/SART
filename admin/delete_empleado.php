<?php
include('./lib/dbcon.php'); 
dbcon(); 
if (isset($_POST['delete_empleado'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM empleado where id_emp='$id[$i]'");
}
header("location: empleados.php");
}
?>