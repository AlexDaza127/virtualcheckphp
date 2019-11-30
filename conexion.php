<?php
/*$hostname='localhost';
$database='id10100989_virtualcheckdb';
$username='id10100989_virtualcheckdb';
$password='123321';*/

$hostname='localhost';
$database='virtualcheckdb';
$username='root';
$password='';

$conexion=new mysqli($hostname,$username,$password,$database);

if($conexion->connect_errno){
	echo "lo sientimos, el sitio web está experimentando problemas";
}

?>