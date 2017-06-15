{if $special_offer|default:''}
  <input type="hidden" id="base_url" value="{$BASE_URL}">
  <input type="hidden" id="quantity" value="1">
  <input type="hidden" id="user_ip" value="{$ip}">

  <div class="sidebar-widget outer-bottom-small wow fadeInUp">
    <h3 class="section-title">Special Offer</h3>
    <div class="sidebar-widget-body outer-top-xs">
      <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
        <div class="item">
          <div class="products special-product">
            {foreach from=$special_offer item=data key=eKey}
            <div class="product">
              <input type="hidden" id="product_id" value="{$data.product_id}">

              <div class="item">
                <div class="products">
                  <div class="hot-deal-wrapper">
                    <div class="image"> <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$data.image}" alt=""> </div>
                  </div>
                  <div class="product-info text-left m-t-20">
                    <h3 class="name"><a href="{$BASE_URL}product?product_id={$data.product_id}">{$data.name|capitalize}</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="product-price"> <span class="price"> {$data.price} </span>
                    </div>
                  </div>
                  <div class="">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-success cart_add" type="button">To Cart</button>
                          <button class="btn btn-danger registry_add" type="button">To Registry</button>
                        </li>
                      </ul>
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
    <br>
    <br>
  </div>

{/if}