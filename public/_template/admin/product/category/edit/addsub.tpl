{include file="../../category/categoryheader.tpl"}

{include file="../../../navmenu.tpl"}

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
                            {if $error|default:''}
                                <div class="alert alert-danger">
                                    <strong>Oops! Something went wrong</strong>
                                    {foreach from=$error item=err}
                                        <p>{$err}</p>
                                    {/foreach}
                                </div>
                            {/if}
                            {if $message|default:''}
                                <div class="alert alert-success">
                                    {foreach from=$message item=mess}
                                        <p>{$mess}</p>
                                    {/foreach}
                                </div>
                            {/if}
                            <form class="form-horizontal" method="post" action="{$BASE_URL}index.php/admin/category/addsub?c_id={$c_id}&c_title={$c_title}">
                                <fieldset>
                                    <div class="form-group row">
                                        <div class="col-lg-10 push-lg-1">
                                            <label for="signup_email" class="form-control-label form-group-horizontal">
                                                Sub Categories
                                            </label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="sub_cat_cats" placeholder="Enter the sub categories of the sub category.">
                                        </div>
                                    </div>
                                        </div>
                                    <div class="form-group row">
                                        <div class="col-lg-11 push-lg-1">
                                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Create Sub Categories</button>
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
</div>

{include file="../../category/categoryfooter.tpl"}
