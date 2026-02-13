<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
	<style>
		table {
			width: 100%;
			border-collapse: collapse;
			text-align: left;
		}

		th {
			background-color: #E3FCFB;
			font-size: 18px;
			font-weight: 800;
			padding: 15px;
			text-align: center;
			border-right: 1px solid #000;
		}


		td {
			padding: 20px 20px 0px 20px;
			vertical-align: top;
			/* border: 1px solid #ccc; */
		}
		.healthcare_section .healthcare_content_sec .healthcare_details{
	        padding-left: 0px;
		}
		.healthcare_sub_title{
		    font-size: 20px !important;
            color: #0783A4;
            margin-bottom: 16px;
            font-weight: 700;

		}
		.healthcare_title{
		    font-size: 30px !important;
		}
		@media (max-width: 767px){
			td {
				padding: 20px 0px 0px 0px;
				vertical-align: top;
				/* border: 1px solid #ccc; */
			}
			.healthcare_section {
                padding: 80px 0px 30px 0px;
            }
		}
	</style>
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
	<div id="loading"></div>
	<!-- Nav Menu  -->
	<?php $this->load->view('layout/nav');  ?>

	<div class="healthcare_section ">
		<div class="container">
			<div class="row">
				<div class="col-md-12 healthcare_content_sec">
					<div class="healthcare_content">
						<h1 class="healthcare_title">For Patients</h1>
						<h2 class="healthcare_sub_title">What is MASH?</h2>
						<p class="healthcare_text">MASH is liver inflammation and damage caused by the buildup of fat.
							It affects millions globally and is closely tied to obesity, diabetes, and high cholesterol.
						</p>
						<h5>Why it’s dangerous:</h5>
						<ul>
							<li>MASH can progress to fibrosis (liver scarring).</li>
							<li>Fibrosis may worsen silently into cirrhosis or liver failure.</li>
							<li>Patients may experience fatigue, weakness, or abdominal discomfort, but many have no
								symptoms at all.</li>
						</ul>
						<p><strong>The good news:</strong> With early diagnosis and the right treatment plan,
							progression can be slowed or even reversed.</p>
					</div>
					
					<div class="healthcare_details">
						<h5 class="sub_title">What is ReMASH?</h5>
						<p>ReMASH is a prescription medicine used along with diet and exercise to treat adults with Metabolic Dysfunction-Associated Steatohepatitis (MASH) with moderate to advanced liver scarring (fibrosis stages F2-F3), but not with cirrhosis of the liver.</p>
						<p>It is not known if ReMASH is safe and effective in children under 18 years of age.</p>
					</div>
					<div class="healthcare_details">
						<h5 class="sub_title">Why is ReMASH Important?</h5>
						<p>MASH can silently progress over time and lead to liver fibrosis (scarring), cirrhosis, or even liver failure. ReMASH is the first and only FDA-approved oral therapy that has shown effectiveness in reducing liver fat, controlling inflammation, and reversing fibrosis in moderate to advanced cases (fibrosis stages F2-F3).</p>
						
					</div>
					<div class="healthcare_details">
						<h5 class="sub_title">Before you take ReMASH, tell your healthcare provider about all of your medical conditions, including if you</h5>
						<ul>
							<li>Have any liver problems other than MASH</li>
							<li>Have gallbladder problems, including gallstones</li>
							<li>Have high cholesterol or take medicines for blood pressure or diabetes</li>
							<li>Have heart problems or a history of irregular heartbeat</li>
							<li>If you are pregnant or planning to become pregnant</li>
						</ul>
						<p class="mb-6">It is not known if ReMASH will harm your unborn baby.</p>
						<p class="mb-6">If you are breastfeeding or planning to breastfeed.</p>
						<p class="mb-6">It is not known if ReMASH passes into your breast milk. Talk to your healthcare provider about the best way to feed your baby if you take ReMASH.</p>
					</div>
					<div class="healthcare_details">
						<h5 class="sub_title">Tell your healthcare provider about all the medicines you take, including</h5>
						<ul>
							<li>Prescription and over-the-counter medicines</li>
							<li>Vitamins and herbal supplements</li>
						</ul>
						<p>ReMASH may affect the way other medicines work, and other medicines may affect how ReMASH works.</p>
						<p class="mb-4">Especially tell your healthcare provider if you take:</p>
						<ul>
							<li>Medicines that contain gemfibrozil (to lower triglycerides)</li>
							<li>Cyclosporine (to suppress immune system)</li>
							<li>Clopidogrel (to thin blood)</li>
							<li>Statin medicines (to lower cholesterol)</li>
						</ul>
						<p>Keep a list of all your medicines and share it with your doctor when you get a new prescription.</p>
					</div>
					<div class="healthcare_details">
						<h5 class="sub_title">How should I take ReMASH?</h5>
						<ul>
							<li>Take ReMASH exactly as your healthcare provider tells you.</li>
							<li>Your dose is based on your body weight and liver condition.</li>
							<li>Take ReMASH by mouth, once a day, with or without food.</li>
							<li>Try to take it at the same time every day.</li>
						</ul>
					</div>
					
					<div class="healthcare_details destop_block">
						<h5 class="sub_title">What are the possible side effects of ReMASH?</h5>
						<p>ReMASH may cause serious side effects, including:</p>
						<p><strong>Liver injury (hepatotoxicity)</strong></p>
						<p> Stop taking ReMASH and call your healthcare provider right away if you develop:</p>
						<div class="side_effects_section ">
							<div class="side_effect_img">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/tiredness.webp?Version=<?php echo Version; ?>"
							alt="Tiredness" class="" />
							<p>Tiredness</p>
							</div>
							<div class="side_effect_img">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/nausea.webp?Version=<?php echo Version; ?>"
							alt="Nausea or Vomiting" class="" />
							<p style="width: 100px">Nausea or Vomiting</p>
							</div>
							<div class="side_effect_img">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/fever.webp?Version=<?php echo Version; ?>"
							alt="Fever" class="" />
							<p>Fever</p>
							</div>
							<div class="side_effect_img">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/Pruritus.webp?Version=<?php echo Version; ?>"
							alt="Banner- Image" class="" />
							<p>Rash</p>
							</div>
							<div class="side_effect_img">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/pain_or_tenderness_in_the_upper_right_side_of_your_stomach.webp?Version=<?php echo Version; ?>"
							alt="pain or tenderness in the upper right side of your stomach" class="" />
							<p style="width: 140px">Pain or tenderness in the upper right side of your stomach</p>
							</div>
							<div class="side_effect_img">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/yellowing_of_your_skin_or_the_white_part_of_your_eyes.webp?Version=<?php echo Version; ?>"
							alt="yellowing of your skin or the white part of your eyes (jaundice)" class="" />
							<p style="width: 140px">Yellowing of your skin or the white part of your eyes (jaundice)</p>
							</div>
						</div>
						<p><strong>Gallbladder problems</strong></p>
						<p>Gallstones, inflammation of the gallbladder, or pancreas issues can occur in people with MASH and may be worsened by ReMASH.</p>
						<h5 class="red_color">Call your doctor right away if you have:</h5>
						<div class="side_effects_section ">
							<div class="side_effect_img ">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/stomach_pain_that_doesnt_go_away.webp?Version=<?php echo Version; ?>"
							alt="Stomach pain that doesn't go away" class="" />
							<p style="width: 100px">Stomach pain that doesn't go away</p>
							</div>
							<div class="side_effect_img ">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/pain_that_spreads_to_your_back.webp?Version=<?php echo Version; ?>"
							alt="Pain that spreads to your back" class="" />
							<p style="width: 100px">Pain that spreads to your back</p>
							</div>
							<div class="side_effect_img ">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/nausea.webp?Version=<?php echo Version; ?>"
							alt="Vomiting" class="" />
							<p >Vomiting</p>
							</div>
							<div class="side_effect_img ">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/fever.webp?Version=<?php echo Version; ?>"
							alt="Fever or Chills" class="" />
							<p >Fever or Chills</p>
							</div>
							<!--<div class="side_effect_img ">-->
							<!--	<img loading="eager"-->
							<!--src="<?php echo base_url();?>/assets/img/side_effects_img.png?Version=<?php echo Version; ?>"-->
							<!--alt="Banner- Image" class="" />-->
							<!--<p >Rash</p>-->
							<!--</div>-->
						</div>
						<div class="py-4">
						<p><strong>The most common side effects of ReMASH include</strong></p>
						<div class="side_effects_section ">
							<div class="side_effect_img">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/nausea.webp?Version=<?php echo Version; ?>"
							alt="Nausea" class="" />
							<p>Nausea</p>
							</div>
							<div class="side_effect_img">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/diarrhea.webp?Version=<?php echo Version; ?>"
							alt="Diarrhea" class="" />
							<p >Diarrhoea</p>
							</div>
							<div class="side_effect_img">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/dizziness.webp?Version=<?php echo Version; ?>"
							alt="Dizziness" class="" />
							<p>Dizziness</p>
							</div>
							<div class="side_effect_img">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/constipation.webp?Version=<?php echo Version; ?>"
							alt="Constipation" class="" />
							<p>Constipation</p>
							</div>
							<div class="side_effect_img">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/stomach_pain.webp?Version=<?php echo Version; ?>"
							alt="Stomach pain" class="" />
							<p >Stomach pain</p>
							</div>
							<div class="side_effect_img">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/Pruritus.webp?Version=<?php echo Version; ?>"
							alt="Banner- Image" class="" />
							<p >Itching</p>
							</div>
							<div class="side_effect_img">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/nausea.webp?Version=<?php echo Version; ?>"
							alt="Vomiting" class="" />
							<p >Vomiting</p>
							</div>
						</div>
						<p>These are not all possible side effects. Talk to your healthcare provider for more information.</p>
						<p>Call your doctor for medical advice about side effects. </a></p>
						</div>
					</div>
					<div class="healthcare_details mb_display">
						<h5 class="sub_title">What are the possible side effects of ReMASH?</h5>
						<p>ReMASH may cause serious side effects, including:</p>
						<p><strong>Liver injury (hepatotoxicity)</strong></p>
						<div class="side_effects_section ">
							<div class="mobile_flex">
								<div class="side_effect_img">
									<img loading="eager"
										src="<?php echo base_url();?>/assets/img/tiredness.webp?Version=<?php echo Version; ?>"
										alt="Tiredness" class="" />
									<p>Tiredness</p>
								</div>
								<div class="side_effect_img">
									<img loading="eager"
									src="<?php echo base_url();?>/assets/img/nausea.webp?Version=<?php echo Version; ?>"
									alt="Nausea or Vomiting" class="" />
									<p style="width: 100px">Nausea or Vomiting</p>
								</div>
								<div class="side_effect_img">
										<img loading="eager"
									src="<?php echo base_url();?>/assets/img/fever.webp?Version=<?php echo Version; ?>"
									alt="Fever" class="" />
									<p>Fever</p>
								</div>
							</div>
							<div class="mobile_flex">
								<div class="side_effect_img">
									<img loading="eager"
									src="<?php echo base_url();?>/assets/img/Pruritus.webp?Version=<?php echo Version; ?>"
									alt="Banner- Image" class="" />
									<p>Rash</p>
								</div>
								<div class="side_effect_img">
										<img loading="eager"
									src="<?php echo base_url();?>/assets/img/pain_or_tenderness_in_the_upper_right_side_of_your_stomach.webp?Version=<?php echo Version; ?>"
									alt="Banner- Image" class="" />
									<p >Pain or tenderness in the upper right side of your stomach</p>
								</div>
								<div class="side_effect_img">
										<img loading="eager"
									src="<?php echo base_url();?>/assets/img/yellowing_of_your_skin_or_the_white_part_of_your_eyes.webp?Version=<?php echo Version; ?>"
									alt="Banner- Image" class="" />
									<p >Yellowing of your skin or the white part of your eyes (jaundice)</p>
								</div>
							</div>
							
						</div>
						<p><strong>Gallbladder problems</strong></p>
						<p>Gallstones, inflammation of the gallbladder, or pancreas issues can occur in people with MASH and may be worsened by ReMASH.</p>
						<h5 class="red_color">Call your doctor right away if you have:</h5>
						<div class="side_effects_section ">
							<div class="mobile_flex">
								<div class="side_effect_img ">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/stomach_pain_that_doesnt_go_away.webp?Version=<?php echo Version; ?>"
								alt="stomach_pain_that_doesnt_go_away" class="" />
								<p style="width: 100px">Stomach pain that doesn't go away</p>
								</div>
								<div class="side_effect_img ">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/pain_that_spreads_to_your_back.webp?Version=<?php echo Version; ?>"
								alt="Banner- Image" class="" />
								<p style="width: 100px">Pain that spreads to your back</p>
								</div>
								<div class="side_effect_img ">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/nausea.webp?Version=<?php echo Version; ?>"
								alt="Banner- Image" class="" />
								<p >Vomiting</p>
								</div>
							</div>
							<div class="mobile_flex">
								<div class="side_effect_img ">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/fever.webp?Version=<?php echo Version; ?>"
								alt="Banner- Image" class="" />
								<p >Fever or Chills</p>
								</div>
								<div class="side_effect_img ">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/Pruritus.webp?Version=<?php echo Version; ?>"
								alt="Rash" class="" />
								<p >Rash</p>
								</div>
							</div>
						</div>
						<div class="py-4">
						<p><strong>The most common side effects of ReMASH include</strong></p>
						<div class="side_effects_section ">
							<div class="mobile_flex">
								<div class="side_effect_img">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/nausea.webp?Version=<?php echo Version; ?>"
								alt="Banner- Image" class="" />
								<p>Nausea</p>
								</div>
								<div class="side_effect_img">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/diarrhea.webp?Version=<?php echo Version; ?>"
								alt="Diarrhoea" class="" />
								<p >Diarrhoea</p>
								</div>
								<div class="side_effect_img">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/dizziness.webp?Version=<?php echo Version; ?>"
								alt="Banner- Image" class="" />
								<p>Dizziness</p>
								</div>
							</div>
							<div class="mobile_flex">
								<div class="side_effect_img">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/constipation.webp?Version=<?php echo Version; ?>"
								alt="Constipation" class="" />
								<p>Constipation</p>
								</div>
								<div class="side_effect_img">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/stomach_pain.webp?Version=<?php echo Version; ?>"
								alt="Banner- Image" class="" />
								<p >Stomach pain</p>
								</div>
								<div class="side_effect_img">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/Pruritus.webp?Version=<?php echo Version; ?>"
								alt="Banner- Image" class="" />
								<p >Itching</p>
								</div>
							</div>
							<div class="mobile_flex">
								<div class="side_effect_img">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/nausea.webp?Version=<?php echo Version; ?>"
								alt="Banner- Image" class="" />
								<p >Vomiting</p>
								</div>
							</div>
						</div>
						<p>These are not all possible side effects. Talk to your healthcare provider or pharmacist for more information.</p>
						<p>Call your doctor for medical advice about side effects.</a></p>
						</div>
					</div>
					<div class="healthcare_details">
						<h5 class="sub_title">How should I store ReMASH?</h5>
						<ul>
							<li>Store ReMASH at room temperature between 68°F to 77°F (20°C to 25°C).</li>
							<li>Keep the bottle tightly closed.</li>
							<li>Keep out of reach of children.</li>
						</ul>
					</div>
					<div class="healthcare_details">
						<h5 class="sub_title">General information about safe and effective use of ReMASH</h5>
						<ul>
							<li>Do not share ReMASH with others, even if they have the same symptoms.</li>
							<li>Do not use it for a condition not prescribed.</li>
							<li>You can ask your healthcare provider for more information.</li>
						</ul>
					</div>
					<div class="healthcare_details d-none">
						<h5 class="sub_title">What are the ingredients in ReMASH?</h5>
						<ul>
							<li><strong>Active ingredient: </strong>resmetirom</li>
							<li><strong>Inactive ingredients include </strong>mannitol, croscarmellose sodium, colloidal silicon dioxide, magnesium stearate, microcrystalline cellulose, and film coating agents such as polyethylene glycol, polyvinyl alcohol, talc, titanium dioxide, and colorants.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="about_section bg_color d-none">
		<div class="container">
			<div class="row">
				<div class="col-md-7 about_content_sec">
					<div class="about_content">
						<!-- <h6 class="about_title">About</h6>	 -->
						<h3 class="sub_title">About ReMASH</h3>
						<h5>A New Option for Patients with MASH and Fibrosis (F2-F3). <br>ReMASH works by:</h5>
						<ul>
							<li>Activating thyroid hormone receptors in the liver</li>
							<li>Breaking down harmful liver fat</li>
							<li>Reducing inflammation</li>
							<li>Slowing or reversing scarring</li>
						</ul>
						<h5>Why choose ReMASH?</h5>
						<ul>
							<li>Clinically proven results</li>
							<li>Convenient once-daily tablet</li>
							<li>Improves both liver and metabolic health</li>
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

	<div class="treatment_sec d-none">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>Starting Treatment</h3>
				</div>
				<div class="col-md-12">
				<table>
					<tr>
						<th>How to take ReMASH:</th>
						<th>What to expect</th>
						<th style="border:0px;">Lifestyle matters too</th>
					</tr>
					<tr>
						<td>
							<ul>
								<li>Take once a day, at the same time</li>
								<li>With or without food</li>
								<li>Swallow whole - do not crush or chew</li>
							</ul>
						</td>
						<td>
							<ul>
								<li>Steady improvements in liver fat and fibrosis markers</li>
								<li>Some patients feel more energetic over time</li>
								<li>Side effects are generally mild</li>
							</ul>
						</td>
						<td>
							<ul>
								<li>Eat a balanced diet</li>
								<li>Exercise regularly</li>
								<li>Limit alcohol and maintain a healthy weight</li>
							</ul>
						</td>
					</tr>
				</table>
				</div>
			</div>
		</div>
	</div>

	<div class="about_section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 about_content_sec">
					<div class="about_content">
						<!-- <h6 class="about_title">About</h6>	 -->
						<h3 class="sub_title">Diet & lifestyle tips</h3>
						<p>ReMASH works best when combined with healthy habits.</p>
						
						<h5>Nutrition:</h5>
						<p>Choose fresh vegetables, fruits, lean proteins, and avoid sugary drinks and fried foods</p>
						<h5>Exercise:</h5>
						<p>Aim for 150 minutes of moderate activity weekly (like brisk walking or cycling)</p>
						<h5>Weight Management:</h5>
						<p>Even 5-10% weight loss can make a big difference in liver health</p>
						<h5>Alcohol Avoidance:</h5>
						<p>Alcohol can worsen MASH - avoid it completely</p>
						<h5>Regular Check-ups:</h5>
						<p>Stay consistent with liver tests and doctor visits</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	<section class="faq_section " id="faq">
		<div class="container">
			<div class="row">
				<div class="col-md-5 faq_details">
					<div class="sticky-top">
						<h6>Patient Resources</h6>
						<h3>Frequently Asked Questions</h3>
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
									<p>MASH (Metabolic Dysfunction-Associated Steatohepatitis) is a serious, progressive liver condition characterized by fat accumulation in the liver, inflammation, and liver cell injury. This condition was previously known as nonalcoholic steatohepatitis (NASH). If untreated, MASH can lead to liver fibrosis, cirrhosis, and eventually liver cancer. MASH is part of a broader group of liver diseases called MASLD (metabolic dysfunction-associated steatotic liver disease). It is often associated with metabolic risk factors such as obesity, type 2 diabetes, and dyslipidemia.</p>
								</div>
							</div>
						</div>
						<div class="cardf">
						    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2"
										aria-expanded="false" aria-controls="collapse-2">
    							<div class="card-header w-100" id="qstn-2">
    								<h5 class="mb-0 forText hdng">
    										Who is eligible for Resmetirom?
    									
    								</h5>
    							</div>
							</a>
							<div id="collapse-2" class="collapse " data-parent="#accordion"
								aria-labelledby="qstn-2">
								<div class="card-body">
									<p>Resmetirom is indicated for adult patients diagnosed with non-cirrhotic MASH with moderate to advanced liver fibrosis (stages F2 to F3). It is especially recommended for those with associated metabolic conditions like type 2 diabetes, obesity, or dyslipidemia, and should be used alongside a healthy diet and regular exercise under medical supervision. </p>
								</div>
							</div>
						</div>
						<div class="cardf">
						    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3"
										aria-expanded="false" aria-controls="collapse-3">
    							<div class="card-header borderPurpose w-100" id="qstn-3">
    								<h5 class="mb-0 forText hdng">
    										How does ReMASH work?
    								</h5>
    							</div>
							</a>
							<div id="collapse-3" class="collapse" data-parent="#accordion" aria-labelledby="qstn-3">
								<div class="card-body">
									<p>ReMASH, contain Resmetirom, which is a selective thyroid hormone receptor-beta (THR-β) agonist that acts specifically on the liver. It helps regulate lipid metabolism. Resmetirom reduces liver fat, decreases inflammation, and fibrosis. It also decreases triglycerides (TGs), LDL-cholesterol (LDL-C), and improves insulin sensitivity. This targeted mechanism makes it highly effective in reversing the progression of MASH.</p>
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
										<li>Thyroid function test</li>
										<li>Fibrosis assessment (Fibro Scan, or non-invasive scores) </li>
										<li>Imaging studies (MRI-PDFF or ultrasound) </li>
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
						<!--<div class="cardf">-->
						<!--    <a class="collapsed border_bottom_custom" role="button" data-toggle="collapse"-->
						<!--				href="#collapse-6" aria-expanded="false" aria-controls="collapse-6">-->
    		<!--					<div class="card-header borderPurpose  w-100" id="qstn-6">-->
    		<!--						<h5 class="mb-0 forText hdng">-->
    		<!--							What is MASH, and how is it different from fatty liver?-->
    		<!--						</h5>-->
    		<!--					</div>-->
						<!--	</a>-->
						<!--	<div id="collapse-6" class="collapse" data-parent="#accordion" aria-labelledby="qstn-6">-->
						<!--		<div class="card-body">-->
						<!--			<p>MASH is an advanced stage of fatty liver disease where fat buildup causes inflammation and scarring (fibrosis). Unlike simple fatty liver, MASH can progress to cirrhosis or liver failure.</p>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="cardf">-->
						<!--    <a class="collapsed border_bottom_custom" role="button" data-toggle="collapse"-->
						<!--				href="#collapse-7" aria-expanded="false" aria-controls="collapse-7">-->
    		<!--					<div class="card-header borderPurpose  w-100" id="qstn-7">-->
    		<!--						<h5 class="mb-0 forText hdng">-->
    		<!--							How does ReMASH help me? -->
    		<!--						</h5>-->
    		<!--					</div>-->
						<!--	</a>-->
						<!--	<div id="collapse-7" class="collapse" data-parent="#accordion" aria-labelledby="qstn-7">-->
						<!--		<div class="card-body">-->
						<!--			<p>ReMASH works by reducing fat in the liver, calming inflammation, and slowing or reversing scarring. It also improves cholesterol and blood sugar levels, supporting your overall health.</p>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						<div class="cardf">
						    <a class="collapsed border_bottom_custom" role="button" data-toggle="collapse"
										href="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
    							<div class="card-header borderPurpose  w-100" id="qstn-8">
    								<h5 class="mb-0 forText hdng">
    									How soon will I see improvements? 
    								</h5>
    							</div>
							</a>
							<div id="collapse-8" class="collapse" data-parent="#accordion" aria-labelledby="qstn-8">
								<div class="card-body">
									<p>Every patient is different. Clinical trials showed improvements in liver fat within a few months, while fibrosis reduction was seen over longer-term use. Your doctor will track progress through blood tests and imaging.</p>
								</div>
							</div>
						</div>
						<div class="cardf">
						    <a class="collapsed border_bottom_custom" role="button" data-toggle="collapse"
										href="#collapse-9" aria-expanded="false" aria-controls="collapse-9">
    							<div class="card-header borderPurpose  w-100" id="qstn-9">
    								<h5 class="mb-0 forText hdng">
    									What side effects should I watch for? 
    								</h5>
    							</div>
							</a>
							<div id="collapse-9" class="collapse" data-parent="#accordion" aria-labelledby="qstn-9">
								<div class="card-body">
									<p>Most patients tolerate ReMASH well. The most common side effects are diarrhoea, nausea, abdominal pain, dizziness, constipation, and itching. Always inform your doctor if you experience anything unusual.</p>
								</div>
							</div>
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