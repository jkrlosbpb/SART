<!-- Modal -->
<div id="myModal3" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h3 id="myModalLabel">Cambiar Imagen</h3>
	</div>
		<div class="modal-body">
					<form method="post" class="form-horizontal" action="admin_pic.php" enctype="multipart/form-data">							
								<div class="control-group">
								<label class="control-label" for="inputPassword">Examinar...</label>
								<div class="controls">
									<input name="image" class="input-file uniform_on" id="fileInput" type="file" required>
								</div>
								</div>
										
					
		</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Cerrar</button>
						<button class="btn btn-info" name="change"><i class="icon-save icon-large"></i> Guardar</button>
					</div>
					</form>
</div>
<!-- end  Modal -->