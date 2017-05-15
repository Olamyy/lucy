<div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
    <div id="advertisement" class="advertisement">
        <div class="item">
                {if $user_details|default: ''  && $user_details[0]['regType'] == 'wedding'}
                    {foreach from=$user_details item=user key=eKey}
                    <div class="avatar"><img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front/assets/images/dashboardcouple.png" alt="Image">
                        <br>
                        <button class="btn btn-primary" style="background-color: #FF8F00; font-weight: 300; margin-top: 5px; font-size: large;">{$user.groom_first_name} & {$user.bride_first_name}</button>
                        <div>
                            <h5 style="margin-top: 10px;">{if !$user.event_date}Date coming Soon{/if}{format_date date={$user.event_date}}</h5>
                        </div>
                    {/foreach}
                {else}
                        <div class="avatar"><img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front/assets/images/dashboardcouple.png" alt="Image">
                            <br>
                    {foreach from=$user_details item=user key=eKey}
                        <button class="btn btn-primary" style="background-color: #FF8F00; font-weight: 300; margin-top: 5px; font-size: large;">{$user.name}</button>
                        <div>
                            <h5 style="margin-top: 10px;">{if !$user.event_date}Date coming Soon{/if}{format_date date={$user.event_date}}</h5>
                        </div>
                    {/foreach}
                {/if}
                <button class="glyphicon glyphicon-plus btn btn-lg btn-primary" href="{$BASE_URL}" style="margin-top: 20px; height: 50px; width: 200px;" onclick="window.location.href = '{$BASE_URL}'">Add Gifts</button>
            </div>
        </div>
    </div>
    <!-- /.sidebar-widget -->
</div>
