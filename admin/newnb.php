<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('newdevice_slidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
		  
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from stdevice 
				 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				 where NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)	   
	             and dev_status = 'Nuevo' and dev_name = 'NOTEBOOK'
		         OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Nuevo' and dev_name = 'Notebook'
				 ORDER BY stdevice.id DESC ");
	             $count = mysql_num_rows($count_item);
                 ?>	   
					 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-check"></i>&nbsp;Lista de Nuevas Notebook(s)</div>
							  <div class="muted pull-right">
								Número de Nuevas Notebook(s): <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                          </div>
						  
				<h4 id="sc">Lista Notebook Nuevas
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
				<li class="">
					<a href="newdevice.php">Todos</a>
				</li>
				
			  <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)	   
	             and dev_status = 'Nuevo' and dev_name = 'TECLADO'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Nuevo' and dev_name = 'Teclado'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>					
				<li class="">
					<a href="newKeyboard.php">Teclados(s)&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				         				
			<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)	   
	          and dev_status = 'Nuevo' and dev_name = 'MOUSE'
		
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Nuevo' and dev_name = 'Mouse'		       
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Nuevo' and dev_name = 'mouse'
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
	             and dev_status = 'Nuevo' and dev_name = 'Monitor'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Nuevo' and dev_name = 'MONITOR'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Nuevo' and dev_name = 'monitor'
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
	             and dev_status = 'Nuevo' and dev_name = 'Central Processing unit (CPU)'
		         OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'Nuevo' and dev_name = 'central processing unit'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newcpu.php">CPU&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
								
			  <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)	   
	           and dev_status = 'Nuevo' and dev_name = 'Power supply'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'Nuevo' and dev_name = 'power supply'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newpower_supply.php">Power Supply&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)	   
	           and dev_status = 'Nuevo' and dev_name = 'Video Graphic Accelerator (VGA)'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Nuevo' and dev_name = 'VGA'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newvga.php">VGA Ports&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)	   
	             and dev_status = 'Nuevo' and dev_name = 'NOTEBOOK'
		         OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Nuevo' and dev_name = 'Notebook'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'Nuevo' and dev_name = 'notebook'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="active">
				<a href="newnb.php">Notebook(s)&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			    where NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)	   
	           and dev_status = 'Nuevo' and dev_name = 'AVR'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Nuevo' and dev_name = 'A.V.R'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'Nuevo' and dev_name = 'automatic Voltage Regulator'
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
		 <label class="control-label" for="inputEmail">Nombre de Ubicación </label>
			 <div class="controls">
				  <select name="stdev_id" class="chzn-select" required/>
				    <option></option>
			          <?php $result =  mysql_query("select * from stlocation")or die(mysql_error()); 
			          while ($row=mysql_fetch_array($result)){ ?>
				   <option value="<?php echo $row['stdev_id']; ?>&nbspName&nbsp<?php echo $row['stdev_location_name']; ?>"><?php echo $row['stdev_location_name']; ?></option>
				    <?php } ?>
				   </select>
		    </div>
	</div>
			
	  <div class="control-group"> 
		<div class="controls">
		<button  class="btn btn-primary" id="snd" data-placement="right" title="Click para Enviar"><i class="icon-share"> Asignar Ubicación</i></button>
         <script type="text/javascript">
	     $(document).ready(function(){
	     $('#snd').tooltip('show');
	     $('#snd').tooltip('hide');
	     });
	    </script>
		 		 
	  </div>
 </div>
</div>
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
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
	
		<?php
	    $device_query = mysql_query("select * from stdevice 
		LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		where NOT EXISTS 
	    (select * from location_details where stdevice.id = location_details.id)	   
	    and dev_status = 'Nuevo' and dev_name = 'NOTEBOOK' 
		OR NOT EXISTS 
	    (select * from location_details where stdevice.id = location_details.id)
		and dev_status = 'Nuevo' and dev_name = 'Notebook'
		OR NOT EXISTS 
	    (select * from location_details where stdevice.id = location_details.id)
		and dev_status = 'Nuevo' and dev_name = 'notebook'
		ORDER BY stdevice.id DESC") or die(mysql_error());
	    while ($row = mysql_fetch_array($device_query)) {
		$id = $row['id'];
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
<script>
		jQuery(document).ready(function(){
		jQuery("#send").submit(function(e){
			e.preventDefault();{												
			var formData = jQuery(this).serialize();
			$.ajax({
			type: "POST",
			url: "send.php",
			data: formData,
			success: function(html){
					
			$.jGrowl("Device Successfully Assign", { header: 'Device Assign' });
			var delay = 500;
			setTimeout(function(){ window.location = 'device_location.php'  }, delay);  
						
			}
												
		 });
			
	   }
	});
});
</script>		
			  		
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