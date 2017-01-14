{include file="./header.tpl"}
<body>
<div class="m-scene" id="main"> <!-- Main Container -->
    <!-- Right Sidebar -->
    {include file="./nav-right.tpl"}
    <!-- Left Sidebar -->
    {include file="./nav-left.tpl"}
    <!-- End of Sidebars -->
    <!-- Page Content -->
    <div id="content" class="page">

        <!-- Toolbar -->
        {if $user|default:''}
            {include file="./tool-bar.tpl"}
        {/if}

        <!-- Main Content -->
        <div class="animated fadeinup">

            <div class="news-main animated fadein delay-1">
                <img alt="" src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front-theme/img/game-history.jpg">
                {if $histories|default:''}
                    <a href="{$BASE_URL}game/history/{$histories[0]._id}/">
                        <div class="opacity-overlay-black">
                        </div>
                    </a>


                    <div class="top-news animated fadeinright delay-1">
                        <h4 class="top-news-title">
                            <a href="{$BASE_URL}game/history/{$histories[0]._id}/">
                                <small>
                                    {if $histories[0].correct == $histories[0].questions|@count}
                                        <i class="ion-ios-checkmark"></i>
                                    {else}
                                        <i class="ion-ios-circle-outline"></i>
                                    {/if}
                                </small>
                                S{$histories[0].session|default:$histories|@count}.:
                                <small>You answered {$histories[0].correct} question(s) correctly</small>
                            </a>
                        </h4>
                        <span class="top-news-channel">with {$histories[0].club} - @{$histories[0].datetime|date_format:"%A, %B %e, %Y %I:%M %p"}</span> <span class="top-news-category">{$histories[0].questions|@count} Qs.</span>
                        <div class="clr">
                        </div>
                    </div>
                {/if}
            </div>

            <div>
                {foreach from=$histories item=history key=eKey}
                    {if $eKey > 0}
                        <div class="single-news animated fadeinright delay-2">
                            <h4 class="single-news-title">
                                <a href="{$BASE_URL}game/history/{$history._id}/">
                                    <small>
                                        {if $history.correct == $history.questions|@count}
                                            <i class="ion-ios-checkmark"></i>
                                        {else}
                                            <i class="ion-ios-circle-outline"></i>
                                        {/if}
                                    </small>

                                    S{$history.session|default:$eKey}.:
                                    <small>You answered {$history.correct} question(s) correctly</small>
                                </a>
                            </h4>
                            <span class="single-news-channel">with {$history.club} - @{$history.datetime|date_format:"%A, %B %e, %Y %I:%M %p"}</span> <span class="single-news-category">{$history.questions|@count} Qs.</span>
                            <div class="clr">
                            </div>
                        </div>
                    {/if}
                {/foreach}
            </div>
        </div> <!-- End of Main Contents -->
    </div> <!-- End of Page Content -->
</div> <!-- End of Page Container -->
{include file="./footer.tpl"}