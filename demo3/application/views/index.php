<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>	
	<style>
    .prd_video_sec .card_content .card_img {
        cursor: pointer;
        border: 1px solid;
    border-radius: 10px;
    }
    .prd_video_sec .card_content {
        position: relative;
    }
    .prd_video_sec .card_content .video {
        position: absolute;
        top: 22%;
        left: 40%;
        transform: translate(21%, 50%);
    }
    .modal.show .modal-dialog {
        transform: none;
    }
    .video_modal_content {
        border: none;
        border-radius: 0;
    }
    
    .video_modal_content {
        margin-top: 100px;
    }
    .modal-content {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 0.3rem;
        outline: 0;
    }
    .video_models button.close {
        position: absolute;
        right: -25px;
        top: -25px;
        background-color: #E7268C !important;
        color: #ffffff;
        opacity: 1;
        width: 40px;
        height: 40px;
        border-radius: 25px;
        line-height: 42px;
        text-align: center;
        font-size: 40px;
    }
    .modal-body {
        position: relative;
        flex: 1 1 auto;
        padding: 1rem;
    }
    .modal-video-body iframe {
        width: 100%;
    }
    .prd_video_sec .card_content .video .text {
        color: #000;
        text-align: center;
    }
    .prd_video_sec .card_content .video .text .play_btn .fa-play-circle {
        font-size: 100px;
        color: #000;
        cursor: pointer;
    }
    .prd_video_sec{
        padding: 50px 0px;
    }
    .prd_video_sec .card_content::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.45); /* overlay color */
    border-radius: 10px;
    z-index: 1;
    transition: background 0.3s ease;
}

/* Keep play button above overlay */
.prd_video_sec .card_content .video {
    z-index: 2;
}

    @media (max-width: 767px) {
        .prd_video_sec .card_content .video .text .play_btn .fa-play-circle{
                font-size: 64px;
        }
        .video_models button.close{
                right: -6px;
        top: -28px;
        }
        .prd_video_sec{
            padding: 30px 0px;
        }
    }
</style>
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
							<h1 class="banner_title">ReMASH (Resmetirom): Reshaping Liver Health. Reversing Fibrosis.
							</h1>
							<p class="banner_text">The first FDA-approved oral therapy for adults with non-cirrhotic MASH (F2-F3).</p>
							<p class="banner_text">A daily tablet that reduces liver fat, slows or reverses scarring, and supports metabolic health.</p>
							<div class="buy_now_section">
								<a class="primary_btn" href="<?php echo base_url();?>patient-information">I am a Patient</a>
								<a class="primary_btn" href="<?php echo base_url();?>healthcare-professionals">I am a Healthcare Professional</a>
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

	<div class="about_section destop_block">
		<div class="container">			
			<div class="row">
				<div class="col-md-6 about_content_sec">
					<div class="about_content">
					    <h6 class="about_title">About</h6>	
						<h3 class="sub_title">What is ReMASH?</h3>					
						<p class="about_text">ReMASH is powered by Resmetirom, a revolutionary, first-in-class, liver-directed, thyroid hormone receptor-beta (THR-β) agonist, designed to treat non-cirrhotic MASH with moderate to advanced fibrosis (F2-F3). It is available as 60 mg, 80 mg, and 100 mg tablets. </p>						
					</div>
				</div>
				<div class="col-md-6">
					<div class="about_img_sec">
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/what_is_remash.png?Version=<?php echo Version; ?>"
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
						<!-- <h5>Science Behind ReMASH</h5> -->
						<p class="about_text">ReMASH which contains resmetirom works by selectively activating THR-β receptors in the liver, improving lipid metabolism, reducing hepatic fat, and lowering liver inflammation, without systemic side effects.</p>						
						<h5 class="mt-24">Mechanism of Action</h5>
						<ul>
							<li>Targets liver cells directly</li>
							<li>Reduces hepatic steatosis</li>
							<li>Promotes fibrosis regression</li>
							<li>Improves lipid profile</li>
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
							<li>Reduces liver fat, inflammation  and stiffness</li>
							<li>Decreases liver fibrosis</li>
							<li>Improves insulin sensitivity</li>
							<li>Improves cardiovascular outcomes</li>
							<li>Promotes better lipid control (LDL-C, triglycerides, Apo B)</li>
							<li>Enhances the quality of life in MASH patients </li>
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
						<p class="about_text">Available in 60 mg, 80 mg, and 100 mg tablets</p>
						<h5>Administration</h5>					
						<p class="about_text">To be taken orally under physician supervision. Dosage is personalized based on patient weight and liver condition.</p>						
						<h5 class="mt-24">Important Note</h5>
						<p class="about_text">Must be used along with a balanced diet and exercise plan for best results.</p>
					</div>
				</div>				
			</div>
			<div id="safety-and-monitoring-mild-side-effects" class="ctn"></div>
			<div class="row padding pb-0">
				<div class="col-md-7 about_content_sec">
					<div class="about_content">
						<h3 class="sub_title">Safety & Monitoring</h3>				
						<ul>
							<li>Nausea, diarrhoea, dizziness, abdominal pain and pruritus</li>
							<li>Regular liver monitoring is recommended</li>
							<li>Inform your doctor about any existing thyroid, liver, heart, or kidney issues</li>
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
							src="<?php echo base_url();?>assets/img/what_is_remash.png?Version=<?php echo Version; ?>"
							alt="What is ReMASH">
					</div>			
						<p class="about_text">ReMASH is powered by Resmetirom, a revolutionary, first-in-class, liver-directed, thyroid hormone receptor-beta (THR-β) agonist, designed to treat non-cirrhotic MASH with moderate to advanced fibrosis (F2-F3). It is available as 60 mg, 80 mg, and 100 mg tablets. </p>						
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
						<!--<h5>Science Behind ReMASH</h5>					-->
						<p class="about_text">ReMASH which contains resmetirom works by selectively activating THR-β receptors in the liver, improving lipid metabolism, reducing hepatic fat, and lowering liver inflammation, without systemic side effects.</p>						
						<h5 class="mt-24">Mechanism of Action</h5>
						<ul>
							<li>Targets liver cells directly</li>
							<li>Reduces hepatic steatosis</li>
							<li>Promotes fibrosis regression</li>
							<li>Improves lipid profile</li>
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
							<li>Reduces liver fat, inflammation  and stiffness</li>
							<li>Decreases liver fibrosis</li>
							<li>Improves insulin sensitivity</li>
							<li>Improves cardiovascular outcomes</li>
							<li>Promotes better lipid control (LDL-C, triglycerides, Apo B)</li>
							<li>Enhances the quality of life in MASH patients</li>
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
						<p class="about_text">Available in 60 mg, 80 mg, and 100 mg tablets</p>
						<h5>Administration</h5>					
						<p class="about_text">To be taken orally under physician supervision. Dosage is personalized based on patient weight and liver condition. </p>						
						<h5 class="mt-24">Important Note</h5>
						<p class="about_text">Must be used along with a balanced diet and exercise plan for best results.</p>
					</div>
				</div>				
			</div>
			<div id="safety-and-monitoring-mild-side-effects-1" class="ctn"></div>
			<div class="row padding pb-0">
				<div class="col-md-5">
					<div class="how_it_works_img_sec">
						<h3 class="sub_title">Safety & Monitoring</h3>
						<img loading="eager" 
							src="<?php echo base_url();?>assets/img/safety_and_monitering.webp?Version=<?php echo Version; ?>"
							alt="Safety & Monitoring">
					</div>
				</div>
				<div class="col-md-7 about_content_sec">
					<div class="about_content text_style">										
						<ul>
							<li>Nausea, diarrhoea, dizziness, abdominal pain and pruritus</li>
							<li>Regular liver monitoring is recommended</li>
							<li>Inform your doctor about any existing thyroid, liver, heart, or kidney issues</li>
							<li>Not for use without prescription</li>
						</ul>
					</div>
				</div>	
											
			</div>
		</div>
	</div>

	<div id="what-is-remash" class="ctn"></div>
	<div class="about_section destop_block">
		<div class="container">			
			<div class="row">
				<div class="col-md-6 about_content_sec">
					<div class="about_content">
					    <!-- <h6 class="about_title">About</h6>	 -->
						<h3 class="sub_title">The Growing Challenge of MASH</h3>					
						<p class="about_text">MASH (Metabolic dysfunction Associated Steatohepatitis) is a progressive liver disease that often develops silently.</p>	
						<ul>
							<li>It begins with fat in the liver (steatosis).</li>
							<li>Over time, inflammation and cell injury cause fibrosis (scarring).</li>
							<li>If untreated, it can progress to cirrhosis, liver failure, or cancer.</li>
						</ul>
						<h5>Why it matters</h5>		
						<ul>
							<li>Many people are unaware that they have MASH until it has advanced.</li>
							<li>Risk is higher in those with obesity, type 2 diabetes, or high cholesterol.</li>
							<li>Early intervention can prevent severe complications.</li>
						</ul>			
					</div>
				</div>
				<div class="col-md-6">
					<div class="about_img_sec sticky-top">
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/what_is_remash.png?Version=<?php echo Version; ?>"
							alt="What is ReMASH">
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="about_section mb_display">
		<div class="container">			
			<div class="row">
				<div class="col-md-6">
					<div class="about_img_sec sticky-top">
						<h3 class="sub_title">The Growing Challenge of MASH</h3>					
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/what_is_remash.png?Version=<?php echo Version; ?>"
							alt="What is ReMASH">
					</div>
				</div>
				<div class="col-md-6 about_content_sec">
					<div class="about_content">
					    <!-- <h6 class="about_title">About</h6>	 -->
						<p class="about_text">MASH (Metabolic dysfunction Associated Steatohepatitis) is a progressive liver disease that often develops silently.</p>	
						<ul>
							<li>It begins with fat in the liver (steatosis).</li>
							<li>Over time, inflammation and cell injury cause fibrosis (scarring).</li>
							<li>If untreated, it can progress to cirrhosis, liver failure, or cancer.</li>
						</ul>
						<h5>Why it matters</h5>		
						<ul>
							<li>Many people are unaware that they have MASH until it has advanced.</li>
							<li>Risk is higher in those with obesity, type 2 diabetes, or high cholesterol.</li>
							<li>Early intervention can prevent severe complications.</li>
						</ul>			
					</div>
				</div>
				
			</div>
		</div>
	</div>	
	<div class="about_section destop_block bg_color">
		<div class="container">			
			<div id="how-it-works" class="ctn"></div>
			<div class="row ">
				<div class="col-md-6">
					<div class="how_it_works_img_sec sticky-top">
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/benefits.png?Version=<?php echo Version; ?>"
							alt="How It Works">
					</div>
				</div>
				<div class="col-md-6 about_content_sec">
					<div class="about_content">
						<h3 class="sub_title">ReMASH - A Breakthrough in Liver Health</h3>
						<!-- <h5>Science Behind ReMASH</h5>					 -->
						<p class="about_text">ReMASH (resmetirom) is designed to change the course of MASH.</p>						
						<h5 class="mt-24">Proven in clinical trials to:</h5>
						<ul>
							<li>Reduce liver fat significantly within months</li>
							<li>Reverse or slow fibrosis progression</li>
							<li>Improve insulin sensitivity and metabolic health</li>
							<li>Lower harmful cholesterol and triglycerides</li>
						</ul>
					</div>
				</div>				
			</div>
		</div>
	</div>	
	<div class="about_section mb_display bg_color">
		<div class="container">			
			<div id="how-it-works" class="ctn"></div>
			<div class="row ">
				<div class="col-md-6">
					<div class="how_it_works_img_sec sticky-top">
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/benefits.png?Version=<?php echo Version; ?>"
							alt="How It Works">
							<h3 class="sub_title">ReMASH - A Breakthrough in Liver Health</h3>
					</div>
				</div>
				<div class="col-md-6 about_content_sec">
					<div class="about_content">
						
						<!-- <h5>Science Behind ReMASH</h5>					 -->
						<p class="about_text">ReMASH (resmetirom) is designed to change the course of MASH.</p>						
						<h5 class="mt-24">Proven in clinical trials to:</h5>
						<ul>
							<li>Reduce liver fat significantly within months</li>
							<li>Reverse or slow fibrosis progression</li>
							<li>Improve insulin sensitivity and metabolic health</li>
							<li>Lower harmful cholesterol and triglycerides</li>
						</ul>
					</div>
				</div>				
			</div>
		</div>
	</div>	
	<div class="about_section destop_block">
		<div class="container">			
			<div class="row">
				<div class="col-md-6 about_content_sec">
					<div class="about_content">
					    <!-- <h6 class="about_title">About</h6>	 -->
						<h3 class="sub_title">A Treatment Backed by Science</h3>					
						<p class="about_text">The MAESTRO-NASH Phase 3 trial showed:</p>	
						<ul>
							<li>NASH resolution in up to 29% of patients with resmetirom 100 mg vs 9% on placebo</li>
							<li>At least one stage improvement in fibrosis in up to 26% vs 14% on placebo</li>
							<li>Reduction in LDL-C and triglycerides, supporting cardiovascular health</li>
							<li>Well-tolerated with mostly mild gastrointestinal side effects such as nausea and diarrhoea</li>
						</ul>			
					</div>
				</div>
				<div class="col-md-6">
					<div class="about_img_sec sticky-top">
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/how_it_works.png?Version=<?php echo Version; ?>"
							alt="What is ReMASH">
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="about_section mb_display">
		<div class="container">			
			<div class="row">
				<div class="col-md-6">
					<div class="about_img_sec sticky-top">
						<h3 class="sub_title">A Treatment Backed by Science</h3>
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/how_it_works.png?Version=<?php echo Version; ?>"
							alt="What is ReMASH">
						
					</div>
				</div>
				<div class="col-md-6 about_content_sec">
					<div class="about_content">
					    <!-- <h6 class="about_title">About</h6>	 -->
											
						<p class="about_text">The MAESTRO-NASH Phase 3 trial showed:</p>	
						<ul>
							<li>NASH resolution in up to 29% of patients with resmetirom 100 mg vs 9% on placebo</li>
							<li>At least one stage improvement in fibrosis in up to 26% vs 14% on placebo</li>
							<li>Reduction in LDL-C and triglycerides, supporting cardiovascular health</li>
							<li>Well-tolerated with mostly mild gastrointestinal side effects such as nausea and diarrhoea</li>
						</ul>			
					</div>
				</div>
				
			</div>
		</div>
	</div>	

    <section class=prd_video_sec>
       <div class="container">
           <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-9">
                    <div class=card_content>
             <a data-toggle=modal data-target=#myModal1><img class=card_img src="<?php echo base_url();?>assets/img/prd_video_img.png?Version=<?php echo Version; ?>" alt=video loading=eager width=100% height="20%"></a>
             <div class=video>
                <div class=text>
                   <a class="mt-3 fs-16 play_btn" data-toggle=modal data-target=#myModal1><i class="fa fa-play-circle" aria-hidden=true></i></a> 
                   <!--<h3 class=video_title>How To Use</h3>-->
                </div>
             </div>
             <div class=video_models>
                <div class="modal fade" id=myModal1 role=dialog>
                   <div class="modal-dialog modal-lg">
                      <div class="modal-content video_modal_content">
                         <button type=button class=close data-dismiss=modal aria-label=Close>
                         <span aria-hidden=true>×
                         </span> </button>
                         <div class="modal-body modal-video-body"> <iframe width="560" height="315" src="https://www.youtube.com/embed/lOB67DbuPgk?si=ZPqcGCzwyTHvMr19" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
                </div>
          </div>
       </div>
    </section>

	<div class="choose_your_path_sec">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3 class="sub_title">Choose Your Path</h3>
				</div>
				<div class="col-md-4">
					<h5>Patients</h5>
					<p>Learn about MASH, treatment expectations, and lifestyle support</p>
				</div>
				<div class="col-md-4">
					<h5>Healthcare Professionals</h5>
					<p>Access trial data, dosing guidance, and prescribing resources</p>
				</div>
			</div>
		</div>
	</div>

	<div class="about_section destop_block safety_bg_color">
		<div class="container">			
			<div class="row">
				<div class="col-md-7 about_content_sec">
					<div class="about_content">
					    <!-- <h6 class="about_title">About</h6>	 -->
						<h3 class="sub_title">Important Safety Information</h3>	
						<ul>
							<li>Not for use in patients with cirrhosis or decompensated liver disease</li>
							<li>Common side effects include diarrhoea, nausea, abdominal pain, dizziness, constipation, and itching</li>
							<li>Inform your doctor about all medicines, including statins and antidiabetics, before starting ReMASH</li>
						</ul>	
						<div class="buy_now_section">
							<a class="secondary_btn" href="<?php echo base_url();?>prescribing-information">Prescribing Information</a>
							<!--<a class="secondary_btn" href="<?php echo base_url();?>">Patient Information Leaflet</a>-->
						</div>		
					</div>
				</div>
				<div class="col-md-5">
					<div class="about_img_sec sticky-top">
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/safety_and_monitering.png?Version=<?php echo Version; ?>"
							alt="What is ReMASH">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="about_section mb_display safety_bg_color">
		<div class="container">			
			<div class="row">
				<div class="col-md-5">
					<div class="about_img_sec sticky-top">
						<h3 class="sub_title">Important Safety Information</h3>
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/safety_and_monitering.png?Version=<?php echo Version; ?>"
							alt="What is ReMASH">
					</div>
				</div>
				<div class="col-md-7 about_content_sec">
					<div class="about_content">
					    <!-- <h6 class="about_title">About</h6>	 -->
							
						<ul>
							<li>Not for use in patients with cirrhosis or decompensated liver disease</li>
							<li>Common side effects include diarrhoea, nausea, abdominal pain, dizziness, constipation, and itching</li>
							<li>Inform your doctor about all medicines, including statins and antidiabetics, before starting ReMASH</li>
						</ul>	
						<div class="buy_now_section">
							<a class="secondary_btn" href="<?php echo base_url();?>">Prescribing Information</a>
							<a class="secondary_btn" href="<?php echo base_url();?>">Patient Information Leaflet</a>
						</div>		
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- <div class="about_section mb_display">
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
						<p class="about_text">ReMASH is powered by Resmetirom, a revolutionary, first-in-class, liver-directed, THR-β agonist, designed to treat non-cirrhotic MASH with moderate to advanced fibrosis (F2-F3). It is available in 60mg, 80mg, and 100mg tablet strengths.</p>						
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
	</div> -->
	<!-- <div id="faqs" class="ctn"></div> -->
	
	<!-- <section class="faq_section mb_display" id="faq">
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
	</section> -->

	<?php $this->load->view('layout/footer');  ?>
	
	<!--  JavaScript -->
	<?php $this->load->view('layout/js');  ?>
	<?php if(DisclaimerPopUp == 'True'){ $this->load->view('layout/disclaimerhomepage'); }?>
	<?php if(Popbox == 'True'){ $this->load->view('layout/popbox'); }?>
	<?php if(OnLoadModal == 'True'){ $this->load->view('layout/onloadmodal'); }?>
	
	<script>
$(document).ready(function () {
    var $videoSrc;

    // When play button is clicked
    $('[data-target="#myModal1"]').click(function () {
        $videoSrc = $("#myModal1 iframe").attr("src");
    });

    // When modal is closed
    $('#myModal1').on('hidden.bs.modal', function () {
        $("#myModal1 iframe").attr("src", "");
        $("#myModal1 iframe").attr("src", $videoSrc);
    });
});
</script>

	
</body>
</html>