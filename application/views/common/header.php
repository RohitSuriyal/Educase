<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-WK92CBF8');
	</script>
	<!-- End Google Tag Manager -->
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />



	<title><?php echo isset($title) ? $title : 'Findmyschool'; ?></title>

	<!-- Dynamic Meta Tags -->
	<?php if (isset($meta_description)): ?>
		<meta name="description" content="<?php echo $meta_description; ?>">
	<?php endif; ?>

	<?php if (isset($meta_keywords)): ?>
		<meta name="keywords" content="<?php echo $meta_keywords; ?>">
	<?php endif; ?>

	<!-- Open Graph Tags -->
	<?php if (isset($og_title)): ?>
		<meta property="og:title" content="<?php echo $og_title; ?>">
	<?php endif; ?>

	<?php if (isset($og_description)): ?>
		<meta property="og:description" content="<?php echo $og_description; ?>">
	<?php endif; ?>

	<?php if (isset($og_image)): ?>
		<meta property="og:image" content="<?php echo $og_image; ?>">
	<?php endif; ?>



	<?php if (isset($og_type)): ?>
		<meta property="og:type" content="<?php echo $og_type; ?>">
	<?php endif; ?>
	<?php if (isset($og_url)): ?>
		<meta property="og:url" content="<?php echo $og_url; ?>">
	<?php endif; ?>

	





	<!-- Bootstrap CSS -->
	<link rel="icon" href="<?php echo base_url('assets/images/findmyschool.jpeg'); ?>" type="image/x-icon" style="height: 32px; width: 40px!important;">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/school.css") ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/educase.css'); ?>" />
	<script src="https://kit.fontawesome.com/8337c29774.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
	<script src="<?php echo base_url(); ?>assets/ckfinder/ckfinder.js"></script>
	<!-- <script src="sweetalert2.min.js"></script>
	<link rel="stylesheet" href="sweetalert2.min.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" />












	<style>
		.blog_background {
			background: url("<?php echo base_url("assets/images/BLOG (1).png") ?>");
			height: 488px;
			width: 100%;
			background-size: contain;
			/* Set specific sizes for the background images */
			background-position: 6rem 10px;
			background-repeat: no-repeat;
		}

		.custom img {
			width: 100% !important;
			height: 100% !important;
		}

		.header_hub {
			font-family: "Roboto", "Arial", sans-serif;
		}

		.image_background {

			background-image: url("<?php echo base_url("assets/images/Rectangle 13 (2).png") ?>"), url("<?php echo base_url("assets/images/Rectangle 11 (1) (1).png") ?>"), url("<?php echo base_url("assets/images/Rectangle 12 (1).png") ?>"), url("<?php echo base_url("assets/images/Rectangle 14 (1) (1).png") ?>"), url("<?php echo base_url("assets/images/Rectangle 16 (1).png") ?>"), url("<?php echo base_url("assets/images/Rectangle 15 (2).png") ?>");
			background-size: 161px 225px, 161px 225px;
			/* Set specific sizes for the background images */
			background-position: -7px 20px, 179px 79px, 37px 245px, 89% 30%, 101% 5%, 98% 72%;
			/* Adjust the positions to ensure both images are visible */
			background-repeat: no-repeat, no-repeat;
			/* Prevents both images from repeating */

			opacity: 0.6;


		}

		.outer_img {

			background-image: url("<?php echo base_url("assets/images/Rectangle 23.png") ?>"), url("<?php echo base_url("assets/images/Rectangle 16.png") ?>");
			background-size: 161px 225px, 161px 225px;
			/* Set specific sizes for the background images */
			background-position: -1rem 25rem, 94rem 25rem;
			/* Adjust the positions to ensure both images are visible */
			background-repeat: no-repeat, no-repeat;




		}

		@media (max-width: 990px) {
			.image_background {

				background-image: url("<?php echo base_url("assets/images/Rectangle 13.png") ?>"), url("<?php echo base_url("assets/images/Rectangle 16.png") ?>");
				background-size: 132px 183px, 132px 183px;
				/* Set specific sizes for the background images */
				background-position: -7px 20px, 101% 5%;
				/* Adjust the positions to ensure both images are visible */
				background-repeat: no-repeat, no-repeat;
				/* Prevents both images from repeating */

				/* Temporary border to visualize the div */

			}

			.outer_img {

				background-image: url("<?php echo base_url("assets/images/Rectangle 23.png") ?>"), url("./images/Rectangle 16.png");
				background-size: 132px 183px, 132px 183px;
				/* Set specific sizes for the background images */
				background-position: -3rem 20rem, 51rem 20rem;
				/* Adjust the positions to ensure both images are visible */
				background-repeat: no-repeat, no-repeat;
				/* Prevents both images from repeating */




			}
		}

		.search-container {

			position: relative;
			width: 100%;
			margin: 50px auto;
			display: flex;
			align-items: center;
			border: 1px solid #ccc;
			border-radius: 5px;
			padding: 5px;
			box-sizing: border-box;


		}

		.search-icon {
			font-size: 18px;
			color: #aaa;
			margin-right: 10px;
		}

		.search-input {
			width: 100%;
			border: none;
			outline: none;
			padding: 10px 10px 10px 0;
			font-size: 16px;
			box-sizing: border-box;
		}

		@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

		.roboto {
			font-family: "Roboto", sans-serif;
			font-weight: 400;
			font-style: normal;
		}

		.bold {
			font-weight: bold;
		}

		.blog {
			background: url("./images/BLOG.png");
			background: url("<?php echo base_url("assets/images/BLOG.png") ?>");
			height: 100%;
			width: 100%;
			background-size: contain;
			/* Set specific sizes for the background images */
			background-position: 10px 10px;
			background-repeat: no-repeat;
			/* Prevents both images from repeating */
		}

		.padding0 {
			padding: 0px 0xp;

		}

		.margin0 {
			padding: 0px 0px;
		}


		.nav_font {
			font-size: 3.2vw !important;
		}










		.cities {
			border: 2px solid white;
			border-radius: 10px;
			margin: 10px;


		}

		.city_heading {
			font-size: 2.5vw;
		}

		/* for the tabs */

		.tabs {
			display: flex;
			justify-content: space-around;

		}

		.tab {
			padding: 14px 20px;
			cursor: pointer;
			color: grey;
			transition: color 0.3s;
			position: relative;
		}

		.tab::after {
			content: '';
			position: absolute;
			left: 0;
			bottom: -2px;

			background-color: black;

		}

		.tab.active {
			color: black;
			border-bottom: 2px solid #000;
			/* Adjust the color and thickness as needed */

		}

		.tab.active::after {
			animation: underline 0.7s forwards;
		}

		.tab.active::after {
			transform: scaleX(1);
			transform-origin: left;
		}

		.tab-content {
			padding: 20px;
		}

		.tab-pane {
			display: none;
		}

		.tab-pane.active {
			display: block;
		}

		.view_button {
			border: 2px solid #001AFF;
			color: #001AFF;
			background-color: white;
			margin: 0rem 0rem;
			padding: 0rem 0rem;
		}

		.school_div_bg {
			background-color: #F9F9FF;
		}

		@keyframes underline {
			0% {
				transform: scaleX(0);
			}

			100% {
				transform: scaleX(1);
			}
		}

		@media only screen and (max-width:580px) {

			/* //this is for the home page */
			.input_font {
				font-size: 0.9rem;
				width: 90% !important;
			}

			.img_location {
				height: 15px !important;
				width: 15px !important;
			}


			.top_font {
				font-size: 37.76px !important;
				line-height: 36.33px !important;
			}

			.top_heading_padding {
				padding: 10rem 3% !important;
			}

			.height_img_bg {
				height: 100% !important;
			}

			.tab.active {
				color: black;
				border-bottom: 0px solid black !important;
				box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
				/* Adjust the values to get the desired shadow effect */

			}

			.header_res {
				padding: 2% 0% !important;
				margin: 0% 0% !important;
			}

			.col_new_educase {
				width: 30% !important;
			}

			.nav_font {
				font-size: 4vw !important;
			}

			.menu_icon {
				height: 20px;
				width: 20px;
				padding: 0px;
			}

			.top_school_heading h1 {
				font-size: 34px !important;
			}

			.locality {
				font-size: 30px !important;
			}

			.p_school {
				text-align: left !important;
			}

			.second_school_div {
				margin-top: 1.3rem !important;
			}

			.school_main_div {
				margin: 0 6% !important;
			}

			/* this is for the blog page */
			.blog_image {

				height: auto !important;
			}

			.tab_content {
				padding: 0rem 1rem !Important;
			}

			.blog_text {
				font-size: 32px !Important;
			}

			.blog_background {
				height: 328px !important;
				background-position: 0rem 7px !important;
			}

			.tabs {
				margin: 0 2rem;

			}

			.tabs_school_info {
				gap: 0rem !important;
			}

			.tab {
				padding: 3px 0px !Important;
				margin: 8px;
			}

			.single_div {
				margin: 0 2% !important
			}

			.upper_single_div {
				padding: 0 11% !important;
			}

			.school_info img {
				height: 186px !important;
			}

			.schoo_info_heading {
				margin: 8% 0 !important;
				text-align: center;
			}

			.select_total_div {
				justify-content: start !important;
			}

			.image_tab_div {
				flex-direction: column !important;
			}

			.image_tab {
				width: 96.99% !important;
				margin: 2% 0;
			}

			.gallery_pic {
				margin-bottom: 2%;
			}

			.img-fluid {
				margin-bottom: 3%;
			}

			.total_fee_div_ad {
				padding: 0 0 !important;
			}

			.fee_div {
				padding: 0.8rem !important;
			}

			.fee_text {
				font-size: 12px !important;
				text-align: center !important;
			}

			.fee_heading {
				text-align: center;
				font-size: 16px !Important;
			}

			.fee_heading_main {

				font-size: 20px !important;

			}

			.top_heading {
				margin-left: -4% !important;
			}

			.blog_div_mt {
				margin-top: 23% !important;
			}

			.main_blog_div {
				margin-top: -19% !important;
			}

			.outer_img {
				background-image: url('http://localhost/educase/assets/images/Rectangle%2023.png'), url('./images/Rectangle%2016.png');
				background-size: 132px 183px, 132px 183px;
				background-position: -3rem 15rem, 51rem 20rem;
				background-repeat: no-repeat, no-repeat;
			}

			.search-container {
				position: relative;
				width: 100%;
				margin: 50px auto;
				display: flex;
				align-items: center;
				border: 1px solid #ccc;
				border-radius: 5px;
				padding: 0px 10px;
				box-sizing: border-box;
			}

			.single_blog_div {
				padding: 1rem 1rem !important;
			}

			.single_blog {
				margin-top: 10%;
			}

			.feature_heading {
				margin: 6% 0%;

			}

			.tab-content {
				padding: 9px;
			}

			.gal_image {
				margin: 2% 0;
			}

			.absolute_text {
				position: absolute;
				top: 102%;
				left: 17px !important;
				width: 89% !important;
				background-color: white;
				border: 1px solid #ccc;
				z-index: 10;
				padding: 5px;
			}







		}

		@media (max-width: 600px) {
			.tabs {
				flex-direction: column;
			}

			.tab {
				text-align: center;
			}
		}

		@media only screen and (max-width:768px) {
			.school_div_gap {
				gap: 0vw !important;
			}

			.school_div_p_width {
				width: 9rem !important;
			}
		}

		@media only screen and (max-width:818px) {

			.hide_topbar {
				display: none !important;
			}

			.justify {
				justify-content: center !important;
			}

			.text_align_left {
				text-align: left !important;
			}

			.col_new {
				width: 56%;
			}

			.col_new_menu {
				width: 10%;
				margin-bottom: 4px;

			}

			.col_new_educase {
				width: 29%;

			}


			.menubar {
				display: block !important;
			}

		}

		@media only screen and (max-width:768px) {
			.order2 {
				order: 2;
			}

			.order1 {
				order: 1;
			}

			.city_heading {
				font-size: 5.5vw;

			}


			.city_headingp {
				font-size: 4.5vw !important;
			}

			.margin_top {
				margin-top: 21%;
			}

			.margin_0 {
				margin-right: 0px !important;
				margin-left: 0px !important;
			}

			.blog_div h1 {
				font-size: 21px !important;
			}

			.p_text {
				font-size: 0.9rem !important;
			}

			.cities {
				width: 64% !important;
			}





		}

		@media only screen and (max-width:1014px) {
			.remove_pic {
				display: none;
			}

			.top_heading_padding {
				padding: 10rem 2% 0rem 2% !important;

			}
		}

		.pointer {
			cursor: pointer;
		}

		/* //this is for the sidebar */
		.sidebar {
			height: 100%;
			width: 250px;
			position: fixed;
			top: 0;
			left: -250px;
			background-color: #111;
			overflow-x: hidden;
			transition: 0.5s;
			padding-top: 60px;
			z-index: 1000;
		}


		.close-btn_form {
			position: absolute;
			top: -11px;
			right: 1px;
			background: none;
			border: none;
			font-size: 35px;
			cursor: pointer;
			color: #f44336;
			font-weight: bold;
			text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
		}

		.close-btn {
			padding: 0px 9px 2px 10px !important;
			position: absolute;
			top: 16px;
			right: 10px;
			background-color: transparent;
			border: none;
			color: white;
			font-size: 17px;
			cursor: pointer;
			border-radius: 19%;
		}



		.sidebar ul {
			list-style-type: none;
			padding: 0;
			margin: 0;
		}

		.sidebar ul li {
			padding: 8px;
			text-align: center;
		}

		.sidebar ul li a {
			text-decoration: none;
			color: white;
			display: block;
			transition: 0.3s;
		}

		.sidebar ul li a:hover {
			background-color: #555;
		}

		.sidebar.active {
			left: 0;
		}

		.sidebar-overlay {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(0, 0, 0, 0.5);
			z-index: 999;
			display: none;
		}

		#sidebar-toggle {
			background-color: transparent;
			border: none;
			cursor: pointer;
			outline: none;
		}

		.sidebar ul {
			list-style-type: none;
			padding: 0;
			margin: 0;
		}

		.sidebar ul li {
			padding: 8px;
			text-align: center;
			position: relative;
			/* Relative positioning to allow for absolute positioning of the lines */
		}

		.sidebar ul li::after {
			content: '';
			position: absolute;
			left: 0;
			bottom: -1px;
			/* Adjust this value to control the distance of the line from the list item */
			width: 100%;
			height: 1px;
			background-color: #ccc;
			/* Grey color for the line */
		}

		.sidebar ul li:first-child::before {
			content: '';
			position: absolute;
			left: 0;
			top: -1px;
			/* Adjust this value to control the distance of the line from the list item */
			width: 100%;
			height: 1px;
			background-color: #ccc;
			/* Grey color for the line */
		}

		.mid-text {
			position: absolute;
			top: 39px;
			left: 33%;
			transform: translate(-50%, -50%);
			animation: shake 3s linear;
			/* Apply animation */
		}

		@keyframes shake {
			0% {
				transform: translate(-50%, -50%) rotate(0);
			}

			25% {
				transform: translate(-50%, -50%) rotate(-10deg);
			}

			50% {
				transform: translate(-50%, -50%) rotate(10deg);
			}

			75% {
				transform: translate(-50%, -50%) rotate(-10deg);
			}

			100% {
				transform: translate(-50%, -50%) rotate(0);
			}
		}

		.sticky-header {
			position: sticky;
			top: 0;
			left: 0;
			width: 100%;
			background-color: white;
			/* Adjust as needed */
			z-index: 444
				/* Adjust as needed */
		}

		/* for the drop down in achol info */






		.dropdown-list {
			display: none;
			position: absolute;
			background-color: #ffffff;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
			z-index: 1;
			top: 4rem;
		}

		.dropdown-list li {
			padding: 10px;
			border-bottom: 1px solid #cccccc;
			list-style-type: none;
		}

		.list_button {
			cursor: pointer;
		}

		@keyframes slideInFromLeft {
			0% {
				opacity: 0;
				transform: translateX(-100%);
			}

			100% {
				opacity: 1;
				transform: translateX(0);
			}
		}

		.col_new_educase {
			font-weight: bold;

			overflow: hidden;
			/* Ensures the animation doesn't cause scrollbars */
		}

		.col_new_educase {

			animation: slideInFromLeft 1s ease-out;
		}

		.input-wrapper {
			position: relative;
			width: 80%;
			/* Adjust as needed */
			margin-bottom: 10px;
			/* Space between input and message */
		}

		.input-wrapper .no-data-msg {
			display: none;
			/* Initially hide the message */
			position: absolute;
			top: calc(100% + 5px);
			/* Position below the input field */
			left: 0;
			width: 100%;
			background-color: white;
			border: 1px solid red;
			padding: 5px;
			box-sizing: border-box;
		}

		.input-wrapper input:hover {
			box-shadow: none;
			/* Remove box shadow on hover */
		}
	</style>
	<!-- <link rel="icon" type="image/x-icon" href="https://static.wixstatic.com/media/020d2b_c5e7c2f906e14b06925835777f2d6b4f~mv2.png/v1/fill/w_451,h_146,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/PG-removebg-preview.png">
    <style>
        link[rel="icon"] {
            width: 32px;
            height: 32px;
        }
    </style> -->
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

		body {
			font-family: 'Roboto', sans-serif;
			background-color: #f4f4f4;
			margin: 0;
			overflow-x: hidden;
		}

		.btn {
			cursor: pointer;
			padding: 10px 67px;
			font-size: 16px;
			font-weight: bold;
			color: #fff;
			background-color: #007bff;
			border: none;
			border-radius: 5px;
			transition: background-color 0.3s ease;
		}

		.btn:hover {
			background-color: #0056b3;
		}

		/* Overlay */
		.overlay {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.7);
			display: none;
			justify-content: center;
			align-items: center;
			z-index: 1000;
		}

		/* Form container */

		.form-container {
			position: fixed;
			/* Fix the form to the viewport */
			top: 50%;
			/* Center vertically in the visible screen */
			left: 50%;
			/* Center horizontally in the visible screen */
			transform: translate(-50%, -50%);
			/* Offset the position to truly center it */
			width: 100%;
			max-width: 40%;
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
			z-index: 1100;
			animation: slideDown 0.5s ease-in-out;
			/* Apply the slideDown animation */

		}


		/* Animation */
		@keyframes slideDown {
			from {
				opacity: 0;

			}

			to {
				opacity: 1;

			}
		}

		/* Close button */

		.form-group {
			margin-bottom: 15px;
		}

		.form-group label {
			font-weight: bold;
			margin-bottom: 5px;
			display: block;
		}

		.form-group input {
			width: 100%;
			padding: 5px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		.form-group button {
			width: 100%;
			padding: 10px;
			border: none;
			background-color: #007bff;
			color: #fff;
			border-radius: 5px;
			font-size: 16px;
			font-weight: bold;
			cursor: pointer;
		}

		.form-group button:hover {
			background-color: #0056b3;
		}

		@media (max-width: 768px) {
			.form-container {
				max-width: 90%;
				padding: 15px;
				/* Reduce padding on smaller devices */
			}
		}

		/* Styles for very small devices */
		@media (max-width: 480px) {
			.form-container {
				max-width: 95%;
				padding: 10px;
				/* Further reduce padding for very small devices */
			}
		}

		@media (max-width: 600px) {
			.form-container {
				width: 90%;
			}


			.form-container {
				position: fixed;
				top: 51%;
				left: 50%;
				transform: translate(-50%, -50%);
				width: 100%;
				max-width: 92%;
				background-color: #fff;
				padding: 20px;
				border-radius: 10px;
				box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
				z-index: 1100;
				animation: slideDown 0.5s ease-in-out;
				max-height: 96vh;
				overflow-y: auto;
			}



		}
		.city-item{
			list-style:none;
			cursor: pointer;
			padding:0 4px!important;
			

		}
	</style>

</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KTLVMEY6C6"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());

	gtag('config', 'G-KTLVMEY6C6');
</script>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WK92CBF8"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="overlay" id="overlay">
		<div class="form-container">
			<button class="close-btn_form" id="closeBtn">&times;</button>
			<form id="formdetail" class="container">
				<h1 class="poppins bold text-center my-3">Enquiry Details</h1>
				<div class="row">
					<div class="col-md-6 mb-3">
						<label for="student-name">Student's Name <span style="color: red;">*</span></label>
						<input type="text" id="student-name" class="form-control" name="student" placeholder="Enter student's name" required>

					</div>
					<div class="col-md-6 mb-3">
						<label for="email">Email<span style="color:red">*</span></label>
						<input type="email" id="email" name="email" class="form-control" placeholder="Enter your email">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3">
						<label for="school_name">School Name<span style="color:red">*</span></label>
						<input type="text" id="school_name" name="school_name" class="form-control"
							placeholder="Enter school name">
					</div>
					<div class="col-md-6 mb-3">
						<label for="class">Class<span style="color:red">*</span></label>
						<input type="text" id="class" name="class" class="form-control" placeholder="Enter class">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 mb-3">
						<label for="parent_name">Parent's Name<span style="color:red">*</span></label>
						<input type="text" id="parent_name" name="parent" class="form-control"
							placeholder="Enter parent's name">
					</div>

				</div>
				<div class="row">
					<div class="col-md-12 mb-3">
						<label for="city">City<span style="color:red">*</span></label>
						<input type="text" id="city" name="city" class="form-control" placeholder="Enter your city">
					</div>
					<div class="col-md-12 mb-3">
						<label for="city">Phone<span style="color:red">*</span></label>
						<input type="text" id="city" name="phone_no" class="form-control" placeholder="Enter your phone_no">
					</div>
				</div>
				<input type="date" id="current_date" name="current_date" class="d-none">
				<input type="text" id="current_time" name="current_time" class="d-none">
				<div class="row">
					<div class="col-md-12 d-flex justify-content-center">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</form>

		</div>
	</div>
	<div class="row sticky-header header_res d-flex align-items-center justify-content-between"
		style="margin-top: 26px; padding: 4px 22px; margin:0px 0px">
		<div id="sidebar-toggle" class="col-auto menubar col_new_menu" style="display: none;">
			<img height="24px" width="22px" class="menu_icon" src="<?php echo base_url("assets/images/menu (1).png") ?>"
				onclick="startAnimation()">
		</div>
		<div style="padding:0px 0px!important" class="col-4 col-md-3 col_new_educase header_hub nav_font"
			style="font-weight: bold; font-size:10px;">
			FINDMY<span style="color:#001AFF">SCHOOL</span>
		</div>
		<div class="col-12 col-md-6 hide_topbar">
			<ul class="d-flex justify-content-evenly align-items-center list-unstyled gap-4"
				style="margin-bottom:0rem!important;">
				<li><a style="text-decoration:none;color:black" href="<?php echo base_url("home") ?>"
						class="header_hub pointer">Home</a></li>
				<li><a style="text-decoration:none;color:black" href="<?php echo base_url("blog") ?>"
						class="header_hub pointer">Blogs</a></li>
				<li><a style="text-decoration:none;color:black" href="<?php echo base_url("school") ?>"
						class="header_hub pointer">Schools</a></li>
			</ul>
		</div>
		<style>
			.absolute_text {
				position: absolute;
				top: 100%;
				left: 1.4rem;
				width: 80%;
				background-color: white;
				border: 1px solid #ccc;
				z-index: 10;
				padding: 5px;
			}
		</style>
		<div class="col-8 col-md-3 d-flex col_new" style="padding: 0px;">
			<div class="d-flex align-items-center w-100 position-relative">
				<img class="img_location" height="22px" width="22px"
					src="<?php echo base_url("assets/images/Frame 4.png") ?>">
				<input autocomplete="off" id="input_search" class="form-control input_font px-3" list="" placeholder="Enter your location"
					style=" position:relative; padding:0px; margin:0px;width:80%"
					onmouseover="this.style.boxShadow='none'">
				<form id="absolute_text" class="absolute_text" style="display:none" method="post" action="<?php echo base_url('welcome/newformdata') ?>">


				</form>
			</div>
		</div>

	</div>
	<div class="sidebar-overlay"></div>
	<div class="sidebar">
		<div class="mid-text">
			<p class="roboto bold text-white" style="font-size:1rem">FINDMY<span class=" text-primary">SCHOOL</span></p>
		</div>
		<button class="close-btn bg-primary bold" id="sidebar-close-btn">×</button>

		<ul class="mt-2">
			<li class="roboto py-1"><a class="py-2" href="<?php echo base_url("home") ?>">Home</a></li>
			<li class="roboto py-1"><a class="py-2" href="<?php echo base_url("blog") ?>">Blogs</a></li>
			<li class="roboto py-1"><a class="py-2" href="<?php echo base_url("school") ?>">Schools</a></li>

		</ul>
	</div>
	<div class="container-fluid " data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1300"
		style="margin: 0px 0px;padding:0px 0;position:relative;overflow:hidden">