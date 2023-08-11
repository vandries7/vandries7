<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table\CRMUsersTable;
use Cake\Event\Event;
use CakeDC\Users\Controller\Traits\LoginTrait;
use CakeDC\Users\Controller\Traits\RegisterTrait;

class CRMUsersController extends AppController
{
    use LoginTrait;
    use RegisterTrait;

    /**
     * Initialize
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('CakeDC/Users.Setup');
        if ($this->components()->has('Security')) {
            $this->Security->setConfig(
                'unlockedActions',
                ['login', 'u2fRegister', 'u2fRegisterFinish', 'u2fAuthenticate', 'u2fAuthenticateFinish']
            );
        }
    }



    public function add()
    {



//        $user = $this->getTableLocator()->get('CRMUsers');
//
//
//        $user = $user->newEmptyEntity();
//
//        //debug($user);exit;
//
//
//        if ($this->request->is('post')) {
//            $user = $user->patchEntity($user, $this->request->getData());
//            if ($user->save($user)) {
//                $selectedRole = $this->request->getData('role'); // Obțineți valoarea selectată din dropdown
//                if (!empty($selectedRole)) {
//                    // Atribuiți rolul utilizatorului nou creat
//                    $user->set('role', $selectedRole);
//                    $user->save($user);
//                }
//
//                $this->Flash->success(__('The user has been saved.'));
//
//                return $this->redirect(['action' => 'index']);
//            }
//            $this->Flash->error(__('The user could not be saved. Please, try again.'));
//        }
//
//        $this->set(compact('user'));
        $this->register();
    }

    public function index()
    {
        $users = $this->paginate($this->getTableLocator()->get('CRMUsers'));

        $this->set(compact('users'));
    }

}
