<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
	<div id="loading"></div>
	<!-- Nav Menu  -->
	<?php $this->load->view('layout/nav');  ?>

	<div class="healthcare_section">
		<div class="container">
			<div class="row">
				<div class="col-md-7 healthcare_content_sec">
					<div class="healthcare_content">
						<h1 class="healthcare_title">Healthcare Professionals</h1>
						<h2 class="healthcare_sub_title">About Remash™</h2>
						<!-- <p class="healthcare_text">MASH is liver inflammation and damage caused by the buildup of fat.
							It affects millions globally and is closely tied to obesity, diabetes, and high cholesterol.
						</p> -->
						<h5>Indication</h5>
						<p class="healthcare_text">Remash™ is indicated for adults with non-cirrhotic MASH and moderate-to-advanced fibrosis (F2–F3).</p>
						<p class="healthcare_text">Not indicated for cirrhosis or decompensated liver disease.</p>
						<h5>Strengths</h5>
						<p>60 mg, 80 mg, 100 mg</p>
						<div class="buy_now_section">
							<a class="primary_btn" href="<?php echo base_url();?>prescribing-information">Download Prescribing Information</a>
						</div>
						<h5>Mechanism of Action</h5>
						<p>Resmetirom is a selective THR-β agonist that:</p>
						<ul>
							<li>Reduces hepatocellular lipotoxicity</li>
							<li>Enhances mitochondrial activity</li>
							<li>Improves lipid metabolism (↓ LDL-C, ↓ triglycerides, ↓ ApoB)</li>
							<li>Reduces liver inflammation and fibrosis progression</li>
						</ul>
					</div>
				</div>
				<div class="col-md-5">
					<div class="about_img_sec sticky-top">
						<img class="w-100" loading="eager"
							src="<?php echo base_url();?>assets/img/what_is_remash.webp?Version=<?php echo Version; ?>"
							alt="What is ReMASH">
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
						<h3 class="sub_title">Clinical Data</h3>
						<h5>MAESTRO-NASH (NEJM, 2024):</h5>
						<ul>
							<li>NASH resolution: 25-29% vs 9% placebo</li>
							<li>Fibrosis improvement: 24-26% vs 14% placebo</li>
							<li>LDL-C reduction: 13-16%</li>
							<li>HbA1c improvement in diabetic patients</li>
						</ul>
						<h5>Safety</h5>
						<ul>
							<li>Favourable profile; diarrhoea, nausea, and abdominal discomfort are the most common</li>
							<li>Few discontinuations due to AEs</li>
						</ul>
						<h5>Dosing & Administration</h5>
						<ul>
							<li> &lt;100 kg: 80 mg once daily</li>
							<li>≥100 kg: 100 mg once daily</li>
							<li>With moderate CYP2C8 inhibitors (e.g., clopidogrel): reduce to 60/80 mg, respectively</li>
							<li>With or without food</li>
							<li>Tablets should not be crushed or split</li>
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
						<h5>Common AEs (≥5%)</h5>
						<p>diarrhoea, nausea, dizziness, constipation, abdominal pain, pruritus</p>
						
						<h5>Monitoring Recommendations</h5>
						<ul>
							<li>Baseline and periodic LFTs (ALT, AST, bilirubin)</li>
							<li>Lipid profile, HbA1c, and fibrosis assessment every 6–12 months</li>
							<li>Watch for gallbladder dysfunction</li>
						</ul>
						<h5>Contraindications</h5>
						<ul>
							<li>Cirrhosis or decompensated liver disease</li>
							<li>Severe hepatic impairment</li>
							<li>Hypersensitivity to resmetirom</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="about_section bg_color">
		<div class="container">
			<div class="row">
				<div class="col-md-6 about_content_sec">
					<div class="about_content">
						<!-- <h6 class="about_title">About</h6>	 -->
						<h3 class="sub_title">HCP Resources</h3>						
						<h5>Diagnostic & pre-treatment checklist</h5>
						<p>Before starting Remash™, ensure:</p>
						<ul style="list-style: none; margin-left: 0px;">
							<li>&#10004; &nbsp; Confirmed non-cirrhotic MASH with fibrosis (F2-F3)</li>
							<li>&#10004; &nbsp; Baseline blood work: AST/ALT, bilirubin, HbA1c, lipid profile</li>
							<li>&#10004; &nbsp; Imaging: FibroScan® or MRI (if available)</li>
							<li>&#10004; &nbsp; No history of decompensated liver disease, gallstones, or severe hepatic impairment</li>
							<li>&#10004; &nbsp; Current medications reviewed (watch for CYP2C8 interactions, gemfibrozil, cyclosporine, statins)</li>
						</ul>
						<h5>Clinical Trial Summaries</h5>
						<ul>
							<li>NASH resolution in 25–29% vs 9% placebo</li>
							<li>Fibrosis improvement in 24–26% vs 14% placebo</li>
							<li>LDL-C reduced by 13–16%</li>
							<li>Safety profile: mostly mild GI events</li>
						</ul>
						<h5>Other Data Highlights</h5>
						<ul>
							<li>Improved insulin sensitivity and HbA1c in diabetic patients</li>
							<li>Long-term extension study shows sustained benefits up to 48 weeks</li>
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