<?php

$bd = new SQLite3("db/filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql)) 
    echo "\ntabela filmes apagada\n"; 


$sql = "CREATE TABLE filmes (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo VARCHAR(200) NOT NULL,
    poster VARCHAR (200),
    sinopse TEXT,
    nota DECIMAL(2,1)
    )
";

if ($bd->exec($sql)) 
    echo "\ntabela filmes criada\n"; 
else
    echo "\nerro ao criar tabela filmes\n"; 


$sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (
    
    'Vingadores',
    'https://image.tmdb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg',
    'Após os eventos devastadores de “Vingadores: Guerra Infinita”, o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.',
    8.3
)";

if ($bd->exec($sql)) 
    echo "\nfilmes inseridos com sucesso\n"; 
else
    echo "\nerro ao inserir filmes\n"; 


$sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (

    'Batman',
    'https://image.tmdb.org/t/p/w300/wd7b4Nv9QBHDTIjc2m7sr0IUMoh.jpg',
    'Bruce Wayne é um jovem bilionário da cidade de Gotham City, Nova Jersey, que também age secretamente como o vigilante noturno Batman após o assassinato dos seus pais.',
    7.9
)";

if ($bd->exec($sql)) 
    echo "\nfilmes inseridos com sucesso\n"; 
else
    echo "\nerro ao inserir filmes\n"; 

?>