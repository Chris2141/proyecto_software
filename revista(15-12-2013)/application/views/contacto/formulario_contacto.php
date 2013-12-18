<?php
/*

  $atributos = array('pk' => 'form', 'nombres' =>'form');
  echo form_open_multipart(null,$atributos);
*/
?>
<?php echo validation_errors(); ?>
<p>

  Nombres: <input type="text" name="nombres" value="" />
  <br />
  Correo: <input type = "text" name ="correo" value= ""/>
  <br />
  Mensaje: <input type = "text" name ="mensaje" value= ""/>
  <br />
</p>

<input type ="submit" value ="Enviar" title="Enviar" />


<?php
echo form_close();
?>

