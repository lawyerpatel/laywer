<div class="fixed">
    <section id="chatbot">
	    <div class="vertical-align">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-6 col-sm-offset-3 col-xs-offset-0">
	                    <div class="card no-border">
	                        <div id="chat">
	                            <form action="" method="GET" class="hidden">
	                                <input type="text" name="name" data-conv-question="Hello! How can I help you?" data-no-answer="true">
	                                 <select data-conv-question="What kind of legal issue are you facing?" name="first-question">
	                                    <option value="civil">civil</option>
	                                    <option value="commercial">commercial</option>
                                            <option value="statutory">statutory</option>
                                            <option value="common">common</option>
                                            <option value="criminal">criminal</option>
                                            <option value="family">family</option>
                                            <option value="property">property</option>
                                            <option value="tort">tort</option>
                                         </select>
                                        <input type="text" data-conv-question="Can I get your name Please?">
                                        <input data-conv-question="Kindly enter your E-mail ID Please..." data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" id="email" type="email" name="email" required placeholder="What's your e-mail?">
                                        <input type="text" data-conv-question="So can I get your location information Please?">
	                            </form>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
    </section>
</div>
<!-- Footer -->
<footer id="footer" class="footer pb-0 bg-deep">
    <div class="container pb-20">
        <div class="row multi-row-clearfix">
            <div class="col-sm-6 col-md-3">
                <div class="widget dark"> <img alt="" src="<?php echo base_url(); ?>fassets/images/logo-square.png">
                    <p class="font-12 mt-20 mb-10">MrLaw is a library of corporate and business templates with predefined web elements which helps you to build your own site. Lorem ipsum dolor sit amet, consectetur adipiscingyou to build elit.</p>
                    <a class="btn btn-default btn-transparent btn-xs btn-flat mt-15" href="#">Read more</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Archives</h5>
                    <ul class="list-divider list-border">
                        <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Vehicle Accidents</a></li>
                        <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Family Law</a></li>
                        <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Personal Injury</a></li>
                        <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Case Investigation</a></li>
                        <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Personal Injury</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">          
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Latest News</h5>
                    <div class="latest-posts">
                        <article class="post media-post clearfix pb-0 mb-10">
                            <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-5"><a href="#">Sustainable Construction</a></h5>
                                <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                        </article>
                        <article class="post media-post clearfix pb-0 mb-10">
                            <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
                                <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                        </article>
                        <article class="post media-post clearfix pb-0 mb-10">
                            <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-5"><a href="#">Storefront Installations</a></h5>
                                <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Quick Contact</h5>
                    <form id="footer_quick_contact_form" name="footer_quick_contact_form" class="quick-contact-form" action="http://thememascot.net/demo/html/mrlaw/v3/demo/includes/quickcontact.php" method="post">
                        <div class="form-group">
                            <input id="form_email" name="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <textarea id="form_message" name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                            <button type="submit" class="btn btn-default btn-transparent btn-xs btn-flat mt-0" data-loading-text="Please wait...">Send Message</button>
                        </div>
                    </form>

                    <!-- Quick Contact Form Validation-->
                    <script type="text/javascript">

                        $("#footer_quick_contact_form").validate({
                        submitHandler: function (form) {
                        var form_btn = $(form).find('button[type="submit"]');
                        var form_result_div = '#form-result';
                        $(form_result_div).remove();
                        form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                        var form_btn_old_msg = form_btn.html();
                        form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                        $(form).ajaxSubmit({
                        dataType: 'json',
                                success: function (data) {
                                if (data.status == 'true') {
                                $(form).find('.form-control').val('');
                                }
                                form_btn.prop('disabled', false).html(form_btn_old_msg);
                                $(form_result_div).html(data.message).fadeIn('slow');
                                setTimeout(function () {
                                $(form_result_div).fadeOut('slow')
                                }, 6000);
                                }
                        });
                        }
                        });
                    </script>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="horizontal-contact-widget dark mt-30 pt-30 text-center">
                    <div class="col-sm-12 col-sm-4">
                        <div class="each-widget"> <i class="pe-7s-phone font-36 mb-10 text-white"></i>
                            <h5 class="text-theme-colored">Call Us</h5>
                            <p class="text-white">Phone: <a href="#" class="text-white">+262 695 2601</a></p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-sm-4 mt-sm-50">
                        <div class="each-widget"> <i class="pe-7s-map font-36 mb-10 text-white"></i>
                            <h5 class="text-theme-colored">Address</h5>
                            <p class="text-white">121 King Street, Australia</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-sm-4 mt-sm-50">
                        <div class="each-widget"> <i class="pe-7s-mail font-36 mb-10 text-white"></i>
                            <h5 class="text-theme-colored">Email</h5>
                            <p><a href="#" class="text-white">you@yourdomain.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="list-inline social-icons icon-hover-theme-colored icon-gray icon-circled text-center mt-50 mb-30">
                    <li><a href="#"><i class="fa fa-facebook"></i></a> </li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a> </li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a> </li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a> </li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-black-222 p-20">
        <div class="row text-center">
            <div class="col-md-12">
                <p class="font-11 m-0">Copyright &copy;2015 ThemeMascot. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?php echo base_url(); ?>fassets/js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/common.js"></script>

<!-- convForm-master JS settings -->
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/autosize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/jquery.convform.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>fassets/js/chatbot.js"></script>

<script type="text/javascript">
                        function getEducations(){
                        return $("#ui_edu li").map(function() {
                        return $(this).data("edu");
                        }).get();
                        }
                        var count = 0;
                        $('body').on("click", ".addEdcution", function () {
                        var institutename = $("#institutename").val();
                        var education = $("#education_select").val();
                        var edu_inst = education + "|" + institutename;
                        var html = "<lable class='strokegap-icon strokegap-icon-House'>" + education + "</lable> - " +
                                "<lable class='strokegap-icon strokegap-icon-House'>" + institutename + "</lable>" +
                                "<a href='javascript:void(0);' class='clearitem' onclick='javascipt:$(this).parent().remove();'>x</a>";
                        var edu = $('<li></li>').html(html).data('edu', {education:education, institutename:institutename});
                        $('#ui_edu').append(edu);
                        var curr_edu_list = $("#edulist").val().split(",");
                        curr_edu_list.push(edu_inst);
                        $("#edulist").val(curr_edu_list.join())
                        });
                        $('body').on("click", ".addExpertiseInButton", function () {
                        var expertise_select = $("#expertise_select").val();
                        var experienceyear = $("#experienceyear").val();
                        var numberOfCase = $("#numberOfCase").val();
                        var exp_inst = expertise_select + "|" + experienceyear + "|" + numberOfCase;
                        var html = "<lable class='strokegap-icon strokegap-icon-House'>" + expertise_select + "</lable><br>" +
                                "<lable class='strokegap-icon strokegap-icon-House'>" + experienceyear + "</lable><br>" +
                                "<lable class='strokegap-icon strokegap-icon-House'>" + numberOfCase + "</lable><br>";
                        $(".primaryexp").prepend(html);
                        var curr_edu_list = $("#explist").val().split(",");
                        curr_edu_list.push(exp_inst);
                        $("#explist").val(curr_edu_list.join())
                        });
                        $('body').on("click", ".addExpertiseInButton", function(){
                        var experienceyear = $("#experienceyear")
                                var expertise_select = $("#expertise_select").val();
                        $(".primaryexp").prepend(html);
                        });
                        function yearsDiff(d1, d2) {
                        let date1 = new Date(d1);
                        let date2 = new Date(d2);
                        let yearsDiff = date2.getFullYear() - date1.getFullYear();
                        return yearsDiff;
                        }
                        $('body').on("change", ".month_select", function(){

                        var year = $("#year_select").val();
                        var month = $("#month_select").val();
                        var d = new Date();
                        var cy = d.getFullYear();
                        var cm = d.getMonth();
                        if (year != '' && month != ""){
                        let d1 = new Date(year, month, 01).getTime();
                        let d2 = new Date(cy, cm, 25).getTime();
                          / document.write(d2); /
                        let date1 = new Date(d1);
                        let date2 = new Date(d2);
                        let years = yearsDiff(d1, d2);
                        let months = (years * 12) + (date2.getMonth() - date1.getMonth());
                        let y = months / 12;
                        let m = months % 12;
                        $("#experienceText").val(Math.floor(y) + " Year " + m + " Months ");
                        //  alert("y"+y+"m"+m);

                        } else{
                        $("#year_select").val('');
                        $("#month_select").val('');
                        }
                        });

</script>

</body>

</html>