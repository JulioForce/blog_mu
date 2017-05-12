<?php

Conexion :: abrirConexion();
$totalUsuarios = RepositorioUsuario :: obtenerNumeroUsuarios(Conexion::obtenerConexion());
Conexion :: cerrarConexion();

?>


<nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button 
                    type="button" 
                    class="navbar-toggle collapsed" 
                    data-toggle="collapse" 
                    data-target="#navbar" 
                    aria-expanded="false" 
                    aria-controls="navbar">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo SERVIDOR ?>">Mundo Urabá</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo RUTA_ENTRADAS ?>"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Entradas</a></li>
                        <li><a href="<?php echo RUTA_FAVORITOS ?>"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Favoritos</a></li>
                        <li><a href="<?php echo RUTA_AUTORES ?>"><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Autores</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                <?php
                                    echo $totalUsuarios;
                                ?>
                            </a>
                        
                        
                        </li>
                        <li><a href="<?php echo RUTA_INICIO ?>"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Iniciar sesión</a></li>
                        <li><a href="<?php echo RUTA_REGISTRO ?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registro</a></li>                        
                    </ul>
                </div>

            </div>
        </nav>