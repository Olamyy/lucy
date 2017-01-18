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
                        <a href="index.html">
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

    <div class="modal fade bs-example-modal-sm in display_none" id="stack1" tabindex="-1" role="dialog"
         aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title text-white">Category Title</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="{$BASE_URL}index.php/admin/category/view">
                    <p>
                        Category Title:
                        <input id="cat_title" type="text" name="cat_title" class="form-control" placeholder="Enter the title of the category to edit"/>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                    <button type="submit" class="btn btn-primary" id="edit_button">Edit</button>
                </div>
                 </form>
            </div>
        </div>
    </div>


    <div class="outer">
        <div class="inner bg-light lter bg-container">
            <!-- editable data  table starts-->
            <div class="card m-t-35">
                <div class="card-header bg-white">
                    <i class="fa fa-table"> </i> Categories
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
                    <div class="m-t-35">
                        <button id="" class="btn btn-primary" data-toggle="modal" data-href="#stack1" href="#stack1"> Edit Selected Row </button>
                        <button id="del_button" class="btn btn-danger"> Delete Selected Row </button>
                        <div class="m-t-25">
                            {if $category_details|default:''}
                            <table id="example_demo" class="table table-hover table-bordered " >
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th style="display: none">ID</th>
                                    <th>Category Title</th>
                                    <th>Category Description</th>
                                    <th>Search Filters</th>
                                </tr>
                                </thead>
                                <tbody>
                                {foreach from=$category_details item=data key=eKey}
                                <tr>
                                    <td>
                                        {$eKey+1}
                                    </td>
                                    <td style="display: none;" value="{$data.id}">
                                        {$data.id}
                                    </td>
                                    <td>
                                        {$data.title}
                                    </td>
                                    <td>
                                        {$data.description}
                                    </td>
                                    <td>
                                        {$data.search_filters}
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