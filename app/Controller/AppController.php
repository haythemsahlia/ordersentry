<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
//App::uses('HtmlHelper', 'View/Helper');
// desactiver la barre à droite
Configure::write( 'debug', 1 ) ;
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {


 
public $components = array(
'RequestHandler',
'DebugKit.Toolbar',
    'Session',
    'Auth' => array(
        'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
        'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),        'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
        'authError' => 'Login required to access ',
        'loginError' => 'Wrong Username/Password  , Try Again !',
		'flash' => array(
				'element' => 'alert',
				'key' => 'auth',
				'params' => array(
					'plugin' => 'BoostCake',
					'class' => 'alert-error'
				))
 
    ),'Cookie',
			 
 
        'Filter.Filter' => array('nopersist' => array('index') )
  	);

// only allow the login controllers only
public function before
() {
    $this->Auth->allow('login');
  //if($this->Session->check('Config.language'))
   // {        Configure::write('Config.language', $this->Session->read('Config.language'));    }
            $this->_setLanguage();
            $this->Filter->nopersist = array();
    $this->Filter->nopersist["Orders"] = true;
}
  function _setLanguage() {

        if ($this->Cookie->read('lang') && !$this->Session->check('Config.language')) {
            $this->Session->write('Config.language', $this->Cookie->read('lang'));
        }
        else if (isset($this->params['language']) && ($this->params['language']
                 !=  $this->Session->read('Config.language'))) {

            $this->Session->write('Config.language', $this->params['language']);
            $this->Cookie->write('lang', $this->params['language'], false, '20 days');
        }
    }
public function isAuthorized($user) {
    // Here is where we should verify the role and give access based on role
     
    return true;
}

public $helpers = array(
		'Session',
		//'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
		//'Html' => array('className' => 'MyHtml'),
		'Form' => array('className' => 'BoostCake.BoostCakeForm'),
		'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
		// 'Autocomplete.Autocomplete'


	);
	/*public $components2 = array(
		'Auth' => array(
			'flash' => array(
				'element' => 'alert',
				'key' => 'auth',
				'params' => array(
					'plugin' => 'BoostCake',
					'class' => 'alert-error'
				)
			)
		)
	);*/
	//public $components = array('RequestHandler');


 //override redirect
 
 /*   public function redirect( $url, $status = NULL, $exit = true ) {
 
        if (!isset($url['language']) && $this->Session->check('Config.language')) {
 
            $url['language'] = $this->Session->read('Config.language');
 
        }
 
        parent::redirect($url,$status,$exit);
 
    }

*/

}// end
