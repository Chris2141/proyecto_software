<?php

	$atributos = array('pk' => 'form', 'nombres' =>'form');
	echo form_open_multipart(null,$atributos);
?>
<?php echo validation_errors(); ?>
<p>

	Nombres: <input type="text" name="nombres" value="<?php echo set_value("nombres")?>" />
	<br />
	Apellidos: <input type = "text" name ="apellidos" value "<?php echo set_value("apelidos")?>"/>
	<br />
	RUT: <input type = "text" name ="rut" value "<?php echo set_value("rut")?>"/>
	<br />
	Usuario: <input type = "text" name ="login" value "<?php echo set_value("login")?>"/>
	<br />
	Passworr: <input type = "password" name ="pass" value "<?php echo set_value("pass")?>"/>
	<br />
</p>

<input type ="submit" value ="Enviar" title="Enviar" />


<input type="button" name="Atras" value="Atrás" onClick="location.href='usuarios/saludo'" />



<?php
echo form_close();
?>