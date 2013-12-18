<h1> Subir noticia </h1>

<?php

	$atributos = array('pk' => 'form', 'nombre' =>'form');
	echo form_open_multipart(null,$atributos);
?>
<?php echo validation_errors(); ?>
<p>
	TItulo: <input type="text" name="titulo" value="<?php echo set_value("titulo")?>" />
	<br/>
	Bajada: <input type="text" name="bajada" value="<?php echo set_value("bajada")?>" />
	<br/>
	Noticia: <input type="text" name="noticia" value="<?php echo set_value("noticia")?>" />
	<br/>
	Fecha: <input type="date" name="fecha" value="<?php echo set_value("fecha")?>" />
	<br/>
	Escritor: <input type="text" name="autor_fk" value="<?php echo set_value("autor_fk")?>" />
	<br/>
	Categoria: <input type="text" name="categoria_fk" value="<?php echo set_value("categoria_fk")?>" />

</p>

<input type ="submit" value ="Enviar" title="Enviar" />

<input type="button" name="Atras" value="Atrás" onClick="location.href='usuarios/saludo'" />

<?php
echo form_close();
?>