{include file="../header.tpl"}

{include file="../navmenu.tpl"}


{foreach from=$product_details item=product key=eKey}

<input type="hidden" id="user_ip" value="{$ip}">
<input type="hidden" id="product_id" value="{$product.product_id}">
<input type="hidden" id="base_url" value="{$BASE_URL}">
<input type="hidden" id="user_id" value="{$user_session[0].user_id}">

<div class="body-content Hi outer-top-xs">
        <div class='container'>
            <div class='row single-product'>
                <div class='col-md-12'>
                    <div class="detail-block">
                        <div class="row  wow fadeInUp">
                            <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                                <div class="product-item-holder size-big single-product-gallery small-gallery">

                                    <div id="owl-single-product">
                                        <div class="single-product-gallery-item" id="slide1">
                                            <a data-lightbox="image-1" data-title="Gallery" href="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$product.image}">
                                                <img class="img-responsive" alt="" src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front/assets/images/blank.gif" data-echo="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$product.image}"/>
                                            </a>
                                        </div><!-- /.single-product-gallery-item -->

                                        <div class="single-product-gallery-item" id="slide2">
                                            <a data-lightbox="image-1" data-title="Gallery" href="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$product.image}">
                                                <img class="img-responsive" alt="" src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}front/assets/images/blank.gif" data-echo="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$product.image}"/>
                                            </a>
                                        </div><!-- /.single-product-gallery-item -->

                                        <div class="single-product-gallery-item" id="slide3">
                                            <a data-lightbox="image-1" data-title="Gallery" href="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$product.image}">
                                                <img class="img-responsive" alt="" src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front/assets/images/blank.gif" data-echo="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$product.image}" />
                                            </a>
                                        </div><!-- /.single-product-gallery-item -->

                                        <div class="single-product-gallery-item" id="slide4">
                                            <a data-lightbox="image-1" data-title="Gallery" href="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$product.image}">
                                                <img class="img-responsive" alt="" src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front/assets/images/blank.gif" data-echo="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$product.image}"/>
                                            </a>
                                        </div><!-- /.single-product-gallery-item -->


                                    </div><!-- /.single-product-slider -->


                                    <div class="single-product-gallery-thumbs gallery-thumbs">

                                        <div id="owl-single-product-thumbnails">
                                            <div class="item">
                                                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                                                    <img class="img-responsive" width="85" alt="" src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front/assets/images/blank.gif" data-echo="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$product.image}" />
                                                </a>
                                            </div>

                                            <div class="item">
                                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide2">
                                                    <img class="img-responsive" width="85" alt="" src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front/assets/images/blank.gif" data-echo="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$product.image}"/>
                                                </a>
                                            </div>
                                            <div class="item">

                                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="3" href="#slide3">
                                                    <img class="img-responsive" width="85" alt="" src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front/assets/images/blank.gif" data-echo="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$product.image}" />
                                                </a>
                                            </div>
                                            <div class="item">

                                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="4" href="#slide4">
                                                    <img class="img-responsive" width="85" alt="" src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front/assets/images/blank.gif" data-echo="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$product.image}" />
                                                </a>
                                            </div>
                                        </div><!-- /#owl-single-product-thumbnails -->



                                    </div><!-- /.gallery-thumbs -->

                                </div><!-- /.single-product-gallery -->
                            </div><!-- /.gallery-holder -->
                            <div class='col-sm-6 col-md-7 product-info-block'>
                                <div class="product-info">
                                    <h1 class="name">{$product.name}</h1>

                                    <div class="rating-reviews m-t-20">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="rating rateit-small"></div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="reviews">
                                                    <a href="#" class="lnk">(13 Reviews)</a>
                                                </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.rating-reviews -->

                                    <div class="stock-container info-container m-t-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="stock-box">
                                                    <span class="label">Availability :</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="stock-box">
                                                    <span class="value">{if $product.availability == 1}In Stock {else}Out of Stock{/if}</span>
                                                </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.stock-container -->

                                    <div class="description-container m-t-20">
                                        {$product.short_description}
                                    </div>
                                    <div class="price-container info-container m-t-20">
                                        <div class="row">


                                            <div class="col-sm-6">
                                                <div class="price-box">
                                                    <span class="price">&#8358;{$product.price}</span>
                                                </div>
                                            </div>

                                        </div><!-- /.row -->
                                    </div><!-- /.price-container -->

                                    <div class="quantity-container info-container">
                                        <div class="row">

                                            <div class="col-sm-2">
                                                <span class="label">Qty :</span>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="cart-quantity">
                                                    <div class="quant-input">
                                                        <input type="text" id="quantity" value="1" placeholder="1" name="quantity">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-7">
                                                <a class="btn btn-success cart_add">TO CART</a>
                                                <a class="btn btn-warning product_compare">COMPARE</a>
                                                <a class="btn btn-primary registry_add">TO REGISTRY</a>
                                            </div>


                                        </div><!-- /.row -->
                                    </div><!-- /.quantity-container -->






                                </div><!-- /.product-info -->
                            </div><!-- /.col-sm-7 -->
                        </div><!-- /.row -->
                    </div>

                    <div class="product-tabs inner-bottom-xs  wow fadeInUp">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                    <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                                    <li><a data-toggle="tab" href="#review">REVIEW</a></li>
                                    <li><a data-toggle="tab" href="#share">Share</a></li>
                                </ul><!-- /.nav-tabs #product-tabs -->
                            </div>
                            <div class="col-sm-9">

                                <div class="tab-content">

                                    <div id="description" class="tab-pane in active">
                                        <div class="product-tab">
                                            <p class="text">
                                               {$product.description}</p>
                                        </div>
                                    </div><!-- /.tab-pane -->

                                    <div id="review" class="tab-pane">
                                        <div class="product-tab">

                                            <div class="product-reviews">
                                                <h4 class="title">Customer Reviews</h4>
                                                {if $review_details|default:''}
                                                    {foreach from=$review_details item=review key=eKey}
                                                <div class="reviews">
                                                    <div class="review">
                                                        <div class="review-title"><span class="summary">{$review.reviewer_name}</span>
                                                            <span class="date"><i class="fa fa-calendar"></i>
                                                                <span>{$review.date_available}</span>
                                                            </span>
                                                            <span class="filled-stars"><i class="fa fa filled-stars"></i>
                                                                <span>{$review.stars} stars</span>
                                                            </span>
                                                        </div>
                                                        <div class="text">{$review.review}</div>
                                                    </div>
                                                </div>
                                                    {/foreach}
                                                    {else}
                                                    <div class="reviews">
                                                        <div class="review">
                                                            <h4>No review yet</h4>
                                                        </div>
                                                    </div>
                                                {/if}

                                            </div><!-- /.product-reviews -->



                                            <div class="product-add-review">
                                                <h4 class="title">Write your own review</h4>
                                                <div class="review-table">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th class="cell-label">&nbsp</th>
                                                                <th>1 star</th>
                                                                <th>2 stars</th>
                                                                <th>3 stars</th>
                                                                <th>4 stars</th>
                                                                <th>5 stars</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td class="cell-label">Pick a star</td>
                                                                <td><input type="radio" name="star" class="radio" value="1"></td>
                                                                <td><input type="radio" name="star" class="radio" value="2"></td>
                                                                <td><input type="radio" name="star" class="radio" value="3"></td>
                                                                <td><input type="radio" name="star" class="radio" value="4"></td>
                                                                <td><input type="radio" name="star" class="radio" value="5"></td>
                                                            </tr>
                                                            </tbody>
                                                        </table><!-- /.table .table-bordered -->
                                                    </div><!-- /.table-responsive -->
                                                </div><!-- /.review-table -->

                                                <div class="review-form">
                                                    <div class="form-container">
                                                        <form role="form" class="cnt-form">

                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputName">Your Name <span class="astk">*</span></label>
                                                                        <input type="text" name="name" class="form-control txt" id="nameInput" placeholder="">
                                                                    </div><!-- /.form-group -->
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputReview">Review <span class="astk">*</span></label>
                                                                        <textarea class="form-control txt txt-review" name="review" id="reviewInput" rows="4" placeholder=""></textarea>
                                                                    </div><!-- /.form-group -->
                                                                </div>
                                                            </div><!-- /.row -->

                                                            <div class="action text-right">
                                                                <button class="btn btn-primary btn-upper" type="submit" id="submit_review">SUBMIT REVIEW</button>
                                                            </div><!-- /.action -->

                                                        </form><!-- /.cnt-form -->
                                                    </div><!-- /.form-container -->
                                                </div><!-- /.review-form -->

                                            </div><!-- /.product-add-review -->

                                        </div><!-- /.product-tab -->
                                    </div><!-- /.tab-pane -->

                                    <div id="share" class="tab-pane">
                                        <div class="product-tag">

                                            <h4 class="title">Share Product</h4>
                                            <div class="">
                                                <div class="container">
                                                    <div class="col-xs-12 col-sm-6 no-padding social">
                                                        <ul class="link">
                                                            <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
                                                            <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
                                                            <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.product-tab -->
                                    </div><!-- /.tab-pane -->

                                </div><!-- /.tab-content -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.product-tabs -->
                    {/foreach}


                    {if $on_home_page|default:''}
                        <section class="section featured-product wow fadeInUp">
                        <h3 class="section-title">Quick Products</h3>
                        <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
                            {foreach from=$on_home_page item=product}
                            <div class="item item-carousel">
                                <div class="products">

                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <div class="image"> <a href="{$BASE_URL}product?product_id={$product.product_id}"> <img src="{$product.image}" alt="{$product.name}"> </a> </div>
                                            </div><!-- /.image -->

                                            <div class="tag sale"><span>sale</span></div>
                                        </div><!-- /.product-image -->


                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="{$BASE_URL}product?product_id={$product.product_id}">{$product.name}</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>

                                            <div class="product-price">
				                                <span class="price">{$product.price}</span>

                                            </div>

                                        </div><!-- /.product-info -->
                                    </div><!-- /.product -->

                                </div><!-- /.products -->
                            </div><!-- /.item -->
                            {/foreach}
                        </div><!-- /.home-owl-carousel -->
                    </section><!-- /.section -->
                    {/if}

                </div><!-- /.col -->
                <div class="clearfix"></div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>

{include file="../footer.tpl"}