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
						<h1 class="healthcare_title mb-3">Terms of Use & Disclaimer</h1>						                       
                        <div class="healthcare_details"> 
                            <h6>By using this website, you agree to the following:</h6>                           	
                            <ul>
                                <li>Information provided is for educational purposes only and not a substitute for medical advice.</li>
                                <li>Always consult a qualified healthcare professional before starting or stopping any medication.</li>
                                <li>Remash is not liable for any loss or damage arising from use of this site.</li>
                                <li>All content is the property of Remash; unauthorized use is prohibited.</li>
                                <li>External links are provided for reference; we are not responsible for their content.</li>
                            </ul>
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