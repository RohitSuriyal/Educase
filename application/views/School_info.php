<?php $this->load->view('common/header'); ?>
<h1 class="text-center mt-2 roboto bold">Swiss Cottage School</h1>
<p class="text-center">Bijwasan New Delhi-110061  (Opp. Sector.- 23 & Palam Vihar) India</p>
<p class="text-center "><button class="btn btn-primary px-5 bold roboto">Admission Enquiry</button></p>
<hr style="height:2px">
<div class="row">
    <div class="col-12 bold text-dark">
        <h1>
            School Information
        </h1>
    </div>


</div>
<div class="tabs" style="display:flex!important;gap:4rem!important;justify-content: flex-start!important">
    <div class="tab active roboto bold " onclick="openTab(event, 'tab1')">Overview</div>
    <div class="tab roboto bold" onclick="openTab(event, 'tab2')">Admission</div>
    <div class="tab roboto bold" onclick="openTab(event, 'tab3')">Facilities</div>
    <div class="tab roboto bold" onclick="openTab(event, 'tab4')">Gallery</div>
</div>

<div class="tab-content" style="padding: 0!important;margin:2% 1%">
    <div id="tab1" class="tab-pane active">

        <div class="row">
            <div class="col-md-7 grey" style="line-height:30px">
                Swiss Cottage, a progressive, co-educational Senior Secondary School in Salahpur, New Delhi, prides itself on a rich blend of academic excellence and holistic development. Affiliated to CBSE, the school is ensconced within an expansive, green landscape dotted with tall silver oaks, justifying its picturesque name. The classrooms are well-lit, spacious, and fully air-conditioned, with a student-teacher ratio of 1:25, ensuring a conducive learning environment. With fully-equipped, state-of-the-art laboratories dedicated to subjects including Physics, Chemistry, Biology, Social Science, Language, and Computers, students gain hands-on experience that deepens their understanding. The school further provides extensive sports facilities, with grounds for Cricket, Badminton, Hockey, Football, Lawn Tennis, and Volleyball, along with a futuristic Skating Ring and an all-weather heated swimming pool, thereby ensuring a well-rounded, enriching educational experience.
                <h1 class="mt-3 roboto bold text-dark">School Stats</h1>
                <div class="mt-3 p-3 grey" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);">
                    <div class="row ">

                        <div class="col-md-4 ">
                            <p class="bold roboto text-dark">Ownership</p>
                            <p class="roboto bold">Private
                            </p>

                        </div>
                        <div class="col-md-4">
                            <p class="bold roboto text-dark">Year of Establishment</p>
                            <p class="roboto bold">2007
                            </p>

                        </div>
                        <div class="col-md-4">
                            <p class="bold roboto text-dark">Ownership</p>
                            <p class="roboto bold">NA
                            </p>
                        </div>

                    </div>
                    <div class="row mt-3">

                        <div class="col-md-4">
                            <p class="bold text-dark">Board</p>
                            <p class="roboto bold">CBSE
                            </p>

                        </div>
                        <div class="col-md-4">
                            <p class="bold text-dark">Co-Ed Status</p>
                            <p class="roboto bold">Private
                            </p>

                        </div>
                        <div class="col-md-4">
                            <p class="bold text-dark">Campus Type</p>
                            <p class="roboto bold">Urban
                            </p>
                        </div>

                    </div>
                </div>
                <h1 class="mt-3 roboto bold text-dark">Academic Stats</h1>
                <div class="mt-3 p-3 grey" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);">
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <p class="px-4 bold text-dark">Student Teacher Ratio</p>
                                <p class="px-4 py-4 " style="font-size:5rem;color:#FF0000">25:1</p>
                            </div>

                        </div>
                        <div class="col-md-7">

                            <div class="row">
                                <div class="col-md-6">
                                    <p class="bold text-dark">Class Offered</p>
                                    <p class="text-dark">Nursery to 12th Grade</p>

                                </div>
                                <div class="col-md-6">
                                    <p class="bold text-dark">Language of Instruction</p>
                                    <p class="text-dark">English</p>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="bold text-dark">Class Offered</p>
                                    <p class="text-dark">Nursery to 12th Grade</p>

                                </div>
                                <div class="col-md-6">
                                    <p class="bold text-dark">Language of Instruction</p>
                                    <p class="text-dark">English</p>

                                </div>

                            </div>


                        </div>


                    </div>



                </div>

            </div>
            <div class="col-md-5">
                <div class="col-5 bold text-dark">
                    <h3 class="roboto bold my-3">Near By School
                    </h3>

                </div>
                <div class="row mt-2 margin_0" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);">
                    <div class="col-lg-5" style="padding:0px 0px!important">
                        <img height="100%" width="100%" style="object-fit:cover" src="<?php echo IMG_URL . "Rectangle 42 (4).png" ?>">
                        </img>

                    </div>
                    <div class="col-lg-7">
                        <h4>Name Of School</h4>
                        <span><img src="<?php echo IMG_URL . "map-pin.png" ?>"></img></span>Sec 56, Gurugram
                        <div class="row">
                            <div class="col-md-6">
                                <div class="">
                                    <p style="margin-bottom:0.4rem">Class Offered</p>
                                    <p style="margin-bottom:0.4rem">Pre-Nursery to 12th</p>
                                </div>
                                <div>
                                    <p style="margin-bottom:0.4rem">Student Facility Ratio</p>
                                    <p style="margin-bottom:0.4rem">1:25</p>

                                </div>

                            </div>
                            <div class="col-md-6">
                                <p style="margin-bottom:0.4rem">BOARD</p>
                                <p style="margin-bottom:0.4rem">CBSE</p>
                                <div class="d-flex justify-content-end">
                                    <button class="view_button px-3 m-3 py-1"> view_detail</button>
                                </div>

                            </div>

                        </div>


                    </div>

                </div>
                <div class="row mt-2 padding_0" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);">
                    <div class="col-lg-5" style="padding:0px 0px!important">
                        <img height="100%" width="100%" style="object-fit:cover" src="<?php echo IMG_URL . "Rectangle 42 (4).png" ?>">
                        </img>

                    </div>
                    <div class="col-lg-7">
                        <h4>Name Of School</h4>
                        <span><img src="<?php echo IMG_URL . "map-pin.png" ?>"></img></span>Sec 56, Gurugram
                        <div class="row">
                            <div class="col-md-6">
                                <div class="">
                                    <p style="margin-bottom:0.4rem">Class Offered</p>
                                    <p style="margin-bottom:0.4rem">Pre-Nursery to 12th</p>
                                </div>
                                <div>
                                    <p style="margin-bottom:0.4rem">Student Facility Ratio</p>
                                    <p style="margin-bottom:0.4rem">1:25</p>

                                </div>

                            </div>
                            <div class="col-md-6">
                                <p style="margin-bottom:0.4rem">BOARD</p>
                                <p style="margin-bottom:0.4rem">CBSE</p>
                                <div class="d-flex justify-content-end">
                                    <button class="view_button px-3 m-3 py-1"> view_detail</button>
                                </div>

                            </div>

                        </div>


                    </div>

                </div>
                <div class="row mt-2 padding_0" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);">
                    <div class="col-lg-5" style="padding:0px 0px!important">
                        <img height="100%" width="100%" style="object-fit:cover" src="<?php echo IMG_URL . "Rectangle 42 (4).png" ?>">
                        </img>

                    </div>
                    <div class="col-lg-7">
                        <h4>Name Of School</h4>
                        <span><img src="<?php echo IMG_URL . "map-pin.png" ?>"></img></span>Sec 56, Gurugram
                        <div class="row">
                            <div class="col-md-6">
                                <div class="">
                                    <p style="margin-bottom:0.4rem">Class Offered</p>
                                    <p style="margin-bottom:0.4rem">Pre-Nursery to 12th</p>
                                </div>
                                <div>
                                    <p style="margin-bottom:0.4rem">Student Facility Ratio</p>
                                    <p style="margin-bottom:0.4rem">1:25</p>

                                </div>



                            </div>
                            <div class="col-md-6">
                                <p style="margin-bottom:0.4rem">BOARD</p>
                                <p style="margin-bottom:0.4rem">CBSE</p>
                                <div class="d-flex justify-content-end">
                                    <button class="view_button px-3 m-3 py-1"> view_detail</button>
                                </div>

                            </div>

                        </div>


                    </div>

                </div>




            </div>



        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="<?php echo IMG_URL . "Support operator helps to solve the problem.png" ?>"></img>

            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <h2>Have a Query? Reach Out!</h2>
                <div>
                    Need to know more about a school or location? Want to know about any specific detail about a school, fee structure and more? Wait no more! Raise a query today and reach out to the team. We are available 24*7 to solve your queries and extend our support!
                </div>


            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-center">
                <button class="btn btn-primary my-5 px-4">Need Help?</button>

            </div>

        </div>
        <h2 class="text-center">Frequently Asked Question</h2>
        <div class="row position-relative mt-3" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1)">

            <li class="border list_button roboto p-3  list-unstyled d-flex justify-content-between position-relative roboto bold">
                What is the Swiss Cottage School, Bijwasan Fee Structure
                <div class=" "><i style="font-size:1.5rem" class="fa-solid fa-chevron-down"></i></div>
            </li>
            <ul id="toggle_element_1" class="dropdown-list">
                <li class="list-unstyled">fhdfh</li>
                <li class="list-unstyled">sdgsdg</li>
                <li class="list-unstyled">sgdsdgsdg</li>
            </ul>
        </div>

        <div class="row position-relative mt-3" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1)">
            <li class="border list_button p-3 list-unstyled d-flex justify-content-between bold roboto ">
                What is the Swiss Cottage School, Bijwasan Fee Structure
                <div class=""><i style="font-size:1.5rem" class="fa-solid fa-chevron-down"></i></div>
            </li>
            <ul id="toggle_element_2" class="dropdown-list">
                <li class="list-unstyled">Another</li>
                <li class="list-unstyled">Example</li>
                <li class="list-unstyled">List</li>
            </ul>
        </div>
        <div class="row position-relative mt-3" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1)">
            <li class="border list_button p-3  list-unstyled d-flex justify-content-between bold roboto">
                What is the Swiss Cottage School, Bijwasan Fee Structure
                <div class=""><i style="font-size:1.5rem" class="fa-solid fa-chevron-down"></i></div>
            </li>
            <ul id="toggle_element_2" class="dropdown-list">
                <li class="list-unstyled">Another</li>
                <li class="list-unstyled">Example</li>
                <li class="list-unstyled">List</li>
            </ul>
        </div>
        <div class="row position-relative mt-3" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1)">
            <li class="border p-3 list_button list-unstyled d-flex justify-content-between roboto bold ">
                What is the Swiss Cottage School, Bijwasan Fee Structure
                <div class=""><i style="font-size:1.5rem" class="fa-solid fa-chevron-down"></i></div>
            </li>
            <ul id="toggle_element_2" class="dropdown-list">
                <li class="list-unstyled">Another</li>
                <li class="list-unstyled">Example</li>
                <li class="list-unstyled">List</li>
            </ul>
        </div>

    </div>
    <div id="tab2" class="tab-pane">
        <div class="row ">
            <div class="col-md-7  ">

                <div class="school_div_bg">
                    <div>
                        <h2 class="roboto bold py-2 p-4 mt-4">Fee Structure</h2>
                    </div>
                    <div class="row p-5 ">
                        <div class="col-md-6 ">
                            <h4>Fee Structure for Nursery</h4>
                        </div>
                        <div class="col-md-6 d-flex ">
                            <select class="px-4 py-2">
                                <option selected>Pre-Nursery</option>
                            </select>

                        </div>
                        <div class="row mt-5">
                            <div class="col-md-4">
                                <h5>Type</h5>
                                <p>Registration Fees</p>
                                <p>sassgg</p>
                                <p>sassgg</p>
                                <p>sassgg</p>

                            </div>
                            <div class="col-md-4">
                                <h5>Amount</h5>
                                <p>sassgg</p>
                                <p>sassgg</p>
                                <p>sassgg</p>
                                <p>sassgg</p>




                            </div>
                            <div class="col-md-4">
                                <h5>Frequency</h5>
                                <p>sassgg</p>
                                <p>sassgg</p>
                                <p>sassgg</p>
                                <p>sassgg</p>
                                <p>sassgg</p>
                                <p>sassgg</p>
                                <p>sassgg</p>


                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-5">
                <div>
                    <h3 class="roboto bold py-3">Near By School </h3>
                </div>

                <div class="row mt-2 margin_0" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);">
                    <div class="col-lg-5" style="padding:0px 0px!important">
                        <img height="100%" width="100%" style="object-fit:cover" src="<?php echo IMG_URL . "Rectangle 42 (4).png" ?>">
                        </img>

                    </div>
                    <div class="col-lg-7">
                        <h4>Name Of School</h4>
                        <span><img src="<?php echo IMG_URL . "map-pin.png" ?>"></img></span>Sec 56, Gurugram
                        <div class="row">
                            <div class="col-md-6">
                                <div class="">
                                    <p style="margin-bottom:0.4rem">Class Offered</p>
                                    <p style="margin-bottom:0.4rem">Pre-Nursery to 12th</p>
                                </div>
                                <div>
                                    <p style="margin-bottom:0.4rem">Student Facility Ratio</p>
                                    <p style="margin-bottom:0.4rem">1:25</p>

                                </div>

                            </div>
                            <div class="col-md-6">
                                <p style="margin-bottom:0.4rem">BOARD</p>
                                <p style="margin-bottom:0.4rem">CBSE</p>

                            </div>

                        </div>


                    </div>

                </div>
                <div class="row mt-2 margin_0" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);">
                    <div class="col-lg-5" style="padding:0px 0px!important">
                        <img height="100%" width="100%" style="object-fit:cover" src="<?php echo IMG_URL . "Rectangle 42 (4).png" ?>">
                        </img>

                    </div>
                    <div class="col-lg-7">
                        <h4>Name Of School</h4>
                        <span><img src="<?php echo IMG_URL . "map-pin.png" ?>"></img></span>Sec 56, Gurugram
                        <div class="row">
                            <div class="col-md-6">
                                <div class="">
                                    <p style="margin-bottom:0.4rem">Class Offered</p>
                                    <p style="margin-bottom:0.4rem">Pre-Nursery to 12th</p>
                                </div>
                                <div>
                                    <p style="margin-bottom:0.4rem">Student Facility Ratio</p>
                                    <p style="margin-bottom:0.4rem">1:25</p>

                                </div>

                            </div>
                            <div class="col-md-6">
                                <p style="margin-bottom:0.4rem">BOARD</p>
                                <p style="margin-bottom:0.4rem">CBSE</p>

                            </div>

                        </div>


                    </div>

                </div>


            </div>


        </div>
        <div class="row border" style="margin:0px 0px">
            <div class=" row d-flex justify-content-between p-3">
                <div class="col-md-8">
                    <h4>Admission Criteria & Eligibility</h4>
                </div>
                <div class="col-md-4 d-flex justify-content-center">

                    <select class="px-5 py-1">
                        <option selected>Pre-Nursery</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>Eligibility (Age Qualification)</p>
                    <p>2 Years to 3 Years as on </p>
                    <p>31 March, 2023</p>
                </div>
                <div class="col-md-4">
                    p>Eligibility (Age Qualification)</p>
                    <p>2 Years to 3 Years as on </p>
                    <p>31 March, 2023</p>

                </div>
                <div class="col-md-4">
                    <p>Eligibility (Age Qualification)</p>
                    <p>2 Years to 3 Years as on </p>
                    <p>31 March, 2023</p>

                </div>

            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <p>Written Test</p>
                    <p>2 Years to 3 Years as on </p>

                </div>
                <div class="col-md-4">

                    <p>Student Interaction</p>
                    <p>31 March, 2023</p>

                </div>
                <div class="col-md-4">
                    <p>Parents Interaction</p>
                    <p>2 Years to 3 Years as on </p>

                </div>

            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <p>Written Test</p>
                    <p>2 Years to 3 Years as on </p>
                    <p></p>

                </div>
                <div class="col-md-4">

                    <p>Student Interaction</p>
                    <p>31 March, 2023</p>

                </div>
                <div class="col-md-4">
                    <p>Parents Interaction</p>
                    <p>2 Years to 3 Years as on </p>

                </div>

            </div>
            <div class="row mt-4">
                <p>Office Timing</p>
                <p class="bold">09:30 AM TO 03:30 PM</p>

            </div>
            <div class="row mt-4">
                <p class="bold">Documents required at the time of application / admission</p>

                <div class="col-md-6">
                    <p>Transfer Certificate</p>
                    <p>Residence Proof</p>
                    <p>Birth Certificate</p>
                    <p>Photograph - Child</p>
                    <p>Photograph - Parents/Guardian</p>
                </div>
                <div class="col-md-6">
                    <p>Transfer Certificate</p>
                    <p>Residence Proof</p>
                    <p>Birth Certificate</p>
                    <p>Photograph - Child</p>
                    <p>Photograph - Parents/Guardian</p>


                </div>


            </div>
            <div class="row mt-4">
                <p class="bold">Documents required at the time of application / admission</p>
                <p>Photograph - Child</p>
                <p>Photograph - Parents/Guardian</p>



            </div>



        </div>





    </div>
    <div id="tab3" class="tab-pane">Content for Tab 3</div>
    <div id="tab4" class="tab-pane">Content for Tab 4</div>
</div>







<?php $this->load->view('common/footer'); ?>
<script>
    $(document).ready(function() {
        $(".border").click(function() {
            var $dropdownList = $(this).next('.dropdown-list');
            $dropdownList.slideToggle();
        });
    });
</script>