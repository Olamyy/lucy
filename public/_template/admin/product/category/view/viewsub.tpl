{include file="./viewheader.tpl"}

{include file="../../../navmenu.tpl"}

<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar row">
            <div class="col-lg-6 col-md-4 col-sm-4">
                <h4 class="nav_top_align">
                    <i class="fa fa-th"></i>
                    Categories
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
                        <a href="#">Categories</a>
                    </li>
                    <li class="breadcrumb-item active">View</li>
                </ol>
            </div>
        </div>
    </header>

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
    <div class="outer">
        <div class="inner bg-light lter bg-container">
            <!-- editable data  table starts-->
            <div class="card m-t-35">
                <div class="card-header bg-white">
                    <i class="fa fa-table"> </i> Categories
                </div>
                <div class="card-block">
                    <div class="m-t-35">
                        <div class="m-t-50">
                            {if $category_details|default:''}
                                <table id="example_demo" class="table table-hover table-bordered float-lg-right" >
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th style="display: none">ID</th>
                                        <th>Category Title</th>
                                        <th>Date Created</th>
                                        <th>Sub Categories</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {foreach from=$category_details item=data key=eKey}
                                        <tr>
                                            <td>
                                                {$eKey+1}
                                            </td>
                                            <td>
                                                {$data.title}
                                            </td>
                                            <td>
                                                {$data.created_on}
                                            </td>
                                            <td>
                                                {$data.sub_categories}
                                            </td>
                                            <td class="admin_action">
                                                <a href="{$BASE_URL}index.php/admin/category/edit_sub?c_id={$data.id}"><button class="btn btn-primary btn-reg">Edit</button></a>
                                                <a href="{$BASE_URL}index.php/admin/category/delete_sub?c_id={$data.id}"><button class="btn btn-danger btn-reg">Delete </button></a>
                                            </td>
                                        </tr>
                                    {/foreach}
                                    </tbody>
                                </table>
                            {/if}
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


{include file="./viewfooter.tpl"}