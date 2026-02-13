<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
	<style>
		.inner_tabs ul li{
			display: inline-block;
    		margin-right: 30px;
    		margin-bottom: 20px !important;
		}
		.inner_tabs a{
			display: flex;
    		gap: 8px;
			color: #0783a4;
    		font-weight: 800;
		}
		.inner_tabs ul{
			margin-left: 0px !important;
		}
		.ctn {
			position: absolute;
			margin-top: -70px;
		}
		.about_section .buy_now_section .primary_btn:hover {
            background: #fff;
            color: #0783A4;
            border: 1px solid #fff;
        }
	</style>
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
	<div id="loading"></div>
	<!-- Nav Menu  -->
	<?php $this->load->view('layout/nav');  ?>

	<div class="healthcare_section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 healthcare_content_sec">
					<div class="healthcare_content">
						<h1 class="healthcare_title">Mash & Awareness Hub</h1>
						<div class="inner_tabs">
							<!-- <div class="container">
								<div class="row"> -->
									<!-- <div class="col-sm-12"> -->
										<h5>On this Page</h5>
										<ul>
											<li><a href="#tab1">MASH <span><i class="fa fa-arrow-down"></i></span></a></li>
											<li><a href="#tab2">Signs and Symptoms <span><i class="fa fa-arrow-down"></i></span></a>
											<li><a href="#tab3">Causes and Risk Factors <span><i class="fa fa-arrow-down"></i></span></a>
											</li>
											<li><a href="#tab4">Diagnosis <span><i
															class="fa fa-arrow-down"></i></span></a></li>
											<li><a href="#tab5">Treatment <span><i
															class="fa fa-arrow-down"></i></span></a></li>
											<!--<li><a href="#tab6">Procedures <span><i-->
											<!--				class="fa fa-arrow-down"></i></span></a></li>-->
											
											<li><a href="#tab7">General Tips for Managing MASH<span><i
															class="fa fa-arrow-down"></i></span></a></li>
										</ul>
									<!-- </div>
								</div>
							</div> -->
						</div>
						<div id="tab1" class="ctn"></div>
						<h5>MASH </h5>
						<p class="healthcare_text">Metabolic Dysfunction-Associated Steatohepatitis (MASH), earlier called nonalcoholic steatohepatitis (NASH), is a type of fatty liver disease where too much fat builds up in the liver.  This is a liver condition that affects people with obesity or other metabolic conditions, such as type 2 diabetes, high blood pressure, high cholesterol or thyroid disease.  Over time, excess fat in the liver can lead to scarring of the liver. If not treated early, it may progress to more serious problems like fibrosis, cirrhosis, liver failure, or liver cancer. Early diagnosis and healthy lifestyle changes can slow, stop, or even reverse early MASH. MASH is part of a broader group of liver diseases called MASLD (metabolic dysfunction-associated steatotic liver disease).</p>
						<div id="tab2" class="ctn"></div>
						<h5>Signs and Symptoms </h5>
						<p class="healthcare_text">MASH often develops silently, with no symptoms in early stages. When symptoms occur, they may include:  </p>
						<ul>
						    <li>Extreme tiredness  </li>
						    <li>Pain and discomfort in the upper-right abdominal area</li>
						    <li>Abdominal or leg swelling  </li>
						    <li>Unexplained weight loss </li>
						    <li>Muscle weakness or muscle loss</li>
						    <li>Jaundice (yellowish discolouration of the skin & eyes). </li>
						</ul>
						<div id="tab3" class="ctn"></div>
						<h5>Causes and Risk Factors </h5>
						<ul>
							<li>Obesity (especially abdominal obesity) </li>
							<li>Type 2 diabetes or insulin resistance </li>
							<li>High triglycerides or cholesterol </li>
							<li>High blood pressure </li>
							<li>Metabolic syndrome </li>
							<li>Underactive thyroid, also called hypothyroidism</li>
							<li>Poor diet and inactivity </li>
							<li>Genetic factors </li>
						</ul>
						<div id="tab4" class="ctn"></div>
						<h5>Diagnosis </h5>
						<p class="healthcare_text">Diagnosis involves assessing liver fat, inflammation, and fibrosis using: </p>
						<ul>
							<li><strong>Blood tests: </strong>CBC, ALT, AST, lipid panel, HbA1c </li>
							<li><strong>Imaging: </strong>Ultrasound, FibroScan (elastography), MRI-PDFF </li>
							<li><strong>Non-invasive scores: </strong>FIB-4, NAFLD Fibrosis Score </li>
							<li><strong>Liver biopsy: </strong>Gold standard when fibrosis needs confirmation</li>
						</ul>
						<div id="tab5" class="ctn"></div>
						<h5>Treatment  </h5>
						<p class="healthcare_text">MASH treatment focuses on improving metabolic health and protecting liver from further damage. There is no single cure, but early MASH can improve significantly with targeted management and it includes:  </p>
						<ul>
						    <li>Lifestyle changes such as losing weight by eating well and becoming more active.</li>
							<li>Resmetirom is the first FDA-approved therapy for MASH with fibrosis stages 2 and 3. Semaglutide, a recently approved drug, can also help to reduce the amount of fat and scarring in the liver.</li>
							<li>Other medicines are also prescribed to manage diabetes, cholesterol, and blood pressure, as metabolic control slows disease progression </li>
						    <li>Bariatric surgery may be a treatment option for selected patients with severe obesity, especially when lifestyle measures are insufficient.</li>
						</ul>
						<!--<div id="tab6" class="ctn"></div>-->
						<!--<h5>Procedures  </h5>-->
						<!--<ul>-->
							
						<!--</ul>-->
						<div id="tab7" class="ctn"></div>
						<h5>General Tips for Managing MASH </h5>
						<ul>
						    <li>Aim for slow and, steady weight reduction.</li>
							<li>Choose a diet rich in vegetables, whole grains, lean proteins, healthy fats.</li>
							<li>Limit sugar, refined carbs, fried foods.</li>
							<li>Exercise regularly (brisk walking, cycling, strength training), aim for at least 150 minutes of exercise per week.</li>
							<li>Avoid alcohol.</li>
							<li>Keep diabetes, cholesterol, and blood pressure controlled.</li>
							<li>Attend regular liver health checkups (blood tests, FibroScan).</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view('layout/footer');  ?>

	<!--  JavaScript -->
	<?php $this->load->view('layout/js');  ?>
	<?php if(DisclaimerPopUp == 'True'){ $this->load->view('layout/disclaimerhomepage'); }?>
	<?php if(Popbox == 'True'){ $this->load->view('layout/popbox'); }?>
	<?php if(OnLoadModal == 'True'){ $this->load->view('layout/onloadmodal'); }?>
</body>

</html>