{include file="../../../admin/product/category/categoryheader.tpl"}
{include file='../../navmenu.tpl'}

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
                        <a href="index.html">
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
                            Fill the form below to add a create a new voucher
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
                                <div class="alert alert-s">
                                    {foreach from=$message item=mess}
                                        <p>{$mess}</p>
                                    {/foreach}
                                </div>
                            {/if}
                            <form class="form-horizontal" method="post" action="{$BASE_URL}/admin/sales/vouchers?action=create">
                                <fieldset>
                                    <!-- Name input-->
                                    <div class="form-group row m-t-25">
                                        <div class="col-lg-10 push-lg-1">
                                            <label for="signup_name" class="form-control-label form-group-horizontal">
                                                Voucher Title
                                            </label>
                                            <div class="input-group">
                                                <input type="text" name="category_title" class="form-control" id="signup_name" placeholder="Enter the title of the voucher">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- first name-->
                                    <div class="form-group row">
                                        <div class="col-lg-10 push-lg-1">
                                            <label for="signup_lastname" class="form-control-label form-group-horizontal">
                                                Voucher Short Description
                                            </label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="short_description" id="signup_lastname" placeholder="Short description of the voucher">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-10 push-lg-1">
                                            <label for="signup_email" class="form-control-label form-group-horizontal">
                                                Voucher Amount
                                            </label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="sub_cat_cats" id="signup_email" placeholder="Enter the voucher amount">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-10 push-lg-1">
                                            <label for="signup_email" class="form-control-label form-group-horizontal">
                                                Voucher Validity
                                            </label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="sub_cat_cats" id="signup_email" placeholder="How many days is the voucher valid for?">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- last name-->
                                    <div class="form-group row">
                                        <div class="col-lg-11 push-lg-1">
                                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Create Voucher</button>
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

{include file="../../../admin/product/category/categoryfooter.tpl"}
