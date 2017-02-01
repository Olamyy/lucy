{include file='../../header.tpl'}
{include file='./nav.tpl'}


<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->
                <div class="col-md-12 col-sm-6 sign-in">
                    <h4 class="">Sign in</h4>
                    <p class="">Hello, sign in to continue to your wedding registry.</p>
                    {if $error|default:''}
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Oops! Something went wrong</strong>
                            {foreach from=$error item=err}
                                <p>{$err}</p>
                            {/foreach}
                        </div>
                    {/if}
                    <div class="social-sign-in outer-top-xs">
                        <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
                        <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
                    </div>
                    <form class="register-form outer-top-xs" role="form" method="post" action="{$BASE_URL}index.php/registry/auth/login">
                        <input type="hidden" value="login" name="action">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                            <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                            <input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" >
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign In</button>
                    </form>
                    <div class="social-sign-in outer-top-xs pull-right">
                        <a href="{$BASE_URL}index.php/registry/auth/join" class="button btn-success"><i class=""></i>Click here to sign up</a>
                    </div>
                </div>
                <!-- Sign-in -->

                <!-- create a new account -->

                <!-- create a new account -->			</div><!-- /.row -->
        </div><!-- /.sigin-in-->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->


        </div><!-- /.logo-slider -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
<!-- ============================================================= FOOTER ============================================================= -->

{include file='../couple/dashboard/footer.tpl'}
