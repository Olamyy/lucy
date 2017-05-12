
{if $category_products|default: ''}

    {foreach from=$category_products item=product key=eKey}
        <div class='col-md-9'>
            <div class="search-result-container ">
                <div id="myTabContent" class="tab-content category-list">
                    <div class="tab-pane active " id="grid-container">
                        <div class="category-product">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 wow fadeInUp">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product-image">
                                                <div class="image"> <a href="{$BASE_URL}product?product_id={$product.product_id}"><img  src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$product.image}" alt=""></a> </div>
                                                <!-- /.image -->

                                                <div class="tag new"><span>{$product.product_tags}</span></div>
                                            </div>
                                            <!-- /.product-image -->

                                            <div class="product-info text-left">
                                                <h3 class="name"><a href="{$BASE_URL}product?product_id={$product.product_id}">{$product.name|upper}</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="description"></div>
                                                <div class="product-price"> <span class="price">{$product.price}</span>
                                                    <span class="price-before-discount">{$product.before_discount_price}</span> </div>
                                            </div>
                                                <div class="">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-success cart_add" type="button">To Cart</button>
                                                                <button class="btn btn-primary registry_add" type="button">To Registry</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    {/foreach}
{/if}
