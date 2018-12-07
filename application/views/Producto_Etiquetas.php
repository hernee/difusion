<script language="javascript">
function printDiv(divName) {
     var printContents = document.getElementByClass(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
	 
}
</script>

<input type="button" onclick="printDiv('impri')" value="print a div!" />

<form action="<?php echo base_url().'index.php/producto/imprimirEtiquetas';?>" method="POST" >
<input type="submit"  value="Imprimir" />
<?php
$Hoy = new DateTime('NOW');
$fecha= $Hoy->format("Ymd");
$fechaLinda=$Hoy->format("d-m-Y");
foreach ($arrProveedores as $oProveedor)
{
	$proveedor=str_pad($oProveedor->proveedor_id,3,"0",STR_PAD_LEFT);
	?>
<h2><?php echo $oProveedor->nombreProveedor;?></h2>
	<table border="1">
		<tr>
			<th>Codigo</th>
			<th>Descripcion</th>
			<th>Cantidad</th>
			<!--<th>Proveedor</th>
			<th>Fecha</th>-->
			
		</tr>
		<?php
		
		foreach ($arrTamano as $oTamano)
		{
			$tamano=str_pad($oTamano->tamano_id,3,"0",STR_PAD_LEFT);
			?>
			<div id="div<?php echo $producto.$tamano.$proveedor."-".$fecha;?>">
			<tr>
				<td><img src="<?php echo base_url().'index.php/producto/generarCodigo/'.$producto.$tamano.$proveedor."-".$fecha; ?>" border="0" width="400px"> </td>
				<td><?php echo $productoNombre. " ".$oTamano->descripcion;?> <br><?php echo $oProveedor->nombreProveedor. " // ".$fechaLinda ;?></td>
				<td><input name="<?php echo $producto.$tamano.$proveedor.'-'.$fecha;?>" type="number" min="0" value="0"> </td>
				<?php
				/*
				<td><?php echo $oTamano->descripcion;?></td>
				<td><?php echo $oProveedor->nombreProveedor;?></td>
				<td><?php echo $fechaLinda;?></td>
				*/
				?>
			</tr>
			</div>
			<?php

		}
	?>
	</table>	
	<br>-----------------------------------------------------------------<br>
	<?php
}
?>

</form>