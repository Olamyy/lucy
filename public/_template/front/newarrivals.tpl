<section class="section latest-blog outer-bottom-vs wow fadeInUp">
  <h3 class="section-title">Registries we love</h3>
  <div class="blog-slider-container outer-top-xs">
    <div class="owl-carousel blog-slider custom-carousel">
      <div class="item">
        <div class="blog-post">
          <div class="blog-post-image">
            <div class="image"> <a href="blog.html"><img src="http://placehold.it/840x340" alt=""></a> </div>
          </div>
          <!-- /.blog-post-image -->

          <div class="blog-post-info text-left">
            <h3 class="name"><a href="#">Registry Title</a></h3>
            <span class="info">Date and Time </span>
            <p class="text">Description</p>
            <a href="#" class="lnk btn btn-primary">View Registry</a> </div>
          <!-- /.blog-post-info -->

        </div>
        <!-- /.blog-post -->
      </div>
      <!-- /.item -->

      <div class="item">
        <div class="blog-post">
          <div class="blog-post-image">
            <div class="image"> <a href="blog.html"><img src="http://placehold.it/840x340" alt=""></a> </div>
          </div>
          <!-- /.blog-post-image -->

          <div class="blog-post-info text-left">
            <h3 class="name"><a href="#">Registry Title</a></h3>
            <span class="info">Date and Time </span>
            <p class="text">Description</p>
            <a href="#" class="lnk btn btn-primary">View Registry</a> </div>
          <!-- /.blog-post-info -->

        </div>
        <!-- /.blog-post -->
      </div>
      <!-- /.item -->

    </div>
    <!-- /.owl-carousel -->
  </div>
  <!-- /.blog-slider-container -->
</section>

{if $on_home_page|default:''}


<div class="best-deal wow fadeInUp outer-bottom-xs">
  <h3 class="section-title">Explore products</h3>
  <div class="sidebar-widget-body outer-top-xs">
    <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
        {foreach from=$on_home_page item=product}
          <div class="item">
            <div class="products best-product">
              <div class="product">
                <div class="product-micro">
                  <div class="row product-micro-row">
                    <div class="col col-xs-5">
                      <div class="product-image">
                        <div class="image"> <a href="{$BASE_URL}product?product_id={$product.product_id}"> <img src="{$product.image}" alt="{$product.name}"> </a> </div>
                        <!-- /.image -->
                      </div>
                      <!-- /.product-image -->
                    </div>
                    <!-- /.col -->
                    <div class="col2 col-xs-7">
                      <div class="product-info">
                        <h3 class="name"><a href="{$BASE_URL}product?product_id={$product.product_id}">{$product.name}</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="product-price"> <span class="price">{$product.price}</span> </div>
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


<div class="container-fluid top-div">
  <h2 class="text-center">This is going to be fun. We wish we were you right now.</h2>
  <div class="row">
    <div class="col-md-6">
      <a href="{$BASE_URL}registry/auth/join"><button class="pull-right btn-reg">register</button></a>
    </div>
    <div class="col-md-6">
      <a href="{$BASE_URL}registry/find"><button class="pull-left btn-find">Find a gift registry</button></a>
    </div>
  </div>
</div>



</div>
</div>

</div>
</div>
</div>
