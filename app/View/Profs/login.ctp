<?php

echo $this->Session->flash('auth');
echo $this->Form->create('Prof');
?>
<fieldset>
  <legend>Professor Login</legend>
<?php
echo $this->Form->input('email');
echo $this->Form->input('password');
?>
</fieldset>
<?php
echo $this->Form->end('Login');
?>