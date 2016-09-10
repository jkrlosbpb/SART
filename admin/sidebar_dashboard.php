     <div class="span3" id="sidebar">
	             <?php include('count.php'); ?>
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active"> <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Inicio</a> </li>
						<li>
                            <a href="device_stocks.php"><i class="icon-chevron-right"></i><i class="icon-desktop"></i> Equipos / Stocks</a>
                        </li>
						<li class="">
                            <a href="comlab_a.php"><i class="icon-chevron-right"></i><i class="icon-building"></i> Ubicación del Equipo</a>
                        </li>
						<li class="">
                            <a href="location.php"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i> Agregar Ubicación</a>
                        </li>
						<li>
                            <a href="newdevice.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Nuevo Equipo</a>
                        </li>	
						<li>
                            <a href="damage.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Equipo Dañado</a>
                        </li>
						<li class="">
                            <a href="client_user.php"><i class="icon-chevron-right"></i><i class="icon-user"></i> Usuario Cliente</a>
                        </li>
						<li class="">
                            <a href="admin_user.php"><i class="icon-chevron-right"></i><i class="icon-user"></i> Usuario de Sistema</a>
                        </li>
						<li class="">
                            <a href="activity_log.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> Registro de Actividad</a>
                        </li>
						
					   <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-chevron-right"></i><i class="icon-search icon-large"></i>&nbsp;Busqueda Avanzada&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                      <a href="#myModal" data-toggle="modal" tabindex="1"><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;Dispositivos en la Locacion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#myModal1" data-toggle="modal" tabindex="-1" ><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;Todos los Dispositivos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                    </li>
                                </ul>
                            </li>
                    </ul>
					
				<?php include('search_form.php'); ?>
				<?php include('search_form1.php'); ?>										
    </div>