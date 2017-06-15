<div class='col-md-3 sidebar'>
    <div class="sidebar-module-container">
        <div class="sidebar-filter">
            <div class="sidebar-widget wow fadeInUp">
                <div class="widget-header">
                    <h4 class="widget-title">More Categories</h4>
                </div>
                <div class="sidebar-widget-body">
                    <ul class="list">
                        {if $is_sub == 1}
                            {foreach from=$sub_cart item=category key=eKey}
                                {foreach from=$category.sub_cat item=category_ key=eKey}
                                    <li><a href="{$BASE_URL}subcart?p_id={$category.title}&c_id={$category.id}">{$category_}</a></li>
                                {/foreach}
                            {/foreach}
                        {else}
                            {foreach from=$category_list item=category key=eKey}
                                <li><a href="{$BASE_URL}category?cat_id={$category.category_id}">{$category.title}</a></li>
                            {/foreach}
                        {/if}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
