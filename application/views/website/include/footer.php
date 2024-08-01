<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!--Main Footer-->
    <footer class="main-footer" style="background-image:url(<?php echo base_url();?>media/website_assets/images/background/footer-bg.jpg);">

        <!--Footer Upper-->
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">

                    <div class="col-lg-3 col-sm-6 col-xs-12 column m-btmx50">
                        <div class="footer-widget about-widget">
                            <div class="logo"><a href="index.php">
                                    <img src="<?php echo base_url() . "uploads/logo/" . $logo['logo']; ?>" class="img-responsive" style="height:10rem;">
                                </a></div>
                            <div class="text">
                                <p style="text-align:justify;"><?php echo $company['about_company']; ?></p>
                            </div>
                            <div class="social-links-two clearfix">
                                <?php if (!empty($company['facebook'])) : ?> <li><a href="<?php echo $company['facebook']; ?> " target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li> <?php endif; ?>
                                <?php if (!empty($company['instagram'])) : ?> <li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><?php endif; ?>
                                <?php if (!empty($company['tweeter'])) : ?> <li><a href="<?php echo $company['tweeter']; ?>"target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php endif; ?>
                                <?php if (!empty($company['linkedln'])) : ?> <li><a href="<?php echo $company['linkedln']; ?>"target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><?php endif; ?>
                                <?php if (!empty($company['whatsapp'])) : ?> <li><a href="https://wa.me/<?php echo $company['whatsapp']; ?>"target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li><?php endif; ?>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-1 col-sm-6 col-xs-12 column"></div>
                    <!--Footer Column-->
                    <div class="col-lg-2 col-sm-6 col-xs-12 column"style="margin-top:4rem;">
                        <h2>Quick Links</h2>
                        <div class="footer-widget links-widget">
                            <ul>
                                <li><a href="javaScript:void(0);">About Us</a></li>
                                <li><a href="javaScript:void(0);">Causes</a></li>
                                <li><a href="javaScript:void(0);">Events</a></li>
                                <li><a href="javaScript:void(0);">Mission</a></li>
                            </ul>

                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="col-lg-3 col-sm-6 col-xs-12 column"style="margin-top:4rem;">
                        <div class="footer-widget news-widget">
                            <h2>Latest News</h2>

                            <!--News Post-->
                            <div class="news-post">
                                <div class="icon"></div>
                                <div class="news-content">
                                    <figure class="image-thumb"><img src="<?php echo base_url(); ?>media/website_assets/images/blog/s1.jpg" alt=""></figure><a href="#">Home & Feed for hungry people It's urgent</a>
                                </div>
                                <div class="time">July 2, 2014</div>
                            </div>

                            <!--News Post-->
                            <div class="news-post">
                                <div class="icon"></div>
                                <div class="news-content">
                                    <figure class="image-thumb"><img src="<?php echo base_url(); ?>media/website_assets/images/blog/s2.jpg" alt=""></figure><a href="#">Home & Feed for hungry people It's urgent</a>
                                </div>
                                <div class="time">July 2, 2014</div>
                            </div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="col-lg-3 col-sm-6 col-xs-12 column"style="margin-top:4rem;">
                        <div class="footer-widget contact-widget">
                            <h2>Contact Form</h2>
                            <ul class="contact-info">
                                <li><span class="icon fa fa-map-marker"></span> Khaira Road, Opposite Punjab National Bank, Jamui</li>
                                <li><span class="icon fa fa-phone"></span>+91 9430598940</li>
                                <li><span class="icon fa fa-envelope-o"></span>ashapayalfoundation@gmail.com</li>
                            </ul>

                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container clearfix">
                <!--Copyright-->
                <div class="copyright text-center">&copy; 2020 Asha Payal Foundation All Rights Reserved. &copy; Designed by <a href="javaScript:void(0);">Camwel Solution</a> </div>
            </div>
        </div>

    </footer>

    </div>
    <!--End pagewrapper-->


    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".page-wrapper"><span class="fa fa-long-arrow-up"></span></div>


    <!--Donate Popup-->
    <div class="modal fade pop-box" id="donate-popup" tabindex="-1" role="dialog" aria-labelledby="donate-popup" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!--Donation Section-->
                <section class="donation-section">
                    <div class="donation-form-outer">
                         <!-- --------- test_1-->
                         <!-- action="<?//php echo base_url();?>admin/Donation" -->
                        <form method="post" action="javaScript:void(0);"  id="donation_enquiry">

                            <br>
                            <!--Form Portlet-->
                            <div class="form-portlet">
                                <span id="getMass" style="color:green;">&nbsp;</span>
                                <h4>How Much Would you like to Donate?</h4>
                                <h2 id="getMass">&nbsp;</h2>

                                <div class="row clearfix">
                               
                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <div class="field-label">First Name <span class="required">*</span></div>
                                        <input type="text" name="fname" minlength="3" placeholder="First Name" oninput="this.value = this.value.toLowerCase().replace(/[^a-z ]/g, '').replace(/\s+/g, ' ');"
                                        >
                                        <span id="fnameErr" style="color:red;">&nbsp;</span>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <div class="field-label">Last Name <span class="required">*</span></div>
                                        <input type="text" name="lname" placeholder="Last Name"minlength="2" placeholder="First Name" oninput="this.value = this.value.toLowerCase().replace(/[^a-z ]/g, '').replace(/\s+/g, ' ');">
                                        <span id="lnameErr"style="color:red;">&nbsp;</span>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <div class="field-label">Email <span class="required">*</span></div>
                                        <input type="email" name="email" placeholder="Enter Email-Id">
                                        <span id="emailErr"style="color:red;">&nbsp;</span>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <div class="field-label">Mobile Number <span class="required">*</span></div>
                                        <input type="text" name="mobile" placeholder="Enter Mobile Number"maxlength="10" minlength="9" oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')">
                                        <span id="mobileErr"style="color:red;">&nbsp;</span>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <div class="field-label">Address <span class="required">*</span></div>
                                        <input type="text" name="address" placeholder="Enter Address"oninput="this.value = this.value.toLowerCase().replace(/[^a-z0-9,. ]/g, '').replace(/\s+/g, ' ');"maxlength="55">
                                        <span id="addressErr"style="color:red;">&nbsp;</span>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                        <div class="field-label">Enter Amount <span class="required">*</span></div>
                                        <input type="text" name="amount"  placeholder="Enter Amount"oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')">
                                        <span id="amountErr"style="color:red;">&nbsp;</span>
                                    </div>
                                   
                                </div>
                            </div>

                            <br>

                            <!--Form Portlet-->
                            <div class="form-portlet">
                                <h4>Payment Information</h4>

                                <div class="payment-option-logo"><img class="img-responsive" src="<?php echo base_url(); ?>media/website_assets/images/resource/payment-logos.png" alt=""></div>
                                <br>
                                
                                   <div class="field-label">Add Payment Screenshot  <span class="required">*</span></div>
                                    <div class="form-group col-lg-12 col-md-6 col-xs-12"style="padding:1rem;border: 1px solid #d2d2d2;width:100%;">
                                        <input type="file" name="amo_detials" value="" placeholder="Add Payment Screenshot">
                                    </div>
                                    <!-- <span id="payment_imgErr" style="color:red;"></span> -->
                            </div>

                            <div class="text-left">
                                <input type="submit" name="submit" id="submit" onclick=" return validatedebit()" class="theme-btn btn-style-two" style="border:5px solid red;"></div>

                        </form>
                    </div>
                </section>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    

    <script>
$("#donation_enquiry").on("submit", function(e) { e.preventDefault();
            $.ajax({
                type: "post",
                url: '<?= base_url() ?>admin/Enquiry/donation_enquery',
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                dataType: 'json',
                success: function(data) {
                    // console.log(data);
                    //   fname   lname   mobile    email    address      amount

                    if (data.icon == 'error')
					{
                        if(data.text.fname!=""){$("#fnameErr").html(data.text.fname).fadeIn().delay(3000).fadeOut();}
                        if(data.text.lname!=""){$("#lnameErr").html(data.text.lname).fadeIn().delay(3000).fadeOut();}
                        if(data.text.email!=""){$("#emailErr").html(data.text.email).fadeIn().delay(3000).fadeOut();}
                        if(data.text.mobile!=""){$("#mobileErr").html(data.text.mobile).fadeIn().delay(3000).fadeOut();}
						if(data.text.address!=""){$("#addressErr").html(data.text.address).fadeIn().delay(3000).fadeOut();}
						if(data.text.amount!=""){$("#amountErr").html(data.text.amount).fadeIn().delay(3000).fadeOut();}
                        if(data.text.payment_img!=""){$("#payment_imgErr").html(data.text.payment_img).fadeIn().delay(3000).fadeOut();}
                        
                    } 
					else{
                        // $("#heading").hide();
                        $("#getMass").html(data.text).show();
                        window.location.reload(true);           
                    }            
                }
            });
        });

 

    </script>