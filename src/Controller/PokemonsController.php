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
        $this->set(compact('pokemons'));
    }

    public function shop()
    {
        $pokemons = $this->Pokemons
            ->find()
            ->order(['id' => 'desc']);
        $this->set(compact('pokemons'));
    }


    public function basketP()
    {
        $this->loadModel('Baskets');

        $pokemons = $this->Pokemons
            ->find()
            ->innerJoinWith('Baskets', function ($q) {
                return $q->where(['Baskets.user_id' => $this->request->getSession()->read('Auth.id')]);
            })
            ->order(['Pokemons.id' => 'ASC']);


        $this->set(compact('pokemons'));
    }

    public function removeFromBasket($id_card)
    {
        $this->loadModel('Baskets');
        if ($id_card != null) {
            $entity = $this->Baskets->find()
                ->where(['user_id' => $this->request->getSession()->read('Auth.id'), 'card_id' => $id_card])
                ->first();
            $this->Baskets->delete($entity);
            $this->redirect(['action' => 'basketP']);
        }
    }
}
