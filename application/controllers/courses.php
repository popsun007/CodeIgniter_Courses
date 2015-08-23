<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller
{
	public function index()
	{
		$this->load->model('course');
		$courses = $this->course->get_course();
		$this->load->view('index', array("courses" => $courses));
	}
	public function add()
	{
		$this->load->model('course');
		$courses_infos = $this->course->add_course($this->input->post());
		$courses = $this->course->get_course();
		$this->load->view('index', array("courses" => $courses));
	}
}
?>