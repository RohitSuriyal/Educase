<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "school.css" ?>" />
	<link rel="stylesheet" href="<?php echo CSS_URL; ?>educase.css" />
	<script src="https://kit.fontawesome.com/8337c29774.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
	<script src="<?php echo base_url();?>assets/ckfinder/ckfinder.js"></script>
	<script src="sweetalert2.min.js"></script>
	<link rel="stylesheet" href="sweetalert2.min.css">




	<style>
		.header_hub {
			font-family: "Roboto", "Arial", sans-serif;
		}

		.image_background {

			background-image: url("<?php echo base_url("assets/images/Rectangle 13.png") ?>"), url("<?php echo base_url("assets/images/Rectangle 11 (1).png") ?>"), url("<?php echo base_url("assets/images/Rectangle 12.png") ?>"), url("<?php echo base_url("assets/images/Rectangle 14 (1).png") ?>"), url("<?php echo base_url("assets/images/Rectangle 16.png") ?>"), url("<?php echo base_url("assets/images/Rectangle 15.png") ?>");
			background-size: 132px 183px, 132px 183px;
			/* Set specific sizes for the background images */
			background-position: -7px 20px, 179px 79px, 37px 245px, 90% 15%, 101% 5%, 96% 48%;
			/* Adjust the positions to ensure both images are visible */
			background-repeat: no-repeat, no-repeat;
			/* Prevents both images from repeating */

			/* Temporary border to visualize the div */



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
			font-size: 4.5vw !important;
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
			margin:0rem 0rem;
			padding:0rem 0rem;
		}
		.school_div_bg{
			background-color: #F9F9FF
			;
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

			.input_font {
				font-size: 1rem;
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
				font-size: 5.5vw !important;

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
			top: 6%;
			left: 38%;
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
			top:4rem;
		}

		.dropdown-list li {
			padding: 10px;
			border-bottom: 1px solid #cccccc;
			list-style-type: none;
		}

		.list_button {
			cursor: pointer;
		}
	</style>
	<title>Hello, world!</title>
</head>

<body>
	<div class="row sticky-header d-flex align-items-center justify-content-between" style="margin-top: 26px; padding: 4px 22px; margin:0px 0px">
		<div id="sidebar-toggle" class="col-auto menubar col_new_menu" style="display: none;">
			<img height="24px" width="22px" src="<?php echo base_url("assets/images/menu (1).png") ?>" onclick="startAnimation()">
		</div>
		<div class="col-4 col-md-3 col_new_educase header_hub nav_font" style="font-weight: bold; font-size: 40px;">
			EDU<span style="color:#001AFF">EASE</span>
		</div>
		<div class="col-12 col-md-6 hide_topbar">
			<ul class="d-flex justify-content-evenly align-items-center list-unstyled gap-4" style="margin-bottom:0rem!important;">
				<li><a style="text-decoration:none;color:black" href="<?php echo base_url("welcome") ?>" class="header_hub pointer">Home</a></li>
				<li><a style="text-decoration:none;color:black" href="<?php echo base_url("welcome/Blog") ?>" class="header_hub pointer">Blog</a></li>
				<li><a style="text-decoration:none;color:black" href="<?php echo base_url("welcome/school") ?>" class="header_hub pointer">School</a></li>
			</ul>
		</div>
		<div class="col-8 col-md-3 d-flex col_new" style="padding: 0px;">
			<div class="d-flex align-items-center w-100">
				<img class="img_location" height="22px" width="22px" src="<?php echo base_url("assets/images/Frame 4.png") ?>">
				<input class="form-control input_font px-3" list="" placeholder="Enter your location" style="border:1px sold red; padding:0px; margin:0px;" onmouseover="this.style.boxShadow='none'">
			</div>
		</div>
	</div>
	<div class="container-fluid outer_img" style="margin: 0px 0px;padding:0px 2rem;position:relative;">


		<div class="sidebar-overlay"></div>
		<div class="sidebar">
			<div class="mid-text">
				<p class="roboto bold text-white" style="font-size:1.5rem">Edu<span class=" text-primary">ease</span></p>
			</div>
			<button class="close-btn bg-primary bold" id="sidebar-close-btn">×</button>

			<ul class="mt-2">
				<li class="roboto py-1"><a class="py-2" href="#">Home</a></li>
				<li class="roboto py-1"><a class="py-2" href="#">Blog</a></li>
				<li class="roboto py-1"><a class="py-2" href="#">School</a></li>

			</ul>
		</div>