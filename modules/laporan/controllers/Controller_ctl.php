<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Controller
{
	public function index()
	{
		$this->load->view('index');
	}

    public function pendapatan()
	{
		$this->load->view('pendapatan');
	}
}
