<?php

/*
 * Group model
 * Groups are attached to profs, and may belong to
 * one or many games depending on requirements.
 */
class Group extends AppModel {
  
  public $name = 'Group';
  
  public $belongsTo = array(
      'Game' => array(
          'foreignKey' => 'game_id'
      )
  );
}
?>
