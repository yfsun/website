<?php
class ProjectsController extends AppController {
	public $helpers = array('Html', 'Form', 'Tab');
    public function index() {
        $this->set('projects', $this->Project->find('all'));
    }


}
	