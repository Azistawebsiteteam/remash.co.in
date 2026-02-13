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
	<section class="slider_section">
		<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
			<ol class="carousel-indicators d-none">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="">
						<img loading="eager"
							src="<?php echo base_url();?>/assets/img/banner_img.webp?Version=<?php echo Version; ?>"
							alt="Banner- Image" class="w-100 destop_block" />
						<img loading="eager" class="mb_display width"
							src="<?php echo base_url();?>/assets/img/mobile.webp?Version=<?php echo Version; ?>"
							alt="mobile_Banner_Image" class="w-100" />
						<div class="banner_title_section">
							<p>Empowering Liver Health | Reversing Fibrosis | Reshaping the Future</p>
							<h1 class="banner_title">ReMASH™ - Advancing Liver Health, Reversing Fibrosis
							</h1>
							<p class="banner_text">The first and only US FDA-approved therapy for MASH (Metabolic Dysfunction-Associated Steatohepatitis) with proven benefits in fibrosis reversal and metabolic health.</p>
							<div class="buy_now_section">
								<!-- <a class="primary_btn" href="">Know more</a> -->
								<a class="primary_btn" href="<?php echo base_url();?>contact-us">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="carousel-item ">
					<div class="">
						<img loading="eager" src="<?php echo base_url();?>/assets/img/Banner.webp?Version=<?php echo Version; ?>"
							alt="Banner- Image" class="w-100" />
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<div id="what-is-remash" class="ctn"></div>
	<div class="about_section destop_block">
		<div class="container">			
			<div class="row">
				<div class="col-md-6 about_content_sec">
					<div class="about_content">
					    <h6 class="about_title">About</h6>	
						<h3 class="sub_title">What is ReMASH?</h3>					
						<p class="about_text">ReMASH™ is powered by Resmetirom, a revolutionary, first-in-class, liver-directed, THR-β agonist, designed to treat non-cirrhotic MASH with moderate to advanced fibrosis (F2-F3). It is available in 60mg, 80mg, and 100mg tablet strengths.</p>						
					</div>
				</div>
				<div class="col-md-6">
					<div class="about_img_sec">
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/what_is_remash.webp?Version=<?php echo Version; ?>"
							alt="What is ReMASH">
					</div>
				</div>
			</div>
			<div id="how-it-works" class="ctn"></div>
			<div class="row padding">
				<div class="col-md-6">
					<div class="how_it_works_img_sec">
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/how_it_works.webp?Version=<?php echo Version; ?>"
							alt="How It Works">
					</div>
				</div>
				<div class="col-md-6 about_content_sec">
					<div class="about_content">
						<h3 class="sub_title">How It Works?</h3>
						<h5>Science Behind ReMASH</h5>					
						<p class="about_text">ReMASH works by selectively activating thyroid hormone receptor-beta (THR-β) in the liver, improving lipid metabolism, reducing hepatic fat, and lowering liver inflammation, without systemic side effects.</p>						
						<h5 class="mt-24">Mechanism of Action</h5>
						<ul>
							<li>Targets liver cells directly</li>
							<li>Reduces hepatic steatosis</li>
							<li>Promotes fibrosis regression</li>
							<li>Enhances lipid profile</li>
						</ul>
					</div>
				</div>				
			</div>
			<div id="benefits" class="ctn"></div>
			<div class="row padding">
				<div class="col-md-6 about_content_sec">
					<div class="about_content">
						<h3 class="sub_title">Benefits</h3>				
						<ul>
							<li>Reduces liver fat and stiffness</li>
							<li>Reverses liver fibrosis</li>
							<li>Improves insulin sensitivity</li>
							<li>Enhances cardiovascular outcomes</li>
							<li>Promotes better lipid control (LDL-C, triglycerides, Apo B)</li>
							<li>Improves the quality of life in MASH patients </li>
						</ul>
					</div>
				</div>	
				<div class="col-md-6">
					<div class="about_img_sec">
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/benefits.webp?Version=<?php echo Version; ?>"
							alt="How It Works">
					</div>
				</div>							
			</div>
			<div id="dosage-and-usage-prescribed-strengths" class="ctn"></div>
			<div class="row padding">
				<div class="col-md-6">
					<div class="how_it_works_img_sec">
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/dosage_and_usage.webp?Version=<?php echo Version; ?>"
							alt="Dosage & Usage Prescribed Strengths">
					</div>
				</div>
				<div class="col-md-6 about_content_sec">
					<div class="about_content">
						<h3 class="sub_title">Dosage & Usage Prescribed Strengths</h3>
						<p class="about_text">Available in 60mg, 80mg, and 100mg tablets </p>
						<h5>Administration</h5>					
						<p class="about_text">To be taken orally under physician supervision. Dosage is personalized based on patient weight and liver condition. </p>						
						<h5 class="mt-24">Important Note</h5>
						<p class="about_text">Must be used along with a balanced diet and exercise plan for best results.</p>
					</div>
				</div>				
			</div>
			<div id="safety-and-monitoring-mild-side-effects" class="ctn"></div>
			<div class="row padding pb-0">
				<div class="col-md-7 about_content_sec">
					<div class="about_content">
						<h3 class="sub_title">Safety & Monitoring Mild side effects</h3>				
						<ul>
							<li>Nausea, dizziness, abdominal pain</li>
							<li>Regular liver monitoring is recommended</li>
							<li>Inform your doctor about any existing liver, heart, or kidney issues</li>
							<li>Not for use without prescription</li>
						</ul>
					</div>
				</div>	
				<div class="col-md-5">
					<div class="about_img_sec">
						<img loading="eager" class="w-100"
							src="<?php echo base_url();?>assets/img/safety_and_monitering.webp?Version=<?php echo Version; ?>"
							alt="Safety & Monitoring Mild side effects">
					</div>
				</div>							
			</div>
		</div>
	</div>	
	<div class="about_section mb_display">
		<div class="container">
			<div class="row">
				<div class="col-md-6 about_content_sec">
					<div class="about_content">
					    <h2 class="about_title">About</h2>	
						<h3 class="sub_title">What is ReMASH?</h3>		
						<div class="about_img_sec py-3">
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/what_is_remash.webp?Version=<?php echo Version; ?>"
							alt="What is ReMASH">
					</div>			
						<p class="about_text">ReMASH™ is powered by Resmetirom, a revolutionary, first-in-class, liver-directed, THR-β agonist, designed to treat non-cirrhotic MASH with moderate to advanced fibrosis (F2-F3). It is available in 60mg, 80mg, and 100mg tablet strengths.</p>						
					</div>
				</div>
			</div>
			<div id="how-it-works-1" class="ctn"></div>
			<div class="row padding">
				<div class="col-md-6">
					<div class="how_it_works_img_sec">
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/how_it_works.webp?Version=<?php echo Version; ?>"
							alt="How It Works">
							<h3 class="sub_title">How It Works?</h3>
					</div>
				</div>
				<div class="col-md-6 about_content_sec ">
					<div class="about_content text_style">						
						<h5>Science Behind ReMASH</h5>					
						<p class="about_text">ReMASH works by selectively activating thyroid hormone receptor-beta (THR-β) in the liver, improving lipid metabolism, reducing hepatic fat, and lowering liver inflammation, without systemic side effects.</p>						
						<h5 class="mt-24">Mechanism of Action</h5>
						<ul>
							<li>Targets liver cells directly</li>
							<li>Reduces hepatic steatosis</li>
							<li>Promotes fibrosis regression</li>
							<li>Enhances lipid profile</li>
						</ul>
					</div>
				</div>				
			</div>
			<div id="benefits-1" class="ctn"></div>
			<div class="row padding">
				<div class="col-md-6">
					<div class="how_it_works_img_sec">
						<h3 class="sub_title">Benefits</h3>
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/benefits.webp?Version=<?php echo Version; ?>"
							alt="How It Works">
					</div>
				</div>		
				<div class="col-md-6 about_content_sec">
					<div class="about_content text_style">										
						<ul>
							<li>Reduces liver fat and stiffness</li>
							<li>Reverses liver fibrosis</li>
							<li>Improves insulin sensitivity</li>
							<li>Enhances cardiovascular outcomes</li>
							<li>Promotes better lipid control (LDL-C, triglycerides, Apo B)</li>
							<li>Improves the quality of life in MASH patients </li>
						</ul>
					</div>
				</div>	
									
			</div>
			<div id="dosage-and-usage-prescribed-strengths-1" class="ctn"></div>
			<div class="row padding">
				<div class="col-md-6">
					<div class="how_it_works_img_sec">
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/dosage_and_usage.webp?Version=<?php echo Version; ?>"
							alt="Dosage & Usage Prescribed Strengths">
							<h3 class="sub_title">Dosage & Usage Prescribed Strengths</h3>
					</div>
				</div>
				<div class="col-md-6 about_content_sec">
					<div class="about_content text_style">						
						<p class="about_text">Available in 60mg, 80mg, and 100mg tablets</p>
						<h5>Administration</h5>					
						<p class="about_text">To be taken orally under physician supervision. Dosage is personalized based on patient weight and liver condition.</p>						
						<h5 class="mt-24">Important Note</h5>
						<p class="about_text">Must be used along with a balanced diet and exercise plan for best results.</p>
					</div>
				</div>				
			</div>
			<div id="safety-and-monitoring-mild-side-effects-1" class="ctn"></div>
			<div class="row padding pb-0">
				<div class="col-md-5">
					<div class="how_it_works_img_sec">
						<h3 class="sub_title">Safety & Monitoring Mild side effects</h3>
						<img loading="eager" 
							src="<?php echo base_url();?>assets/img/safety_and_monitering.webp?Version=<?php echo Version; ?>"
							alt="Safety & Monitoring Mild side effects">
					</div>
				</div>
				<div class="col-md-7 about_content_sec">
					<div class="about_content text_style">										
						<ul>
							<li>Nausea, dizziness, abdominal pain</li>
							<li>Regular liver monitoring is recommended</li>
							<li>Inform your doctor about any existing liver, heart, or kidney issues</li>
							<li>Not for use without prescription</li>
						</ul>
					</div>
				</div>	
											
			</div>
		</div>
	</div>
	<div id="faqs" class="ctn"></div>
	<section class="faq_section destop_block" id="faq">
		<div class="container">
			<div class="row">
				<div class="col-md-5 faq_details">
					<div class="sticky-top">
						<h3>Frequently Asked Questions</h3>
						<p>Need Support or More Information?</p>
						<div class="buy_now_section">
							<a class="primary_btn" href="<?php echo base_url();?>contact-us">Write to Us</a>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div id="accordion" class="mt_3em faq">
						<div class="cardf border_top">
						    <a class="collapsed first_anchor" role="button" data-toggle="collapse"
										href="#collapse-1" aria-expanded="true" aria-controls="collapse-2">
    							<div class="card-header borderPurpose w-100" onClick="faq1()" id="qstn-1">
    								<h5 class="mb-0	forText hdng">
    										What is MASH?
    								</h5>
    							</div>
							</a>
							<div id="collapse-1" class="collapse show" data-parent="#accordion" aria-labelledby="qstn-1"
								style="">
								<div class="card-body">
									<p>MASH (Metabolic Dysfunction-Associated Steatohepatitis) is a serious, progressive liver condition characterized by fat accumulation in the liver, inflammation, and liver cell injury. If untreated, MASH can lead to liver fibrosis, cirrhosis, and eventually liver failure. It is often associated with metabolic risk factors such as obesity, type 2 diabetes, and dyslipidemia.</p>
								</div>
							</div>
						</div>
						<div class="cardf">
						    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2"
										aria-expanded="false" aria-controls="collapse-2">
    							<div class="card-header borderPurpose w-100" id="qstn-1">
    								<h5 class="mb-0 forText hdng">
    										How does ReMASH work?
    								</h5>
    							</div>
							</a>
							<div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="qstn-1">
								<div class="card-body">
									<p>ReMASH, containing Resmetirom, is a selective thyroid hormone receptor-beta (THR-β) agonist that acts specifically on the liver. It helps regulate lipid metabolism, reduce liver fat, decrease inflammation, and promote fibrosis regression - all without causing systemic thyroid-like side effects. This targeted mechanism makes it highly effective in reversing the progression of MASH. </p>
								</div>
							</div>
						</div>
						<div class="cardf">
						    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3"
										aria-expanded="false" aria-controls="collapse-2">
    							<div class="card-header w-100" id="qstn-1">
    								<h5 class="mb-0 forText hdng">
    										Who is eligible for Resmetirom?
    									
    								</h5>
    							</div>
							</a>
							<div id="collapse-3" class="collapse " data-parent="#accordion"
								aria-labelledby="qstn-1">
								<div class="card-body">
									<p>Resmetirom is indicated for adult patients diagnosed with non-cirrhotic MASH with moderate to advanced liver fibrosis (stages F2 to F3). It is especially recommended for those with associated metabolic conditions like type 2 diabetes, obesity, or dyslipidemia, and should be used alongside a healthy diet and regular exercise under medical supervision. </p>
								</div>
							</div>
						</div>
						<div class="cardf">
						    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4"
										aria-expanded="false" aria-controls="collapse-4">
    							<div class="card-header borderPurpose w-100" id="qstn-1">
    								<h5 class="mb-0 forText hdng">
    										What tests are needed before starting ReMASH?
    								</h5>
    							</div>
							</a>
							<div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="qstn-1">
								<div class="card-body">
									<p>Before initiating ReMASH therapy, doctors typically recommend: </p>
									<ul>
										<li>Liver function tests (LFTs)</li>
										<li>Fibrosis assessment (via biopsy, Fibro Scan, or non-invasive scores) </li>
										<li>Imaging studies (like MRI-PDFF or ultrasound) </li>
										<li>Lipid profile and metabolic panel </li>
									</ul>
									<p>These help confirm the MASH diagnosis, determine fibrosis stage, and monitor treatment safety and effectiveness over time. </p>
								</div>
							</div>
						</div>
						<div class="cardf">
						    <a class="collapsed border_bottom_custom" role="button" data-toggle="collapse"
										href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
    							<div class="card-header borderPurpose  w-100" id="qstn-5">
    								<h5 class="mb-0 forText hdng">
    										Is it safe for diabetic or obese patients?
    								</h5>
    							</div>
							</a>
							<div id="collapse-5" class="collapse" data-parent="#accordion" aria-labelledby="qstn-5">
								<div class="card-body">
									<p>Yes, ReMASH is considered safe and effective for patients with type 2 diabetes, obesity, or metabolic syndrome. It offers additional benefits such as improved insulin sensitivity, better lipid control, and reduced cardiovascular risk, making it a suitable part of a comprehensive metabolic care plan. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</section>
	<section class="faq_section mb_display" id="faq">
		<div class="container">
			<div class="row">
				<div class="col-md-5 faq_details">
					<div class="sticky-top">
						<h3>Frequently Asked Questions</h3>
						<div id="accordion_1" class="mt_3em faq">
							<div class="cardf border_top">
							    <a class="collapsed first_anchor" role="button" data-toggle="collapse"
											href="#collapse-11" aria-expanded="true" aria-controls="collapse-11">
    								<div class="card-header borderPurpose w-100" onClick="faq1()" id="qstn-11">
    									<h5 class="mb-0	forText hdng">
    											What is MASH?
    									</h5>
    								</div>
								</a>
								<div id="collapse-11" class="collapse show" data-parent="#accordion_1" aria-labelledby="qstn-11"
									style="">
									<div class="card-body">
										<p>MASH (Metabolic Dysfunction-Associated Steatohepatitis) is a serious, progressive liver condition characterized by fat accumulation in the liver, inflammation, and liver cell injury. If untreated, MASH can lead to liver fibrosis, cirrhosis, and eventually liver failure. It is often associated with metabolic risk factors such as obesity, type 2 diabetes, and dyslipidemia.</p>
									</div>
								</div>
							</div>
							<div class="cardf">
							    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-12"
											aria-expanded="false" aria-controls="collapse-12">
    								<div class="card-header borderPurpose w-100" id="qstn-12">
    									<h5 class="mb-0 forText hdng">
    											How does ReMASH work?
    									</h5>
    								</div>
								</a>
								<div id="collapse-12" class="collapse" data-parent="#accordion_1" aria-labelledby="qstn-12">
									<div class="card-body">
										<p>ReMASH, containing Resmetirom, is a selective thyroid hormone receptor-beta (THR-β) agonist that acts specifically on the liver. It helps regulate lipid metabolism, reduce liver fat, decrease inflammation, and promote fibrosis regression - all without causing systemic thyroid-like side effects. This targeted mechanism makes it highly effective in reversing the progression of MASH. </p>
									</div>
								</div>
							</div>
							<div class="cardf">
							    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-13"
											aria-expanded="false" aria-controls="collapse-13">
    								<div class="card-header w-100" id="qstn-13">
    									<h5 class="mb-0 forText hdng">
    											Who is eligible for Resmetirom?
    									</h5>
    								</div>
								</a>
								<div id="collapse-13" class="collapse " data-parent="#accordion_1"
									aria-labelledby="qstn-13">
									<div class="card-body">
										<p>Resmetirom is indicated for adult patients diagnosed with non-cirrhotic MASH with moderate to advanced liver fibrosis (stages F2 to F3). It is especially recommended for those with associated metabolic conditions like type 2 diabetes, obesity, or dyslipidemia, and should be used alongside a healthy diet and regular exercise under medical supervision. </p>
									</div>
								</div>
							</div>
							<div class="cardf">
							    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-14"
											aria-expanded="false" aria-controls="collapse-14">
    								<div class="card-header borderPurpose w-100" id="qstn-14">
    									<h5 class="mb-0 forText hdng">
    											What tests are needed before starting ReMASH?
    									</h5>
    								</div>
								</a>
								<div id="collapse-14" class="collapse" data-parent="#accordion_1" aria-labelledby="qstn-14">
									<div class="card-body">
										<p>Before initiating ReMASH therapy, doctors typically recommend: </p>
										<ul>
											<li>Liver function tests (LFTs)</li>
											<li>Fibrosis assessment (via biopsy, Fibro Scan, or non-invasive scores) </li>
											<li>Imaging studies (like MRI-PDFF or ultrasound) </li>
											<li>Lipid profile and metabolic panel </li>
										</ul>
										<p>These help confirm the MASH diagnosis, determine fibrosis stage, and monitor treatment safety and effectiveness over time. </p>
									</div>
								</div>
							</div>
							<div class="cardf">
							    <a class="collapsed border_bottom_custom" role="button" data-toggle="collapse"
											href="#collapse-15" aria-expanded="false" aria-controls="collapse-15">
    								<div class="card-header borderPurpose  w-100" id="qstn-15">
    									<h5 class="mb-0 forText hdng">
    											Is it safe for diabetic or obese patients?
    									</h5>
    								</div>
								</a>
								<div id="collapse-15" class="collapse" data-parent="#accordion_1" aria-labelledby="qstn-15">
									<div class="card-body">
										<p>Yes, ReMASH is considered safe and effective for patients with type 2 diabetes, obesity, or metabolic syndrome. It offers additional benefits such as improved insulin sensitivity, better lipid control, and reduced cardiovascular risk, making it a suitable part of a comprehensive metabolic care plan. </p>
									</div>
								</div>
							</div>
						</div>
						<p class="mt-20">Need Support or More Information?</p>
						<div class="buy_now_section">
							<a class="primary_btn" href="<?php echo base_url();?>contact-us">Write to Us</a>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</section>

	<?php $this->load->view('layout/footer');  ?>
	
	<!--  JavaScript -->
	<?php $this->load->view('layout/js');  ?>
	<?php if(DisclaimerPopUp == 'True'){ $this->load->view('layout/disclaimerhomepage'); }?>
	<?php if(Popbox == 'True'){ $this->load->view('layout/popbox'); }?>
	<?php if(OnLoadModal == 'True'){ $this->load->view('layout/onloadmodal'); }?>
	
</body>
</html>