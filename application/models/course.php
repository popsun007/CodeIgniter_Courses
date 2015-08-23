<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Course extends CI_Controller
{
	public function get_course()
	{
		return $this->db->query("SELECT * FROM courses")->result_array();
	}
	public function add_course($course)
	{
		$query = "INSERT INTO courses (name, description, created_at) 
						VALUES (?, ?, now())";
		$values = array($course['course_name'], $course['course_description']);
		return $this->db->query($query, $values);
	}
	public function delete($id)
	{
		$query = "DELETE FROM courses
				WHERE id=?";
		$value = array($id);
		return $this->db->query($query, $value);
	}
}

 ?>