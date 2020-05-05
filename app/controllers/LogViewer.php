<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogViewer extends CT_Controller {

	private $logViewer;

	public function __construct() {
		parent::__construct(); 
		$this->logViewer = new \CILogViewer\CILogViewer();
		//...
	}
	
	public function index() {
		echo $this->logViewer->showLogs();
		return;
	}
}
