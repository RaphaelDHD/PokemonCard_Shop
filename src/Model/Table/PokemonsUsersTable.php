<?php

namespace App\Model\Table;


use Cake\ORM\Table;

class PokemonsUsersTable extends Table
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');

        parent::initialize($config);

        $this->setTable('pokemons_users');

        $this->belongsTo('Pokemons', [
            'foreignKey' => 'card_id'
        ]);

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);

    }
}
