<?php
namespace App\Controller\Admin;
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
class UsersController extends AppController{
	
	
    public function index(){
        $this->viewBuilder()->layout('admin');
    }
	
	public function login(){
        $this->viewBuilder()->layout('admin');
		if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
				$this->Auth->setUser($user);
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error(__('Invalid username or password, try again'));
		}
		
		if($this->Auth->user()){
			return $this->redirect($this->Auth->redirectUrl());
		}
    }
	
	public function logout(){
     return $this->redirect($this->Auth->logout());
	}
}
