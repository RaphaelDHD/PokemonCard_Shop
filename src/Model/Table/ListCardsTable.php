<?php

namespace App\Model\Table;


use Cake\ORM\Table;

class listCardsTable extends Table
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');

        parent::initialize($config);

        $this->belongsTo('Pokemons', [
            'foreignKey' => 'card_id'
        ]);
    }
}
