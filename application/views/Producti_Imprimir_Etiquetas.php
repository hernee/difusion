<table>
<?php
for($j=0;$j<count($arrEtiquetas);$j++)
{
	

	for($i=0;$i<$arrEtiquetas[$j]['cantidad'];$i++)
	{
	?>
		<tr>
			<td><img src="<?php echo base_url().'index.php/producto/generarCodigo/'.$arrEtiquetas[$j]['codigo']; ?>" border="0" width="400px"> </td>
			<td> <?php echo $arrEtiquetas[$j]['descrp']; ?> </td>
		</tr>
	<?php
	}

}
		
?>

</table>