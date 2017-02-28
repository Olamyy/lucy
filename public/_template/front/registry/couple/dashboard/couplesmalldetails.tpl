<div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
    <div id="advertisement" class="advertisement">
        <div class="item">
            <div class="avatar"><img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front/assets/images/dashboardcouple.png" alt="Image">
                <br>
                {if $user_session|default: ''}
                        <button class="btn btn-primary" style="background-color: #FF8F00; font-weight: 300; margin-top: 5px; font-size: large;">{$user_session[0].groom_first_name} & {$user_session[0].bride_first_name}</button>
                        <div>
                            <h5 style="margin-top: 10px;">{if !$user_session[0].wedding_date}Date coming Soon{/if}{$user_session[0].wedding_date}</h5>
                        </div>
                {/if}
                <button class="glyphicon glyphicon-plus btn btn-lg btn-primary" href="{$BASE_URL}" style="margin-top: 20px; height: 50px; width: 200px;" onclick="window.location.href = '{$BASE_URL}'">Add Gifts</button>
            </div>
        </div>
    </div>
    <!-- /.sidebar-widget -->
</div>
