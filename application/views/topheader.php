<body class="has-side-panel side-panel-right fullwidth-page side-push-panel">

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-top bg-deep sm-text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="widget no-border m-0">
                            <ul class="social-icons icon-sm sm-text-center">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="widget no-border m-0">
                            <ul class="list-inline pull-right sm-pull-none sm-text-center mt-5">


                                <?php if (isset($result) && $result != "false") { ?>
                                    <li class="m-0 pl-10 pr-10"><font color="red" >Invalid User..Please try agains!</font></li>
                                <?php } ?>

                                <?php if (!isset($_SESSION['username']) && trim($_SESSION['username']) == '') { ?>    
                                    <li class="sm-display-block mt-sm-10 mb-sm-10">

                                        <a class="bg-theme-colored p-5 text-white font-11 pl-10 pr-10" href="<?php echo base_url(); ?>home/login">Login</a>
                                        <a class="bg-theme-colored p-5 text-white font-11 pl-10 pr-10" href="<?php echo base_url(); ?>home/c_registration">cRegistration</a>
                                        <a class="bg-theme-colored p-5 text-white font-11 pl-10 pr-10" href="<?php echo base_url(); ?>home/l_registration">lRegistration</a>
                                    </li>
                                <?php } else { ?>        
                                    <li class="m-0 pl-10 pr-10"><font color="red" >welcome <?php echo $_SESSION['username']; ?></font></li>
                                    <li class="sm-display-block mt-sm-10 mb-sm-10">         
                                        <a class="bg-theme-colored p-5 text-white font-11 pl-10 pr-10" href="<?php echo base_url(); ?>home/logout">Logout</a>
                                    </li>
                                <?php } ?>                       

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="header-nav-wrapper navbar-scrolltofixed bg-lightest">
                <div class="container">
                    <nav>
                        <div id="menuzord-right" class="menuzord red"> <a class="menuzord-brand" href="javascript:void(0)"><img src="<?php echo base_url(); ?>fassets/images/logo-wide.png" alt=""></a>
                            <ul class="menuzord-menu">
                                <li class="active"><a href="<?php echo base_url(); ?>home">Home</a></li>
                                <li><a href="<?php echo base_url(); ?>home/lawyer">Lawyer</a></li>
                                <li><a href="#">Pages</a></li>
                                <li><a href="#">Profile</a>
                                  <ul class="dropdown">
                                    <li><a href="<?php echo base_url(); ?>home/finalProfile">Edit Profile</a></li>
                                    <li><a href="<?php echo base_url(); ?>home/logout">Logout</a></li>
                                  </ul>
                                </li>
                                <li><a href="#">Attorneys</a> </li>

                            </ul>
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>