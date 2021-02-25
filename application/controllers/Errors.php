<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {
	
	public function error_404()
	{
		$data["heading"] = "404 Page Not Found";
		$data["message"] = "The page you requested was not found";
		$this->load->view('errors/html/mobile_404',$data);
	}
}
