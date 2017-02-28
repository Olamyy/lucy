{if $new_arrivals|default:''}

  <input type="hidden" id="base_url" value="{$BASE_URL}">
  <input type="hidden" id="quantity" value="1">
  <input type="hidden" id="user_ip" value="{$ip}">

  <section class="section wow fadeInUp new-arriavls">
    <h3 class="section-title">New Arrivals</h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
      {foreach from=$new_arrivals item=new_arrival key=eKey}

        <div class="item item-carousel">
          <div class="products">
            <div class="product">
              <div class="product-image">
                <div class="image"> <a href="detail.html"><img  src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/uploads/products/{$new_arrival.image}" alt=""></a> </div>
                <!-- /.image -->

                <div class="tag new"><span>new</span></div>
              </div>
              <!-- /.product-image -->

              <div class="product-info text-left">
                <h3 class="name"><a href="{$BASE_URL}product?product_id={$new_arrival.product_id}">{$new_arrival.name|capitalize}</a></h3>
                <div class="rating rateit-small"></div>
                <div class="description"></div>
                <div class="product-price"> <span class="price">&#8358;{$new_arrival.price}</span></div>
              </div>
            </div>
            <!-- /.product -->
          </div>
            <div class="action" style="padding-bottom: 20px;">
              <ul class="list-unstyled">
                <li class="add-cart-button btn-group">
                  <button class="btn btn-success cart_add" type="button">To Cart</button>
                  <button class="btn btn-primary registry_add" type="button">To Registry</button>
                </li>
              </ul>
            </div>
            <!-- /.action -->
          </div>
          <!-- /.products -->
        </div>
        <!-- /.item -->
      {/foreach}
    </div>
    <!-- /.home-owl-carousel -->
  </section>
{/if}


</div>
</div>

</div>
</div>
</div>
