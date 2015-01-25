<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>GreetHive</title>
		<script src="js/jquery-1.11.2.min.js"></script>
		<script src="js/jquery-ui/jquery-ui.min.js"></script>
		<script src="js/me.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="js/jquery-ui/jquery-ui.min.css">
		<link href='http://fonts.googleapis.com/css?family=Quando' rel='stylesheet' type='text/css'>
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		
		
		<link rel="shortcut icon" href="/favicon.png">
		<?php if(isset($_GET['s']) AND $_GET['s'] == 'ok' ){ ?>
			<script>
			
			$(document).ready(function(){
				$( "#succes" ).dialog({
					width:600,
					height:350,
					title: 'Gracias por tu interes',
					modal:true
				});
				$("#cls").click(function(){
					$("#succes").dialog('close');
				});
			})	
			</script>
		<?php } ?>
	</head>

	<body>
		<div class="land">
			
			<header>
			<div class="header-main">
				<div class="branding">
					<table>
					  <tr>
					    <td rowspan="2"><img src="img/logo.png" class="logo"></td>
					    <td height="100">
					    	<h1 class="title">GreetHive</h1>
					    	<span class="subtitle">La herramienta social privada para ti y tu comunidad</span>
					    </td>
					  </tr>
					</table>			
					
				</div>
				<div class="login">
						<table>
						<tr>
							<td><input name="mail" placeholder="Correo electrónico"></td>
						</tr>
						<tr>
							<td><input name="pass" placeholder="Contraseña"></td>
						</tr>
						<tr>
							<td>
								<button>Iniciar Sesión</button>
							</td>
						</tr>
					</table>
					</div>
			</div>
			
		</header>
		
		<div class="call">
			Una comunidad unida<br />
			solo puede traer <br/>
			buenas experiencias
		</div>
		<div class="sign">
			<form method="post" id="signup" action="process.php">
			<div class="row" style="margin: 0px;">
				<input name="nombre" id="nombre" placeholder="Nombre" type="text"   style="margin-right: 5px;" />
				<input name="apellido" id="apellido" placeholder="Apellido"  />
			</div>
			<div class="row">
				<input name="mail" id="mail" placeholder="Correo elctronico" />
			</div>
			<div class="row">
				<input id="cmail" placeholder="Confirmar correo elctronico"  />
			</div>
			<div class="row">
				<input type="password" name="pass" id="pass" placeholder="Contraseña" style="margin-right: 5px;" />
				<input type="password" id="cpass" placeholder="Confirmar contraseña" />
			</div>
			<div class="row"><h1>Cumpleaños</h1></div>
			
			<div class="row">
				<span>Día</span>
						<select name="dia" id="dia" >
							<option value="">--</option>
							<?php
															 
								
								for( $i=1; $i<=31; $i++ ){
									echo "<option value='".$i."'>".$i."</option>";
								}
							
							?>
						</select>
						
				<span>Mes</span>
						<select name="mes"  id="mes">
							<option value="">----</option>
							<option value="enero">enero</option>
							<option value="febrero">febrero</option>
							<option value="marzo">marzo</option>
							<option value="abril">abril</option>
							<option value="mayo">mayo</option>
							<option value="junio">junio</option>
							<option value="julio">julio</option>
							<option value="agosto">agosto</option>
							<option value="septiembre">septiembre</option>
							<option value="octubre">octubre</option>
							<option value="noviembre">noviembre</option>
							<option value="diciembre">diciembre</option>
						</select>
				<span>Año</span>
						<select name="ano" id="ano">
							<option value="">----</option>
							<?php
															 
								$year = new DateTime();
								for( $i=1915; $i<=$year->format('Y'); $i++ ){
									echo "<option value='".$i."'>".$i."</option>";
								}
							
							?>
						</select>
			</div>
			
			<div class="row" style="margin: 10px;">
				<button onclick="validation();">Registrate</button>
			</div>
			</form>
		</div>
		</div>
		
		<div class="content">
			<div class="texto">
				<h1>Una herramienta social para comunidades</h1>

				Buscamos mejorar la comunicacion entre los tres principales integrantes de condominios 
				que son Los dueños-inquilinos, el administrador del condominio y la conserjeria. Queremos que
				 tu comunidad sea más unida y segura.
			</div>
			<div class="texto">
				<h1>Dueños e inquilinos:</h1>
				<ul>
					<li>Realiza pagos de condominio</li>
					<li>Consigue ese personal de confianza que necesitas</li>
					<li>Riega la voz de forma rapida ante cualquier emergencia</li>
					<li>Enterate al momento que ya llego esa carta que esperabas</li>
					<li>Encuentra un nuevo dueño a ese mueble que quieres cambiar</li>
					<li>Nunca más un invitado se quedara esperando, anotalo con anticipación</li>
				</ul>
			</div>
			<div class="texto">
				<h1>Administradores:</h1>
				<ul>
					<li>Maneje todas tus comunidades desde la nube, donde quiera que estes</li>
					<li>Mantenga una base de datos actualizada de tus inquilinos</li>
					<li>Reciba pagos de manera facil y rapida></li>
					<li>Envie reportes personalizados y automaticos</li>
					<li>Mantenga un relación mas directa, rapida y eficaz con sus inquilinos</li>
					<li>Mejore el control y la gestión del personal de las comunidades</li>
				</ul>				
			</div>
		</div>	
		<footer>
			
		</footer>
<div id="succes" class="succes">
	<img src="img/succes.png" width="550" />
	<button id="cls">CERRAR</button>
</div>
	</body>
</html>
