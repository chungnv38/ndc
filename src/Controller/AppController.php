<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;
use Cake\Core\Configure;
use Cake\Routing\Router;
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public $userSession;
    public $config;
    public $webroot;
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        Time::setToStringFormat('dd/MM/yyyy HH:mm:ss');
        $this->config = Configure::read();
        $this->webroot = $this->request->webroot;
        
        // $this->loadComponent('Auth', 
        // [
        //     'loginRedirect' => [
        //         'controller' => 'Artists',
        //         'action' => 'index'
        //     ],
        //     'loginAction' => [
        //         'controller' => 'Auth',
        //         'action' => 'login'
        //     ],
        //     'logoutRedirect' => [
        //         'controller' => 'auth',
        //         'action' => 'login',
        //     ],
        //     'authError' => 'Username or Password is incorect',
        //     'authenticate' => [
        //     'Form' => [
        //         'fields' => ['username' => 'user_login_name','password' => 'user_password'],
        //         'passwordHasher' => ['className' => 'None'],
        //         'userModel' => 'Auth',
        //         'scope' => array('user_is_deleted' => 0)
        //     ]
        // ],
        // ]
        // );
        // $this->userSession = $this->Auth->user() ? $this->Auth->user() : array();
        $this->set('controller', $this->request->params['controller']);
        // $this->set('userSession', $this->userSession);
        $this->set('webroot', $this->webroot);
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
        // $aryModulePermission = array('currencies','countries','artists','arts','auth','items','authors','antiques','houses');
        // $this->Auth->allow(['logout','login']);
        //     if($this->request->params['action'] != 'login' && $this->request->params['action'] != 'logout'){
        //         if(empty($this->userSession) || !$this->userSession){
        //             $this->redirect(['controller' => 'Auth','action' => 'login']);
        //         }
        //     if(( empty($this->userSession['user_level']) || $this->userSession['user_level']< 3) && !in_array(strtolower($this->request->params['controller']), $aryModulePermission)){
        //             $this->redirect(['controller' => 'Auth','action' => 'accessdenied']);
        //     }
        // }
    }
    
    public function insertsActionlogData($action = '', $controller = '', $id = null){
        $user = $this->Auth->user();
        $actionLogModel = TableRegistry::get('ActionLogs');
        $aryDataLog = array();
        $aryDataLog['action_log_module'] = 'localpage';
        $aryDataLog['action_log_controller'] = ($controller)? $controller : $this->request->params['controller'];
        $aryDataLog['action_log_action'] = ($action)? $action : $this->request->params['action'];
        $aryDataLog['action_log_user_id'] = $user['id'];
        $aryDataLog['action_log_user_login_name'] = $user['user_login_name'];
        $aryDataLog['action_log_datetime'] = new Time();
        $aryDataLog['action_log_client_ipv4'] = $_SERVER['REMOTE_ADDR'];
        if($id) $aryDataLog['action_log_id'] = $id;
        $actionLogModel->insert($aryDataLog);
        
        return $aryDataLog;
    }
    
    public function url($option){
        return Router::url($option);
    }
}
