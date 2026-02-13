<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('layout/meta');  ?>
    <?php $this->load->view('layout/styles');  ?>
    <style>
        .nav_menu .fixed-top {
            background-color: rgb(251, 247, 248) !important;
            padding: 10px 0px;
        }
    </style>
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- Page Loading -->
    <div id="loading"></div>
    <!-- Nav Menu  -->
    <?php $this->load->view('layout/nav');  ?>
    <!-- contact_us -->
    <section id="contact_us" class="contact_us_sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 contact_us">
                    <h1 class="fs-16">Contact Us</h1>                      
                    <h2 class="sub_title">Get in Touch with us</h2>
                    <div class="contact_us_details">
                        <img loading="eager" src="<?php echo base_url();?>assets/img/mail.png?Version=<?php echo Version; ?>"
                            alt="mail">
                        <div class="company_details">
                            <h4>For International & Domestic enquiries</h4>
                            <a href="mailto:internationalsales@azistabhutanhealthcare.com">internationalsales@azistabhutanhealthcare.com</a>
                        </div>
                    </div>
                    <div class="contact_us_details">
                        <img loading="eager" src="<?php echo base_url();?>assets/img/mail.png?Version=<?php echo Version; ?>"
                            alt="mail">
                        <div class="company_details">
                            <h4>For Other Products Sales Enquiry</h4>
                            <a href="mailto:contact@azistabhutanhealthcare.com">contact@azistabhutanhealthcare.com</a>
                        </div>
                    </div>
                    <div class="contact_us_details">
                        <img loading="eager" src="<?php echo base_url();?>assets/img/whatsapp.png?Version=<?php echo Version; ?>"
                            alt="whatsapp">
                        <div class="company_details">
                            <h4>Reach Us On Whatsapp Number</h4>
                            <a target="_blank" href="https://wa.me/97517806579">+975-17806579</a>
                        </div>
                    </div>
                    <div class="contact_us_details">
                        <img loading="eager" src="<?php echo base_url();?>assets/img/whatsapp.png?Version=<?php echo Version; ?>"
                            alt="whatsapp_1">
                        <div class="company_details">
                            <h4>For International Enquiries, Reach <br> Us On Whatsapp</h4>
                            <a target="_blank" href="https://wa.me/6583212026">+65-83212026</a>
                            <!--<a href="tel:1800 202 7896">1800 202 7896</a>-->
                        </div>
                    </div>
                </div>  
                <div class="col-md-6 contact_form">
                    <h2 class="fs-16">Write to Us</h2>                      
                    <h3 class="sub_title">We are here to help you.</h3>
                    <form id="lead_form" name="lead_form" method="post" class="leadForm lead_form_block">
                        <div class="row">
                            <div class="col-md-6 my-2">
                                <label class="label_contactus" for="enquiry_name">Full Name</label>
                                <input class="form-control" type="text" name="enquiry_name" placeholder="Enter Your full name" />
                            </div>
                            <div class="col-md-6 my-2">
                                <label class="label_contactus" for="enquiry_contact">Contact Number</label>
                                <div class="phone-input-container">
                                    <select name="country_code" required>
                                        <option value="+93">+93 (AFG)</option>
                                        <option value="+355">+355 (ALB)</option>
                                        <option value="+213">+213 (DZA)</option>
                                        <option value="+376">+376 (AND)</option>
                                        <option value="+244">+244 (AGO)</option>
                                        <option value="+54">+54 (ARG)</option>
                                        <option value="+374">+374 (ARM)</option>
                                        <option value="+61">+61 (AUS)</option>
                                        <option value="+43">+43 (AUT)</option>
                                        <option value="+994">+994 (AZE)</option>
                                        <option value="+973">+973 (BHR)</option>
                                        <option value="+880">+880 (BGD)</option>
                                        <option value="+32">+32 (BEL)</option>
                                        <option value="+229">+229 (BEN)</option>
                                        <option value="+975">+975 (BTN)</option>
                                        <option value="+591">+591 (BOL)</option>
                                        <option value="+387">+387 (BIH)</option>
                                        <option value="+267">+267 (BWA)</option>
                                        <option value="+55">+55 (BRA)</option>
                                        <option value="+359">+359 (BGR)</option>
                                        <option value="+226">+226 (BFA)</option>
                                        <option value="+257">+257 (BDI)</option>
                                        <option value="+855">+855 (KHM)</option>
                                        <option value="+237">+237 (CMR)</option>
                                        <option value="+1">+1 (CAN)</option>
                                        <option value="+56">+56 (CHL)</option>
                                        <option value="+86">+86 (CHN)</option>
                                        <option value="+57">+57 (COL)</option>
                                        <option value="+506">+506 (CRI)</option>
                                        <option value="+385">+385 (HRV)</option>
                                        <option value="+53">+53 (CUB)</option>
                                        <option value="+357">+357 (CYP)</option>
                                        <option value="+420">+420 (CZE)</option>
                                        <option value="+45">+45 (DNK)</option>
                                        <option value="+20">+20 (EGY)</option>
                                        <option value="+372">+372 (EST)</option>
                                        <option value="+251">+251 (ETH)</option>
                                        <option value="+679">+679 (FJI)</option>
                                        <option value="+358">+358 (FIN)</option>
                                        <option value="+33">+33 (FRA)</option>
                                        <option value="+49">+49 (GER)</option>
                                        <option value="+30">+30 (GRC)</option>
                                        <option value="+852">+852 (HKG)</option>
                                        <option value="+36">+36 (HUN)</option>
                                        <option value="+354">+354 (ISL)</option>
                                        <option value="+91" selected>+91 (IND)</option>
                                        <option value="+62">+62 (IDN)</option>
                                        <option value="+98">+98 (IRN)</option>
                                        <option value="+964">+964 (IRQ)</option>
                                        <option value="+353">+353 (IRL)</option>
                                        <option value="+972">+972 (ISR)</option>
                                        <option value="+39">+39 (ITA)</option>
                                        <option value="+81">+81 (JPN)</option>
                                        <option value="+962">+962 (JOR)</option>
                                        <option value="+7">+7 (KAZ)</option>
                                        <option value="+254">+254 (KEN)</option>
                                        <option value="+965">+965 (KWT)</option>
                                        <option value="+371">+371 (LVA)</option>
                                        <option value="+961">+961 (LBN)</option>
                                        <option value="+218">+218 (LBY)</option>
                                        <option value="+370">+370 (LTU)</option>
                                        <option value="+352">+352 (LUX)</option>
                                        <option value="+60">+60 (MYS)</option>
                                        <option value="+356">+356 (MLT)</option>
                                        <option value="+52">+52 (MEX)</option>
                                        <option value="+377">+377 (MCO)</option>
                                        <option value="+212">+212 (MAR)</option>
                                        <option value="+977">+977 (NPL)</option>
                                        <option value="+31">+31 (NLD)</option>
                                        <option value="+64">+64 (NZL)</option>
                                        <option value="+234">+234 (NGA)</option>
                                        <option value="+47">+47 (NOR)</option>
                                        <option value="+968">+968 (OMN)</option>
                                        <option value="+92">+92 (PAK)</option>
                                        <option value="+507">+507 (PAN)</option>
                                        <option value="+63">+63 (PHL)</option>
                                        <option value="+48">+48 (POL)</option>
                                        <option value="+351">+351 (PRT)</option>
                                        <option value="+974">+974 (QAT)</option>
                                        <option value="+40">+40 (ROU)</option>
                                        <option value="+7">+7 (RUS)</option>
                                        <option value="+966">+966 (SAU)</option>
                                        <option value="+65">+65 (SGP)</option>
                                        <option value="+421">+421 (SVK)</option>
                                        <option value="+386">+386 (SVN)</option>
                                        <option value="+27">+27 (ZAF)</option>
                                        <option value="+82">+82 (KOR)</option>
                                        <option value="+34">+34 (ESP)</option>
                                        <option value="+94">+94 (LKA)</option>
                                        <option value="+46">+46 (SWE)</option>
                                        <option value="+41">+41 (CHE)</option>
                                        <option value="+66">+66 (THA)</option>
                                        <option value="+90">+90 (TUR)</option>
                                        <option value="+380">+380 (UKR)</option>
                                        <option value="+971">+971 (UAE)</option>
                                        <option value="+44">+44 (UK)</option>
                                        <option value="+1">+1 (USA)</option>
                                        <option value="+598">+598 (URY)</option>
                                        <option value="+58">+58 (VEN)</option>
                                        <option value="+84">+84 (VNM)</option>
                                        <option value="+263">+263 (ZWE)</option>
                                    </select>
                                    <div class="line"><hr></div>
                                    <input type="text" name="enquiry_contact"  maxlength="12" class="form-control" validator="mobile" />
                                </div>
                                <label id="enquiry_contact-error" class="text-red text-capitalize text-normal" for="enquiry_contact" style="display: none"></label>
                            </div>
                            <div class="col-md-6 my-2">
                                <label class="label_contactus" for="enquiry_mail">Email Address</label>
                                <input class="form-control" type="text" name="enquiry_mail" placeholder="Enter Your email address" />
                            </div>
                            
                             <div class="col-md-6 my-2">
                                <label class="label_contactus" for="enquiry_subject">Subject</label>
                                <input type='text' maxlength='255' name='enquiry_subject' value='' class='form-control' placeholder="Enter your Subject"/>
                            </div>
                            <div class="col-sm-12 my-2">
                                <label class="label_contactus" for="enquiry_comments">Comment</label>
                                <textarea class="form-control" autocomplete="off" name="enquiry_comments" minlength="3"
                                    maxlength="600" placeholder="Enter your message or Quarry"></textarea>
                                <div id="the-count" class="the-count"><span id="current">0</span><span id="maximum">/600</span>
                                </div>
                            </div>
                            <?php if(Recaptcha == 'True'){ ?>
                            <?php if(($this->config->item('google_key')) && ($this->config->item('google_secret'))){ ?>
                            <input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">
                            <?php } else { echo "Check Google Recaptcha Settings"; } ?>
                            <?php } ?>
                            <div class="col-md-12 form_submit">
                                <input type="submit" class="secondary_btn" id="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
   
    <!-- footer -->
    <?php $this->load->view('layout/footer');  ?>
    <!--  JavaScript -->
    <?php $this->load->view('layout/js');  ?>
    <?php if(DisclaimerPopUp == 'True'){ $this->load->view('layout/disclaimerhomepage'); }?>
    <?php if(Popbox == 'True'){ $this->load->view('layout/popbox'); }?>
    <?php if(OnLoadModal == 'True'){ $this->load->view('layout/onloadmodal'); }?>
</body>
</html>