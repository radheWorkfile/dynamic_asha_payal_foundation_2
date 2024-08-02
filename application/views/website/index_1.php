<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $seo['page_title']; ?></title>
    <link rel="icon" href="<?php echo base_url() . "uploads/logo/" . $logo['favicon']; ?>" type="image/x-icon" />
    <?php include_once("include/css.php") ?>
    <meta name="description" content="<?php echo $seo['meta_description']; ?>">
    <meta name="keywords" content="<?php echo $seo['meta_keywords']; ?>">

    <script>
        <?php echo $links['google_analytics']; ?>
    </script>
    <script>
        <?php echo $links['google_console']; ?>
    </script>
</head>

<body>
    <?php include_once("include/header.php") ?>

    <!-- ====================================================================  -->

    <div class="arvToast" style="visibility:hidden;">
        <div class="tChild tSuccess" id="mrk-0">
            <i class="bx bx-check-double"></i> Thank You! you have successfully update your details <i class="bx bx-x mClose" id="icn-0"></i>
        </div>
    </div>
    <!-- ====================================================================  -->


    <section style="margin-top:-8px;">
        <!--====================banner section  started==================================================== -->
        <?php if ($menu_p['banner'] != 0 && $banner) : ?>

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php $a = 0;
                    if (Count($banner)) : ?>
                        <?php foreach ($banner as $b => $ban) : ?>
                            <?php if ($a == 0) : ?>
                                <div class="carousel-item active">
                                    <img src="<?php echo base_url() . "uploads/banner/" . $ban['banner'] ?>" class="d-block w-100" alt="..." style="width:100%;">

                                    <?php if ($ban['banner_text']) : ?>
                                        <div class="carousel-caption d-none d-md-block  " style="text-align: center; top:38%;font-size:5rem;color:#e4f0f5;font-weight:600;">
                                            <p style="margin-top: 6%; ">
                                                <?php echo $ban['banner_text'] ?>
                                                <span>
                                                    <a class="btn btn-primary" style="padding:1.2rem 3rem;" href="<?php echo $ban['button_url'] ?>" style="background-color:'<?php echo $ban['button_color']; ?>' !important; z-index:5000000000000;">
                                                        <?php echo $ban['button_text']; ?>
                                                    </a>
                                                </span>
                                            </p>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            <?php $a++;
                            else : ?>
                                <div class="carousel-item">
                                    <img src="<?php echo base_url() . "uploads/banner/" . $ban['banner'] ?>" class="d-block w-100" alt="...">

                                    <?php if ($ban['banner_text']) : ?>
                                        <div class="carousel-caption d-none d-md-block " style="text-align: left;top:30%">
                                            <p style="margin-top: 10%;">
                                                <?php echo $ban['banner_text'] ?>
                                                <span>
                                                    <a class="btn btn-danger" href="<?php echo $ban['button_url'] ?>" style="background-color:'<?php echo $ban['button_color']; ?>' !important; z-index:5000000000000;">
                                                        <?php echo $ban['button_text']; ?></a>
                                                </span>
                                            </p>
                                        </div>
                                    <?php endif; ?>

                                </div>

                            <?php $a++;
                            endif; ?>

                        <?php endforeach; ?>

                    <?php endif; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        <?php endif; ?>
    </section>
    <!--====================banner section  end==================================================== -->
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="position: absolute; top:280px;left:45rem;">
                <p><i class="fa fa-snowflake-o" aria-hidden="true"></i><b><?php echo $this->session->flashdata('message_display'); ?></b></p>


                <!-- <p class="wow tada"><a href="" class="btn-join_1" style="color:white; padding:12px 22px 12px 22px; position: absolute; color:white; top:163px; left:502px;border:3px solid #1884ff;">DONATE NOW</a></p>
                <p class="wow tada"><a href="" class="btn-join_1" style="color:white; padding:12px 22px 12px 22px; position: absolute; color:white; top:152px; left:355px;border:3px solid #1884ff;">JOIN WITH US</a></p> -->
            </div>
            <div class="col-md-4"></div>

        </div>
    </div>
    <!--====================news section start==================================================== -->
    <?php if ($menu_p['news'] != 0 && !empty($news)) : ?>
        <div class="container my-5">
            <h2 class="text-center">Today News</h2>
            <marquee behavior="slow" direction="ltr">
                <?php foreach ($news as $news) : ?>

                    <p><?php echo $news['news']; ?></p>
                <?php endforeach; ?>
            </marquee>
        </div>
    <?php endif; ?>
    <!--====================news section end==================================================== -->

    <!--====================about us section start==================================================== -->
    <section class="wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".30s" style="margin-top:5rem;">
        <div class="container">
            <div class="row">
                <?php if ($menu_p['about'] != 0 && !empty($about)) : ?>
                    <div class="container col-xxl-8 px-4 py-5">
                        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">

                            <div class="col-lg-6" style="text-align:justify; margin-top:-10px; margin-bottom:-80px;font-weight:normal;">
                                <h2 class="wow zoomIn" style="margin-top:1rem;"><b>Welcome To <span style="color:#53c5f1;">Asha Payal</span> Foundation</b></h2>
                                <h4 class="display-5 fw-bold lh-1 mb-3" style="margin-top:1rem;"><b><?php echo $about['about_header']; ?></b></h4>
                                <p class="lead"><?php echo $about['about_text']; ?></p>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                    <?php if ($about['button_url'] != 0) : ?>
                                        <a href="<?php echo $about['button_url'] ?>">
                                            <button style="background-color:<?php echo $about['button_color']; ?> !important;">
                                                <?php echo $about['button_text']; ?>

                                            </button>
                                        </a>
                                    <?php endif; ?>
                                </div>

                                <div class="" style="display:flex;">
                                    <p><span><i class="fa fa-bullseye" style="color:#53c5f1;"></i>&nbsp;Charity For Education</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa fa-bullseye" style="color:#53c5f1;"></i>&nbsp;Feed for hungry child</span></p>
                                </div>

                                <div class="" style="display:flex;">
                                    <p><span><i class="fa fa-bullseye" style="color:#53c5f1;"></i>&nbsp;Home for homeless</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa fa-bullseye" style="color:#53c5f1;"></i>&nbsp;Clean water for people</span></p>
                                </div><br>

                                <p class="wow tada"><a href="" class="btn-join" style="color:white;padding:12px 22px 12px 22px;color:white;border:3px solid #53c5f1;">JOIN WITH US</a></p>

                            </div>
                            <div class="col-md-1"> </div>
                            <div class="col-md-5 wow zoomInLeft">
                                <img src="<?php echo base_url() . "uploads/image/" . $about['about_image']; ?>" class="d-block mx-lg-auto img-fluid " alt="<?php echo base_url() . "uploads/image/" . $about['about_image']; ?>" width="700" loading="lazy" style="height:38rem;width:100%;">
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!--====================about us section end==================================================== -->


    <!--====================hero section start==================================================== -->
    <section style="background-color:#e3fdfb;box-shadow: 5px 5px 5px grey; margin-top:105px;">

        <?php if ($menu_p['hero_section'] != 0 && !empty($hero)) : ?>
            <div class="container my-5">
                <?php foreach ($hero as $hero) : ?>

                    <div class="row my-2 py-2">
                        <?php if ($hero['header']) : ?>
                            <div class="col-md-12">
                                <h3 class="text-center"><?php echo $hero['header']; ?></h3>
                            </div>
                        <?php endif; ?>




                        <?php if ($hero['text'] != '' && $hero['image'] != '') : ?>
                            <div class="col-md-7">
                                <?php echo $hero['text'] ?>
                            </div>
                            <div class="col-md-5">
                                <img src="<?php echo base_url() . $hero['image']; ?>" alt="<?php echo base_url() . $hero['image']; ?>" style="border-radius:10%; margin-top:-42px; width:100%; margin-bottom:-52px; border:8px solid #9bc5f5; box-shadow: 10px 10px 5px lightblue inset;">
                            </div>
                        <?php endif; ?>





                        <?php if ($hero['text'] != '' && $hero['image'] == '') : ?>

                            <div class="col-md-12">
                                <?php echo $hero['text'] ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($hero['text'] == '' && $hero['image'] != '') : ?>
                            <div class="col-md-12">
                                <img src="<?php echo base_url() . $hero['image']; ?>" alt="<?php echo base_url() . $hero['image']; ?>" style="width: 100%;">

                            </div>
                        <?php endif; ?>


                    </div>
                <?php endforeach; ?>



            </div>
        <?php endif; ?>
    </section>

    <!--=================== Hero section end==================================================== -->



    <!--====================services section start==================================================== -->
    <?php if ($menu_p['services'] != 0 && !empty($service)) : ?>
        <div class="container">

            <div class="row">
                <h1 class="text-center">Our Services</h1>
                <?php foreach ($service as $s => $ser) : ?>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo base_url() . "uploads/image/" . $ser['image'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-text"><?php echo $ser['heading']; ?></h3>

                                <p class="card-text"><?php echo $ser['content']; ?></p>
                                <?php if ($ser['button_url'] != 0) : ?>
                                    <a href="<?php echo $ser['button_url'] ?>">
                                        <button style="background-color:<?php echo $ser['button_color']; ?> !important;">
                                            <?php echo $ser['button_text']; ?>

                                        </button>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>






            </div>



        </div>
    <?php endif; ?>

    <!--====================services section end==================================================== -->

    <!--====================testimonial section start==================================================== -->
    <?php if ($menu_p['testimonial'] != 0 && !empty($testimonial)) : ?>
        <div class="container">
            <div class="row">
                <h1 class="text-center">Testimonial</h1>
                <?php foreach ($testimonial as $s => $tes) : ?>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo base_url() . "uploads/image/" . $tes['image'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3>title</h3>
                                <p class="card-text"><?php echo $tes['content']; ?></p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

    <!--====================testimonial section end==================================================== -->



    <!--====================Gallery Section start==================================================== -->
    <!--Gallery Section-->
 <section class="wow zoomIn">
 <?php if ($menu_p['gallery'] != 0) : ?>

<section class="gallery-section" style="margin-top:-10rem;">
    <div class="auto-container">

        <!--Filter-->
        <div class="filters text-center">
            <ul class="filter-tabs filter-btns clearfix anim-3-all">
                <li class="active filter" data-role="button" data-filter="all">All</li>
                <li class="filter" data-role="button" data-filter=".eco">Charity</li>
                <li class="filter" data-role="button" data-filter=".plants">Plants</li>
            </ul>
        </div>

        <!--Filter List-->
        <div class="row filter-list clearfix">
            <!--Column-->
            <?php foreach ($gallery as $gallery) : ?>
                <div class="column mix mix_all eco plants col-md-3 col-sm-6 col-xs-12">
                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item" style="border: 2px dotted #53c5f1;">
                        <div class="inner-box text-center">
                            <!--Image Box-->
                            <figure class="image-box"><img src="<?php echo base_url() . "uploads/gallery/" . $gallery['image'] ?>" alt=""></figure>
                            <div class="overlay-box">
                                <div class="inner-content">
                                    <div class="content">
                                        <a class="arrow lightbox-image" href="images/gallery/s1.jpg" title="Image Caption Here"><span class="icon flaticon-cross-4"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>
 </section>


    <!--====================Gallery Section end==================================================== -->




    <!--====================contact section start==================================================== -->
    <?php

    $contact1 = explode(",", $contact['contact_number']);
    $email1 = explode(",", $contact['email']);
    ?>
    <span><?php if ($menu_p['contact'] != 0 && !empty($company)) : ?></span>

    <div class="container">
        <div class="row">
            <div class="col-md-5 wow zoomInLeft" style="border:1px solid #d2d2d2;padding:6rem 6rem;">

                <h2 style="color:#53c5f1 ;"><b>Our Address</b></h3>
                    <p style="text-align:justify;">Reach out to the Asha Payal Foundation for support, collaboration, or inquiries. Contact us via email, phone, or visit our website. We’re here to assist and make a positive impact together.</p><br>
                    <h3 style="color:#657a82;font-family:'Playfair Display',serif;"><b><?php echo $company['company_name']; ?></b></h3><br>


                    <div class="" style="display:flex;">
                        <p class="mb-2"> <i class="fa fa-home" style="font-size: 6rem;color:#c1eeff;"></i></p>
                        <p style="padding-left:2rem;"><b style="color:#53c5f1;font-weight:800;">Address</b> <br>&nbsp;<?php echo $company['company_address']; ?></p>
                    </div>


                    <?php foreach ($contact1 as  $contact1) : ?>
                        <div class="" style="display:flex">
                            <p class="mb-2"> <i class="fa fa-phone" style="font-size: 6rem;color:#c1eeff;"></i></p>
                            <p style="padding-left:2rem;"><b style="color:#53c5f1;">Phone</b> <br>&nbsp;<?php echo $contact1; ?></p>
                        </div>
                    <?php endforeach; ?>


                    <?php foreach ($email1 as  $email1) : ?>
                        <div class="" style="display:flex">
                            <p class="mb-2"> <i class="fa fa-envelope" style="font-size: 5rem;color:#c1eeff;"></i></p>
                            <p style="padding-left:2rem;"><b style="color:#53c5f1;">Email Id</b> <br>&nbsp;<?php echo $email1; ?></p>
                        </div>
                    <?php endforeach; ?>

            </div>

            <div class="col-md-1"></div>
            <div class="col-md-6 wow zoomInRight" style="border:1px solid #d2d2d2;padding:7.4rem 6rem;">
                <h2 style="color:#657a82;font-family:'Playfair Display',serif;color:#53c5f1;font-weight:800;"> Contact Us</h3>

                    <form method="POST" id="addCussData" onsubmit="return validateForm()">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="write name" maxlength="20" oninput="this.value = this.value.toLowerCase().replace(/[^a-z ]/g, '').replace(/\s+/g, ' ');">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Mobile</label>
                            <input type="text" name="mobile" class="form-control" placeholder="mobile number" maxlength="10" length="10" oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="text" id="email" maxlength="20" name="email" class="form-control" placeholder="Enter Email-Id">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Address</label><br>
                            <textarea name="address" maxlength="50" class="form-control" id="" rows="1" oninput="this.value = this.value.toLowerCase().replace(/[^a-z0-9,. ]/g, '').replace(/\s+/g, ' ');" placeholder="Enter Full Address"></textarea>
                        </div>


                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Message</label><br>
                            <textarea name="message" class="form-control" id="" maxlength="50" cols="70" rows="2" oninput="this.value = this.value.toLowerCase().replace(/[^a-z ]/g, '').replace(/\s+/g, ' ');" placeholder="Write Message"></textarea>
                        </div>
                        <div class="mb-3" style="margin-top:2rem;">
                            <input type="submit" name="submit" onsubmit="return validateForm()" class="form-control btn btn-danger" style="background-color:#53c5f1 !important; border: 2px solid #53c5f1!important;">
                        </div>
                    </form>
            </div>
        </div>
    </div>
<?php endif; ?>

<!--====================contact section end==================================================== -->


<!--====================career  section start==================================================== -->
<?php

$contact1 = explode(",", $contact['contact_number']);
$email1 = explode(",", $contact['email']);

?>
<?php if ($menu_p['career'] != 0 && !empty($company)) : ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Our Address</h3>
                <h3><?php echo $company['company_name']; ?></h3>
                <p><?php echo $company['company_address']; ?></p>


                <?php foreach ($contact1 as  $contact1) : ?>
                    <p class="mb-2"> <i class="fa fa-phone"></i>&nbsp;<?php echo $contact1; ?></p>
                <?php endforeach; ?>

                <?php foreach ($email1 as  $email1) : ?>
                    <p class="mb-2"> <i class="fa fa-envelope"></i>&nbsp;<?php echo $email1; ?></p>
                <?php endforeach; ?>


            </div>
            <div class="col-md-6">
                <h3> Career</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis, culpa?</p>
                <form class="contact_form" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="write name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Mobile</label>
                        <input type="text" name="mobile" class="form-control" placeholder="mobile number">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="email">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Hiegest Education</label>
                        <select name="education" class="form-control" required>
                            <option value="Select One">Select One</option>
                            <option value="Matric">Matric</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Graduate">Graduate</option>
                            <option value="Post Graduate">Post Graduate</option>
                            <option value="B.Tech">B.Tech</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Passing Years</label>
                        <input type="text" name="Passing_year" class="form-control" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Experianced</label>
                        <select name="experienced" class="form-control" required>
                            <option value="Select One">Select One</option>
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Experianced Year</label>
                        <input type="text" name="experience_no_of_year" class="form-control" placeholder=" no of years">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Job Profile</label>
                        <select name="jop_profile" class="form-control" required>
                            <option value="Matric">Select One</option>
                            <option value="Devloper">Devloper</option>
                            <option value="Marketing Executive">Marketing Executive</option>
                            <option value="Seo Executive">Seo Executive</option>
                            <option value="Technical Support">Technical Support</option>
                            <option value="Hr">Hr</option>
                        </select>
                    </div>
                    <div class="mb-3">

                        <input type="submit" name="submit" class="form-control btn btn-danger">
                    </div>

                </form>
            </div>
        </div>
    </div>
<?php endif; ?>

<!--====================career section end==================================================== -->


<!--====================summernote section start==================================================== -->

<section class="wow zoomIn">
    <?php if ($menu_p['sumernote'] != 0 && !empty($summernote)) : ?>
        <div class="container">
            <div class="text-justify"><?php echo $summernote['content']; ?></div>
        </div>
    <?php endif; ?>
</section>

<!--====================summernote section end==================================================== -->

<!--====================summernote1 section start==================================================== -->
<?php if ($menu_p['sumernote1'] != 0 && !empty($summernote1)) : ?>
    <div class="container">
        <div class="text-justify"><?php echo $summernote1['content']; ?></div>
    </div>
<?php endif; ?>
<!--====================summernote1 section end==================================================== -->

<!--====================summernote2 section start==================================================== -->
<?php if ($menu_p['sumernote2'] != 0 && !empty($summernote2)) : ?>
    <div class="container">
        <div class="text-justify"><?php echo $summernote2['content']; ?></div>
    </div>
<?php endif; ?>
<!--====================summernote2 section end==================================================== -->


<!--====================map section start==================================================== -->
<section class="wow zoomIn">
<?php if ($menu_p['map'] != 0 && !empty($company)) : ?>
    <section style="margin:5rem 0rem 5rem 0rem;border:1px solid #d2d2d2;">
        <div class="">
            <iframe src="https://www.google.com/maps?q=<?php echo $company['company_address']; ?>&amp;output=embed" width="100%" height="400px;"></iframe>
        </div>
    </section>
<?php endif; ?>
</section>

<!--====================map section end==================================================== -->





<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&  -->

<!--Intro Section-->
<section class="subscribe-intro">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Column-->
            <div class="column col-md-9 col-sm-12 col-xs-12">
                <h2>Your Small Help Make World Better!</h2>
                Help us support their work – make a donation Teenage Cancer
            </div>
            <!--Column-->
            <div class="column col-md-3 col-sm-12 col-xs-12">
                <div class="text-right padd-top-20">
                    <a href="javaScript:void(0);" class="theme-btn btn-style-one" data-toggle="modal" data-target="#donate-popup">Donate Now</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&  -->






<?php include_once("include/footer.php") ?>
<?php include_once("include/js.php") ?>
<script>
    <?php echo $links['livechat']; ?>
</script>
<script src="<?php echo base_url() . 'media/js/website/index.js' ?>"> </script>


<script>
    $("#addCussData").on("submit", function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '<?= base_url() ?>Website/registration_1',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('#btn_reset').html('<i class="fa fa-cog bx-spin" aria-hidden="true"></i>&nbsp;&nbsp;Please Wait.....');
            },
            dataType: 'json',
            success: function(data) {
                toastMultiShow(data.adClas, data.msg, data.icon);
                if (data.adClas == 'tSuccess') {
                    $("#hidden-part").hide(); //(adCls,msg,icon)<i class=""></i>
                    window.location.reload(true);
                }
            }
        });
    });

    function validateForm() {
        var emailInput = $("#email").val();
        let emailValue = emailInput.split("@");
        // alert(emailValue[1]); 
        if (emailValue[1] == 'gmail.com') {
            return true;
        } else {
            emailInput.value = emailValue; // Update input with sanitized value
            emailInput.focus();
            alert('Please enter a valid Gmail address ending with @gmail.com.');
            return false; // Prevent form submission
        }
    }
</script>

</body>

</html>