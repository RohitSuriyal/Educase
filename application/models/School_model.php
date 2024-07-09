<?php
class School_model  extends CI_Model
{

    public function getschooldata($id)
    {
        $this->db->where('school_id', $id);
        $overview = $this->db->get('school_overview')->result();
        $this->db->where('school_id', $id);
        $fee = $this->db->get('fee')->result();
        $this->db->where('id', $id);
        $basic_detail = $this->db->get("schools")->result();
        $this->db->where("school_id", $id);
        $eligiblity = $this->db->get("eligibilty")->result();
        $this->db->where("school_id", $id);
        $facility = $this->db->get("facility")->result();
        $this->db->where("school_id",$id);
        $images=$this->db->get("gallery")->result();




        $data = array(
            "overview" => $overview,
            "fee" => $fee,
            "basic_detail" => $basic_detail,
            "eligiblity" => $eligiblity,
            "facility"=>$facility,
            "images"=>$images,


        );

        return $data;
    }
    public function getschooldetail($data, $id)
    {
        $this->db->where('class', $data);
        $this->db->where('school_id', $id);

        $query = $this->db->get('fee');
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function getthefilterddata($class, $board, $school)
    {

        $result = [];
        $school_id=[];
        if (!empty($class)) {
            foreach ($class as $c) {
                // Query to fetch ID of the class\\
                $this->db->distinct();

                $this->db->select('school_id');
                $this->db->from('fee');
                $this->db->where('class', $c);
                $this->db->where('amount !=', 0); // Add this line to check if amount is not equal to 0
                $query = $this->db->get();
                foreach ($query->result() as $row) {
                    $school_id[] = $row->school_id;
                }
            }
                

                if (!empty($school_id)) {

                    
                   





                    // Step 2: Get rows based on IDs and optional board and schoolType conditions
                    $this->db->select('schools.*, school_overview.ownership');
                    $this->db->from('schools');
                    $this->db->join('school_overview', 'schools.id = school_overview.school_id', 'left');
                    $this->db->where_in('schools.id', $school_id);





                    if (!empty($board)) {
                        $this->db->group_start();

                        //resulted data pe boards dekhenge
                        foreach ($board as $b) {
                            $this->db->or_where('schools.board', $b);
                        }
                        $this->db->group_end();
                    }

                    //resulted pe school_type

                    if (!empty($school)) {
                        $this->db->group_start();

                        foreach ($school as $school) {
                            $this->db->or_where('school_overview.ownership', $school);
                        }
                        $this->db->group_end();
                    }
                    

                    $query_data = $this->db->get();
                    if ($query_data->num_rows() > 0) {
                        return $query_data->result();
                        // print_r($query_data->result());
                        // die; // Return data as array of objects
                    } else {
                        return array(); // Return empty array if no rows found
                    }
                } else {
                    return array(); // Return empty array if no IDs found
                }
            
        } else if (!empty($board)) {

            $this->db->select("*");
            $this->db->from("schools");
            $this->db->where_in("board", $board);
            $query = $this->db->get();
            foreach ($query->result() as $row) {
                $school_id[] = $row->id;
            }
            if(!empty($school_id)){
                $this->db->select('schools.*, school_overview.ownership');
                $this->db->from('schools');
                $this->db->join('school_overview', 'schools.id = school_overview.school_id', 'left');
                $this->db->where_in('schools.id', $school_id);
              }

              if (!empty($school)) {
                $this->db->group_start();

                foreach ($school as $school) {
                    $this->db->or_where('school_overview.ownership', $school);
                }
                $this->db->group_end();
            }
            $query_data = $this->db->get();




            
            $output = $query_data->result();
            return $output;



          



        } else if (!empty($school)) {
            $this->db->select("school_id");
            $this->db->from("school_overview");
            $this->db->where_in("ownership", $school);
            $query = $this->db->get();

            if ($query->num_rows() > 0) {

                //ids ka array
                $ids = $query->result_array();

                $id_array = array_column($ids, 'school_id');
                $this->db->select("*");
                $this->db->from("schools");
                $this->db->where_in("id", $id_array);

                $output = $this->db->get()->result();
                return $output;
            }
        }
    }
    public function getsearchdata($input)
    {
        $this->db->select('id, name,city');
        $this->db->like('name', $input);
        $schools = $this->db->get('schools')->result_array();

        // Fetch blog IDs and titles
        $this->db->select('id, heading');
        $this->db->like('heading', $input);
        $blogs = $this->db->get('blog')->result_array();

        // Fetch location IDs and names
        $this->db->select('id,city,name');
        $this->db->like('city', $input);
        $locations = $this->db->get('schools')->result_array();
        $results = [];
        foreach ($schools as $school) {
            $results[] = [
                'id' => $school['id'],
                'type' => 'school',
                'name' => $school['name'],
                "location" => $school["city"],
            ];
        }

        // Add blog results
        foreach ($blogs as $blog) {
            $results[] = [
                'id' => $blog['id'],
                'type' => 'blog',
                'name' => $blog['heading']
            ];
        }

        // Add location results
        foreach ($locations as $location) {
            $results[] = [
                'id' => $location['id'],
                'type' => 'location',
                'name' => $location['name'],
                "location" => $location["city"],

            ];
        }



        return $results;
    }
}
