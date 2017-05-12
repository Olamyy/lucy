{include file='../header.tpl'}
{include file='../navmenu.tpl'}
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
                    {if $user_session|default:''}
                    {/if}
                    <form class="register-form outer-top-xs" role="form" method="post" action="{$BASE_URL}registry/init/houseWarming">
                        <h4 class="">Event Details</h4>
                        <div class="form-group">
                            <label class="info-title" for="first_name">First Name<span>*</span></label>
                            <input type="text" name="first_name" required placeholder="Your first name"
                                   class="form-control unicase-form-control text-input" id="first_name" >
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="last_name">Last Name<span>*</span></label>
                            <input type="text" name="last_name" required placeholder="Your last name"
                                   class="form-control unicase-form-control text-input" id="last_name" >
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="groom_first_name">Venue</label>
                            <input type="text" name="venue" required placeholder="Event Venue(This is Optional)"
                                   class="form-control unicase-form-control text-input" id="venue" >
                        </div>
                        <br>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{include file="../footer.tpl"}