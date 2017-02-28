{include file="./header.tpl"}
{include file="./nav.tpl"}

<!-- ============================================== HEADER : END ============================================== -->

{foreach from=$user_session item=session key=eKey}
    <input type="hidden" value="{$session.groom_last_name}" name="couple_id" id="couple">
{/foreach}

<form>
    <input type="hidden" name="name" value="{$session.couple_id}" id="couple_id" class="couples-name">
    <input type="hidden" id="base_url" value="{$BASE_URL}" />
</form>

<div id="carts" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-background">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Your Cart</h3>
            </div>
            <div class="modal-body preview-modal-body">
                <h4 class="text-center"><br><br><br><br>You have nothing in your cart. Get shopping!</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ============================================== HEADER : END ============================================== -->
<div class="preview_bg"  style="background-image: url('{$session.dashboard_image}');">
    <div class="preview-display-name">{$session.groom_first_name} & {$session.bride_first_name}</div>
    <div class="preview-display-date">{if empty($session.wedding_date)}Date is coming soon{else}{$session.wedding_date}{/if}</div>
</div>

<br>
<br>

 <div class="product-tabs inner-bottom-xs">
            <div class="row">
                <div class="col-sm-12">
                    <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                        <li class="active"><a data-toggle="tab" href="#description">VOWS</a></li>
                        <li><a data-toggle="tab" href="#review">VOTE OF THANKS</a></li>
                    </ul><!-- /.nav-tabs #product-tabs -->
                </div>
                <div class="col-sm-12">

                    <div class="tab-content">

                        <div id="description" class="tab-pane in active">
                            <div class="product-tab">
                                <p class="text"  id="Vmessage">
                                    <br><br>{if empty($session.vow_message)}Share your love with the world ....
                                    {else}{$session.vow_message}{/if}<br><br></p>
                            </div>
                        </div><!-- /.tab-pane -->

                        <div id="review" class="tab-pane">
                            <div class="product-tab">
                                <div class="product-tab">
                                    <p class="text" id="Tmessage">
                                        <br><br>{if empty($session.vote_of_thanks)}Got anyone you'd like to thank? ....
                                        {else}{$session.vote_of_thanks}{/if}<br><br></p>
                                </div>
                            </div><!-- /.product-tabs -->
                        </div>

                        <br>
                        <br>
                        <hr>
                        {if $user_products|default:''}

                            <input type="hidden" id="base_url" value="{$BASE_URL}">
                            <input type="hidden" id="quantity" value="1">
                            <input type="hidden" id="user_ip" value="{$ip}">


                            <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                                <div class="more-info-tab clearfix ">
                                    {assign var="current_url" value=$smarty.server.HTTP_HOST}
                                    {assign var="page_url" value=$smarty.server.REQUEST_URI}
                                    {assign var="current_page" value=$current_url|cat:$page_url}
                                    <h3 class="new-product-title pull-left">
                                        Products in Registry</h3>
                                    <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                                    </ul>
                                    <!-- /.nav-tabs -->
                                </div>
                                <div class="tab-content outer-top-xs">
                                    <div class="tab-pane in active" id="all">
                                        <div class="product-slider">
                                            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                                {foreach from=$user_products item=user_product key=eKey}
                                                    {foreach from=$user_product item=user_pro key=eKey}
                                                        <input type="hidden" value="{$user_pro.product_id}" id="product_id">
                                                        <div class="item item-carousel">
                                                            <div class="products">
                                                                <div class="product">
                                                                    <div class="product-image">
                                                                        <div class="image"> <a href="{$BASE_URL}product?product_id={$user_pro.product_id}"><img  src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$user_pro.image}" alt=""></a> </div>
                                                                        <!-- /.image -->

                                                                        <div class="tag new"><span>new</span></div>
                                                                    </div>
                                                                    <!-- /.product-image -->

                                                                    <div class="product-info text-left">
                                                                        <h3 class="name"><a href="{$BASE_URL}product?product_id={$user_pro.product_id}">{$user_pro.name|capitalize}</a></h3>
                                                                        <div class="rating rateit-small"></div>
                                                                        <div class="description"></div>
                                                                        <div class="product-price"> <span class="price">&#8358;{$user_pro.price}</span></div>
                                                                        <!-- /.product-price -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product -->
                                                                <div class="">
                                                                    <div class="action">
                                                                        <ul class="list-unstyled">
                                                                            <li class="add-cart-button btn-group">
                                                                                <button class="btn btn-success cart_add" type="button">Add to cart</button>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- /.action -->
                                                                </div>
                                                            </div>
                                                            <!-- /.products -->
                                                        </div>
                                                    {/foreach}
                                                {/foreach}
                                                <!-- /.item -->
                                            </div>
                                            <!-- /.home-owl-carousel -->
                                        </div>
                                        <!-- /.product-slider -->
                                    </div>
                                    <!-- /.tab-pane -->
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div>
                        {/if}

                        </section><!-- /.section -->
                    </div>
{include file="./footer.tpl"}