<?php /* Smarty version 3.1.24, created on 2017-02-20 19:28:01
         compiled from "/var/www/html/lucy/public/_template/front/featuredproducts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:92154644958ab3531aa3c22_80487865%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca5b3f626f794fb8103de0658141b4f0e3668bfc' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/featuredproducts.tpl',
      1 => 1487615253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92154644958ab3531aa3c22_80487865',
  'variables' => 
  array (
    'featured_products' => 0,
    'BASE_URL' => 0,
    'ip' => 0,
    'featured_product' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58ab3531ad3025_75953607',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ab3531ad3025_75953607')) {
function content_58ab3531ad3025_75953607 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/html/lucy/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php';

$_smarty_tpl->properties['nocache_hash'] = '92154644958ab3531aa3c22_80487865';
if ((($tmp = @$_smarty_tpl->tpl_vars['featured_products']->value)===null||$tmp==='' ? '' : $tmp)) {?>
    <input type="hidden" id="base_url" value="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">
    <input type="hidden" id="quantity" value="1">
    <input type="hidden" id="user_ip" value="<?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
">


    <section class="section featured-product wow fadeInUp">
    <h3 class="section-title">Featured products</h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

        <?php
$_from = $_smarty_tpl->tpl_vars['featured_products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['featured_product'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['featured_product']->_loop = false;
$_smarty_tpl->tpl_vars['eKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['featured_product']->value) {
$_smarty_tpl->tpl_vars['featured_product']->_loop = true;
$foreach_featured_product_Sav = $_smarty_tpl->tpl_vars['featured_product'];
?>

        <div class="item item-carousel">
            <div class="products">
                <div class="product">
                    <div class="product-image">
                        <div class="image"> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
product?product_id=<?php echo $_smarty_tpl->tpl_vars['featured_product']->value['product_id'];?>
"><img  src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/products/<?php echo $_smarty_tpl->tpl_vars['featured_product']->value['image'];?>
" alt=""></a> </div>
                        <!-- /.image -->

                        <div class="tag hot"><span>hot</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                        <h3 class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
product?product_id=<?php echo $_smarty_tpl->tpl_vars['featured_product']->value['product_id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['featured_product']->value['name']);?>
</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        <div class="product-price"> <span class="price">&#8358;<?php echo $_smarty_tpl->tpl_vars['featured_product']->value['price'];?>
</span></div>
                        <div>
                        </div>
                        <!-- /.product-price -->

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
                        <!-- /.action -->
                    </div>

                    <!-- /.cart -->
                </div>
                <!-- /.product -->

            </div>
            <!-- /.products -->
        </div>

        <?php
$_smarty_tpl->tpl_vars['featured_product'] = $foreach_featured_product_Sav;
}
?>
        <!-- /.item -->

    </div>
    <!-- /.home-owl-carousel -->
</section>


<?php }

}
}
?>