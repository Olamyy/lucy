<?php /* Smarty version 3.1.24, created on 2017-02-24 19:22:26
         compiled from "/var/www/html/lucy/public/_template/front/newproducts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:132259560158b079e29e9b24_65975944%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2d98444ad21e9b86ea37e6b7948d577f73e428b' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/newproducts.tpl',
      1 => 1487960543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132259560158b079e29e9b24_65975944',
  'variables' => 
  array (
    'new_products' => 0,
    'BASE_URL' => 0,
    'ip' => 0,
    'current_url' => 0,
    'page_url' => 0,
    'current_page' => 0,
    'new_product' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58b079e2aab594_13803092',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b079e2aab594_13803092')) {
function content_58b079e2aab594_13803092 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '132259560158b079e29e9b24_65975944';
if ((($tmp = @$_smarty_tpl->tpl_vars['new_products']->value)===null||$tmp==='' ? '' : $tmp)) {?>

  <input type="hidden" id="base_url" value="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">
  <input type="hidden" id="quantity" value="1">
  <input type="hidden" id="user_ip" value="<?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
">


  <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
    <div class="more-info-tab clearfix ">
      <?php $_smarty_tpl->tpl_vars["current_url"] = new Smarty_Variable($_SERVER['HTTP_HOST'], null, 0);?>
      <?php $_smarty_tpl->tpl_vars["page_url"] = new Smarty_Variable($_SERVER['REQUEST_URI'], null, 0);?>
      <?php $_smarty_tpl->tpl_vars["current_page"] = new Smarty_Variable(($_smarty_tpl->tpl_vars['current_url']->value).($_smarty_tpl->tpl_vars['page_url']->value), null, 0);?>
      <h3 class="new-product-title pull-left"><?php if (strstr($_smarty_tpl->tpl_vars['current_page']->value,'registry/couple/dashboard')) {?>Product List<?php } else { ?>New Products<?php }?></h3>
      <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
      </ul>
      <!-- /.nav-tabs -->
    </div>
    <div class="tab-content outer-top-xs">
      <div class="tab-pane in active" id="all">
        <div class="product-slider">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
            <?php
$_from = $_smarty_tpl->tpl_vars['new_products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['new_product'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['new_product']->_loop = false;
$_smarty_tpl->tpl_vars['eKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['new_product']->value) {
$_smarty_tpl->tpl_vars['new_product']->_loop = true;
$foreach_new_product_Sav = $_smarty_tpl->tpl_vars['new_product'];
?>
              <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['new_product']->value['product_id'];?>
" id="product_id">
              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
product?product_id=<?php echo $_smarty_tpl->tpl_vars['new_product']->value['product_id'];?>
"><img  src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/products/<?php echo $_smarty_tpl->tpl_vars['new_product']->value['image'];?>
" alt=""></a> </div>
                      <!-- /.image -->

                      <div class="tag new"><span>new</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
product?product_id=<?php echo $_smarty_tpl->tpl_vars['new_product']->value['product_id'];?>
""><?php echo $_smarty_tpl->tpl_vars['new_product']->value['name'];?>
</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>
                      <div class="product-price"> <span class="price">&#8358;<?php echo $_smarty_tpl->tpl_vars['new_product']->value['price'];?>
</span></div>
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
            <?php
$_smarty_tpl->tpl_vars['new_product'] = $foreach_new_product_Sav;
}
?>
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
<?php }
}
}
?>