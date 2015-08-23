<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller
{
	public function index()
	{
		if(isset($courses))
		{
			$this->load->view('index');
		}
		else
		{
			redirect('/courses');
		}
	}
}
?>