<?php

/*
 * Student model
 * Students are attached to profs, and may belong to
 * one or many games depending on requirements.
 */
class Student extends AppModel {
  
  public $name = 'Student';
  
  public $belongsTo = array(
      'Prof' => array(
          'foreignKey' => 'prof_id'
      )
  );
}
?>
