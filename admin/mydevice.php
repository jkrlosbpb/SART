<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['stdev_id']; ?><!-----------------------------------get device location details------------------------------------>	
<body>
	<?php include('navbar.php') ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<?php include('device_location_slidebar.php'); ?>
			<div class="span9" id="content">
				<div class="row-fluid">
					<a href="device_location.php" class="btn btn-info"  id="return" data-placement="right" title="Click para Regresar" ><i class="icon-arrow-left icon-large"></i> Atrás</a>
					<script type="text/javascript">
						$(document).ready(function(){
							$('#return').tooltip('show');
							$('#return').tooltip('hide');
						});
					</script>

					<!-----------------------------------sc logo for print------------------------------------>	
					<h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>

					<?php $location_query = mysql_query("select * from stlocation	                     
						where stdev_id = '$get_id'")or die(mysql_error());
					$location_row = mysql_fetch_array($location_query);
					?>

					<!-------------------------------block ------------------------------>
					<div id="block_bg" class="block">
						<div class="navbar navbar-inner block-header">							
							<div class="muted pull-left"><i class="icon-building"></i>  <?php echo $location_row['stdev_location_name']; ?> </div>

							<div id="" class="muted pull-right">
								<?php 
								$my_device = mysql_query("select * from location_details    
									LEFT JOIN stdevice ON location_details.id = stdevice.id
									LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
									where NOT EXISTS 
									(select * from location_details where dev_status='Deshechado')
									and stdev_id = '$get_id' ")or die(mysql_error());
									$count_my_device = mysql_num_rows($my_device);?>
									Numero de Dispositivos(s): <span class="badge badge-info"><?php echo $count_my_device; ?></span>
								</div>								
							</div>
							
							<!-----------------------------------for Print display visible------------------------------------>								
							<h4 id="sc">Ubicación:<?php echo $location_row['stdev_location_name']; ?> Lista de Todos los Dispositivos
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
										<!-----------------------------------device categorized by their location details using nav pills------------------------------------>	
										<div class="pull-left">
											<ul class="nav nav-pills">
												<?php	
												$my_device = mysql_query("select * from location_details	                                                    
													LEFT JOIN stdevice ON location_details.id = stdevice.id 
													LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
													where NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and stdev_id = '$get_id' ")or die(mysql_error());
												$count = mysql_num_rows($my_device);
												?>
												<li class="active">
													<a href= 'mydevice.php<?php echo '?stdev_id='.$get_id; ?>')">Todos&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>

												</li>

												<?php	
												$my_keyboard = mysql_query("select * from location_details    
													LEFT JOIN stdevice ON location_details.id = stdevice.id
													LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
													where NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'TECLADO'  and stdev_id = '$get_id'")or die(mysql_error());
												$count = mysql_num_rows($my_keyboard);
												?>

												<li class="">			
													<a href= 'myKeyboard.php<?php echo '?stdev_id='.$get_id; ?>')">Keyboard&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
												</li>

												<?php	
												$my_mouse = mysql_query("select * from location_details    
													LEFT JOIN stdevice ON location_details.id = stdevice.id
													LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
													where NOT EXISTS 
													(select * from location_details where dev_status='Deshechado') 
													and dev_name = 'MOUSE' and stdev_id = '$get_id' 
												
													")or die(mysql_error());
												$count = mysql_num_rows($my_mouse);
												?>
												<li class="">			
													<a href= 'mymouse.php<?php echo '?stdev_id='.$get_id; ?>')">Mouse&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
												</li>				

												<?php	
												$my_monitor = mysql_query("select * from location_details    
													LEFT JOIN stdevice ON location_details.id = stdevice.id
													LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
													where NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'MONITOR'     and stdev_id = '$get_id' 
													")or die(mysql_error());
												$count = mysql_num_rows($my_monitor);
												?>

												<li class="">			
													<a href= 'mymonitor.php<?php echo '?stdev_id='.$get_id; ?>')">Monitor&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
												</li>

												<?php	
												$my_cpu = mysql_query("select * from location_details    
													LEFT JOIN stdevice ON location_details.id = stdevice.id
													LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
													where NOT EXISTS 
													(select * from location_details where dev_status='Deshechado') 
													and dev_name = 'DESKTOP'   and stdev_id = '$get_id' 
													")or die(mysql_error());
												$count = mysql_num_rows($my_cpu);
												?>
												<li class="">			
													<a href= 'mycpu.php<?php echo '?stdev_id='.$get_id; ?>')">CPU&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
												</li>

												<?php	
												$my_power_supply = mysql_query("select * from location_details    
													LEFT JOIN stdevice ON location_details.id = stdevice.id
													LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
													where NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'Power Supply'      and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'power supply'    and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'pwer supply'    and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'power spply'     and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'pwer suply'     and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'poer Suply'      and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'powersupply'    and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'power_supply'    and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'power.supply'   and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'pwer.spply'      and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = '(power supply)' and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = '(powersupply)'   and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = '(power_supply)' and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = '(power-supply)'  and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'POWER SUPPLY'   and stdev_id = '$get_id' ")or die(mysql_error());
												$count = mysql_num_rows($my_power_supply);
												?>			
												<li class="">			
													<a href= 'mypower_supply.php<?php echo '?stdev_id='.$get_id; ?>')">Power Supply&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
												</li>

												<?php	
												$my_vga = mysql_query("select * from location_details    
													LEFT JOIN stdevice ON location_details.id = stdevice.id
													LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
													where NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'Video Graphic Accelerator (VGA)'   and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'VGA'                         and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = '(VGA)'                          and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'Video.Graphic.Accelerator'   and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'Video-Graphic-Accelerator'      and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'Video_Graphic_Accelerator'   and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'VideoGraphicAccelerator'        and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'Video Graphic'               and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'Vedio Graphic Acelerator'       and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'VIDEO GRAPHIC ACCELATOR'     and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'VIDEO+GRAPHIC+ACCELATOR'        and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'vido grphic'                 and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'viDo gRphic Accelarator'        and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'video graphic accelarator'   and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'vedeo graphic'                  and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'video graphic accelerator'   and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'videographicaccelerator'        and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'vedio graphic accelerator'   and stdev_id = '$get_id'")or die(mysql_error());
												$count = mysql_num_rows($my_vga);
												?>
												<li class="">			
													<a href= 'myvga.php<?php echo '?stdev_id='.$get_id; ?>')">MONITOR&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
												</li>

												<?php	
												$my_vga = mysql_query("select * from location_details    
													LEFT JOIN stdevice ON location_details.id = stdevice.id
													LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
													where NOT EXISTS 
													(select * from location_details where dev_status='Deshechado') 
													and dev_name = 'NOTEBOOK'       and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado') 
													and dev_name = 'Notebook'    and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado') 
													and dev_name = 'power_cord'     and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = '(power cord)'  and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'power.cord'     and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = '(pwer crd)'    and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'powr coRd'      and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'ower cord'     and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'power cordss'   and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'pwer crd'      and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'POWER CORD'     and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'poer cd'       and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'powe cor'       and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'powercord'     and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'powe cor'       and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'power-cord'    and stdev_id = '$get_id'")or die(mysql_error());
												$count = mysql_num_rows($my_vga);
												?>				
												<li class="">			
													<a href= 'mynotebook.php<?php echo '?stdev_id='.$get_id; ?>')">Notebook(s)&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
												</li>

												<?php	
												$my_avr = mysql_query("select * from location_details    
													LEFT JOIN stdevice ON location_details.id = stdevice.id
													LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
													where NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'AVR'                           and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'A.V.R'                          and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'automatic Voltage Regulator'   and stdev_id = '$get_id'   
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'automatic Voltage Reactor'      and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'automatic_Voltage_Regulator'   and stdev_id = '$get_id'   
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'automatic-Voltage-Regulator'    and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'avrs'                          and stdev_id = '$get_id'   
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'automatic v.r'                  and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'automatic voltage R.'          and stdev_id = '$get_id'   
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'avregulator'                    and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'automatic Voltage Reactor'     and stdev_id = '$get_id'   
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'automatic-Voltage-Reactor'      and stdev_id = '$get_id' 
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'automaticVoltageReactor'       and stdev_id = '$get_id'   
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'automaticVoltageRegulator'      and stdev_id = '$get_id'
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'automtic Voltge Reactor'       and stdev_id = '$get_id'   
													OR NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and dev_name = 'automtic Voltge Regulator'      and stdev_id = '$get_id'
													")or die(mysql_error());
												$count = mysql_num_rows($my_avr);
												?>				
												<li class ="">			
													<a href= 'myavr.php<?php echo '?stdev_id='.$get_id; ?>')">AVR&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>					
												</li>

											</ul>
										</div>
									</div>
								</div>

								<div class="container-fluid">
									<div class="row-fluid"> 
										<div class="empty">
											<div class="pull-right">
												<?php
												$my_device = mysql_query("select * from location_details	                                                    
													LEFT JOIN stdevice ON location_details.id = stdevice.id 
													LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
													where NOT EXISTS 
													(select * from location_details where dev_status='Deshechado')
													and stdev_id = '$get_id'		
													order by date_deployment DESC")or die(mysql_error());
												while($row = mysql_fetch_array($my_device));
												$id = $row['id'];		                                               
												?>
												<a class="btn btn-info" id="print" data-placement="left" title="Click para Imprimir" href="print_list_inventory.php<?php echo '?stdev_id='.$get_id; ?>" class="btn btn-info"><i class="icon-print icon-large"></i> Imprimir Lista</a>		      
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

								<div class="block-content collapse in">
									<div class="span12">
										<form action="" method="post"><!-----------------------------------table form------------------------------------>	
											<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
												<thead>		
													<tr>			        
														<th class="empty"></th>
														<th>Equipo </th>
														<th>Inv </th>
														<th>Marca  </th>
														<th>Modelo  </th>
														<th>Serie  </th>
														<th>Descripcion </th>
														<th>Fecha Asignación </th>	
														<th>Estado </th> 				
														
														<th class="empty">Admon Equipo</th>
													</tr>
												</thead>
												<tbody>
													<!-----------------------------------table Content------------------------------------>									
													<?php
													
													$my_device = mysql_query("select * from location_details	                                                    
														LEFT JOIN stdevice ON location_details.id = stdevice.id 
														LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
														where NOT EXISTS 
														(select * from location_details where dev_status='Deshechado')
														and stdev_id = '$get_id'		
														order by date_deployment DESC")or die(mysql_error());
													while($row = mysql_fetch_array($my_device)){
														$id = $row['id'];		                                               
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
															<td><?php echo $row['dev_inv']; ?></td>
															<td><?php echo $row['dev_brand']; ?></td>
															<td><?php echo $row['dev_model']; ?></td>
															<td><?php echo $row['dev_serial']; ?></td>
															<td><?php echo $row['dev_desc']; ?></td>
															<td><?php 
															$fecha = $row['date_deployment']; 
															$fecha =date("d-m-Y",strtotime($fecha)); 
															echo $fecha; 
															?></td>

															<td><?php
																$my_device1 = mysql_query("select * from stdevice ")or die(mysql_error());
																$dev=mysql_fetch_assoc($my_device1);
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
																<td width="185" class="empty"><a rel="tooltip"  title="Transferir Equipo" id="e<?php echo $id; ?>" href="transfer.php<?php echo '?id='.$id; ?>&<?php echo 'stdev_id='.$get_id; ?>" class="btn btn-warning"><i class="icon-move"></i> Transferir </a>
																	<a rel="tooltip"  title="Actualizar Estado" id="t<?php echo $id; ?>" href="devl_update_status.php<?php echo '?id='.$id; ?>&<?php echo 'stdev_id='.$get_id; ?>" class="btn btn-success"><i class="icon-upload-alt"></i> Estado</a></td>		
																</tr>

																<?php } ?>   
															</tbody>
														</table>
													</form>	
 <!---------------------------------------------------- /block --------------------------------------------->
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