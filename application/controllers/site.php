<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function user_profile()
	{
		$this->load->view('user_profile');
	}

	public function user_message()
	{
		$this->load->view('user_message');
	}

	public function twilio()
	{
		$this->load->view('twilio');
	}

	public function text_confirmation()
	{
		$this->load->view('text_confirmation');
	}

	public function site_functions()
	{
		$this->load->view('site_functions');
	}

}
