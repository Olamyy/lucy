<div class='col-md-3 sidebar'>
    <div class="sidebar-module-container">
        <div class="sidebar-filter">
            <div class="sidebar-widget wow fadeInUp">
                <div class="widget-header">
                    <h4 class="widget-title">More Categories</h4>
                </div>
                <div class="sidebar-widget-body">
                    <ul class="list">
                        {foreach from=$category_list item=category key=eKey}
                        <li><a href="{$BASE_URL}category?cat_id={$category.category_id}">{$category.title}</a></li>
                        {/foreach}
                    </ul>
                </div>
            </div>
            <div class="sidebar-widget wow fadeInUp outer-top-vs">
                <h3 class="section-title">Compare products</h3>
                <div class="sidebar-widget-body">
                    <div class="compare-report">
                        <p>You have no <span>item(s)</span> to compare</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
