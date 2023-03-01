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
        // If the user is logged in send them away.
        if ($result->isValid()) {
            $target = $this->Authentication->getLoginRedirect() ?? '/home';
            return $this->redirect($target);
        }
        if ($this->request->is('post')) {
            $this->Flash->error('Invalid username or password');
        }
    }

    public function createAccount()
    {
        $this->viewBuilder()->setLayout('connection_layout');
        $user = $this->Users->newEntity([
            'email' => "admin@admin.fr",
            'name' => "admin",
            'password' => 123456
        ]);
        $this->Users->save($user);
        die();
        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }


}