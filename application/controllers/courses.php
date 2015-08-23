<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}
	public function index()
	{
		$this->go_main_page();
	}
	public function add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("course_name", "Course Name", "required|min_length[15]");
		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			$this->go_main_page();
		}
		else
		{
			$this->load->model('course');
			$courses_infos = $this->course->add_course($this->input->post());
			$this->go_main_page();
		}
	}
	public function destroy($id)
	{
		$this->load->model('course');
		$this->course->delete($id);
		$this->go_main_page();
	}
	public function go_main_page()
	{
		$this->load->model('course');
		$courses = $this->course->get_course();
		$this->load->view('index', array("courses" => $courses));
	}
}
?>