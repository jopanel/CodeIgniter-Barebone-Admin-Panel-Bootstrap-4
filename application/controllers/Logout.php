<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{ 
		$this->Admin_model->logout();
		redirect(base_url(), 'auto');
		
	}
}
