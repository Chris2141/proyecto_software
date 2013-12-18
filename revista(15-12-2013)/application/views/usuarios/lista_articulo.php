<h1>Registro de Articulos</h1>

<p>
	<a href ="<?php echo base_url()?>usuarios/articulo_nuevo" > Crear un nuevo articulo </a>

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
		<th>Titulo</th>
		<th>Bajada</th>
		<th>Noticia</th>
		<th>Fecha</th>
		<th>Autor_fk</th>
		<th>Categoria</th>
	</tr>
	<?php
		foreach ($datos as $dato)
		{
			?>
			<tr style ="background-color:#f0f0f0;">
				<td> <?php echo $dato->titulo ?> </td>
				<td> <?php echo $dato->bajada ?> </td>
				<td> <?php echo $dato->noticia ?> </td>
				<td> <?php echo $dato->fecha ?> </td>
				<td> <?php echo $dato->autor_fk ?> </td>
				<td> <?php echo $dato->categoria_fk ?> </td>
				<td>
					<a href="">Editar</a> || <a href="">Eliminar</a>
				</td>
			</tr>
			<?php
		}
	?>

</table>

<input type="button" name="Atras" value="Atrás" onClick="location.href='usuarios/saludo'" />