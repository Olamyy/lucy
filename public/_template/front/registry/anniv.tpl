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
                    <form class="register-form outer-top-xs" role="form" method="post" action="{$BASE_URL}registry/init/anniv">
                        <h4 class="">Profile Details</h4>
                        <div class="form-group">
                            <label class="info-title" for="name">Family Name<span>*</span></label>
                            <input type="text" name="name" required placeholder="Name"
                                   class="form-control unicase-form-control text-input" id="name" >
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="venue">Event Venue</label>
                            <input type="text" name="venue" required placeholder="Venue(Optional)"
                                   class="form-control unicase-form-control text-input" id="venue" >
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="years_of_marriage">Marriage Years<span>*</span></label>
                            <input type="text" name="years_of_marriage" required placeholder="Years of Marriage(Optional)"
                                   class="form-control unicase-form-control text-input" id="years_of_marriage" >
                        </div>
                        <br>
                        <h4 class="">Email Details</h4>
                        <div class="form-group">
                            <label class="info-title" for="spouse_email">Your email <span>*</span></label>
                            <input type="email" name="email"  placeholder="This is optional"  class="form-control unicase-form-control text-input" id="email" >
                        </div>
                        <br>
                        <h4 class="">Registry Details</h4>
                        <br>
                        <label for="basic-url">Your registry URL<span>*</span></label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon3" style="color: grey">{$BASE_URL}index.php/registry/</span>
                            <input type="text" name="registry_url_tag" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Your registry URL tag">
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="info-title" for="event_date">Event Date</label>
                            <input type="text" name="event_date" placeholder="DD-MM-YYYY"  class="form-control unicase-form-control text-input" id="event_date" >
                        </div>
                        <div class="form-group">
                            <input type="checkbox" aria-label="" id="NoDate">
                            <label class="info-title" for="NoDat">I haven't picked a date yet</div>
                </div>
                        <br>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Create Registry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{include file="../footer.tpl"}