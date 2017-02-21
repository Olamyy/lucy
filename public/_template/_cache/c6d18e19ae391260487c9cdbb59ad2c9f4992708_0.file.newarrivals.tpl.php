<?php /* Smarty version 3.1.24, created on 2017-02-20 19:28:01
         compiled from "/var/www/html/lucy/public/_template/front/newarrivals.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:178108178358ab3531b0ac20_10423173%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6d18e19ae391260487c9cdbb59ad2c9f4992708' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/newarrivals.tpl',
      1 => 1487615277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178108178358ab3531b0ac20_10423173',
  'variables' => 
  array (
    'new_arrivals' => 0,
    'BASE_URL' => 0,
    'ip' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
    'new_arrival' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58ab3531b410d8_61996959',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ab3531b410d8_61996959')) {
function content_58ab3531b410d8_61996959 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/html/lucy/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php';

$_smarty_tpl->properties['nocache_hash'] = '178108178358ab3531b0ac20_10423173';
if ((($tmp = @$_smarty_tpl->tpl_vars['new_arrivals']->value)===null||$tmp==='' ? '' : $tmp)) {?>

    <input type="hidden" id="base_url" value="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">
    <input type="hidden" id="quantity" value="1">
    <input type="hidden" id="user_ip" value="<?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
">

    <section class="section wow fadeInUp new-arriavls">
    <h3 class="section-title">New Arrivals</h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
        <?php
$_from = $_smarty_tpl->tpl_vars['new_arrivals']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['new_arrival'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['new_arrival']->_loop = false;
$_smarty_tpl->tpl_vars['eKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['new_arrival']->value) {
$_smarty_tpl->tpl_vars['new_arrival']->_loop = true;
$foreach_new_arrival_Sav = $_smarty_tpl->tpl_vars['new_arrival'];
?>

        <div class="item item-carousel">
            <div class="products">
                <div class="product">
                    <div class="product-image">
                        <div class="image"> <a href="detail.html"><img  src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/products/<?php echo $_smarty_tpl->tpl_vars['new_arrival']->value['image'];?>
" alt=""></a> </div>
                        <!-- /.image -->

                        <div class="tag new"><span>new</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                        <h3 class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
product?product_id=<?php echo $_smarty_tpl->tpl_vars['new_arrival']->value['product_id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['new_arrival']->value['name']);?>
</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        <div class="product-price"> <span class="price">&#8358;<?php echo $_smarty_tpl->tpl_vars['new_arrival']->value['price'];?>
</span></div>
                    </div>
                </div>
                <!-- /.product -->

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
            <!-- /.products -->
        </div>
        <!-- /.item -->
        <?php
$_smarty_tpl->tpl_vars['new_arrival'] = $foreach_new_arrival_Sav;
}
?>
    </div>
    <!-- /.home-owl-carousel -->
</section>
<?php }?>


</div>
</div>

</div>
</div>
</div>

<?php }
}
?>