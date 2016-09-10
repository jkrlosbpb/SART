<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('dashboard_slidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('add_empleado.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
					<div class="empty">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="icon-info-sign"></i>  <strong>Nota!:</strong> Seleccionar una casilla para eliminar Empleado?
                        </div>
                    </div>
					
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
							   <div class="muted pull-left"><i class="icon-reorder icon-building"></i> Lista de Empleados</div>                       
								
								<div id="" class="muted pull-right">
								<?php 
								$my_empleado = mysql_query("select * from empleado ")or die(mysql_error());
								$count_my_empleado = mysql_num_rows($my_empleado);?>
								Total Empleados: <span class="badge badge-info"><?php echo $count_my_empleado; ?></span>
						        </div>
								
                            </div>
														
                            <div class="block-content collapse in">
                                <div class="span12">
									<form action="delete_empleado.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
										<a data-placement="right" title="Click para Eliminar" data-toggle="modal" href="#delete_empleado" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Eliminar</i></a>
										<script type="text/javascript">
									   $(document).ready(function(){
									   $('#delete').tooltip('show');
									   $('#delete').tooltip('hide');
									   });
									  </script>
									  <?php include('modal_delete.php'); ?>
									  <thead>
										  <tr>
													<th></th>
													<th>Empleados</th>
													<th>Dependencia</th>
													<th></th>
										   </tr>
										</thead>
										<tbody>
										<?php
										$location_query = mysql_query("select * from empleado 
									LEFT JOIN stlocation ON empleado.stdev_id=stlocation.stdev_id")or die(mysql_error());
										while($location_row = mysql_fetch_array($location_query)){
										$id = $location_row['id_emp'];
										?>
											
										<tr>
											<td width="30">
											<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
											</td>
											<td><?php echo $location_row['nom_emp']; ?></td>
											<td><?php echo $location_row['stdev_location_name']; ?></td>
											<?php include('toolttip_edit_delete.php'); ?>																											
											<td width="125">
											<a rel="tooltip"  title="Editar Empleado" id="e<?php echo $id; ?>" href="edit_empleado.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i> Editar Empleado</a>
											</td>
                                                                    
										</tr>
										<?php } ?>
                               
                               
										</tbody>
									</table>
									</form>
                                </div>
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

</html>