<?php $this->load->view('common/header'); ?>
<div class="container-fluid blog_background d-flex flex-column align-items-center justify-content-center">
    <h1 style="font-size:50px" class="text-center aparajita_font blog_text ">Discover Latest Blogs on <span style="color:#001AFF">Schools, Education & Parenting</span></h1>
    <p style="font-size:14px" class="text-center roboto sub_heading_text mb-0 w-100">We are your one-stop solution for finding information-rich and inspirational blogs on schools,admission, parenting, and </p>
    <p style="font-size:14px" class="text-center roboto sub_heading_text mb-0 "> education. Take a lead to become the next-gen smart parents</p>

</div>
<div class="tabs">
    <div style="font-size:22px" class="tab active  bold aparajita_font" onclick="openTab(event, 'tab1')">All</div>
    <div style="font-size:22px" class="tab  bold  aparajita_font" onclick="openTab(event, 'tab2')">Education</div>
    <div style="font-size:22px" class="tab  bold  aparajita_font" onclick="openTab(event, 'tab3')">technology</div>
    <div style="font-size:22px" class="tab  bold  aparajita_font" onclick="openTab(event, 'tab4')">School</div>
</div>

<div class="tab-content tab_content px-5">
    <div id="tab1" class="tab-pane active">

        <?php foreach (array_reverse($all) as $index => $row) : ?>
            <?php if ($index == 0) : ?>

                <div class="row d-flex flex-row" data-aos="fade-right" style="padding:19px 12px;">


                    <div class="col-md  col-md-5" style="height:auto">
                        <img style="height:100%!important;object-fit:cover;width:100%" src="<?php echo $row->image; ?>" class="img-fluid" alt="Responsive Image">
                    </div>
                    <div class="col-md-7 py-4 blog_div  roboto content_text" style="height:auto;background-color: white;">
                        <span class="grey bold">
                            <?php $date = strtotime($row->date);
                            $formatted_date = date('jS, F Y', $date);
                            echo $formatted_date; ?></span>

                        <h1><?php echo $row->heading ?></h1>
                        <?php
                        $allowed_tags = '<p><h1><h2>';

                        $plainText = strip_tags($row->body, $allowed_tags);
                        $text = $plainText;
                        // Check if the body text is longer than 300 characters
                        if (strlen($text) > 300) {
                            $text = substr($text, 0, 1000);
                            // Find the last space within the truncated text
                            $last_space = strrpos($text, ' ');
                            // Trim the text to the last space to avoid cutting off in the middle of a word
                            $text = substr($text, 0, $last_space);
                            // Add ellipsis
                            $url = base_url('blog/') . $row->id;
                            function create_url_friendly_heading($heading)
                            {
                                // Convert to lowercase
                                $heading = strtolower(trim($heading));
                                // Replace spaces with hyphens
                                $heading = str_replace(' ', '-', $heading);
                                // Remove any characters that are not alphanumeric or hyphens
                                $heading = preg_replace('/[^a-z0-9\-]/', '', $heading);
                                return $heading;
                            }

                            // Create a cleaned heading for the URL
                            $cleaned_heading = create_url_friendly_heading($row->heading);
                            $text .= ' 
                            <form method="POST" action="' . base_url('blog/' . $row->id . '/' . $cleaned_heading) . '" style="display:inline;">
                                <button type="submit" class="text-danger bold" style="background:none; border:none; padding:0;">Read more</button>
                            </form>';

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

                <div class="row d-flex flex-row" data-aos="fade-left" style="padding:19px 12px;">
                    <div class="col-md-7 py-4 order2 blog_div roboto  roboto content_text" style=" height:auto;background-color: white;">
                        <span class="bold grey">
                            <?php $date = strtotime($row->date);
                            $formatted_date = date('jS, F Y', $date);
                            echo $formatted_date; ?></span>

                        <h1><?php echo $row->heading ?></h1>
                        <?php
                        $allowed_tags = '<p><h1><h2>';

                        $plainText = strip_tags($row->body, $allowed_tags);
                        $text = $plainText;
                        // Check if the body text is longer than 300 characters
                        if (strlen($text) > 300) {
                            $text = substr($text, 0, 1000);
                            // Find the last space within the truncated text
                            $last_space = strrpos($text, ' ');
                            // Trim the text to the last space to avoid cutting off in the middle of a word
                            $text = substr($text, 0, $last_space);
                            // Add ellipsis

                            $cleaned_heading = create_url_friendly_heading($row->heading);
                            $text .= ' 
                            <form method="POST" action="' . base_url('blog/' . $row->id . '/' . $cleaned_heading) . '" style="display:inline;">
                                <button type="submit" class="text-danger bold" style="background:none; border:none; padding:0;">Read more</button>
                            </form>';


                            echo $text;
                        } else {
                            // If the body text is shorter than or equal to 300 characters, output it as is
                            echo $text;
                        }
                        ?>
                    </div>

                    <div class="col-md  col-md-5" style="height:auto">
                        <img style="height:100%!important;object-fit:cover;width:100%" src="<?php echo $row->image; ?>" class="img-fluid" alt="Responsive Image">
                    </div>

                </div>
            <?php endif; ?>
        <?php endforeach;
        ?>
        <?php
        $i = 0; // Initialize $i
        $j = 1; // Initialize $j
        $data_reversed = array_reverse($all); // Reverse the $data array
        foreach ($data_reversed as $index => $row) :
            if ($index < 2) {
                continue; // Skip first two elements
            }

            // Ensure that the next elements exist before accessing them
            if (!isset($data_reversed[$index + $i]) || !isset($data_reversed[$index + $j])) {
                break; // Exit the loop if next elements do not exist
            }

            // Define current and next row
            $current = $data_reversed[$index + $j];
            $nextRow = $data_reversed[$index + $i];
        ?>

            <div class="row mt-4 main_blog_div" style="padding: 1rem;">
                <div class="col-md-6 blog_div_mt" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img class="blog_image" style="height: 400px; object-fit: cover; width: 100%; border-top-left-radius: 15px; border-top-right-radius: 15px;" src="<?php echo $current->image; ?>" alt="Responsive Image">
                    <p class="roboto bold mt-5 grey">
                        <?php
                        $date = strtotime($current->date);
                        $formatted_date = date('jS, F Y', $date);
                        echo $formatted_date;
                        ?>
                    </p>
                    <div class="content_text roboto blog_div">
                        <h1 class="roboto bold" style="margin-top: 2%;"><?php echo $current->heading; ?></h1>
                        <?php
                        $allowed_tags = '<p><h1><h2>';
                        $plainText = strip_tags($current->body, $allowed_tags);
                        $text = $plainText;
                        if (strlen($text) > 1000) {
                            $text = substr($text, 0, 1000);
                            $last_space = strrpos($text, ' ');
                            $text = substr($text, 0, $last_space);
                            $url = base_url('blog/') . $current->id;
                            $cleaned_heading = create_url_friendly_heading($current->heading);
                            $text .= ' 
                            <form method="POST" action="' . base_url('blog/' . $current->id . '/' . $cleaned_heading) . '" style="display:inline;">
                                <button type="submit" class="text-danger bold" style="background:none; border:none; padding:0;">Read more</button>
                            </form>';
                        }
                        echo $text;
                        ?>
                    </div>
                </div>

                <div class="col-md-6 blog_div_mt" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img class="blog_image" style="height: 400px; object-fit: cover; width: 100%; border-top-left-radius: 15px; border-top-right-radius: 15px;" src="<?php echo $nextRow->image; ?>" alt="Responsive Image">
                    <p class="roboto bold mt-5 grey">
                        <?php
                        $date = strtotime($nextRow->date);
                        $formatted_date = date('jS, F Y', $date);
                        echo $formatted_date;
                        ?>
                    </p>
                    <div class="content_text roboto blog_div">
                        <h1 class="roboto bold" style="margin-top: 2%;"><?php echo $nextRow->heading; ?></h1>
                        <?php
                        $allowed_tags = '<p><h1><h2>';
                        $plainText = strip_tags($nextRow->body, $allowed_tags);
                        $text = $plainText;
                        if (strlen($text) > 1100) {
                            $text = substr($text, 0, 1000);
                            $last_space = strrpos($text, ' ');
                            $text = substr($text, 0, $last_space);
                            $url = base_url('blog/') . $nextRow->id;
                            $cleaned_heading = create_url_friendly_heading($nextRow->heading);
                            $text .= ' 
                            <form method="POST" action="' . base_url('blog/' . $nextRow->id . '/' . $cleaned_heading) . '" style="display:inline;">
                                <button type="submit" class="text-danger bold" style="background:none; border:none; padding:0;">Read more</button>
                            </form>';
                        }
                        echo $text;
                        ?>
                    </div>
                </div>
            </div>

        <?php
            $i++;
            $j++;
        endforeach; // End foreach loop
        ?>





    </div>
    <div id="tab2" class="tab-pane">

        <?php foreach (array_reverse($education) as $index => $row) : ?>
            <?php if ($index == 0) : ?>

                <div class="row d-flex flex-row" data-aos="fade-right" style="padding:19px 12px;">


                    <div class="col-md  col-md-5" style="height:auto">
                        <img style="height:100%!important;object-fit:cover;width:100%" src="<?php echo $row->image; ?>" class="img-fluid" alt="Responsive Image">
                    </div>
                    <div class="col-md-7 py-4 blog_div  roboto content_text" style="height:auto;background-color: white;">
                        <span class="grey bold">
                            <?php $date = strtotime($row->date);
                            $formatted_date = date('jS, F Y', $date);
                            echo $formatted_date; ?></span>

                        <h1><?php echo $row->heading ?></h1>
                        <?php
                        $allowed_tags = '<p><h1><h2>';

                        $plainText = strip_tags($row->body, $allowed_tags);
                        $text = $plainText;
                        // Check if the body text is longer than 300 characters
                        if (strlen($text) > 300) {
                            $text = substr($text, 0, 1000);
                            // Find the last space within the truncated text
                            $last_space = strrpos($text, ' ');
                            // Trim the text to the last space to avoid cutting off in the middle of a word
                            $text = substr($text, 0, $last_space);
                            //
                            $cleaned_heading = create_url_friendly_heading($row->heading);
                            $text .= ' 
                            <form method="POST" action="' . base_url('blog/' . $row->id . '/' . $cleaned_heading) . '" style="display:inline;">
                                <button type="submit" class="text-danger bold" style="background:none; border:none; padding:0;">Read more</button>
                            </form>';
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

                <div class="row d-flex flex-row" data-aos="fade-up" style="padding:19px 12px;">
                    <div class="col-md-7 py-4 order2 blog_div roboto  roboto content_text  " style=" height:auto;background-color: white;">
                        <span class="bold grey">
                            <?php $date = strtotime($row->date);
                            $formatted_date = date('jS, F Y', $date);
                            echo $formatted_date; ?></span>

                        <h1><?php echo $row->heading ?></h1>
                        <?php
                        $allowed_tags = '<p><h1><h2>';

                        $plainText = strip_tags($row->body, $allowed_tags);
                        $text = $plainText;
                        // Check if the body text is longer than 300 characters
                        if (strlen($text) > 300) {
                            $text = substr($text, 0, 1000);
                            // Find the last space within the truncated text
                            $last_space = strrpos($text, ' ');
                            // Trim the text to the last space to avoid cutting off in the middle of a word
                            $text = substr($text, 0, $last_space);
                            // Add ellipsis
                            $cleaned_heading = create_url_friendly_heading($row->heading);
                            $text .= ' 
                            <form method="POST" action="' . base_url('blog/' . $row->id . '/' . $cleaned_heading) . '" style="display:inline;">
                                <button type="submit" class="text-danger bold" style="background:none; border:none; padding:0;">Read more</button>
                            </form>';
                            // Output the truncated body text with "Read more" link
                            echo $text;
                        } else {
                            // If the body text is shorter than or equal to 300 characters, output it as is
                            echo $text;
                        }
                        ?>
                    </div>

                    <div class="col-md  col-md-5" style="height:auto">
                        <img style="height:100%!important;object-fit:cover;width:100%" src="<?php echo $row->image; ?>" alt="Responsive Image">
                    </div>

                </div>
            <?php endif; ?>
        <?php endforeach;
        ?>
        <?php
        $i = 0; // Initialize $i
        $j = 1; // Initialize $j
        $data_reversed = array_reverse($education); // Reverse the $data array
        foreach ($data_reversed as $index => $row) :
            if ($index < 2) {
                continue; // Skip first two elements
            }

            // Ensure that the next elements exist before accessing them
            if (!isset($data_reversed[$index + $i]) || !isset($data_reversed[$index + $j])) {
                break; // Exit the loop if next elements do not exist
            }

            // Define current and next row
            $current = $data_reversed[$index + $j];
            $nextRow = $data_reversed[$index + $i];
        ?>

            <div class="row mt-4" style="padding: 1rem;">
                <div class="col-md-6" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img style="height: 400px; object-fit: cover; width: 100%; border-top-left-radius: 15px; border-top-right-radius: 15px;" src="<?php echo $current->image; ?>" alt="Responsive Image">
                    <p class="roboto bold mt-5 grey">
                        <?php
                        $date = strtotime($current->date);
                        $formatted_date = date('jS, F Y', $date);
                        echo $formatted_date;
                        ?>
                    </p>
                    <div class="content_text roboto blog_div">
                        <h1 class="roboto bold" style="margin-top: 2%;"><?php echo $current->heading; ?></h1>
                        <?php
                        $allowed_tags = '<p><h1><h2>';
                        $plainText = strip_tags($current->body, $allowed_tags);
                        $text = $plainText;
                        if (strlen($text) > 1000) {
                            $text = substr($text, 0, 1000);
                            $last_space = strrpos($text, ' ');
                            $text = substr($text, 0, $last_space);
                            $cleaned_heading = create_url_friendly_heading($current->heading);
                            $text .= ' 
                            <form method="POST" action="' . base_url('blog/' . $current->id . '/' . $cleaned_heading) . '" style="display:inline;">
                                <button type="submit" class="text-danger bold" style="background:none; border:none; padding:0;">Read more</button>
                            </form>';
                        }
                        echo $text;
                        ?>
                    </div>
                </div>

                <div class="col-md-6" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img style="height: 400px; object-fit: cover; width: 100%; border-top-left-radius: 15px; border-top-right-radius: 15px;" src="<?php echo $nextRow->image; ?>" alt="Responsive Image">
                    <p class="roboto bold mt-5 grey">
                        <?php
                        $date = strtotime($nextRow->date);
                        $formatted_date = date('jS, F Y', $date);
                        echo $formatted_date;
                        ?>
                    </p>
                    <div class="content_text roboto blog_div">
                        <h1 class="roboto bold" style="margin-top: 2%;"><?php echo $nextRow->heading; ?></h1>
                        <?php
                        $allowed_tags = '<p><h1><h2>';
                        $plainText = strip_tags($nextRow->body, $allowed_tags);
                        $text = $plainText;
                        if (strlen($text) > 1100) {
                            $text = substr($text, 0, 1000);
                            $last_space = strrpos($text, ' ');
                            $text = substr($text, 0, $last_space);
                            $cleaned_heading = create_url_friendly_heading($nextRow->heading);
                            $text .= ' 
                            <form method="POST" action="' . base_url('blog/' . $nextRow->id . '/' . $cleaned_heading) . '" style="display:inline;">
                                <button type="submit" class="text-danger bold" style="background:none; border:none; padding:0;">Read more</button>
                            </form>';
                        }
                        echo $text;
                        ?>
                    </div>
                </div>
            </div>

        <?php
            $i++;
            $j++;
        endforeach; // End foreach loop
        ?>
    </div>
    <div id="tab3" class="tab-pane">
        <?php foreach (array_reverse($technology) as $index => $row) : ?>
            <?php if ($index == 0) : ?>

                <div class="row d-flex flex-row" data-aos="fade-right" style="padding:19px 12px;">


                    <div class="col-md  col-md-5" style="height:auto">
                        <img style="height:100%!important;object-fit:cover;width:100%" src="<?php echo $row->image; ?>" class="img-fluid" alt="Responsive Image">
                    </div>
                    <div class="col-md-7 py-4 blog_div  roboto content_text" style="height:auto;background-color: white;">
                        <span class="grey bold">
                            <?php $date = strtotime($row->date);
                            $formatted_date = date('jS, F Y', $date);
                            echo $formatted_date; ?></span>

                        <h1><?php echo $row->heading ?></h1>
                        <?php
                        $allowed_tags = '<p><h1><h2>';

                        $plainText = strip_tags($row->body, $allowed_tags);
                        $text = $plainText;
                        // Check if the body text is longer than 300 characters
                        if (strlen($text) > 300) {
                            $text = substr($text, 0, 1000);
                            // Find the last space within the truncated text
                            $last_space = strrpos($text, ' ');
                            // Trim the text to the last space to avoid cutting off in the middle of a word
                            $text = substr($text, 0, $last_space);
                            // Add ellipsis
                            $cleaned_heading = create_url_friendly_heading($row->heading);
                            $text .= ' 
                            <form method="POST" action="' . base_url('blog/' . $row->id . '/' . $cleaned_heading) . '" style="display:inline;">
                                <button type="submit" class="text-danger bold" style="background:none; border:none; padding:0;">Read more</button>
                            </form>';
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

                <div class="row d-flex flex-row" data-aos="fade-left" style="padding:19px 12px;">
                    <div class="col-md-7 py-4 order2 blog_div roboto  roboto content_text  " style=" height:auto;background-color: white;">
                        <span class="bold grey">
                            <?php $date = strtotime($row->date);
                            $formatted_date = date('jS, F Y', $date);
                            echo $formatted_date; ?></span>

                        <h1><?php echo $row->heading ?></h1>
                        <?php
                        $allowed_tags = '<p><h1><h2>';

                        $plainText = strip_tags($row->body, $allowed_tags);
                        $text = $plainText;
                        // Check if the body text is longer than 300 characters
                        if (strlen($text) > 300) {
                            $text = substr($text, 0, 1000);
                            // Find the last space within the truncated text
                            $last_space = strrpos($text, ' ');
                            // Trim the text to the last space to avoid cutting off in the middle of a word
                            $text = substr($text, 0, $last_space);
                            // Add ellipsis
                            $cleaned_heading = create_url_friendly_heading($row->heading);
                            $text .= ' 
                            <form method="POST" action="' . base_url('blog/' . $row->id . '/' . $cleaned_heading) . '" style="display:inline;">
                                <button type="submit" class="text-danger bold" style="background:none; border:none; padding:0;">Read more</button>
                            </form>';
                            // Output the truncated body text with "Read more" link
                            echo $text;
                        } else {
                            // If the body text is shorter than or equal to 300 characters, output it as is
                            echo $text;
                        }
                        ?>
                    </div>

                    <div class="col-md  col-md-5" style="height:auto">
                        <img style="height:100%!important;object-fit:cover;width:100%" src="<?php echo $row->image; ?>" alt="Responsive Image">
                    </div>

                </div>
            <?php endif; ?>
        <?php endforeach;
        ?>
        <?php
        $i = 0; // Initialize $i
        $j = 1; // Initialize $j
        $data_reversed = array_reverse($technology); // Reverse the $data array
        foreach ($data_reversed as $index => $row) :
            if ($index < 2) {
                continue; // Skip first two elements
            }

            // Ensure that the next elements exist before accessing them
            if (!isset($data_reversed[$index + $i]) || !isset($data_reversed[$index + $j])) {
                break; // Exit the loop if next elements do not exist
            }

            // Define current and next row
            $current = $data_reversed[$index + $j];
            $nextRow = $data_reversed[$index + $i];
        ?>

            <div class="row mt-4" style="padding: 1rem;">
                <div class="col-md-6" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img style="height: 400px; object-fit: cover; width: 100%; border-top-left-radius: 15px; border-top-right-radius: 15px;" src="<?php echo $current->image; ?>" alt="Responsive Image">
                    <p class="roboto bold mt-5 grey">
                        <?php
                        $date = strtotime($current->date);
                        $formatted_date = date('jS, F Y', $date);
                        echo $formatted_date;
                        ?>
                    </p>
                    <div class="content_text roboto blog_div">
                        <h1 class="roboto bold" style="margin-top: 2%;"><?php echo $current->heading; ?></h1>
                        <?php
                        $allowed_tags = '<p><h1><h2>';
                        $plainText = strip_tags($current->body, $allowed_tags);
                        $text = $plainText;
                        if (strlen($text) > 1000) {
                            $text = substr($text, 0, 1000);
                            $last_space = strrpos($text, ' ');
                            $text = substr($text, 0, $last_space);
                            $cleaned_heading = create_url_friendly_heading($current->heading);
                            $text .= ' 
                            <form method="POST" action="' . base_url('blog/' . $current->id . '/' . $cleaned_heading) . '" style="display:inline;">
                                <button type="submit" class="text-danger bold" style="background:none; border:none; padding:0;">Read more</button>
                            </form>';
                        }
                        echo $text;
                        ?>
                    </div>
                </div>

                <div class="col-md-6" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img style="height: 400px; object-fit: cover; width: 100%; border-top-left-radius: 15px; border-top-right-radius: 15px;" src="<?php echo $nextRow->image; ?>" alt="Responsive Image">
                    <p class="roboto bold mt-5 grey">
                        <?php
                        $date = strtotime($nextRow->date);
                        $formatted_date = date('jS, F Y', $date);
                        echo $formatted_date;
                        ?>
                    </p>
                    <div class="content_text roboto blog_div">
                        <h1 class="roboto bold" style="margin-top: 2%;"><?php echo $nextRow->heading; ?></h1>
                        <?php
                        $allowed_tags = '<p><h1><h2>';
                        $plainText = strip_tags($nextRow->body, $allowed_tags);
                        $text = $plainText;
                        if (strlen($text) > 1100) {
                            $text = substr($text, 0, 1000);
                            $last_space = strrpos($text, ' ');
                            $text = substr($text, 0, $last_space);
                            $cleaned_heading = create_url_friendly_heading($nextRow->heading);
                            $text .= ' 
                            <form method="POST" action="' . base_url('blog/' . $nextRow->id . '/' . $cleaned_heading) . '" style="display:inline;">
                                <button type="submit" class="text-danger bold" style="background:none; border:none; padding:0;">Read more</button>
                            </form>';
                        }
                        echo $text;
                        ?>
                    </div>
                </div>
            </div>

        <?php
            $i++;
            $j++;
        endforeach; // End foreach loop
        ?>
    </div>
    <div id="tab4" class="tab-pane">
        <?php foreach (array_reverse($school) as $index => $row) : ?>
            <?php if ($index == 0) : ?>

                <div class="row d-flex flex-row" data-aos="fade-right" style="padding:19px 12px;">


                    <div class="col-md  col-md-5" style="height:auto">
                        <img style="height:100%!important;object-fit:cover;width:100%" src="<?php echo $row->image; ?>" class="img-fluid" alt="Responsive Image">
                    </div>
                    <div class="col-md-7 py-4 blog_div  roboto content_text" style="height:auto;background-color: white;">
                        <span class="grey bold">
                            <?php $date = strtotime($row->date);
                            $formatted_date = date('jS, F Y', $date);
                            echo $formatted_date; ?></span>

                        <h1><?php echo $row->heading ?></h1>
                        <?php
                        $allowed_tags = '<p><h1><h2>';

                        $plainText = strip_tags($row->body, $allowed_tags);
                        $text = $plainText;
                        // Check if the body text is longer than 300 characters
                        if (strlen($text) > 300) {
                            $text = substr($text, 0, 1000);
                            // Find the last space within the truncated text
                            $last_space = strrpos($text, ' ');
                            // Trim the text to the last space to avoid cutting off in the middle of a word
                            $text = substr($text, 0, $last_space);
                            // Add ellipsis
                            $cleaned_heading = create_url_friendly_heading($row->heading);
                            $text .= ' 
                            <form method="POST" action="' . base_url('blog/' . $row->id . '/' . $cleaned_heading) . '" style="display:inline;">
                                <button type="submit" class="text-danger bold" style="background:none; border:none; padding:0;">Read more</button>
                            </form>';
                        } else {
                            // If the body text is shorter than or equal to 300 characters, output it as is
                            echo $text;
                        }
                        ?>
                    </div>

                </div>
            <?php endif; ?>
            <?php if ($index == 1) : ?>

                <div class="row d-flex flex-row" data-aos="fade-left" style="padding:19px 12px;">
                    <div class="col-md-7 py-4 order2 blog_div roboto  roboto content_text  " style=" height:auto;background-color: white;">
                        <span class="bold grey">
                            <?php $date = strtotime($row->date);
                            $formatted_date = date('jS, F Y', $date);
                            echo $formatted_date; ?></span>

                        <h1><?php echo $row->heading ?></h1>
                        <?php
                        $allowed_tags = '<p><h1><h2>';

                        $plainText = strip_tags($row->body, $allowed_tags);
                        $text = $plainText;
                        // Check if the body text is longer than 300 characters
                        if (strlen($text) > 300) {
                            $text = substr($text, 0, 1000);
                            // Find the last space within the truncated text
                            $last_space = strrpos($text, ' ');
                            // Trim the text to the last space to avoid cutting off in the middle of a word
                            $text = substr($text, 0, $last_space);
                            // Add ellipsis
                            $cleaned_heading = create_url_friendly_heading($row->heading);
                            $text .= ' 
                            <form method="POST" action="' . base_url('blog/' . $row->id . '/' . $cleaned_heading) . '" style="display:inline;">
                                <button type="submit" class="text-danger bold" style="background:none; border:none; padding:0;">Read more</button>
                            </form>';
                            // Output the truncated body text with "Read more" link
                            echo $text;
                        } else {
                            // If the body text is shorter than or equal to 300 characters, output it as is
                            echo $text;
                        }
                        ?>
                    </div>

                    <div class="col-md-5" style="height:auto">
                        <img style="height:100%!important;object-fit:cover;width:100%" src="<?php echo $row->image; ?>" alt="Responsive Image">
                    </div>

                </div>
            <?php endif; ?>
        <?php endforeach;
        ?>
        <?php
        $i = 0; // Initialize $i
        $j = 1; // Initialize $j
        $data_reversed = array_reverse($school); // Reverse the $data array
        foreach ($data_reversed as $index => $row) :
            if ($index < 2) {
                continue; // Skip first two elements
            }

            // Ensure that the next elements exist before accessing them
            if (!isset($data_reversed[$index + $i]) || !isset($data_reversed[$index + $j])) {
                break; // Exit the loop if next elements do not exist
            }

            // Define current and next row
            $current = $data_reversed[$index + $j];
            $nextRow = $data_reversed[$index + $i];
        ?>

            <div class="row mt-4 " style="padding: 1rem;">
                <div class="col-md-6 blog_image" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img style="height: 400px; object-fit: cover; width: 100%; border-top-left-radius: 15px; border-top-right-radius: 15px;" src="<?php echo $nextRow->image; ?>" alt="Responsive Image">

                    <p class="roboto bold mt-5 grey">
                        <?php
                        $date = strtotime($current->date);
                        $formatted_date = date('jS, F Y', $date);
                        echo $formatted_date;
                        ?>
                    </p>
                    <div class="content_text roboto blog_div">
                        <h1 class="roboto bold" style="margin-top: 2%;"><?php echo $current->heading; ?></h1>
                        <?php
                        $allowed_tags = '<p><h1><h2>';
                        $plainText = strip_tags($current->body, $allowed_tags);
                        $text = $plainText;
                        if (strlen($text) > 1000) {
                            $text = substr($text, 0, 1000);
                            $last_space = strrpos($text, ' ');
                            $text = substr($text, 0, $last_space);
                            $cleaned_heading = create_url_friendly_heading($current->heading);
                            $text .= ' 
                            <form method="POST" action="' . base_url('blog/' . $current->id . '/' . $cleaned_heading) . '" style="display:inline;">
                                <button type="submit" class="text-danger bold" style="background:none; border:none; padding:0;">Read more</button>
                            </form>';
                        }
                        echo $text;
                        ?>
                    </div>
                </div>

                <div class="col-md-6 blog_image" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img style="height: 400px; object-fit: cover; width: 100%; border-top-left-radius: 15px; border-top-right-radius: 15px;" src="<?php echo $nextRow->image; ?>" alt="Responsive Image">

                    <p class="roboto bold mt-5 grey">
                        <?php
                        $date = strtotime($nextRow->date);
                        $formatted_date = date('jS, F Y', $date);
                        echo $formatted_date;
                        ?>
                    </p>
                    <div class="content_text roboto blog_div">
                        <h1 class="roboto bold" style="margin-top: 2%;"><?php echo $nextRow->heading; ?></h1>
                        <?php
                        $allowed_tags = '<p><h1><h2>';
                        $plainText = strip_tags($nextRow->body, $allowed_tags);
                        $text = $plainText;
                        if (strlen($text) > 1100) {
                            $text = substr($text, 0, 1000);
                            $last_space = strrpos($text, ' ');
                            $text = substr($text, 0, $last_space);
                            $cleaned_heading = create_url_friendly_heading($nextRow->heading);
                            $text .= ' 
                            <form method="POST" action="' . base_url('blog/' . $nextRow->id . '/' . $cleaned_heading) . '" style="display:inline;">
                                <button type="submit" class="text-danger bold" style="background:none; border:none; padding:0;">Read more</button>
                            </form>';
                        }
                        echo $text;
                        ?>
                    </div>
                </div>
            </div>

        <?php
            $i++;
            $j++;
        endforeach; // End foreach loop
        ?>
    </div>
</div>

















<?php $this->load->view('common/footer'); ?>