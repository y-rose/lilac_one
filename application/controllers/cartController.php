<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cartController extends CI_Controller {

	function cartController(){
		parent::__construct();
		//1,如果不添加这个方法，在前端使用url的时候会出问题
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('cart');
	}
}
