<?php
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');



class LinesController extends AppController {

    public $helpers = array('Html', 'Form');
    public $components = array('Session');

    public function index($sort = null) {

        if($sort)
        {
            $this->Line->data = $this->Line->find('all', array('fields' => array('DISTINCT Line.run_number', 'Line.id', 'Line.train_line', 'Line.route', 'Line.operator_id'), 
            'order' => array('Line.run_number' => 'asc')));
        }
        else
        {
            $this->Line->data = $this->Line->find('all');
        }

        $this->set('lines', $this->Line->data);
    }


    public function update($id = null)
    {
        if($id == null)
        {
            $this->Session->setFlash('Invalid line.');
            $this->redirect(array('controller' => 'lines', 'action' => 'index'));
        }

        $line = $this->Line->findById($id);

        if(!$line)
        {
            throw new NotFoundException('Invalid line');
        }


        if(!$this->request->data)
        {
            $this->request->data = $line;
        } 

        if($this->request->is('post'))
        {
            $this->Line->id = $id;

            if($this->Line->save($this->request->data))
            {
                $this->Session->setFlash('Your line has been updated.');
                $this->redirect(array('controller' => 'lines', 'action' => 'index'));
            }
            else
            {
                $this->Session->setFlash('Unable to update your line.');
                $this->redirect($this->here);
            }

        }

    }

    public function remove($id = null)
    {
        if($id == null)
        {
            $this->Session->setFlash('Unable to remove line.');
            $this->redirect(array('controller' => 'lines', 'action' => 'index'));
        }

        $this->Line->delete($id);

        $this->Session->setFlash("You're line has been deleted.");

        $this->redirect(array('controller' => 'lines', 'action' => 'index'));

    }

    public function add()
    {
        if($this->request->is('post'))
        {
            $this->Line->create();

            try
            { 
                if($this->Line->save($this->request->data))
                {
                    $this->Session->setFlash('Your line has been saved');
                    $this->redirect(array('controller' => 'lines', 'action' => 'index'));
                }
                else
                {
                    $this->Session->setFlash('Unable to add your line.');
                }
            }
            catch(Exception $e)
            {
                $this->Session->setFlash('Record already exists');
            }
        }
    }

    public function upload()
    {

        if($this->request->is('post'))
        {
            if(!empty($this->request->data))
            {

                $tmp = $this->Line->getValidationRules();

                $this->Line->Behaviors->detach('Uploader.FileValidation');
                $this->Line->Behaviors->attach('Uploader.FileValidation', $tmp);

                if($this->Line->validates())
                {
                    $this->Uploader = new Uploader('ajaxField', 'qqfile');

                    $result = $this->Uploader->upload('file', array('name' => $this->Line->data['Line']['file']['name'], 'overwrite' => true));

                    if(!$result)
                    {
                        $this->Session->setFlash('File upload failed.');
                        $this->redirect($this->here);
                    }
                    else
                    {
                        $file = new File('files/uploads/'.$this->request->data['Line']['file']['name']);

                        $strings = $file->read(true, 'r');

                        $strings = explode("\n", $strings);

                        $count = 0;

                        foreach($strings as $string)
                        {
                            if($count != 0)
                            {

                                $this->Line->create();
                                $tmp = explode(',', $string);

                                $this->Line->set(array('train_line' => $tmp[0], 'route' => $tmp[1], 'run_number' => $tmp[2], 'operator_id' => $tmp[3]));

                                $result = $this->Line->save();

                                if(!$result)
                                {
                                    $this->Session->setFlash('Failed to import csv.');
                                    $this->redirect($this->here);
                                }
                            }

                            $count++;
                        }

                        $this->redirect(array('controller' => 'lines', 'action' => 'index'));
                    }





                }
            }
        } 

    }


}
?>
