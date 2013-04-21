<?php
class VideosController extends AppController {
	public $helpers = array('Html', 'Form', 'Tab');
    public function index() {
        $this->set('videos', $this->Video->find('all'));
    }
}
	