<?php $this->load->view("common/header")  ?>

<div class="container-fluid " style="padding:0px 0px;margin:0px 0px">
    <img height="100%" width="100
    %" id="dynamic" style="height:25rem!important;object-fit:cover;width:100%" src="<?php echo $output[0]->image; ?>" />



</div>

<div class="row upper_single_div  mt-5 mb-5 flex justify-content-center" style="padding:0 4%">
    <div class="col-md-8 me-5 single_blog_div px-5 blog_div single_div" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" style="box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1), 2px 0 2px rgba(0, 0, 0, 0.1), 2px 0 2px rgba(0, 0, 0, 0.1);" style="background-color:#F9F9FF">

        <div class=" my-3 grey"><?php $date = strtotime($output[0]->date);
                                $formatted_date = date('jS, F Y', $date);
                                echo $formatted_date; ?>
        </div>
        <div class="d-flex gap-3 mt-5 mb-5">

            <a class="text-decoration-none" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(current_url()); ?>" target="_blank">
                <i class="fa-brands fa-facebook" style="color: #002e7a;font-size:1.3rem"></i>Share on Facebook
            </a>
            <a class="text-decoration-none" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(current_url()); ?>" target="_blank">
                <i class="fa-brands fa-linkedin" style="color: #0056d6;font-size:1.3rem"></i>
                Share on LinkedIn
            </a>
            <a class="text-decoration-none" href="https://api.whatsapp.com/send?text=<?php echo urlencode(current_url()); ?>" target="_blank">
                <i class="fa-brands fa-whatsapp" style="color: #25d366; font-size: 1.3rem;"></i>
                Share on WhatsApp
            </a>

            <!-- <a class="text-decoration-none" href="https://twitter.com/intent/tweet?text=Check out this page!&url=https://findmyschools.co.in/blog/111" target="_blank">
<i class="fa-brands fa-twitter" style="color: #0061ff;font-size:1.3rem"></i>Share on Twitter
</a> -->

        </div>
        <h1><?php echo $output[0]->heading ?></h1>
        <?php if (!empty($schoolname)) {
            // Create a hyperlink for the school name
            $hyperlink = '<a href="' . base_url('Welcome/School_details/' . $schoolid) . '">' . htmlspecialchars($schoolname) . '</a>';



            // Replace occurrences of the school name in the body with the hyperlink
            $bodyWithLink = str_replace(htmlspecialchars($schoolname), $hyperlink, $output[0]->body);

            // Output the modified body
            echo $bodyWithLink;
        } else {
            // Fallback if school name is empty
            echo $output[0]->body;
        }
        ?>





    </div>
    <div class="col-md-3" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
        <h2 class="mb-3 px-0 feature_heading">Feature <span style="color:#001AFF">Blog</span></h2>


        <?php
        // Limit the number of items to 4 or fewer if there are less than 4
        $limited_category = array_slice($category, 0, 4);

        foreach ($limited_category as $c) : ?>
            <div class="row blog_div single_blog mb-2">
                <img class="px-0" style="border-top-left-radius:5%; border-top-right-radius:5%; object-fit:cover;" width="90%" height="200px!important" src="<?php echo $c->image; ?>" alt="Category Image">
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
                    $url = base_url('blog/' . $c->id);

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

<script>
    function createSlug(str) {
        return str
            .toLowerCase() // Convert to lowercase
            .trim() // Remove whitespace from both ends
            .replace(/[^a-z0-9\s-]/g, '') // Remove invalid characters
            .replace(/\s+/g, '-') // Replace spaces with hyphens
            .replace(/-+/g, '-'); // Replace multiple hyphens with a single hyphen
    }

    window.onload = function() {
        // Get the heading from PHP
        var heading = '<?php echo $output[0]->heading; ?>';

        // Create a slug from the heading
        var slug = createSlug(heading);

        // Change the URL without navigating to it
        history.replaceState(null, '', 'blog/' + slug);
    };
</script>


<?php $this->load->view("common/footer") ?>