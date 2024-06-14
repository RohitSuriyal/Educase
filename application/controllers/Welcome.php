<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()

	{
		$this->load->model("Blog_model");


		$result = $this->Blog_model->getblogdata();
		
		$data = array(

			"data" => $result,
		);


		$this->load->view('home',$data);
	}

	public function Blog()
	{

		$this->load->view("Blog");
	}
	public function school()
	{
		$this->load->view("school");
	}
	public function School_details()
	{
		$this->load->view("School_info.php");
	}
	public function editor()
	{
		$this->load->view("editor");
	}
	public function blog_page($school_id){
		
		$id=$school_id;
		$this->load->model("Blog_model");
		$output=$this->Blog_model->getspecificblog($id);
		$data=array(
			"data"=>$output


		);
		$this->load->view("Single_blog");


		

		
		


	}
}
