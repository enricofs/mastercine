<?php include "cabecalho.php" ?>

<body>

<?php

//session_start();
require "./util/Mensagem.php";

$controller = new FilmesController();
$filmes = $controller->index();

?>

  <nav class="nav-extended red lighten-3">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li class="active"><a href="/">Galeria</a></li>
        <li><a href="/novo">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header center">
      <h1>MASTERCINE</h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent red darken-1">
        <li class="tab"><a href="/">Todos</a></li>
        <li class="tab"><a class="active" href="/favoritos">Favoritos</a></li>
      </ul>
    </div>
  </nav>

  
  <div class="container">
    <div class="row">

      <?php if ($filmes) echo "<p class='card-panel red lighten-4'>Ops... Ainda não desenvolvemos essa funcionalidade!</p>" ?>
<!--
       <?php foreach ($filmes as $filme) : ?>
        <div class="col s12 m6 l3 xl3">
          <div class="card hoverable card-serie">
            <div class="card-image">
              <img src="<?= $filme->poster ?>" class="activator" />
              <button class="btn-fav btn-floating halfway-fab waves-effect waves-light red" data-id="<?= $filme->id ?>">
                <i class="material-icons"><?= ($filme->favorito) ? "favorite" : "favorite_border" ?></i>
              </button>
            </div>
            <div class="card-content">
              <p class="valign-wrapper">
                <i class="material-icons amber-text">star</i> <?= $filme->nota ?>
              </p>
              <span class="card-title activator truncate">
                <?= $filme->titulo ?>
              </span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><?= $filme->titulo ?><i class="material-icons right">close</i></span>
              <p><?= substr($filme->sinopse, 0, 500) . "..." ?></p>
              <div></div>
              <button class="waves-effect waves-light btn-small right red accent-2 btn-delete" data-id="<?= $filme->id ?>"><i class="material-icons">delete</i></button>
            </div>
          </div>
        </div>
      <?php endforeach ?>

    </div>
  </div>