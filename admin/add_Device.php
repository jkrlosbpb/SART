<?php include('header.php'); ?>
<?php include('session.php'); ?>

<body>
	<?php include('navbar.php'); ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<?php include('Device_sidebar.php'); ?>

			<div class="span9" id="content">
				<div class="row-fluid">

					<!-- block -->
					<div class="block">
						<div class="navbar navbar-inner block-header">
							<div class="muted pull-left">Agregar Dispositivo</div>
							<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="device_stocks.php"><i class="icon-arrow-left icon-large"></i> Atrás</a></div>
							<script type="text/javascript">
								$(document).ready(function(){
									$('#return').tooltip('show');
									$('#return').tooltip('hide');
								});
							</script>                          
						</div>

						<div class="block-content collapse in">	
							<div class="alert alert-success"><i class="icon-info-sign"></i> Rellene todos los campos requeridos</div>						
							<form class="form-horizontal" method="post">											
								
								<div class="control-group">
									<label class="control-label" for="inputEmail">Tipo Dispositivo</label>
									<div class="controls">
										<select name="dev_id" class="chzn-select" required/>
										<option></option>
										<?php $device_name=mysql_query("select * from device_name")or die(mysql_error()); 
										while ($row=mysql_fetch_array($device_name)){ 												
											?>
											<option value="<?php echo $row['dev_id']; ?>&nbspName&nbsp<?php echo $row['dev_name']; ?>"><?php echo $row['dev_name']; ?></option>
											<?php } ?>
										</select>
									</div>
								</div>



								<div class="control-group">
									<label class="control-label" for="inputPassword">No. Inventario</label>
									<div class="controls">
										<input type="text" class="span4" name="dev_inv" id="inputPassword" placeholder="Numero de Inventario" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword">Marca</label>
									<div class="controls">
										<input type="text" class="span4" name="dev_brand" id="inputPassword" placeholder="Marca Dispositivo" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword">Modelo</label>
									<div class="controls">
										<input type="text" class="span4" name="dev_model" id="inputPassword" placeholder="Modelo" required>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="inputPassword">S/N</label>
									<div class="controls">
										<input type="text" class="span4" name="dev_serial" id="inputPassword" placeholder="Número de Serie" required>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="inputPassword">Codigo de Garantia</label>
									<div class="controls">
										<input type="text" class="span4" name="cod_garantia" id="inputPassword" placeholder="Codigo de Garantia" required>
									</div>
								</div>


								<div class="control-group"> <!-- Date input -->
									<label class="control-label" for="fecha">Fecha de Compra</label>
									<div class="controls">
									<input type="date" name="fecha">
									</div>
								</div>


								<div id="hide">
									<div class="control-group">
										<label class="control-label" for="inputPassword"  placeholder="Estado del Dispositivo" >Estado</label>
										<div class="controls">
											<select name="dev_status"  required>										
												<option>Nuevo</option>											
											</select>								
										</div>
									</div>

								</div>

								<div class="control-group">
									<label class="control-label" for="inputPassword">Descripción</label>
									<div class="controls">
										<textarea name="dev_desc" id="ckeditor_full"></textarea>
									</div>
								</div>

								<div class="control-group">
									<div class="controls">
										<button name="save" id="save" name="singlebutton" data-placement="right" title="
										Haga clic aquí para guardar los nuevos datos." class="btn btn-primary"><i class="icon-save"></i> Guardar</button>				
									</div>
								</div>
								<script type="text/javascript">
									$(document).ready(function(){
										$('#save').tooltip('show');
										$('#save').tooltip('hide');
									});
								</script>
							</form>
							<?php
							if (isset($_POST['save'])){
								$dev_id = $_POST['dev_id'];
								$dev_desc = $_POST['dev_desc'];
								$dev_inv = $_POST['dev_inv'];
								$dev_serial = $_POST['dev_serial'];
								$dev_brand = $_POST['dev_brand'];
								$dev_model = $_POST['dev_model'];
								$dev_status = $_POST['dev_status'];
								$cod_garantia = $_POST['cod_garantia'];
								$fecha_compra = $_POST['fecha'];


								$query = mysql_query("select * from stdevice where dev_inv = '$dev_inv' ")or die(mysql_error());
								$count = mysql_num_rows($query);

								if ($count > 0){ ?>
									<script>
										alert('Device Code Already Exist');
										window.location = "device_stocks.php";
									</script>
									<?php
								}else{
									mysql_query("insert into stdevice (dev_id,dev_desc,dev_inv,dev_serial,dev_brand,dev_model,cod_garantia,fecha_compra,dev_status) values('$dev_id','$dev_desc','$dev_inv','$dev_serial','$dev_brand','$dev_model','$cod_garantia','$fecha_compra','$dev_status')")or die(mysql_error());
									mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Detalle de Dispositivo Agregado id $dev_id')")or die(mysql_error());											
									?>
									<script>
										window.location = "device_stocks.php";
										$.jGrowl("Dispositivo Agregado Satisfactoriamente", { header: 'Dispositivo Agregado' });
									</script>
									<?php
								}
							}
							?>

						</div>
					</div>
					<!-- /block -->
				</div>
			</div>
		</div>
		<?php include('footer.php'); ?>
	</div>
	<?php include('script.php'); ?>
</body>