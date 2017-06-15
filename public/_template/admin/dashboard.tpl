{include file="./header.tpl"}
{include file='./navmenu.tpl'}

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
                                                    <span class="number_val" id="visitors_count">{$visitor_count}</span><br/>
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
                                                    <span class="number_val" id="sales_count">{$customer_count}</span><br/>
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
                                                    <span class="number_val" id="visitors_count">{$online_user_count}</span>
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
{include file="./globalfooter.tpl"}
{include file="./dashboardfooter.tpl"}