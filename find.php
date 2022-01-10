<?php
$name = $_POST["search"];     //superglobale, cela récupère la valeur de sl'input search que je stocke dans $name


// 3 tableaux associatifs contenat un jeu de clés valeurs : 
  // l'id du pokémon pour afficher l'image
  // 
$bulbasaur = [
  "id" => 1,
  "name" => "bulbasaur",
  "type" => "plante"
];
$blastoise = [
  "id" => 9,
  "name" => "blastoise",
  "type" => "normal"
];
$butterfree = [
  "id" => 12,
  "name" => "butterfree",
  "type" => "water"
];


$all = [$bulbasaur, $blastoise, $butterfree];
$pokemons = [];
$length = strlen($name); //strlen(string length) permet de connaitre la taille d'une chaine de caractere, prend en compte les espaces
// si $name = "bu" alors strlen($name) => 2

foreach($all as $pokemon) {


  // substring permet de récupérer une partie de la chaine de caractère
  // 1er param : la chaine de caractère
  // 2eme oparam: le début de ma chaine
  // 3eme param: le nombre d'éléments à partir
  // substr('butterfree', 0, 2) => "bu

  // 2 élémnets à partir de l'indice 0
  // butterfree => ["b", "u", "t","t",...]
  // =>"bu"
  if(substr($pokemon["name"], 0, $length) === $name) {
    // ajoute à $pokemons le pokemon courant
    array_push($pokemons, $pokemon);
  }
}

// afficher, actualiser index.php
require('./index.php');
