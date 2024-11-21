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
		$data['og_image'] = base_url('assets/images/findmyschool.jpeg');
		$data['meta_description'] = "FindMySchool is a user-friendly platform designed to help parents find the perfect school for their children. Whether you're looking for schools based on location, fee structure, or curriculum, FindMySchool makes the search process easy and efficient. The website allows you to browse through detailed school listings, compare facilities, view reviews, and make informed decisions. You can also read blog articles on school-related topics, explore school fee structures, and get insights into each institution's unique offerings. FindMySchool simplifies the search for the best educational environment for your child.";
		// $data['meta_keywords'] = 'blog, post'; // Meta keywords


		$data['og_url'] = 'findmyschools.co.in'; // Open Graph URL
		// $data['og_type'] = 'website'; // Open Graph type
		$data['og_title'] = "Find My School - Discover the Best Schools for Your Child";
		$data['title'] = "Findmyschool";


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
		$name = $this->input->post("student");
		$email = $this->input->post('email');
		$phone_no = $this->input->post("phone_no");
		$school_name = $this->input->post("school_name");
		$city = $this->input->post("city");
		$parent = $this->input->post("parent");

		$date = $this->input->post("current_date");
		$time = $this->input->post("current_time");


		// Prepare data for Google Sheets
		$formData = [
			[$name, $email, $phone_no, $school_name, $city, $parent, $date, $time] // Add more fields as necessary
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
		$this->session->unset_userdata(array('class_data', 'class', 'board', 'school_type', "inputchanged", "city_id"));
		$this->load->model("Blog_model");


		$result = $this->Blog_model->get_blog_page_data();
		$result['title'] = "Findmyschool,blogs";
		$result['meta_description'] = "Discover insightful articles on school education, admission tips, curriculum highlights, and student life. Stay informed with expert advice and resources for choosing the best schools, navigating academics, and supporting student success.";

		$result['og_url'] = "https://findmyschool.net/blog";




		$this->load->view("Blog", $result);
	}
	public function school()
	{
		$this->session->unset_userdata(array('class_data', 'class', 'board', 'school_type', "inputchanged", "city_id"));


		$this->load->model("Blog_model");


		$result = $this->Blog_model->getschooldata();
		$data['title'] = "Findmyschool,School";
		$data['meta_description'] = "Findmyschool provides detailed information on schools, including admission processes, curriculum, facilities, and more. Explore school profiles to make informed decisions about the best education options for your child.";
		$data['og_url'] = "https://findmyschool.net/school";



		$data['result'] = $result;




		$this->load->view("school", $data);
	}
	public function School_details($id, $cleaned_heading)

	{
		$school_id = $id;


		$this->load->model("School_model");

		$result = $this->School_model->getschooldata($school_id);
       
		$data["title"]=$result["basic_detail"][0]->name;
	    $data["meta_description"]=$result["overview"][0]->content;
        $data["data"]=$result;		

		









		$this->load->view("School_info.php", $data);
	}
	public function editor()
	{
		$this->load->view("editor");
	}
	public function blog_page($id, $heading)
	{

		$id = $id;
		$this->load->model("Blog_model");
		$output = $this->Blog_model->getspecificblog($id);
		$id = $output["output"][0]->School;
		if ($id) {

			$schoolname = $this->Blog_model->get_the_school_name($id);
			$output["schoolname"] = $schoolname;
			$output["schoolid"] = $id;
			$output['title'] = $output["output"][0]->heading; // Set the title for the page
			$output['meta_description'] = substr(trim(strip_tags($output["output"][0]->body)), 0, 10);
			$output['meta_keywords'] = 'blog, post'; // Meta keywords

			// Open Graph meta tags
			$output['og_title'] = $output["output"][0]->heading; // Open Graph title
			$output['og_description'] =  substr(trim(strip_tags($output["output"][0]->body)), 0, 200);; // Open Graph description
			$output['og_image'] = $output["output"][0]->image; // Open Graph image
			// $output['og_url'] = 'https://findmyschools.co.in/blog/' . $id; // Open Graph URL
			$output['og_type'] = 'website'; // Open Graph type

			$this->load->view("Single_blog", $output);

			// return redirect("/school");
		} else {
			$output['title'] = $output["output"][0]->heading; // Set the title for the page
			$output['meta_description'] = substr(trim(strip_tags($output["output"][0]->body)), 0, 10);
			$output['meta_keywords'] = 'blog, post, example'; // Meta keywords

			// Open Graph meta tags
			$output['og_title'] = $output["output"][0]->heading; // Open Graph title
			$output['og_description'] = substr(trim(strip_tags($output["output"][0]->body)), 0, 200);; // Open Graph description
			$output['og_image'] = $output["output"][0]->image;

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

	public function newformdata()
	{
		// Get the city_id from the POST request if it exists; otherwise, get it from the session.
		$city = $this->input->post("city_id") ? $this->input->post("city_id") : $this->session->userdata("city_id");




		// Store it in session data
		$this->session->set_userdata('city_id', $city);

		$citynew = $this->session->userdata('city_id');
		$class = $this->input->post('class');
		$board = $this->input->post('board');
		$school = $this->input->post('school_type');
		if (!empty($class) || !empty($board) || !empty($school)) {
			// If any of the values are present, remove the city session
			$this->session->unset_userdata('city_id');
		}

		$this->load->model("School_model");
		$output = $this->School_model->getthefilterddata($class, $board, $school, $citynew);






		$this->session->set_userdata('class', $class);
		$this->session->set_userdata('board', $board);
		$this->session->set_userdata('school_type', $school);
		$this->session->set_userdata('output', $output);  // Store filtered data

		$this->load->model("Blog_model");


		$result = $this->Blog_model->getschooldata();


		$data = [
			'output' => $output,
			'result' => $result
		];




		$this->load->view("school", $data);
	}
}
