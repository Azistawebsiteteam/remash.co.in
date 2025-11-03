<script>
function toggleDropdown(button) {
    const dropdown = button.parentElement;
    dropdown.classList.toggle("dropdown_open");
}

// Ensure DOM is loaded
document.addEventListener("DOMContentLoaded", function () {
    const dropdownLinks = document.querySelectorAll(".dropdown_content a");

    dropdownLinks.forEach(link => {
        link.addEventListener("click", function (e) {
            const dropdown = this.closest(".about_dropdown");
            dropdown.classList.remove("dropdown_open");

            // Scroll to anchor manually after dropdown closes
            const href = this.getAttribute("href");
            if (href.includes("#")) {
                e.preventDefault();
                const anchor = href.split("#")[1];
                const target = document.getElementById(anchor);
                if (target) {
                    setTimeout(() => {
                        target.scrollIntoView({ behavior: "smooth" });
                    }, 100); // slight delay to allow dropdown to close
                } else {
                    // fallback if anchor is not found (navigate normally)
                    window.location.href = href;
                }
            }
        });
    });
});
</script>


<section class="footer_Sec">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="social_icons">
					<a href="<?php echo base_url();?>"><img loading="eager"
							src="<?php echo base_url();?>assets/img/remash_logo.png?Version=<?php echo Version; ?>"
							alt="remash_logo"></a>
					<ul>
						<li><a target="_blank" href="https://www.facebook.com/AzistaBhutanHealthcare" target="_blank">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a></li>
						<li><a target="_blank" href="https://www.linkedin.com/company/azista-bhutan-healthcare-limited" target="_blank">
							<i class="fa fa-linkedin" aria-hidden="true"></i>
						</a></li>
						<li><a target="_blank" href="https://twitter.com/AzistaBhutan" target="_blank">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a></li>						
						<li><a target="_blank" href="https://www.youtube.com/channel/UC881Vt9B_mGTJmIa3nsjEtg" target="_blank">
								<i class="fa fa-youtube-play" aria-hidden="true"></i>
							</a></li>						
					</ul>
				</div>
			</div>
			<!-- <div class="col-md-5 pl-50">
				<h6 class="about_remash">About ReMASH</h6>
				<div class="footer_links font_size">
					<ul>
						<li><a href="<?php echo base_url();?>#what-is-remash">What is ReMASH?</a></li>
						<li><a href="<?php echo base_url();?>#how-it-works">How It Works?</a></li>
						<li><a href="<?php echo base_url();?>#benefits">Benefits</a></li>
					</ul>
					<ul>
						<li><a href="<?php echo base_url();?>#dosage-and-usage-prescribed-strengths">Dosage & Usage Prescribed Strengths</a></li>
						<li><a href="<?php echo base_url();?>#safety-and-monitoring-mild-side-effects">Safety & Monitoring Mild side effects</a></li>
					</ul>
				</div>				
			</div> -->
			<div class="col-md-6 footer_links">
				<ul>
					<li><a href="<?php echo base_url();?>prescribing-information">Prescribing Information (PI/SmPC)</a></li>
					<!-- <li><a href="<?php echo base_url();?>healthcare-professionals">Healthcare Professionals</a></li> -->
				</ul>
				<ul>
					<!-- <li><a href="<?php echo base_url();?>prescribing-information">Prescribing Information</a></li> -->
					<!--<li><a href="<?php echo base_url();?>">Patient Information Leaflet (PIL)</a></li>-->
				</ul>
			</div>
			
		</div>
		<div class="row footer_copy_right">
			<div class="col-md-6">
				<?php $this->load->view('layout/copyright');  ?>
			</div>
			<div class="col-md-6 footer_links justify-content-end gap">
				<ul class="d-flex">
					<li><a href="<?php echo base_url();?>privacy-policy">Privacy Policy</a></li> |
					<li><a href="terms-of-use">Terms of Use</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>