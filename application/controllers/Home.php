<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$content=$this->load->view('home');
		$this->load->view('template',$content);
	}
}
