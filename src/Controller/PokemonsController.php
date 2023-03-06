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

    public function shop($method = 3)
    {
        $this->set('method', $method);
        if ($method == 1) {
            $pokemons = $this->Pokemons
                ->find()
                ->order(['price' => 'asc']);
            $this->set(compact('pokemons'));
        } elseif ($method == 2) {
            $pokemons = $this->Pokemons
                ->find()
                ->order(['price' => 'desc']);
            $this->set(compact('pokemons'));
        } elseif ($method == 3) {
            $pokemons = $this->Pokemons
                ->find()
                ->order(['name' => 'asc']);
            $this->set(compact('pokemons'));
        } elseif ($method == 4) {
            $pokemons = $this->Pokemons
                ->find()
                ->order(['type1' => 'asc']);
            $this->set(compact('pokemons'));
        }
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

    public function addToBasket($id_card)
    {
        $this->loadModel('Baskets');
        if ($id_card != null) {
            $entity = $this->Baskets->newEmptyEntity();
            $entity->user_id = $this->request->getSession()->read('Auth.id');
            $entity->card_id = $id_card;
            $this->Baskets->save($entity);
            $this->redirect(['action' => 'shop']);
        }
    }

    public function buy(){
        $this->loadModel('Baskets');
        $this->loadModel('ListCards');

        $basket = $this->Baskets
            ->find()
            ->where(['user_id' => $this->request->getSession()->read('Auth.id')]);
        foreach ($basket as $card) {
            $entity = $this->ListCards->newEmptyEntity();
            $entity->user_id = $this->request->getSession()->read('Auth.id');
            $entity->card_id = $card->card_id;
            $this->ListCards->save($entity);
            $this->Baskets->delete($card);
        }
        $this->redirect(['action' => 'index']);

        $this->set(compact('pokemons'));
    }

    public function description($id_card) {

    }

}
