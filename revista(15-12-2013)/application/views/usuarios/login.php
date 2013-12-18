<h1>Ingrese sus datos</h1>
<?php 
if ( $this->session->flashdata('ControllerMessage') != '' ) 
    {
?>
<p style="color: red;"><?php echo $this->session->flashdata('ControllerMessage'); ?></p>
<?php 
} 
?>
<?php
$atributos = array( 'id' => 'form','name'=>'form');;
echo form_open(null,$atributos);
?>
<?php echo validation_errors(); ?>
<p>
Login: <input type="text" name="login" value="<?php echo set_value("login")?>" />
</p>
<p>
Password: <input type="password" name="pass" value="<?php echo set_value("pass")?>" />
</p>

<hr />
<input type="submit" value="Enviar" title="Enviar" />
<?php
echo form_close();
?>