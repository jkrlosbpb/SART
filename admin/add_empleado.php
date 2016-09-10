   <div class="row-fluid">
    <!-- block -->
    <div class="block">
      <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"> <i class="icon-plus-sign icon-large"> Agregar Empleado</i></div>
      </div>
      <div class="block-content collapse in">
        <div class="span12">
          <form method="post">


            <div class="control-group">
              <div class="controls">
                <input name="nom_emp" class="input focused" id="focusedInput" type="text" placeholder = "Nombre de Empleado" required>
              </div>
            </div>

              <div class="control-group">       
              <div class="controls">
               <label class="control-label" for="inputEmail">Seleccione Ubicación</label>
               <select name="stdev_id" class="select"required/>
               <option></option>
               <?php $result =  mysql_query("select * from stlocation")or die(mysql_error()); 
               while ($row=mysql_fetch_array($result)){ ?>
                 <option value="<?php echo $row['stdev_id']; ?>&nbspName&nbsp<?php echo $row['stdev_location_name']; ?>"><?php echo $row['stdev_location_name'];?></option>
                 <?php } ?>
               </select>
             </div>
           </div>



           <div class="control-group">
             <div class="controls">
              <button name="save" class="btn btn-info" id="save" data-placement="right" title="Click Para Agregar"><i class="icon-plus-sign icon-large"> Agregar</i></button>
              <script type="text/javascript">
               $(document).ready(function(){
                 $('#save').tooltip('show');
                 $('#save').tooltip('hide');
               });
             </script>
           </div>                                          
         </div>

       </form>
     </div>
   </div>
 </div>
 <!-- /block -->
</div>

<?php
if (isset($_POST['save'])){
    $stdev_id = $_POST['stdev_id'];
    $nom_emp = $_POST['nom_emp'];


  $query = mysql_query("select * from empleado where nom_emp  =  '$nom_emp' ")or die(mysql_error());
  $count = mysql_num_rows($query);

  if ($count > 0){ ?>
    <script>
      alert('Nombre de Empleado ya Existe!!');
    </script>
    <?php
  }else{
    mysql_query("insert into empleado (nom_emp, stdev_id) values('$nom_emp','$stdev_id')")or die(mysql_error());

    mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Añadir Empleado $nom_emp')")or die(mysql_error());
    ?>
    <script>
      $.jGrowl("Empleado Agregado Satisfactoriamente", { header: 'Agregar Empleado' });
      window.location = "empleados.php";
    </script>
    <?php
  }
}
?>