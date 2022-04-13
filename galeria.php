<?php include "cabecalho.php" ?>

<?php

$filme1 = [
  "titulo" => "Vingadores: Ultimato",
  "nota" => 8.3,
  "sinopse" => "Após os eventos devastadores de “Vingadores: Guerra Infinita”, o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.  ",
  "poster" => "https://image.tmdb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg"
];

$filme2 = [
  "titulo" => "Ad Astra - Rumo às Estrelas",
  "nota" => 6.1,
  "sinopse" => "Roy McBride é um engenheiro espacial, portador de um leve grau de autismo, que decide empreender a maior jornada de sua vida: viajar para o espaço, cruzar a galáxia e tentar descobrir o que aconteceu com seu pai, um astronauta que se perdeu há vinte anos atrás no caminho para Netuno.",
  "poster" => "https://image.tmdb.org/t/p/w300/wigZBAmNrIhxp2FNGOROUAeHvdh.jpg"
];

$filme3 = [
  "titulo" => "Sonic 2: O Filme",
  "nota" => 7.8,
  "sinopse" => "Depois de se estabelecer em Green Hills, Sonic está pronto para mais liberdade e deixar sua marca como um herói, e Tom e Maddie concordam em deixá-lo em casa enquanto vão de férias. Mas, assim que eles se foram, Dr. Robotnik volta, desta vez com um novo parceiro, Knuckles, em busca de uma esmeralda que tem o poder de construir e destruir civilizações. Sonic se une a um novo companheiro, Tails, e juntos eles embarcam em uma jornada para encontrar a esmeralda antes que ela caia nas mãos erradas.",
  "poster" => "https://image.tmdb.org/t/p/w300/f4SvCKIUrC2cDR7Xo4k1kaGAqQ2.jpg"
];

$filme4 = [
  "titulo" => "Batman",
  "nota" => 7.9,
  "sinopse" => "Bruce Wayne é um jovem bilionário da cidade de Gotham City, Nova Jersey, que também age secretamente como o vigilante noturno Batman após o assassinato dos seus pais.",
  "poster" => "https://image.tmdb.org/t/p/w300/wd7b4Nv9QBHDTIjc2m7sr0IUMoh.jpg"
];

$filmes = [$filme1, $filme2, $filme3, $filme4];


?>

<body>

  <nav class="nav-extended purple lighten-3">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li class="active"><a href="galeria.php">Galeria</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header center">
      <h1>CLOROCINE</h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent purple darken-1">
        <li class="tab"><a class="active" href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>

  <div class="row">
    <?php foreach($filmes as $filme) : ?>
      <div class="col s3">
        <div class="card hoverable">
          <div class="card-image">
            <img src="<?= $filme["poster"] ?>">
            <a class="btn-floating halfway-fab waves-effect waves-light red">
              <i class="material-icons">favorite_border</i>
            </a>
          </div>
          <div class="card-content">
            <p class="valign-wrapper">
              <i class="material-icons amber-text">star</i> <?= $filme["nota"] ?>
            </p>
            <span class="card-title"><?= $filme["titulo"] ?></span>
            <p><?= $filme["sinopse"] ?></p>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>



</body>

</html>