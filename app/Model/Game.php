<?php

/*
 * Model for Games
 * games can have many rounds (>0) and belong
 * to specific professors
 */
class Game extends AppModel {
  
  public $name = 'Game';
  
  public $belongsTo = array(
      'Prof' => array(
          'foreignKey' => 'prof_id'
      )
  );
}
?>
