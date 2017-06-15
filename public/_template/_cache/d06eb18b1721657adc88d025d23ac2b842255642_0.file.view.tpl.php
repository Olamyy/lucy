<?php /* Smarty version 3.1.24, created on 2017-06-15 03:25:02
         compiled from "public/_template/admin/product/category/view/view.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14283787145941effedc3eb6_58000196%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd06eb18b1721657adc88d025d23ac2b842255642' => 
    array (
      0 => 'public/_template/admin/product/category/view/view.tpl',
      1 => 1497493500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14283787145941effedc3eb6_58000196',
  'variables' => 
  array (
    'error' => 0,
    'err' => 0,
    'message' => 0,
    'mess' => 0,
    'category_details' => 0,
    'BASE_URL' => 0,
    'existing' => 0,
    'data' => 0,
    'eKey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5941effee37226_34960436',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5941effee37226_34960436')) {
function content_5941effee37226_34960436 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14283787145941effedc3eb6_58000196';
echo $_smarty_tpl->getSubTemplate ("./viewheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("../../../navmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar row">
            <div class="col-lg-6 col-md-4 col-sm-4">
                <h4 class="nav_top_align">
                    <i class="fa fa-th"></i>
                    Categories
                </h4>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-8">
                <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Categories</a>
                    </li>
                    <li class="breadcrumb-item active">View</li>
                </ol>
            </div>
        </div>
    </header>


    <div class="outer">
        <div class="inner bg-light lter bg-container">
            <!-- editable data  table starts-->
            <div class="card m-t-35">
                <div class="card-header bg-white">
                    <i class="fa fa-table"> </i> Categories
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
                    <div class="m-t-35">
                        <div class="m-t-50">
                            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['category_details']->value)===null||$tmp==='' ? '' : $tmp)) {?>
                            <table id="example_demo" class="table table-hover table-bordered float-lg-right" >
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th style="display: none">ID</th>
                                    <th>Category Title</th>
                                    <th>Category Description</th>
                                    <th>URL</th>
                                    <th>Date Created</th>
                                    <th>Search Filters</th>
                                    <th>Sub Categories</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->tpl_vars['category_details']->value;
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
                                    <div class="modal fade bs-example-modal-sm in display_none" id="stack1" tabindex="-1" role="dialog"
                                         aria-hidden="false">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title text-white">Sub Category</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/admin/category/view?action=addsub">
                                                        <p>
                                                            Category Title:
                                                            <input id="cat_title" type="text" name="cat_title" class="form-control" placeholder="<?php if ((($tmp = @$_smarty_tpl->tpl_vars['existing']->value)===null||$tmp==='' ? '' : $tmp)) {
echo $_smarty_tpl->tpl_vars['existing']->value[0]['sub_categories'];
} else { ?>Enter the sub category<?php }?>" required/>
                                                            <input id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" class="cat_" type="text" name="c_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" hidden/>
                                                        </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                                                    <button type="submit" class="btn btn-primary" id="edit_button">Add Sub Categories</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <tr>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['eKey']->value+1;?>

                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>

                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>

                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['data']->value['category_url'];?>

                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['data']->value['created_on'];?>

                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['data']->value['search_filters'];?>

                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['data']->value['sub_categories'];?>

                                    </td>
                                    <td class="admin_action">
             <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/admin/category/edit?c_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><button class="btn btn-primary btn-reg">Edit</button></a>
             <button id="" class="btn btn-warning" data-toggle="modal" data-href="#stack1" href="#stack1"> Add Sub Category </button>
             <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/admin/category/delete?c_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><button class="btn btn-danger btn-reg">Delete </button></a>
                                    </td>
                                 </tr>
                                <?php
$_smarty_tpl->tpl_vars['data'] = $foreach_data_Sav;
}
?>
                                </tbody>
                            </table>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end of responsive tables-->
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
    <!-- /#content -->

</div>


<?php echo $_smarty_tpl->getSubTemplate ("./viewfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>