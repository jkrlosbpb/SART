			
			<form id="login_form1" class="form-signin" method="post">
				<h3 class="form-signin-heading">
					<i class="icon-lock"></i> Iniciar Sesión
				</h3>
				<input type="text"      class="input-block-level"   id="username" name="username" placeholder="Usuario" required>
				<input type="password"  class="input-block-level"   id="password" name="password" placeholder="Contraseña" required>
				
				<button data-placement="right" title="Haga clic aquí para iniciar sesión" id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-large"></i> Ingresar</button>
				<script type="text/javascript">
				$(document).ready(function(){
				$('#signin').tooltip('show');
				$('#signin').tooltip('hide');
				});
				</script>	
			</form>
					
						<script>
						jQuery(document).ready(function(){
						jQuery("#login_form1").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "login.php",
									data: formData,
									success: function(html){
									if(html=='true_admin')
									{
									$.jGrowl("Cargando Archivo Porfavor Espere......", { sticky: true });
									$.jGrowl("Bienvenido a Sistema de Administración de Recursos Tecnólogicos(SART)", { header: 'Acceso Permitido' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'admin/dashboard.php'  }, delay);  
									}else if (html == 'true'){
										$.jGrowl("Bienvenido a Sistema de Administración de Recursos Tecnológicos(SART)", { header: 'Acceso Permitido' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'technical Staff/dashboard_client.php'  }, delay);  
									}else
									{
									$.jGrowl("Por favor verifique su nombre de usuario y contraseña!", { header: 'Error de inicio de sesion' });
									}
									}
								});
								return false;
							});
						});
						</script>
			