<?php

namespace App\Controller;

use Authentication\PasswordHasher\DefaultPasswordHasher;

class UsersController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->allowUnauthenticated(['login', 'createAccount']);
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('connection_layout');
        $user = $this->Users->newEmptyEntity();
        $result = $this->Authentication->getResult();
        if ($result->isValid()) {
            $target = $this->Authentication->getLoginRedirect() ?? '/Pokemons/index';
            return $this->redirect($target);
        }
        $this->getRequest()->getSession()->delete('Flash');
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error('Invalid username or password');
        }
        $this->set(compact('user'));
    }

    public function createAccount()
    {
        $this->viewBuilder()->setLayout('connection_layout');
        // Créer un nouvel utilisateur
        $user = $this->Users->newEmptyEntity();

        // Vérifier si la requête HTTP est une requête POST
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $user = $this->Users->patchEntity($user, $data);
            //$user->password = (new DefaultPasswordHasher)->hash($data['password']);

            // Tenter de sauvegarder l'utilisateur
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Votre compte a été créé avec succès.'));
                $this->Authentication->setIdentity($user);
                return $this->redirect(['action' => 'login']);
            } else {
                // Afficher un message d'erreur si la sauvegarde a échoué
                $this->Flash->error(__('Impossible de créer votre compte. Veuillez réessayer.'));
            }
        }

        // Passer l'entité utilisateur à la vue
        $this->set(compact('user'));
    }

    public function logout()
    {
        $this->Authentication->logout();
        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }

    protected function _setPassword(string $password)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($password);
    }
}
