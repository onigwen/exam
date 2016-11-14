<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle extends CI_Controller {
	
	function _constructor(){
		 parent::__construct();
		 $this->load->model("vehiclemodel");
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
}