<?php
//pokedex Code

require('functions.php');

$pokemons = getData();

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pokedex</title>
        <link href="normalize.css" type="text/css" rel="stylesheet">
        <link href="pokedexStyle.css" type="text/css" rel="stylesheet">
    </head>
    <body class="backgroundImage">
        <header class="title">
            Pokedex
        </header>

        <a href="pokedexForm.php" class="addNewPokemonButtonBorder"><button class="addNewPokemonButton">Add new Pokemon</button></a>

        <table class="mainTable pokemonFont">
            <tr class="rowBox">
                <th>Image</th>
                <th>Pokedex Entry</th>
                <th>Name</th>
                <th>Type</th>
            </tr>

        <?php
            foreach($pokemons as $pokemon) {
                echo "<tr class='rowBox'>";
                echo "<td> <img src=" . $pokemon['img_source'] . " alt=Picture of" . $pokemon['name'] . " class='pictureOfPokemon'> </td>";
                echo "<td>" . $pokemon['pokedex_no'] . "</td>";
                echo "<td>" . $pokemon['name'] . "</td>";
                echo "<td>" . $pokemon['type'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

        ?>



    </body>
</html>
