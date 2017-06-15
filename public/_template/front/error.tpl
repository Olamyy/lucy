{include file='./header.tpl'}

{include file="./errornav.tpl"}

<div class="body-content outer-top-bd">
    <div class="container">
        <div class="x-page inner-bottom-sm">
            <div class="row">
                <div class="col-md-12 x-text text-center">
                    <h1>404</h1>
                    <p>We are sorry, the page you've requested is not available. </p>
                    <form role="form" class="outer-top-vs outer-bottom-xs">
                        <input placeholder="Search" autocomplete="off">
                        <button class="  btn-default le-button">Go</button>
                    </form>
                    <a href="{$BASE_URL}auth/login"><i class="fa fa-home"></i> Go To Your Registry</a>
                </div>
            </div>
        </div>
    </div>
</div>

{include file="./errorfoot.tpl"}