{include file="./header.tpl"}
{include file="./nav.tpl"}

{foreach from=$complete_details item=_user}

<form>
    <input type="hidden" name="name"  value="{$_user.user_id}" id="user_id" class="couples-name">
    <input type="hidden" id="base_url" value="{$BASE_URL}" />
    <input type="hidden" id="dashboard_image" value="{$_user.dashboard_image}" />
    <input type="hidden" id="base_dashboard_image" value="{$BASE_URL}public/_template/uploads/files/{$_user.base_dashboard_image}" />
</form>

<div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <h2 class="test"></h2>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container-fluid main-couple-img">
                    <button type="button" class="edit-btn" data-toggle="modal" data-target="#backgrounds">
                        edit background
                    </button>
                    <form action="" class="couples-form">
                        <input type="text" name="name" id="name" class="couples-name">
                        <span class="name-display">
                            {if $_user.regType == 'wedding'}{$_user.groom_first_name} & {$_user.bride_first_name}{elseif $_user.regType == 'anniv'}Mr & Mrs {$_user.name}{else}{$_user.name}{/if}
                        </span>
                    </form>
                </div>
                <h2 class="name-display" style="font-size: small; padding-top: 80px;">{if empty($_user.event_date)}Date is coming soon{else}{format_date date={$user.event_date}}{/if}</h2>

                <div id="backgrounds" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-background">
                        <div class="modal-content modal-content-background">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-center"><strong>Choose from our exclusive gallery or upload your own</strong></h4>
                            </div>
                            <div class="modal-body modal-body-background">
                                <div class="upload-wrap col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                                    <div class="fileUpload text-center ">
                                        <span class="fa fa-camera"></span><br>
                                        <span style="padding-bottom: 1000px">upload photo</span>
                                        <input type="file" class="upload"/>
                                    </div>
                                </div>
                                {foreach from=$bg_images item=bg_image}
                                <div data-dismiss="modal" class="single-back-img-div col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/files/{$bg_image}" alt="" class="img-responsive single-back-img">
                                </div>
                                {/foreach}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row small-boxes-wrapper">
                    <a href="{$BASE_URL}registry/action/preview?preview_id={$_user.user_id}" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 small-boxes">
                        <h4>view as a guest</h4>
                        <p>View your profile as a guest and know how it feels</p>
                    </a>
                    <a href="#" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 small-boxes" data-toggle="modal" data-target="#invitePartner">
                        <h4>invite partner</h4>
                        <p>Let your partners join you in this journey</p>
                    </a>
                    <a href="{$BASE_URL}registry/couple/live" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 small-boxes" data-toggle="modal" data-target="#sanityCheck">
                        <h4>make it visible</h4>
                        <p>Guests can not view your registry until you go live.</p>
                    </a>
                </div>
            </div>
        </div>
        <!--invite partner modal-->
        <div id="invitePartner" class="modal fade" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><b>Invite Partner</b></h4>
                    </div>
                    <div class="modal-body">
                        <P class="desc-text">Once invited, your partner will be able to add, remove, and update products and adjust your registry settings.</P>
                            <div class="form-group">
                                <label for="email">EMAIL ADDRESS:</label>
                                <input type="email" class="form-control email-field" id="email" placeholder="{if $_user.regType == 'wedding' || $_user.regType == 'wedding' }{$_user.spouse_email}{else}{$_user.friend_email}{/if}">
                            </div>
                            <button type="button" id="invitePartnerForm" class="btn btn-primary pull-right submit-btn" data-dismiss="modal">INVITE</button>
                            <br><br>
                    </div>
                </div>
            </div>
        </div>
        <div id="sanityCheck" class="modal fade" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><b>Validity Check</b></h4>
                    </div>
                    <div class="modal-body">
                        <P class="desc-text">Enter your email to confirm going live.</P>
                            <div class="form-group">
                                <label for="email">NAME :</label>
                                <input type="email" class="form-control email-field" id="email" placeholder="{$_user.email}">
                            </div>
                            <button type="button" id="invitePartnerForm" class="btn btn-primary pull-right submit-btn" data-dismiss="modal">Go Live</button>
                            <br><br>
                    </div>
                </div>
            </div>
        </div>

        <!--End of invite partner modal-->

        <br>
        <hr>
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
                                           <br><br><br>{if
                                            empty($_user.vow_message)}
                                            {if $_user.regType == 'wedding' || $_user.regType == 'anniv'}Share your love with the world ....{else}Tell the world about your event{/if}
                                            {else}{$_user.vow_message}{/if}<br><br></p>
                                           <p>Click <a href="#"  data-toggle="modal" data-target="#vowMessage" >here</a> to edit this message </p>
                                    </div>
                                </div><!-- /.tab-pane -->

                                <div id="review" class="tab-pane">
                                    <div class="product-tab">
                                        <div class="product-tab">
                                            <p class="text" id="Tmessage">
                                                <br><br>{if empty($_user.vote_of_thanks)}Got anyone you'd like to thank? ....
                                                {else}{$_user.vote_of_thanks}{/if}<br><br></p>
                                                <p>Click <a href="#" data-toggle="modal" data-target="#votMessage" >here</a> to edit this message. </p>
                                        </div>
                                     </div><!-- /.product-tabs -->
            </div>
                                
                                {/foreach}



                                <!--invite partner modal-->
                                <div id="vowMessage" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"><b>Set Vow Message</b></h4>
                                            </div>
                                            <div class="modal-body">
                                                <P class="desc-text">Share your vows with the world.</P>
                                                <div class="form-group">
                                                    <input id="vows" class="form-control vowmessagefield" name="votmessage" placeholder="Type Vow Message" required>
                                                </div>
                                                <button id="setVowMessageButton" class="btn btn-primary pull-right submit-btn" data-dismiss="modal">Set Message</button>
                                                <br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End of invite partner modal-->


                                <!--invite partner modal-->
                                <div id="votMessage" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"><b>Vote of Thanks</b></h4>
                                            </div>
                                            <div class="modal-body">
                                                <P class="desc-text">Your <b>Thank You message</b></P>
                                                <div class="form-group">
                                                    <input id="vot" class="form-control vowmessagefield" name="votmessage" placeholder="Your vote of thanks" required>
                                                </div>
                                                <button id="setVotMessageButton" class="btn btn-primary pull-right submit-btn" data-dismiss="modal">Set Message</button>
                                                <br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End of invite partner modal-->
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
                                                Products in your registry</h3>
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
                                                                                    <button class="btn btn-primary remove_btn" type="button">Remove</button>
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