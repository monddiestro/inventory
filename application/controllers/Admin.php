<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
        $this->load->view('head');
        $this->load->view('sidebar');
        $this->load->view('body');
        $this->load->view('footer');
        $this->load->view('script');
	}
}
