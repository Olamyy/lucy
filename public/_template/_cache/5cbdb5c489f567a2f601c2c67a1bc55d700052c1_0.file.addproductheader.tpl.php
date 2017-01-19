<?php /* Smarty version 3.1.24, created on 2017-01-19 09:50:44
         compiled from "/var/www/html/lucy/public/_template/admin/product/addproductheader.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:95630995958807de4d3ce98_21639209%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cbdb5c489f567a2f601c2c67a1bc55d700052c1' => 
    array (
      0 => '/var/www/html/lucy/public/_template/admin/product/addproductheader.tpl',
      1 => 1484815839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95630995958807de4d3ce98_21639209',
  'variables' => 
  array (
    'APP_NAME' => 0,
    'BASE_URL' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58807de4d92703_77971422',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58807de4d92703_77971422')) {
function content_58807de4d92703_77971422 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '95630995958807de4d3ce98_21639209';
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
 | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/img/logo1.ico"/>
    <!-- global styles-->
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/css/components.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/css/custom.css"/>
    <!-- end of global styles-->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
    <!--page level styles-->
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/css/pages/wizards.css"/>

    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css"/>

    

    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>

    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/css/pages/form_elements.css"/>



    <!--End of page styles-->
</head>
<body>
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/img/loader.gif" style=" width: 40px;" alt="loading...">
    </div>
</div><?php }
}
?>