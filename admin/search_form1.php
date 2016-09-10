
<!-----------------------------------------------Advance Search Form Modal --------------------------------------------------->
<div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Busqueda Avanzada</h3>
</div>

<div class="modal-body">
    <form class="form-horizontal" method="post" action="advance_search1.php">
	           
			  <div class="control-group">
		      <label class="control-label" for="inputEmail">Nombre de Equipo</label>
			  <div class="controls">
			  <select name="dev_name" class="" required/>
			  <option>&larr; Seleccionar Equipo &rarr;</option>
			  <?php
				$device_query = mysql_query("select * from device_name")or die(mysql_error());
				while($device_row = mysql_fetch_array($device_query)){			
				?>
			  <option><?php echo $device_row['dev_name']; ?></option>
			  <?php } ?>
			  </select>
		      </div>
	          </div>
			  			  			
			  <div class="control-group">
		      <label class="control-label" for="inputEmail">Numero de Inventario</label>
			  <div class="controls">
			  <select name="dev_inv"  class="" required/>
			  <option>&larr; Seleccionar Inventario de Equipo &rarr;</option>
			  <?php
				$serial_query = mysql_query("select * from stdevice")or die(mysql_error());
				while($row = mysql_fetch_array($serial_query)){			
				?>
			  <option><?php echo $row['dev_inv']; ?></option>
			  <?php } ?>
			  </select>
		      </div>
	          </div>
			  
			   							
                <div class="control-group">
                <div class="controls">
                <button type="submit" id="search1" data-placement="left" title="Click para Buscar" class="btn btn-primary"><i class="icon-search"></i> Buscar</button>
				 <script type="text/javascript">
		        $(document).ready(function(){
		        $('#search1').tooltip('show');
		        $('#search1').tooltip('hide');
		        });
		        </script> 
                </div>
                </div>
				
    </form>
</div>

<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Cerrar</button>
</div>
</div>