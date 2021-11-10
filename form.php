<?php

require("conexion.php"); 

$resultado = null;
$consulta = '';
// $_POST['consultar'] = '';
if( isset($_POST['consultar']) && $_POST['consultar']=="Consultar"){
	$resultado=null;

	/***PROCESAR LA BUSUQEDA*/
	$destino = $_POST['consulta'];
	$consulta = $cnn->prepare("SELECT nombreHotel, direccion, precio FROM Hoteles WHERE destino = ".$destino);
	$resultado=$consulta->execute();
}

?>


<form method="post" action="index.php" >

	<input type="text" id="consulta" name="consulta" value="" />
	<input type="submit" name="consultar" value="Consultar" />

</form>

<h5>Resultados: </h5>
<table>

	<tr>
		<!-- <td>Hotel</td> -->
		<td>Nombre Hotel</td>
		<td>Direccion</td>
		<td>Precio</td>
		<!-- <td>Destino</td> -->
	</tr>

	<?php

	//while($row=mysql_fetch_array($resultado)){
		if($resultado != null){
			while($resultado = $consulta->fetch()){
			?>
				<tr>
					<td><?php echo $resultado['nombreHotel']?></td>
					<td><?php echo $resultado['direccion']?></td>
					<td><?php echo $resultado['precio']?></td>
				</tr>
				<?php
			}
		}
	?>
</table>