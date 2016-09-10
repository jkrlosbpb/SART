     <div class="span3" id="sidebar">
	              <div class="empty">
				  <img id="admin_avatar" class="img-polaroid" src="<?php echo $row['adminthumbnails']; ?>"></div>
	                 <?php include('count.php'); ?>
					 <?php include('count_damage.php'); ?>
					  <?php include('count_dump.php'); ?>
					 <?php include('count_remain_new_device.php'); ?>
<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                           <li class="active"> 
						   <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Inicio</a> 
						   </li>
						 
						 <!------/.* manage device sidebar*------->						
						 <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs"><i class="icon-chevron-right"></i><i class="icon-tablet icon-large"></i>&nbsp;Administrar Equipos
						    <div class="muted pull-right"><i class="caret"></i></div></a>					
						    <ul id="bs" class="collapse">						
                            <li class="">
                            <a href="device_stocks.php"><i class="icon-chevron-right"></i><i class="icon-desktop"></i> Equipos / Stocks</a>
                            </li>
                            <li class="">
                            <a href="dev_name.php"><i class="icon-chevron-right"></i><i class="icon-folder-open-alt"></i> Tipo de Equipo</a>
                            </li> 
						    <li>
                            <a href="newdevice.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Asignar&nbsp;<span class="label label-success">Nuevo</span>&nbsp;Equipo
							<?php if($not_read_new == '0'){
				            }else{ ?>
					        <span class="badge badge-info"><?php echo $not_read_new; ?></span>
				            <?php } ?>
							</a>
                            </li>						
						    <li>
                            <a href="damage.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Equipos Da&#241;ados
							<?php if($not_read1 == '0'){
				            }else{ ?>
					        <span class="badge badge-important"><?php echo $not_read1; ?></span>
				            <?php } ?>
							</a>
                            </li>
							<li>
                            <a href="dump_device.php"><i class="icon-chevron-right"></i><i class="icon-remove-sign"></i> Equipos Deshechados
							<?php if($not_read_dump == '0'){
				            }else{ ?>
					        <span class="badge badge-important"><?php echo $not_read_dump; ?></span>
				            <?php } ?>
							</a>
                            </li>						   							
						    </ul>
						</li>
						
                         <!------/.* manage location sidebar*------->	
					    <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs1"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i>&nbsp;Administrar Ubicaciones
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs1" class="collapse">						
                            <li class="">
                            <a href="device_location.php"><i class="icon-chevron-right"></i><i class="icon-map-marker"></i> Ubicacion Equipos</a>
                            </li>
						    <li class="">
                            <a href="location.php"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i> Agregar Ubicacion</a>
                            </li>
						    </ul>
						</li>
						
					  <!------/.* manage SART user sidebar*------->	
						<li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs2"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;Administrar Usuarios
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs2" class="collapse">						
                            <li class="">
                            <a href="client_user.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;Personal Técnico</a>
                            </li>
						    <li class="">
                            <a href="admin_user.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;Usuario de Sistema</a>
                            </li>
						    </ul>
						</li>
						
						<!------/.* System Log sidebar*------->	
						<li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs3"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;Registros de Sistema
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs3" class="collapse">						
                            <li class="">
                            <a href="activity_log.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> Registro de Actividades</a>
                            </li>
						    <li class="">
                            <a href="user_log.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> Registro de Usuarios</a>
                            </li>
						    </ul>
						</li>
						
					  <!------/.* notification sidebar*------->
					    <li class="">
				           <a href="notification.php"><i class="icon-chevron-right"></i><i class="icon-globe"></i>&nbsp;Notificaciones
				           <?php if($not_read == '0'){
				           }else{ ?>
					       <span class="badge badge-important"><?php echo $not_read; ?></span>
				           <?php } ?>
				           </a>
			            </li>
						
                         <li class="">
                           <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs4"><i class="icon-chevron-right"></i><i class="icon-search icon-large"></i>&nbsp;Busqueda Avanzada 
						   <div class="muted pull-right"><i class="caret"></i></div></a>
                           </a>
                           <ul id="bs4" class="collapse">
                           <li>
                           <a href="#myModal" data-toggle="modal" tabindex="1"><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;Equipo en la Ubicacion</a>
                           </li>
                          
                           <li>
                           <a href="#myModal1" data-toggle="modal" tabindex="-1" ><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;Todos los Equipos</a>
                           </li>
                           </ul>
                        </li>
                  </ul>									
				<?php include('search_form.php'); ?>
				<?php include('search_form1.php'); ?>										
    </div>