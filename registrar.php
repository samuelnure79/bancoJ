<?php
if (isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['edad'])){
	$mysql = mysql_connect('localhost','root','toor') or die(mysql_error());
	mysql_select_db('chilate', $mysql);

	$nombres = mysql_real_escape_string($_POST['nombres']);
	$apellidos = mysql_real_escape_string($_POST['apellidos']);
	$edad = mysql_real_escape_string($_POST['edad']);

	mysql_query("insert into PERSONA(NOMBRES, APELLIDOS, EDAD) values('".$nombres."','".$apellidos."','".$edad."');", $mysql);
	echo 'Datos ingresados exitosamente';	
}else{
	echo 'No se recibieron los datos';
}