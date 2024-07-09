<?php
class Blog_model  extends CI_Model
{

    public function getblogdata()
    {

        $result = $this->db->get("blog")->result();
        // Fetches all rows as objects
        if ($result) {

            return $result;
        } else {
            return false;
        }
    }
    public function getspecificblog($id)
    {
        $query = $this->db->get_where('blog', array('id' => $id));
        $output = $query->result();

        if (!empty($output)) {

            $category = $output[0]->category;


            $this->db->where('category', $category);
            $query = $this->db->get('blog');
            $details = $query->result();

            $data = array(
                "output" => $output,
                "category" => $details,
            );


            return $data;
        } else {
            return false;
        }
    }
    public function getschooldata()
    {

        $all = $this->db->get("schools")->result();
        $day_school_id =array();
        $boarding_school_id=array();
        $day_boarding_id=array();
        $play_school_id=array();
        foreach ($all as $d) {


            $category = $d->school_type;

            $array = explode(',', $category);
           
            foreach ($array as $sc) {
                $sc = trim($sc);
                if ($sc == "Day School") {
                    $day_school_id[] = $d->id; // Assuming $d->id is the ID you want to push
                }
                if ($sc == "Boarding School") {
                    $boarding_school_id[] = $d->id; // Assuming $d->id is the ID you want to push
                }
                if ($sc == "Day Boarding School") {
                    $day_boarding_id[] = $d->id; // Assuming $d->id is the ID you want to push
                }
                if ($sc == "Play School") {
                    $play_school_id[] = $d->id; // Assuming $d->id is the ID you want to push
                }
               
            }
            
        }
        $this->db->where_in('id', $day_school_id);
        $query = $this->db->get('schools');
        $day_school=$query->result();
        $this->db->where_in('id', $boarding_school_id);
        $query = $this->db->get('schools');
        $boarding_school=$query->result();
        $this->db->where_in('id', $day_boarding_id);
        $query = $this->db->get('schools');
        $day_boarding_school=$query->result();
        $this->db->where_in('id', $play_school_id);
        $query = $this->db->get('schools');

        $play_school=$query->result();


        $data=array(
            "all"=>$all,
            "day_school"=>$day_school,
            "boarding_school"=>$boarding_school,
            "day_boarding_school"=>$day_boarding_school,
            "play_school"=>$play_school
        );
        return $data;


        



      
       
        
    }
    public function getschooldata_again(){
        $all = $this->db->get("schools")->result();
        $day_school_id =array();
        $boarding_school_id=array();
        $day_boarding_id=array();
        $play_school_id=array();
        foreach ($all as $d) {


            $category = $d->school_type;

            $array = explode(',', $category);
           
            foreach ($array as $sc) {
                $sc = trim($sc);
                if ($sc == "Day School") {
                    $day_school_id[] = $d->id; // Assuming $d->id is the ID you want to push
                }
                if ($sc == "Boarding School") {
                    $boarding_school_id[] = $d->id; // Assuming $d->id is the ID you want to push
                }
                if ($sc == "Day Boarding School") {
                    $day_boarding_id[] = $d->id; // Assuming $d->id is the ID you want to push
                }
                if ($sc == "Play School") {
                    $play_school_id[] = $d->id; // Assuming $d->id is the ID you want to push
                }
               
            }
            
        }
        $this->db->where_in('id', $day_school_id);
        $query = $this->db->get('schools');
        $day_school=$query->result();
        $this->db->where_in('id', $boarding_school_id);
        $query = $this->db->get('schools');
        $boarding_school=$query->result();
        $this->db->where_in('id', $day_boarding_id);
        $query = $this->db->get('schools');
        $day_boarding_school=$query->result();
        $this->db->where_in('id', $play_school_id);
        $query = $this->db->get('schools');

        $play_school=$query->result();


        $data=array(
           
            "day_school"=>$day_school,
            "boarding_school"=>$boarding_school,
            "day_boarding_school"=>$day_boarding_school,
            "play_school"=>$play_school
        );
        return $data;





    }
    public function getallschool(){
        $all=$this->db->get("schools")->result();
        if($all){
            return $all;
        }
        else{
            return false;
        }

    }









    public function get_blog_page_data()
    {
        $all = $this->db->get("blog")->result();

        $this->db->where("category", "Technology");
        $technology = $this->db->get("blog")->result();
        $this->db->where("category", "Education");
        $education = $this->db->get("blog")->result();
        $this->db->where("category", "School");
        $school = $this->db->get("blog")->result();
        $data = array(
            "all" => $all,
            "technology" => $technology,
            "education" => $education,
            "school" => $school,

        );
        if ($data) {
            return $data;
        }
    }
}
