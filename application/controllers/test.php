<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends My_Controller {

	public function a(){
		$this->load->model('UsersModel');
		echo "<pre>";
		print_r($this->UsersModel->FethcUserInfoForOrder(5));
	}

	public function b(){
		$this->load->model('OrderModel');
		print_r($this->OrderModel->getOrderListByUserId(5,1,1));
	}

	public function c(){
		$this->load->helper('users');
		print_r(getUserName(5));
	}

	public function d(){
		$this->load->view('dataTbl');
	}

	public function e(){
		$this->load->model('OffersModel');
		echo "<pre>";
		print_r($this->OffersModel->getOfferedProducts(1,2));		
	}
}

/* End of file test.php */
/* Location: ./application/controllers/test.php */