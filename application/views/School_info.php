<?php $this->load->view('common/header'); ?>
<style>
    .tick-wrapper {
        display: inline-block;
        padding: 3px 4px;
        border: 1px solid #4CAF50;
        border-radius: 50%;
        margin-right: 10px;
        line-height: 1;
        font-size: 16px;
        color: #4CAF50;
    }
</style>
<div class="school_info" style="margin:0 4%">
    <img width="100%" height="439px" style="object-fit:cover" src="data:image/jpeg;base64,<?php echo $data['basic_detail'][0]->image; ?>">


</div>
<div style="margin:0 4%" class="mt-3">
    <h1 class="text-center mt-0 mb-0 roboto bold"><?php echo $data["basic_detail"][0]->name ?></h1>
    <h6 class="text-center grey my-3"><?php echo $data["basic_detail"][0]->address ?></h6>
    <p class="text-center "><button class="btn btn-primary px-5 bold roboto">Admission Enquiry</button></p>
    <hr style="height:2px">
</div>




<div class="row">
    <div class="col-12 bold text-dark" style="margin:0 4%">
        <h2 class="bold schoo_info_heading" style="margin-left:17px">
            School Information
        </h2>
    </div>


</div>
<div class="tabs tabs_school_info" style="display:flex!important;gap:4rem;justify-content: flex-start!important;margin:0 4%">
    <div class="tab active roboto bold " style="border-bottom:0px!important" onclick="openTab(event, 'tab1')">Overview</div>
    <div class="tab roboto bold" style="border-bottom:0px!important" onclick="openTab(event, 'tab2')">Admission</div>
    <div class="tab roboto bold" style="border-bottom:0px!important" onclick="openTab(event, 'tab3')">Facilities</div>
    <div class="tab roboto bold" style="border-bottom:0px!important" onclick="openTab(event, 'tab4')">Gallery</div>
</div>

<div class="tab-content" style="padding: 0!important;margin:2% 4%">
    <div id="tab1" class="tab-pane active">

        <div class="row">
            <div class="col-md-7 grey" style="line-height:30px">
                <div class="px-3 py-2">
                    <?php echo $data['overview'][0]->content; ?>
                </div>

                <h2 class=" roboto bold text-dark my-4" style="margin-left:18px">School Stats</h2>
                <div class="mt-3 p-3 grey" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);margin:0 2%">
                    <div class="row ">

                        <div class="col-md-4 ">
                            <p class="bold helvetica text-dark">Ownership</p>
                            <p class="roboto bold"><?php echo $data["overview"][0]->ownership ?>
                            </p>

                        </div>
                        <div class="col-md-4">
                            <p class="bold helvetica text-dark">Year of Establishment</p>
                            <p class="bold helvetica"><?php echo $data["overview"][0]->establishment ?>
                            </p>

                        </div>
                        <div class="col-md-4">
                            <p class="bold helvetica text-dark">Co-Ed Status</p>
                            <p class="helvetica bold"><?php echo $data["overview"][0]->Co_ed_status  ?>
                            </p>
                        </div>

                    </div>
                    <div class="row mt-3">

                        <div class="col-md-4">
                            <p class="bold helvetica text-dark">Board</p>
                            <p class="helvetica bold"><?php echo $data["overview"][0]->Board ?>
                            </p>

                        </div>
                        <div class="col-md-4">
                            <p class="bold helvetica text-dark">Campus Size</p>
                            <p class="helvetica bold"><?php echo $data["overview"][0]->campus ?>
                            </p>

                        </div>
                        <div class="col-md-4">
                            <button style="color:#0019FF" class="px-5 bg-light py-1 border border-primary">Bus Routes</button>
                        </div>

                    </div>
                </div>
                <h2 class="roboto bold text-dark my-4" style="margin-left:18px">Academic Stats</h2>
                <div class="mt-3 p-3 grey" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);margin:0 2%">
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <p class="px-4 bold text-dark helvetica">Student Teacher Ratio</p>
                                <p class="px-4 py-4 helvetica " style="font-size:5rem;color:#FF0000"><?php echo $data["basic_detail"][0]->student_faculty_ratio ?></p>
                            </div>

                        </div>
                        <div class="col-md-7">

                            <div class="row">
                                <div class="col-md-6">
                                    <p class="bold text-dark helvetica">Class Offered</p>
                                    <p class="text-dark helvetica"><?php echo $data["basic_detail"][0]->class_offered ?></p>

                                </div>
                                <div class="col-md-6">
                                    <p class="bold text-dark helvetica">Language of Instruction</p>
                                    <p class="text-dark helvetica"><?php echo $data["overview"][0]->interact_language ?></p>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="bold text-dark helvetica">Academic Session</p>
                                    <p class="text-dark helvetica"><?php echo $data["overview"][0]->session ?></p>

                                </div>
                                <div class="col-md-6">
                                    <p class="bold text-dark helvetica">School Format</p>
                                    <p class="text-dark helvetica"><?php echo $data["overview"][0]->school_format ?></p>

                                </div>

                            </div>


                        </div>


                    </div>



                </div>

            </div>
            <div class="col-md-5">

                <div style="background-color:#F9F9FF" class="px-5 py-5 my-2  d-flex justify-content-center roboto bold">
                    video
                </div>
                <div class="d-flex select_total_div justify-content-end p-2" style="background-color:#F9F9FF">
                    <select id="select_total" class="px-4 py-1">
                        <option value="pre_nursery_total">Pre-Nursery</option>
                        <option value="Nursery_total" selected>Nursery</option>
                        <option value="LKG_total">LKG</option>
                        <option value="UKG_total">UKG</option>
                        <option value="I_total">Grade 1</option>
                        <option value="II_total">Grade 2</option>
                        <option value="III_total">grade 3</option>
                        <option value="IV_total">grade 4</option>
                        <option value="V_total">grdae 5</option>
                        <option value="VI_total">grade 6</option>
                        <option value="VII_total">grade 7</option>
                        <option value="VIII_total">grade 8</option>
                        <option value="IX_total">grade 9</option>
                        <option value="X_total">grade 10</option>
                        <option value="XI_total">grade 11</option>
                        <option value="XII_total">grade 12</option>
                    </select>
                </div>
                <div class="" style="background-color:#F9F9FF">
                    <div class="totla_fee px-3 py-2" id="Nursery_total">
                        <p class="helvetica bold">Total Cost for new admission</p>
                        <p class="total_yearly_o bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="bold helvetica">for the first year</p>



                    </div>
                    <div class="totla_fee px-3 py-2" id="Nursery_total">
                        <p class="helvetica bold">Total Cost for new admission</p>
                        <p class="total_yearly_o bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="bold helvetica">for the first year</p>



                    </div>

                    <div class="totla_fee px-3 py-2" id="UKG_total">
                        <p class="helvetica bold">Total Cost for new admission</p>
                        <p class="total_yearly_o bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="bold helvetica">for the first year</p>



                    </div>
                    <div class="totla_fee px-3 py-2" id="I_total">
                        <p class="helvetica bold">Total Cost for new admission</p>
                        <p class="total_yearly_o bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="bold helvetica">for the first year</p>


                    </div>
                    <div class="totla_fee px-3 py-2" id="II_total">
                        <p class="helvetica bold">Total Cost for new admission</p>
                        <p class="total_yearly_o bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="bold helvetica">for the first year</p>

                    </div>
                    <div class="totla_fee px-2 py-2" id="III_total">
                        <p class="helvetica bold">Total Cost for new admission</p>
                        <p class="total_yearly_o bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="bold helvetica">for the first year</p>


                    </div>
                    <div class="totla_fee px-3 py-2" id="IV_total">
                        <p class="helvetica bold">Total Cost for new admission</p>
                        <p class="total_yearly_o bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="bold helvetica">for the first year</p>

                    </div>
                    <div class="totla_fee px-3 py-2" id="V_total">
                        <p class="helvetica bold">Total Cost for new admission</p>
                        <p class="total_yearly_o bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="bold helvetica">for the first year</p>


                    </div>
                    <div class="totla_fee px-3 py-2" id="VI_total">
                        <p class="helvetica bold">Total Cost for new admission</p>
                        <p class="total_yearly_o bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="bold helvetica">for the first year</p>


                    </div>
                    <div class="totla_fee px-3 py-2" id="VII_total">
                        <p class="helvetica bold">Total Cost for new admission</p>
                        <p class="total_yearly_o bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="bold helvetica">for the first year</p>

                    </div>
                    <div class="totla_fee px-3 py-2" id="VIII_total">
                        <p class="helvetica bold">Total Cost for new admission</p>
                        <p class="total_yearly_o bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="bold helvetica">for the first year</p>

                    </div>
                    <div class="totla_fee px-3 py-2" id="IX_total">
                        <p class="roboto bold">Total Cost for new admission</p>
                        <p class="total_yearly_o bold" style="color:#001AFF;font-size:74.29px">NA</p>
                        <p class="roboto bold">for the first year</p>


                    </div>
                    <div class="totla_fee px-3 py-2" id="X_total">
                        <p class="helvetica bold">Total Cost for new admission</p>
                        <p class="total_yearly_o bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="bold helvetica">for the first year</p>


                    </div>
                    <div class="totla_fee px-3 py-2" id="XI_total">
                        <p class="roboto bold">Total Cost for new admission</p>
                        <p class="total_yearly_o bold" style="color:#001AFF;font-size:74.29px">NA</p>
                        <p class="roboto bold">for the first year</p>


                    </div>
                    <div class="totla_fee px-3 py-2" id="XII_total">
                        <p class="roboto bold">Total Cost for new admission</p>
                        <p class="total_yearly_o bold" style="color:#001AFF;font-size:74.29px">NA</p>
                        <p class="roboto bold">for the first year</p>


                    </div>


                </div>









            </div>



        </div>
        <div class="row my-5" style="background-color:#F9F9FF;margin:0 1%">
            <div class="col-md-3">
                <img src="<?php echo base_url("assets/images/Support operator helps to solve the problem.png") ?>"></img>

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
        <!-- <h2 class="text-center">Frequently Asked Question</h2>
        <div class="row position-relative mt-3" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);margin:0 2%">

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

        <div class="row position-relative mt-3" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);margin:0 2%">
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
        <div class="row position-relative mt-3" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);margin:0 2%">
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
        <div class="row position-relative mt-3" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);margin:0 2%">
            <li class="border p-3 list_button list-unstyled d-flex justify-content-between roboto bold ">
                What is the Swiss Cottage School, Bijwasan Fee Structure
                <div class=""><i style="font-size:1.5rem" class="fa-solid fa-chevron-down"></i></div>
            </li>
            <ul id="toggle_element_2" class="dropdown-list">
                <li class="list-unstyled">Another</li>
                <li class="list-unstyled">Example</li>
                <li class="list-unstyled">List</li>
            </ul>
        </div> -->

    </div>
    <div id="tab2" class="tab-pane">
        <div class="row mb-3" style="margin:0 1%">
            <div class="col-md-7 py-4 school_div_bg ">

                <div>
                    <h2 class="roboto bold py-2 p-4 top_heading" style="margin-left:3%">Fee Structure</h2>
                </div>

                <div class="row p-5 fee_div ">
                    <div class="col-md-6 ">
                        <p style="font-size:24px" class="helvetica fee_heading_main">Fee Structure for <span class="bold fee_heading_main " id="class_name_fee">Nursery</span></p>
                    </div>
                    <div class="col-md-6">

                        <select id="select_class" class="px-4 py-2">
                            <option value="Prenursery">Prenursery</option>
                            <option value="Nursery" selected>Nursery</option>
                            <option value="LKG">LKG</option>
                            <option value="UKG">UKG</option>
                            <option value="I">Grade 1</option>
                            <option value="II">Grade 2</option>
                            <option value="III">grade 3</option>
                            <option value="IV">grade 4</option>
                            <option value="V">grdae 5</option>
                            <option value="VI">grade 6</option>
                            <option value="VII">grade 7</option>
                            <option value="VIII">grade 8</option>
                            <option value="IX">grade 9</option>
                            <option value="X">grade 10</option>
                            <option value="XI">grade 11</option>
                            <option value="XII">grade 12</option>
                        </select>

                    </div>
                    <div id="Prenursery" class="row mt-5 fee">

                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Type</h5>
                            <p class="prenur_feename helvetica fee_text">NA</p>
                            <p class="prenur_feename helvetica fee_text">NA</p>
                            <p class="prenur_feename helvetica fee_text">NA</p>
                            <p class="prenur_feename helvetica fee_text">NA</p>
                            <p class="prenur_feename helvetica fee_text">NA</p>
                            <p class="prenur_feename helvetica fee_text">NA</p>
                            <p class="prenur_feename helvetica fee_text">NA</p>





                        </div>
                        <div class="col-4 ">
                            <h5 class="mb-4 fee_heading">Amount</h5>
                            <p class="prenur_amount helvetica fee_text">NA</p>
                            <p class="prenur_amount helvetica fee_text">NA</p>
                            <p class="prenur_amount helvetica fee_text">NA</p>
                            <p class="prenur_amount helvetica fee_text">NA</p>
                            <p class="prenur_amount helvetica fee_text">NA</p>
                            <p class="prenur_amount helvetica fee_text">NA</p>
                            <p class="prenur_amount helvetica fee_text">NA</p>






                        </div>
                        <div class="col-4 ">
                            <h5 class="mb-4 fee_heading">Frequency</h5>
                            <p class="prenur_frequency helvetica fee_text">NA</p>
                            <p class="prenur_frequency helvetica fee_text">NA</p>
                            <p class="prenur_frequency helvetica fee_text">NA</p>
                            <p class="prenur_frequency helvetica fee_text">NA</p>
                            <p class="prenur_frequency helvetica fee_text">NA</p>
                            <p class="prenur_frequency helvetica fee_text">NA</p>
                            <p class="prenur_frequency helvetica fee_text">NA</p>



                        </div>

                    </div>
                    <div id="Nursery" class="row mt-5 fee">

                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Type</h5>
                            <p class="nur_feename helvetica fee_text">NA</p>
                            <p class="nur_feename helvetica fee_text">NA</p>
                            <p class="nur_feename helvetica fee_text">NA</p>
                            <p class="nur_feename helvetica fee_text">NA</p>
                            <p class="nur_feename helvetica fee_text">NA</p>
                            <p class="nur_feename helvetica fee_text">NA</p>
                            <p class="nur_feename helvetica fee_text">NA</p>





                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Amount</h5>
                            <p class="nur_amount helvetica fee_text">NA</p>
                            <p class="nur_amount helvetica fee_text">NA</p>
                            <p class="nur_amount helvetica fee_text">NA</p>
                            <p class="nur_amount helvetica fee_text">NA</p>
                            <p class="nur_amount helvetica fee_text">NA</p>
                            <p class="nur_amount helvetica fee_text">NA</p>
                            <p class="nur_amount helvetica fee_text">NA</p>






                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Frequency</h5>
                            <p class="nur_frequency helvetica fee_text">NA</p>
                            <p class="nur_frequency helvetica fee_text">NA</p>
                            <p class="nur_frequency helvetica fee_text">NA</p>
                            <p class="nur_frequency helvetica fee_text">NA</p>
                            <p class="nur_frequency helvetica fee_text">NA</p>
                            <p class="nur_frequency helvetica fee_text">NA</p>
                            <p class="nur_frequency helvetica fee_text">NA</p>



                        </div>

                    </div>
                    <div id="LKG" class="row mt-5 fee">

                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Type</h5>
                            <p class="lkg_feename helvetica  fee_text" NA></p>
                            <p class="lkg_feename helvetica  fee_text" NA></p>
                            <p class="lkg_feename helvetica  fee_text" NA></p>
                            <p class="lkg_feename helvetica  fee_text" NA></p>
                            <p class="lkg_feename helvetica  fee_text" NA></p>
                            <p class="lkg_feename helvetica  fee_text" NA></p>
                            <p class="lkg_feename helvetica  fee_text" NA></p>





                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Amount</h5>
                            <p class="lkg_amount helvetica fee_text">NA</p>
                            <p class="lkg_amount helvetica fee_text">NA</p>
                            <p class="lkg_amount helvetica fee_text">NA</p>
                            <p class="lkg_amount helvetica fee_text">NA</p>
                            <p class="lkg_amount helvetica fee_text">NA</p>
                            <p class="lkg_amount helvetica fee_text">NA</p>
                            <p class="lkg_amount helvetica fee_text">NA</p>






                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Frequency</h5>
                            <p class="lkg_frequency helvetica fee_text">NA</p>
                            <p class="lkg_frequency helvetica fee_text">NA</p>
                            <p class="lkg_frequency helvetica fee_text">NA</p>
                            <p class="lkg_frequency helvetica fee_text">NA</p>
                            <p class="lkg_frequency helvetica fee_text">NA</p>
                            <p class="lkg_frequency helvetica fee_text">NA</p>
                            <p class="lkg_frequency helvetica fee_text">NA</p>



                        </div>


                    </div>
                    <div id="UKG" class="row mt-5 fee">



                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Type</h5>
                            <p class="ukg_feename helvetica fee_text">NA</p>
                            <p class="ukg_feename helvetica fee_text">NA</p>
                            <p class="ukg_feename helvetica fee_text">NA</p>
                            <p class="ukg_feename helvetica fee_text">NA</p>
                            <p class="ukg_feename helvetica fee_text">NA</p>
                            <p class="ukg_feename helvetica fee_text">NA</p>
                            <p class="ukg_feename helvetica fee_text">NA</p>





                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Amount</h5>
                            <p class="ukg_amount helvetica fee_text">NA</p>
                            <p class="ukg_amount helvetica fee_text">NA</p>
                            <p class="ukg_amount helvetica fee_text">NA</p>
                            <p class="ukg_amount helvetica fee_text">NA</p>
                            <p class="ukg_amount helvetica fee_text">NA</p>
                            <p class="ukg_amount helvetica fee_text">NA</p>
                            <p class="ukg_amount helvetica fee_text">NA</p>






                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Frequency</h5>
                            <p class="ukg_frequency helvetica fee_text">NA</p>
                            <p class="ukg_frequency helvetica fee_text">NA</p>
                            <p class="ukg_frequency helvetica fee_text">NA</p>
                            <p class="ukg_frequency helvetica fee_text">NA</p>
                            <p class="ukg_frequency helvetica fee_text">NA</p>
                            <p class="ukg_frequency helvetica fee_text">NA</p>
                            <p class="ukg_frequency helvetica fee_text">NA</p>



                        </div>

                    </div>
                    <div id="I" class="row mt-5 fee">





                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Type</h5>
                            <p class="grade1_feename helvetica fee_text">NA</p>
                            <p class="grade1_feename helvetica fee_text">NA</p>
                            <p class="grade1_feename helvetica fee_text">NA</p>
                            <p class="grade1_feename helvetica fee_text">NA</p>
                            <p class="grade1_feename helvetica fee_text">NA</p>
                            <p class="grade1_feename helvetica fee_text">NA</p>
                            <p class="grade1_feename helvetica fee_text">NA</p>





                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Amount</h5>
                            <p class="grade1_amount helvetica fee_text">NA</p>
                            <p class="grade1_amount helvetica fee_text">NA</p>
                            <p class="grade1_amount helvetica fee_text">NA</p>
                            <p class="grade1_amount helvetica fee_text">NA</p>
                            <p class="grade1_amount helvetica fee_text">NA</p>
                            <p class="grade1_amount helvetica fee_text">NA</p>
                            <p class="grade1_amount helvetica fee_text">NA</p>






                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Frequency</h5>
                            <p class="grade1_frequency fee_text">NA</p>
                            <p class="grade1_frequency fee_text">NA</p>
                            <p class="grade1_frequency fee_text">NA</p>
                            <p class="grade1_frequency fee_text">NA</p>
                            <p class="grade1_frequency fee_text">NA</p>
                            <p class="grade1_frequency fee_text">NA</p>
                            <p class="grade1_frequency fee_text">NA</p>



                        </div>

                    </div>
                    <div id="II" class="row mt-5 fee">

                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Type</h5>
                            <p class="grade2_feename fee_text">NA</p>
                            <p class="grade2_feename fee_text">NA</p>
                            <p class="grade2_feename fee_text">NA</p>
                            <p class="grade2_feename fee_text">NA</p>
                            <p class="grade2_feename fee_text">NA</p>
                            <p class="grade2_feename fee_text">NA</p>
                            <p class="grade2_feename fee_text">NA</p>





                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Amount</h5>
                            <p class="grade2_amount fee_text">NA</p>
                            <p class="grade2_amount fee_text">NA</p>
                            <p class="grade2_amount fee_text">NA</p>
                            <p class="grade2_amount fee_text">NA</p>
                            <p class="grade2_amount fee_text">NA</p>
                            <p class="grade2_amount fee_text">NA</p>
                            <p class="grade2_amount fee_text">NA</p>






                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Frequency</h5>
                            <p class="grade2_frequency fee_text">NA</p>
                            <p class="grade2_frequency fee_text">NA</p>
                            <p class="grade2_frequency fee_text">NA</p>
                            <p class="grade2_frequency fee_text">NA</p>
                            <p class="grade2_frequency fee_text">NA</p>
                            <p class="grade2_frequency fee_text">NA</p>
                            <p class="grade2_frequency fee_text">NA</p>



                        </div>

                    </div>
                    <div id="III" class="row mt-5 fee">

                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Type</h5>
                            <p class="grade3_feename fee_text">NA</p>
                            <p class="grade3_feename fee_text">NA</p>
                            <p class="grade3_feename fee_text">NA</p>
                            <p class="grade3_feename fee_text">NA</p>
                            <p class="grade3_feename fee_text">NA</p>
                            <p class="grade3_feename fee_text">NA</p>
                            <p class="grade3_feename fee_text">NA</p>





                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Amount</h5>
                            <p class="grade3_amount fee_text">NA</p>
                            <p class="grade3_amount fee_text">NA</p>
                            <p class="grade3_amount fee_text">NA</p>
                            <p class="grade3_amount fee_text">NA</p>
                            <p class="grade3_amount fee_text">NA</p>
                            <p class="grade3_amount fee_text">NA</p>
                            <p class="grade3_amount fee_text">NA</p>






                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Frequency</h5>
                            <p class="grade3_frequency fee_text">NA</p>
                            <p class="grade3_frequency fee_text">NA</p>
                            <p class="grade3_frequency fee_text">NA</p>
                            <p class="grade3_frequency fee_text">NA</p>
                            <p class="grade3_frequency fee_text">NA</p>
                            <p class="grade3_frequency fee_text">NA</p>
                            <p class="grade3_frequency fee_text">NA</p>



                        </div>

                    </div>
                    <div id="IV" class="row mt-5 fee">

                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Type</h5>
                            <p class="grade4_feename fee_text">NA</p>
                            <p class="grade4_feename fee_text">NA</p>
                            <p class="grade4_feename fee_text">NA</p>
                            <p class="grade4_feename fee_text">NA</p>
                            <p class="grade4_feename fee_text">NA</p>
                            <p class="grade4_feename fee_text">NA</p>
                            <p class="grade4_feename fee_text">NA</p>





                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Amount</h5>
                            <p class="grade4_amount fee_text">NA</p>
                            <p class="grade4_amount fee_text">NA</p>
                            <p class="grade4_amount fee_text">NA</p>
                            <p class="grade4_amount fee_text">NA</p>
                            <p class="grade4_amount fee_text">NA</p>
                            <p class="grade4_amount fee_text">NA</p>
                            <p class="grade4_amount fee_text">NA</p>






                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Frequency</h5>
                            <p class="grade4_frequency fee_text">NA</p>
                            <p class="grade4_frequency fee_text">NA</p>
                            <p class="grade4_frequency fee_text">NA</p>
                            <p class="grade4_frequency fee_text">NA</p>
                            <p class="grade4_frequency fee_text">NA</p>
                            <p class="grade4_frequency fee_text">NA</p>
                            <p class="grade4_frequency fee_text">NA</p>



                        </div>

                    </div>
                    <div id="V" class="row mt-5 fee">

                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Type</h5>
                            <p class="grade5_feename fee_text">NA</p>
                            <p class="grade5_feename fee_text">NA</p>
                            <p class="grade5_feename fee_text">NA</p>
                            <p class="grade5_feename fee_text">NA</p>
                            <p class="grade5_feename fee_text">NA</p>
                            <p class="grade5_feename fee_text">NA</p>
                            <p class="grade5_feename fee_text">NA</p>





                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Amount</h5>
                            <p class="grade5_amount fee_text">NA</p>
                            <p class="grade5_amount fee_text">NA</p>
                            <p class="grade5_amount fee_text">NA</p>
                            <p class="grade5_amount fee_text">NA</p>
                            <p class="grade5_amount fee_text">NA</p>
                            <p class="grade5_amount fee_text">NA</p>
                            <p class="grade5_amount fee_text">NA</p>






                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Frequency</h5>
                            <p class="grade5_frequency fee_text">NA</p>
                            <p class="grade5_frequency fee_text">NA</p>
                            <p class="grade5_frequency fee_text">NA</p>
                            <p class="grade5_frequency fee_text">NA</p>
                            <p class="grade5_frequency fee_text">NA</p>
                            <p class="grade5_frequency fee_text">NA</p>
                            <p class="grade5_frequency fee_text">NA</p>



                        </div>

                    </div>
                    <div id="VI" class="row mt-5 fee">

                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Type</h5>
                            <p class="grade6_feename fee_text">NA</p>
                            <p class="grade6_feename fee_text">NA</p>
                            <p class="grade6_feename fee_text">NA</p>
                            <p class="grade6_feename fee_text">NA</p>
                            <p class="grade6_feename fee_text">NA</p>
                            <p class="grade6_feename fee_text">NA</p>
                            <p class="grade6_feename fee_text">NA</p>





                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Amount</h5>
                            <p class="grade6_amount fee_text">NA</p>
                            <p class="grade6_amount fee_text">NA</p>
                            <p class="grade6_amount fee_text">NA</p>
                            <p class="grade6_amount fee_text">NA</p>
                            <p class="grade6_amount fee_text">NA</p>
                            <p class="grade6_amount fee_text">NA</p>
                            <p class="grade6_amount fee_text">NA</p>






                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Frequency</h5>
                            <p class="grade6_frequency fee_text">NA</p>
                            <p class="grade6_frequency fee_text">NA</p>
                            <p class="grade6_frequency fee_text">NA</p>
                            <p class="grade6_frequency fee_text">NA</p>
                            <p class="grade6_frequency fee_text">NA</p>
                            <p class="grade6_frequency fee_text">NA</p>
                            <p class="grade6_frequency fee_text">NA</p>



                        </div>

                    </div>
                    <div id="VII" class="row mt-5 fee">

                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Type</h5>
                            <p class="grade7_feename fee_text">NA</p>
                            <p class="grade7_feename fee_text">NA</p>
                            <p class="grade7_feename fee_text">NA</p>
                            <p class="grade7_feename fee_text">NA</p>
                            <p class="grade7_feename fee_text">NA</p>
                            <p class="grade7_feename fee_text">NA</p>
                            <p class="grade7_feename fee_text">NA</p>





                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Amount</h5>
                            <p class="grade7_amount fee_text">NA</p>
                            <p class="grade7_amount fee_text">NA</p>
                            <p class="grade7_amount fee_text">NA</p>
                            <p class="grade7_amount fee_text">NA</p>
                            <p class="grade7_amount fee_text">NA</p>
                            <p class="grade7_amount fee_text">NA</p>
                            <p class="grade7_amount fee_text">NA</p>






                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Frequency</h5>
                            <p class="grade7_frequency fee_text">NA</p>
                            <p class="grade7_frequency fee_text">NA</p>
                            <p class="grade7_frequency fee_text">NA</p>
                            <p class="grade7_frequency fee_text">NA</p>
                            <p class="grade7_frequency fee_text">NA</p>
                            <p class="grade7_frequency fee_text">NA</p>
                            <p class="grade7_frequency fee_text">NA</p>



                        </div>

                    </div>
                    <div id="VIII" class="row mt-5 fee">

                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Type</h5>
                            <p class="grade8_feename fee_text">NA</p>
                            <p class="grade8_feename fee_text">NA</p>
                            <p class="grade8_feename fee_text">NA</p>
                            <p class="grade8_feename fee_text">NA</p>
                            <p class="grade8_feename fee_text">NA</p>
                            <p class="grade8_feename fee_text">NA</p>
                            <p class="grade8_feename fee_text">NA</p>





                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Amount</h5>
                            <p class="grade8_amount fee_text">NA</p>
                            <p class="grade8_amount fee_text">NA</p>
                            <p class="grade8_amount fee_text">NA</p>
                            <p class="grade8_amount fee_text">NA</p>
                            <p class="grade8_amount fee_text">NA</p>
                            <p class="grade8_amount fee_text">NA</p>
                            <p class="grade8_amount fee_text">NA</p>






                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Frequency</h5>
                            <p class="grade8_frequency fee_text">NA</p>
                            <p class="grade8_frequency fee_text">NA</p>
                            <p class="grade8_frequency fee_text">NA</p>
                            <p class="grade8_frequency fee_text">NA</p>
                            <p class="grade8_frequency fee_text">NA</p>
                            <p class="grade8_frequency fee_text">NA</p>
                            <p class="grade8_frequency fee_text">NA</p>



                        </div>
                    </div>
                    <div id="IX" class="row mt-5 fee">

                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Type</h5>
                            <p class="grade9_feename fee_text">NA</p>
                            <p class="grade9_feename fee_text">NA</p>
                            <p class="grade9_feename fee_text">NA</p>
                            <p class="grade9_feename fee_text">NA</p>
                            <p class="grade9_feename fee_text">NA</p>
                            <p class="grade9_feename fee_text">NA</p>
                            <p class="grade9_feename fee_text">NA</p>





                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Amount</h5>
                            <p class="grade9_amount fee_text">NA</p>
                            <p class="grade9_amount fee_text">NA</p>
                            <p class="grade9_amount fee_text">NA</p>
                            <p class="grade9_amount fee_text">NA</p>
                            <p class="grade9_amount fee_text">NA</p>
                            <p class="grade9_amount fee_text">NA</p>
                            <p class="grade9_amount fee_text">NA</p>






                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Frequency</h5>
                            <p class="grade9_frequency fee_text">NA</p>
                            <p class="grade9_frequency fee_text">NA</p>
                            <p class="grade9_frequency fee_text">NA</p>
                            <p class="grade9_frequency fee_text">NA</p>
                            <p class="grade9_frequency fee_text">NA</p>
                            <p class="grade9_frequency fee_text">NA</p>
                            <p class="grade9_frequency fee_text">NA</p>



                        </div>
                    </div>
                    <div id="X" class="row mt-5 fee">

                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Type</h5>
                            <p class="grade10_feename fee_text">NA</p>
                            <p class="grade10_feename fee_text">NA</p>
                            <p class="grade10_feename fee_text">NA</p>
                            <p class="grade10_feename fee_text">NA</p>
                            <p class="grade10_feename fee_text">NA</p>
                            <p class="grade10_feename fee_text">NA</p>
                            <p class="grade10_feename fee_text">NA</p>





                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Amount</h5>
                            <p class="grade10_amount fee_text">NA</p>
                            <p class="grade10_amount fee_text">NA</p>
                            <p class="grade10_amount fee_text">NA</p>
                            <p class="grade10_amount fee_text">NA</p>
                            <p class="grade10_amount fee_text">NA</p>
                            <p class="grade10_amount fee_text">NA</p>
                            <p class="grade10_amount fee_text">NA</p>






                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Frequency</h5>
                            <p class="grade10_frequency fee_text">NA</p>
                            <p class="grade10_frequency fee_text">NA</p>
                            <p class="grade10_frequency fee_text">NA</p>
                            <p class="grade10_frequency fee_text">NA</p>
                            <p class="grade10_frequency fee_text">NA</p>
                            <p class="grade10_frequency fee_text">NA</p>
                            <p class="grade10_frequency fee_text">NA</p>



                        </div>

                    </div>
                    <div id="XI" class="row mt-5 fee">

                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Type</h5>
                            <p class="grade11_feename fee_text">NA</p>
                            <p class="grade11_feename fee_text">NA</p>
                            <p class="grade11_feename fee_text">NA</p>
                            <p class="grade11_feename fee_text">NA</p>
                            <p class="grade11_feename fee_text">NA</p>
                            <p class="grade11_feename fee_text">NA</p>
                            <p class="grade11_feename fee_text">NA</p>





                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Amount</h5>
                            <p class="grade11_amount fee_text">NA</p>
                            <p class="grade11_amount fee_text">NA</p>
                            <p class="grade11_amount fee_text">NA</p>
                            <p class="grade11_amount fee_text">NA</p>
                            <p class="grade11_amount fee_text">NA</p>
                            <p class="grade11_amount fee_text">NA</p>
                            <p class="grade11_amount fee_text">NA</p>






                        </div>
                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Frequency</h5>
                            <p class="grade11_frequency fee_text">NA</p>
                            <p class="grade11_frequency fee_text">NA</p>
                            <p class="grade11_frequency fee_text">NA</p>
                            <p class="grade11_frequency fee_text">NA</p>
                            <p class="grade11_frequency fee_text">NA</p>
                            <p class="grade11_frequency fee_text">NA</p>
                            <p class="grade11_frequency fee_text">NA</p>



                        </div>

                    </div>
                    <div id="XII" class="row mt-5 fee">

                        <div class="col-4">
                            <h5 class="mb-4 fee_heading">Type</h5>
                            <p class="grade12_feename fee_text">NA</p>
                            <p class="grade12_feename fee_text">NA</p>
                            <p class="grade12_feename fee_text">NA</p>
                            <p class="grade12_feename fee_text">NA</p>
                            <p class="grade12_feename fee_text">NA</p>
                            <p class="grade12_feename fee_text">NA</p>
                            <p class="grade12_feename fee_text">NA</p>





                        </div>
                        <div class="col-md-4">
                            <h5 class="mb-4 fee_heading">Amount</h5>
                            <p class="grade12_amount fee_text">NA</p>
                            <p class="grade12_amount fee_text">NA</p>
                            <p class="grade12_amount fee_text">NA</p>
                            <p class="grade12_amount fee_text">NA</p>
                            <p class="grade12_amount fee_text">NA</p>
                            <p class="grade12_amount fee_text">NA</p>
                            <p class="grade12_amount fee_text">NA</p>






                        </div>
                        <div class="col-md-4">
                            <h5 class="mb-4 fee_heading">Frequency</h5>
                            <p class="grade12_frequency fee_text">NA</p>
                            <p class="grade12_frequency fee_text">NA</p>
                            <p class="grade12_frequency fee_text">NA</p>
                            <p class="grade12_frequency fee_text">NA</p>
                            <p class="grade12_frequency fee_text">NA</p>
                            <p class="grade12_frequency fee_text">NA</p>
                            <p class="grade12_frequency fee_text">NA</p>



                        </div>

                    </div>

                </div>


            </div>
            <div class="col-md-5 total_fee_div_ad" style="margin-top:-6px">

                <div style="background-color:#F9F9FF" class="px-5 py-5 my-2  d-flex justify-content-center roboto bold">
                    Admission
                </div>
                <div class="d-flex justify-content-end px-2 py-2 select_total_div" style="background-color:#F9F9FF">
                    <select id="select_total_ad" class="px-4 py-2">
                        <option value="pre_nursery_total_ad">Pre-Nursery</option>
                        <option value="Nursery_total_ad" selected>Nursery</option>
                        <option value="LKG_total_ad">LKG</option>
                        <option value="UKG_total_ad">UKG</option>
                        <option value="I_total_ad">Grade 1</option>
                        <option value="II_total_ad">Grade 2</option>
                        <option value="III_total_ad">grade 3</option>
                        <option value="IV_total_ad">grade 4</option>
                        <option value="V_total_ad">grdae 5</option>
                        <option value="VI_total_ad">grade 6</option>
                        <option value="VII_total_ad">grade 7</option>
                        <option value="VIII_total_ad">grade 8</option>
                        <option value="IX_total_ad">grade 9</option>
                        <option value="X_total_ad">grade 10</option>
                        <option value="XI_total_ad">grade 11</option>
                        <option value="XII_total_ad">grade 12</option>
                    </select>
                </div>
                <div class="" style="background-color:#F9F9FF">
                    <div class="totla_fee_ad py-2 px-4" id="pre_nursery_total_ad">

                        <p class="roboto bold">Total Cost for new admission</p>
                        <p class="total_yearly_y bold helvetica" style="color:#001AFF;font-size:50.29px">NA</p>
                        <p class="roboto bold">for the first year</p>



                    </div>
                    <div class="totla_fee_ad py-2 px-4" id="Nursery_total_ad">

                        <p class="helvetica bold">Total Cost for new admission</p>
                        <p class="total_yearly_y bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="helvetica bold">for NAthe first year</p>

                    </div>
                    <div class="totla_fee_ad py-2 px-4" id="LKG_total_ad">
                        <p class="helvetica bold">Total Cost for new admission</p>
                        <p class="total_yearly_y bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="helvetica bold">for NAthe first year</p>
                    </div>
                    <div class="totla_fee_ad py-2 px-4" id="UKG_total_ad">
                        <p class="roboto bold">Total Cost for new admission</p>
                        <p class="total_yearly_y bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="roboto bold helvetica">for the first year</p>

                    </div>
                    <div class="totla_fee_ad py-2 px-4" id="I_total_ad">

                        <p class="roboto bold helvetica">Total Cost for new admission</p>
                        <p class="total_yearly_y bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="roboto bold helvetica">for the first year</p>


                    </div>
                    <div class="totla_fee_ad py-2 px-4" id="II_total_ad">
                        <p class="roboto bold helvetic">Total Cost for new admission</p>
                        <p class="total_yearly_y bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="roboto bold helvetica">for the first year</p>
                    </div>
                    <div class="totla_fee_ad py-2 px-4" id="III_total_ad">
                        <p class="roboto bold helvetica">Total Cost for new admission</p>
                        <p class="total_yearly_y bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="roboto bold helvetica">for the first year</p>

                    </div>
                    <div class="totla_fee_ad py-2 px-4" id="IV_total_ad">
                        <p class="roboto bold helvetica">Total Cost for new admission</p>
                        <p class="total_yearly_y bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="roboto bold helvetica">for the first year</p>

                    </div>
                    <div class="totla_fee_ad py-2 px-4" id="V_total_ad">
                        <p class="roboto bold helvetica">Total Cost for new admission</p>
                        <p class="total_yearly_y bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="roboto bold helvetica">for the first year</p>


                    </div>
                    <div class="totla_fee_ad py-2 px-4" id="VI_total_ad">
                        <p class="roboto bold helvetica">Total Cost for new admission</p>
                        <p class="total_yearly_y bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="roboto bold helvetica">for the first year</p>


                    </div>
                    <div class="totla_fee_ad py-2 px-4" id="VII_total_ad">
                        <p class="roboto bold helvetica">Total Cost for new admission</p>
                        <p class="total_yearly_y bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="roboto bold helvetica">for the first year</p>
                    </div>
                    <div class="totla_fee_ad py-2 px-4" id="VIII_total_ad">
                        <p class="roboto bold helvetica">Total Cost for new admission</p>
                        <p class="total_yearly_y bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="roboto bold helvetica">for the first year</p>

                    </div>
                    <div class="totla_fee_ad py-2 px-4" id="IX_total_ad">
                        <p class="roboto bold helvetica">Total Cost for new admission</p>
                        <p class="total_yearly_y bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="roboto bold helvetica">for the first year</p>


                    </div>
                    <div class="totla_fee_ad py-2 px-4" id="X_total_ad">
                        <p class="roboto bold helvetica">Total Cost for new admission</p>
                        <p class="total_yearly_y bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="roboto bold helvetica">for the first year</p>

                    </div>
                    <div class="totla_fee_ad py-2 px-4" id="XI_total_ad">

                        <p class="roboto bold helvetica">Total Cost for new admission</p>
                        <p class="total_yearly_y bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="roboto bold helvetica">for the first year</p>


                    </div>
                    <div class="totla_fee_ad py-2 px-4" id="XII_total_ad">

                        <p class="roboto bold helvetica">Total Cost for new admission</p>
                        <p class="total_yearly_y bold helvetica" style="color:#001AFF;font-size:60.29px">NA</p>
                        <p class="roboto bold helvetica">for the first year</p>

                    </div>


                </div>
                <div class="d-flex  justify-content-end  px-2 py-2 mt-2 select_total_div" style="background-color:#F9F9FF">
                    <select id="select_total_ad_m" class="px-4 py-2">
                        <option value="pre_nursery_total_ad_m">Pre-Nursery</option>
                        <option value="Nursery_total_ad_m" selected>Nursery</option>
                        <option value="LKG_total_ad_m">LKG</option>
                        <option value="UKG_total_ad_m">UKG</option>
                        <option value="I_total_ad_m">Grade 1</option>
                        <option value="II_total_ad_m">Grade 2</option>
                        <option value="III_total_ad_m">grade 3</option>
                        <option value="IV_total_ad_m">grade 4</option>
                        <option value="V_total_ad_m">grdae 5</option>
                        <option value="VI_total_ad_m">grade 6</option>
                        <option value="VII_total_ad_m">grade 7</option>
                        <option value="VIII_total_ad_m">grade 8</option>
                        <option value="IX_total_ad_m">grade 9</option>
                        <option value="X_total_ad_m">grade 10</option>
                        <option value="XI_total_ad_m">grade 11</option>
                        <option value="XII_total_ad_m">grade 12</option>
                    </select>
                </div>
                <div class="" style="background-color:#F9F9FF">
                    <div class="totla_fee_ad_m py-2 px-4" id="pre_nursery_total_ad_m">

                        <p class="roboto bold">Monthly Cost</p>
                        <p class="total_yearly_m bold" style="color:#001AFF;font-size:55.29px">NA</p>



                    </div>
                    <div class="totla_fee_ad_m py-2 px-4" id="Nursery_total_ad_m">
                        <p class="roboto bold">Monthly Cost</p>
                        <p class="total_yearly_m bold" style="color:#001AFF;font-size:55.29px">NA</p>

                    </div>
                    <div class="totla_fee_ad_m py-2 px-4" id="LKG_total_ad_m">

                        <p class="roboto bold">Monthly Cost</p>

                        <p class="total_yearly_m bold" style="color:#001AFF;font-size:55.29px">NA</p>
                    </div>
                    <div class="totla_fee_ad_m py-2 px-4" id="UKG_total_ad_m">
                        <p class="roboto bold">Monthly Cost</p>

                        <p class="total_yearly_m bold" style="color:#001AFF;font-size:55.29px">NA</p>

                    </div>
                    <div class="totla_fee_ad_m py-2 px-4" id="I_total_ad_m">

                        <p class="roboto bold">Monthly Cost</p>
                        <p class="total_yearly_m bold" style="color:#001AFF;font-size:55.29px">NA</p>



                    </div>
                    <div class="totla_fee_ad_m py-2 px-4" id="II_total_ad_m">
                        <p class="roboto bold">Monthly Cost</p>

                        <p class="total_yearly_m bold" style="color:#001AFF;font-size:55.29px">NA</p>

                    </div>
                    <div class="totla_fee_ad_m py-2 px-4" id="III_total_ad_m">
                        <p class="roboto bold">Monthly Cost</p>

                        <p class="total_yearly_m bold" style="color:#001AFF;font-size:55.29px">NA</p>


                    </div>
                    <div class="totla_fee_ad_m py-2 px-4" id="IV_total_ad_m">
                        <p class="roboto bold">Monthly Cost</p>

                        <p class="total_yearly_m bold" style="color:#001AFF;font-size:55.29px">NA</p>


                    </div>
                    <div class="totla_fee_ad_m py-2 px-4" id="V_total_ad_m">
                        <p class="roboto bold">Monthly Cost</p>

                        <p class="total_yearly_m bold" style="color:#001AFF;font-size:55.29px">NA</p>



                    </div>
                    <div class="totla_fee_ad_m py-2 px-4" id="VI_total_ad_m">
                        <p class="roboto bold">Monthly Cost</p>

                        <p class="total_yearly_m bold" style="color:#001AFF;font-size:55.29px">NA</p>

                    </div>
                    <div class="totla_fee_ad_m py-2 px-4" id="VII_total_ad_m">
                        <p class="roboto bold">Monthly Cost</p>

                        <p class="total_yearly_m bold" style="color:#001AFF;font-size:55.29px">NA</p>

                    </div>
                    <div class="totla_fee_ad_m py-2 px-4" id="VIII_total_ad_m">
                        <p class="roboto bold">Monthly Cost</p>

                        <p class="total_yearly_m bold" style="color:#001AFF;font-size:55.29px">NA</p>


                    </div>
                    <div class="totla_fee_ad_m py-2 px-4" id="IX_total_ad_m">
                        <p class="roboto bold">Monthly Cost</p>

                        <p class="total_yearly_m bold" style="color:#001AFF;font-size:55.29px">NA</p>


                    </div>
                    <div class="totla_fee_ad_m py-2 px-4" id="X_total_ad_m">
                        <p class="roboto bold">Monthly Cost</p>

                        <p class="total_yearly_m bold" style="color:#001AFF;font-size:55.29px">NA</p>

                    </div>
                    <div class="totla_fee_ad_m py-2 px-4" id="XI_total_ad_m">
                        <p class="roboto bold">Monthly Cost</p>

                        <p class="total_yearly_m bold" style="color:#001AFF;font-size:55.29px">NA</p>



                    </div>
                    <div class="totla_fee_ad_m py-2 px-4" id="XII_total_ad_m">
                        <p class="roboto bold">Monthly Cost</p>

                        <p class="total_yearly_m bold" style="color:#001AFF;font-size:55.29px">NA</p>
                       
                    </div>


                </div>









            </div>



        </div>
        <div class="row border " style="margin:0 2% 0 1%">
            <div class=" row d-flex justify-content-between p-3">
                <div class="col-md-8">
                    <h4 class="bold">Admission Criteria & Eligibility</h4>
                </div>
                <div class="col-md-4 d-flex justify-content-center select_total_div">
                    <select id="select_class_eligibility" class="px-4 py-2">
                        <option value="prenursery">Pre_nursery</option>
                        <option value="Nursery" selected>Nursery</option>
                        <option value="LKG">LKG</option>
                        <option value="UKG">UKG</option>
                        <option value="I">Grade 1</option>
                        <option value="II">Grade 2</option>
                        <option value="III">grade 3</option>
                        <option value="IV">grade 4</option>
                        <option value="V">grdae 5</option>
                        <option value="VI">grade 6</option>
                        <option value="VII">grade 7</option>
                        <option value="VIII">grade 8</option>
                        <option value="IX">grade 9</option>
                        <option value="X">grade 10</option>
                        <option value="XI">grade 11</option>
                        <option value="XII">grade 12</option>
                    </select>

                </div>
            </div>
            <div id="prenursery_eligibility" class="eligibility">


                <div class="row mt-4">
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Eligibility (Age Qualification)</p>
                        <p class="eligible_age bold">NA </p>

                    </div>
                    <div class="col-md-4">

                        <p class="helvetica" style="font-size:17px;color:#000000">Eligibility(Marks)</p>
                        <p class="marks bold">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Total Seats</p>
                        <p class="total_seats bold">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Written Test</p>
                        <p class="written_test bold">NA </p>


                    </div>
                    <div class="col-md-4">

                        <p class="helvetica" style="font-size:17px;color:#000000">Student Interaction</p>
                        <p class="student_interaction bold">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Parents Interaction</p>
                        <p class="parents_interaction bold">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Form_availability</p>
                        <p class="form_availability bold">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">
                            Form Payment
                        </p>
                        <p class="form_payment bold">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">School timing</p>
                        <p class="school_timing bold">NA</p>

                    </div>
                </div>
            </div>
            <div id="Nursery_eligibility" class="eligibility">



                <div class="row mt-4">
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Eligibility (Age Qualification)</p>
                        <p class="eligible_age bold">NA </p>

                    </div>
                    <div class="col-md-4">

                        <p class="helvetica" style="font-size:17px;color:#000000">Eligibility(Marks)</p>
                        <p class="marks bold">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Total Seats</p>
                        <p class="total_seats bold">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Written Test</p>
                        <p class="written_test bold">NA </p>


                    </div>
                    <div class="col-md-4">

                        <p class="helvetica" style="font-size:17px;color:#000000">Student Interaction</p>
                        <p class="student_interaction bold">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Parents Interaction</p>
                        <p class="parents_interaction bold">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Form_availability</p>
                        <p class="form_availability bold">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">
                            Form Payment
                        </p>
                        <p class="form_payment bold">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">School timing</p>
                        <p class="school_timing bold">NA</p>

                    </div>
                </div>
            </div>
            <div id="LKG_eligibility" class="eligibility">
                <h3 class="roboto bold">LKG</h3>

                <div class="row mt-4">
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Eligibility (Age Qualification)</p>
                        <p class="eligible_age bold">NA </p>

                    </div>
                    <div class="col-md-4">

                        <p class="helvetica" style="font-size:17px;color:#000000">Eligibility(Marks)</p>
                        <p class="marks bold">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Total Seats</p>
                        <p class="total_seats bold">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Written Test</p>
                        <p class="written_test bold">NA </p>


                    </div>
                    <div class="col-md-4">

                        <p class="helvetica" style="font-size:17px;color:#000000">Student Interaction</p>
                        <p class="student_interaction bold">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Parents Interaction</p>
                        <p class="parents_interaction bold">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Form_availability</p>
                        <p class="form_availability bold">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">
                            Form Payment
                        </p>
                        <p class="form_payment bold">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">School timing</p>
                        <p class="school_timing bold">NA</p>

                    </div>
                </div>
            </div>
            <div id="UKG_eligibility" class="eligibility">
                <h3 class="roboto bold">UKG</h3>

                <div class="row mt-4">
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Eligibility (Age Qualification)</p>
                        <p class="eligible_age bold">NA </p>

                    </div>
                    <div class="col-md-4">

                        <p class="helvetica" style="font-size:17px;color:#000000">Eligibility(Marks)</p>
                        <p class="marks bold">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Total Seats</p>
                        <p class="total_seats bold">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Written Test</p>
                        <p class="written_test bold">NA </p>


                    </div>
                    <div class="col-md-4">

                        <p class="helvetica" style="font-size:17px;color:#000000">Student Interaction</p>
                        <p class="student_interaction bold">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Parents Interaction</p>
                        <p class="parents_interaction bold">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Form_availability</p>
                        <p class="form_availability bold">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">
                            Form Payment
                        </p>
                        <p class="form_payment bold">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">School timing</p>
                        <p class="school_timing bold">NA</p>

                    </div>
                </div>
            </div>
            <div id="I_eligibility" class="eligibility">
                <h3 class="bold roboto">Grade I</h3>


                <div class="row mt-4">
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Eligibility (Age Qualification)</p>
                        <p class="eligible_age bold">NA </p>

                    </div>
                    <div class="col-md-4">

                        <p class="helvetica" style="font-size:17px;color:#000000">Eligibility(Marks)</p>
                        <p class="marks bold">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Total Seats</p>
                        <p class="total_seats bold">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Written Test</p>
                        <p class="written_test bold">NA </p>


                    </div>
                    <div class="col-md-4">

                        <p class="helvetica" style="font-size:17px;color:#000000">Student Interaction</p>
                        <p class="student_interaction bold">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Parents Interaction</p>
                        <p class="parents_interaction bold">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Form_availability</p>
                        <p class="form_availability bold">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">
                            Form Payment
                        </p>
                        <p class="form_payment bold">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">School timing</p>
                        <p class="school_timing bold">NA</p>

                    </div>
                </div>
            </div>
            <div id="II_eligibility" class="eligibility">
                <h3 class="roboto bold">Grade II</h3>


                <div class="row mt-4">
                    <div class="col-md-4">
                        <p class="helvetica" style="font-size:17px;color:#000000">Eligibility (Age Qualification)</p>
                        <p class="eligible_age bold">NA </p>

                    </div>
                    <div class="col-md-4">

                        <p>Eligibility(Marks)</p>
                        <p class="marks">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Total Seats</p>
                        <p class="total_seats">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Written Test</p>
                        <p class="written_test">NA </p>


                    </div>
                    <div class="col-md-4">

                        <p>Student Interaction</p>
                        <p class="student_interaction">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Parents Interaction</p>
                        <p class="parents_interaction">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Form_availability</p>
                        <p class="form_availability">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>
                            Form Payment
                        </p>
                        <p class="form_payment">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>School timing</p>
                        <p class="school_timing">NA</p>

                    </div>
                </div>
            </div>
            <div id="III_eligibility" class="eligibility">
                <h3 class="roboto bold">Grade III</h3>


                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Eligibility (Age Qualification)</p>
                        <p class="eligible_age">NA </p>

                    </div>
                    <div class="col-md-4">

                        <p>Eligibility(Marks)</p>
                        <p class="marks">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Total Seats</p>
                        <p class="total_seats">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Written Test</p>
                        <p class="written_test">NA </p>


                    </div>
                    <div class="col-md-4">

                        <p>Student Interaction</p>
                        <p class="student_interaction">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Parents Interaction</p>
                        <p class="parents_interaction">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Form_availability</p>
                        <p class="form_availability">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>
                            Form Payment
                        </p>
                        <p class="form_payment">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>School timing</p>
                        <p class="school_timing">NA</p>

                    </div>
                </div>
            </div>
            <div id="IV_eligibility" class="eligibility">
                <h3 class="roboto bold">Grade IV</h3>


                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Eligibility (Age Qualification)</p>
                        <p class="eligible_age">NA </p>

                    </div>
                    <div class="col-md-4">

                        <p>Eligibility(Marks)</p>
                        <p class="marks">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Total Seats</p>
                        <p class="total_seats">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Written Test</p>
                        <p class="written_test">NA </p>


                    </div>
                    <div class="col-md-4">

                        <p>Student Interaction</p>
                        <p class="student_interaction">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Parents Interaction</p>
                        <p class="parents_interaction">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Form_availability</p>
                        <p class="form_availability">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>
                            Form Payment
                        </p>
                        <p class="form_payment">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>School timing</p>
                        <p class="school_timing">NA</p>

                    </div>
                </div>
            </div>
            <div id="V_eligibility" class="eligibility">
                <h3 class="roboto bold">Grade V</h3>

                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Eligibility (Age Qualification)</p>
                        <p class="eligible_age">NA </p>

                    </div>
                    <div class="col-md-4">

                        <p>Eligibility(Marks)</p>
                        <p class="marks">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Total Seats</p>
                        <p class="total_seats">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Written Test</p>
                        <p class="written_test">NA </p>


                    </div>
                    <div class="col-md-4">

                        <p>Student Interaction</p>
                        <p class="student_interaction">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Parents Interaction</p>
                        <p class="parents_interaction">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Form_availability</p>
                        <p class="form_availability">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>
                            Form Payment
                        </p>
                        <p class="form_payment">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>School timing</p>
                        <p class="school_timing">NA</p>

                    </div>
                </div>
            </div>
            <div id="VI_eligibility" class="eligibility">
                <h3 class="roboto bold">Grade VI</h3>


                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Eligibility (Age Qualification)</p>
                        <p class="eligible_age">NA </p>

                    </div>
                    <div class="col-md-4">

                        <p>Eligibility(Marks)</p>
                        <p class="marks">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Total Seats</p>
                        <p class="total_seats">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Written Test</p>
                        <p class="written_test">NA </p>


                    </div>
                    <div class="col-md-4">

                        <p>Student Interaction</p>
                        <p class="student_interaction">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Parents Interaction</p>
                        <p class="parents_interaction">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Form_availability</p>
                        <p class="form_availability">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>
                            Form Payment
                        </p>
                        <p class="form_payment">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>School timing</p>
                        <p class="school_timing">NA</p>

                    </div>
                </div>
            </div>
            <div id="VII_eligibility" class="eligibility">
                <h3 class="roboto bold">Grade VII</h3>


                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Eligibility (Age Qualification)</p>
                        <p class="eligible_age">NA </p>

                    </div>
                    <div class="col-md-4">

                        <p>Eligibility(Marks)</p>
                        <p class="marks">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Total Seats</p>
                        <p class="total_seats">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Written Test</p>
                        <p class="written_test">NA </p>


                    </div>
                    <div class="col-md-4">

                        <p>Student Interaction</p>
                        <p class="student_interaction">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Parents Interaction</p>
                        <p class="parents_interaction">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Form_availability</p>
                        <p class="form_availability">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>
                            Form Payment
                        </p>
                        <p class="form_payment">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>School timing</p>
                        <p class="school_timing">NA</p>

                    </div>
                </div>
            </div>
            <div id="VIII_eligibility" class="eligibility">
                <h3 class="roboto bold">Grade VIII</h3>


                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Eligibility (Age Qualification)</p>
                        <p class="eligible_age">NA </p>

                    </div>
                    <div class="col-md-4">

                        <p>Eligibility(Marks)</p>
                        <p class="marks">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Total Seats</p>
                        <p class="total_seats">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Written Test</p>
                        <p class="written_test">NA </p>


                    </div>
                    <div class="col-md-4">

                        <p>Student Interaction</p>
                        <p class="student_interaction">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Parents Interaction</p>
                        <p class="parents_interaction">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Form_availability</p>
                        <p class="form_availability">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>
                            Form Payment
                        </p>
                        <p class="form_payment">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>School timing</p>
                        <p class="school_timing">NA</p>

                    </div>
                </div>
            </div>
            <div id="IX_eligibility" class="eligibility">
                <h3 class="roboto bold">Grade IX</h3>


                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Eligibility (Age Qualification)</p>
                        <p class="eligible_age">NA </p>

                    </div>
                    <div class="col-md-4">

                        <p>Eligibility(Marks)</p>
                        <p class="marks">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Total Seats</p>
                        <p class="total_seats">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Written Test</p>
                        <p class="written_test">NA </p>


                    </div>
                    <div class="col-md-4">

                        <p>Student Interaction</p>
                        <p class="student_interaction">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Parents Interaction</p>
                        <p class="parents_interaction">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Form_availability</p>
                        <p class="form_availability">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>
                            Form Payment
                        </p>
                        <p class="form_payment">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>School timing</p>
                        <p class="school_timing">NA</p>

                    </div>
                </div>
            </div>
            <div id="X_eligibility" class="eligibility">
                <h3 class="roboto bold">Grade X</h3>


                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Eligibility (Age Qualification)</p>
                        <p class="eligible_age">NA </p>

                    </div>
                    <div class="col-md-4">

                        <p>Eligibility(Marks)</p>
                        <p class="marks">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Total Seats</p>
                        <p class="total_seats">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Written Test</p>
                        <p class="written_test">NA </p>


                    </div>
                    <div class="col-md-4">

                        <p>Student Interaction</p>
                        <p class="student_interaction">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Parents Interaction</p>
                        <p class="parents_interaction">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Form_availability</p>
                        <p class="form_availability">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>
                            Form Payment
                        </p>
                        <p class="form_payment">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>School timing</p>
                        <p class="school_timing">NA</p>

                    </div>
                </div>
            </div>
            <div id="XI_eligibility" class="eligibility">
                <h3 class="roboto bold">Grade XI</h3>


                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Eligibility (Age Qualification)</p>
                        <p class="eligible_age">NA </p>

                    </div>
                    <div class="col-md-4">

                        <p>Eligibility(Marks)</p>
                        <p class="marks">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Total Seats</p>
                        <p class="total_seats">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Written Test</p>
                        <p class="written_test">NA </p>


                    </div>
                    <div class="col-md-4">

                        <p>Student Interaction</p>
                        <p class="student_interaction">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Parents Interaction</p>
                        <p class="parents_interaction">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Form_availability</p>
                        <p class="form_availability">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>
                            Form Payment
                        </p>
                        <p class="form_payment">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>School timing</p>
                        <p class="school_timing">NA</p>

                    </div>
                </div>
            </div>
            <div id="XII_eligibility" class="eligibility">
                <h3 class="roboto bold">Grade XII</h3>


                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Eligibility (Age Qualification)</p>
                        <p class="eligible_age">NA </p>

                    </div>
                    <div class="col-md-4">

                        <p>Eligibility(Marks)</p>
                        <p class="marks">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Total Seats</p>
                        <p class="total_seats">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Written Test</p>
                        <p class="written_test">NA </p>


                    </div>
                    <div class="col-md-4">

                        <p>Student Interaction</p>
                        <p class="student_interaction">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>Parents Interaction</p>
                        <p class="parents_interaction">NA </p>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <p>Form_availability</p>
                        <p class="form_availability">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>
                            Form Payment
                        </p>
                        <p class="form_payment">NA</p>

                    </div>
                    <div class="col-md-4">
                        <p>School timing</p>
                        <p class="school_timing">NA</p>

                    </div>
                </div>
            </div>





            <div class="row mt-4">
                <p style="font-size:20px" class="bold">Documents required at the time of application / admission</p>

                <div class="col-md-6">
                    <p class="helvetica" style="font-size:17px">Transfer Certificate</p>
                    <p class="helvetica" style="font-size:17px">Residence Proof</p>
                    <p class="helvetica" style="font-size:17px">Birth Certificate</p>
                    <p class="helvetica" style="font-size:17px">Photograph - Child</p>
                    <p class="helvetica" style="font-size:17px">Photograph - Parents/Guardian</p>
                </div>
                <div class="col-md-6">
                    <p class="helvetica" style="font-size:17px">Aadhar Card - Parents</p>
                    <p class="helvetica" style="font-size:17px">Aadhar Card - Child</p>
                    <p class="helvetica" style="font-size:17px">Migration Certificate</p>
                    <p class="helvetica" style="font-size:17px">Medical Reports</p>
                    <p class="helvetica" style="font-size:17px">Marksheet/Report card (if applicable)</p>


                </div>


            </div>
            <div class="row mt-4">
                <p style="font-size:20px" class="bold">Additional Notes</p>
                <p class="helvetica" style="font-size:17px">Transfer Certificate Requires from Class 2 Onwards</p>
                <p class="helvetica" style="font-size:17px">Report Card Requires from Class 3 Onwards</p>
                <p class="helvetica" style="font-size:17px">Migration Certificate Requires only in the case of admission of International Student</p>





            </div>



        </div>





    </div>
    <div id="tab3" class="tab-pane p-5" style="background-color:#F9F9FF; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">

        <h1 class="mt-3 mb-5 roboto bold">Facilities</h1>
        <div class="row">
            <div class="col-md-3">
                <p class="bold helvetica" style="font-size:18px">Class</p>
                <div class="class_facility helvetica">

                </div>
            </div>
            <div class="col-md-3 ">
                <p class="bold helvetica" style="font-size:18px">Boarding</p>
                <div class="boarding_facility helvetica">

                </div>

            </div>
            <div class="col-md-3 ">
                <p class="bold helvetica" style="font-size:18px">Infrastructure</p>
                <div class="infrastructure_facility helvetica">

                </div>

            </div>
            <div class="col-md-3  ">
                <p class="bold helvetica" style="font-size:18px">Safety & Security</p>
                <div class="security_facility helvetica">

                </div>

            </div>


        </div>
        <div class="row" style="margin-top:7%">
            <div class="col-md-3">
                <p class="bold helvetica" style="font-size:18px">Advanced Facilities</p>
                <div class="advanced_facilities helvetica">

                </div>

            </div>
            <div class="col-md-3">
                <p class="bold helvetica" style="font-size:18px">Extra Curricular</p>
                <div class="extra_facilities helvetica">

                </div>

            </div>
            <div class="col-md-3">
                <p class="bold helvetica" style="font-size:18px">Sports and Fitness</p>
                <div class="sports_facility helvetica">

                </div>
            </div>
            <div class="col-md-3">
                <p class="bold helvetica" style="font-size:18px">Lab</p>

                <div class="lab_facility helvetica">

                </div>

            </div>

        </div>
        <div class="row" style="margin-top:8%">
            <div class="col-md-6">
                <p class="bold helvetica" style="font-size:18px">Disables Friendly</p>
                <div class="disabled_facility helvetica">

                </div>


            </div>

        </div>


    </div>
    <div id="tab4" class="tab-pane p-4" style="background-color:#F9F9FF

">
        <div class="row d-flex justify-content-center image_tab_div gap-2 mb-5">
            <div class="col-md-2 image_tab gal_tab">
                <button data="pic1" class="btn btn_pic active px-4 w-100" style="box-shadow: none;border-radius:23px">All</button>
            </div>
            <div class="col-md-2 gal_tab image_tab">
                <button data="pic2" class="btn btn_pic px-4 w-100" style="box-shadow: none;border-radius:23px">Infrastructure</button>

            </div>
            <div class="col-md-2 gal_tab image_tab">
                <button data="pic3" class="btn  btn_pic px-4 w-100" style="box-shadow: none;border-radius:23px">Classroom</button>

            </div>
            <div class="col-md-2 gal_tab image_tab">
                <button data="pic4" class="btn  btn_pic px-4 w-100" style="box-shadow: none;border-radius:23px">Library</button>

            </div>
            <div class="col-md-2 gal_tab image_tab">
                <button data="pic5" class="btn  btn_pic px-4 w-100" style="box-shadow: none;border-radius:23px">Playground</button>

            </div>



        </div>
        <div id="pic1" class="photo active">
            <?php
            $data_images = $data["images"];
            $image_count = count($data_images);
            $category_exist = false;
            ?>

            <?php for ($i = 0; $i < $image_count; $i += 4) : ?>
                <div class="row mt-5 justify-content-center">
                    <?php for ($j = $i; $j < $i + 4 && $j < $image_count; $j++) : ?>
                        <div class="col-md-3 gal_image">
                            <img class="" width="100%" height="100%" src="data:image/jpeg;base64,<?php echo $data_images[$j]->image; ?>" class="">
                        </div>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>


        </div>
        <div id="pic2" class="photo ">
            <?php
            $data_images = $data["images"];
            $image_count = count($data_images);
            $category_exist = false;
            ?>

            <?php for ($i = 0; $i < $image_count; $i += 4) : ?>
                <div class="row mt-5 gal_image">
                    <?php for ($j = $i; $j < $i + 4 && $j < $image_count; $j++) : ?>
                        <?php if ($data_images[$j]->category === "Infrastructure") : ?>
                            <?php $category_exist = true ?>

                            <div class="col-md-3">
                                <img width="100%" height="100%" src="data:image/jpeg;base64,<?php echo $data_images[$j]->image; ?>" class="">
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>
            <?php if (!$category_exist) : ?>
                <div class="d-flex justify-content-center">
                    No data available
                </div>
            <?php endif; ?>
        </div>
        <div id="pic3" class="photo">
            <?php
            $data_images = $data["images"];
            $image_count = count($data_images);
            $category_exist = false;

            ?>

            <?php for ($i = 0; $i < $image_count; $i += 4) : ?>
                <div class="row mt-5 gal_image">
                    <?php for ($j = $i; $j < $i + 4 && $j < $image_count; $j++) : ?>
                        <?php if ($data_images[$j]->category === "Classroom") : ?>
                            <?php $category_exist = true ?>

                            <div class="col-md-3">
                                <img width="100%" height="100%" src="data:image/jpeg;base64,<?php echo $data_images[$j]->image; ?>">
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>
            <?php if (!$category_exist) : ?>
                <div class="d-flex justify-content-center">
                    No data available
                </div>
            <?php endif; ?>
        </div>
        <div id="pic4" class="photo">
            <?php
            $data_images = $data["images"];
            $image_count = count($data_images);
            $category_exist = false;
            ?>

            <?php for ($i = 0; $i < $image_count; $i += 4) : ?>
                <div class="row mt-5 gal_image">
                    <?php for ($j = $i; $j < $i + 4 && $j < $image_count; $j++) : ?>
                        <?php if ($data_images[$j]->category === "Library") : ?>
                            <?php $category_exist = true ?>
                            <div class="col-md-3">
                                <img width="100%" height="100%" src="data:image/jpeg;base64,<?php echo $data_images[$j]->image; ?>
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>
            <?php if (!$category_exist) : ?>
                <div class=" d-flex justify-content-center">
                                No data available
                            </div>
                        <?php endif; ?>
                </div>
                <div id="pic5" class="photo">
                    <?php
                    $data_images = $data["images"];
                    $image_count = count($data_images);
                    $category_exist = false;
                    ?>

                    <?php for ($i = 0; $i < $image_count; $i += 4) : ?>
                        <div class="row mt-5 justify-content-center gal_image">
                            <?php for ($j = $i; $j < $i + 4 && $j < $image_count; $j++) : ?>
                                <?php if ($data_images[$j]->category === "Playground") : ?>
                                    <?php $category_exist = true ?>
                                    <div class="col-md-3">
                                        <img width="100%" height="100%" src="data:image/jpeg;base64,<?php echo $data_images[$j]->image; ?>" class="img-fluid">
                                    </div>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </div>
                    <?php endfor; ?>
                    <?php if (!$category_exist) : ?>
                        <div class="d-flex justify-content-center">
                            No data available
                        </div>
                    <?php endif; ?>
                </div>
        </div>



    </div>
</div>







<?php $this->load->view('common/footer'); ?>
<script>
    $(".photo").each(function() {
        if ($(this).hasClass("active")) {
            $(this).css("display", "block");
        } else {
            $(this).css("display", "none");
        }
    });
    $(".btn_pic").each(function() {
        if ($(this).hasClass("active")) {
            return;
        } else {
            $(this).css("border", "1px solid grey");
        }
    });



    //after clicking on btn
    $(".btn_pic").on("click", function() {
        //for the div blocks
        const data_attribute = $(this).attr("data");
        $(".photo").css("display", "none");
        $(`#${data_attribute}`).css("display", "block");

        //for the buttons
        $(".btn_pic").removeClass("active");
        $(".btn_pic").css("border", "1px solid grey")
        $(this).addClass("active")
        $(this).css("border", "none");











    })






    var id = <?php echo $data["basic_detail"][0]->id  ?>;



    $(document).ready(function() {
        $(".border").click(function() {
            var $dropdownList = $(this).next('.dropdown-list');
            $dropdownList.slideToggle();
        });
        $('.fee').css('display', 'none');
        const selectedValue = $('#select_class').val();

        //this is for setting the data for  the nursery
        $.ajax({

            url: "<?php echo base_url("welcome/feedetail") ?>",
            method: "post",
            dataType: "json",
            data: {
                selected: selectedValue,
                id: id,


            },
            success: function(data) {

                var feename = data.feename;
                var frequency = data.frequency;

                var amount = data.amount;


                if (feename.length != 0 || frequency.length != 0 || amount.length != 0) {
                    $('.nur_feename').each(function(index, element) {


                        $(this).text(`${feename[index]}`);
                    });
                    $('.nur_frequency').each(function(index, element) {
                        if (frequency[index] === "" || frequency[index] === null || frequency[index] === undefined) {
                            $(this).text('NA');
                        } else {
                            $(this).text(`${frequency[index]}`);
                        }
                    });
                    $('.nur_amount').each(function(index, element) {
                        if (amount[index] == 0) {
                            $(this).text('NA');
                        } else {
                            $(this).text(`${amount[index]}`);
                        }
                    });

                } else {
                    $('.nur_feename').each(function(index, element) {


                        $(this).text(`NA`);
                    });
                    $('.nur_frequency').each(function(index, element) {
                        $(this).text("NA");
                    });
                    $('.nur_amount').each(function(index, element) {
                        $(this).text("NA");
                    });



                }








            }




        })
        $(`#${selectedValue}`).css('display', 'flex');
        var selectedText = $(this).find('option:selected').text();

        $('#select_class').change(function() {

            $("#class_name_fee").text($("#select_class").val());
            $('.fee').css('display', 'none');
            const selectedValuechange = $('#select_class').val();
            $(`#${selectedValuechange}`).css('display', 'flex');
            const selectedValue_new = $('#select_class').val();
            $.ajax({
                url: "<?php echo base_url("welcome/feedetail") ?>",
                method: "post",
                dataType: "json",
                data: {
                    selected: selectedValue_new,
                    id: id,

                },
                success: function(data) {
                    if (data.class == "Prenursery") {
                        var feename = data.feename;
                        var frequency = data.frequency;
                        var amount = data.amount;

                        if (feename.length != 0 || frequency.length != 0 || amount.length != 0) {
                            $('.prenur_feename').each(function(index, element) {
                                if (amount[index] == 0) {
                                    $(this).text('NA');
                                } else {
                                    $(this).text(`${amount[index]}`);
                                }


                            });
                            $('.prenur_frequency').each(function(index, element) {


                                $(this).text(`${frequency[index]}`);
                            });
                            $('.prenur_amount').each(function(index, element) {
                                if (amount[index] == 0) {
                                    $(this).text('NA');
                                } else {
                                    $(this).text(`${amount[index]}`);
                                }


                            });


                        } else {
                            $('.prenur_feename').each(function(index, element) {
                                $(this).text("NA");


                            });
                            $('.prenur_frequency').each(function(index, element) {


                                $(this).text("NA");
                            });
                            $('.prenur_amount').each(function(index, element) {
                                $(this).text("NA");


                            });


                        }


                    }
                    if (data.class = "LKG") {
                        console.log(data);
                        var feename = data.feename;
                        var frequency = data.frequency;

                        var amount = data.amount;
                        if (feename.length != 0 || frequency.length != 0 || amount.length != 0) {
                            $('.lkg_feename').each(function(index, element) {


                                $(this).text(`${feename[index]}`);
                            });
                            $('.lkg_frequency').each(function(index, element) {


                                $(this).text(`${frequency[index]}`);
                            });
                            $('.lkg_amount').each(function(index, element) {


                                if (amount[index] == 0) {
                                    $(this).text('NA');
                                } else {
                                    $(this).text(`${amount[index]}`);
                                }
                            });
                        } else {
                            $('.lkg_feename').each(function(index, element) {


                                $(this).text("NA");
                            });
                            $('.lkg_frequency').each(function(index, element) {


                                $(this).text("NA");
                            });
                            $('.lkg_amount').each(function(index, element) {

                                $(this).text("NA");

                            });

                        }



                    }
                    if (data.class = "UKG") {
                        var feename = data.feename;
                        var frequency = data.frequency;
                        var amount = data.amount;

                        if (feename.length != 0 || frequency.length != 0 || amount.length != 0) {
                            $('.ukg_feename').each(function(index, element) {


                                $(this).text(`${feename[index]}`);
                            });
                            $('.ukg_frequency').each(function(index, element) {


                                $(this).text(`${frequency[index]}`);
                            });
                            $('.ukg_amount').each(function(index, element) {
                                if (amount[index] == 0) {
                                    $(this).text('NA');
                                } else {
                                    $(this).text(`${amount[index]}`);
                                }


                            });


                        } else {

                            $('.ukg_feename').each(function(index, element) {


                                $(this).text("NA");
                            });
                            $('.ukg_frequency').each(function(index, element) {


                                $(this).text("NA");
                            });
                            $('.ukg_amount').each(function(index, element) {
                                $(this).text("NA");


                            });


                        }



                    }
                    if (data.class = "I") {
                        var feename = data.feename;
                        var frequency = data.frequency;

                        var amount = data.amount;
                        if (feename.length != 0 || frequency.length != 0 || amount.length != 0) {
                            $('.grade1_feename').each(function(index, element) {


                                $(this).text(`${feename[index]}`);
                            });
                            $('.grade1_frequency').each(function(index, element) {


                                $(this).text(`${frequency[index]}`);
                            });
                            $('.grade1_amount').each(function(index, element) {
                                if (amount[index] == 0) {
                                    $(this).text('NA');
                                } else {
                                    $(this).text(`${amount[index]}`);
                                }


                            });
                        } else {
                            $('.grade1_feename').each(function(index, element) {


                                $(this).text("NA");
                            });
                            $('.grade1_frequency').each(function(index, element) {


                                $(this).text("NA");
                            });
                            $('.grade1_amount').each(function(index, element) {
                                $(this).text("NA");


                            });



                        }



                    }
                    if (data.class = "II") {
                        var feename = data.feename;
                        var frequency = data.frequency;

                        var amount = data.amount;
                        if (feename.length != 0 || frequency.length != 0 || amount.length != 0) {
                            $('.grade2_feename').each(function(index, element) {

                                $(this).text(`${feename[index]}`);
                            });
                            $('.grade2_frequency').each(function(index, element) {


                                $(this).text(`${frequency[index]}`);
                            });
                            $('.grade2_amount').each(function(index, element) {

                                if (amount[index] == 0) {
                                    $(this).text('NA');
                                } else {
                                    $(this).text(`${amount[index]}`);
                                }
                            });
                        } else {
                            $('.grade2_feename').each(function(index, element) {

                                $(this).text("NA");
                            });
                            $('.grade2_amount').each(function(index, element) {

                                $(this).text("NA");
                            });
                            $('.grade2_frequency').each(function(index, element) {


                                $(this).text(`NA`);
                            });



                        }


                    }
                    if (data.class = "III") {
                        var feename = data.feename;
                        var frequency = data.frequency;

                        var amount = data.amount;

                        if (feename.length != 0 || frequency.length != 0 || amount.length != 0) {
                            $('.grade3_feename').each(function(index, element) {


                                $(this).text(`${feename[index]}`);
                            });
                            $('.grade3_frequency').each(function(index, element) {


                                $(this).text(`${frequency[index]}`);
                            });
                            $('.grade3_amount').each(function(index, element) {


                                if (amount[index] == 0) {
                                    $(this).text('NA');
                                } else {
                                    $(this).text(`${amount[index]}`);
                                }
                            });

                        } else {
                            $('.grade3_feename').each(function(index, element) {


                                $(this).text(`NA`);
                            });
                            $('.grade3_frequency').each(function(index, element) {


                                $(this).text(`NA`);
                            });
                            $('.grade3_amount').each(function(index, element) {
                                $(this).text("NA");


                            });



                        }

                    }
                    if (data.class = "IV") {
                        var feename = data.feename;
                        var frequency = data.frequency;
                        var amount = data.amount;

                        if (feename.length != 0 || frequency.length != 0 || amount.length != 0) {
                            $('.grade4_feename').each(function(index, element) {


                                $(this).text(`${feename[index]}`);
                            });
                            $('.grade4_frequency').each(function(index, element) {


                                $(this).text(`${frequency[index]}`);
                            });
                            $('.grade4_amount').each(function(index, element) {


                                if (amount[index] == 0) {
                                    $(this).text('NA');
                                } else {
                                    $(this).text(`${amount[index]}`);
                                }
                            });

                        } else {
                            $('.grade4_feename').each(function(index, element) {


                                $(this).text(`NA`);
                            });
                            $('.grade4_frequency').each(function(index, element) {


                                $(this).text(`NA`);
                            });
                            $('.grade4_amount').each(function(index, element) {

                                $(this).text("NA");

                            });




                        }



                    }
                    if (data.class = "V") {
                        var feename = data.feename;
                        var frequency = data.frequency;
                        var amount = data.amount;
                        if (feename.length != 0 || frequency.length != 0 || amount.length != 0) {

                            $('.grade5_feename').each(function(index, element) {


                                $(this).text(`${feename[index]}`);
                            });
                            $('.grade5_frequency').each(function(index, element) {


                                $(this).text(`${frequency[index]}`);
                            });
                            $('.grade5_amount').each(function(index, element) {


                                if (amount[index] == 0) {
                                    $(this).text('NA');
                                } else {
                                    $(this).text(`${amount[index]}`);
                                }
                            });
                        } else {
                            $('.grade5_feename').each(function(index, element) {


                                $(this).text(`NA`);
                            });
                            $('.grade5_frequency').each(function(index, element) {


                                $(this).text(`NA`);
                            });
                            $('.grade5_amount').each(function(index, element) {

                                $(this).text("NA");

                            });


                        }




                    }
                    if (data.class = "VI") {
                        var feename = data.feename;
                        var frequency = data.frequency;

                        var amount = data.amount;

                        if (feename.length != 0 || frequency.length != 0 || amount.length != 0) {
                            $('.grade6_feename').each(function(index, element) {


                                $(this).text(`${feename[index]}`);
                            });
                            $('.grade6_frequency').each(function(index, element) {


                                $(this).text(`${frequency[index]}`);
                            });
                            $('.grade6_amount').each(function(index, element) {


                                if (amount[index] == 0) {
                                    $(this).text('NA');
                                } else {
                                    $(this).text(`${amount[index]}`);
                                }
                            });


                        } else {
                            $('.grade6_feename').each(function(index, element) {


                                $(this).text(`NA`);
                            });
                            $('.grade6_frequency').each(function(index, element) {


                                $(this).text(`NA`);
                            });
                            $('.grade6_amount').each(function(index, element) {

                                $(this).text("NA");

                            });



                        }


                    }
                    if (data.class = "VII") {
                        var feename = data.feename;
                        var frequency = data.frequency;

                        var amount = data.amount;
                        if (feename.length != 0 || frequency.length != 0 || amount.length != 0) {
                            $('.grade7_feename').each(function(index, element) {


                                $(this).text(`${feename[index]}`);
                            });
                            $('.grade7_frequency').each(function(index, element) {


                                $(this).text(`${frequency[index]}`);
                            });
                            $('.grade7_amount').each(function(index, element) {


                                if (amount[index] == 0) {
                                    $(this).text('NA');
                                } else {
                                    $(this).text(`${amount[index]}`);
                                }
                            });
                        } else {
                            $('.grade7_feename').each(function(index, element) {


                                $(this).text(`NA`);
                            });
                            $('.grade7_frequency').each(function(index, element) {


                                $(this).text(`NA`);
                            });
                            $('.grade7_amount').each(function(index, element) {

                                $(this).text("NA");

                            });



                        }



                    }
                    if (data.class = "VIII") {

                        var feename = data.feename;
                        var frequency = data.frequency;

                        var amount = data.amount;
                        if (feename.length != 0 || frequency.length != 0 || amount.length != 0) {
                            $('.grade8_feename').each(function(index, element) {


                                $(this).text(`${feename[index]}`);
                            });
                            $('.grade8_frequency').each(function(index, element) {


                                $(this).text(`${frequency[index]}`);
                            });
                            $('.grade8_amount').each(function(index, element) {


                                if (amount[index] == 0) {
                                    $(this).text('NA');
                                } else {
                                    $(this).text(`${amount[index]}`);
                                }
                            });
                        } else {
                            $('.grade8_feename').each(function(index, element) {


                                $(this).text(`NA`);
                            });
                            $('.grade8_frequency').each(function(index, element) {


                                $(this).text(`NA`);
                            });
                            $('.grade8_amount').each(function(index, element) {


                                $(this).text(`NA`);
                            });




                        }



                    }
                    if (data.class = "IX") {

                        var feename = data.feename;
                        var frequency = data.frequency;
                        var amount = data.amount;
                        if (feename.length != 0 || frequency.length != 0 || amount.length != 0) {
                            $('.grade9_feename').each(function(index, element) {


                                $(this).text(`${feename[index]}`);
                            });
                            $('.grade9_frequency').each(function(index, element) {


                                $(this).text(`${frequency[index]}`);
                            });
                            $('.grade9_amount').each(function(index, element) {


                                if (amount[index] == 0) {
                                    $(this).text('NA');
                                } else {
                                    $(this).text(`${amount[index]}`);
                                }
                            });


                        } else {
                            $('.grade9_feename').each(function(index, element) {


                                $(this).text(`NA`);
                            });
                            $('.grade9_frequency').each(function(index, element) {


                                $(this).text(`NA`);
                            });
                            $('.grade9_amount').each(function(index, element) {
                                $(this).text(`NA`);

                            });



                        }




                    }
                    if (data.class = "X") {
                        var feename = data.feename;
                        var frequency = data.frequency;

                        if (feename.length != 0 || frequency.length != 0 || amount.length != 0) {
                            $('.grade10_feename').each(function(index, element) {


                                $(this).text(`${feename[index]}`);
                            });
                            $('.grade10_frequency').each(function(index, element) {


                                $(this).text(`${frequency[index]}`);
                            });
                            $('.grade10_amount').each(function(index, element) {


                                if (amount[index] == 0) {
                                    $(this).text('NA');
                                } else {
                                    $(this).text(`${amount[index]}`);
                                }
                            });



                        } else {
                            $('.grade10_feename').each(function(index, element) {


                                $(this).text(`NA`);
                            });


                        }


                    }
                    if (data.class = "XI") {
                        var feename = data.feename;
                        var frequency = data.frequency;

                        var amount = data.amount;
                        if (feename.length != 0 || frequency.length != 0 || amount.length != 0) {
                            $('.grade11_feename').each(function(index, element) {

                                $(this).text(`${feename[index]}`);
                            });
                            $('.grade11_frequency').each(function(index, element) {

                                $(this).text(`${frequency[index]}`);
                            });
                            $('.grade11_amount').each(function(index, element) {

                                if (amount[index] == 0) {
                                    $(this).text('NA');
                                } else {
                                    $(this).text(`${amount[index]}`);
                                }
                            });
                        } else {
                            $('.grade11_feename').each(function(index, element) {

                                $(this).text(`NA`);
                            });
                            $('.grade11_frequency').each(function(index, element) {

                                $(this).text(`NA`);
                            });
                            $('.grade11_amount').each(function(index, element) {

                                $(this).text(`NA`);

                            });



                        }




                    }
                    if (data.class = "XII") {
                        var feename = data.feename;
                        var frequency = data.frequency;
                        var amount = data.amount;
                        if (feename.length != 0 || frequency.length != 0 || amount.length != 0) {

                            $('.grade12_feename').each(function(index, element) {


                                $(this).text(`${feename[index]}`);
                            });
                            $('.grade12_frequency').each(function(index, element) {


                                $(this).text(`${frequency[index]}`);
                            });
                            $('.grade12_amount').each(function(index, element) {

                                if (amount[index] == 0) {
                                    $(this).text('NA');
                                } else {
                                    $(this).text(`${amount[index]}`);
                                }
                            });

                        } else {
                            $('.grade12_feename').each(function(index, element) {


                                $(this).text(`NA`);
                            });
                            $('.grade12_frequency').each(function(index, element) {


                                $(this).text(`NA`);
                            });
                            $('.grade12_amount').each(function(index, element) {

                                $(this).text(`NA`)
                            });



                        }



                    }






                }










            })




        });

        //this is for the eleigibility
        $('.eligibility').css('display', 'none');
        const selectedValueeligibility = $('#select_class_eligibility').val();
        $(`#${selectedValue}_eligibility`).css('display', 'block');
        $('#select_class_eligibility').change(function() {
            $('.eligibility').css('display', 'none');
            const selectedValuechange_eligibilty = $('#select_class_eligibility').val();
            $(`#${selectedValuechange_eligibilty}_eligibility`).css('display', 'block');

        });




    });

    //this is for the total fee wala  tab in overview

    $(".totla_fee").hide();
    var selected = $("#select_total").val();
    $(`#${selected}`).show();

    $("#select_total").on("change", function() {
        $(".totla_fee").hide();
        var total = $("#select_total").val();
        $(`#${total}`).show();





    })
    //this is for the fee wala tab in the admission
    $(".totla_fee_ad").hide();
    var selected_ad = $("#select_total_ad").val();
    $(`#${selected_ad}`).show();
    $("#select_total_ad").on("change", function() {
        $(".totla_fee_ad").hide();
        var total = $("#select_total_ad").val();
        $(`#${total}`).show();





    })
    //this is for the monthly 
    $(".totla_fee_ad_m").hide();
    var selected_ad_m = $("#select_total_ad_m").val();
    $(`#${selected_ad_m}`).show();
    $("#select_total_ad_m").on("change", function() {
        $(".totla_fee_ad_m").hide();
        var total = $("#select_total_ad_m").val();
        $(`#${total}`).show();





    })

    //this is for the total feeee insertion and montlhy fee insertion in admission
    var total_fee_array = [];
    var monthly_fee = [];
    var total_fee = <?php echo json_encode($data["fee"]) ?>;

    total_fee.forEach(function(item, index) {
        if (item.feename == "total_fee") {
            total_fee_array.push(item.amount);
        }
        if (item.feename == "monthly_fee") {
            monthly_fee.push(item.amount);
        }

        total_fee_array.forEach(function(item, index) {
            var textToShow = item == 0 ? "NA" : "₹" + item.toString(); // Concatenate rupee symbol with item value
            $(".total_yearly_y").eq(index).text(textToShow);

        });
        monthly_fee.forEach(function(item, index) {
            var textToShow = item == 0 ? "NA" : "₹" + item.toString(); // Concatenate rupee symbol with item value
            $(".total_yearly_m").eq(index).text(textToShow);

        });






    });


    //this is for the total fee insertion in the overview in the totlal 
    total_fee_array.forEach(function(item, index) {
        var textToShow = item == 0 ? "NA" : "₹" + item.toString(); // Concatenate rupee symbol with item value
        $(".total_yearly_o").eq(index).text(textToShow);

    });

    //this is for the eligobilty criteria


    var data = <?php echo json_encode($data["eligiblity"]) ?>;

    data.forEach(function(item, index) {
        var textshoweligible = item.eligible_age === "0" ? "NA" : item.eligible_age;
        $(".eligible_age").eq(index).text(textshoweligible);
        var text_eligible_marks = item.eligible_marks === "0" ? "NA" : item.eligible_marks;
        $(".marks").eq(index).text(text_eligible_marks);
        var total_seats = item.total_seats === "0" ? "NA" : item.total_seats;
        $(".total_seats").eq(index).text(total_seats)
        $(".written_test").eq(index).text(item.written_test);
        $(".student_interaction").eq(index).text(item.student_interaction);
        $(".parents_interaction").eq(index).text(item.parents_interaction);
        $(".form_availability").eq(index).text(item.form_availabilty);
        $(".form_payment").eq(index).text(item.form_paymnet);
        $(".school_timing").eq(index).text(`${item.timing_from === '00:00' ? 'NA' : item.timing_from},${item.timing_to === '00:00' ? 'NA' : item.timing_to}`);

    });

    //this is for the facility
    const data1 = <?php echo json_encode($data["facility"]) ?>;

    var class_facility_array = data1[0].class_facilities.split(",");
    var boading_facility_array = data1[0].boarding.split(",");
    var infrastructure_facility_array = data1[0].infrastructure.split(",");
    var safety_facility = data1[0].safety_and_security.split(",");
    var advanced_facility = data1[0].advance_facilities.split(",");
    var extra_curricular_activity = data1[0].extra_curricular.split(",");
    var sports_facility = data1[0].sports_and_faclities.split(",");
    var lab_facility = data1[0].lab.split(",");
    var disabled_facility = data1[0].disable_friendly.split(",")

    class_facility_array.forEach(function(item, index) {
        if (item === "NA") {
            $(".class_facility").append(`<li style="" class="list-unstyled my-2">${item}</li>`);
        } else {
            $(".class_facility").append(`<li style="" class="list-unstyled my-2"><span style="font-size:10px" class="tick-wrapper">&#10004;</span> ${item}</li>`);
        }

    });
    boading_facility_array.forEach(function(item, index) {

        if (item === "NA") {
            $(".boarding_facility").append(`<li style="" class="list-unstyled my-2">${item}</li>`);
        } else {
            $(".boarding_facility").append(`<li style="" class="list-unstyled my-2"><span style="font-size:10px" class="tick-wrapper">&#10004;</span> ${item}</li>`);
        }

    });
    infrastructure_facility_array.forEach(function(item, index) {
        if (item === "NA") {
            $(".infrastructure_facility").append(`<li style="" class="list-unstyled my-2">${item}</li>`);
        } else {
            $(".infrastructure_facility").append(`<li style="" class="list-unstyled my-2"><span style="font-size:10px" class="tick-wrapper">&#10004;</span> ${item}</li>`);
        }

    })
    safety_facility.forEach(function(item, index) {
        if (item === "NA") {
            $(".security_facility").append(`<li style="" class="list-unstyled my-2">${item}</li>`);
        } else {
            $(".security_facility").append(`<li style="" class="list-unstyled my-2"><span style="font-size:10px" class="tick-wrapper">&#10004;</span> ${item}</li>`);
        }






    });

    advanced_facility.forEach(function(item, index) {
        if (item === "NA") {
            $(".advanced_facilities").append(`<li style="" class="list-unstyled my-2">${item}</li>`);
        } else {
            $(".advanced_facilities").append(`<li style="" class="list-unstyled my-2"><span style="font-size:10px" class="tick-wrapper">&#10004;</span> ${item}</li>`);
        }





    })
    extra_curricular_activity.forEach(function(item, index) {
        if (item === "NA") {
            $(".extra_facilities").append(`<li style="" class="list-unstyled my-2">${item}</li>`);
        } else {
            $(".extra_facilities").append(`<li style="" class="list-unstyled my-2"><span style="font-size:10px" class="tick-wrapper">&#10004;</span> ${item}</li>`);
        }






    });
    sports_facility.forEach(function(item, index) {
        if (item === "NA") {
            $(".sports_facility").append(`<li style="" class="list-unstyled my-2">${item}</li>`);
        } else {
            $(".sports_facility").append(`<li style="" class="list-unstyled my-2"><span style="font-size:10px" class="tick-wrapper">&#10004;</span> ${item}</li>`);
        }







    });
    lab_facility.forEach(function(item, index) {

        if (item === "NA") {
            $(".lab_facility").append(`<li style="" class="list-unstyled my-2">${item}</li>`);
        } else {
            $(".lab_facility").append(`<li style="" class="list-unstyled my-2"><span style="font-size:10px" class="tick-wrapper">&#10004;</span> ${item}</li>`);
        }





    });
    disabled_facility.forEach(function(item, index) {
        if (item == "NA") {
            $(".disabled_facility").append(`<li  class="list-unstyled my-2 text-success bold"> ${item}</li>`);
        } else {
            $(".disabled_facility").append(`<li  class="list-unstyled my-2"><span style="font-size:10px" class="tick-wrapper">&#10004;</span> ${item}</li>`);
        }

    })

    //for the images

    $images = <?php echo json_encode($data["images"]) ?>;
    console.log($images);
</script>