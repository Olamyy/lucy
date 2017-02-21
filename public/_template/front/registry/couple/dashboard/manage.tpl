{include file="./header.tpl"}
{include file="./nav.tpl"}

       <!-- ============================================== HEADER : END ============================================== -->

{foreach from=$user_session item=session key=eKey}
    <input type="hidden" value="{$session[0].dashboard_image}" name="couple_id" id="couple">
{/foreach}

{if $error|default:''}
    <div class="alert alert-danger">
        <strong>Oops! Something went wrong</strong>
        {foreach from=$error item=err}
            <p>{$err}</p>
        {/foreach}
    </div>
{/if}

<div class="breadcrumb" xmlns="http://www.w3.org/1999/html"><!-- /.container -->
</div><!-- /.breadcrumb -->
<!-- ============================================== HEADER : END ============================================== -->
<form>
    <input type="hidden" name="name"  value="{$session[0].couple_id}" id="couple_id" class="couples-name">
    <input type="hidden" id="base_url" value="{$BASE_URL}" />
    <input type="hidden" id="dashboard_image" value="{$session[0].dashboard_image}" />
</form>

<div class="alert alert-warning alert-dismissible fade show hidden" id="alert" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
</div>


<div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container-fluid main-back-img">
                    <button type="button" class="edit-btn" data-toggle="modal" data-target="#backgrounds">
                        edit background
                    </button>
                    <form action="" class="couples-form">
                        <input type="text" name="name" id="name" class="couples-name">
                        <span class="name-display">{$session[0].groom_first_name} & {$session[0].bride_first_name}</span>
                    </form>
                </div>
                <h2 class="name-display" style="font-size: small; padding-top: 80px;">{if empty($session[0].wedding_date)}Date is coming soon{else}{$session[0].wedding_date}{/if}</h2>

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
                                        <!--<span class="glyphicon glyphicon-camera"></span><br>-->
                                        <span>upload photo</span>
                                        <input type="file" class="upload"/>
                                    </div>
                                </div>

                                <div data-dismiss="modal" class="single-back-img-div col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/files/cat-banner-1.jpg" alt="" class="img-responsive single-back-img">
                                </div>
                                <div data-dismiss="modal" class="single-back-img-div col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/files/wedding1.jpg" alt="" class="img-responsive single-back-img">
                                </div>
                                <div data-dismiss="modal" class="single-back-img-div col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/files/couple-1.jpg" alt="" class="img-responsive single-back-img">
                                </div>
                                <div data-dismiss="modal" class="single-back-img-div col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/files/couple-2.jpg" alt="" class="img-responsive single-back-img">
                                </div>
                                <div data-dismiss="modal" class="single-back-img-div col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/files/hands.jpg" alt="" class="img-responsive single-back-img">
                                </div>
                                <div data-dismiss="modal" class="single-back-img-div col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/files/love-1.jpg" alt="" class="img-responsive single-back-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row small-boxes-wrapper">
                    <a href="{$BASE_URL}registry/couple/action/preview?preview_id={$session[0].couple_id}" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 small-boxes">
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
                        <P class="desc-text">Once invited, your partner will be able to add, remove, and update products and adjust your wedding registry settings.</P>
                            <div class="form-group">
                                <label for="email">EMAIL ADDRESS:</label>
                                <input type="email" class="form-control email-field" id="email" placeholder="{$session[0].spouse_email}">
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
                        <P class="desc-text">Enter the name of your partner to confirm going live.</P>
                            <div class="form-group">
                                <label for="email">NAME :</label>
                                <input type="email" class="form-control email-field" id="email" placeholder="{$session[0].bride_first_name}">
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
                                           <br><br>{if
                                            empty($session[0].vow_message)}
                                            Share your love with the world ....
                                            {else}{$session[0].vow_message}{/if}<br><br></p>
                                           <p>Click <a href="#"  data-toggle="modal" data-target="#vowMessage" >here</a> to edit this message </p>
                                    </div>
                                </div><!-- /.tab-pane -->

                                <div id="review" class="tab-pane">
                                    <div class="product-tab">
                                        <div class="product-tab">
                                            <p class="text" id="Tmessage">
                                                <br><br>{if empty($session[0].vote_of_thanks)}Got anyone you'd like to thank? ....
                                                {else}{$session[0].vote_of_thanks}{/if}<br><br></p>
                                                <p>Click <a href="#" data-toggle="modal" data-target="#votMessage" >here</a> to edit this message. </p>
                                        </div>
                                     </div><!-- /.product-tabs -->
            </div>



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
                    <h3 class="section-title">upsell products</h3>
                    <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/images/products/p1.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag sale"><span>sale</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/images/products/p2.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag sale"><span>sale</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/images/products/p3.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag hot"><span>hot</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/images/products/p4.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag new"><span>new</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/images/blank.gif" data-echo="assets/images/products/p5.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag hot"><span>hot</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/images/blank.gif" data-echo="assets/images/products/p6.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag new"><span>new</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->
                    </div><!-- /.home-owl-carousel -->
                </section><!-- /.section -->
        </div>



            {*<!-- ============================================================= FOOTER : END============================================================= -->*}



{include file="./footer.tpl"}