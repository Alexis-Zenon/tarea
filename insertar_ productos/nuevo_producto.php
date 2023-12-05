<?php

function Conexion($I,$N,$C,$P){
	$servidor='localhost';
	$usuario='root';
	$contra='';
	$BD='papeleria';

	$mysqli=new mysqli($servidor, $usuario, $contra,$BD);
	$mysqli -> set_charset("utf8");
	if (!$mysqli) {
		die('<strong>No puede conectarse al servidor:</strong>'.mysql_error());
	}else{
?>
		<script>
		</script>
<?php
	}
	$sql="INSERT INTO productos (ID,Nombre_Producto,Cantidad,Precio) VALUES ('".$I."','".$N."','".$C."','".$P."')";

	if (mysqli_query($mysqli,$sql)) {
?>
		<script>
			alert("Rejistro exitoso");
			window.location.href="../productos_nuevos.html";
		</script>
<?php

	}else{
		echo "Error: ".$sql."<br>".mysql_error($mysqli);
	}

	}
/*date_default_timezone_set('America/Mexico_City');
$fecha=date('Y-m-d h:i:s');*/
$var1=$_POST['id'];
$var2=$_POST['nombre'];
$var3=$_POST['cantidad'];
$var4=$_POST['precio'];
$id=intval($var1);
$cantidad=intval($var3);//combirtiendolo en numero enter
$precio=intval($var4);

Conexion($id,$var2,$cantidad,$precio);

 ?>