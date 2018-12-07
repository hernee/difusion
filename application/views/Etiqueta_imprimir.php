<table>
	<tr>
		<th>Codigo</th>
		<th>Descripcion</th>

	</tr>
	<?php
	$Hoy = new DateTime('NOW');
	$fecha= $Hoy->format("Ymd");
	$fechaLinda=$Hoy->format("d-m-Y");
	foreach ($arrEtiquetas as $oEtiqueta)
	{
		//var_dump($oEtiqueta);
		$producto=str_pad($oEtiqueta->producto_id,3,"0",STR_PAD_LEFT);
		$tamano=str_pad($oEtiqueta->tamano_id,3,"0",STR_PAD_LEFT);
		$proveedor=str_pad($oEtiqueta->proveedor_id,3,"0",STR_PAD_LEFT);

		for ($i=0; $i < $oEtiqueta->cantidad; $i++)
		{ 
			?>
			<tr>
				<td>
				<img src="<?php echo base_url().'index.php/producto/generarCodigo/'.$producto.$tamano.$proveedor."-".$fecha; ?>" border="0" width="400px"> </td>
					<td>
					<?php echo $oEtiqueta->producto. " ".$oEtiqueta->tamano;?> <br><?php echo $oEtiqueta->proveedor. " // ".$fechaLinda ;?>
					</td>

				</tr>
				<?php
			}


		}
		?>
	</table>



