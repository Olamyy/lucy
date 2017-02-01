{include file='../../header.tpl'}
{include file='../../navmenu.tpl'}
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{$BASE_URL}index.php/">Home</a></li>
                <li><a href="{$BASE_URL}index.php/registry/couple/init">Details</a></li>
                <li class='active'>Finish</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->
                <div class="col-md-12 col-sm-6 sign-in">
                    <h4 class="">Start Your Registry</h4>
                    <p class="">Let's get to know you</p>
                    {if $error|default:''}
                        <div class="alert alert-danger">
                            <strong>Oops! Something went wrong</strong>
                            {foreach from=$error item=err}
                                <p>{$err}</p>
                            {/foreach}
                        </div>
                    {/if}
                    <form class="register-form outer-top-xs" role="form" method="post" action="{$BASE_URL}index.php/registry/couple/init/conclude">
                        <div class="form-group">
                        <label for="basic-url">Your registry URL<span>*</span></label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon3" style="color: grey">{$BASE_URL}index.php/registry/</span>
                            <input type="text" name="reg_url" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Your registry URL tag">
                        </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputPassword1">Wedding Date</label>
                            <input type="text" name="wedding_date" placeholder="DD-MM-YYYY"  class="form-control unicase-form-control text-input" id="wedding_date" >
                        </div>
                        <div class="form-group">
                            <input type="checkbox" aria-label="" id="NoDate"">
                            <label class="info-title" for="NoDat"">We haven't picked a date yet</label>
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Finish</button>
                    </form>
                </div>
                <!-- Sign-in -->

                <!-- create a new account -->

                <!-- create a new account -->			</div><!-- /.row -->
        </div><!-- /.sigin-in-->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->


    </div><!-- /.logo-slider -->
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
<!-- ============================================================= FOOTER ============================================================= -->

{include file="../../footer.tpl"}