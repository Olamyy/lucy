<?php /* Smarty version 3.1.24, created on 2017-04-15 19:20:47
         compiled from "/var/www/html/lucy/public/_template/front/main_category.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20985247658f2647ff07d74_37055624%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdee4d671ca7f39849122fc457049b0ae285e093' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/main_category.tpl',
      1 => 1492280444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20985247658f2647ff07d74_37055624',
  'variables' => 
  array (
    'category_products' => 0,
    'BASE_URL' => 0,
    'product' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58f26480000bf8_98849364',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f26480000bf8_98849364')) {
function content_58f26480000bf8_98849364 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20985247658f2647ff07d74_37055624';
?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['category_products']->value)===null||$tmp==='' ? '' : $tmp)) {?>

    <?php
$_from = $_smarty_tpl->tpl_vars['category_products']->value;
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
        <div class='col-md-9'>
            <div class="search-result-container ">
                <div id="myTabContent" class="tab-content category-list">
                    <div class="tab-pane active " id="grid-container">
                        <div class="category-product">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 wow fadeInUp">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product-image">
                                                <div class="image"> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
product?product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
"><img  src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/products/<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" alt=""></a> </div>
                                                <!-- /.image -->

                                                <div class="tag new"><span><?php echo $_smarty_tpl->tpl_vars['product']->value['product_tags'];?>
</span></div>
                                            </div>
                                            <!-- /.product-image -->

                                            <div class="product-info text-left">
                                                <h3 class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
product?product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['product']->value['name'], 'UTF-8');?>
</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="description"></div>
                                                <div class="product-price"> <span class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>
                                                    <span class="price-before-discount"><?php echo $_smarty_tpl->tpl_vars['product']->value['before_discount_price'];?>
</span> </div>
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
                                                </div>
                                        </div>
                                    </div>
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
<?php }

}
}
?>