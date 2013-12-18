<?php

	$atributos = array('pk' => 'form', 'nombres' =>'form');
	echo form_open_multipart(null,$atributos);
?>
<?php echo validation_errors(); ?>
<p>

	Nombre: <input type="text" name="nombres" value="<?php echo set_value("nombre")?>" />
	<br />
	Descripcion: <input type = "text" name ="apellidos" value "<?php echo set_value("descripcion")?>"/>
	<br />
</p>

<input type ="submit" value ="Enviar" title="Enviar" />


<input type="button" name="Atras" value="Atrás" onClick="location.href='usuarios/saludo'" />



<?php
echo form_close();
?>