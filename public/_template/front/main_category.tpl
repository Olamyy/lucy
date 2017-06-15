{if $category_products|default: ''}

<div class='col-md-9'>
    <div class="search-result-container ">
        <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
                <div class="category-product">
                    <div class="row">
                        {foreach from=$category_products item=product key=eKey}
                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"> <a href="{$BASE_URL}product?product_id={$product.product_id}"><img  src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$product.image}" alt=""></a> </div>
                                    </div>
                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{$BASE_URL}product?product_id={$product.product_id}">{$product.name|upper}</a></h3>
                                        <div class="description">{$product.name|upper}</div>
                                        <div class="product-price"> <span class="price">&#8358; {$product.price} </span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {/foreach}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{/if}
