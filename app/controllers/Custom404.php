<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom404 extends CT_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 * 
	 */
	public function index()
	{ 
		$this->load->helper('url');
        $this->output->set_status_header('404');
        $data['content'] = 'custom404view'; // View name
        $this->load->view('template/404/custom404view', $data);	
	}
}
