<?php 

namespace App\Model\Table;

use ArrayObject;
use Cake\Datasource\EntityInterface;
use Cake\Event\EventInterface;
use Cake\ORM\Table;
use Cake\Http\Session;

class PokemonsTable extends Table 
{
    public function initialize(array $config) : void{
        $this->addBehavior('Timestamp');
        parent::initialize($config);

        $this->hasMany('ListCards', [
            'foreignKey' => 'card_id'
        ]);

        $this->hasMany('Baskets', [
            'foreignKey' => 'card_id'
        ]);

    }



}