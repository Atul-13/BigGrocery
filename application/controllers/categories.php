<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/categories');		
	}

	public function FethCategories(){
		
	}

}

/* End of file categories.php */
/* Location: ./application/controllers/categories.php */