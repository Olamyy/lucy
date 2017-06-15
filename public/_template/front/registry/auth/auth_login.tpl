{include file='../../header.tpl'}
{include file='../../navmenu.tpl'}

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <div class="col-md-12 col-sm-6 sign-in">
                    <h4 class="">Sign in</h4>
                    <p class="">Hello, sign in to continue to your registry.</p>
                    {if $error|default:''}
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Oops! Something went wrong</strong>
                            {foreach from=$error item=err}
                                <p>{$err}</p>
                            {/foreach}
                        </div>
                    {/if}
                    <form class="register-form outer-top-xs" role="form" method="post" action="{$BASE_URL}index.php/auth/login?redirect={if $session[0].from|default:'' == "create_nav"}init{else}{/if}">
                        <input type="hidden" value="login" name="action">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                            <input type="email" name="email" class="form-control unicase-form-control email-field">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                            <input type="password" name="password" class="form-control unicase-form-control text-input">
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign In</button>
                    </form>

                    <div class="social-sign-in outer-top-xs">
                        <a href="{$BASE_URL}auth/FBLogin" class="facebook-sign-in"><i class="fa fa-facebook"></i>Sign in with Facebook</a>
                        <a href="{$BASE_URL}auth/TWLogin/redirect" class="twitter-sign-in"><i class="fa fa-twitter"></i>Sign in with Twitter</a>
                    </div>
                    <br>
                    <div class="social-sign-in outer-top-xs pull-right">
                        <a href="{$BASE_URL}auth/join" class="button btn-success"><i class=""></i>Click here to sign up</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
{include file='../couple/dashboard/footer.tpl'}
