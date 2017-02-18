<?php /* Smarty version 3.1.24, created on 2017-02-15 13:57:31
         compiled from "/var/www/html/lucy/public/_template/front/side_category.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:108703811058a4503bafa057_40688229%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f3f8dc0952d1d80b29767a8ff16b5dbac18f329' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/side_category.tpl',
      1 => 1487163448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108703811058a4503bafa057_40688229',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58a4503bb08b39_97483221',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58a4503bb08b39_97483221')) {
function content_58a4503bb08b39_97483221 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '108703811058a4503bafa057_40688229';
?>
<div class='col-md-3 sidebar'>
    <div class="sidebar-module-container">
        <div class="sidebar-filter">
            <!-- ============================================== SIDEBAR CATEGORY : END ============================================== -->

            <!-- ============================================== PRICE SILDER============================================== -->
            <div class="sidebar-widget wow fadeInUp">
                <div class="widget-header">
                    <h4 class="widget-title">Price Slider</h4>
                </div>
                <div class="sidebar-widget-body m-t-10">
                    <div class="price-range-holder"> <span class="min-max"> <span class="pull-left">N200.00</span> <span class="pull-right">N800.00</span> </span>
                        <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">
                        <input type="text" class="price-slider" value="" >
                    </div>
                    <!-- /.price-range-holder -->
                    <a href="#" class="lnk btn btn-primary">Show Now</a> </div>
                <!-- /.sidebar-widget-body -->
            </div>
            <!-- /.sidebar-widget -->
            <!-- ============================================== PRICE SILDER : END ============================================== -->
            <!-- ============================================== MANUFACTURES============================================== -->
            <div class="sidebar-widget wow fadeInUp">
                <div class="widget-header">
                    <h4 class="widget-title">Manufactures</h4>
                </div>
                <div class="sidebar-widget-body">
                    <ul class="list">
                        <li><a href="#">Forever 18</a></li>
                        <li><a href="#">Nike</a></li>
                        <li><a href="#">Dolce & Gabbana</a></li>
                        <li><a href="#">Alluare</a></li>
                        <li><a href="#">Chanel</a></li>
                        <li><a href="#">Other Brand</a></li>
                    </ul>
                    <!--<a href="#" class="lnk btn btn-primary">Show Now</a>-->
                </div>
                <!-- /.sidebar-widget-body -->
            </div>
            <!-- /.sidebar-widget -->
            <!-- ============================================== MANUFACTURES: END ============================================== -->

            <!-- ============================================== COMPARE============================================== -->
            <div class="sidebar-widget wow fadeInUp outer-top-vs">
                <h3 class="section-title">Compare products</h3>
                <div class="sidebar-widget-body">
                    <div class="compare-report">
                        <p>You have no <span>item(s)</span> to compare</p>
                    </div>
                    <!-- /.compare-report -->
                </div>
                <!-- /.sidebar-widget-body -->
            </div>
            <!-- /.sidebar-widget -->
        </div>
        <!-- /.sidebar-filter -->
    </div>
    <!-- /.sidebar-module-container -->
</div>
<?php }
}
?>