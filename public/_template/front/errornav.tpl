{if $user_details|default:''}
    <input type="hidden" id="user_id" value="{$user_details[0].user_id}">
{/if}

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
                                <li class="active dropdown yamm-fw"> <a href="{$BASE_URL}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a> </li>
                                <li class="dropdown"> <a href="{$BASE_URL}registry" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" onclick='location.href ="{$BASE_URL}registry/base"'>Gift Registry</a>
                                    <ul class="dropdown-menu pages">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-xs-12 col-menu">
                                                        <ul class="links">
                                                            <li><a href="{$BASE_URL}registry/find">Find Registry</a></li>
                                                            <li><a href="{$BASE_URL}auth/join">Create Registry</a></li>
                                                            <li><a href="{$BASE_URL}auth/login">Manage Registry</a></li>
                                                            <li><a href="{$BASE_URL}registry/base">Why Lucy Registry?</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                {if $pre_cart|default: ''}
                                {foreach from=$pre_cart item=data key=eKey}
                                    {*{if $is_sub == 1}*}
                                    <li class="dropdown"> <a href="{$BASE_URL}category?cat_id={$data.category_id}" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" onclick="location.href ='{$BASE_URL}category?cat_id={$data.category_id}'">{$data.title}</a>
                                        <ul class="dropdown-menu pages">
                                            <li>
                                                <div class="yamm-content">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-menu">
                                                            <ul class="links">
                                                                {foreach from=$data.pre_cat item=cat_cart key=eKey}
                                                                    <li><a href="{$BASE_URL}subcart?p_id={$cat_cart}&c_id={$data.category_id}">{$cat_cart}</a></li>
                                                                {/foreach}
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    {*{/if}*}
                                {/foreach}
                            </ul>
                        </div>
                        </li>
                        </ul>
                        </li>

                        {/if}
                    </div>
                    <!-- /.navbar-collapse -->

                </div>
                <!-- /.nav-bg-class -->
            </div>
            <!-- /.navbar-default -->
        </div>
        <!-- /.container-class -->
