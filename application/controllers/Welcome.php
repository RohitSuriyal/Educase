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
		$all=$this->Blog_model->getallschool();


		$data = array(

			"data" => $result,
			"all"=>$all,
		);


		$this->load->view('Home', $data);
	}

	public function Blog()

	{
		$this->load->model("Blog_model");


		$result = $this->Blog_model->get_blog_page_data();

		

		$this->load->view("Blog", $result);
	}
	public function school()
	{
		$this->session->unset_userdata(array('class_data', 'class', 'board', 'school',"inputchanged"));



		$this->load->model("Blog_model");


		$result = $this->Blog_model->getschooldata();
		


	



		$this->load->view("school", $result);
	}
	public function School_details($id)

	{
		$school_id = $id;


		$this->load->model("School_model");

		$result = $this->School_model->getschooldata($school_id);


		$data = array(
			"data" => $result,
		);









		$this->load->view("School_info.php", $data);
	}
	public function editor()
	{
		$this->load->view("editor");
	}
	public function blog_page($school_id)
	{

		$id = $school_id;
		$this->load->model("Blog_model");
		$output = $this->Blog_model->getspecificblog($id);

		
		

		$this->load->view("Single_blog", $output);
	}
	public function feedetail()
	{
		$class = $this->input->post("selected");
		$id = $this->input->post("id");

		$this->load->model("School_model");
		$result = $this->School_model->getschooldetail($class, $id);
		$feename = [];
		$amount = [];
		$frequency = [];
		foreach ($result as $index => $row) {
			$feename[] = $row->feename;
			$amount[] = $row->amount;
			$frequency[] = $row->frequency;
			$class = $row->class;
		}
		$data = array(
			"feename" => $feename,
			"amount" => $amount,
			"frequency" => $frequency,
			"class" => $class,
		);
		echo json_encode($data);
	}
	public function new_render_school_info()
	{
		
			// Handle POST request
			$class = $this->input->post("class_new");
			$board = $this->input->post("board");
			$school = $this->input->post("school");
			
			

			$this->load->model("School_model");
			$output = $this->School_model->getthefilterddata($class, $board, $school);
			

			$this->session->set_userdata('class_data', $output);
			$this->session->set_userdata('class', $class);
			$this->session->set_userdata('board', $board);
			$this->session->set_userdata('school', $school);
			$this->session->set_userdata('inputchanged', $school);

			echo json_encode($output);
	
	}
	public function viewschoolagain(){

		$this->load->model("Blog_model");


		$result = $this->Blog_model->getschooldata_again();
		


		$this->load->view("school",$result);
	}
	
	public function searchquery(){
		 $input=$this->input->post("input");
		 $this->load->model("School_model");
		 $output=$this->School_model->getsearchdata($input);

		 if($output){
			echo json_encode($output);
		 }
		 else{
			echo json_encode("this is error");
		 }

	}
}
