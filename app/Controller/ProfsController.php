<?php

class ProfsController extends AppController {
  
  public function index() {
    $this->Session->setFlash('profs index page');
  }
  
  public function register() {
    $this->Session->setFlash('registration page');
  }
}
?>
