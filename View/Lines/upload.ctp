<?php
echo $this->Html->script('jquery-1.7.2.min.js');
echo $this->Html->script('jquery-ui-1.8.20.custom.min.js');
echo $this->Html->script('jquery.form.js');
echo $this->Html->script('jquery.maskedinput-1.3.min.js');
echo $this->Html->script('lines');


echo $this->element('menu');

echo $this->Html->div(null, implode("", array(
    $this->Form->create('Line', array(
        'type' => 'file',
        'controller' => 'lines',
        'action' => 'upload',
        'id' => 'LineUpload',
        'default' => false
    )),


    $this->Form->input('file', array('type' => 'file', 'label' => null, 'value' => null)),




    # form buttons
    $this->Form->submit('Upload', array('id' => 'AddFile', 'div' => false )),

    # form end: file upload
    $this->Form->end(),

)), array('id' => 'upload'));




?>





