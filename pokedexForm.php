<html>
    <body>
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
            <input type="submit" value="submit">
        </form>


    </body>
</html>

