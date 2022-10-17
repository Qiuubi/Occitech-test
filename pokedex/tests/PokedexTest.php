<?php

namespace App\Tests;

use App\Entity\Pokedex;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class PokedexTest extends KernelTestCase
{
    public function getPokedex($name, $number, $firstType): Pokedex
    {
        return (new Pokedex())
            ->setName($name)
            ->setNumber($number)
            ->setFirstType($firstType);
    }

    public function testPokemonWithNoSecondType(): void
    {
        $kernel = self::bootKernel();
        $container = static::getContainer();
        // Given we use the Entity Pokedex 
        // When I fill the function as following without second type :
        $pokedex = $this->getPokedex('Pikachu', 25, 'Electrique')->setSecondType(null);
        // Then there would be no error with that occurrence 
        $errors = $container->get('validator')->validate($pokedex);
        $this->assertCount(0, $errors);

        // $this->assertSame('test', $kernel->getEnvironment());
        // $routerService = static::getContainer()->get('router');
        // $myCustomService = static::getContainer()->get(CustomService::class);
    }

    public function testNewType(): void
    {

        $kernel = self::bootKernel();
        $container = static::getContainer();
        // Given we use the Entity Pokedex 
        // When I fill the function as following with a type who is not recognized :
        $pokedex = $this->getPokedex('Stello', 923, 'Spatial');
        $types = ["Normal",  "Fighting", "Flying", "Poison", "Ground", "Rock", "Bug", "Ghost", "Steel", "Fire", "Water", "Grass", "Electric", "Psychic", "Ice", "Dragon", "Dark", "Fairy"];
        // Then there would be no error with that occurrence 
        $errors = $container->get('validator')->validate($pokedex);
        $this->assertNotContains($pokedex->setFirstType('Spatial'), $types);
        // $this->assertCount(0, $errors);

        // $this->assertSame('test', $kernel->getEnvironment());
        // $routerService = static::getContainer()->get('router');
        // $myCustomService = static::getContainer()->get(CustomService::class);
    }

    public function testFileImg()
    {
        $container = static::getContainer();
        // Given we have a random Pokemon
        $pokedex = $this->getPokedex('Salamèche', 4, 'Feu')->setImg('fdfzffflsfsfedofj.png');
        // Then there would be an error with that occurrence if 21 there is characters
        $errors = $container->get('validator')->validate($pokedex);
        $this->assertEquals(max([1, 21]), strlen($pokedex->getImg()));
        $this->assertCount(0, $errors);
    }

    public function testIfFillFirstAndSecondType()
    {
        $container = static::getContainer();
        // Given we have two pokemons, one with one type and one another with two types
        $data = '[{
            "id": 3,
            "name": {
              "english": "Venusaur",
              "japanese": "フシギバナ",
              "chinese": "妙蛙花",
              "french": "Florizarre"
            },
            "type": [
              "Grass",
              "Poison"
            ],
            "base": {
              "HP": 80,
              "Attack": 82,
              "Defense": 83,
              "Sp. Attack": 100,
              "Sp. Defense": 100,
              "Speed": 80
            }
          },
          {
            "id": 4,
            "name": {
              "english": "Charmander",
              "japanese": "ヒトカゲ",
              "chinese": "小火龙",
              "french": "Salamèche"
            },
            "type": [
              "Fire"
            ],
            "base": {
              "HP": 39,
              "Attack": 52,
              "Defense": 43,
              "Sp. Attack": 60,
              "Sp. Defense": 50,
              "Speed": 65
            }
          }]';


        $obj = json_decode($data);
        // When I fill the function as following :
        for ($i = 0; $i < 2; $i++) {
            $pokedex = $this->getPokedex(
                $obj[$i]->name->english,
                $obj[$i]->id,
                $obj[$i]->type[0]
            )->setHp($obj[$i]->base->HP)
                ->setAttack($obj[$i]->base->Attack)
                ->setDefense($obj[$i]->base->Defense)
                ->setSpAttack($obj[$i]->base->{'Sp. Attack'})
                ->setDefense($obj[$i]->base->{'Sp. Defense'})
                ->setSpeed($obj[$i]->base->Speed);
            if (isset($obj[$i]->type[1])) {
                $pokedex->setSecondType($obj[$i]->type[1]);
            } else {
                $pokedex->setSecondType(null);
            }
        }
        // Then there would be no error with that occurrence 
        $errors = $container->get('validator')->validate($pokedex);
        $this->assertCount(0, $errors);
    }
}
