<?php /* Smarty version 3.1.24, created on 2017-06-08 04:18:51
         compiled from "public/_template/front/registry/couple/preview/preview.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16047764825938c21b336537_20137052%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5877b101ef77254a67f3ab3f027ab385efb778cf' => 
    array (
      0 => 'public/_template/front/registry/couple/preview/preview.tpl',
      1 => 1496170487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16047764825938c21b336537_20137052',
  'variables' => 
  array (
    'complete_details' => 0,
    'session' => 0,
    'BASE_URL' => 0,
    'user_cart_items' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
    'product' => 0,
    'product_details' => 0,
    'user_products' => 0,
    'ip' => 0,
    'current_url' => 0,
    'page_url' => 0,
    'user_product' => 0,
    'user_pro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5938c21b435ad6_32435699',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5938c21b435ad6_32435699')) {
function content_5938c21b435ad6_32435699 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/html/lucy/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php';

$_smarty_tpl->properties['nocache_hash'] = '16047764825938c21b336537_20137052';
echo $_smarty_tpl->getSubTemplate ("./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- ============================================== HEADER : END ============================================== -->

<?php
$_from = $_smarty_tpl->tpl_vars['complete_details']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['session'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['session']->_loop = false;
$_smarty_tpl->tpl_vars['eKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['session']->value) {
$_smarty_tpl->tpl_vars['session']->_loop = true;
$foreach_session_Sav = $_smarty_tpl->tpl_vars['session'];
?>
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['session']->value['user_id'];?>
" name="user_id" id="couple">
<?php
$_smarty_tpl->tpl_vars['session'] = $foreach_session_Sav;
}
?>

<form>
    <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['session']->value['user_id'];?>
" id="user_id" class="couples-name">
    <input type="hidden" id="base_url" value="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" />
</form>

<div id="carts" class="modal fade" role="dialog" >
    <div class="modal-dialog modal-dialog-background">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Your Cart</h3>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="cart-description item">Image</th>
                        <th class="cart-product-name item">Product Name</th>
                        <th class="cart-total last-item">Quantity</th>
                        <th class="cart-sub-total item">Subtotal</th>
                    </tr>
                    </thead><!-- /thead -->
                    <tfoot>
                    <tr>
                        <td colspan="7">
                            <div class="shopping-cart-btn">
							<span class="">
								<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/couple/checkout" class="btn btn-upper btn-primary pull-right outer-right-xs">Check Out</a>
							</span>
                            </div><!-- /.shopping-cart-btn -->
                        </td>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->tpl_vars['user_cart_items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['product']->_loop = false;
$_smarty_tpl->tpl_vars['eKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$foreach_product_Sav = $_smarty_tpl->tpl_vars['product'];
?>
                        <tr>
                            <td class="cart-image">
                                <a class="entry-thumbnail">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/products/<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" width="100" height="100" alt="">
                                </a>
                            </td>
                            <td class="cart-product-name-info">
                                <h4 class='cart-product-description'><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
product?product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product_details']->value[0]['name'];?>
</a></h4>
                            </td>
                            <td class="cart-product-sub-total"><span class="cart-sub-total-price"><?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
</span></td>
                            <td class="cart-product-grand-total"><span class="cart-grand-total-price">&#8358;<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span></td>
                        </tr>
                    <?php
$_smarty_tpl->tpl_vars['product'] = $foreach_product_Sav;
}
?>
                    </tbody>
                </table>
                </h4>
            </div>
        </div>
    </div>
</div>
<!-- ============================================== HEADER : END ============================================== -->
<div class="preview_bg"  style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['session']->value['dashboard_image'];?>
');">
    <div class="preview-display-name">
        <?php if ($_smarty_tpl->tpl_vars['session']->value['regType'] == 'wedding') {
echo $_smarty_tpl->tpl_vars['session']->value['groom_first_name'];?>
 &
            <?php echo $_smarty_tpl->tpl_vars['session']->value['bride_first_name'];
} elseif ($_smarty_tpl->tpl_vars['session']->value['regType'] == 'anniv') {?>Mr & Mrs <?php echo $_smarty_tpl->tpl_vars['session']->value['name'];
} else {
echo $_smarty_tpl->tpl_vars['session']->value['name'];
}?>
    </div>
    <div class="preview-display-date"><?php if (empty($_smarty_tpl->tpl_vars['session']->value['event_date'])) {?>Date is coming soon<?php } else {
echo $_smarty_tpl->tpl_vars['session']->value['event_date'];
}?></div>
</div>

<br>
<br>

 <div class="product-tabs inner-bottom-xs">
            <div class="row">
                <div class="col-sm-12">
                    <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                        <li class="active"><a data-toggle="tab" href="#description">VOWS</a></li>
                        <li><a data-toggle="tab" href="#review">VOTE OF THANKS</a></li>
                    </ul><!-- /.nav-tabs #product-tabs -->
                </div>
                <div class="col-sm-12">

                    <div class="tab-content">

                        <div id="description" class="tab-pane in active">
                            <div class="product-tab">
                                <p class="text"  id="Vmessage">
                                    <div class="product-tab">
                                <p class="text"  id="Vmessage">
                                    <br><br><br><?php if (empty($_smarty_tpl->tpl_vars['session']->value['vow_message'])) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['session']->value['regType'] == 'wedding' || $_smarty_tpl->tpl_vars['session']->value['regType'] == 'anniv') {?> <br><br><?php if (empty($_smarty_tpl->tpl_vars['session']->value['vow_message'])) {?>Share your love with the world ....<?php } else {
echo $_smarty_tpl->tpl_vars['session']->value['vow_message'];
}
} else { ?> <br><br><?php if (empty($_smarty_tpl->tpl_vars['session']->value['vow_message'])) {?>Tell the world about your event ....<?php } else {
echo $_smarty_tpl->tpl_vars['session']->value['vow_message'];
}
}?>
                                    <?php } else {
echo $_smarty_tpl->tpl_vars['session']->value['vow_message'];
}?></p>
                            </div><br><br></p>
                            </div>
                        </div><!-- /.tab-pane -->

                        <div id="review" class="tab-pane">
                            <div class="product-tab">
                                <div class="product-tab">
                                    <p class="text" id="Tmessage">
                                        <br><br><?php if (empty($_smarty_tpl->tpl_vars['session']->value['vote_of_thanks'])) {?>Got anyone you'd like to thank? ....
                                        <?php } else {
echo $_smarty_tpl->tpl_vars['session']->value['vote_of_thanks'];
}?><br><br></p>
                                </div>
                            </div><!-- /.product-tabs -->
                        </div>

                        <br>
                        <br>
                        <hr>
                        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['user_products']->value)===null||$tmp==='' ? '' : $tmp)) {?>

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
                                    <h3 class="new-product-title pull-left">
                                        Products in Registry</h3>
                                    <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                                    </ul>
                                    <!-- /.nav-tabs -->
                                </div>
                                <div class="tab-content outer-top-xs">
                                    <div class="tab-pane in active" id="all">
                                        <div class="product-slider">
                                            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                                <?php
$_from = $_smarty_tpl->tpl_vars['user_products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['user_product'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['user_product']->_loop = false;
$_smarty_tpl->tpl_vars['eKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['user_product']->value) {
$_smarty_tpl->tpl_vars['user_product']->_loop = true;
$foreach_user_product_Sav = $_smarty_tpl->tpl_vars['user_product'];
?>
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['user_product']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['user_pro'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['user_pro']->_loop = false;
$_smarty_tpl->tpl_vars['eKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['user_pro']->value) {
$_smarty_tpl->tpl_vars['user_pro']->_loop = true;
$foreach_user_pro_Sav = $_smarty_tpl->tpl_vars['user_pro'];
?>
                                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user_pro']->value['product_id'];?>
" id="product_id">
                                                        <div class="item item-carousel">
                                                            <div class="products">
                                                                <div class="product">
                                                                    <div class="product-image">
                                                                        <div class="image"> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
product?product_id=<?php echo $_smarty_tpl->tpl_vars['user_pro']->value['product_id'];?>
"><img  src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/products/<?php echo $_smarty_tpl->tpl_vars['user_pro']->value['image'];?>
" alt=""></a> </div>
                                                                        <!-- /.image -->

                                                                        <div class="tag new"><span>new</span></div>
                                                                    </div>
                                                                    <!-- /.product-image -->

                                                                    <div class="product-info text-left">
                                                                        <h3 class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
product?product_id=<?php echo $_smarty_tpl->tpl_vars['user_pro']->value['product_id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['user_pro']->value['name']);?>
</a></h3>
                                                                        <div class="rating rateit-small"></div>
                                                                        <div class="description"></div>
                                                                        <div class="product-price"> <span class="price">&#8358;<?php echo $_smarty_tpl->tpl_vars['user_pro']->value['price'];?>
</span></div>
                                                                        <!-- /.product-price -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product -->
                                                                <div class="">
                                                                    <div class="action">
                                                                        <ul class="list-unstyled">
                                                                            <li class="add-cart-button btn-group">
                                                                                <button class="btn btn-success cart_add" type="button">Add to cart</button>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- /.action -->
                                                                </div>
                                                            </div>
                                                            <!-- /.products -->
                                                        </div>
                                                    <?php
$_smarty_tpl->tpl_vars['user_pro'] = $foreach_user_pro_Sav;
}
?>
                                                <?php
$_smarty_tpl->tpl_vars['user_product'] = $foreach_user_product_Sav;
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
                        <?php }?>

                        </section><!-- /.section -->
                    </div>
<?php echo $_smarty_tpl->getSubTemplate ("./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>