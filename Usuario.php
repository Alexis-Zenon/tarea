<?php 
function Conexion(){
	$servidor='localhost';
	$usuario='root';
	$contra='';
	$BD='papeleria';

	$mysqli=new mysqli($servidor, $usuario, $contra,$BD);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu productos</title>
	<link rel="stylesheet" type="text/css" href="Usuario/StileUsuario.css">
	<link rel="icon" type="imag/jpg" href="insertar_ productos/imagen/lapizito.jpg">
</head>
<body>
<div class="tabla">
	<table >
		<h1>PRODUCTOS</h1>
		<tr>
			<td class="nombres">ID</td>
			<td class="nombres">Nombre</td>
			<td class="nombres">Cantidad</td>
			<td class="nombres">Precio</td>
		</tr>
		<?php 

		$mysqli -> set_charset("utf8");
		if (!$mysqli) {
		die('<strong>No puede conectarse al servidor:</strong>'.mysql_error());
		}else{}

		$sql="SELECT * FROM productos";
		$resul=mysqli_query($mysqli,$sql); 

		while ($mostrar=mysqli_fetch_array($resul)) {
		
	 	?>

		<tr>
			<td class="numero"><?php echo $mostrar["ID"]; ?></td>
			<td class="datos"><?php echo $mostrar["Nombre_Producto"]; ?></td>
			<td class="numero"><?php echo $mostrar["Cantidad"]; ?></td>
			<td class="numero"><?php echo $mostrar["Precio"]; ?></td>
		</tr>


		<?php 
		}
		?>
	</table>
</div>
	

</body>
</html>

<?php 
}
Conexion();
 ?>