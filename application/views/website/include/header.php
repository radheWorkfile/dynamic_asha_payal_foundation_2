<div class="page-wrapper">
    <div class="preloader"></div>

    <header class="header-style-two">
        <div class="header-top"> 
            <div class="auto-container clearfix">
                <div class="logo">
                    <a href="index.php"> <img src="<?php echo base_url() . "uploads/logo/" . $logo['logo']; ?>" alt="" style="height:8rem;"></a>
                </div>
                <div class="info-outer">
                    <div class="info-box">
                        <div class="icon"><span class="flaticon-computer"></span></div>
                        <strong>EMAIL</strong>
                        <a href="mailto:ashapayalfoundation@gmail.com" style="color:white;">ashapayalfoundation@gmail.com</a>
                    </div>
                    <!--Info Box-->
                    <div class="info-box">
                        <div class="icon"><span class="flaticon-technology-5"></span></div>
                        <strong>Call Now</strong>
                        <a class="phone" href="tel:9430598940">+91 9430598940</a>
                    </div>
                    <!--Info Box-->
                    <div class="info-box social-box">
                        <div class="social-links clearfix">
                            <a href="https://www.facebook.com/" target="_blank" class="facebook img-circle"><span class="fa fa-facebook-f"></span></a>
                            <a href="https://www.twitter.com/" target="_blank" class="twitter img-circle"><span class="fa fa-twitter"></span></a>
                            <a href="javaScript:void(0);" target="_blank" class="google-plus img-circle"><span class="fa fa-google-plus"></span></a>
                            <a href="https://www.linkedin.com/" target="_blank" class="linkedin img-circle"><span class="fa fa-linkedin"></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- Header Top End -->



        <!-- Lower Part -->
        <div class="lower-part"id="sticky">
            <div class="auto-container clearfix">

                <!--Outer Box-->
                <div class="outer-box clearfix">

                    <!--Btn Box-->
                    <div class="btn-box">
                        <a href="javaScript:void(0);" class="theme-btn donate-btn" data-toggle="modal" data-target="#donate-popup">Donate Now!</a>
                    </div>

                    <!-- Main Menu -->
                    <nav class="main-menu">

                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation">
                            <?php foreach ($menu as $m) : ?>
                                <li class="<?php echo ($m['child']>0)?'dropdown':'';?>"><a href="<?php echo base_url()."Website/page/{$m['id']}";?>"><?php echo $m["menu"]; ?></a>
                                    <ul>
                                    <?php foreach ($submenu as $sm) : ?>                                        
                                        <li><a href="<?php echo base_url()."Website/sub_page/{$m['id']}/{$sm['id']}";?>"><?php echo $sm['sub_menu'];?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                               
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->

                </div>
            </div>
        </div><!-- Lower Part End-->

    </header><!--End Main Header -->