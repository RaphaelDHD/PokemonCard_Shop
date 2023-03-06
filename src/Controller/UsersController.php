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
        $result = $this->Authentication->getResult();
        if ($result->isValid()) {
            $target = $this->Authentication->getLoginRedirect() ?? '/';
            return $this->redirect($target);
        }
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error('Invalid username or password');
        }
    }

    public function createAccount()
    {
        $this->viewBuilder()->setLayout('connection_layout');

        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $user = $this->Users->NewEntity($data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Votre compte a été créé avec succès.'));
                //$this->Authentication->setIdentity($user);
                return $this->redirect(['action' => 'login']);
            } else {
                $this->Flash->error(__('Impossible de créer votre compte. Veuillez réessayer.'));
            }
        }
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
