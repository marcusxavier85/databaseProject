<?php

require('functions.php');

$dataBase = getDatabaseObject();

$pokedexNumber = $_POST['addPokedexNo'];
$pokemonName = $_POST['addPokemonName'];
$pokemonType = $_POST['addPokemonType'];
$pokemonImage = $_POST['addPokemonImage'];

$insert = $dataBase->prepare('INSERT INTO `kanto_pokedex` (`pokedex_no`, `name`, `type`, `img_source`) VALUES (?, ?, ?, ?);');

$insert->execute([$pokedexNumber, $pokemonName, $pokemonType, $pokemonImage]);

header("Location: pokedexDataBaseProject.php");
