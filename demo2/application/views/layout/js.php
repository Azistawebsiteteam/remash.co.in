<?php if(Recaptcha == 'True'){ ?>
<?php if(($this->config->item('google_key')) && ($this->config->item('google_secret'))){ ?>
<!-- Google Recaptcha -->
<script src="https://www.google.com/recaptcha/api.js?render=<?php echo $this->config->item('google_key'); ?>"></script>
<script>
    grecaptcha.ready(function () {
        grecaptcha.execute('<?php echo $this->config->item('google_key'); ?>', { action: 'contact' }).then(function (token) {
            var recaptchaResponse = document.getElementById('recaptchaResponse');
            recaptchaResponse.value = token;
        });
    });
</script>
<?php } } ?>
<!-- <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/baguetteBox.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script> -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/main.js"></script>
<!-- SweetAlert2 --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js" ></script>
<script src="<?php echo base_url();?>assets/js/owl-carousel/owl.carousel.min.js"></script>
<?php if($this->uri->segment(1) == 'contact-us') { ?>
    <script>
        // Phone Only Numbers
        $(document).ready(function() {
            $("input[validator='mobile']").on("input", function(e) {
                var self = $(this);
                self.val(self.val().replace(/[^0-9]/g, ''));
                if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
                    // entered key is a number
                } else {
                    e.preventDefault();
                }
            });
            // Setup form validation on the #register-form element
            $("#lead_form").validate({
                // Specify the validation rules
                rules: {
                    enquiry_name: {
                        required: true,
                        minlength: 3,
                        maxlength: 50
                    },
                    enquiry_mail: {
                        required: true,
                        email: true
                    },
                    enquiry_contact: {
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 15
                    },
                    enquiry_subject: {
                        required: true,
                        minlength: 3,
                        maxlength: 50
                    },
                    enquiry_comments: {
                        required: true
                    }
                },
                // Specify the validation error messages
                messages: {
                    enquiry_name: {
                        required: "Please enter your name",
                        maxlength: "Please Enter Below 50 Characters"
                    },
                    enquiry_mail: {
                        required: "Please enter your email address",
                        email: "Please enter a valid email address"
                    },
                    enquiry_contact: {
                        required: "Please enter your phone number",
                        number: "Please Enter Digits Only",
                        maxlength: "Please enter below 10 digits"
                    },
                    enquiry_subject: {
                        required: "Please enter your subject",
                        maxlength: "Please Enter Below 50 Characters"
                    },
                    enquiry_comments: {
                        required: "Please write your comment"
                    }
                },
                //Code Send to DB
                submitHandler: function(form) { // for demo
                    // alert('Hi');
                    /*swal(
                    'Success',
                    'You clicked the <b style="color:green;">Success</b> button!',
                    'success'
                    )*/
                    if ($("#submit").val("Processing...")) {
                        $("#submit").prop('disabled', 'disabled');
                    }
                    var myForm = document.getElementById('lead_form');
                    $.ajax({
                        type: 'post',
                        url: '<?php echo base_url();?>Home/leadformsubmission',
                        dataType: 'text', // what to expect back from the PHP script, if anything
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: new FormData(myForm),
                        success: function(data) {
                            window.location = data;
                        }
                    });
                    return false;
                }
            });
        });
    </script>
<?php } ?>
<?php if($this->uri->segment(1) == 'prescribing-information') { ?>
    <script>
        // Phone Only Numbers
        $(document).ready(function() {
            $("input[validator='mobile']").on("input", function(e) {
                var self = $(this);
                self.val(self.val().replace(/[^0-9]/g, ''));
                if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
                    // entered key is a number
                } else {
                    e.preventDefault();
                }
            });
            // Setup form validation on the #register-form element
            $("#prescribing_information_form").validate({
                // Specify the validation rules
                rules: {
                    lead_name: {
                        required: true,
                        minlength: 3,
                        maxlength: 50
                    },
                    lead_mail: {
                        required: true,
                        email: true
                    },
                    lead_contact: {
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 15
                    },
                    lead_country: {
                        required: true,
                    },
                    // lead_comments: {
                    //     required: true
                    // }
                },
                // Specify the validation error messages
                messages: {
                    lead_name: {
                        required: "Please enter your name",
                        maxlength: "Please Enter Below 50 Characters"
                    },
                    lead_mail: {
                        required: "Please enter your email address",
                        email: "Please enter a valid email address"
                    },
                    lead_contact: {
                        required: "Please enter your phone number",
                        number: "Please Enter Digits Only",
                        maxlength: "Please enter below 10 digits"
                    },
                    lead_subject: {
                        required: "Select your country",
                        maxlength: "Please Enter Below 50 Characters"
                    },
                    // lead_comments: {
                    //     required: "Please write your comment"
                    // }
                },
                //Code Send to DB
                submitHandler: function(form) { // for demo
                    // alert('Hi');
                    /*swal(
                    'Success',
                    'You clicked the <b style="color:green;">Success</b> button!',
                    'success'
                    )*/
                    if ($("#submit").val("Processing...")) {
                        $("#submit").prop('disabled', 'disabled');
                    }
                    var myForm = document.getElementById('prescribing_information_form');
                    $.ajax({
                        type: 'post',
                        url: '<?php echo base_url();?>Home/prescribing_information_form_submission',
                        dataType: 'text', // what to expect back from the PHP script, if anything
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: new FormData(myForm),
                        success: function(response) {
                            var res = JSON.parse(response);
                        
                            // 1️⃣ Trigger PDF download
                            var link = document.createElement('a');
                            link.href = res.pdf_url;
                            link.download = 'prescribing_information.pdf';
                            document.body.appendChild(link);
                            link.click();
                            document.body.removeChild(link);
                        
                            // 2️⃣ Redirect to success page after short delay
                            setTimeout(function() {
                                window.location.href = res.redirect_url;
                            }, 1000); // wait 1 seconds for download to start
                        }
                    });
                    return false;
                }
            });
        });
    </script>
<?php } ?>

<script>
    $(document).ready(function(){
    $('ul.navbar-nav li.nav-item').click(function(){  
    $('li.nav-item').removeClass("active");
    $(this).addClass("active");
    });
    });
</script>
<!-- Form Validation -->
<script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
<script>
	$(document).ready(function () {
       $.validator.addMethod("lowercaseEmail", function(value, element) {
        // Check if the email contains any uppercase characters
        return value === value.toLowerCase();
        }, "Email addresses must be in lowercase.");
    }); 
       // Custom method to allow only emails ending with .com, .org, or .in (no .co.in etc.)
    jQuery.validator.addMethod("allowedEmailDomain", function(value, element) {
        // This regex strictly checks for full email + ends ONLY in .com, .org, or .in
        return this.optional(element) || /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|org|in)$/i.test(value);
    }, "Only .com, .org, or .in email addresses are allowed.");
	    <?php $checkAvailabilityURL = base_url('Home/check_availability/'); ?>
     $(document).ready(function () {
     $("#subscriber_form").validate({
            // Specify the validation rules
            rules: {
                sub_email: {
                        required: true,
                        email: true,
                         lowercaseEmail: true,
                          allowedEmailDomain: true,
                        remote: {
                            url: "<?php echo $checkAvailabilityURL; ?>" + $("#sub_email").val(),
                            type: "post",
                            data: {
                                column: function(){
                                    return "sub_email";
                                },
                            }
                        }
                    }
            },
            // Specify the validation error messages
            messages: {
                sub_email: {
                        required: "Please enter your email address to subscribe",
                        email: "Please enter a valid email address",
                        lowercaseEmail: "Email addresses must be in lowercase.",
                        allowedEmailDomain: "Only .com, .org, or .in email addresses are allowed.",
                        remote: jQuery.validator.format("{0} is already exists."),
                    }
            },
            //Code Send to DB
                submitHandler: function (form) { // for demo
                //   alert('Hi');
                // if($("#submit").val("Processing...")){
                //     $("#submit").prop('disabled', 'disabled');
                // }
                    var myForm = document.getElementById('subscriber_form');
                    $.ajax({
                        type: 'post',
                        url: '<?php echo base_url();?>Home/email_submission',
                        dataType: 'text', // what to expect back from the PHP script, if anything
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: new FormData(myForm),
                        success: function (data) {
                          window.location = data;
                        }
                    });
                    return false;
                }
        });
     });
	</script>
<script>  
    baguetteBox.run('.tz-gallery');
    <?php if($this->uri->segment(1) == 'carica-papaya-leaf-extract-tablets' OR $this->uri->segment(1) == 'carica-papaya-leaf-extract-syrup') { ?>
        $(document).ready(function(){    
            $("#Testimonials").owlCarousel({
                items:3,
                itemsDesktop:[1000,3],
                itemsDesktopSmall:[979,2],
                itemsTablet:[768,2],
                pagination:true,
                navigation:true,
            // navigationText:["<span class='leftarrow'></span>","<span class='rightarrow'></span>"],
                slideSpeed:1000,
                slideBy: 3,
                singleItem:false,
                autoPlay:true
            });  
        });
    <?php } ?>    
</script>
<script>  
        $(document).ready(function(){    
            $("#blog_slider").owlCarousel({
                items:3,
                itemsDesktop:[1000,3],
                itemsDesktopSmall:[979,2],
                itemsTablet:[768,2],
                pagination:true,
                navigation:false,
            // navigationText:["<span class='leftarrow'></span>","<span class='rightarrow'></span>"],
                slideSpeed:1000,
                slideBy: 1,
                singleItem:false,
                autoPlay:true
            });  
        });
</script>
<!-- mobile_toggle -->
<script>
    $(document).ready(function() {
    // Initialize dropdown
    $('.dropdown-toggle').dropdown();
    });
</script>
