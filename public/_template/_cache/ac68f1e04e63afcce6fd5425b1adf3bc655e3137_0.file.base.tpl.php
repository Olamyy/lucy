<?php /* Smarty version 3.1.24, created on 2017-06-01 18:55:55
         compiled from "public/_template/front/registry/base.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13314505575930552bb17744_63007790%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac68f1e04e63afcce6fd5425b1adf3bc655e3137' => 
    array (
      0 => 'public/_template/front/registry/base.tpl',
      1 => 1496170487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13314505575930552bb17744_63007790',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5930552bb7a572_10626390',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5930552bb7a572_10626390')) {
function content_5930552bb7a572_10626390 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13314505575930552bb17744_63007790';
echo $_smarty_tpl->getSubTemplate ('../header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("../navmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<div class="container-fluid top-div">
    <h2 class="text-center">This is going to be fun. We wish we were you right now.</h2>
    
    <div class="row">
        <div class="col-md-6">
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/auth/join"><button class="pull-right btn-reg">register</button></a>
        </div>
        <div class="col-md-6">
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/find"><button class="pull-left btn-find">Find a gift registry</button></a>
        </div>
    </div>
</div>

<div class="container benefit-main-wrapper">
    <div class="col-md-2 link-wrapper">
        <div class="controls-wrapper">
            <div class="nav-section">
                <h6>REGISTRY</h6>
                <ul>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/find">Find a Registry</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/create">Create a Registry</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/action/manage">Manage a Registry</a></li>
                </ul>
            </div>
            <div class="nav-section">
                <ul>
                    <li><a href="#">Registry Benefits</a></li>
                    <li><a href="#">Registry Timeline</a></li>
                    <li><a href="#">Where Do I Start?</a></li>
                </ul>
            </div>
        </div>

    </div>
    <div class="col-md-10 benefit-wrapper">
        <h1 class="text-center">Gift Registry Benefits</h1>
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
                        Child Naming</h3>
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
</div>
<?php echo $_smarty_tpl->getSubTemplate ("../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>