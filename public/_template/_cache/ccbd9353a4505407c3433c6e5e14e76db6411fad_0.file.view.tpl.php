<?php /* Smarty version 3.1.24, created on 2017-04-14 17:50:40
         compiled from "public/_template/admin/product/view.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:50267527058f0fde09af149_44343030%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccbd9353a4505407c3433c6e5e14e76db6411fad' => 
    array (
      0 => 'public/_template/admin/product/view.tpl',
      1 => 1492185751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50267527058f0fde09af149_44343030',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'error' => 0,
    'err' => 0,
    'product_details' => 0,
    'eKey' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58f0fde0a5ff48_23110777',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f0fde0a5ff48_23110777')) {
function content_58f0fde0a5ff48_23110777 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '50267527058f0fde09af149_44343030';
echo $_smarty_tpl->getSubTemplate ("../product/category/view/viewheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("../navmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar row">
            <div class="col-lg-6 col-md-4 col-sm-4">
                <h4 class="nav_top_align">
                    <i class="fa fa-th"></i>
                    Products
                </h4>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-8">
                <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Product</a>
                    </li>
                    <li class="breadcrumb-item active">View</li>
                </ol>
            </div>
        </div>
    </header>

    <div class="modal fade bs-example-modal-sm in display_none" id="stack1" tabindex="-1" role="dialog"
         aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title text-white">Product Title</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/admin/product/view">
                        <p>
                            Product Title:
                            <input id="cat_title" type="text" name="product_name" class="form-control" placeholder="Enter the name of the product to edit"/>
                        </p>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="outer">
        <div class="inner bg-light lter bg-container">
            <!-- editable data  table starts-->
            <div class="card m-t-35">
                <div class="card-header bg-white">
                    <i class="fa fa-table"> </i> Products
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
                    <div class="m-t-35">
                        <button id="" class="btn btn-primary" data-toggle="modal" data-href="#stack1" href="#stack1"> Edit Product </button>
                        <button id="del_button" class="btn btn-danger"> Delete Selected Row </button>
                        <div class="m-t-25">
                            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['product_details']->value)===null||$tmp==='' ? '' : $tmp)) {?>
                                <table id="example_demo" class="table table-hover table-bordered " >
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th style="display: none">ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Model</th>
                                        <th>Quantity</th>
                                        <th>Delivery</th>
                                        <th>Price</th>
                                        <th>Views</th>
                                        <th>Date Added</th>
                                        <th>Date Added</th>
                                        <th>Search Filters</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['product_details']->value;
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
                                        <tr>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['eKey']->value+1;?>

                                            </td>
                                            <td style="display: none;" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>

                                            </td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>

                                            </td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>

                                            </td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['data']->value['model'];?>

                                            </td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['data']->value['quantity'];?>

                                            </td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['data']->value['price'];?>

                                            </td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['data']->value['delivery'];?>

                                            </td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['data']->value['view_count'];?>

                                            </td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['data']->value['date_added'];?>

                                            </td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['data']->value['search_filters'];?>

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


<?php echo $_smarty_tpl->getSubTemplate ("../product/category/view/viewfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>