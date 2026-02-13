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
		@media (max-width: 767px){
			td {
				padding: 20px 0px 0px 0px;
				vertical-align: top;
				/* border: 1px solid #ccc; */
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
						<h2 class="healthcare_sub_title">What is ReMASH?</h2>
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
				</div>
			</div>
		</div>
	</div>

	<div class="about_section bg_color">
		<div class="container">
			<div class="row">
				<div class="col-md-7 about_content_sec">
					<div class="about_content">
						<!-- <h6 class="about_title">About</h6>	 -->
						<h3 class="sub_title">About Remash™</h3>
						<h5>A New Option for Patients with MASH and Fibrosis (F2-F3). <br>Remash™ works by:</h5>
						<ul>
							<li>Activating thyroid hormone receptors in the liver</li>
							<li>Breaking down harmful liver fat</li>
							<li>Reducing inflammation</li>
							<li>Slowing or reversing scarring</li>
						</ul>
						<h5>Why choose Remash™?</h5>
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

	<div class="treatment_sec">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>Starting Treatment</h3>
				</div>
				<div class="col-md-12">
				<table>
					<tr>
						<th>How to take Remash™:</th>
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
							<a class="collapsed first_anchor" role="button" data-toggle="collapse" href="#collapse-1"
								aria-expanded="true" aria-controls="collapse-2">
								<div class="card-header borderPurpose w-100" onClick="faq1()" id="qstn-1">
									<h5 class="mb-0	forText hdng">
										What is MASH, and how is it different from fatty liver?
									</h5>
								</div>
							</a>
							<div id="collapse-1" class="collapse show" data-parent="#accordion" aria-labelledby="qstn-1"
								style="">
								<div class="card-body">
									<p>MASH is an advanced stage of fatty liver disease where fat buildup causes
										inflammation and scarring (fibrosis). Unlike simple fatty liver, MASH can
										progress to cirrhosis or liver failure.</p>
								</div>
							</div>
						</div>
						<div class="cardf">
							<a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2"
								aria-expanded="false" aria-controls="collapse-2">
								<div class="card-header borderPurpose w-100" id="qstn-1">
									<h5 class="mb-0 forText hdng">
										How does Remash™ help me?
									</h5>
								</div>
							</a>
							<div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="qstn-1">
								<div class="card-body">
									<p>Remash™ works by reducing fat in the liver, calming inflammation, and slowing or
										reversing scarring. It also improves cholesterol and blood sugar levels,
										supporting your overall health. </p>
								</div>
							</div>
						</div>
						<div class="cardf">
							<a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3"
								aria-expanded="false" aria-controls="collapse-2">
								<div class="card-header w-100" id="qstn-1">
									<h5 class="mb-0 forText hdng">
										How soon will I see improvements?

									</h5>
								</div>
							</a>
							<div id="collapse-3" class="collapse " data-parent="#accordion" aria-labelledby="qstn-1">
								<div class="card-body">
									<p>Every patient is different. Clinical trials showed improvements in liver fat
										within a few months, while fibrosis reduction was seen over longer-term use.
										Your doctor will track progress through blood tests and imaging. </p>
								</div>
							</div>
						</div>
						<div class="cardf">
							<a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4"
								aria-expanded="false" aria-controls="collapse-4">
								<div class="card-header borderPurpose w-100" id="qstn-1">
									<h5 class="mb-0 forText hdng">
										What side effects should I watch for?
									</h5>
								</div>
							</a>
							<div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="qstn-1">
								<div class="card-body">
									<p>Most patients tolerate Remash™ well. The most common side effects are diarrhoea,
										nausea, abdominal pain, dizziness, constipation, and itching. Always inform your
										doctor if you experience anything unusual.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="about_section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 about_content_sec">
					<div class="about_content">
						<!-- <h6 class="about_title">About</h6>	 -->
						<h3 class="sub_title">Diet & lifestyle tips</h3>
						<p>Remash™ works best when combined with healthy habits.</p>
						
						<h5>Nutrition:</h5>
						<p>Choose fresh vegetables, fruits, lean proteins, and avoid sugary drinks and fried foods</p>
						<h5>Exercise:</h5>
						<p>Aim for 150 minutes of moderate activity weekly (like brisk walking or cycling)</p>
						<h5>Weight Management:</h5>
						<p>Even 5–10% weight loss can make a big difference in liver health</p>
						<h5>Alcohol Avoidance:</h5>
						<p>Alcohol can worsen MASH - avoid it completely</p>
						<h5>Regular Check-ups:</h5>
						<p>Stay consistent with liver tests and doctor visits</p>
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