{if $new_products|default:''}

  <input type="hidden" id="base_url" value="{$BASE_URL}">
  <input type="hidden" id="quantity" value="1">
  <input type="hidden" id="user_ip" value="{$ip}">


  <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
    <div class="more-info-tab clearfix ">
      {assign var="current_url" value=$smarty.server.HTTP_HOST}
      {assign var="page_url" value=$smarty.server.REQUEST_URI}
      {assign var="current_page" value=$current_url|cat:$page_url}
      <h3 class="new-product-title pull-left">{if $current_page|strstr:'registry/couple/dashboard'}Product List{else}New Products{/if}</h3>
      <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
      </ul>
      <!-- /.nav-tabs -->
    </div>
    <div class="tab-content outer-top-xs">
      <div class="tab-pane in active" id="all">
        <div class="product-slider">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
            {foreach from=$new_products item=new_product key=eKey}
              <input type="hidden" value="{$new_product.product_id}" id="product_id">
              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> <a href="{$BASE_URL}product?product_id={$new_product.product_id}"><img  src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$new_product.image}" alt=""></a> </div>
                      <!-- /.image -->

                      <div class="tag new"><span>new</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name"><a href="{$BASE_URL}product?product_id={$new_product.product_id}"">{$new_product.name}</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price">&#8358;{$new_product.price}</span></div>
                      <!-- /.product-price -->
                    </div>
                  </div>
                  <!-- /.product -->
                  <div class="">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-success cart_add" type="button">To Cart</button>
                          <button class="btn btn-primary registry_add" type="button">To Registry</button>
                        </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                </div>
                <!-- /.products -->
              </div>
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