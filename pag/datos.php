<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>Aerolinea Rustics</title>
<link type="text/css" rel="stylesheet" href="../css/estilo.css" />
<!--<script type="text/javascript" src="../js/datos.js"></script>!-->
</head>
<body>
 <div id="general">
     <div id="encabezado">
	   <div id="formulario">
        <form action="datos.php" method="post">
		<p><label>Usuario:</label><input type="text" name="usuario"/>
		<label>Contrase&ntilde;a:</label><input type="text" name="pass"/></p>
		<p><input type="image" src="../img/boton_enviar.png" /></p>
        </form>
				<?php
					$admin = "marcos";
					$clave = "M4rcos2014";
					if(isset($_POST['usuario']) && isset($_POST['pass'])){
						if(($_POST['usuario'] == $admin) && ($_POST['pass'] == $clave)){
						session_start();
						$_SESSION['log'] = true;
						header('location:loginAdmin.php');
						}
					}
				?>
		</div>
    </div>
	
    <div id="encabezado_medio_vuelos">
	<img src="../img/logotipo_chico.png" id="logotipo" alt="logotipo aerolinea rutics" width="242" height="100"/>
	<img src="../img/chica_grande.png" class="aeromoza" alt="azafata" width="227" height="280"/>
	<ul>
	  <li><a href="pag/empresa.html">LA EMPRESA</a></li>
	  <li><a href="pag/reservas.html">RESERVAS </a></li>
	  <li><a href="pag/informacion.html">INFORMACION</a></li>
	  <li><a href="pag/corporativo.html">CORPORATIVO</a></li>
	</ul>
    </div>
	
   <div id="contenido">
     <div id="menu_lateral">
	    <div id="menu_contenedor_li">
		   <p>03</p>
		  <div id="contenedor_li">
		  <div class="blanco_columna_li">
		  </div>
		   <a href="vuelos.html">Selecciona tu vuelo</a>
			 <a href="verificacion.html">Verifica tu elecci&oacute;n</a>
			 <a href="datos.php">Completa tus datos</a>
			 <a href="confirmacion.html">Compra tu pasaje</a>
			 <a href="reserva.html">Reserva tu asiento</a>
		   </div>
		</div>
	 </div>
	 <div id="columna_contenido">
	   <div id="barra_titulo">
	   <img src="../img/cuadradito.gif" alt="cuadradito" width="16" height="16"/>
	   <h4>COMPLETA TUS DATOS</h4>
	  </div>
	   <div class="parrafos">Los datos de contacto son obligatorios y deben ser exactos,caso contrario 
	   	se cancelar&aacute;n las reservas.</div>
	    <p class="campos"><span class="asterisco">*</span>Campos obligatorios</p>
	    <div><img src="../img/chica_vuelos_chico.jpg" alt="imagen de recepcionista" width="137" height="179"/></div>
			<div id="formulario_datos">
			    <div class="pasajero">Pasajero:</div>
				<form action="validaDatos.php" method="post"> 
						
						           
            <p><label class="ltipo1"><span class="asterisco">*</span>Nombre:</label>
						<input type="text" name="nombre" id="nom"/></p>
            
            <p><label class="ltipo2"><span class="asterisco">*</span>Documento:</label>
						<input type="text" name="documento" id="doc"/></p>
						
						<p><label class="ltipo3"><span class="asterisco">*</span>Telefono Celular:</label>
						<input type="text" name="telefono" id="tel"/></p>
            
            <p><label class="ltipo4"><span class="asterisco">*</span>Email:</label>
           	<input type="text" name="email" id="correo"/></p>
              
           	<p><label class="ltipo5"><span class="asterisco">*</span>Fecha de nacimiento:</label>
						<input class="chico" type="text" name="dia" maxlength="2" id="d"/><label class="barra">/</label>
						<input class="chico" type="text" name="mes" maxlength="2" id="m"/><label class="barra">/</label>
						<input class="grande" type="text" name="anio" maxlength="4" id="a"/></p>
             
             <p><input type="submit" value="enviar" name="envia" onclick="return valida()"/><input type="reset" value="limpiar" name="resetea"/></p>         
                          <p><img src="../img/volver.png" alt="boton volver" id="boton_volver" width="99" height="37"/></p>
		                  <p id="boton_continuar"><img src="../img/continuar.png"  alt="boton continuar" width="99" height="37"/></p>
				  </form>
	     	</div>
	   </div>
	</div>
    <div id="pie">
     <img src="../img/logotipo_pie.png" alt="logotipo Aerolineas Rutics" width="251" height="76"/>
	 <div class="espacio_blanco_pie"></div>
	 <h2>(011)4667-8907 / 011)4667-8907 </h2>
	 <p>aerolineasRustics.com Sitio Oficial de Aerolineas. © 1996 - 2014 Aerolíneas Rustics S.A.
      Legales | Condiciones Generales de Transporte | Mapa del Sitio | Ud. est&aacute; en un SITIO SEGURO</p>
     </div>
</div>
</body>
</html>