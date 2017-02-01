<?php /* Smarty version 3.1.24, created on 2017-01-20 18:24:48
         compiled from "public/_template/admin/dashboard.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:176654760588247e082e3e9_84270690%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e93b319806e1a8990fa1123da3e7df27ec8e4a2' => 
    array (
      0 => 'public/_template/admin/dashboard.tpl',
      1 => 1484933083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176654760588247e082e3e9_84270690',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_588247e08a62f5_95046581',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_588247e08a62f5_95046581')) {
function content_588247e08a62f5_95046581 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '176654760588247e082e3e9_84270690';
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
                                                    <span class="number_val" id="sales_count"></span><i
                                                            class="fa fa-long-arrow-up fa-2x"></i>
                                                    <br/>
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
                                                    <span class="number_val" id="visitors_count"></span><i
                                                            class="fa fa-long-arrow-up fa-2x"></i>
                                                    <br/>
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
                                                    <span class="number_val" id="sales_count"></span><i
                                                            class="fa fa-long-arrow-up fa-2x"></i>
                                                    <br/>
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
                                                    <span class="number_val" id="visitors_count"></span><i
                                                            class="fa fa-long-arrow-up fa-2x"></i>
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
    <!--wrapper-->
    <div id="right">
        <div class="right_content">

            <div class="well well-small dark">
                <div class="xs_skin_hide hidden-sm-up toggle-right"><i class="fa fa-cog"></i></div>
                <h4 class="brown_txt">
<span class="fa-stack fa-sm">
<i class="fa fa-circle fa-stack-2x"></i>
<i class="fa fa-paint-brush fa-stack-1x fa-inverse"></i>
</span>
                    Skins
                </h4>
                <br/>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('blue_black_skin.html','css')">
                    <div class="skin_blue skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('green_black_skin.html','css')">
                    <div class="skin_green skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('purple_black_skin.html','css')">
                    <div class="skin_purple skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('orange_black_skin.html','css')">
                    <div class="skin_orange skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('red_black_skin.html','css')">
                    <div class="skin_red skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('mint_black_skin.html','css')">
                    <div class="skin_mint skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('brown_black_skin.html','css')">
                    <div class="skin_brown skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('black_skin.html','css')">
                    <div class="skin_black skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skin_btn skin_blue" onclick="javascript:loadjscssfile('blue_skin.html','css')"></div>
                <div class="skin_btn skin_green" onclick="javascript:loadjscssfile('green_skin.html','css')"></div>
                <div class="skin_btn skin_purple" onclick="javascript:loadjscssfile('purple_skin.html','css')"></div>
                <div class="skin_btn skin_orange" onclick="javascript:loadjscssfile('orange_skin.html','css')"></div>
                <div class="skin_btn skin_red" onclick="javascript:loadjscssfile('red_skin.html','css')"></div>
                <div class="skin_btn skin_mint" onclick="javascript:loadjscssfile('mint_skin.html','css')"></div>
                <div class="skin_btn skin_brown" onclick="javascript:loadjscssfile('brown_skin.html','css')"></div>
                <div class="skin_btn skin_black" onclick="javascript:loadjscssfile('black_skin.html','css')"></div>
            </div>
            <div class="well well-small dark">
                <h4 class="brown_txt margin15_bottom">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/admin/assets/img/admin.jpg" width="32" height="32" class="rounded-circle avatar-img" alt="avatar">
                    &nbsp;Admin
                    Statistics</h4>
                <br/>
                <ul class="list-unstyled">
                    <li class="green_txt margin15_bottom">
                        <span class="fa-stack fa-sm">
                        <i class="fa fa-circle fa-stack-2x text-mint"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                        </span> &nbsp; Last Login
                        <span class="inlinesparkline float-xs-right">2hrs Back</span>
                    </li>
                    <li class="warning_txt margin15_bottom">
                            <span class="fa-stack fa-sm">
                            <i class="fa fa-circle fa-stack-2x text-brown"></i>
                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                            </span> &nbsp; Pending Tasks
                        <span class="dynamicsparkline float-xs-right">12</span>
                    </li>
                    <li class="primary_txt margin15_bottom">
                        <span class="fa-stack fa-sm">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-cloud fa-stack-1x fa-inverse"></i>
                        </span> &nbsp; Weather Today
                        <span class="dynamicbar float-xs-right">Rainy</span>
                    </li>
                    <li class="margin15_bottom">
                        <span class="fa-stack fa-sm">
                        <i class="fa fa-circle fa-stack-2x text-brown"></i>
                        <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
                        </span> &nbsp; Events
                        <span class="inlinebar float-xs-right">Team Out</span>
                    </li>
                    <li class="success_txt margin15_bottom">
                    <span class="fa-stack fa-sm">
                    <i class="fa fa-circle fa-stack-2x text-success"></i>
                    <i class="fa fa-bell fa-stack-1x fa-inverse"></i>
                    </span> &nbsp; Notifications
                        <span class="inlinebar float-xs-right">5</span>
                    </li>
                </ul>
            </div>
            <div class="well well-small dark right_progressbar_section">
                <h4 class="brown_txt">
                    <span class="fa-stack fa-sm">
                    <i class="fa fa-circle fa-stack-2x text-brown"></i>
                    <i class="fa fa-hand-o-down fa-stack-1x fa-inverse"></i>
                    </span>
                    Alerts
                </h4>
                <br/>
                <span>Sales Improvement</span>
                <span class="float-xs-right">
                    <small>20%</small>
                    </span>
                <div class="progress xs">
                    <progress class="progress progress-striped progress-primary" value="20" max="100"></progress>
                </div>
                <span>Server Load</span>
                <span class="float-xs-right">
                    <small>80%</small>
                    </span>
                <div class="progress xs">
                    <progress class="progress  progress-striped progress-mint" value="80" max="100"></progress>
                </div>
                <span>Traffic Improvement</span>
                <span class="float-xs-right">
<small>55%</small>
</span>
                <div class="progress xs">
                    <progress class="progress  progress-striped progress-danger" value="55" max="100"></progress>
                </div>
            </div>
        </div>
    </div>
    <!-- # right side -->
</div>
<?php echo $_smarty_tpl->getSubTemplate ("./globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("./dashboardfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>