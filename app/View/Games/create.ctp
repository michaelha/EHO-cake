<?php

echo $this->Form->create('Game');

?>

<fieldset>
  <legend>Create Game</legend>
  <?php
  
  echo $this->Form->input(
          'name', array(
              'label' => 'Game Name'
          )
          );
  
  echo $this->Form->input(
          'course', array(
              'label' => 'Course Name/Number'
          )
          );
  
  echo $this->Form->input(
          'description', array(
              'label' => 'Game Description'
          )
          );
  
  echo $this->Form->input(
          'num_rounds', array(
              'label' => '# Rounds'
          ));
  
  echo $this->Form->input(
          'prof_id', array(
              'type' => 'hidden',
              'value' => $prof_id
          ));
  
  echo $this->Form->submit();
  ?>
</fieldset>
<?php

echo $this->Form->end();

?>