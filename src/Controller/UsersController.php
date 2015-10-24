<?php
namespace App\Controller;
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class UsersController extends AppController{
    public function index(){
        $this->viewBuilder()->layout('admin');
    }
	
	public function login(){
        $this->viewBuilder()->layout('admin');
		
		if($this->request->is('post')){
			echo '<pre>';print_r($this->request->data);die;
		}
    }
}
