{if $special_offer|default:''}
  <input type="hidden" id="base_url" value="{$BASE_URL}">
  <input type="hidden" id="quantity" value="1">
  <input type="hidden" id="user_ip" value="{$ip}">

  <div class="sidebar-widget outer-bottom-small wow fadeInUp">
    <h3 class="section-title">Special Offers</h3>
    <div class="sidebar-widget-body outer-top-xs">
      <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
        {foreach from=$special_offer item=data key=eKey}
          <div class="item">
            <div class="products special-product">
              <div class="product">
                <div class="product-micro">
                  <div class="row product-micro-row">
                    <div class="col col-xs-5">
                      <div class="product-image">
                        <div class="image"> <a href="#"> <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$data.image}" alt=""> </a> </div>
                        <!-- /.image -->

                      </div>
                      <!-- /.product-image -->
                    </div>
                    <!-- /.col -->
                    <div class="col col-xs-7">
                      <div class="product-info">
                        <h3 class="name"><a href="{$BASE_URL}product?product_id={$data.product_id}">{$data.name|capitalize}</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="product-price"> <span class="price">&#8358;{$data.price}</span> </div>
                        <!-- /.product-price -->

                      </div>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.product-micro-row -->
                </div>
                <!-- /.product-micro -->

              </div>
            </div>
          </div>
        {/foreach}
      </div>
    </div>
    <!-- /.sidebar-widget-body -->
  </div>

{/if}