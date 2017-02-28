<?php /* Smarty version 3.1.24, created on 2017-02-21 15:53:05
         compiled from "/var/www/html/lucy/public/_template/front/bestseller.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:161807690058ac54513701d1_01308898%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6c20c31a13e61e63578468b0021dbe12391bb19' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/bestseller.tpl',
      1 => 1487688726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161807690058ac54513701d1_01308898',
  'variables' => 
  array (
    'best_sellers' => 0,
    'BASE_URL' => 0,
    'ip' => 0,
    'best_seller' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58ac545139fd77_11695608',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ac545139fd77_11695608')) {
function content_58ac545139fd77_11695608 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/html/lucy/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php';

$_smarty_tpl->properties['nocache_hash'] = '161807690058ac54513701d1_01308898';
if ((($tmp = @$_smarty_tpl->tpl_vars['best_sellers']->value)===null||$tmp==='' ? '' : $tmp)) {?>

  <input type="hidden" id="base_url" value="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">
  <input type="hidden" id="quantity" value="1">
  <input type="hidden" id="user_ip" value="<?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
">


  <div class="best-deal wow fadeInUp outer-bottom-xs">
    <h3 class="section-title">Best seller</h3>
    <div class="sidebar-widget-body outer-top-xs">
      <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
        <?php
$_from = $_smarty_tpl->tpl_vars['best_sellers']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['best_seller'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['best_seller']->_loop = false;
$_smarty_tpl->tpl_vars['eKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['best_seller']->value) {
$_smarty_tpl->tpl_vars['best_seller']->_loop = true;
$foreach_best_seller_Sav = $_smarty_tpl->tpl_vars['best_seller'];
?>
          <div class="item">
            <div class="products best-product">
              <div class="product">
                <div class="product-micro">
                  <div class="row product-micro-row">
                    <div class="col col-xs-5">
                      <div class="product-image">
                        <div class="image"> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
product?product_id=<?php echo $_smarty_tpl->tpl_vars['best_seller']->value['product_id'];?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/products/<?php echo $_smarty_tpl->tpl_vars['best_seller']->value['image'];?>
" alt=""> </a> </div>
                        <!-- /.image -->

                      </div>
                      <!-- /.product-image -->
                    </div>
                    <!-- /.col -->
                    <div class="col2 col-xs-7">
                      <div class="product-info">
                        <h3 class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
product?product_id=<?php echo $_smarty_tpl->tpl_vars['best_seller']->value['product_id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['best_seller']->value['name']);?>
</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="product-price"> <span class="price">&#8358;<?php echo $_smarty_tpl->tpl_vars['best_seller']->value['price'];?>
</span> </div>
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
        <?php
$_smarty_tpl->tpl_vars['best_seller'] = $foreach_best_seller_Sav;
}
?>
      </div>
    </div>
    <!-- /.sidebar-widget-body -->
  </div>

<?php }

}
}
?>