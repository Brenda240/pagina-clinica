<div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" name="nombre" placeholder="Nombre" <?php $validador->mostrar_nombre() ?>>
    <?php
    $validador->mostrar_error_nombre();
    ?>
</div>
<div class="form-group">
    <label>Apellido</label>
    <input type="text" class="form-control" name="apellido" placeholder="Apellido"<?php $validador->mostrar_apellido() ?>>
    <?php 
    $validador -> mostrar_error_apellido();
    ?>
    
</div>
<div class="form-group">
    <label>Telefono</label>
    <input type="tel" class="form-control" name="tel" placeholder="Telefono Actual" <?php $validador -> mostrar_tel() ?>>
    <?php
    $validador -> mostrar_error_tel();
    ?>
</div>
<div class="form-group">
    <label>Correo Electronico</label>
    <input type="email" class="form-control" name="email" placeholder="usuario@mail.com" <?php $validador -> mostrar_email() ?>>
    <?php
    $validador -> mostrar_error_email();
    ?>
</div>
<div class="form-group">
    <label>Contraseña</label>
    <input type="password" class="form-control" name="clave1">
    <?php
    $validador -> mostrar_error_clave1();
    ?>
</div>
<div class="form-group">
    <label>Confirma Contraseña</label>
    <input type="password" class="form-control" name="clave2">
    <?php
    $validador -> mostrar_error_clave2();
    ?>
</div>

<br>
<button type="submit" class="btn btn-default btn-primary" name="enviar">Registrar</button>