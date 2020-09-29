<?php

function getData() {
    $db = new PDO('mysql:host=db;dbname=pokedex', 'root', 'password');

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = $db->prepare('SELECT `id`, `pokedex_no`, `name`, `type`, `img_source` FROM `kanto_pokedex`;');

    $query->execute();

    return $query->fetchAll();
}