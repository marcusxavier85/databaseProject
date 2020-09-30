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
            Pokedex Entry #:
            <input type="number" name="addPokedexNo" required="">
            <br>
            Pokemon Name:
            <input type="string" name="addPokemonName" required="">
            <br>
            Pokemon Type:
            <input type="string" name="addPokemonType" required="">
            <br>
            URL for Pokemon image:
            <input type="url" name="addPokemonImage" required="">
            <br>
            <input type="submit" value="submit">
        </form>

    </body>
</html>

