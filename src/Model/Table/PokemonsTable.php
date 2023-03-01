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
        $this->belongsTo('Users');
    }
}