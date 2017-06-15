<?php /* Smarty version 3.1.24, created on 2017-06-01 01:23:12
         compiled from "/var/www/html/lucy/public/_template/admin/product/category/categoryheader.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1286734905592f5e7008ead2_38117395%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '091e9410d8f907eec44eb2e4be9640f0ba0382fb' => 
    array (
      0 => '/var/www/html/lucy/public/_template/admin/product/category/categoryheader.tpl',
      1 => 1496276074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1286734905592f5e7008ead2_38117395',
  'variables' => 
  array (
    'APP_NAME' => 0,
    'BASE_URL' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_592f5e700e3913_80121217',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592f5e700e3913_80121217')) {
function content_592f5e700e3913_80121217 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1286734905592f5e7008ead2_38117395';
?>

<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from dev.lorvent.com/admire/form_layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Jan 2017 10:09:52 GMT -->
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
 - Admin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <!--end of global styles-->
    <!--plugin styles-->
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/vendors/select2/css/select2.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/vendors/datatables/css/dataTables.bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/css/pages/dataTables.bootstrap.css"/>
    <!-- end of plugin styles -->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/css/pages/tables.css"/>

    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/vendors/modal/css/component.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/vendors/animate/css/animate.min.css" />
    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/css/pages/portlet.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/css/pages/advanced_components.css"/>
    <link type="text/css" rel="stylesheet" href="#" id="skin_change" />
    <!-- end of page level styles -->
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