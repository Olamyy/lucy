<?php /* Smarty version 3.1.24, created on 2017-06-15 04:02:01
         compiled from "/var/www/html/lucy/public/_template/front/mainsliders.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6696195705941f8a921b722_12605415%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '192f713b02c2124546df60557634eb20c1eaab55' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/mainsliders.tpl',
      1 => 1497495717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6696195705941f8a921b722_12605415',
  'variables' => 
  array (
    'banner' => 0,
    'BASE_URL' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
    'banners' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5941f8a925b286_97717516',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5941f8a925b286_97717516')) {
function content_5941f8a925b286_97717516 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6696195705941f8a921b722_12605415';
?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div id="hero">
        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['banner']->value)===null||$tmp==='' ? '' : $tmp)) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['banner']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['banners'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['banners']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['banners']->value) {
$_smarty_tpl->tpl_vars['banners']->_loop = true;
$foreach_banners_Sav = $_smarty_tpl->tpl_vars['banners'];
?>
                        <div class="item" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/front/assets/images/banners/<?php echo $_smarty_tpl->tpl_vars['banners']->value;?>
);">
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['banners'] = $foreach_banners_Sav;
}
?>
                </div>
            <?php }?>
        </div>
    </div>
    </div>
    </div>

    <br>
    <br>
    <br>
    <br>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h2 class="text-center">This is going to be fun. We wish we were you right now.</h2>
    <div class="row">
        <div class="col-md-6 pull-left text-center">
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
auth/join"><button class="pull-right btn-reg">create registry</button></a>
        </div>
        <div class="col-md-6">
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
auth/login"><button class="pull-left btn-find">Go to my registry</button></a>
        </div>
    </div>
</div>

<div class="container benefit-main-wrapper">
    <div class="col-md-12 benefit-wrapper">
        <h1 class="text-center">Lucy Registry Benefits</h1>
        <div class="row">
            <a href="#" target="_self" class="col-xs-12 col-sm-6 col-md-4 benefit-block">
                <div class="benefit-content">
                    <h3 class="text-center">
                        <div class="glyphicon glyphicon-gift"></div>
                        <br>
                        Wedding Registry</h3>
                    <p class="text-center text-muted">Wedding Registry Description</p>
                    <p class="text-center">
                    </p>
                </div>
            </a>
            <a href="#" target="_self" class="col-xs-12 col-sm-6 col-md-4 benefit-block">
                <div class="benefit-content">
                    <h3 class="text-center">
                        <div class="glyphicon glyphicon-gift"></div>
                        <br>
                        House Warming</h3>
                    <p class="text-center text-muted">House Warming  Description</p>
                    <p class="text-center">
                    </p>
                </div>
            </a>
            <a href="#" target="_self" class="col-xs-12 col-sm-6 col-md-4 benefit-block">
                <div class="benefit-content">
                    <h3 class="text-center">
                        <div class="glyphicon glyphicon-gift"></div>
                        <br>
                        Anniversary</h3>
                    <p class="text-center text-muted">Anniversary Registry Description</p>
                    <p class="text-center">
                    </p>
                </div>
            </a>
            <a href="#" target="_self" class="col-xs-12 col-sm-6 col-md-4 benefit-block">
                <div class="benefit-content">
                    <h3 class="text-center">
                        <div class="glyphicon glyphicon-gift"></div>
                        <br>
                        Birthday</h3>
                    <p class="text-center text-muted">Birthday registry description.</p>
                    <p class="text-center">
                    </p>
                </div>
            </a>
            <a href="#" target="_self" class="col-xs-12 col-sm-6 col-md-4 benefit-block">
                <div class="benefit-content">
                    <h3 class="text-center">
                        <div class="glyphicon glyphicon-gift"></div>
                        <br>
                        Baby Shower</h3>
                    <p class="text-center text-muted">Naming registry description.</p>
                    <p class="text-center">
                    </p>
                </div>
            </a>
            <a href="#" target="_self" class="col-xs-12 col-sm-6 col-md-4 benefit-block">
                <div class="benefit-content">
                    <h3 class="text-center">
                        <div class="glyphicon glyphicon-gift"></div>
                        <br>
                        Lucky</h3>
                    <p class="text-center text-muted">Lucky registry description</p>
                    <p class="text-center">
                    </p>
                </div>
            </a>

        </div>

    </div>
</div><?php }
}
?>