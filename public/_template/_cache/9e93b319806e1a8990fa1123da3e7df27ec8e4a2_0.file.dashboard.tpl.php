<?php /* Smarty version 3.1.24, created on 2017-06-03 13:48:55
         compiled from "public/_template/admin/dashboard.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19016684725932b037b8d1c3_82868454%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e93b319806e1a8990fa1123da3e7df27ec8e4a2' => 
    array (
      0 => 'public/_template/admin/dashboard.tpl',
      1 => 1496472433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19016684725932b037b8d1c3_82868454',
  'variables' => 
  array (
    'visitor_count' => 0,
    'customer_count' => 0,
    'online_user_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5932b037c95831_24970514',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5932b037c95831_24970514')) {
function content_5932b037c95831_24970514 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19016684725932b037b8d1c3_82868454';
echo $_smarty_tpl->getSubTemplate ("./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('./navmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


        <!-- /#left -->
        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar row">
                    <div class="col-xs-6">
                        <h4 class="m-t-5">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </h4>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-xs-12">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="bg-primary top_cards">
                                        <div class="row icon_margin_left">

                                            <div class="col-lg-5 icon_padd_left">
                                                <div class="float-xs-left">
<span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-shopping-cart fa-stack-1x fa-inverse text-primary sales_hover"></i>
</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 icon_padd_right">
                                                <div class="float-xs-right cards_content">
                                                    <span class="number_val" id="sales_count"></span><br/>
                                                    <span class="card_description">Orders</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="bg-success top_cards">
                                        <div class="row icon_margin_left">
                                            <div class="col-lg-5 icon_padd_left">
                                                <div class="float-xs-left">
<span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-user     fa-stack-1x fa-inverse text-success visit_icon"></i>
</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 icon_padd_right">
                                                <div class="float-xs-right cards_content">
                                                    <span class="number_val" id="visitors_count"><?php echo $_smarty_tpl->tpl_vars['visitor_count']->value;?>
</span><br/>
                                                    <span class="card_description">Visitors</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7 col-xs-12">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="bg-primary top_cards">
                                        <div class="row icon_margin_left">

                                            <div class="col-lg-5 icon_padd_left">
                                                <div class="float-xs-left">
<span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-shopping-cart fa-stack-1x fa-inverse text-primary sales_hover"></i>
</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 icon_padd_right">
                                                <div class="float-xs-right cards_content">
                                                    <span class="number_val" id="sales_count"><?php echo $_smarty_tpl->tpl_vars['customer_count']->value;?>
</span><br/>
                                                    <span class="card_description">Customers</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="bg-success top_cards">
                                        <div class="row icon_margin_left">
                                            <div class="col-lg-5 icon_padd_left">
                                                <div class="float-xs-left">
<span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-eye fa-stack-1x fa-inverse text-success visit_icon"></i>
</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 icon_padd_right">
                                                <div class="float-xs-right cards_content">
                                                    <span class="number_val" id="visitors_count"><?php echo $_smarty_tpl->tpl_vars['online_user_count']->value;?>
</span>
                                                    <br/>
                                                    <span class="card_description">Online</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-xs-12 m-t-25 md_align_section">
                            <div class="card">
                                <div class="card-header bg-white">
                                    This Month
                                </div>
                                <div class="card-body">
                                    <div class="task-item">

                                        Sales
                                        <span class="float-xs-right text-muted progress-info">52%</span>
                                        <div id="progress-bar">
                                            <progress class="progress progress-danger" value="52"
                                                      max="100"></progress>
                                        </div>
                                    </div>
                                    <div class="task-item">
                                        Projects
                                        <span class="float-xs-right text-muted progress-primary">80%</span>
                                        <div id="progress-bar1">
                                            <progress class="progress progress-warning" value="80"
                                                      max="100"></progress>
                                        </div>
                                    </div>
                                    <div class="task-item">
                                        Sales
                                        <span class="float-xs-right text-muted progress-warning">25%</span>
                                        <div id="progress-bar2">
                                            <progress class="progress progress-success" value="25"
                                                      max="100"></progress>
                                        </div>
                                    </div>
                                    <div class="task-item">
                                        New Users
                                        <span class="float-xs-right text-muted progress-primary">93%</span>
                                        <div id="progress-bar5">
                                            <progress class="progress progress-primary" value="93" max="100"></progress>
                                        </div>
                                    </div>
                                    <div class="task-item">
                                        Revenue
                                        <span class="float-xs-right text-muted progress-danger">50%</span>
                                        <div id="progress-bar3">
                                            <progress class="progress progress-danger" value="50" max="100"></progress>
                                        </div>
                                    </div>
                                    <div class="task-item">
                                        Total sold
                                        <span class="float-xs-right text-muted">40%</span>
                                        <div id="progress-bar4">
                                            <progress class="progress progress-mint" value="40" max="100"></progress>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.inner -->
                </div>
                <!-- /.outer -->
            </div>
            <!-- /#content -->
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("./globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("./dashboardfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>