{include file='../../header.tpl'}
{include file='../../navmenu.tpl'}
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{$BASE_URL}">Home</a></li>
                <li><a href="{$BASE_URL}registry">Registry</a></li>
                <li class='active'>Couple Details</li>
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
                    <form class="register-form outer-top-xs" role="form" method="post" action="{$BASE_URL}registry/InitCouple">
                        <div class="form-group">
                            <h4 class="">Groom Details</h4>
                            <label class="info-title" for="groom_first_name">First Name<span>*</span></label>
                            <input type="text" name="groom_first_name" required placeholder="Groom's first name" class="form-control unicase-form-control text-input" id="groom_first_name" >
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="groom_last_name">Last Name<span>*</span></label>
                            <input type="text" name="groom_last_name" required placeholder="Groom's last name"  class="form-control unicase-form-control text-input" id="groom_last_name" >
                        </div>
                        <hr>
                        <div class="form-group">
                        <h4 class="">Partner Details</h4>
                        <label class="info-title" for="spouse_first_name">First Name<span>*</span></label>
                        <input type="text" name="spouse_first_name"  placeholder="Bride's first name" required class="form-control unicase-form-control text-input" id="spouse_first_name" >
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="spouse_last_name">Last Name<span>*</span></label>
                            <input type="text" name="spouse_last_name" placeholder="Bride's last name" required class="form-control unicase-form-control text-input" id="spouse_last_name" >
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="spouse_email">Partner email</label>
                            <input type="email" name="spouse_email"  placeholder="This is optional"  class="form-control unicase-form-control text-input" id="spouse_email" >
                        </div>
                        <br>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Next</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
{include file="../../footer.tpl"}