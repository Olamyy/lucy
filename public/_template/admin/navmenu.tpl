<div class="bg-dark" id="wrap">
    <div id="top">
        <!-- .navbar -->
        <nav class="navbar navbar-static-top">
            <div class="container-fluid">
                <a class="navbar-brand text-xs-center" href="">
                    <h4 class="text-white">LUCY ADMIN</h4>
                </a>
                <div class="menu">
                        <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars text-white"></i>
                        </span>
                </div>

                <!-- Toggle Button -->
                <div class="text-xs-right xs_menu">
                    <button class="navbar-toggler hidden-xs-up" type="button" data-toggle="collapse"
                            data-target="#nav-content">
                        ☰
                    </button>
                </div>
            </div>

            <!-- /.container-fluid --> </nav>
        <!-- /.navbar -->
        <!-- /.head --> </div>
    <!-- /#top -->
    <div class="wrapper">
        <div id="left">
            <!-- #menu -->
            <ul id="menu" class="bg-blue dker">
                <li class="active">
                    <a href="">
                        <i class="fa fa-home"></i>
                        <span class="link-title">&nbsp;Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-sitemap"></i>
                        <span class="link-title">&nbsp; Products</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{$BASE_URL}admin/Product/view">
                                <i class="fa fa-angle-right"></i> &nbsp;View
                            </a>
                        </li>
                        <li>
                            <a href="{$BASE_URL}admin/Product/add">
                                <i class="fa fa-angle-right"></i> &nbsp;Add
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-sitemap"></i>
                        <span class="link-title">&nbsp; Product Categories</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{$BASE_URL}admin/Category/add">
                                <i class="fa fa-angle-right"></i> &nbsp;Add Category
                            </a>
                        </li>
                        <li>
                            <a href="{$BASE_URL}admin/Category/view">
                                <i class="fa fa-angle-right"></i> &nbsp;View Categories
                            </a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="javascript:;">
                        <i class="fa fa-sitemap"></i>
                        <span class="link-title">&nbsp; Sales</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp;Orders
                            </a>
                            <ul class="sub-menu sub-submenu">
                                <li>
                                    <a href="{$BASE_URL}admin/sales/orders?type=pending">
                                        <i class="fa fa-angle-right"></i> &nbsp;Pending Orders
                                    </a>
                                </li>
                                <li>
                                    <a href="{$BASE_URL}admin/sales/orders?type=approved">
                                        <i class="fa fa-angle-right"></i> &nbsp;Approved Orders
                                    </a>
                                </li>
                                <li>
                                    <a href="{$BASE_URL}admin/sales/orders?type=rejected">
                                        <i class="fa fa-angle-right"></i> &nbsp;Rejected Orders
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp;Returns
                            </a>
                            <ul class="sub-menu sub-submenu">
                                <li>
                                    <a href="{$BASE_URL}admin/sales/returns?type=pending">
                                        <i class="fa fa-angle-right"></i> &nbsp;Pending Returns
                                    </a>
                                </li>
                                <li>
                                    <a href="{$BASE_URL}admin/sales/returns?type=approved">
                                        <i class="fa fa-angle-right"></i> &nbsp;Approved Returns
                                    </a>
                                </li>
                                <li>
                                    <a href="{$BASE_URL}admin/sales/returns?type=rejected">
                                        <i class="fa fa-angle-right"></i> &nbsp;Rejected Orders
                                    </a>
                                </li>
                            </ul>

                        </li>
                            <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp;Vouchers
                            </a>
                            <ul class="sub-menu sub-submenu">
                                <li>
                                    <a href="{$BASE_URL}admin/sales/vouchers?action=create">
                                        <i class="fa fa-angle-right"></i> &nbsp;Create
                                    </a>
                                </li>
                                <li>
                                    <a href="{$BASE_URL}admin/sales/vouchers?action=view"">
                                        <i class="fa fa-angle-right"></i> &nbsp;View
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;">
                        <i class="fa fa-users"></i> &nbsp;Customers
                        <span class="fa arrow"></span>

                    </a>
                    <ul class="sub-menu sub-submenu">
                        <li>
                            <a  href="{$BASE_URL}admin/customers?filter=all">
                                <i class="fa fa-angle-right"></i> &nbsp;All Users
                            </a>
                        </li>
                        <li>
                            <a href="{$BASE_URL}admin/customers?filter=active">
                                <i class="fa fa-angle-right"></i> &nbsp;Active Users
                            </a>
                        </li>
                        <li>
                            <a href="{$BASE_URL}admin/customers?filter=inactive">
                                <i class="fa fa-angle-right"></i> &nbsp;Inactive Users
                            </a>
                        </li>
                        <li>
                            <a href="{$BASE_URL}admin/customers?filter=disabled">
                                <i class="fa fa-angle-right"></i> &nbsp;Disabled Users
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-history"></i> &nbsp;Download Reports
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="sub-menu sub-submenu">
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp;Sales Reports
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp;Products Reports
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp;Customers Reports
                            </a>
                        </li>
                    </ul>

                </li>
                <li class="">
                    <a href="{$BASE_URL}admin/logout">
                        <i class="fa fa-globe"></i>
                        <span class="link-title" href="{$BASE_URL}admin/logout">&nbsp;Logout</span>
                    </a>
                </li>
                <li class="">
                    <a href="{$BASE_URL}">
                        <i class="fa fa-globe"></i>
                        <span class="link-title" href="{$BASE_URL}">&nbsp;Go to Store</span>
                    </a>
                </li>
            </ul>
            <!-- /#menu -->
        </div>

