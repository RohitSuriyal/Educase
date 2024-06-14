<?php $this->load->view('common/header'); ?>

<div class="image_background height_img_bg" style="height:auto;width:100%">
    <div class="d-flex flex-column justify-content-center align-items-center top_heading_padding" style="padding:4rem 25%">
        <p class="roboto bold top_font " style="font-size:77.76px;line-height: 75px">DISCOVER</p>
        <p class="roboto bold text-center top_font" style="font-size:77.76px;color:#001AFF;width:100%;line-height: 75px;">The best school</p>
        <p class="roboto bold top_font" style="font-size:77.76px;line-height: 75px">for your Child</p>
        <div class="search-container">
            <span class="search-icon">&#x1F50D;</span>
            <input type="text" class="search-input" placeholder="Search...">
        </div>
    </div>


</div>
<div class="blog">
    <div class="pt-4">
        <h1 class="text-center roboto bold mt-4">SCHOOLHUB Blog</h1>
        <p class="text-center roboto" style="color:#747474;line-height: 28.13px;">A comprehensive platform to help hirers and creators navigate the creative world from discovering</p>
        <p class="text-center roboto" style="color:#747474;line-height:28.13px">
            inspiration, to connecting with one another
        </p>
    </div>
    <?php foreach ($data as $index => $row) : ?>
        <?php if ($index == 0) : ?>
            <div class="row d-flex flex-row" style="padding:19px 12px;">

                <!-- If the index is even -->

                <div class="col-md g-0 col-md-5 px-3 py-3" style="height:auto">
                    <img id="dynamic" style="height:100%!important;object-fit:cover;width:100%" src="data:image/*;base64,<?php echo $row->image; ?>" />


                    <!-- <img style="height:100%!important;object-fit:cover;width:100%" src="https://images4.alphacoders.com/133/1332281.jpeg" class="img-fluid" alt="Responsive Image"> -->
                </div>
                <div class="col-md-7 py-3 px-3" style="height:auto;background-color: white;">
                    <span class=" grey"><?php $date = strtotime($row->date);
                                        $formatted_date = date('jS, F Y', $date);
                                        echo $formatted_date; ?></span>

                    <h1><?php echo $row->heading ?></h1>
                    <?php
                    $allowed_tags = '<p><h1><h2>';

                    $plainText = strip_tags($row->body, $allowed_tags);
                    $text = $plainText;
                    // Check if the body text is longer than 300 characters
                    if (strlen($text) > 300) {
                        // Truncate the body text to 300 characters
                        $text = substr($text, 0, 1000);
                        // Find the last space within the truncated text
                        $last_space = strrpos($text, ' ');
                        // Trim the text to the last space to avoid cutting off in the middle of a word
                        $text = substr($text, 0, $last_space);
                        // Add ellipsis
                        $url = base_url('welcome/blog_page/') . $row->id;

                        $text .= '... <a href="' . $url . '">Read more</a>';
                        // Output the truncated body text with "Read more" link
                        echo $text;
                    } else {
                        // If the body text is shorter than or equal to 300 characters, output it as is
                        echo $text;
                    }
                    ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($index == 1) : ?>

            <div class="row d-flex flex-row " style="padding:0px 12px;margin-top: 4%;">





                <div class="col-md-7 py-3 px-3 order2 " style="height:auto">
                    <span class=" grey"><?php $date = strtotime($row->date);
                                        $formatted_date = date('jS, F Y', $date);
                                        echo $formatted_date; ?></span>
                    <h1><?php echo $row->heading  ?></h1>
                    <?php
                    $allowed_tags = '<p><h1><h2>';

                    $plainText = strip_tags($row->body, $allowed_tags);
                    $text = $plainText;
                    // Check if the body text is longer than 300 characters
                    if (strlen($text) > 300) {
                        // Truncate the body text to 300 characters
                        $text = substr($text, 0, 1000);
                        // Find the last space within the truncated text
                        $last_space = strrpos($text, ' ');
                        // Trim the text to the last space to avoid cutting off in the middle of a word
                        $text = substr($text, 0, $last_space);
                        // Add ellipsis
                        $url = base_url('welcome/blog') . $row->id;

                        $text .= '... <a href="' . $url . '">Read more</a>';
                        // Output the truncated body text with "Read more" link
                        echo $text;
                    } else {
                        // If the body text is shorter than or equal to 300 characters, output it as is
                        echo $text;
                    }
                    ?>

                </div>
                <div class="col-md g-0 col-md-5 px-3 py-3 order1" style="height:auto">
                    <img id="dynamic" style="height:100%!important;object-fit:cover;width:100%" src="data:image/*;base64,<?php echo $row->image; ?>" />
                </div>
            </div>
        <?php endif; ?>



</div>
<?php endforeach; ?>
<!-- <div>
    <div class="row d-flex flex-row " style="padding:22px 0px;margin-top:3%">
        <?php
        // Assuming count($data) is greater than or equal to 3
        for ($index = 2; $index < 6; $index++) :
            $row = $data[$index];
        ?>


            <div class="col-md-3  roboto " style="height:auto;background-color: white;">

                <img class="px-2 py-3" id="dynamic" style="height:238px!important;object-fit:cover;width:100%" src="data:image/*;base64,<?php echo $row->image; ?>" />

                <div class="px-3 py-3" style="line-height:23.44px">
                    <h1 class="roboto bold" style="font-size: 24px;margin-top: 2%;"><?php echo $row->heading ?></h1>
                    <?php
                    $allowed_tags = '<p><h1><h2>';

                    $plainText = strip_tags($row->body, $allowed_tags);
                    $text = $plainText;
                    // Check if the body text is longer than 300 characters
                    if (strlen($text) > 200) {
                        // Truncate the body text to 300 characters
                        $text = substr($text, 0, 1000);
                        // Find the last space within the truncated text
                        $last_space = strrpos($text, ' ');
                        // Trim the text to the last space to avoid cutting off in the middle of a word
                        $text = substr($text, 0, $last_space);
                        // Add ellipsis
                        $text .= '...';
                        // Output the truncated body text with "Read more" link
                        echo $text . ' <a href="#">Read more</a>';
                    } else {
                        // If the body text is shorter than or equal to 300 characters, output it as is
                        echo $text;
                    }
                    ?>

                </div>

            </div>
        <?php endfor; ?>



















    </div>


</div> -->


<div style="height:100%;width: 100% ;background-color:#001AFF;color:white;margin-top:3%">
    <h1 class="roboto bold text-center pt-5 city_heading ">
        Popular Localities in India

    </h1>
    <p class="roboto text-center">
        A comprehensive platform to help hirers and creators navigate the creative world from discovering

    </p>
    <p class="roboto text-center">
        inspiration, to connecting with one another

    </p>
    <div class="row d-flex flex-row justify justify-content-between align-content-center " style="margin:0px 0px;padding:3%">
        <div class="col-md-2 cities p-2 ">
            <h1 class="text-center city_heading">
                Delhi/NCR
            </h1>
            <p class="text-center city_headingp">500 Schools</p>
        </div>
        <div class="col-md-2 cities p-2 ">
            <h1 class="text-center city_heading">
                Delhi/NCR
            </h1>
            <p class="text-center city_headingp">500 Schools</p>
        </div>
        <div class="col-md-2 cities p-2 ">
            <h1 class="text-center city_heading">
                Delhi/NCR
            </h1>
            <p class="text-center city_headingp">500 Schools</p>
        </div>
        <div class="col-md-2 cities p-2 ">
            <h1 class="text-center city_heading">
                Delhi/NCR
            </h1>
            <p class="text-center city_headingp">500 Schools</p>
        </div>




    </div>
    <div class="row d-flex flex-row justify justify-content-between align-content-between " style="margin:0px 0px;padding:3%;">
        <div class="col-md-2 cities p-2 ">
            <h1 class="text-center city_heading">
                Delhi/NCR
            </h1>
            <p class="text-center city_headingp">500 Schools</p>
        </div>
        <div class="col-md-2 cities p-2 ">
            <h1 class="text-center city_heading">
                Delhi/NCR
            </h1>
            <p class="text-center city_headingp">500 Schools</p>
        </div>
        <div class="col-md-2 cities p-2 ">
            <h1 class="text-center city_heading">
                Delhi/NCR
            </h1>
            <p class="text-center city_headingp">500 Schools</p>
        </div>
        <div class="col-md-2 cities p-2 ">
            <h1 class="text-center city_heading">
                Delhi/NCR
            </h1>
            <p class="text-center city_headingp">500 Schools</p>
        </div>




    </div>





</div>
<div class="mt-4">
    <h1 class="roboto bold text-center mb-4">
        Top Schools in <span style="color:#001AFF">India</span>

    </h1>
    <div class="tabs">
        <div class="tab active roboto bold " onclick="openTab(event, 'tab1')">Day School</div>
        <div class="tab roboto bold" onclick="openTab(event, 'tab2')">Boarding School</div>
        <div class="tab roboto bold" onclick="openTab(event, 'tab3')">Day Boarding School</div>
        <div class="tab roboto bold" onclick="openTab(event, 'tab4')">Play School</div>
    </div>

    <div class="tab-content">
        <div id="tab1" class="tab-pane active">
            <div class="row d-flex my-4">
                <div class="col-md-6 " style="padding:0px 0px!important;margin:0px 0px!important;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3)">
                    <div class="row" style="padding:0px 0px!important;margin:0px 0px!important">
                        <div class="col-md-6" style="padding:0px 0px!Important">
                            <img style="height:100%;object-fit:cover;width:100%" src="https://images4.alphacoders.com/133/1332281.jpeg" class="img-fluid" alt="Responsive Image">
                        </div>
                        <div class="col-md-6 pt-3">
                            <h5 class="roboto">Name of School</h5>
                            <p><span> <img height="20px" width="20px" src="<?php echo IMG_URL . 'Frame 4.png'; ?>"></img></span>Sec 56, Gurugram</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex school_div_gap ">
                                        <p class="school_div_p_width grey roboto" style="width:12rem">Class Offered</p>
                                        <p class="grey bold">Pre-Nursery to 12th</p>
                                    </div>
                                    <div class="d-flex school_div_gap">
                                        <p class="school_div_p_width grey roboto" style="width:12rem">Student Facility Ratio</p>
                                        <p class="grey bold">
                                            1:25

                                        </p>

                                    </div>


                                </div>

                                <div class="school_div_gap d-flex">
                                    <p class=" school_div_p_width grey roboto " style="width:12rem">board</p>
                                    <p class="text-center  text_align_left grey bold">CBSE</p>
                                </div>



                            </div>
                            <div class="d-flex justify-content-end ">
                                <button class="btn view_button px-3 my-3" style="margin-right:6%">
                                    view Details

                                </button>
                            </div>




                        </div>

                    </div>


                </div>
                <div class="col-md-6 " style="padding:0px 0px!important;margin:0px 0px!important;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3)">
                    <div class="row" style="padding:0px 0px!important;margin:0px 0px!important">
                        <div class="col-md-6" style="padding:0px 0px!Important">
                            <img style="height:100%;object-fit:cover;width:100%" src="https://images4.alphacoders.com/133/1332281.jpeg" class="img-fluid" alt="Responsive Image">
                        </div>
                        <div class="col-md-6">
                            <h5 class="roboto">Name of School</h5>
                            <p><span> <img height="20px" width="20px" src="<?php echo IMG_URL . 'Frame 4.png'; ?>"></img></span>Sec 56, Gurugram</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex school_div_gap ">
                                        <p class="school_div_p_width" style="width:12rem">Class Offered</p>
                                        <p>Pre-Nursery to 12th</p>
                                    </div>
                                    <div class="d-flex school_div_gap">
                                        <p class="school_div_p_width" style="width:12rem">Student Facility Ratio</p>
                                        <p>
                                            1:25

                                        </p>

                                    </div>


                                </div>

                                <div class="school_div_gap d-flex">
                                    <p class=" school_div_p_width " style="width:12rem">board</p>
                                    <p class="text-center  text_align_left">CBSE</p>
                                </div>



                            </div>
                            <div class="d-flex justify-content-end ">
                                <button class="btn btn-primary px-5 my-3" style="margin-right:6%">
                                    view

                                </button>
                            </div>




                        </div>

                    </div>


                </div>




            </div>
            <div class="row d-flex my-4 ">
                <div class="col-md-6 " style="padding:0px 0px!important;margin:0px 0px!important;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);">
                    <div class="row" style="padding:0px 0px!important;margin:0px 0px!important">
                        <div class="col-md-6" style="padding:0px 0px!Important">
                            <img style="height:100%;object-fit:cover;width:100%" src="https://images4.alphacoders.com/133/1332281.jpeg" class="img-fluid" alt="Responsive Image">
                        </div>
                        <div class="col-md-6">
                            <h5 class="roboto">Name of School</h5>
                            <p><span> <img height="20px" width="20px" src="<?php echo IMG_URL . 'Frame 4.png'; ?>"></img></span>Sec 56, Gurugram</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Class Offered</p>
                                    <p>Pre-Nursery to 12th</p>
                                    <p>Student Facility Ratio</p>
                                    <p>
                                        1:25

                                    </p>

                                </div>
                                <div class="col-md-6">
                                    <p class="text-center text_align_left">board</p>
                                    <p class="text-center text_align_left">CBSE</p>
                                </div>

                            </div>
                            <div class="d-flex justify-content-end ">
                                <button class="btn btn-primary px-5 my-3" style="margin-right:6%">
                                    view

                                </button>
                            </div>




                        </div>

                    </div>


                </div>
                <div class="col-md-6 " style="padding:0px 0px!important;margin:0px 0px!important;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);">
                    <div class="row" style="padding:0px 0px!important;margin:0px 0px!important">
                        <div class="col-md-6" style="padding:0px 0px!Important">
                            <img style="height:100%;object-fit:cover;width:100%" src="https://images4.alphacoders.com/133/1332281.jpeg" class="img-fluid" alt="Responsive Image">
                        </div>
                        <div class="col-md-6">
                            <h5 class="roboto">Name of School</h5>
                            <p><span> <img height="20px" width="20px" src="<?php echo IMG_URL . 'Frame 4.png'; ?>"></img></span>Sec 56, Gurugram</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Class Offered</p>
                                    <p>Pre-Nursery to 12th</p>
                                    <p>Student Facility Ratio</p>
                                    <p>
                                        1:25

                                    </p>

                                </div>
                                <div class="col-md-6">
                                    <p class="text-center text_align_left">board</p>
                                    <p class="text-center text_align_left">CBSE</p>
                                </div>

                            </div>
                            <div class="d-flex justify-content-end ">
                                <button class="btn btn-primary px-5 my-3" style="margin-right:6%">
                                    view

                                </button>
                            </div>




                        </div>

                    </div>


                </div>



            </div>
            <div class="row d-flex my-4">
                <div class="col-md-6 " style="padding:0px 0px!important;margin:0px 0px!important;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);">
                    <div class="row" style="padding:0px 0px!important;margin:0px 0px!important">
                        <div class="col-md-6" style="padding:0px 0px!Important">
                            <img style="height:100%;object-fit:cover;width:100%" src="https://images4.alphacoders.com/133/1332281.jpeg" class="img-fluid" alt="Responsive Image">
                        </div>
                        <div class="col-md-6">
                            <h5 class="roboto">Name of School</h5>
                            <p><span> <img height="20px" width="20px" src="<?php echo IMG_URL . 'Frame 4.png'; ?>"></img></span>Sec 56, Gurugram</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Class Offered</p>
                                    <p>Pre-Nursery to 12th</p>
                                    <p>Student Facility Ratio</p>
                                    <p>
                                        1:25

                                    </p>

                                </div>
                                <div class="col-md-6">
                                    <p class="text-center text_align_left">board</p>
                                    <p class="text-center text_align_left">CBSE</p>
                                </div>

                            </div>
                            <div class="d-flex justify-content-end ">
                                <button class="btn btn-primary px-5 my-3" style="margin-right:6%">
                                    view

                                </button>
                            </div>




                        </div>

                    </div>


                </div>
                <div class="col-md-6 " style="padding:0px 0px!important;margin:0px 0px!important;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);">
                    <div class="row" style="padding:0px 0px!important;margin:0px 0px!important">
                        <div class="col-md-6" style="padding:0px 0px!Important">
                            <img style="height:100%;object-fit:cover;width:100%" src="https://images4.alphacoders.com/133/1332281.jpeg" class="img-fluid" alt="Responsive Image">
                        </div>
                        <div class="col-md-6">
                            <h5 class="roboto">Name of School</h5>
                            <p><span> <img height="20px" width="20px" src="<?php echo IMG_URL . 'Frame 4.png'; ?>"></img></span>Sec 56, Gurugram</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Class Offered</p>
                                    <p>Pre-Nursery to 12th</p>
                                    <p>Student Facility Ratio</p>
                                    <p>
                                        1:25

                                    </p>

                                </div>
                                <div class="col-md-6">
                                    <p class="text-center text_align_left">board</p>
                                    <p class="text-center  text_align_left">CBSE</p>
                                </div>

                            </div>
                            <div class="d-flex justify-content-end ">
                                <button class="btn btn-primary px-5 my-3" style="margin-right:6%">
                                    view

                                </button>
                            </div>




                        </div>

                    </div>


                </div>



            </div>

        </div>
        <div id="tab2" class="tab-pane">Content for Tab 2</div>
        <div id="tab3" class="tab-pane">Content for Tab 3</div>
        <div id="tab4" class="tab-pane">Content for Tab 4</div>
    </div>




</div>
<?php $this->load->view('common/footer'); ?>