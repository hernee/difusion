<table border="1">
	<tr>
		<th>Producto</th>
		<th>Tama�o</th>
		<th>Cantidad</th>
	</tr>
	<?php

	foreach ($arrStock as $oStock)
	{
		?>
		<tr>
			<td><?php echo $oStock->nombre;?></td>
			<td><?php echo $oStock->descripcion;?></td>
			<td><?php echo $oStock->cantidad;?></td>

		</tr>
		<?php

	}
?>
</table>



