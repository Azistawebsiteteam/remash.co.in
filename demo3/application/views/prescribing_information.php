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
        .contact_us_sec{
            background: #0783A4;
        }
        .prescribing_information{
            display: flex;
            justify-content: center;
        }
        .contact_us_sec .contact_form{
            padding: 100px 15px 50px 15px;
        }
        select option {
            background: #fff;
            color: #000;
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
            <div class="row prescribing_information"> 
                <div class="col-md-10 contact_form">
                    <h1 class="fs-16">Need to fill</h1>                      
                    <h2 class="sub_title">Prescribing Information</h2>
                    <form id="prescribing_information_form" name="lead_form" method="post" class="leadForm lead_form_block">
                        <div class="row">
                            <div class="col-md-6 my-2">
                                <label class="label_contactus" for="lead_name">Full Name</label>
                                <input class="form-control" type="text" name="lead_name" placeholder="Enter Your full name" />
                            </div>
                            <div class="col-md-6 my-2">
                                <label class="label_contactus" for="lead_contact">Contact Number</label>
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
                                    <input type="text" name="lead_contact"  maxlength="12" class="form-control" validator="mobile" />
                                </div>
                                <label id="lead_contact-error" class="text-red text-capitalize text-normal" for="lead_contact" style="display:none"></label>
                            </div>
                            
                            <div class="col-md-6 my-2 mb_padding">
                                <label class="label_contactus" for="lead_mail">Email Address</label>
                                <input class="form-control" type="text" name="lead_mail" placeholder="Enter Your email address" />
                            </div>
                            
                            
                            <div class="col-md-6 my-2">
                                <label class="label_contactus" for="lead_country">Country</label>
                                <!--<input type='text' maxlength='255' name='lead_country' value='' class='form-control' placeholder="Select your Country"/>-->
                                <select name="lead_country" id="lead_country" class="form-control" required>
                                    <option value="">Select your Country</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India" selected>India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="North Korea">North Korea</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Korea">South Korea</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                            <?php if(Recaptcha == 'True'){ ?>
                            <?php if(($this->config->item('google_key')) && ($this->config->item('google_secret'))){ ?>
                            <input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">
                            <?php } else { echo "Check Google Recaptcha Settings"; } ?>
                            <?php } ?>
                            <div class="col-md-12 form_submit my-2">
                                <input type="submit" class="secondary_btn" id="submit" value="Download">
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