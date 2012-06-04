<?php

/*
 * Class to hold Professor info
 * 
 * depending on how it's required, a Prof will have
 * many games and many students attached to it, in a non
 * recursive manner
 */
class Prof extends AppModel {
  
  public $name = 'Prof';
  
  public $hasMany = array(
      'Student' => array(
          'foreignKey' => 'prof_id'
      ),
      'Game' => array(
          'foreignKey' => 'prof_id'
      )
  );
}
?>
