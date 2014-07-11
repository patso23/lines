<?php


echo $this->Html->div('content', implode("\n", array(

        $this->Form->create('Line', array('url' => $this->here, 'novalidate')),
        $this->Form->input('Line.train_line', array('label' => 'Train Line', 'type' => 'text')),
        $this->Form->input('Line.route', array('label' => 'Route', 'type' => 'text')),
        $this->Form->input('Line.run_number', array('label' => 'Run #', 'type' => 'text')),
        $this->Form->input('Line.operator_id', array('label', 'Operator ID', 'type' => 'text')),


        $this->Form->submit('Add'),
        $this->Form->end(),

)));

$this->end();

?>
