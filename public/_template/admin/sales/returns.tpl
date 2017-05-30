{include file="../product/category/view/viewheader.tpl"}

{include file="../navmenu.tpl"}

<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar row">
            <div class="col-lg-6 col-md-4 col-sm-4">
                <h4 class="nav_top_align">
                    <i class="fa fa-th"></i>
                    Sales
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
                        <a href="#">Sales</a>
                    </li>
                    <li class="breadcrumb-item active">Orders</li>
                </ol>
            </div>
        </div>
    </header>

    <div class="outer">
        <div class="inner bg-light lter bg-container">
            <!-- editable data  table starts-->
            <div class="card m-t-35">
                <div class="card-header bg-white">
                    <i class="fa fa-table"> </i> Orders
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
                        <div class="m-t-25">
                            {if $return_details|default:''}
                                <table id="example_demo" class="table table-hover table-bordered " >
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>UserID</th>
                                        <th>ProductName</th>
                                        <th>Date Ordered</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {foreach from=$order_details item=data key=eKey}
                                        <tr>
                                            <td>
                                                {$eKey+1}
                                            </td>
                                            <td>
                                                {$data.user_id}
                                            </td>
                                            <td>
                                                {$data.product_id}
                                            </td>
                                            <td>
                                                {$data.date_ordered}
                                            </td>
                                            <td>
                                                {$data.quantity}
                                            </td>
                                            <td>
                                                {$data.order_status}
                                            </td>
                                            <td>
                                                <button id="" class="btn btn-primary" data-toggle="modal" data-href="#stack1" href="#stack1">Approve Order </button>

                                                <button id="" class="btn btn-danger" data-toggle="modal" data-href="#stack1" href="#stack1">Reject Order </button>
                                            </td>
                                        </tr>
                                    {/foreach}
                                    </tbody>
                                </table>
                            {else}
                                <h4>No return order currently exists</h4>
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


{include file="../product/category/view/viewfooter.tpl"}