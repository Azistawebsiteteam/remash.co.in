<!-- Nav Menu  -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const navbarCollapse = document.getElementById('navbarSupportedContent');
    const hamburgerCheckbox = document.querySelector('.hamburger input');

    // Select all nav links and dropdown items
    const menuItems = document.querySelectorAll('#navbarSupportedContent .nav-link, #navbarSupportedContent .dropdown-item');

    menuItems.forEach(item => {
      item.addEventListener('click', function () {
        // Skip dropdown toggles (About ReMASH etc.)
        if (this.classList.contains('dropdown-toggle')) {
          return;
        }

        // Collapse Bootstrap navbar
        if (navbarCollapse.classList.contains('show')) {
          $('.navbar-collapse').collapse('hide');
        }

        // Reset hamburger
        if (hamburgerCheckbox) {
          hamburgerCheckbox.checked = false;
        }
      });
    });
  });
</script>

<div class="row nav_menu">	
	<nav class="navbar navbar-expand-lg navbar-light light fixed-top">		
		<div class="container">	
			<a class="navbar-brand" href="<?php echo base_url();?>"><img loading="eager" class="remash_logo" src="<?php echo base_url();?>assets/img/remash_logo.png?Version=<?php echo Version; ?>" alt="logoImage" ></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<label class="hamburger">
				<input type="checkbox">
				<svg viewBox="0 0 32 32">
					<path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
					<path class="line" d="M7 16 27 16"></path>
				</svg>
				</label>
			</button>		
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto scrollpy">
					<!-- <li class="destop_block nav-item dropdown <?php if(!empty($active_item)){ if($active_item =="home"){ echo"active"; }} ?>">
						<a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							About ReMASH
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item m-0"
								href="<?php echo base_url();?>#what-is-remash">What is ReMASH?</a>
							<a class="dropdown-item m-0"
								href="<?php echo base_url();?>#how-it-works">How It Works?</a>
							<a class="dropdown-item m-0"
								href="<?php echo base_url();?>#benefits">Benefits</a>
							<a class="dropdown-item m-0"
								href="<?php echo base_url();?>#dosage-and-usage-prescribed-strengths">Dosage & Usage Prescribed Strengths</a>
							<a class="dropdown-item m-0"
								href="<?php echo base_url();?>#safety-and-monitoring-mild-side-effects">Safety & Monitoring Mild side effects</a>
						</div>
					</li> -->
					<!-- <li class="mb_display nav-item dropdown <?php if(!empty($active_item)){ if($active_item =="home"){ echo"active"; }} ?>">
						<a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							About ReMASH
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item m-0"
								href="<?php echo base_url();?>#what-is-remash">What is ReMASH?</a>
							<a class="dropdown-item m-0"
								href="<?php echo base_url();?>#how-it-works-1">How It Works?</a>
							<a class="dropdown-item m-0"
								href="<?php echo base_url();?>#benefits-1">Benefits</a>
							<a class="dropdown-item m-0"
								href="<?php echo base_url();?>#dosage-and-usage-prescribed-strengths-1">Dosage & Usage Prescribed Strengths</a>
							<a class="dropdown-item m-0"
								href="<?php echo base_url();?>#safety-and-monitoring-mild-side-effects-1">Safety & Monitoring Mild side effects</a>
						</div>
					</li> -->
					<li class="nav-item <?php if(!empty($active_item)){ if($active_item =="home"){ echo"active"; }} ?>">
						<a class="nav-link " name='link' href="<?php echo base_url();?>">Home</a>
					</li>
					<!-- <li class="nav-item <?php if(!empty($active_item)){ if($active_item =="prescribing-information"){ echo"active"; }} ?>">
						<a class="nav-link " name='link' href="<?php echo base_url();?>prescribing-information">For Patients</a>
					</li> -->
					<li class="nav-item <?php if(!empty($active_item)){ if($active_item =="patients"){ echo"active"; }} ?>">
						<a class="nav-link " name='link' href="<?php echo base_url();?>patient-information">For Patients</a>
					</li>
					<li class="nav-item <?php if(!empty($active_item)){ if($active_item =="healthCare_professionals"){ echo"active"; }} ?>">
						<a class="nav-link " name='link' href="<?php echo base_url();?>healthcare-professionals">For Healthcare Professionals</a>
					</li>					
					<!-- <li
						class="nav-item <?php if(!empty($active_item)){ if($active_item =="faqs"){ echo"active"; }} ?>">
						<a class="nav-link " name='link' href="<?php echo base_url();?>#faqs">FAQ’s</a>
					</li> -->
					<li
						class="nav-item <?php if(!empty($active_item)){ if($active_item =="contactus"){ echo"active"; }} ?>">
						<a class="nav-link " name='link' href="<?php echo base_url();?>contact-us">Contact
							Us</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>		
</div>