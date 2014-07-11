<?php

class LinesController extends AppController {

    public $helpers = array('Html', 'Form');


    public function index() {
        $this->set('lines', $this->Line->find('all'));
    

    }




}

