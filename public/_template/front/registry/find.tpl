{include file="../header.tpl"}
{include file='../navmenu.tpl'}

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->
                <div class="col-md-12 col-sm-6 sign-in">
                    <h4 class="">Find a registry</h4>
                    <p class="">Enter a registry detail below to find.</p>
                    {if $error|default:''}
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Oops! Something went wrong</strong>
                            {foreach from=$error item=err}
                                <p>{$err}</p>
                            {/foreach}
                        </div>
                    {/if}
                    <form class="register-form outer-top-xs" role="form" method="post" action="{$BASE_URL}registry/find">
                        <input type="hidden" value="login" name="action">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Registry Detail<span>*</span></label>
                            <input type="text" name="registry_search_query" placeholder="You can search by registry name or couples email." class="form-control unicase-form-control text-input">
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Search</button>
                    </form>
                </div>
                <!-- Sign-in -->

                <!-- create a new account -->

                <!-- create a new account -->			</div><!-- /.row -->
        </div><!-- /.sigin-in-->

    </div><!-- /.logo-slider -->

</div><!-- /.container -->

{if $registry_search_details|default:''}
<br>
<div class="body-content">
    <div class="container">
        <div class="my-wishlist-page">
            <div class="row">
                <div class="col-md-12 my-wishlist">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th colspan="4" class="heading-title">Search Results</th>
                            </tr>
                            </thead>
                            <tbody>
                            {foreach from=$registry_search_details item=data key=eKey}
                            <tr>
                                <td class="col-md-3"><img src="{$data.dashboard_image}" alt="imga"></td>
                                <td class="col-md-5">
                                    <div class="product-name"><a href="#">{$data.groom_first_name} & {$data.bride_first_name}</a></div>
                                </td>
                                <td class="col-md-7">
                                    <div class="product-name"> Wedding Date : {$data.wedding_date}</div>
                                </td>
                                <td class="col-md-2">
                                    <a href="{$BASE_URL}{$data.registry_url_tag}" class="btn-upper btn btn-primary">Visit Registry</a>
                                </td>
                            </tr>
                            {/foreach}
                            </tbody>
                        </table>
                    </div>
                </div>			</div><!-- /.row -->
        </div>
    </div>
</div>
{/if}
{include file="../registry/couple/share/footer.tpl"}