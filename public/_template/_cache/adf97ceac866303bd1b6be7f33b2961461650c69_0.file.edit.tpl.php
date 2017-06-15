<?php /* Smarty version 3.1.24, created on 2017-06-12 14:49:34
         compiled from "public/_template/admin/product/category/edit/edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:788278499593e9bee93b325_51043957%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adf97ceac866303bd1b6be7f33b2961461650c69' => 
    array (
      0 => 'public/_template/admin/product/category/edit/edit.tpl',
      1 => 1497275363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '788278499593e9bee93b325_51043957',
  'variables' => 
  array (
    'error' => 0,
    'err' => 0,
    'message' => 0,
    'mess' => 0,
    'BASE_URL' => 0,
    'cat_details' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_593e9bee9d7f79_84199626',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_593e9bee9d7f79_84199626')) {
function content_593e9bee9d7f79_84199626 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '788278499593e9bee93b325_51043957';
echo $_smarty_tpl->getSubTemplate ("../../category/categoryheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("../../../navmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar row">
            <div class="col-sm-5 col-lg-6 skin_txt">
                <h4 class="nav_top_align">
                    <i class="fa fa-pencil"></i>
                    Category
                </h4>
            </div>
            <div class="col-sm-7 col-lg-6">
                <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Category</a>
                    </li>
                    <li class="active breadcrumb-item">Add</li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <!-- basic signin layout ends-->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- inline sign in layout ends-->
                    </div>
                </div>
                <!-- end of horizontal signin layout-->
                <div class="col-lg-12">
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            Fill the form below to add a new category
                        </div>
                        <div class="card-block">
                            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp)) {?>
                                <div class="alert alert-danger">
                                    <strong>Oops! Something went wrong</strong>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['error']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['err'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['err']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
$foreach_err_Sav = $_smarty_tpl->tpl_vars['err'];
?>
                                        <p><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</p>
                                    <?php
$_smarty_tpl->tpl_vars['err'] = $foreach_err_Sav;
}
?>
                                </div>
                            <?php }?>
                            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? '' : $tmp)) {?>
                                <div class="alert alert-success">
                                    <strong>Success!</strong>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['message']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['mess'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['mess']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['mess']->value) {
$_smarty_tpl->tpl_vars['mess']->_loop = true;
$foreach_mess_Sav = $_smarty_tpl->tpl_vars['mess'];
?>
                                        <p><?php echo $_smarty_tpl->tpl_vars['mess']->value;?>
</p>
                                    <?php
$_smarty_tpl->tpl_vars['mess'] = $foreach_mess_Sav;
}
?>
                                </div>
                            <?php }?>
                            <form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/admin/category/edit?c_id=<?php echo $_smarty_tpl->tpl_vars['cat_details']->value[0]['id'];?>
">
                                <fieldset>
                                    <!-- Name input-->
                                    <div class="form-group row m-t-25">
                                        <div class="col-lg-10 push-lg-1">
                                            <label for="signup_name" class="form-control-label form-group-horizontal">
                                                Main Category Title
                                            </label>
                                            <div class="input-group">
                                                <input type="text" name="category_title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cat_details']->value[0]['title'];?>
" id="signup_name" placeholder="Enter the title of the category">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- first name-->
                                    <div class="form-group row">
                                        <div class="col-lg-10 push-lg-1">
                                            <label for="signup_lastname" class="form-control-label form-group-horizontal">
                                                Short Description
                                            </label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="short_description" value="<?php echo $_smarty_tpl->tpl_vars['cat_details']->value[0]['description'];?>
" id="signup_lastname" placeholder="Short description of the category">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-10 push-lg-1">
                                            <label for="signup_email" class="form-control-label form-group-horizontal">
                                                Sub Categories
                                            </label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="sub_cat_cats" id="signup_email" value="<?php echo $_smarty_tpl->tpl_vars['cat_details']->value[0]['sub_categories'];?>
" placeholder="Enter the sub categories of the sub category if it has any. If more than one, separate them with two commas">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-10 push-lg-1">
                                            <label for="signup_email" class="form-control-label form-group-horizontal">
                                                Category URL
                                            </label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="signup_email"  value="<?php echo $_smarty_tpl->tpl_vars['cat_details']->value[0]['category_url'];?>
" name="cat_url" placeholder="Enter the preferred category url.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-10 push-lg-1">
                                            <label for="signup_email" class="form-control-label form-group-horizontal">
                                                Category Search Filters
                                            </label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="cat_search_filters" id="signup_email" value="<?php echo $_smarty_tpl->tpl_vars['cat_details']->value[0]['search_filters'];?>
" placeholder="Enter the search filters for the category.">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- last name-->
                                    <div class="form-group row">
                                        <div class="col-lg-11 push-lg-1">
                                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Update Category</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../category/categoryfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>