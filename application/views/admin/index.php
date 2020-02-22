<?php
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
                        <a href="<?php echo base_url('master/User/index');?>">
                            <div class="state-overview">
                                <div class="col-lg-4 col-sm-8">
                                    <div class="overview-panel blue">
                                        <div class="symbol">
                                            <i class="icon-people usr-clr"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="23">0</p>
                                            <p>USERS</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url('master/lawyer/index');?>">
                                <div class="col-lg-4 col-sm-8">
                                    <div class="overview-panel green-bgcolor">
                                        <div class="symbol">
                                            <i class="icon-docs"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="48">0</p>
                                            <p>CASES</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url('master/lawyer/index');?>">
                                <div class="col-lg-4 col-sm-8">
                                    <div class="overview-panel red">
                                        <div class="symbol">
                                            <i class="icon-graduation"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="48">0</p>
                                            <p>LAWYERS</p>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!-- end widget -->
                        <!-- chart start -->
                        <div class="row">
                            <div class="col-md-12">
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

          
</div>
<script type="text/javascript">
    $(document).ready(function(){
        load_chart();
    });
</script>
<?php $this->load->view('admin/footer');?>
                <!-- /Right-bar -->
