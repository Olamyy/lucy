
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div id="hero">
        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            {if $banner|default:''}
                    {foreach from=$banner item=banners}
                        <div class="item" style="background-image: url({$BASE_URL}{$SMARTY_VIEW_FOLDER}/front/assets/images/banners/{$banners});">
                        </div>
                    {/foreach}
                </div>
            {/if}
        </div>
    </div>
    </div>
    </div>

    <br>
    <br>
    <br>
    <br>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h2 class="text-center">This is going to be fun. We wish we were you right now.</h2>
    <div class="row">
        <div class="col-md-6 pull-left text-center">
            <a href="{$BASE_URL}auth/join"><button class="pull-right btn-reg">create registry</button></a>
        </div>
        <div class="col-md-6">
            <a href="{$BASE_URL}auth/login"><button class="pull-left btn-find">Go to my registry</button></a>
        </div>
    </div>
</div>

<div class="container benefit-main-wrapper">
    <div class="col-md-12 benefit-wrapper">
        <h1 class="text-center">Lucy Registry Benefits</h1>
        <div class="row">
            <a href="#" target="_self" class="col-xs-12 col-sm-6 col-md-4 benefit-block">
                <div class="benefit-content">
                    <h3 class="text-center">
                        <div class="glyphicon glyphicon-gift"></div>
                        <br>
                        Wedding Registry</h3>
                    <p class="text-center text-muted">Wedding Registry Description</p>
                    <p class="text-center">
                    </p>
                </div>
            </a>
            <a href="#" target="_self" class="col-xs-12 col-sm-6 col-md-4 benefit-block">
                <div class="benefit-content">
                    <h3 class="text-center">
                        <div class="glyphicon glyphicon-gift"></div>
                        <br>
                        House Warming</h3>
                    <p class="text-center text-muted">House Warming  Description</p>
                    <p class="text-center">
                    </p>
                </div>
            </a>
            <a href="#" target="_self" class="col-xs-12 col-sm-6 col-md-4 benefit-block">
                <div class="benefit-content">
                    <h3 class="text-center">
                        <div class="glyphicon glyphicon-gift"></div>
                        <br>
                        Anniversary</h3>
                    <p class="text-center text-muted">Anniversary Registry Description</p>
                    <p class="text-center">
                    </p>
                </div>
            </a>
            <a href="#" target="_self" class="col-xs-12 col-sm-6 col-md-4 benefit-block">
                <div class="benefit-content">
                    <h3 class="text-center">
                        <div class="glyphicon glyphicon-gift"></div>
                        <br>
                        Birthday</h3>
                    <p class="text-center text-muted">Birthday registry description.</p>
                    <p class="text-center">
                    </p>
                </div>
            </a>
            <a href="#" target="_self" class="col-xs-12 col-sm-6 col-md-4 benefit-block">
                <div class="benefit-content">
                    <h3 class="text-center">
                        <div class="glyphicon glyphicon-gift"></div>
                        <br>
                        Baby Shower</h3>
                    <p class="text-center text-muted">Naming registry description.</p>
                    <p class="text-center">
                    </p>
                </div>
            </a>
            <a href="#" target="_self" class="col-xs-12 col-sm-6 col-md-4 benefit-block">
                <div class="benefit-content">
                    <h3 class="text-center">
                        <div class="glyphicon glyphicon-gift"></div>
                        <br>
                        Lucky</h3>
                    <p class="text-center text-muted">Lucky registry description</p>
                    <p class="text-center">
                    </p>
                </div>
            </a>

        </div>

    </div>
</div>