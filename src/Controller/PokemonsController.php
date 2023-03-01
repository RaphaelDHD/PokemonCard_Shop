<?php

namespace App\Controller;


class PokemonsController extends AppController
{
    public function index()
    {
        $this->loadModel('ListCards');

        $pokemons = $this->Pokemons
            ->find()
            ->innerJoinWith('ListCards', function ($q) {
                return $q->where(['ListCards.user_id' => $this->request->getSession()->read('Auth.id')]);
            })
            ->order(['Pokemons.id' => 'ASC']);
        dd($this->request->getSession()->read('Auth.id'));
        $this->set(compact('pokemons'));
    }

    public function shop()
    {
        $pokemons = $this->Pokemons
            ->find()
            ->order(['id' => 'desc']);
        $this->set(compact('pokemons'));
    }
}
