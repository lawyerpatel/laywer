<?php $this->load->view('header');?>
<body class="">
<div id="wrapper">
  <!-- start main-content -->
  <div class="main-content"> 
    <!-- Section: home -->
    <section id="home" class="divider bg-lighter">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-push-3">
                <div class="text-center mb-60"><a href="#" class=""><img alt="" src="<?php echo base_url(); ?>fassets/images/logo-wide.png"></a></div>
                <h4 class="text-theme-colored mt-0 pt-5" style="text-align: center;"> Login</h4>
                <form name="login-form" class="clearfix" action="<?php echo base_url(); ?>home/dologin" method="post">
                  <select name="usertype" id ="user_type" class=" form-control" data-validation="required" data-validation-error-msg="Please select your Gender" tabindex="12">
                           <option value="lawyer" >Lawyer</option>
                           <option value="client" >Client</option>
                  </select>                    
                    <div class="row">
                    <div class="form-group col-md-12">
                      <label for="form_username_email">Username</label>
                      <input id="form_username_email" name="username" class="form-control" type="email" placeholder="Enter User Email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="form_password">Password</label>
                      <input id="form_password" name="password" class="form-control" type="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="checkbox pull-left mt-15">
                    <label for="form_checkbox">
                      <input id="form_checkbox" name="form_checkbox" type="checkbox">
                      Remember me </label>
                  </div>
                  <div class="form-group pull-right mt-10">
                    <button type="submit" class="btn btn-dark btn-sm">Login</button>
                  </div>
                     <!--<input type="submit" name='login' value = "Log In"  class="btn btn-primary" onclick="return valid();">-->
                       
                  <div class="clear text-center pt-10">
                    <a class="text-theme-colored font-weight-600 font-12" href="#">Forgot Your Password?</a>
                  </div>
<!--                  <div class="clear text-center pt-10">
                    <a class="btn btn-dark btn-lg btn-block no-border mt-15 mb-15" href="#" data-bg-color="#3b5998">Login with facebook</a>
                    <a class="btn btn-dark btn-lg btn-block no-border" href="#" data-bg-color="#00acee">Login with twitter</a>
                  </div>-->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
 
  <script type="text/javascript">
                        function valid(){
                            return true;
                        }
</script>