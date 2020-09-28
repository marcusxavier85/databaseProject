<?php

$db = new PDO('mysql:host=db;dbname=pokedex', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT `id`, `pokedex_no`, `name`, `type` FROM `kanto_pokedex`;');

$query->execute();

$result = $query->fetchAll();

echo '<ul>';
foreach($result as $kantoPokedex) {
    echo '<li>' . '#' . $kantoPokedex['pokedex_no'] . ' ' . $kantoPokedex['name'] . ' ' . $kantoPokedex['type'] . '</li>';
}
echo '</ul>';