<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class PokemonUser extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}