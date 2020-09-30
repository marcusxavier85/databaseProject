<?php

/**
 * Links the PHP to the correct Database
 *
 * @param none
 *
 * @return PDO, returning link to database
 */
function getDatabaseObject(): PDO {

    return $db = new PDO('mysql:host=db;dbname=pokedex', 'root', 'password');

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}

/**
 * Grabs the data we require from the kanto_pokedex table
 *
 * @param $db, data type is a PDO, is the link to the table
 *
 * @return mixed, returning an associative array of all data listed in kanto_pokedex
 */
function getPokemons(PDO $db): array {
    $query = $db->prepare('SELECT `id`, `pokedex_no`, `name`, `type`, `img_source` FROM `kanto_pokedex`;');

    $query->execute();

    return $query->fetchAll();
}

/**
 * Displays data gathered in the table pn the browser
 *
 * @param $pokemons, nested associative array, used as the base to grab the data from
 *
 * @return string, returning a concatination of all data in one array and then doing it again for the other nested arrays
 */
function displayPokemon(array $pokemons): string {
    $result = '';
    foreach ($pokemons as $pokemon) {
        if (array_key_exists('img_source', $pokemon) && array_key_exists('pokedex_no', $pokemon) && array_key_exists('name', $pokemon) && array_key_exists('type', $pokemon)) {
            $result .= '<tr class="rowBox">';
            $result .= '<td><img class="pictureOfPokemon" src=' . $pokemon['img_source'] . ' alt="Picture of "' . $pokemon['name'] . '</td>';
            $result .= '<td>' . $pokemon['pokedex_no'] . '</td>';
            $result .= '<td>' . $pokemon['name'] . '</td>';
            $result .= '<td>' . $pokemon['type'] . '</td>';
            $result .= '</tr>';
        } else {
            return 'This is not correct please reconsider';
        }
    }
    return $result;
}