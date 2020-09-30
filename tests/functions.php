<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    // different data inputted
    public function testSuccessDisplayPokemons() {
        $input = [['img_source'=>'blastoise.png', 'pokedex_no'=>9, 'name'=>'blastoise', 'type'=>'water']];
        $expectedOutcome = '<tr class="rowBox"><td><img class="pictureOfPokemon" src=blastoise.png alt="Picture of "blastoise</td><td>9</td><td>blastoise</td><td>water</td></tr>';
        $result = displayPokemon($input);
        $this->assertEquals($expectedOutcome, $result);
    }
    // correct stuff comes out

    // if when 'img_source' is changed it fails
    public function testFailureDisplayPokemons() {
        $input = [['img'=>'blastoise.png', 'pokedex_no'=>9, 'name'=>'blastoise', 'type'=>'water']];
        $expectedOutcome = 'This is not correct please reconsider';
        $result = displayPokemon($input);
        $this->assertEquals($expectedOutcome, $result);
    }
    // it does

    // if when 'pokedex_no' is changed it fails
    public function testFailureDisplayPokemonsTwo() {
        $input = [['img_source'=>'blastoise.png', 'pokedex'=>9, 'name'=>'blastoise', 'type'=>'water']];
        $expectedOutcome = 'This is not correct please reconsider';
        $result = displayPokemon($input);
        $this->assertEquals($expectedOutcome, $result);
    }

    // if when 'name' is changed it fails
    public function testFailureDisplayPokemonsThree() {
        $input = [['img_source'=>'blastoise.png', 'pokedex_no'=>9, 'nameeee'=>'blastoise', 'type'=>'water']];
        $expectedOutcome = 'This is not correct please reconsider';
        $result = displayPokemon($input);
        $this->assertEquals($expectedOutcome, $result);
    }

    // if when 'type' is changed it fails
    public function testFailureDisplayPokemonsFour() {
        $input = [['img_source'=>'blastoise.png', 'pokedex_no'=>9, 'name'=>'blastoise', 'typetttt'=>'water']];
        $expectedOutcome = 'This is not correct please reconsider';
        $result = displayPokemon($input);
        $this->assertEquals($expectedOutcome, $result);
    }

    // if incorrect data type fails
    public function testMalformedDisplayPokemons () {
            $this->expectException(TypeError::class);
            $input = 89;
            $result = displayPokemon($input);

    }

    // a few failure tests checking each key
    // malformed on one datatype

}


//displayPokemon(array $pokemonArray)
