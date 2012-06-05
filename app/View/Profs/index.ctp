<?php

echo $this->Html->link(
        'Logout', array(
    'controller' => 'profs',
    'action' => 'logout'
        ), array(
    'title' => 'Log out of your session'
        )
);
echo $this->Html->link(
        'Create New Game', array(
    'controller' => 'games',
    'action' => 'create'
        ), array(
    'title' => 'Create and host a new game'
        )
);
?>