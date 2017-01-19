<?php /* Smarty version 3.1.24, created on 2017-01-16 19:27:05
         compiled from "/var/www/html/lucy/public/_template/front/sidenewsletter.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1671601770587d1079916762_01471805%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '715e985a1a73ecdc32ae5da6a0ab361d56083217' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/sidenewsletter.tpl',
      1 => 1484590745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1671601770587d1079916762_01471805',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_587d1079919506_63476297',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587d1079919506_63476297')) {
function content_587d1079919506_63476297 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1671601770587d1079916762_01471805';
?>
<div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
    <h3 class="section-title">Newsletters</h3>
    <div class="sidebar-widget-body outer-top-xs">
        <p>Sign Up for Our Newsletter!</p>
        <form>
            <div class="form-group">
                <label class="sr-only" for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
            </div>
            <button class="btn btn-primary">Subscribe</button>
        </form>
    </div>
    <!-- /.sidebar-widget-body -->
</div><?php }
}
?>