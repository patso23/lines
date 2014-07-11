<?php

foreach($lines as $line)
{
    $cells[] = $this->Html->tableCells(array(
        $line['Line']['train_line'],
        $line['Line']['route'],
        $line['Line']['run_number'],
        $line['Line']['operator_id'],
        $this->Html->link('Update', array('controller' => 'lines', 'action' => 'update', $line['Line']['id'])),
        $this->Html->link('Remove', array('controller' => 'lines', 'action' => 'remove', $line['Line']['id']))

    ));

}
    echo $this->Html->div('content', implode("\n", array(
        $this->Html->tag('table', implode("\n", array(
            $this->Html->tag('thead', $this->Html->tableHeaders(array('Train Line', 'Route', 'Run #', 'Operator ID', array('Action' => array('colspan' => 2))))),
            $this->Html->tag('tbody', implode("\n", $cells)),

        ))),
    )));

echo $this->Html->link('Add', array('controller' => 'lines', 'action' => 'add'), array('style' => 'margin-right:10px;'));
echo $this->Html->link('Import CSV File', array('controller' => 'lines', 'action' => 'upload'), array('style' => 'margin-right:10px;'));
echo $this->Html->link('Sort by run #', array('controller' => 'lines', true));
?>
