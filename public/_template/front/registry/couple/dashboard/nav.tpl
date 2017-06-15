</div>
<div class="main-header">
<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                    <div class="nav-outer">
                        <ul class="nav navbar-nav">
                            <li class="active"> <a href="{$BASE_URL}registry/dashboard" id="dashboard">Dashboard</a> </li>
                            <li class=""> <a href="{$BASE_URL}registry/action/manage" id="manage">Manage Registry</a> </li>
                            <li class=""> <a href="{$BASE_URL}registry/action/share" id="share">Share</a> </li>
                            <li class=""> <a href="{$BASE_URL}registry/action/track" id="track">Track</a> </li>
                            <li class="dropdown"> <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">My Account</a>
                                <ul class="dropdown-menu pages">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-xs-12 col-menu">
                                                    <ul class="links">
                                                        <li><a href="{$BASE_URL}registry/action/settings">Account Settings</a></li>
                                                        <li><a href="{$BASE_URL}registry/action/help">Help</a></li>
                                                        <input type="hidden" id="base_url" value="{$BASE_URL}">
                                                        <input type="hidden" id="user_id" value="{$complete_details[0].user_id}">
                                                        <input type="hidden" id="user_ip" value="{$complete_details[0].ip}">
                                                        <li><a href="{$BASE_URL}registry/action/logout" id="logout_btn">Logout</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</header>