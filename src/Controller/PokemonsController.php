<?php

namespace App\Controller;


class PokemonsController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->allowUnauthenticated(['shop', 'basketP','removeFromBasket','addToBasket']);
    }

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
        $session = $this->getRequest()->getSession();
        $basket = $session->read('Basket') ?? [];
        $pokemons = $this->Pokemons->newEmptyEntity();
        if ($basket) {
            $pokemons = $this->Pokemons
                ->find()
                ->where(['id IN' => array_keys($basket)])
                ->order(['id' => 'ASC']);
        }
        $this->set(compact('pokemons'));

    }

    public function removeFromBasket($id_card)
    {
        $session = $this->getRequest()->getSession();
        $basket = $session->read('Basket') ?? [];

        // Retirer l'article du panier
        unset($basket[$id_card]);

        // Stocker le panier dans la session
        $session->write('Basket', $basket);
        $this->redirect(['action' => 'basketP']);

    }

    public function addToBasket($id_card)
    {
        $session = $this->getRequest()->getSession();
        $basket = $session->read('Basket') ?? [];

        // Ajouter l'article dans le panier
        $basket[$id_card] = $basket[$id_card] ?? 0;
        $basket[$id_card]++;

        // Stocker le panier dans la session
        $session->write('Basket', $basket);
        $this->redirect(['action' => 'shop']);

    }

    public function buy(){
        $this->loadModel('ListCards');

        $session = $this->getRequest()->getSession();
        $basket = $session->read('Basket') ?? [];

        foreach ($basket as $cardId => $quantity) {
            $entity = $this->ListCards->newEmptyEntity();
            $entity->user_id = $this->request->getSession()->read('Auth.id');
            $entity->card_id = $cardId;
            $this->ListCards->save($entity);
        }

        // Vider le panier en session
        $session->delete('Basket');
        $this->redirect(['action' => 'index']);

    }

    public function description($id_card) {
        $pokemon = $this->Pokemons->get($id_card);
        $url = $this->referer();
        if($url == '/') {
            $send = 0;
        }
        elseif($url == '/shop') {
            $send = 1;
        }
        $this->set(compact(['send', 'pokemon']));
    }

    public function add() {

    }

}
