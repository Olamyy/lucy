{include file='../../header.tpl'}
{include file='../../navmenu.tpl'}

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <div class="col-md-12 col-sm-6 sign-in">
                    <h4 class="">Sign Up</h4>
                    <p class="">Fill the form below to start..</p>
                    {if $error|default:''}
                        <div class="alert alert-danger">
                            <strong>Oops! Something went wrong</strong>
                            {foreach from=$error item=err}
                                <p>{$err}</p>
                            {/foreach}
                        </div>
                    {/if}
                    <form class="register-form outer-top-xs" role="form" method="post" action="{$BASE_URL}auth/join">
                        <input type="hidden" value="login" name="action">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                            <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                            <input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" >
                        </div>
                        <div class="sidebar-widget product-tag wow fadeInUp outer-top-vs">
                            <h3 class="section-title">Registry Type</h3>
                            <div class="sidebar-widget-body outer-top-xs">
                                <div class="tag-list"> <a class="item" title="Phone" id="wedding" href="#">Wedding</a>
                                    <a class="item" id="birthday">Birthday</a>
                                    <a class="item" id="anniv">Wedding Anniversary </a>
                                    <a class="item" id="houseWarming">House Warming</a>
                                    <a class="item" id="childNaming">Child Naming</a>
                                    <a class="item" id="lucky">Feeling Lucky</a>
                            </div>
                        </div>
                            <input type="hidden" id="regType" name="regType" value="">
                            <div class="social-sign-in outer-top-xs pull-right">
                            <a href="{$BASE_URL}auth/login" class="button btn-success"><i class=""></i>Click here to sign in</a>
                        </div>

                            <br>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{include file="../../footer.tpl"}