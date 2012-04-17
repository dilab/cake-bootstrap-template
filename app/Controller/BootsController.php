<?php
App::uses('AppController', 'Controller');


class BootsController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Boots';

/**
 * Default helper
 *
 * @var array
 */
	public $helpers = array('Html', 'Session');

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = null;


	public function home() {
	   $this->layout = 'default';	
	}
	
	public function basic() {
		$this->layout = 'basic';   
		$this->set('title_for_layout', 'Basic marketing site');
	}
	
	public function fluid() {
		$this->layout = 'fluid';    
		$this->set('title_for_layout', 'Fluid layout');
	}
	
	public function starter() {
		$this->layout = 'starter';    
		$this->set('title_for_layout', 'Starter template');
	}
}
