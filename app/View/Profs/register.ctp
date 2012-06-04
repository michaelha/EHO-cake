<?php

echo $this->Form->create('Prof');

?>
<fieldset>
  <legend>Professor Registration</legend>
<?php
echo $this->Form->input('name', array(
    'label' => 'Professor Name'
));

echo $this->Form->input('course', array(
    'label' => 'Course'
));

echo $this->Form->input('email', array(
    'label' => 'Email',
    'type' => 'email'
));

echo $this->Form->input('password', array(
    'label' => 'Password',
    'type' => 'password'
));

echo $this->Form->submit();
?>
</fieldset>
<?php
echo $this->Form->end();
?>