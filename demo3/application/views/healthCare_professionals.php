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
						<h1 class="healthcare_title">Healthcare Professionals</h1>
						<h2 class="healthcare_sub_title">About ReMASH</h2>
						<!-- <p class="healthcare_text">MASH is liver inflammation and damage caused by the buildup of fat.
							It affects millions globally and is closely tied to obesity, diabetes, and high cholesterol.
						</p> -->
						<div class="inner_tabs">
							<!-- <div class="container">
								<div class="row"> -->
									<!-- <div class="col-sm-12"> -->
										<h5>On this Page</h5>
										<ul>
											<li><a href="#tab1">Indications <span><i class="fa fa-arrow-down"></i></span></a></li>
											<li><a href="#tab2">Strengths <span><i class="fa fa-arrow-down"></i></span></a>
											<li><a href="#tab3">Mechanism of Action <span><i class="fa fa-arrow-down"></i></span></a>
											</li>
											<li><a href="#tab4">Dosage & Administration <span><i
															class="fa fa-arrow-down"></i></span></a></li>
											<li><a href="#tab5">MAESTRO-NASH (NEJM, 2024): <span><i
															class="fa fa-arrow-down"></i></span></a></li>
											<li><a href="#tab6">Safety <span><i
															class="fa fa-arrow-down"></i></span></a></li>
											
											<li><a href="#tab7">Common AEs (≥5%)<span><i
															class="fa fa-arrow-down"></i></span></a></li>
											<li><a href="#tab8">Monitoring Recommendations <span><i class="fa fa-arrow-down"></i></span></a></li>
											<li><a href="#tab9">Contraindications <span><i
															class="fa fa-arrow-down"></i></span></a></li>
											<li><a href="#tab10">Diagnostic & pre-treatment checklist <span><i class="fa fa-arrow-down"></i></span></a></li>
											<li><a href="#tab11">Clinical Trial Summaries <span><i class="fa fa-arrow-down"></i></span></a></li>
											<li><a href="#tab12">Other Data Highlights <span><i class="fa fa-arrow-down"></i></span></a></li>
										</ul>
									<!-- </div>
								</div>
							</div> -->
						</div>
						<div id="tab1" class="ctn"></div>
						<h5>Indication</h5>
						<p class="healthcare_text">ReMASH is indicated for adults with non-cirrhotic MASH and moderate-to-advanced fibrosis (F2-F3).</p>
						<p class="healthcare_text">Not indicated for cirrhosis or decompensated liver disease.</p>
						<div id="tab2" class="ctn"></div>
						<h5>Strengths</h5>
						<p>60 mg, 80 mg, 100 mg</p>
						<!-- <div class="buy_now_section">
							<a class="primary_btn" href="<?php echo base_url();?>prescribing-information">Download Prescribing Information</a>
						</div> -->
						<div id="tab3" class="ctn"></div>
						<h5>Mechanism of Action</h5>
						<p>Resmetirom is a selective THR-β agonist that:</p>
						<ul>
							<li>Reduces hepatocellular lipotoxicity</li>
							<li>Enhances mitochondrial activity</li>
							<li>Improves lipid metabolism (↓ LDL-C, ↓ triglycerides, ↓ ApoB)</li>
							<li>Reduces liver inflammation and fibrosis progression</li>
						</ul>
						<div id="tab4" class="ctn"></div>
						<h5>Dosing & Administration</h5>
						<ul>
							<li> &lt;100 kg: 80 mg once daily</li>
							<li>≥100 kg: 100 mg once daily</li>
							<li>With moderate CYP2C8 inhibitors (e.g., clopidogrel):</li>
							<ul>
							    <li> &lt;100 kg: 60 mg once daily</li>
							    <li>≥100 kg: 80 mg once daily</li>
							</ul>
							<li>With or without food</li>
							<li>Tablets should not be crushed or split</li>
						</ul>
					</div>
				</div>
				<!-- <div class="col-md-5">
					<div class="about_img_sec sticky-top">
						<img class="w-100" loading="eager"
							src="<?php echo base_url();?>assets/img/what_is_remash.webp?Version=<?php echo Version; ?>"
							alt="What is ReMASH">
					</div>
				</div> -->
			</div>
		</div>
	</div>

	<div class="about_section bg_color">
		<div class="container">
			<div class="row">
				<div class="col-md-12 about_content_sec">
					<div class="about_content">
						<!-- <h6 class="about_title">About</h6>	 -->
						<h3 class="sub_title">Clinical Data</h3>
						<div id="tab5" class="ctn"></div>
						<h5>MAESTRO-NASH (NEJM, 2024):</h5>
						<ul>
							<li>NASH resolution: 25 - 29% vs 9% with placebo (P<0.001)</li>
							<li>Fibrosis improvement: 24 - 26% vs 14% with placebo (P<0.001)</li>
							<li>LDL-C reduction: 13 - 16% vs 0.1% with placebo (P<0.001)</li>
							<!--<li>HbA1c improvement in diabetic patients</li>-->
						</ul>
						<div id="tab6" class="ctn"></div>
						<h5>Safety</h5>
						<ul>
							<li>Favourable safety profile; diarrhoea, nausea, abdominal discomfort are the most commonly reported AEs </li>
							<li>Few discontinuations reported due to AEs</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="about_section ">
		<div class="container">
			<div class="row">
				<div class="col-md-12 about_content_sec">
					<div class="about_content">
						<!-- <h6 class="about_title">About</h6>	 -->
						<h3 class="sub_title">Safety & Monitoring</h3>
						<div id="tab7" class="ctn"></div>
						<h5>Common AEs (≥5%)</h5>
						<p>Diarrhoea, nausea, dizziness, constipation, abdominal pain, and pruritus</p>
						<div id="tab8" class="ctn"></div>
						<h5>Monitoring Recommendations</h5>
						<ul>
							<li>Baseline and periodic LFTs</li>
							<li>Lipid profile, HbA1c, thyroid function test and fibrosis assessment every 6 - 12 months</li>
							<li>Watch for gallbladder dysfunction</li>
						</ul>
						<div id="tab9" class="ctn"></div>
						<h5>Contraindications</h5>
						<ul>
							<!--<li>Cirrhosis or decompensated liver disease</li>-->
							<!--<li>Severe hepatic impairment</li>-->
							<!--<li>Hypersensitivity to resmetirom</li>-->
							<li>Pregnancy and lactation</li>
							<li>Pediatric population</li>
							<li>Concomitant use with strong CYP2C8 inhibitors (e.g., gemfibrozil) </li>
							<li>Severe renal impairment or in those undergoing dialysis</li>
							<li>Excess alcohol consumption (>20 g/d in women and 30 g/d in men)</li>
							<li>Cirrhosis or Decompensated liver disease</li>
							<li>Patients with symptomatic gallstone-related conditions such as acute cholecystitis</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="about_section bg_color">
		<div class="container">
			<div class="row">
				<div class="col-md-12 about_content_sec">
					<div class="about_content">
						<!-- <h6 class="about_title">About</h6>	 -->
						<h3 class="sub_title">HCP Resources</h3>		
						<div id="tab10" class="ctn"></div>				
						<h5>Diagnostic & pre-treatment checklist</h5>
						<p>Before starting ReMASH, ensure:</p>
						<ul style="list-style: none; margin-left: 0px;">
							<li>&#10004; &nbsp; Confirmed non-cirrhotic MASH with fibrosis (F2-F3)</li>
							<li>&#10004; &nbsp; Baseline blood work: AST/ALT, bilirubin, HbA1c, lipid profile, thyroid function test</li>
							<li>&#10004; &nbsp; Imaging: FibroScan® or MRI (if available)</li>
							<li>&#10004; &nbsp; No history of decompensated liver disease, gallstones, or severe hepatic impairment</li>
							<li>&#10004; &nbsp; Current medications reviewed (watch for CYP2C8 interactions, gemfibrozil, clopidogrel, cyclosporine, rifampicin, statins)</li>
						</ul>
						<div id="tab11" class="ctn"></div>
						<h5>Clinical Trial Summaries</h5>
						<ul>
							<li>NASH resolution in 25 - 29% vs 9% placebo</li>
							<li>Fibrosis improvement in 24 - 26% vs 14% placebo</li>
							<li>LDL-C reduction by 13 - 16%</li>
							<li>Safety profile: mostly mild GI events</li>
						</ul>
						<div id="tab12" class="ctn"></div>
						<h5>Other Data Highlights</h5>
						<ul>
							<li>Improves insulin sensitivity and cardiovascular outcomes</li>
							<li>Enhances health-related quality of life</li>
							<li>Long-term extension study shows sustained benefits up to 52 weeks</li>
						</ul>	
						<div class="buy_now_section">
							<a class="primary_btn" href="<?php echo base_url();?>prescribing-information">Download Prescribing Information</a>
						</div>					
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