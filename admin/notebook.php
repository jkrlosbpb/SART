<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('Device_sidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					 <a href="add_Device.php" class="btn btn-info"  id="add" data-placement="right" title="Click para agregar Dispositivo" ><i class="icon-plus-sign icon-large"></i> Agregar Dispositivo</a>
					  <script type="text/javascript">
		              $(document).ready(function(){
		              $('#add').tooltip('show');
		              $('#add').tooltip('hide');
		              });
		             </script>
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from stdevice 
				 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				 where dev_name = 'NOTEBOOK' OR dev_name = 'notebook'
			      OR dev_name = 'Notebook'
				 ORDER BY stdevice.id DESC ");
	             $count = mysql_num_rows($count_item);
                 ?>	
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Notebook(s) </div>
							  <div class="muted pull-right">
								Número de Notebook(s): <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                          </div>
						  
				<h4 id="sc">Lista de Notebook
					<div align="right" id="sc">Date:
						<?php
                             $date = new DateTime();
 $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
                         ?></div>
				 </h4>	  
						   
 <div class="container-fluid">
 <div class="row-fluid">						 
 <br/>
	<div class="pull-left">
			    <ul class="nav nav-pills">
				<li class="">
					<a href="device_stocks.php">All</a>
				</li>
					
			  <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Teclado' OR dev_name = 'teclado' OR dev_name = 'TECLADO'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>					
				<li class="">
					<a href="Keyboard.php">Keyboard&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Mouse' OR dev_name = 'mouse'
               OR dev_name = 'muse' OR dev_name = 'mose'OR dev_name = 'mse' OR dev_name = 'MOUSE' OR dev_name = '(Mouse)' 
			    OR dev_name = 'Mouse/PS2' OR dev_name = 'Mouse/USB' OR dev_name = 'Mouse(PS2)' OR dev_name = 'Mouse(USB)' 
			    OR dev_name = 'Mouse-PS2' OR dev_name = 'Mouse-USB' OR dev_name = 'Mouse PS2' OR dev_name = 'Mouse USB'  
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="Mouse.php">Mouse&nbsp;<span class="label label-default"> <?php echo $count;?></span></a></a>
				</li>
				
			   <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Monitor' OR dev_name = 'monitor'
               OR dev_name = 'montor' OR dev_name = 'monitr' OR dev_name = 'mnitor' OR dev_name = 'mntr' OR dev_name = 'MNTR'
			   OR dev_name = '(monitor)' OR dev_name = '(montor)'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="monitor.php">Monitor&nbsp;<span class="label label-default"> <?php echo $count;?></span></a></a></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Central Processing unit (CPU)' OR dev_name = 'central processing unit' OR dev_name = 'central_processing_unit'
			   OR dev_name = 'cpu' OR dev_name = 'c_p_u' OR dev_name = 'c.p.u.'   OR dev_name = 'cntral prcessing unit' OR dev_name = 'centrl procesing unit' OR dev_name = 'central processing nit'
			   OR dev_name = 'cenRal processing unt' OR dev_name = 'cetral processin unit' OR dev_name = 'cetral_processin_unit' OR dev_name = 'centralprocessingunit' OR dev_name = 'CENTRAL PROCESSING UNIT'
			   OR dev_name = '(CPU)' OR dev_name = '(Central Processing unit (CPU))'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="cpu.php">CPU&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Power Supply' OR dev_name = 'power supply'
			   OR dev_name = 'pwer supply' OR dev_name = 'power spply' OR dev_name = 'pwer suply' OR dev_name = 'poer Suply'
			   OR dev_name = 'powersupply' OR dev_name = 'power_supply' OR dev_name = 'power.supply' OR dev_name = 'pwer.spply'
			   OR dev_name = '(power supply)' OR dev_name = '(powersupply)' OR dev_name = '(power_supply)' OR dev_name = '(power-supply)'
			   OR dev_name = 'POWER SUPPLY'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="power_supply.php">Power Supply&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Video Graphic Accelerator (VGA)' OR dev_name = 'VGA'
			   OR dev_name = '(VGA)' OR dev_name = 'Video.Graphic.Accelerator' OR dev_name = 'Video-Graphic-Accelerator' OR dev_name = 'Video_Graphic_Accelerator'
			   OR dev_name = 'VideoGraphicAccelerator' OR dev_name = 'Video Graphic' OR dev_name = 'Vedio Graphic Acelerator' OR dev_name = 'VIDEO GRAPHIC ACCELATOR'
			   OR dev_name = 'VIDEO+GRAPHIC+ACCELATOR' OR dev_name = 'vido grphic' OR dev_name = 'viDo gRphic Accelarator'OR dev_name = 'video graphic accelarator'
			   OR dev_name = 'vedeo graphic' OR dev_name = 'video graphic accelerator' OR dev_name = 'videographicaccelerator'OR dev_name = 'vedio graphic accelerator'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="vga.php">VGA Ports&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'NOTEBOOK' OR dev_name = 'notebook'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="active">
				<a href="notebook.php">Notebook&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'AVR' OR dev_name = 'A.V.R'
			   OR dev_name = 'automatic Voltage Regulator' OR dev_name = 'automatic Voltage Reactor' OR dev_name = 'automatic_Voltage_Regulator' OR dev_name = 'automatic-Voltage-Regulator'
			   OR dev_name = 'avrs' OR dev_name = 'automatic v.r' OR dev_name = 'automatic voltage R.' OR dev_name = 'avregulator'
			   OR dev_name = 'automatic Voltage Reactor' OR dev_name = 'automatic-Voltage-Reactor' OR dev_name = 'automaticVoltageReactor'  OR dev_name = 'automaticVoltageRegulator'
			   OR dev_name = 'automtic Voltge Reactor'  OR dev_name = 'automtic Voltge Regulator'
		       ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="avr.php">AVR&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				</ul>
	</div>
</div>
</div>
	
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>
				<th class="empty"></th>
					<th>Device Name</th>
					<th>Device Description </th>
					<th>Inventory Code</th>
			        <th>Device Brand  </th>
					<th>Device Model  </th>
					<th>Device Status  </th>	
                <th class="empty"></th>					
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
	
		<?php
	    $device_query = mysql_query("select * from stdevice 
		LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		where dev_name = 'NOTEBOOK' OR dev_name = 'notebook'
			   OR dev_name = 'Notebook'
		ORDER BY stdevice.id DESC") or die(mysql_error());
	    while ($row = mysql_fetch_array($device_query)) {
		$id = $row['id'];
		$dev_id = $row['dev_id'];
		?>
										
		<tr>
		<td><?php
			   $device_query2 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query2);
		       if($row['dev_status']=='Nuevo')
		       {
			   echo '<i class="icon-check"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else if($row['dev_status']=='Usado')
			   {
			   echo '<i class="icon-ok"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       }
			   else if($row['dev_status']=='Reparado')
			   {
			   echo '<i class="icon-wrench"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else
			   {
			   echo '<i class="icon-remove-sign"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?>
		</td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_desc']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php
			   $device_query1 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query1);
		       if($row['dev_status']=='Nuevo')
		       {
			   echo '<div class="alert alert-success"><i class="icon-check"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else if($row['dev_status']=='Usado')
			   {
			   echo '<div class="alert alert-warning"><i class="icon-ok"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
			   else if($row['dev_status']=='Reparado')
			   {
			   echo '<div class="alert alert-warning"><i class="icon-wrench"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else
			   {
			   echo '<div class="alert alert-danger"><i class="icon-remove-sign"></i><strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?></td>
												
			<?php include('toolttip_edit_delete.php'); ?>												
			<td class="empty" width="80"><a rel="tooltip"  title="Editar Dispositivo" id="e<?php echo $id; ?>" href="device_edit.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"> Editar</i> </a></td>
		</tr>
											
	<?php } ?>   

</tbody>
</table>
</form>		
		
			  		
</div>
</div>
</div>
</div>
</div>

	
</div>	
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
 </body>
</html>