<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
    <style>
       .healthcare_section ul{
            margin-left: 30px !important;
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
						<h1 class="healthcare_title mb-3">Privacy Policy</h1>
						<!-- <h2 class="healthcare_sub_title">About ReMASH™</h2> -->
						<p class="healthcare_text">At ReMASH, we are committed to protecting your privacy and ensuring the confidentiality of your personal information. This Privacy Policy explains how we collect, use, and safeguard your data when you visit or use our website.
						</p>
                        <h4>1. Information We Collect</h4>
                        <div class="healthcare_details">                            	
                            <h5>Personal Information</h5>
                            <p>Name, email address, phone number, or other details you provide when contacting us, subscribing to updates, or using interactive features.</p>
                            <h5>Non-Personal Information</h5>
                            <p>Browser type, IP address, device information, pages visited, and usage patterns, collected for analytics and website improvement.</p>
                        </div>
						<h4>2. How We Use Your Information</h4>	
                        <div class="healthcare_details">
                            <p>We may use the information we collect to:</p>
                            <ul>
                                <li>Respond to inquiries and provide patient or user support.</li>
                                <li>Share educational content, product updates, and relevant healthcare communications.</li>
                                <li>Improve website design, functionality, and user experience.</li>
                                <li>Ensure compliance with applicable medical and regulatory standards</li>
                            </ul>
                        </div>	
                        <h4>3. Sharing of Information</h4>	
                        <div class="healthcare_details">
                            <p>We do not sell, trade, or rent your personal information.</p>
                            <h6>Your data may be shared only:</h6>
                            <ul>
                                <li>With healthcare professionals for treatment-related guidance (with your consent).</li>
                                <li>With service providers who help us operate the website (bound by confidentiality obligations).</li>
                                <li>To comply with legal or regulatory requirements, or protect our rights and safety.</li>
                            </ul>
                        </div>
                        <h4>4. Cookies and Tracking</h4>
                        <div class="healthcare_details">
                            <ul>
                                <li>Our website may use cookies to improve browsing, remember preferences, and analyze trends.</li>
                                <li>You can disable cookies in your browser, though some features may not work properly.</li>
                            </ul>
                        </div>
                        <h4>5. Data Security</h4>
                        <div class="healthcare_details">
                            <p>We use appropriate technical, administrative, and organizational safeguards to protect your information against unauthorized access, alteration, or misuse.</p>
                        </div>
                        <h4>6. Third-Party Links</h4>
                        <div class="healthcare_details">
                            <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of these external sites.</p>
                        </div>
                        <h4>7. Your Rights</h4>
                        <div class="healthcare_details">
                            <h6>You have the right to:</h6>
                            <ul>
                                <li>Access, update, or request deletion of your personal data.</li>
                                <li>Withdraw consent for communications at any time.</li>
                            </ul>
                            <h6>To exercise your rights, contact us at:</h6>
                            <div class="contact_us_details">
                                <img loading="eager" src="<?php echo base_url();?>assets/img/mail.png" alt="mail">
                                <div class="company_details">
                                    <h4>Mail</h4>
                                    <a href="mailto:internationalsales@azistabhutanhealthcare.com">internationalsales@azistabhutanhealthcare.com</a>
                                </div>
                            </div>
                            <div class="contact_us_details">
                                <img loading="eager" src="<?php echo base_url();?>assets/img/phone.png" alt="mail">
                                <div class="company_details">
                                    <h4>Phone</h4>
                                    <a href="tel:+65-83212026">+65-83212026</a>
                                </div>
                            </div>
                        </div>
                        <h4>8. Changes to this Policy</h4>
                        <div class="healthcare_details">
                            <p>We may update this Privacy Policy periodically to reflect changes in practices or regulations. Updates will be posted on this page with a revised effective date.</p>
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