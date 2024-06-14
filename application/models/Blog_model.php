<?php
class Blog_model  extends CI_Model
{

    public function getblogdata()
    {

        $result = $this->db->get("blog")->result(); // Fetches all rows as objects
        if ($result) {

            return $result;
        } else {
            return false;
        }
    }
    public function getspecificblog($id){
        $query = $this->db->get_where('blog', array('id' => $id));
        $output=$query->result();
       if($output){
         return $output;

       }
       else{
        return false;
          
       }





    }
}
