<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('dashboard_slidebar.php'); ?>
			    
				  <div class="span9" id="content">
                     <div class="row-fluid">
				  
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from stdevice
		         LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		         where NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		         and dev_status='Nuevo' ORDER BY stdevice.id DESC");
	             $count = mysql_num_rows($count_item);
                 ?>		                 					 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-check"></i>&nbsp;Lista de Nuevos Dispositivos</div>
							 <div class="muted pull-right">
								Nuevos Dispositivo(s): <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                          </div>
						  
				<h4 id="sc">Lista de Dispositivos Nuevo(s)
					<div align="right" id="sc">Fecha:
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
				<li class="active">
					<a href="newdevice.php">Todos</a>
				</li>
					<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)	   
	             and dev_status = 'Nuevo' and dev_name = 'NOTEBOOK'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newnb.php">Notebook&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>

					  <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)	   
	           and dev_status = 'Nuevo' and dev_name = 'DESKTOP'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newcpu.php">Desktop&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>

 				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)	   
	             and dev_status = 'Nuevo' and dev_name = 'MONITOR'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newmonitor.php">Monitor&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>

			  <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)	   
	             and dev_status = 'Nuevo' and dev_name = 'TECLADO'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>					
				<li class="">
					<a href="newKeyboard.php">Teclado&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				         				
			<?php	
	           $count_item=mysql_query("select * from stdevice 
		       LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		       where NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)	   
	          and dev_status = 'Nuevo' and dev_name = 'MOUSE'
	           ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newmouse.php">Mouse&nbsp;<span class="label label-default"> <?php echo $count;?></span></a></a>
				</li>
				
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)	   
	           and dev_status = 'Nuevo' and dev_name = 'Telefono'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newvga.php">Teléfono(s)&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)	   
	             and dev_status = 'Nuevo' and dev_name = 'Power cords'
		         ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newpower_cords.php">Power Cord&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
					<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			    where NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)	   
	           and dev_status = 'Nuevo' and dev_name = 'AVR'
		       ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newavr.php">AVR&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				</ul>
	</div>
</div>
</div>

<div class="block-content collapse in">
   <div class="span12">
	
<form id="send" method="post">	
<div class="empty">
	<div class="control-group">
		 <label class="control-label" for="inputEmail">Seleccione Ubicación</label>
		 <?php

			          	$location = null;
			          	if(isset($_GET['location'])) {
			          		$location = $_GET['location'];
			          	}
		     ?>
			 <div class="controls">
				  <select name="stdev_id" class="chzn-select" required/>
				    <option></option>
			          <?php $result =  mysql_query("select * from stlocation")or die(mysql_error()); 
			          while ($row=mysql_fetch_array($result)){ ?>
				   <option value="<?php echo $row['stdev_id']; ?>" <?= (isset($location) && $location == $row['stdev_id'] ? "selected=selected":"") ?>><?php echo $row['stdev_location_name']; ?></option>
				    <?php } ?>
				   </select>
		    </div>
		    <br>
		     <label class="control-label" for="inputEmail">Seleccione Empleado</label>
		     <div class="controls">
				  <select name="id_emp" class="chzn-select" required <?= (!$location ? "disabled=disabled" : "")?>/>
				    <option></option>

			          <?php  $result =  mysql_query("select * from stlocation 
									INNER JOIN empleado ON stlocation.stdev_id=empleado.stdev_id where 1=1". ($location?" AND stlocation.stdev_id=$location":""))or die(mysql_error()); 
			          while ($row=mysql_fetch_array($result)){ ?>
				    <option value="<?php echo $row['id_emp']; ?>&nbspName&nbsp<?php echo $row['nom_emp']; ?>"><?php echo $row['nom_emp']; ?></option>
				    <?php } ?>
				   </select>
		    </div>
	</div>
			
	  <div class="control-group"> 
		<div class="controls">
		<button  class="btn btn-primary" id="snd" data-placement="right" title="Click to Assign" <?= !$location?"disabled=disabled":"" ?>><i class="icon-share"> Asignar Dispositivo(s)</i></button>
         <script type="text/javascript">
	     $(document).ready(function(){
	     $('#snd').tooltip('show');
	     $('#snd').tooltip('hide');
	     });
	    </script>
			 		 
		 <div class="pull-right">
	      <a href="print_new.php" class="btn btn-info" id="print" data-placement="left" title="Click para Imprimir"><i class="icon-print icon-large"></i> Imprimir Lista</a> 
		       <script type="text/javascript">
		       $(document).ready(function(){
		       $('#print').tooltip('show');
		       $('#print').tooltip('hide');
		       });
		        </script> 	
         </div>
	  </div>
 </div>
</div> 
    <br>                
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>
				<th class="empty"></th>
					<th>Device Name</th>
					<th>Device Description </th>
					<th>Device Serial Number  </th>
			        <th>Device Brand  </th>
					<th>Device Model  </th>
					<th>Device Status  </th>                   					              		  
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
	
		<?php
	    $device_query = mysql_query("select * from stdevice
		LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		where NOT EXISTS 
	   (select * from location_details where stdevice.id = location_details.id)
		and dev_status='Nuevo' ORDER BY stdevice.id ASC") or die(mysql_error());
	    while ($row = mysql_fetch_array($device_query)) {
		$id = $row['id'];
		$dev_name = $row['dev_name'];

		?>
										
		<tr>
		<td width="30" class="empty">
			<input id="" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>&nbspName&nbsp<?php echo $dev_name; ?>" >
		</td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_desc']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><div class="alert alert-success"><i class="icon-check"></i><strong><?php echo $row['dev_status']; ?></strong></div></td>		
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

	
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
<script>
	jQuery(document).ready(function(){
		jQuery('[name=stdev_id]').chosen().change(function(e){
		 	console.log(e, this);
		 	window.location ="newdevice.php?location=" + jQuery(this).val();
		 });
		jQuery("#send").submit(function(e){
			e.preventDefault();{												
			var formData = jQuery(this).serialize();
			$.ajax({
			type: "POST",
			url: "send.php",
			data: formData,
			success: function(html){
					
			$.jGrowl("Dispositivo Asignado Correctamente", { header: 'Dispositivo Asignado' });
			var delay = 500;
			setTimeout(function(){ window.location = 'device_location.php'  }, delay);  
						
			}
												
		 });
	   }
	});
});
</script>
 </body>
</html>