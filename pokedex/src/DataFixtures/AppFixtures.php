<?php

namespace App\DataFixtures;

use App\Entity\Pokedex;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{

  public function load(ObjectManager $manager): void
  {

    $data = file_get_contents('./pokedex.json');
    $obj = json_decode($data);
    for ($i = 0; $i < 809; $i++) {
      $pokedex = new Pokedex();
      $pokedex->setNumber($obj[$i]->id)
        ->setName($obj[$i]->name->english)
        ->setFirstType($obj[$i]->type[0])
        ->setHp($obj[$i]->base->HP)
        ->setAttack($obj[$i]->base->Attack)
        ->setDefense($obj[$i]->base->Defense)
        ->setSpAttack($obj[$i]->base->{'Sp. Attack'})
        ->setSpDefense($obj[$i]->base->{'Sp. Defense'})
        ->setSpeed($obj[$i]->base->Speed);
      /**/
      if (isset($obj[$i]->type[1])) {
        $pokedex->setSecondType($obj[$i]->type[1]);
      } else {
        $pokedex->setSecondType(null);
      }
      $manager->persist($pokedex);

      if ($i < 9) {
        $pokedex->setImg("00" . $i + 1)
          ->setSprites("00" . $i + 1 . "MS");
      } else if ($i >= 9 and $i < 99) {
        $pokedex->setImg("0" . $i + 1)
          ->setSprites("0" . $i + 1 . "MS");
      } else {
        $pokedex->setImg($i + 1)
          ->setSprites($i + 1 . "MS");
      }
    }

    $manager->flush();
  }
}
