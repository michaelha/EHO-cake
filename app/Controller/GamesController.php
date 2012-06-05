<?php

class GamesController extends AppController {
  
  public function beforeFilter() {
    parent::beforeFilter();
    //$this->Auth->allow('none');
  }
  
  private function generateToken($id) {
    $id_part = base_convert($id,10,36);
    $rand_part = str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789');
    //return sprintf("%03s%.5s", $id_part, $rand_part);
    $randchars = 8 - strlen($id_part);
    return $id_part.substr($rand_part,0,$randchars);
  }
  
  public function create() {
    $this->Session->setFlash('create game form');
    if( empty($this->request->data) ) {
      $this->set('prof_id', $this->Session->read('Auth.User.id'));
    } else {
      if( $this->Game->save($this->request->data) ) {
        $this->Session->setFlash('game saved');
        
        for($i=0; $i<10; $i++) {
          $group_data[$i]['Group']['token'] = $this->generateToken($this->Game->id);
          $group_data[$i]['Group']['game_id'] = $this->Game->id;
        }
        
        $this->Game->Group->saveAll($group_data);
        
        $this->redirect( array(
            'controller' => 'games',
            'action' => 'view',
            $this->Game->id
        ));
      } else {
        $this->Session->setFlash('error saving game');
      }
    }
  }
}
?>
