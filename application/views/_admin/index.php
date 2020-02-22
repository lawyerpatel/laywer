<?php error_reporting(0); 
$this->load->view('admin/header');?>
<div class="page-container">
            <?php $this->load->view('admin/slider');?>

            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ====================================== ======================== -->
              
                <!-- start page content -->
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="page-bar">
                            <div class="page-title-breadcrumb">
                                <div class=" pull-left">
                                    <div class="page-title">Dashboard</div>
                                </div>
                                <ol class="breadcrumb page-breadcrumb pull-right">
                                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                        <!-- start widget -->
                        <div class="row">
                            <div class="state-overview">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="overview-panel blue">
                                        <div class="symbol">
                                            <i class="fa fa-users usr-clr"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="23">0</p>
                                            <p>APPOINTMENTS</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="overview-panel green-bgcolor">
                                        <div class="symbol">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="48">0</p>
                                            <p>NEW LAWYER</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="overview-panel grey">
                                        <div class="symbol">
                                            <i class="fa fa-heartbeat"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="14">0</p>
                                            <p>TODAY'S OPT</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="overview-panel orange">
                                        <div class="symbol">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="3421">0</p><span>$</span>
                                            <p>Lawyer Earning</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end widget -->
                        <!-- chart start -->
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card card-topline-aqua">
                                    <div class="card-head">
                                        <header>LAWYER SURVEY</header>
                                        <div class="tools">
                                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                        </div>
                                    </div>
                                    <div class="card-body no-padding height-9">
                                        <div class="row">
                                            <canvas id="chartjs_line"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-topline-aqua">
                                    <div class="card-head">
                                        <header>LAWYER SURVEY</header>
                                        <div class="tools">
                                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                        </div>
                                    </div>
                                    <div class="card-body no-padding height-9">
                                        <div class="row">
                                            <canvas id="chartjs_polar"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Chart end -->                                                
                    </div>
                </div>
                <!-- end page content -->
                <!-- start chat sidebar -->
                <div class="chat-sidebar-container" data-close-on-body-click="false">
                    <div class="chat-sidebar">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                                    <span class="badge badge-danger">4</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab"> <i class="icon-settings"></i> Settings
                                </a>
                            </li>
                        </ul>                        
                    </div>
                </div>
                <!-- end chat sidebar -->

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
                <!-- Right Sidebar -->
</div>
<?php $this->load->view('admin/footer');?>
                <!-- /Right-bar -->
