{if $hot_deals|default:''}

  <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
    <h3 class="section-title">Hot Deals</h3>
    <input type="hidden" id="base_url" value="{$BASE_URL}">
    <input type="hidden" id="quantity" value="1">
    <input type="hidden" id="user_ip" value="{$ip}">

    <div id="advertisement" class="advertisement">
      {foreach from=$hot_deals item=data key=eKey}
        <input type="hidden" id="product_id" value="{$data.product_id}">
        <div class="item">
          <div class="products">
            <div class="hot-deal-wrapper">
              <div class="image"> <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$data.image}" alt=""> </div>
            </div>
            <!-- /.hot-deal-wrapper -->

            <div class="product-info text-left m-t-20">
              <h3 class="name"><a href="{$BASE_URL}product?product_id={$data.product_id}">{$data.name|capitalize}</a></h3>
              <div class="rating rateit-small"></div>
              <div class="product-price"> <span class="price">&#8358;{$data.price} </span></div>
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
            </div>              <!-- /.cart -->
          </div>
        </div>
      {/foreach}
    </div>

    <!-- /.sidebar-widget -->
  </div>

  {include file="./promo.tpl"}

{/if}