<?php $this->load->view('common/header'); ?>
<style>
    #dropdown1 {
        position: relative;

        cursor: pointer;
    }

    #dropdown2 {
        position: relative;

        cursor: pointer;

    }

    #dropdown3 {
        position: relative;

        cursor: pointer;

    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes expandHeight {
        from {
            max-height: 0;
        }

        to {
            max-height: 100%;
        }
    }

    .dropdown-content {
        display: none;
        position: relative;
        background-color: #f9f9f9;
        min-width: 100%;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.1);
        z-index: 1;
        animation: expandHeight 0.6s forwards ease-in-out;
        border-radius: 4px;
        overflow: hidden;

    }

    .dropdown.show .dropdown-content {
        display: block;

    }

    .dropdown .dropbtn {
        background-color: #F9F9FF;

        color: #000;
        padding: 10px;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .dropdown .dropbtn .drop-icon {
        transition: transform 0.7s ease-in-out;
    }

    .dropdown.show .dropbtn .drop-icon {
        transform: rotate(180deg);
    }

    .dropdown-content label {
        display: block;
        padding: 8px 12px;
        cursor: pointer;
    }

    .dropdown-content label:hover {
        background-color: #ddd;
    }
</style>
<div class="row mt-4" style="padding:0px 0px;margin:0px 0px">
    <div class="row" style="padding:0 4%;margin:0px 0px">

        <div class="col-md-2 d-flex flex-column">
            <h4>Filters</h4>
            <div class="dropdown" id="dropdown1">
                <div class="dropbtn helvetica" onclick="toggleDropdown('dropdown1')">Class <span class="drop-icon"><i class="fa-solid fa-angle-down"></i></span></div>
                <hr class="m-0">

                <div class="dropdown-content" id="dropdownContent">

                    <label><input name="class" id="Prenursery" class="me-2 filter class" type="checkbox" value="Prenursery"> Pre-Nursery</label>
                    <label><input name="class" id="Nursery" class="me-2 filter class" type="checkbox" value="Nursery"> Nursery</label>
                    <label><input name="class" id="LKG" class="me-2 filter class" type="checkbox" value="LKG">LKG</label>
                    <label><input name="class" id="UKG" class="me-2 filter class" type="checkbox" value="UKG">UKG</label>
                    <label><input name="class" id="I" class="me-2 filter class" type="checkbox" value="I"> Grade 1</label>
                    <label><input name="class" id="II" class="me-2 filter class" type="checkbox" value="II"> Grade 2</label>
                    <label><input name="class" id="III" class="me-2 filter class" type="checkbox" value="III"> Grade 3</label>
                    <label><input name="class" id="IV" class="me-2 filter class" type="checkbox" value="IV"> Grade 4</label>
                    <label><input name="class" id="V" class="me-2 filter class" type="checkbox" value="V"> Grade 5</label>
                    <label><input name="class" id="VI" class="me-2 filter class" type="checkbox" value="VI"> Grade 6</label>
                    <label><input name="class" id="VII" class="me-2 filter class" type="checkbox" value="VII"> Grade 7</label>
                    <label><input name="class" id="VIII" class="me-2 filter class" type="checkbox" value="VIII"> Grade 8</label>
                    <label><input name="class" id="IX" class="me-2 filter class" type="checkbox" value="IX"> Grade 9</label>
                    <label><input name="class" id="X" class="me-2 filter class" type="checkbox" value="X"> Grade 10</label>
                    <label><input name="class" id="XI" class="me-2 filter class" type="checkbox" value="XI"> Grade 11</label>
                    <label><input name="class" id="XII" class="me-2 filter class" type="checkbox" value="XII"> Grade 12</label>
                    <hr class="m-0">
                </div>
            </div>
            <div class="dropdown" id="dropdown2">
                <div class="dropbtn helvetica" onclick="toggleDropdown('dropdown2')">Board <span class="drop-icon"><i class="fa-solid fa-angle-down"></i></span></div>
                <hr class="m-0">

                <div class="dropdown-content" id="dropdownContent">
                    <label><input id="CBSE" class="me-2 filter  board" type="checkbox" value="CBSE"> CBSE</label>
                    <label><input id="ICSE" class="me-2 filter board" type="checkbox" value="ICSE">ICSE</label>
                    <label><input class="me-2 filter  board" type="checkbox" value="IB">IB</label>
                    <label><input class="me-2 filter board" type="checkbox" value="IGSCE">IGSCE</label>
                    <label><input class="me-2 filter  board" type="checkbox" value="State Board">State Board</label>

                </div>
            </div>
            <div class="dropdown" id="dropdown3">
                <div class="dropbtn helvetica" onclick="toggleDropdown('dropdown3')">Type <span class="drop-icon"><i class="fa-solid fa-angle-down"></i></span></div>
                <hr class="m-0">

                <div class="dropdown-content" id="dropdownContent">
                    <label><input id="Private" class="me-2  filter school_type" type="checkbox" value="Private"> Private</label>
                    <label><input id="Private_Aided" class="me-2  filter school_type" type="checkbox" value="Private_Aided">Private Aided</label>



                </div>
            </div>
        </div>

        <div class="col-md-10 px-3">
            <h3 class="roboto bold my-3">
                Top Schools in <span style="color:#001AFF"><a style="color:#001AFF" href="">India</a></span>
            </h3>
            <div class="tabs" style="justify-content:space-between">
                <div class="tab active  bold helvetica " onclick="openTab(event, 'tab1')">All</div>
                <div class="tab   helvetica" onclick="openTab(event, 'tab2')">Day School</div>
                <div class="tab   helvetica" onclick="openTab(event, 'tab3')">Boarding School</div>
                <div class="tab   helvetica" onclick="openTab(event, 'tab4')">Day Boarding School</div>
                <div class="tab   helvetica" onclick="openTab(event, 'tab5')">Play School</div>

            </div>
            <div class="tab-content" style="width:100%;">
                <div id="tab1" class="tab-pane active" style="margin:0px 0px!important">
                    <div id="school_div">
                        <?php if (!empty($all)) : ?>
                            <?php foreach ($all as $index => $row) : ?>
                                <div class="row mt-4" style="box-shadow: 0 4px 8px -2px rgba(0, 0, 0, 0.5);">
                                    <div class="col-md-5" style="padding:0px 0px">
                                    <img id="dynamic" style="height:100%!important;object-fit:cover;width:100%"
                                    src="<?php echo strpos($row->image, 'amazonaws') !== false ? $row->image : 'data:image/*;base64,' . $row->image; ?>" />
                                    </div>
                                    <div class="col-md-7 px-3">
                                        <div>
                                            <h3 class="roboto mb-0 mt-2"><?php echo $row->name ?></h3>
                                            <p class="roboto grey d-flex align-items-center"><span><img height="17px" width="17px" src="<?php echo base_url("assets/images/map-pin.png"); ?>" /></span><span style="margin-top:3px;font-size:15px"><?php echo $row->state ?></span></p>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-md-4 roboto">
                                                <p class="roboto grey" style="font-size:14px">Class Offered</p>
                                                <p class="bold grey roboto " style="color:#787878"><?php echo $row->class_offered ?></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="roboto grey" style="font-size:14px">Board</p>
                                                <p class="bold roboto grey"><?php echo $row->board ?></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="roboto grey" style="font-size:14px">Student Faculty Ratio</p>
                                                <p class="bold roboto grey" style="color:#787878">
                                                    <?php echo !empty($row->student_faculty_ratio) ? $row->student_faculty_ratio : 'NA'; ?>
                                                </p>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-end col-md-12">
                                            <a href="<?php echo base_url("welcome/School_details/") . $row->id; ?>">
                                                <button style="border: 1px solid #001AFF;font-size:15px; color: #001AFF;background-color:white" class="roboto px-4 py-1 my-2">View Detail</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        <?php endif; ?>
                    </div>









                </div>
                <div id="tab2" class="tab-pane">
                    <div id="school_div">
                        <?php if (!empty($day_school)) : ?>
                            <?php foreach ($day_school as $index => $row) : ?>
                                <div class="row mt-4" style="box-shadow: 0 4px 8px -2px rgba(0, 0, 0, 0.5);">
                                    <div class="col-md-5" style="padding:0px 0px">
                                    <img id="dynamic" style="height:100%!important;object-fit:cover;width:100%"
                                    src="<?php echo strpos($row->image, 'amazonaws') !== false ? $row->image : 'data:image/*;base64,' . $row->image; ?>" />
                                    </div>
                                    <div class="col-md-7 px-3">
                                        <div>
                                            <h3 class="roboto mb- mt-2"><?php echo $row->name ?></h3>
                                            <p class="roboto grey d-flex align-items-center"><span><img height="17px" width="17px" src="<?php echo base_url("assets/images/map-pin.png") ?>" /></span><span style="margin-top:3px"><?php echo $row->state ?></span></p>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-md-4 roboto">
                                                <p class="roboto grey" style="font-size:14px">Class Offered</p>
                                                <p class="bold grey roboto " style="color:#787878"><?php echo $row->class_offered ?></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="roboto grey" style="font-size:14px">Board</p>
                                                <p class="bold roboto grey"><?php echo $row->board ?></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="roboto grey" style="font-size:14px">Student Faculty Ratio</p>
                                                <p class="bold roboto grey" style="color:#787878">
                                                    <?php echo !empty($row->student_faculty_ratio) ? $row->student_faculty_ratio : 'NA'; ?>
                                                </p>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-end col-md-12">
                                            <a href="<?php echo base_url("welcome/School_details/") . $row->id; ?>">
                                                <button style="border: 1px solid #001AFF;font-size:15px; color: #001AFF;background-color:white" class="roboto px-4 py-1 my-2">View Detail</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div id="tab3" class="tab-pane">
                    <div id="school_div">
                        <?php if (!empty($boarding_school)) : ?>
                            <?php foreach ($boarding_school as $index => $row) : ?>
                                <div class="row mt-4" style="box-shadow: 0 4px 8px -2px rgba(0, 0, 0, 0.5);">
                                    <div class="col-md-5" style="padding:0px 0px">
                                    <img id="dynamic" style="height:100%!important;object-fit:cover;width:100%"
                                    src="<?php echo strpos($row->image, 'amazonaws') !== false ? $row->image : 'data:image/*;base64,' . $row->image; ?>" />
                                    </div>
                                    <div class="col-md-7 px-3">
                                        <div>
                                            <h3 class="roboto mb- mt-2"><?php echo $row->name ?></h3>
                                            <p class="roboto grey d-flex align-items-center"><span><img height="17px" width="17px" src="<?php echo base_url("assets/images/map-pin.png") ?>" /></span><span style="margin-top:3px"><?php echo $row->state ?></span></p>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-md-4 roboto">
                                                <p class="roboto grey" style="font-size:14px">Class Offered</p>
                                                <p class="bold grey roboto " style="color:#787878"><?php echo $row->class_offered ?></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="roboto grey" style="font-size:14px">Board</p>
                                                <p class="bold roboto grey"><?php echo $row->board ?></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="roboto grey" style="font-size:14px">Student Faculty Ratio</p>
                                                <p class="bold roboto grey" style="color:#787878">
                                                    <?php echo !empty($row->student_faculty_ratio) ? $row->student_faculty_ratio : 'NA'; ?>
                                                </p>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-end col-md-12">
                                            <a href="<?php echo base_url("welcome/School_details/") . $row->id; ?>">
                                                <button style="border: 1px solid #001AFF;font-size:15px; color: #001AFF;background-color:white" class="roboto px-4 py-1 my-2">View Detail</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div id="tab4" class="tab-pane">
                    <div id="school_div">
                        <?php if (!empty($day_boarding_school)) : ?>
                            <?php foreach ($day_boarding_school as $index => $row) : ?>
                                <div class="row mt-4" style="box-shadow: 0 4px 8px -2px rgba(0, 0, 0, 0.5);">
                                    <div class="col-md-5" style="padding:0px 0px">
                                    <img id="dynamic" style="height:100%!important;object-fit:cover;width:100%"
                                    src="<?php echo strpos($row->image, 'amazonaws') !== false ? $row->image : 'data:image/*;base64,' . $row->image; ?>" />
                                    </div>
                                    <div class="col-md-7 px-3">
                                        <div>
                                            <h3 class="roboto mb- mt-2"><?php echo $row->name ?></h3>
                                            <p class="roboto grey d-flex align-items-center"><span><img height="17px" width="17px" src="<?php echo base_url("assets/images/map-pin.png") ?>" /></span><span style="margin-top:3px"><?php echo $row->state ?></span></p>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-md-4 roboto">
                                                <p class="roboto grey" style="font-size:14px">Class Offered</p>
                                                <p class="bold grey roboto " style="color:#787878"><?php echo $row->class_offered ?></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="roboto grey" style="font-size:14px">Board</p>
                                                <p class="bold roboto grey"><?php echo $row->board ?></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="roboto grey" style="font-size:14px">Student Facility Ratio</p>
                                                <p class="bold roboto grey" style="color:#787878">
                                                    <?php echo !empty($row->student_faculty_ratio) ? $row->student_faculty_ratio : 'NA'; ?>
                                                </p>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-end col-md-12">
                                            <a href="<?php echo base_url("welcome/School_details/") . $row->id; ?>">
                                                <button style="border: 1px solid #001AFF;font-size:15px; color: #001AFF;background-color:white" class="roboto px-4 py-1 my-2">View Detail</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div id="tab5" class="tab-pane">
                    <div id="school_div">

                        <?php if (!empty($play_school)) : ?>
                            <?php foreach ($play_school as $index => $row) : ?>
                                <div class="row mt-4" style="box-shadow: 0 4px 8px -2px rgba(0, 0, 0, 0.5);">
                                    <div class="col-md-5" style="padding:0px 0px">
                                    <img id="dynamic" style="height:100%!important;object-fit:cover;width:100%"
                                    src="<?php echo strpos($row->image, 'amazonaws') !== false ? $row->image : 'data:image/*;base64,' . $row->image; ?>" />
                                    </div>
                                    <div class="col-md-7 px-3">
                                        <div>
                                            <h3 class="roboto mb- mt-2"><?php echo $row->name ?></h3>
                                            <p class="roboto grey d-flex align-items-center"><span><img height="17px" width="17px" src="<?php echo base_url("assets/images/map-pin.png") ?>" /></span><span style="margin-top:3px"><?php echo $row->state ?></span></p>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-md-4 roboto">
                                                <p class="roboto grey" style="font-size:14px">Class Offered</p>
                                                <p class="bold grey roboto " style="color:#787878"><?php echo $row->class_offered ?></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="roboto grey" style="font-size:14px">Board</p>
                                                <p class="bold roboto grey"><?php echo $row->board ?></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="roboto grey" style="font-size:14px">Student Facility Ratio</p>
                                                <p class="bold roboto grey" style="color:#787878">
                                                    <?php echo !empty($row->student_faculty_ratio) ? $row->student_faculty_ratio : 'NA'; ?>
                                                </p>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-end col-md-12">
                                            <a href="<?php echo base_url("welcome/School_details/") . $row->id; ?>">
                                                <button style="border: 1px solid #001AFF;font-size:15px; color: #001AFF;background-color:white" class="roboto px-4 py-1 my-2">View Detail</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        <?php endif; ?>
                    </div>

                </div>
            </div>


        </div>





    </div>



</div>

</div>






</div>


</div>





</div>




<script>
    //this is the automatic show appear
    //if data is in the session
    //this is for the autochecked 
    // if (data != null) {
    //     data.forEach(function(id) {
    //         $(`#${id}`).prop('checked', true);
    //     });
    // }
    var schoolClass = <?php echo json_encode($this->session->userdata('class')); ?>;
    var checked = <?php echo json_encode($this->session->userdata('inputchanged')); ?>;

    var board = <?php echo json_encode($this->session->userdata("board")) ?>;
    var school = <?php echo json_encode($this->session->userdata("school")) ?>;
    if (schoolClass !== null) {
        schoolClass.forEach(function(id) {
            $(`#${id}`).prop('checked', true);
        });
    }
    if (board != null) {

        {
            board.forEach(function(id) {
                $(`#${id}`).prop('checked', true);
            });
        }
    }
    if (school != null) {

        {
            school.forEach(function(id) {
                $(`#${id}`).prop('checked', true);
            });
        }
    }
    var data = <?php echo json_encode($this->session->userdata("class_data"))  ?>;


    if (data != null) {
        if (data.length === 0) {
            $("#tab1").append(`<p class="bold" style="margin-top:10%;text-align:center">NO data available</p>`)
        }
        console.log(data);
        data.forEach(function(d) {
            $("#tab1").append(`
                    <div class="row mt-2" style="box-shadow: 0 4px 8px -2px rgba(0, 0, 0, 0.5);">
                         <div class="col-md-5" style="padding:0px 0px">
                            <img height="100%" width="100%" src="${d.image}">
                            </div>
                     <div class="col-md-7 p-3">
                     <div>
                            <h1>${d.name}</h1>
                            <p class="roboto grey">
                    <span>
                        <img height="20px" width="20px" src="<?php echo base_url("assets/images/map-pin.png") ?>" />
                    </span>
                    ${d.state}
                </p>
                    </div>
                <div class="row mt-5">
                <div class="col-md-4 roboto">
                    <p class="roboto grey">Class Offered</p>
                    <p class="bold grey roboto" style="color:#787878">${d.class_offered}</p>
                </div>
                <div class="col-md-4">
                    <p class="roboto grey">Student Faculty Ratio</p>
                    <p class="bold roboto grey" style="color:#787878">
                        ${d.student_faculty_ratio ? d.student_faculty_ratio : 'NA'}
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="roboto grey">Board</p>
                    <p class="bold roboto grey">${d.board}</p>
                </div>
                 </div>
            <div class="d-flex justify-content-end">
                <a href="<?php echo base_url('welcome/School_details/'); ?>${d.id}">
                    <button style="border: 2px solid #001AFF; color: #001AFF;background-color:white" class=" roboto px-4 m-3">View Detail</button>
                </a>
            </div>
        </div>
    </div>
`);


        });

    }











    //this is for the automattic show if input are checked
    $('.dropdown').each(function() {
        if ($(this).find('input[type="checkbox"]:checked').length > 0) {

            $(this).addClass('show');
        } else {
            $(this).removeClass('show');
        }
    });
    //this is for the dropdown
    function toggleDropdown(dropdownid) {
        var dropdown = document.getElementById(dropdownid);
        dropdown.classList.toggle('show');
    }

    //when filter got changed
    $(".filter").on("change", function() {





        var school_type = [];
        let class_new = [];
        console.log(class_new)
        var board = [];
        var ownership = []
        $(".class:checked").each(function() {
            class_new.push($(this).attr('id'));
        });
        $(".board:checked").each(function() {

            board.push($(this).val());



        })

        $(".school_type:checked").each(function() {
            school_type.push($(this).val());

        })


        if (school_type.length === 0 && class_new.length === 0 && board.length === 0) {
            window.location.href = "<?php echo base_url('welcome/school'); ?>";


        } else {
            $.ajax({
                url: "<?php echo base_url("Welcome/new_render_school_info") ?>",
                method: "post",
                dataType: "json",
                data: {
                    board: board,
                    class_new: class_new,
                    school: school_type,


                },
                dataType: "json",
                success: function(data) {
                    $("#tab1").empty();

                    $("#school_div").hide();
                    console.log(data);
                    window.location.href = "<?php echo base_url('welcome/viewschoolagain'); ?>";






                }










            })
        }





    })
</script>
<?php $this->load->view('common/footer'); ?>