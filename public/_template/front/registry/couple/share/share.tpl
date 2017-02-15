{include file='../../../header.tpl'}
{include file='../../couple/dashboard/nav.tpl'}

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->
                <div class="col-md-12 col-sm-6 sign-in">
                    <h4 class="">Registry Sharer</h4>
                    <p class="">Select on option to share</p>
                    {if $error|default:''}
                        <div class="alert alert-danger">
                            <strong>Oops! Something went wrong</strong>
                            {foreach from=$error item=err}
                                <p>{$err}</p>
                            {/foreach}
                        </div>
                    {/if}
                    <input type="email" name="email" class="form-control disabled" disabled  id="exampleInputEmail1">
                    <div class="social-sign-in outer-top-xs">
                        <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i>Share on Facebook</a>
                        <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i>Share on Twitter</a>
                    </div>
                    <hr>
                        <p class="">Share via email</p>
                        <input type="hidden" value="login" name="action">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                            <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
                        </div>
                        <div class="social-sign-in outer-top-xs pull-right">
                            <button type="submit" class="button btn-sm btn-primary"><i class=""></i>Share Registry</button>
                        </div>
                        <button class="btn-upper btn btn-success" id="extra_email">Add new email</button>
                        <button class="btn-upper btn btn-warning" id="remove_extra">Remove Last Email</button>
                </div>
                <!-- Sign-in -->

                <!-- create a new account -->

                <!-- create a new account -->			</div><!-- /.row -->
        </div><!-- /.sigin-in-->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->


    </div><!-- /.logo-slider -->
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
<!-- ============================================================= FOOTER ============================================================= -->

{include file="./footer.tpl"}