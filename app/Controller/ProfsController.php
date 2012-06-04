<?php

class ProfsController extends AppController {

  public $components = array(
      'Session',
      'Auth' => array(
          'authenticate' => array(
              'Form' => array(
                  'userModel' => 'Prof',
                  'fields' => array(
                      'username' => 'email',
                      'password' => 'password'
                  )
              )
          ),
          'loginAction' => array(
              'controller' => 'profs',
              'action' => 'login'
          ),
          'authError' => 'AUTH ERROR LOL'
      )
  );

  public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('register', 'login');
  }

  public function index() {
    $this->Session->setFlash('profs index page');
  }

  public function register() {
    $this->Session->setFlash('registration form');
    if (empty($this->request->data)) {
      // no data, just save form
    } else {
      //TODO: check for duplicates
      //TODO: do we need password confirmation?
      //TODO: send email to mariano for activation, or admin panel activation?
      App::uses('String', 'Utility');
      $this->request->data['Prof']['activated'] = String::uuid();
      if ($this->Prof->save($this->request->data)) {
        $this->Session->setFlash('saved');
        $this->redirect(array('action' => 'login'));
      } else {
        $this->Session->setFlash('errors');
      }
    }
  }

  public function login() {
    $this->Session->setFlash('login form');
    if( $this->request->is('post') ) {
      if( $this->Auth->login() ) {
        $this->redirect($this->Auth->redirect());
      } else {
        $this->Session->setFlash('Username of password is incorrect', 'default', array(), 'auth');
      }
    }
  }
  
  public function logout() {
    $this->Auth->logout();
  }

}

?>
