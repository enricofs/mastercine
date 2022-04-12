<?php include "cabecalho.php" ?>

<body>

    <nav class="nav-extended purple lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li class="active" ><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>CLOROCINE</h1>
        </div>
    </nav>

    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Cadastrar Filme</span>

                    <!-- input titulo-->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate" required>
                            <label for="titulo">Título do Filme</label>
                        </div>
                    </div>

                    <!-- input sinopse-->
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" class="materialize-textarea"></textarea>
                                    <label for="sinopse">Sinopse</label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- input nota-->
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nota" type="number" step=".1" min=0 max=10 class="validate" required>
                            <label for="nota">Nota</label>
                        </div>
                    </div>

                    <!-- input capa-->
                    <div class="file-field input-field">
                        <div class="btn purple lighten-2 black-text">
                            <span>Capa</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>

                </div>
                <div class="card-action">
                    <a class="waves-effect waves-light btn grey" href="galeria.php">Cancelar</a>
                    <a href="#" class="waves-effect waves-light btn purple">Confirmar</a>
                </div>
            </div>
        </div>
    </div>