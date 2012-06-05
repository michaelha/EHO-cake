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
  public $validate = array(
      'name' => array(
          'rule' => 'alphaNumeric',
          'required' => true,
          'allowEmpty' => false,
          'message' => 'You must enter your name'
      ),
      'course' => array(
          'rule' => 'alphaNumeric',
          'required' => true,
          'allowEmpty' => false,
          'message' => 'Please enter a course name or a description'
      ),
      'email' => array(
          'rule' => 'email',
          'required' => true,
          'allowEmpty' => false,
          'message' => 'You must enter a valid email format'
      ),
      'password' => array(
          'rule' => array('minLength', '6'),
          'required' => true,
          'allowEmpty' => false,
          'message' => 'Your password needs to be at least 6 characters'
      )
  );
  public $hasMany = array(
      'Game' => array(
          'foreignKey' => 'prof_id'
      )
  );
  
  public function beforeSave() {
    $this->data['Prof']['password'] = AuthComponent::password($this->data['Prof']['password']);
  }

}

?>
