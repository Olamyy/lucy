<?php /* Smarty version 3.1.24, created on 2017-02-21 17:01:38
         compiled from "/var/www/html/lucyreg/public/_template/front/specialoffers.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:89713717458ac6462951a78_83223018%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55f892de336b3d45588aeef365febebcbcbe0c5b' => 
    array (
      0 => '/var/www/html/lucyreg/public/_template/front/specialoffers.tpl',
      1 => 1487688593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89713717458ac6462951a78_83223018',
  'variables' => 
  array (
    'special_offer' => 0,
    'BASE_URL' => 0,
    'ip' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58ac6462976613_15169843',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ac6462976613_15169843')) {
function content_58ac6462976613_15169843 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/html/lucyreg/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php';

$_smarty_tpl->properties['nocache_hash'] = '89713717458ac6462951a78_83223018';
if ((($tmp = @$_smarty_tpl->tpl_vars['special_offer']->value)===null||$tmp==='' ? '' : $tmp)) {?>
  <input type="hidden" id="base_url" value="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">
  <input type="hidden" id="quantity" value="1">
  <input type="hidden" id="user_ip" value="<?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
">

  <div class="sidebar-widget outer-bottom-small wow fadeInUp">
    <h3 class="section-title">Special Offers</h3>
    <div class="sidebar-widget-body outer-top-xs">
      <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
        <?php
$_from = $_smarty_tpl->tpl_vars['special_offer']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['data']->_loop = false;
$_smarty_tpl->tpl_vars['eKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$foreach_data_Sav = $_smarty_tpl->tpl_vars['data'];
?>
          <div class="item">
            <div class="products special-product">
              <div class="product">
                <div class="product-micro">
                  <div class="row product-micro-row">
                    <div class="col col-xs-5">
                      <div class="product-image">
                        <div class="image"> <a href="#"> <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/products/<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" alt=""> </a> </div>
                        <!-- /.image -->

                      </div>
                      <!-- /.product-image -->
                    </div>
                    <!-- /.col -->
                    <div class="col col-xs-7">
                      <div class="product-info">
                        <h3 class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
product?product_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['product_id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['data']->value['name']);?>
</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="product-price"> <span class="price">&#8358;<?php echo $_smarty_tpl->tpl_vars['data']->value['price'];?>
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
$_smarty_tpl->tpl_vars['data'] = $foreach_data_Sav;
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