<?php /* Smarty version 3.1.24, created on 2017-02-25 21:06:31
         compiled from "public/_template/front/registry/couple/preview/preview.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:174753862658b1e3c7b8cfb6_93343586%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5877b101ef77254a67f3ab3f027ab385efb778cf' => 
    array (
      0 => 'public/_template/front/registry/couple/preview/preview.tpl',
      1 => 1488048865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174753862658b1e3c7b8cfb6_93343586',
  'variables' => 
  array (
    'user_session' => 0,
    'session' => 0,
    'BASE_URL' => 0,
    'user_products' => 0,
    'ip' => 0,
    'current_url' => 0,
    'page_url' => 0,
    'user_product' => 0,
    'user_pro' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58b1e3c7d29a87_55409123',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b1e3c7d29a87_55409123')) {
function content_58b1e3c7d29a87_55409123 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/html/lucy/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php';

$_smarty_tpl->properties['nocache_hash'] = '174753862658b1e3c7b8cfb6_93343586';
echo $_smarty_tpl->getSubTemplate ("./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- ============================================== HEADER : END ============================================== -->

<?php
$_from = $_smarty_tpl->tpl_vars['user_session']->value;
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
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['session']->value['groom_last_name'];?>
" name="couple_id" id="couple">
<?php
$_smarty_tpl->tpl_vars['session'] = $foreach_session_Sav;
}
?>

<form>
    <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['session']->value['couple_id'];?>
" id="couple_id" class="couples-name">
    <input type="hidden" id="base_url" value="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" />
</form>

<div id="carts" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-background">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Your Cart</h3>
            </div>
            <div class="modal-body preview-modal-body">
                <h4 class="text-center"><br><br><br><br>You have nothing in your cart. Get shopping!</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ============================================== HEADER : END ============================================== -->
<div class="preview_bg"  style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['session']->value['dashboard_image'];?>
');">
    <div class="preview-display-name"><?php echo $_smarty_tpl->tpl_vars['session']->value['groom_first_name'];?>
 & <?php echo $_smarty_tpl->tpl_vars['session']->value['bride_first_name'];?>
</div>
    <div class="preview-display-date"><?php if (empty($_smarty_tpl->tpl_vars['session']->value['wedding_date'])) {?>Date is coming soon<?php } else {
echo $_smarty_tpl->tpl_vars['session']->value['wedding_date'];
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
                                    <br><br><?php if (empty($_smarty_tpl->tpl_vars['session']->value['vow_message'])) {?>Share your love with the world ....
                                    <?php } else {
echo $_smarty_tpl->tpl_vars['session']->value['vow_message'];
}?><br><br></p>
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