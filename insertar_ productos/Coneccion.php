<?php
$opc2=$_POST['opc'];






function actualizar1(){
	$N=$_POST['dato'];
	$id=$_POST['id'];
	$Id=intval($id);
	$servidor='localhost';
	$usuario='root';
	$contra='';
	$BD='papeleria';

	$mysqli = new mysqli($servidor, $usuario, $contra, $BD);
	$mysqli ->set_charset("utf8");
	if (!$mysqli){
		die('<strong>No pudo conectarse al servidor:</strong>'.mysql_error());
	}
	else{
?>
		<script>
		</script>
<?php
	}

	$nombre = "'".$N."'";

	$sql = "UPDATE productos SET Nombre_Producto = $nombre WHERE ID = $Id";
	
	if($mysqli->query($sql)){
?>
		<script>
			alert("Actualizado exitosamente");
			window.location.href="../insertar_prodoctos.html";
		</script>
<?php
	}
	else{
		echo "Error en la actualizacion";
	}
	
}





function actualizar2(){
	$C=$_POST['dato'];
	$cantidad=intval($C);
	$id=$_POST['id'];
	$Id=intval($id);
	$servidor='localhost';
	$usuario='root';
	$contra='';
	$BD='papeleria';

	$mysqli = new mysqli($servidor, $usuario, $contra, $BD);
	$mysqli ->set_charset("utf8");
	if (!$mysqli){
		die('<strong>No pudo conectarse al servidor:</strong>'.mysql_error());
	}
	else{
?>
		<script>

		</script>
<?php
	}

	$sql = "UPDATE productos SET Cantidad = $cantidad WHERE ID = $Id";
	
	if($mysqli->query($sql)){
?>
		<script>
			alert("Actualizado exitosamente");
			window.location.href="../insertar_prodoctos.html";
		</script>
<?php
	}
	else{
		echo "Error en la actualizacion";
	}
	
}






function actualizar3(){
	$P=$_POST['dato'];
	$precio=intval($P);
	$id=$_POST['id'];
	$Id=intval($id);
	$servidor='localhost';
	$usuario='root';
	$contra='';
	$BD='papeleria';

	$mysqli = new mysqli($servidor, $usuario, $contra, $BD);
	$mysqli ->set_charset("utf8");
	if (!$mysqli){
		die('<strong>No pudo conectarse al servidor:</strong>'.mysql_error());
	}
	else{
?>
		<script>
			
		</script>
<?php
	}

	$sql = "UPDATE productos SET Precio = $precio WHERE ID = $Id";
	
	if($mysqli->query($sql)){
?>
		<script>
			alert("Actualizado exitosamente");
			window.location.href="../insertar_prodoctos.html";
		</script>
<?php
	}
	else{
		echo "Error en la actualizacion";
	}
	
}



function Eliminar(){
	$id=$_POST['id'];
	$Id=intval($id);
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

	$sql="DELETE FROM productos WHERE ID = $Id";

	if (mysqli_query($mysqli,$sql)) {
?>
		<script>
			alert("Eliminado existosamente");
			window.location.href="../insertar_prodoctos.html";
		</script>
<?php

	}else{
		echo "Error: ".$sql."<br>".mysql_error($mysqli);
	}
}


if ($opc2 == 'nombre') {
	actualizar1();
} else if ($opc2 == 'cantidad') {
	actualizar2();
}else if ($opc2 == 'precio') {
	actualizar3();
}else if ($opc2 == 'eliminar') {
	Eliminar();
}

	

?>