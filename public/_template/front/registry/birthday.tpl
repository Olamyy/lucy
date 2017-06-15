{include file='../header.tpl'}
{include file='../navmenu.tpl'}
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{$BASE_URL}">Home</a></li>
                <li><a href="{$BASE_URL}registry">Registry</a></li>
                <li class='active'>Registry Details</li>
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
                    <form class="register-form outer-top-xs" role="form" method="post" action="{$BASE_URL}registry/init/birthday">
                        <h4 class="">Profile Details</h4>
                        <div class="form-group">
                            <label class="info-title" for="name">Your name<span>*</span></label>
                            <input type="text" name="name" required placeholder="First and last name"
                                   class="form-control unicase-form-control text-input" id="name" >
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="name">Event Venue</label>
                            <input type="text" name="venue" required placeholder="Venue(Optional)"
                                   class="form-control unicase-form-control text-input" id="venue" >
                        </div>

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
                            <label class="info-title" for="event_date">{if $user_session[0].regType =='wedding'}Wedding {else}Event {/if} Date</label>
                            <input type="text" name="event_date" placeholder="DD-MM-YYYY"  class="form-control unicase-form-control text-input" id="event_date" >
                        </div>

                        <div class="form-group">
                            <input type="checkbox" aria-label="" id="NoDate">
                            <label class="info-title" for="NoDate">{if $user_session[0].regType =='wedding'}We {else}I {/if}haven't picked a date yet</div>
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