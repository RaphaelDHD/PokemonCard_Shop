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
            $target = $this->Authentication->getLoginRedirect() ?? '/Pokemons/index';
            return $this->redirect($target);
        }
        if ($this->request->is('post')) {
            $this->Flash->error('Invalid username or password');
        }
    }

    public function createAccount()
    {
        // creér un utilisateur a partir du forme et enregistre le dans la base de donnée  
        $this->viewBuilder()->setLayout('connection_layout');
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->password = (new DefaultPasswordHasher)->hash($user->password);
            $user->role = 'user';
            $user->status = 'active';
            $user->created = date('Y-m-d H:i:s');
            $user->modified = date('Y-m-d H:i:s');
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
    }

    public function logout(){
        $this->Authentication->logout();
        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }


}