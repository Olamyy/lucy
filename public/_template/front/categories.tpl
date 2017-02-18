{include file='./header.tpl'}

{include file="./navmenu.tpl"}

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{$BASE_URL}">Home</a></li>
                <li class='active'>{$category_details[0]["title"]}</li>
            </ul>
        </div>
        <!-- /.breadcrumb-inner -->
    </div>
    <!-- /.container -->
</div>

<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row'>
            {include file="./side_category.tpl"}
            {include file="./main_category.tpl"}
            <!-- /.col -->
        </div>
        </div>
        </div>







{include file="./footer.tpl"}