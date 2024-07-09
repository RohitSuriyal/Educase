<?php $this->load->view("common/header")  ?>
<div class="container-fluid " style="padding:0px 0px;margin:0px 0px">
    <img height="100%" width="100
    %" id="dynamic" style="height:25rem!important;object-fit:cover;width:100%" src="data:image/*;base64,<?php echo $output[0]->image; ?>" />



</div>

<div class="row upper_single_div  mt-5 mb-5 flex justify-content-center" style="padding:0 4%">
    <div class="col-md-8 me-5 px-5 blog_div single_div" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" style="box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1), 2px 0 2px rgba(0, 0, 0, 0.1), 2px 0 2px rgba(0, 0, 0, 0.1);" style="background-color:#F9F9FF

">

        <div class=" my-3 grey"><?php $date = strtotime($output[0]->date);
                                $formatted_date = date('jS, F Y', $date);
                                echo $formatted_date; ?>
        </div>
        <h1><?php echo $output[0]->heading ?></h1>
        <?php echo $output[0]->body ?>



    </div>
    <div class="col-md-3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
        <h2 class="mb-3 px-0">Feature <span style="color:#001AFF">Blog</span></h2>

      
        <?php foreach ($category as $c) : ?>
            <div class="row blog_div single_blog mb-2">
                <img class="px-0" style="border-top-left-radius:5%; border-top-right-radius:5%; object-fit:cover;" width="90%" height="200px!important" src="data:image/jpeg;base64, <?php echo $c->image; ?>" alt="Category Image">
                <span class="px-0">23rd July, 2023</span>
                <h6 class="px-0 bold"><?php echo $c->heading ?></h6>
                <?php
                $allowed_tags = '<p><h1><h2>';
                $plainText = strip_tags($c->body, $allowed_tags);
                $text = $plainText;
                // Check if the body text is longer than 50 characters
                if (strlen($text) > 200) {
                    $text = substr($text, 0, 200);
                    // Find the last space within the truncated text
                    $last_space = strrpos($text, ' ');
                    // Trim the text to the last space to avoid cutting off in the middle of a word
                    $text = substr($text, 0, $last_space);
                    // Add ellipsis
                    $url = base_url('welcome/blog_page/') . $c->id;

                    $text .= '... <a class="text-danger bold" href="' . $url . '">Read more</a>';
                    // Output the truncated body text with "Read more" link
                    echo $text;
                } else {
                    echo $text;
                }
                ?>
            </div>
        <?php endforeach; ?>


    </div>

</div>




<?php $this->load->view("common/footer") ?>