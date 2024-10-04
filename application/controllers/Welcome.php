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
		$all = $this->Blog_model->getallschool();


		$data = array(

			"data" => $result,
			"all" => $all,
		);
		
           
			// $data['title'] = "Findmyschool, best website to find the school for your child"; // Set the title for the page
            // $data['meta_description'] = "FindMySchool is a user-friendly platform designed to help parents find the perfect school for their children. Whether you're looking for schools based on location, fee structure, or curriculum, FindMySchool makes the search process easy and efficient. The website allows you to browse through detailed school listings, compare facilities, view reviews, and make informed decisions. You can also read blog articles on school-related topics, explore school fee structures, and get insights into each institution's unique offerings. FindMySchool simplifies the search for the best educational environment for your child.";
            // $data['meta_keywords'] = 'blog, post'; // Meta keywords

            // // Open Graph meta tags
            // $data['og_title'] ="Findmyschool, best website to find the school for your child"; // Open Graph title
            // $data['og_description'] = 'This is the best school in Delhi.'; // Open Graph description
            // $data['og_image'] = base_url('assets/images/school-8391795_1920.jpg');

            // $data['og_url'] = 'findmyschools.co.in'; // Open Graph URL
            // $data['og_type'] = 'website'; // Open Graph type



		$this->load->view('Home', $data);
	}
	public function __construct()
	{
		parent::__construct();

		// Load the Google API Client Library
		require_once FCPATH . 'vendor/autoload.php';
	}

	public function formdata()
	{
		// Load Google Client

		$client = new \Google_Client();
		$client->setApplicationName('Google Sheets API with CodeIgniter');
		$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
		$client->setAuthConfig(APPPATH . 'google-sheets-credentials.json');
		$client->setAccessType('offline');

		$service = new \Google_Service_Sheets($client);
		$spreadsheetId = '1nlNZDeFWzt0f1dXpUK_xP4JlujUTs6sdpCy26HPJrhU'; // Replace with your actual spreadsheet ID
		$range = 'Sheet1!A1'; // Replace with your desired range

		// Get form data
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone_no = $this->input->post("phone_no");
		$school_name = $this->input->post("school_name");
		$city = $this->input->post("city");
		$parent=$this->input->post("parent");
		$student=$this->input->post("student");
		$date=$this->input->post("current_date");
		$time=$this->input->post("current_time");


		// Prepare data for Google Sheets
		$formData = [
			[$name, $email, $phone_no, $school_name, $city,$parent,$student,$date,$time] // Add more fields as necessary
		];

		$body = new \Google_Service_Sheets_ValueRange([
			'values' => $formData
		]);


		$params = [
			'valueInputOption' => 'RAW'
		];


		// Append data to Google Sheets

		$result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);

		echo json_encode("this is success");
	}
	public function Blog()

	{
		$this->load->model("Blog_model");


		$result = $this->Blog_model->get_blog_page_data();



		$this->load->view("Blog", $result);
	}
	public function school()
	{
		$this->session->unset_userdata(array('class_data', 'class', 'board', 'school', "inputchanged"));



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
		$id=$output["output"][0]->School;
		if($id){

			$schoolname=$this->Blog_model->get_the_school_name($id);
			$output["schoolname"]=$schoolname;
			$output["schoolid"]=$id;
			$output['title'] = $output["output"][0]->heading; // Set the title for the page
            $output['meta_description'] = substr(trim(strip_tags($output["output"][0]->body)), 0, 10);
            $output['meta_keywords'] = 'blog, post'; // Meta keywords

            // Open Graph meta tags
            $output['og_title'] = $output["output"][0]->heading; // Open Graph title
            $output['og_description'] = 'This is the best school in Delhi.'; // Open Graph description
            $output['og_image'] = $output["output"][0]->image; // Open Graph image
            $output['og_url'] = 'https://findmyschools.co.in/blog/' . $id; // Open Graph URL
            $output['og_type'] = 'website'; // Open Graph type

			$this->load->view("Single_blog", $output);
		}
		else{
			$output['title'] = 'Raftaar'; // Set the title for the page
            $output['meta_description'] = 'This is a brief description of the blog post.'; // Meta description
            $output['meta_keywords'] = 'blog, post, example'; // Meta keywords

            // Open Graph meta tags
            $output['og_title'] = 'Best School'; // Open Graph title
            $output['og_description'] = 'This is the best school in Delhi.'; // Open Graph description
            $output['og_image'] = 'https://img.etimg.com/thumb/width-1200,height-900,imgsize-151488,resizemode-75,msid-102789039/magazines/panache/rapper-raftaar-to-make-acting-debut-with-web-series-bajao-this-month.jpg'; // Open Graph image
            $output['og_url'] = 'https://findmyschools.co.in/blog/' . $id; // Open Graph URL
            $output['og_type'] = 'website'; // Open Graph type

			$this->load->view("Single_blog", $output);

		}

		
		




		
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
	public function viewschoolagain()
	{

		$this->load->model("Blog_model");


		$result = $this->Blog_model->getschooldata_again();



		$this->load->view("school", $result);
	}

	public function searchquery()
	{
		$input = $this->input->post("input");
		$this->load->model("School_model");
		$output = $this->School_model->getsearchdata($input);

		if ($output) {
			echo json_encode($output);
		} else {
			echo json_encode("this is error");
		}
	}
	public function cityinput()
	{

		$city = $this->input->post("cityname");
		$this->load->model("School_model");
		$output = $this->School_model->getcities($city);
		if ($output) {
			echo json_encode($output);
		} else {
			echo json_encode("error");
		}
	}
}
