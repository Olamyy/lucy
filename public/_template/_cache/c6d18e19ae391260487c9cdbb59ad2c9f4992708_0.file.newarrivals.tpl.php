<?php /* Smarty version 3.1.24, created on 2017-06-15 03:45:05
         compiled from "/var/www/html/lucy/public/_template/front/newarrivals.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19134998655941f4b1229702_86720312%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6d18e19ae391260487c9cdbb59ad2c9f4992708' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/newarrivals.tpl',
      1 => 1497494702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19134998655941f4b1229702_86720312',
  'variables' => 
  array (
    'on_home_page' => 0,
    'BASE_URL' => 0,
    'product' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5941f4b125c3f1_46378233',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5941f4b125c3f1_46378233')) {
function content_5941f4b125c3f1_46378233 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19134998655941f4b1229702_86720312';
?>
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

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['on_home_page']->value)===null||$tmp==='' ? '' : $tmp)) {?>
<div class="best-deal wow fadeInUp outer-bottom-xs">
  <h3 class="section-title">Explore products</h3>
  <div class="sidebar-widget-body outer-top-xs">
    <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
        <?php
$_from = $_smarty_tpl->tpl_vars['on_home_page']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$foreach_product_Sav = $_smarty_tpl->tpl_vars['product'];
?>
          <div class="item">
            <div class="products best-product">
              <div class="product">
                <div class="product-micro">
                  <div class="row product-micro-row">
                    <div class="col col-xs-5">
                      <div class="product-image">
                        <div class="image"> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
product?product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/products/<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"> </a> </div>
                        <!-- /.image -->
                      </div>
                      <!-- /.product-image -->
                    </div>
                    <!-- /.col -->
                    <div class="col2 col-xs-7">
                      <div class="product-info">
                        <h3 class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
product?product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="product-price"> <span class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php
$_smarty_tpl->tpl_vars['product'] = $foreach_product_Sav;
}
?>
    </div>
  </div>
  <!-- /.sidebar-widget-body -->
</div>

<?php }?>

</div>
</div>

</div>
</div>
</div>
<?php }
}
?>