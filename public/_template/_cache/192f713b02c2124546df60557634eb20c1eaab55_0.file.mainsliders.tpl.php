<?php /* Smarty version 3.1.24, created on 2017-01-17 05:08:23
         compiled from "/var/www/html/lucy/public/_template/front/mainsliders.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1111616638587d98b7e8cd28_58305826%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '192f713b02c2124546df60557634eb20c1eaab55' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/mainsliders.tpl',
      1 => 1484626100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1111616638587d98b7e8cd28_58305826',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_587d98b7ea1a61_58507957',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587d98b7ea1a61_58507957')) {
function content_587d98b7ea1a61_58507957 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1111616638587d98b7e8cd28_58305826';
?>

<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div id="hero">
        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <div class="item" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/front/assets/images/sliders/1.jpg);">
                <div class="container-fluid">
                    <div class="caption bg-color vertical-center text-left">
                    </div>
                    <!-- /.caption -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.item -->

            <div class="item" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/front/assets/images/sliders/slide.jpg);">
                <div class="container-fluid">
                    <!-- /.caption -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.item -->

        </div>
        <!-- /.owl-carousel -->
    </div>
    <div class="info-boxes wow fadeInUp">
        <div class="info-boxes-inner">
            <div class="row">
                <div class="col-md-6 col-sm-4 col-lg-4">
                    <div class="info-box">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="info-box-heading green">money back</h4>
                            </div>
                        </div>
                        <h6 class="text">30 Days Money Back Guarantee</h6>
                    </div>
                </div>
                <!-- .col -->

                <div class="hidden-md col-sm-4 col-lg-4">
                    <div class="info-box">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="info-box-heading green">free shipping</h4>
                            </div>
                        </div>
                        <h6 class="text">Shipping on orders over $99</h6>
                    </div>
                </div>
                <!-- .col -->

                <div class="col-md-6 col-sm-4 col-lg-4">
                    <div class="info-box">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="info-box-heading green">Special Sale</h4>
                            </div>
                        </div>
                        <h6 class="text">Extra $5 off on all items </h6>
                    </div>
                </div>
                <!-- .col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.info-boxes-inner -->

    </div>
</div>

</div><?php }
}
?>