<div class="form-group">                            
    <input id="name" type="text" class="form-control" name="nombre" placeholder="Nombre de usuario" <?php $validador -> mostrarNombre() ?>>
    <?php
    $validador -> mostrarErrorNombre();
    ?>
</div>
<div class="form-group">                            
    <input id="email" type="email" class="form-control" name="email" placeholder="Email" <?php $validador -> mostrarEmail() ?>>
    <?php
    $validador -> mostrarErrorEmail();
    ?>
</div>
<div class="form-group">                            
    <input type="password" class="form-control" name="clave1" placeholder="Contraseña">
    <?php
    $validador -> mostrarErrorClave1();
    ?>
</div>
<div class="form-group">                            
    <input type="password" class="form-control" name="clave2" placeholder="Repite la contraseña">
    <?php
    $validador -> mostrarErrorClave2();
    ?>
</div>
<br>
<button type="reset" class="btn btn-default btn-primary">Limpiar formulario</button>
<button type="Submit" class="btn btn-default btn-primary" name="enviar">Enviar datos</button>