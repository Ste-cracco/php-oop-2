<?php

include_once __DIR__. '/Classi/PetFood.php';
include_once __DIR__. '/Classi/PetDress.php';
include_once __DIR__. '/Classi/PetGame.php';


$crocchette = new PetFood(
    [
        'nome' => 'Crocchette di Manzo',
        'descrizione' => 'Lorem ipsum lorem ipsum',
        'prezzo' => 19.99,
        'quantita' => 3,
        'scadenza' => '13/12/2024',
    ]
);
var_dump($crocchette);

$carne = new PetFood(
    [        
        'nome' => 'Carne di Tacchino',
        'descrizione' => 'Lorem ipsum lorem ipsum',
        'prezzo' => 29.99,
        'quantita' => 2,
        'scadenza' => '03/11/2023',
    ]
);
var_dump($carne);

$maglione = new PetDress(
    [
        'nome' => 'Maglione inverno',
        'descrizione' => 'Lorem ipsum lorem ipsum',
        'prezzo' => 12.90,
        'quantita' => 1,
        'taglia' => 'L',
        'materiale' => 'Cashmere',
    ]
);
var_dump($maglione);

$pallina = new PetGame(
    [
        'nome' => 'Maglione inverno',
        'descrizione' => 'Lorem ipsum lorem ipsum',
        'prezzo' => 12.90,
        'quantita' => 3,
        'colore' => 'rosso',
        'nome_gioco' => 'Pallina',
    ]
);
var_dump($pallina);
