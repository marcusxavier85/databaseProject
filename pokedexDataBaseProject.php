<?php
//pokedex Code

$db = new PDO('mysql:host=db;dbname=pokedex', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT `id`, `pokedex_no`, `name`, `type` FROM `kanto_pokedex`;');

$query->execute();

$result = $query->fetchAll();

?>

<html>
    <head>
    </head>
    <body>
    <header class="tile">
        Pokedex
    </header>

    <a href="http://localhost:1234/databaseProject/pokedexForm.php"><button class="addNewPokemonButton">Add new Pokemon</button></a>

    <table class="mainTable">
        <tr>
            <th>Pokedex Entry</th>
            <th>Name</th>
            <th>Type</th>
        </tr>

    <?php
        foreach($result as $pokemon) {
            echo "<tr>";
            echo "<td>" . $pokemon['pokedex_no'] . "</td>";
            echo "<td>" . $pokemon['name'] . "</td>";
            echo "<td>" . $pokemon['type'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

    ?>



    </body>
</html>
