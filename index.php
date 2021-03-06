<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'Mundo JForce';

include_once 'plantillas/documentoDeclaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span aria-hidden="true"></span> Últimas entradas
                                </div>
                                <div class="panel-body">                                    
                                    <p>Todavía no hay entradas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Búsqueda
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input type="search" class="form-control" placeholder="¿Qué buscas?">
                                    </div>
                                    <button class="form-control">Buscar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                   <span aria-hidden="true"></span> Filtro
                                </div>
                                <div class="panel-body">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                   <span aria-hidden="true"></span> Archivo
                                </div>
                                <div class="panel-body">                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
include_once 'plantillas/documentoCierre.inc.php';
?>
