<?php $this->load->view('common/header'); ?>
<div class="row mt-4" style="padding:0px 0px;margin:0px 0px">
    <div class="row" style="padding:0px 0px;margin:0px 0px">

        <div class="col-md-2 d-flex flex-column">
            <h3 class="roboto bold">Filters</h3>
            <select>
                <option selected>class</option>
            </select>
            <select>
                <option selected>Board</option>
            </select>
            <select>
                <option selected>School Type</option>
            </select>
        </div>
        <div class="col-md-10">
            <h1 class="roboto bold">
                Top Schools in <span style="color:#001AFF"><a>India</a></span>
            </h1>
            <div class="tabs" style="justify-content:space-between">
                <div class="tab active roboto bold " onclick="openTab(event, 'tab1')">All</div>
                <div class="tab roboto bold" onclick="openTab(event, 'tab2')">Day School</div>
                <div class="tab roboto bold" onclick="openTab(event, 'tab3')">Boarding School</div>
                <div class="tab roboto bold" onclick="openTab(event, 'tab4')">Day Boarding School</div>
                <div class="tab roboto bold" onclick="openTab(event, 'tab4')">Play School</div>

            </div>
            <div class="tab-content" style="width:100%;">
                <div id="tab1" class="tab-pane active" style="margin:0px 0px!important">
                    <div class="row mt-2" style="border:2px solid red;">
                        <div class="col-md-5" style="padding:0px 0px">
                            <img height="100%" width="100%" src="<?php echo IMG_URL . 'Rectangle 42 (3).png'; ?>" alt="Image Description">
                        </div>
                        <div class="col-md-7">
                            <div>
                                <h1>Name Of School</h1>
                                <p class="roboto grey"><span><img height="20px" width="20px" src="<?php echo IMG_URL . 'map-pin.png'; ?>" /></span> Sec 56, Gurugram</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6 roboto">
                                    <p class="roboto">Class Offered</p>
                                    <p class="bold grey roboto">Pre-Nursery to 12th</p>
                                </div>
                                <div class="col-md-6">
                                    <p>Student Facility Ratio</p>
                                    <p>1:25</p>

                                </div>


                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="<?php echo base_url("school/details") ?>"><button style="border:2px solid #001AFF;color:#001AFF" class="btn roboto px-4 m-3">View Detail</button></a>
                            </div>

                        </div>


                    </div>
                    <div class="row mt-2" style="border:2px solid red;">
                        <div class="col-md-5" style="padding:0px 0px">
                            <img height="100%" width="100%" src="<?php echo IMG_URL . 'Rectangle 42 (3).png'; ?>" alt="Image Description">
                        </div>
                        <div class="col-md-7">
                            <div>
                                <h1>Name Of School</h1>
                                <p class="roboto grey"><span><img height="20px" width="20px" src="<?php echo IMG_URL . 'map-pin.png'; ?>" /></span> Sec 56, Gurugram</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6 roboto">
                                    <p class="roboto">Class Offered</p>
                                    <p class="bold grey roboto">Pre-Nursery to 12th</p>
                                </div>
                                <div class="col-md-6">
                                    <p>Student Facility Ratio</p>
                                    <p>1:25</p>

                                </div>


                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="<?php echo base_url("school/details") ?>"><button style="border:2px solid #001AFF;color:#001AFF" class="btn roboto px-4 m-3">View Detail</button></a>
                            </div>


                        </div>




                    </div>
                    <div class="row mt-2" style="border:2px solid red;">
                        <div class="col-md-5" style="padding:0px 0px">
                            <img height="100%" width="100%" src="<?php echo IMG_URL . 'Rectangle 42 (3).png'; ?>" alt="Image Description">
                        </div>
                        <div class="col-md-7">
                            <div>
                                <h1>Name Of School</h1>
                                <p class="roboto grey"><span><img height="20px" width="20px" src="<?php echo IMG_URL . 'map-pin.png'; ?>" /></span> Sec 56, Gurugram</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6 roboto">
                                    <p class="roboto">Class Offered</p>
                                    <p class="bold grey roboto">Pre-Nursery to 12th</p>
                                </div>
                                <div class="col-md-6">
                                    <p>Student Facility Ratio</p>
                                    <p>1:25</p>

                                </div>


                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="<?php echo base_url("school/details") ?>"><button style="border:2px solid #001AFF;color:#001AFF" class="btn roboto px-4 m-3">View Detail</button></a>
                            </div>

                        </div>


                    </div>




                </div>
                <div id="tab2" class="tab-pane">Content for Tab 2</div>
                <div id="tab3" class="tab-pane">Content for Tab 3</div>
                <div id="tab4" class="tab-pane">Content for Tab 4</div>





            </div>



        </div>

    </div>






</div>


</div>





</div>



<?php $this->load->view('common/footer'); ?>