<?php

echo $this->Html->div('menu', implode(' | ', array(
    $this->Html->link('Index', array('controller' => 'lines', 'action' => 'index')),
    $this->Html->link('Add', array('controller' => 'lines', 'action' => 'add')),
    $this->Html->link('Import CSV File', array('controller' => 'lines', 'action' => 'upload')),

)));
