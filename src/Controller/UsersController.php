<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\I18n\Time;

class UsersController extends AppController{
    const AUTHEN_CONTROLLER = 'Auth';

    public function initialize(){
        parent::initialize();
        $this->loadComponent("Paginator");
        $this->viewBuilder()->layout('default');
    }
    
    public function index(){
        //die('xxx');
    }
    
    
}


