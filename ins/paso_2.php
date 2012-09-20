<div align=center>
<table width="700" cellspacing=10>
	<tr>
		<td width=100><img src="../img/practico_login.png" border=0 ALT="Logo Practico" width="116" height="80"></td>
		<td valign=top><font size=2 color=black><br><b>
			[Configuraci&oacute;n General]</b><br><br>
			Indique la configuraci&oacute;n deseada para el almacenamiento de aplicaciones e informaci&oacute;n de usuario generada por Pr&aacute;ctico, as&iacute; como otras opciones importantes de la herramienta.  Esta ventana ser&aacute; presentada s&oacute;lo una vez as&iacute; que aseg&uacute;rese de diligenciar y confirmar toda la informaci&oacute;n requerida:
		</font></td>
	</tr>
</table>
<form name="continuar" action="" method="POST" style="display:inline; height: 0px; border-width: 0px; width: 0px; padding: 0; margin: 0;">
<hr>
<font size=2 color=black><br><b>
	[Motor de Base de Datos]</b>
</font>
<table cellspacing=10 width="700">
	<tr>
		<td valign=top align=right>
			<font size=2 color=black>
				Tipo de motor
			</font>
		</td>
		<td valign=top width="380">
			<select name="MotorBD" class="Combos" >
				<option value="mysql">MySQL - MariaDB (3.x/4.x/5.x)</option>
				<option value="sqlite2">SQLite2</option>
				<option value="sqlite3">SQLite3</option>
				<option value="sqlsrv">FreeTDS/Microsoft SQL Server: Win32 [max version 2008]</option>
				<option value="mssql">FreeTDS/Microsoft SQL Server: Win32&Linux, [max version 2000]</option>
				<option value="pg">PostgreSQL</option>
				<option value="ibm">IBM (DB2)</option>
				<option value="dblib">DBLIB</option>
				<option value="odbc">Microsoft Access (ODBC v3: IBM DB2, unixODBC, Win32 ODBC)</option>
				<option value="oracle">ORACLE (OCI Oracle Call Interface)</option>
				<option value="ifmx">Informix (IBM Informix Dynamic Server)</option>
				<option value="fbd">Firebird (Firebird/Interbase 6)</option>
			</select>
			<a href="#" title="MySQL y MariaDB" name="Son los motores oficiales.  Sobre ellos se hace el desarrollo y pruebas de la herramienta y aunque gracias a PDO usted podr&aacute; utilizar la herramienta en otros motores es probable que deba hacer ajustes a operaciones espec&iacute;ficas de &eacute;stos."><img src="img/icn_10.gif" border=0 align=absmiddle></a>
		</td>
	</tr>
	<tr>
		<td valign=top align=right>
			<font size=2 color=black>
				Host/Servidor
			</font>
		</td>
		<td valign=top>
			<font size=2 color=black>
			<input type="text" name="Servidor" size="20" class="CampoTexto" class="keyboardInput">
			Puerto: <input type="text" name="PuertoBD" size="4" class="CampoTexto" class="keyboardInput"> (si no es el predeterminado)
			</font>
		</td>
	</tr>
	<tr>
		<td valign=top align=right>
			<font size=2 color=black>
				Base de datos
			</font>
		</td>
		<td valign=top>
			<font size=2 color=black>
			<input type="text" name="BaseDatos" size="20" class="CampoTexto" class="keyboardInput"> (debe existir)
			</font>
		</td>
	</tr>
	<tr>
		<td valign=top align=right>
			<font size=2 color=black>
				Usuario
			</font>
		</td>
		<td valign=top>
			<input type="text" name="UsuarioBD" size="20" class="CampoTexto" class="keyboardInput">
		</td>
	</tr>
	<tr>
		<td valign=top align=right>
			<font size=2 color=black>
				Contrase&ntilde;a
			</font>
		</td>
		<td valign=top>
			<input type="password" name="PasswordBD" size="20" class="CampoTexto" class="keyboardInput">
		</td>
	</tr>
	<tr>
		<td valign=top align=right>
			<font size=2 color=black>
				Prefijo tablas internas de Pr&aacute;ctico
			</font>
		</td>
		<td valign=top>
			<input type="text" name="TablasCore" size="7" value="Core_" class="CampoTexto" class="keyboardInput">
			<a href="#" title="Se recomienda NO vac&iacute;o" name=""><img src="img/icn_12.gif" border=0 align=absmiddle></a>
		</td>
	</tr>
	<tr>
		<td valign=top align=right>
			<font size=2 color=black>
				Prefijo tablas de Aplicaci&oacute;n
			</font>
		</td>
		<td valign=top>
			<input type="text" name="TablasApp" size="7" value="App_" class="CampoTexto" class="keyboardInput">
			<a href="#" title="Importante" name="El prefijo utilizado para las tablas de aplicaci&oacute;n puede ser utilizado para separar diferentes instalaciones de Pr&aacute;ctico sobre una misma base de datos o tambi&eacute;n puede ser dejado vac&iacute;o para enlazar/integrar a Pr&aacute;ctico con otras aplicaciones pre-existentes."><img src="img/icn_10.gif" border=0 align=absmiddle></a>
		</td>
	</tr>
	<tr>
		<td valign=top align=right>
			<font size=2 color=black>
				Llave de paso
			</font>
		</td>
		<td valign=top>
			<font size=2 color=black>
				<input type="text" name="LlaveDePaso" size="12" value="<?php echo TextoAleatorio(10); ?>" class="CampoTexto" class="keyboardInput">
				(valor para firmar cuentas de usuario)
			</font>
		</td>
	</tr>
	<tr>
		<td valign=top colspan=2>
			<font size=1 color=darkblue>
				<u>IMPORTANTE 1</u>: La base de datos debe existir previamente para que Pr&aacute;ctico pueda conectarse a ella y generar las estructuras requeridas.  Consulte con su proveedor de hosting o administrador de sistemas c&oacute;mo crear una base de datos con privilegios suficientes para trabajar con Pr&aacute;ctico.<br><br>
				<u>IMPORTANTE 2</u>: El instalador eliminar&aacute; todas las tablas existentes sobre la base de datos indicada y que coincidan con los nombres de tablas que utilizar&aacute; Pr&aacute;ctico.  Si usted considera que puede tener informaci&oacute;n importante en ellas se recomienda realizar una copia de seguridad antes de continuar.  Si desea compartir una misma base de datos entre diferentes instalaciones de Pr&aacute;ctico puede cambiar los prefijos de tabla utilizados por cada una.
			</font>
		</td>
	</tr>
</table>
<!--
<hr>
<font size=2 color=black><br><b>
	[Autenticaci&oacute;n de credenciales personalizada]</b>
</font>
-->

<hr>
<font size=2 color=black><br><b>
	[Par&aacute;metros para su primera aplicaci&oacute;n]</b>
</font>
<table cellspacing=10 width="700">
	<tr>
		<td valign=top align=right>
			<font size=2 color=black>
				Nombre corto de su Organizaci&oacute;n o empresa
			</font>
		</td>
		<td valign=top>
			<font size=2 color=black>
			<input type="text" name="NombreCortoEmpresa" size="50" class="CampoTexto" value="Nombre corto de su empresa">
			<a href="#" title="Nombre a desplegar en la parte superior" name="Este texto ser&aacute; utilizado en informes y espacios de la aplicaci&oacute;n que requieran un nombre corto para identificar su organizaci&oacute;n."><img src="img/icn_10.gif" border=0 align=absmiddle></a>
			</font>
		</td>
	</tr>
	<tr>
		<td valign=top align=right>
			<font size=2 color=black>
				Nombre de su aplicaci&oacute;n
			</font>
		</td>
		<td valign=top>
			<font size=2 color=black>
			<input type="text" name="NombreAplicacion" size="50" class="CampoTexto" value="Nombre Aplicacion">
			<a href="#" title="Nombre descriptivo" name="El nombre especificado aparecer&aacute; siempre en la parte superior de su aplicaci&oacute;n."><img src="img/icn_10.gif" border=0 align=absmiddle></a>
			</font>
		</td>
	</tr>
	<tr>
		<td valign=top align=right>
			<font size=2 color=black>
				Versi&oacute;n inicial de su aplicaci&oacute;n
			</font>
		</td>
		<td valign=top>
			<font size=2 color=black>
			<input type="text" name="VersionAplicacion" size="10" class="CampoTexto" value="1.0">
			</font>
		</td>
	</tr>
	<tr>
		<td valign=top colspan=2>
			<font size=1 color=darkblue>
				<u>IMPORTANTE</u>: Otros parametros como nombre largo y corto de su empresa, fecha de lanzamiento, textos de licencia y creditos podran ser modificados posteriormente mediante las opciones disponibles para el usuario administrador.<br><br>
			</font>
		</td>
	</tr>
</table>

<hr>
<font size=2 color=black><br><b>
	[Configuraci&oacute;n de opciones varias]</b>
</font>
<table cellspacing=10 width="700">
	<tr>
		<td valign=top align=right>
			<font size=2 color=black>
				Zona horaria
			</font>
		</td>
		<td valign=top width="380">
			<select  name="ZonaHoraria" class="Combos">
				<?php
					$archivo_origen="../inc/zonas_horarias.txt";
					$archivo = fopen($archivo_origen, "r");
					//descarta comentario inicial de archivo
					if ($archivo)
						{
							$linea = fgets($archivo, 1024);
							while (!feof($archivo))
								{
									$linea = fgets($archivo, 1024);
									if (trim($linea)=="America/Bogota")
										echo "<option value='".trim($linea)."' selected>".trim($linea)."</option>";
									else
										echo "<option value='".trim($linea)."'>".trim($linea)."</option>";
								}
							fclose($archivo);
						}
				?>
			</select>
		</td>
	</tr>
	<tr>
		<td valign=top align=right>
			<font size=2 color=black>
				N&uacute;mero de caracteres para captcha?
			</font>
		</td>
		<td valign=top width="380">
			<select name="CaracteresCaptcha" class="Combos" >
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4" selected>4</option>
				<option value="5">5</option>
				<option value="6">6</option>
			</select>
			<a href="#" title="Longitud de la palabra" name="Indica el n&uacute;mero de s&iacute;mbolos utilizados en la palabra de seguridad que deben ingresar los usuarios para cada acceso al sistema."><img src="img/icn_10.gif" border=0></a>
		</td>
	</tr>
	<tr>
		<td valign=top align=right>
			<font size=2 color=black>
				Activar modo de depuraci&oacute;n?
			</font>
		</td>
		<td valign=top width="380">
			<select name="ModoDepuracion" class="Combos" >
				<option value="1">Encendido</option>
				<option value="0" selected>Apagado</option>
			</select>
			<a href="#" title="Presentar errores y advertencias" name="Para sitios en producci&oacute;n esta opci&oacute;n debe estar apagada.  Cuando se enciende ense&ntilde;a durante la ejecuci&oacute;n de la aplicaci&oacute;n todos los errores y mensajes que puedan ser generados por el preprocesador de hipertexto - PHP"><img src="img/icn_10.gif" border=0></a>
		</td>
	</tr>
</table>















<br><br>
</div>

<?php
	abrir_barra_estado();

	$anterior=$paso-1;
	$siguiente=$paso+1;

	if ($hay_error)
		{
			echo '<input type="Hidden" name="paso" value="1">';
			echo '<input type="Button" class="BotonesEstado" value=" Probar de nuevo " onclick="document.continuar.submit();">';
		}
	else
		{
			echo '<input type="Hidden" name="paso" value="'.$siguiente.'">';
			echo '<input type="Button" class="BotonesEstadoCuidado" value=" Continuar >>> " onclick="document.continuar.submit();">';
		}
	echo '</form>';
	echo '<form name="regresar" action="" method="POST" style="display:inline; height: 0px; border-width: 0px; width: 0px; padding: 0; margin: 0;">
			<input type="Hidden" name="paso" value="'.$anterior.'">
			<input type="Button" class="BotonesEstado" value=" <<< Anterior " onclick="document.regresar.submit();">
		  </form>';
	cerrar_barra_estado();
?>
