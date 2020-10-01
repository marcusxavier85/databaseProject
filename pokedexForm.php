<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pokedex Entry</title>
        <link href="normalize.css" type="text/css" rel="stylesheet">
        <link href=".css" type="text/css" rel="stylesheet">
    </head>
    <body class="pokemonFont">
        <header>Add a new Pokemon</header>

        <a href="pokedexDataBaseProject.php"><button class="backToPokedexButton">Back to Pokedex</button></a>

        <form method="post" action="insertPokemon.php">
            URL for Pokemon image:
            <input type="url" name="addPokemonImage" required>
            <br>
            Pokedex Entry #:
            <input type="number" min="1" max="896" name="addPokedexNo" required>
            <br>
            Pokemon Name:
            <input type="string" name="addPokemonName" required>
            <br>
            Pokemon Type:
                <input type="checkbox" name="addPokemonType[]" value="Normal">Normal
                <input type="checkbox" name="addPokemonType[]" value="Fire">Fire
                <input type="checkbox" name="addPokemonType[]" value="Fighting">Fighting
                <input type="checkbox" name="addPokemonType[]" value="Water">Water
                <input type="checkbox" name="addPokemonType[]" value="Flying">Flying
                <input type="checkbox" name="addPokemonType[]" value="Grass">Grass
                <input type="checkbox" name="addPokemonType[]" value="Poison">Poison
                <input type="checkbox" name="addPokemonType[]" value="Electric">Electric
                <input type="checkbox" name="addPokemonType[]" value="Ground">Ground
                <input type="checkbox" name="addPokemonType[]" value="Psychic">Psychic
                <input type="checkbox" name="addPokemonType[]" value="Rock">Rock
                <input type="checkbox" name="addPokemonType[]" value="Ice">Ice
                <input type="checkbox" name="addPokemonType[]" value="Bug">Bug
                <input type="checkbox" name="addPokemonType[]" value="Dragon">Dragon
                <input type="checkbox" name="addPokemonType[]" value="Ghost">Ghost
                <input type="checkbox" name="addPokemonType[]" value="Dark">Dark
                <input type="checkbox" name="addPokemonType[]" value="Steel">Steel
                <input type="checkbox" name="addPokemonType[]" value="Fairy">Fairy
                <input type="checkbox" name="addPokemonType[]" value="???">???
            <br>
            <input type="submit" value="submit">
        </form>

    </body>
</html>

