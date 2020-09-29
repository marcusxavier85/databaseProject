<?php
//pokedex Code

$db = new PDO('mysql:host=db;dbname=pokedex', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT `id`, `pokedex_no`, `name`, `type`, `img_source` FROM `kanto_pokedex`;');

$query->execute();

$result = $query->fetchAll();

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pokedex</title>
        <link href="normalize.css" type="text/css" rel="stylesheet">
        <link href="pokedexStyle.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <header class="title">
            Pokedex
        </header>

        <div class="backgroundImage">
        </div>

        <a href="http://localhost:1234/databaseProject/pokedexForm.php" class="addNewPokemonButtonBorder"><button class="addNewPokemonButton">Add new Pokemon</button></a>

        <table class="mainTable">
            <tr>
                <th class="pokemonFont">Image</th>
                <th class="pokemonFont">Pokedex Entry</th>
                <th class="pokemonFont">Name</th>
                <th class="pokemonFont">Type</th>
            </tr>

        <?php
            foreach($result as $pokemon) {
                echo "<tr>";
                echo "<td> <img src=" . $pokemon['img_source'] . "alt=Picture of " . $pokemon['name'] . " class='pictureOfPokemon'> </td>";
                echo "<td>" . $pokemon['pokedex_no'] . "</td>";
                echo "<td>" . $pokemon['name'] . "</td>";
                echo "<td>" . $pokemon['type'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

        ?>



    </body>
</html>
