<?php// application/controllers/YourController.php

class YourController extends CI_Controller {
   
   public function index() {
       // Load initial data or render the initial view
       $data['initial_school_info'] = $this->school_model->get_school_info();
       $this->load->view('school_view', $data);
   }

   public function ajax_update_school() {
       // Process AJAX request to update school information
       // Example: Assume you receive new school data via POST
       $new_school_info = array(
           'name' => $this->input->post('name'),
           'location' => $this->input->post('location'),
           // Add more fields as necessary
       );

       // Update database or perform necessary operations
       $this->school_model->update_school_info($new_school_info);

       // After update, fetch updated school information
       $updated_school_info = $this->school_model->get_school_info(); // Adjust this based on your model logic

       // Store updated school information in session storage
       $this->session->set_userdata('updated_school_info', $updated_school_info);

       // Return updated school information to the view as JSON
       echo json_encode(array('status' => 'success', 'updated_school_info' => $updated_school_info));
   }
}


//this is the view
// <!-- application/views/school_view.php -->

// <!-- Display initial school information -->
<div id="school-info">
   <h2>School Information</h2>
   <p>Name: <?php echo $initial_school_info['name']; ?></p>
   <p>Location: <?php echo $initial_school_info['location']; ?></p>
   <!-- Add more details as needed -->
</div>

<!-- Update form -->
<form id="update-school-form">
   <label for="name">Name:</label>
   <input type="text" id="name" name="name" required>
   <br>
   <label for="location">Location:</label>
   <input type="text" id="location" name="location" required>
   <br>
   <button type="submit">Update School Information</button>
</form>

<!-- JavaScript for AJAX -->
<script>
   $(document).ready(function() {
       // Handle form submission for updating school information
       $('#update-school-form').submit(function(event) {
           event.preventDefault(); // Prevent the form from submitting normally

           // Get form data
           var formData = {
               name: $('#name').val(),
               location: $('#location').val()
               // Add more fields as needed
           };

           // Perform AJAX call to update school information
           $.ajax({
               url: '<?php echo base_url('your_controller/ajax_update_school'); ?>',
               method: 'POST',
               dataType: 'json',
               data: formData,
               success: function(response) {
                   if (response.status === 'success') {
                       // Store updated school information in session storage
                       sessionStorage.setItem('updated_school_info', JSON.stringify(response.updated_school_info));

                       // Reload the page
                       location.reload();
                   } else {
                       alert('Failed to update school information');
                   }
               },
               error: function() {
                   alert('Error occurred while updating school information');
               }
           });
       });

       // Function to render updated school information on page load
       function renderUpdatedSchoolInfo() {
           var updatedSchoolInfo = sessionStorage.getItem('updated_school_info');
           if (updatedSchoolInfo) {
               updatedSchoolInfo = JSON.parse(updatedSchoolInfo);
               $('#school-info').html('<h2>School Information</h2>' +
                                      '<p>Name: ' + updatedSchoolInfo.name + '</p>' +
                                      '<p>Location: ' + updatedSchoolInfo.location + '</p>');
               // Add more details as needed
           }
       }

       // Call renderUpdatedSchoolInfo() on page load
       renderUpdatedSchoolInfo();
   });
</script>
//for the data base transfer
Step 1:-

scp -i "C:\Users\svksi\Downloads\test.pem" "C:\Users\svksi\Downloads\educase.sql" ubuntu@15.207.248.151:/home/ubuntu
scp "C:\Users\svksi\Downloads\educase.sql" ubuntu@3.110.88.29:/home/ubuntu

Note:- fingerprint wale ko yes kr dena hai:-

scp -i /path/to/your-key.pem /path/to/local/database.sql ubuntu@your-ec2-instance-ip:/home/ubuntu

step :-2

ssh -i /path/to/your-key.pem ubuntu@your-ec2-instance-ip

Replace /path/to/your-key.pem with the path to your .pem key file, ubuntu with your instance's username, and your-ec2-instance-ip with your EC2 instance's public IP address or DNS name.

in the aws terminal
1)cd /home/ubuntu
2)mysql -u root -p schooldata < educase.sql;
3)mysql -u root -p
4)SHOW DATABASES;
5)than check the datbales in the databse in which you have added;

ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'rsuriyal';
do it for the root user only;


