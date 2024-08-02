<?php $this->load->view('common/header'); ?>
<style>
    #searchlist::-webkit-scrollbar {
        width: 12px;
        /* Adjust the width here */
    }

    #searchlist::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    #searchlist::-webkit-scrollbar-thumb {
        background: #888;
    }
</style>
<div class="outer_img" style="padding:0px 0px!important">
    <div class="image_background height_img_bg " data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1300" style="height:auto;width:100%">
        <div class="d-flex  flex-column justify-content-center align-items-center top_heading_padding" style="padding:4rem 25%">
            <p class=" top_font aparajita_font " style="font-size:77.76px;line-height: 75px">Find</p>
            <p class="  text-center top_font aparajita_font" style="font-size:77.76px;color:#001AFF;width:100%;line-height: 75px;">The Best School</p>
            <p class=" top_font aparajita_font" style="font-size:77.76px;line-height: 75px">In Your City</p>

            <div class="search-container position-relative">
                <span class="search-icon"><img src="<?php echo base_url("assets/images/search.png")?>"></img></span>
                <input id="search" type="text" class="search-input" placeholder="Search...">

            </div>
            <div id="searchlist" class="w-100  overflow-auto" style="margin-top:-3rem;display:none;max-height:10rem;background-color:#F9F9FF">
                shdhsdh
            </div>
        </div>


    </div>
</div>
<div class="blog" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1300">
    <div class="pt-5 mb-5">
        <h1 class="text-center aparajita_font" style="color:#000;line-height: 28.13px;">Discover Latest Blogs on <span style="color:#001AFF">Schools, Education & Parenting</span></h1>
        <p class="text-center roboto " style="color:#747474;font-size:14px;margin-bottom:0">
            We are your one-stop solution for finding information-rich and inspirational blogs on schools, admission, parenting, and </p>
        <p class="text-center roboto grey" style="font-size:14px;margin-bottom:0"> education. Take a lead to become the next-gen smart parent!</p>
    </div>
    <?php foreach (array_reverse($data) as $index => $row) : ?>
        <?php if ($index == 0) : ?>
            <div class="row d-flex flex-row g-0  mx-3 my-5 " data-aos="fade-right" style="padding:0px 0px; box-shadow: 10px 10px 71px -5px rgba(128, 128, 128, 0.5);">


                <div class="col-md g-0 col-md-5  " style="height:auto">
                    <img id="dynamic" style="height:100%!important;object-fit:cover;width:100%" src="data:image/*;base64,<?php echo $row->image; ?>" />


                    <!-- <img style="height:100%!important;object-fit:cover;width:100%" src="https://images4.alphacoders.com/133/1332281.jpeg" class="img-fluid" alt="Responsive Image"> -->
                </div>
                <div class="col-md-7 py-5 px-5 blog_div grey" style="background-color: white;line-height:23.44px">
                    <span class=" grey"><?php $date = strtotime($row->date);
                                        $formatted_date = date('jS, F Y', $date);
                                        echo $formatted_date; ?></span>

                    <h1 class="text-dark"><?php echo $row->heading ?></h1>
                    <?php
                    $allowed_tags = '<p>';

                    $plainText = strip_tags($row->body, $allowed_tags);
                    $text = $plainText;
                    // Check if the body text is longer than 300 characters
                    if (strlen($text) > 1100) {
                        // Truncate the body text to 300 characters
                        $text = substr($text, 0, 1100);
                        // Find the last space within the truncated text
                        $last_space = strrpos($text, ' ');
                        // Trim the text to the last space to avoid cutting off in the middle of a word
                        $text = substr($text, 0, $last_space);
                        // Add ellipsis
                        // $url = base_url('welcome/blog_page/') . $row->id;
                        $url = base_url('blog/' . $row->id);
                        $text .= '... <a class="text-danger bold" href="' . $url . '">Read more</a>';
                        // Output the truncated body text with "Read more" link
                        echo $text;
                    } else {
                        // If the body text is shorter than or equal to 300 characters, output it as is
                        echo $text;
                    }
                    ?>
                </div>
            </div>

        <?php elseif ($index == 1) : ?>

            <div class="row d-flex flex-row g-0  mx-3 my-5 " data-aos="fade-right" style="padding:0px 0px; box-shadow: 10px 10px 71px -5px rgba(128, 128, 128, 0.5);">
                <div class="col-md-7 py-5 px-5 blog_div grey" style="background-color: white;line-height:23.44px">
                    <span class=" grey"><?php $date = strtotime($row->date);
                                        $formatted_date = date('jS, F Y', $date);
                                        echo $formatted_date; ?></span>

                    <h1 class="text-dark"><?php echo $row->heading ?></h1>
                    <?php
                    $allowed_tags = '<p>';

                    $plainText = strip_tags($row->body, $allowed_tags);
                    $text = $plainText;
                    // Check if the body text is longer than 300 characters
                    if (strlen($text) > 1100) {
                        // Truncate the body text to 300 characters
                        $text = substr($text, 0, 1100);
                        // Find the last space within the truncated text
                        $last_space = strrpos($text, ' ');
                        // Trim the text to the last space to avoid cutting off in the middle of a word
                        $text = substr($text, 0, $last_space);
                        // Add ellipsis
                        // $url = base_url('welcome/blog_page/') . $row->id;
                        $url = base_url('blog/' . $row->id);
                        $text .= '... <a class="text-danger bold" href="' . $url . '">Read more</a>';
                        // Output the truncated body text with "Read more" link
                        echo $text;
                    } else {
                        // If the body text is shorter than or equal to 300 characters, output it as is
                        echo $text;
                    }
                    ?>
                </div>

                <div class="col-md g-0 col-md-5  " style="height:auto">
                    <img id="dynamic" style="height:100%!important;object-fit:cover;width:100%" src="data:image/*;base64,<?php echo $row->image; ?>" />


                    <!-- <img style="height:100%!important;object-fit:cover;width:100%" src="https://images4.alphacoders.com/133/1332281.jpeg" class="img-fluid" alt="Responsive Image"> -->
                </div>

            </div>
        <?php endif; ?>



</div>
<?php endforeach; ?>

<div class="row d-flex" style="padding:22px 7px;margin-top:3%;margin:0px 0px!important">
    <?php
    $data_reversed = array_reverse($data);
    foreach ($data_reversed as $index => $row) :
        if ($index < 2 || $index > 5) {
            continue;
        }
    ?>
        <div class="col-md-3  roboto blog_div " data-aos="fade-up" data-aos-duration="3000" style="height:auto;background-color: white;">
            <img class="px-2 py-3" id="dynamic" style="height:300px!important;object-fit:cover;border-top-left-radius: 33px; border-top-right-radius: 33px;width:100%" src="data:image/*;base64,<?php echo $row->image; ?>" />

            <div class="px-3 py-3" style="line-height:23.44px;">
                <span><?php $date = strtotime($row->date);
                        $formatted_date = date('jS, F Y', $date);
                        echo $formatted_date; ?></span>
                <h1 class="roboto bold" style=";margin-top: 2%;"><?php echo $row->heading ?></h1>
                <?php
                $allowed_tags = '<p><h1><h2>';
                $plainText = strip_tags($row->body, $allowed_tags);
                $text = $plainText;
                // Check if the body text is longer than 50 characters
                if (strlen($text) > 300) {
                    $text = substr($text, 0, 300);
                    // Find the last space within the truncated text
                    $last_space = strrpos($text, ' ');
                    // Trim the text to the last space to avoid cutting off in the middle of a word
                    $text = substr($text, 0, $last_space);
                    // Add ellipsis
                    // $url = base_url('welcome/blog_page/') . $row->id;
                    $url = base_url('blog/' . $row->id);


                    

                    $text .= '... <a class="text-danger bold" href="' . $url . '">Read more</a>';
                    // Output the truncated body text with "Read more" link
                    echo $text;
                } else {
                    echo $text;
                }
                ?>

            </div>
        </div>
    <?php endforeach;
    ?>

</div>
<p class="text-center " data-aos="fade-up" data-aos-duration="3000" style="cursor:pointer"><a class="grey bold text-decoration-none" href="">See all blogs</a></p>




<div data-aos="fade-up" data-aos-duration="3000" style="height:100%;width: 100% ;background-color:#001AFF;color:white;margin-top:3%;">
    <h1 class="aparajita_font  text-center pt-5 city_heading locality " style="font-size:49.66px">
        Popular Localities in India

    </h1>
    <p class="aparajita_font text-center  p_text" style="font-size:24px;margin-bottom:0">
        Our platform inhibits critical details about the best schools in major cities across India. Search for
    </p>
    <p class="aparajita_font text-center p_text" style="font-size:24px;margin-bottom:0">
        popular schools in top locations in India and in your own city.
    </p>
    <div class="row d-flex flex-row justify justify-content-between align-content-center " style="margin:0px 0px;padding:2%">
        <div class="col-md-2 cities p-2 custom-col">
            <h1 class="text-center city_heading aparajita_font" style="margin-bottom:0">
                Delhi/NCR
            </h1>
            <p class="text-center city_headingp mb-0">NA</p>
        </div>
        <div class="col-md-2 cities p-2 custom-col ">
            <h1 class="text-center city_heading aparajita_font" style="margin-bottom:0">
                Mumbai
            </h1>
            <p class="text-center city_headingp mb-0">NA</p>
        </div>
        <div class="col-md-2 cities p-2 custom-col">
            <h1 class="text-center city_heading aparajita_font" style="margin-bottom:0">
                Pune </h1>
            <p class="text-center city_headingp mb-0">NA</p>
        </div>
        <div class="col-md-2 cities p-2 custom-col">
            <h1 class="text-center city_heading aparajita_font" style="margin-bottom:0">
                Patna
            </h1>
            <p class="text-center city_headingp mb-0">NA</p>
        </div>




    </div>
    <div class="row d-flex flex-row justify justify-content-between align-content-between " style="margin:0px 0px;padding:2%;">
        <div class="col-md-2 cities p-2 custom-col">
            <h1 class="text-center city_heading aparajita_font" style="margin-bottom:0">
                Gujarat </h1>
            <p class="text-center city_headingp mb-0">NA</p>
        </div>
        <div class="col-md-2 cities p-2 custom-col aparajita_font">
            <h1 class="text-center city_heading" style="margin-bottom:0">
                Nagpur
            </h1>
            <p class="text-center city_headingp mb-0">NA</p>
        </div>
        <div class="col-md-2 cities p-2 custom-col ">
            <h1 class="text-center city_heading aparajita_font" style="margin-bottom:0">
                Bangalore
            </h1>
            <p class="text-center city_headingp mb-0">NA</p>
        </div>
        <div class="col-md-2 cities p-2 custom-col">
            <h1 class="text-center city_heading aparajita_font" style="margin-bottom:0">
                Chandigarh
            </h1>
            <p class="text-center city_headingp mb-0">NA</p>
        </div>




    </div>





</div>
<div class="mt-5 mb-5 top_school_heading">
    <h1 class=" text-center mb-4  aparajita_font " style="font-size:50px">
        Top Schools in <span style="color:#001AFF"><a href="#">India</a></span>

    </h1>
    
    <?php
        $i = 0; // Initialize $i
        $j = 1; // Initialize $j
        $data_reversed =$all; // Reverse the $data array
        foreach ($data_reversed as $index => $row) :
          
            // Ensure that the next elements exist before accessing them
            if (!isset($data_reversed[$index + $i]) || !isset($data_reversed[$index + $j])) {
                break; // Exit the loop if next elements do not exist
            }

            // Define current and next row
            $current = $data_reversed[$index + $j];
            $nextRow = $data_reversed[$index + $i];
        ?>
    <div class="row flex justify-content-evenly mt-4 school_main_div " style="margin:0 1%">
        <div class="col-md-6 custom_col_schol second_school_div" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" style="padding:0px 0px!;margin:0px 0px;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);border-radius:10px">
            <div class="row" style="padding:0px 0px!important;">
                <div class="col-md-6" style="padding:0px 0px!Important;">
                <img style="height:100%;object-fit:cover;width:100%" src="data:image/jpeg;base64,<?php echo $current->image ?>" class="img-fluid" alt="Responsive Image">


                </div>
                <div class="col-md-6 p-4">
                    <h3 class="roboto pb_0 "><?php echo $current->name ?></h3>
                    <p class="grey"><span> <img height="15px" width="15px" src="<?php echo base_url("assets/images/Frame 4.png")?>"></img></span><?php echo trim(preg_replace('/\s+/', ' ', $current->state)); ?></p>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <p class="grey roboto ">Class Offered</p>
                            <p class="roboto grey bold"><?php echo $current->class_offered ?></p>

                        </div>
                        <div class="col-md-6 ">
                            <p class="text-center p_school grey">Board</p>
                            <p class="text-center p_school grey bold"><?php echo $current->board ?></p>
                        </div>





                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <p class="">Student Faculty Ratio</p>
                            <p class="grey bold">1:25</p>

                        </div>

                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="<?php echo base_url('Welcome/School_details/') . $current->id ?>"><button class="px-4 bg-body text-primary  border border-2 border-primary py-1">View details</button></a>

                    </div>




                </div>

            </div>


        </div>
        <div class="col-md-6 custom_col_schol second_school_div" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" style="padding:0px 0px!;margin:0px 0px;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);border-radius:10px">
            <div class="row" style="padding:0px 0px!important;">
                <div class="col-md-6" style="padding:0px 0px!Important;">
                <img style="height:100%;object-fit:cover;width:100%" src="data:image/jpeg;base64,<?php echo $nextRow->image ?>" class="img-fluid" alt="Responsive Image">


                </div>
                <div class="col-md-6 p-4">
                    <h3 class="roboto pb_0 "><?php echo $nextRow->name ?></h3>
                    <p class="grey"><span> <img height="15px" width="15px" src="<?php echo base_url("assets/images/Frame 4.png") ?>"></img></span><?php echo $nextRow->state ?></p>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <p class="grey roboto ">Class Offered</p>
                            <p class="roboto grey bold"><?php echo $nextRow->class_offered ?></p>

                        </div>
                        <div class="col-md-6 ">
                            <p class="text-center p_school grey">Board</p>
                            <p class="text-center p_school grey bold"><?php echo $nextRow->board ?></p>
                        </div>





                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <p class="">Student Faculty Ratio</p>
                            <p class="grey bold">1:25</p>

                        </div>

                    </div>
                    <div class="d-flex justify-content-end">
                    <a href="<?php echo base_url('Welcome/School_details/') . $nextRow->id ?>"><button class="px-4 bg-body text-primary  border border-2 border-primary py-1">View details</button></a>

                    </div>




                </div>

            </div>


        </div>
        






    </div>

    <?php
            $i++;
            $j++;
        endforeach; // End foreach loop
        ?>




</div>
<div id="tab2" class="tab-pane">Content for Tab 2</div>
<div id="tab3" class="tab-pane">Content for Tab 3</div>
<div id="tab4" class="tab-pane">Content for Tab 4</div>
</div>




</div>
<?php $this->load->view('common/footer'); ?>
<script>
    $(".search-input").on("input", function() {
        var inputvalue = $("#search").val();
        if (inputvalue === "") {
            console.log("rohit ratfaar")
            $("#searchlist").hide();
        } else {
            $("#searchlist").show();
            $.ajax({
                url: "<?php echo base_url("welcome/searchquery") ?>",
                method: "post",
                dataType: "json",
                data: {
                    input: inputvalue,
                },
                success: function(data) {
                    console.log(data);
                    $("#searchlist").empty();

                    if (data == "this is error") {
                        $("#searchlist").append(`
     <a class="text-decoration-none" href="#">
    <li style="cursor:pointer; box-shadow: 0 4px 8px rgba(0, 0, 0, 0);color:red" class="list-unstyled px-2 py-1 roboto ">
        no result found
    </li>
    </a>
  
    `);
                    } else {
                        data.map(function(e) {

                            if (e.type === "blog") {
                                $("#searchlist").append(`
     <a class="text-decoration-none" href="<?php echo base_url('welcome/blog_page/') ?>${e.id}">
    <li style="cursor:pointer; box-shadow: 0 4px 8px rgba(0, 0, 0, 0);" class="list-unstyled px-2 py-1 roboto bold" id="${e.id}" data-custom="${e.type}">
    ${e.name}, ${e.location ? `(${e.location})` : ''}
    </li>
    </a>
    <hr>
    `);
                            } else if (e.type == "school") {
                                $("#searchlist").append(`
     <a class="text-decoration-none" href="<?php echo base_url('welcome/School_details/') ?>${e.id}">
    <li style="cursor:pointer; box-shadow: 0 4px 8px rgba(0, 0, 0, 0);" class="list-unstyled px-2 py-1 roboto bold" id="${e.id}" data-custom="${e.type}">
    ${e.name}, ${e.location ? `(${e.location})` : ''}
    </li>
    </a>
    <hr>
`);


                            } else if (e.type == "location") {
                                $("#searchlist").append(`
     <a class="text-decoration-none" href="<?php echo base_url('welcome/School_details/') ?>${e.id}">
    <li style="cursor:pointer; box-shadow: 0 4px 8px rgba(0, 0, 0, 0);" class="list-unstyled px-2 py-1 roboto bold" id="${e.id}" data-custom="${e.type}">
    ${e.name}, ${e.location ? `(${e.location})` : ''}
    </li>
    </a>
    <hr>
    `);
                            } else {
                                $("#searchlist").append(`
     <a class="text-decoration-none" href="#">
    <li style="cursor:pointer; box-shadow: 0 4px 8px rgba(0, 0, 0, 0);" class="list-unstyled px-2 py-1 roboto bold">
   vfvdfbdfbdfb
    </li>
    </a>
    <hr>
    `);


                            }




                        })
                    }



                }









            })

        }



    })
    $(document).on("click", ".searchresult", function() {
        console.log("this is stylsih");
        var type = $(this).attr("data-custom");
        var id = $(this).attr("id")
        if (type == "school") {
            $.ajax({
                url: "<?php echo base_url("welcome/getthesearch") ?>"


            })

        }
        if (type == "blog") {

        }

    })
</script>