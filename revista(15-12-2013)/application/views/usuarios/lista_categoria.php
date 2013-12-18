<h1>Registro de Categoria</h1>

<p>
	<a href ="<?php echo base_url()?>usuarios/nueva_categoria" > Crear un nueva categoria </a>

</p>
<?php if($this->session->flashdata('ControllerMessage') != '')
		{
?>			
		<p style="color: red;" ><?php echo $this->session->flashdata('ControllerMessage');?> </p>
<?php		
		}
?>
<table>
	<tr style ="background-color:#000000; color:#ffffff">
		<th>Nombre</th>
		<th>Descripcion</th>
		<th>Acciones</th>
	</tr>
	<?php
		foreach ($datos as $dato)
		{
			?>
			<tr style ="background-color:#f0f0f0;">
				<td> <?php echo $dato->nombre ?> </td>
				<td> <?php echo $dato->descripcion ?> </td>
				<td>
					<a href="">Editar</a> || <a href="">Eliminar</a>
				</td>
			</tr>
			<?php
		}
	?>

</table>

<input type="button" name="Atras" value="Atrás" onClick="location.href='usuarios/saludo'" />