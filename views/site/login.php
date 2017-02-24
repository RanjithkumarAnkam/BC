<section class="page-content">
<div class="page-content-inner single-page-login-alpha" style="background-image: url(<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/login-background.jpg)">

    <!-- Login Alpha Page -->
    <div class="single-page-block-header">
        <div class="row">
            <div class="col-lg-4">
                <div class="logo">
                    <a href="javascript: history.back();">
                        <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/benefit-clients-logo.png" alt="Benefit Client Template" />
                    </a>
                </div>
            </div>
          
        </div>
    </div>
    <div class="single-page-block">
        <div class="row">
            <div class="col-xl-12">
                <div class="">
                    
                </div>
                <div class="single-page-block-inner">
                    <div class="single-page-block-form">
                        <h3 class="text-center">
                            <i class="icmn-enter margin-right-10"></i>
                            Login Form
                        </h3>
                        <br />
                        <form id="form-validation" name="form-validation" method="POST">
                            <div class="form-group">
                                <label class="form-label">Username</label>
                                <input id="validation-email"
                                       class="form-control"
                                       placeholder="Email or Username"
                                       name="validation[email]"
                                       type="text"
                                       data-validation="[EMAIL]">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input id="validation-password"
                                       class="form-control password"
                                       name="validation[password]"
                                       type="password" data-validation="[L>=6]"
                                       data-validation-message="$ must be at least 6 characters"
                                       placeholder="Password">
                            </div>
                            <div class="form-group">
                                <a href="javascript: void(0);" class="pull-right link-blue link-underlined">Forgot Password?</a>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="example6" checked>
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary width-150">Sign In</button>
                                <span class="register-link">
                                    <a href="" class="link-blue link-underlined">Register</a> if you don't have account
                                </span>
                            </div>
                            <div class="form-group">
                                <div class="social-login">
                                    <span class="title">
                                        Use another service to Log In
                                    </span>
                                    <div class="social-container">
                                        <a href="javascript: void(0);" class="btn btn-icon">
                                            <i class="icmn-facebook"></i>
                                        </a>
                                        <a href="javascript: void(0);" class="btn btn-icon">
                                            <i class="icmn-google"></i>
                                        </a>
                                        <a href="javascript: void(0);" class="btn btn-icon">
                                            <i class="icmn-windows"></i>
                                        </a>
                                        <a href="javascript: void(0);" class="btn btn-icon">
                                            <i class="icmn-twitter"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="single-page-block-footer text-center">
        <ul class="list-unstyled list-inline">
            <li><a href="javascript: void(0);">Sky Insurance Technologies 2017
18 Interchange Blvd, Greenville
SC 29615</a></li>
            <li class="active"><a href="javascript: void(0);">User Agreement</a></li>
            <li><a href="javascript: void(0);">Privacy Policy</a></li>
            <li><a href="javascript: void(0);">Contact Us</a></li>
            <li><a href="javascript: void(0);">Help</a></li>
            <li><a href="javascript: void(0);">Subscribe</a></li>
        </ul>
    </div>
    <!-- End Login Alpha Page -->

</div>
	<?php $this->registerJs("  $(function() {

        // Add class to body for change layout settings
        $('body').addClass('single-page');

        // Form Validation
        $('#form-validation').validate({
            submit: {
                settings: {
                    inputContainer: '.form-group',
                    errorListClass: 'form-control-error',
                    errorClass: 'has-danger'
                }
            }
        });

        // Show/Hide Password
        $('.password').password({
            eyeClass: '',
            eyeOpenClass: 'icmn-eye',
            eyeCloseClass: 'icmn-eye-blocked'
        });

    });");?>
	
	<!-- End Page Scripts -->
</section>

<div class="main-backdrop">
	<!-- -->
</div>