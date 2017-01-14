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

        <!-- Hero Header -->
        <div class="hero-header scrollable-avatar animated fadein">
            <img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front-theme/img/game-history.jpg" alt="">

            <!-- Floating Avatar -->
            <div class="floating-avatar circle animated bouncein delay-1 z-depth-1">
                <img class="circle" src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front-theme/img/favicon.jpg" alt="">
            </div>

            <!-- Floating-share -->
            <div class="floating-share">
                <i class="ion-social-facebook"></i>
                <a href="https://twitter.com/intent/tweet?text=Check%20out%20what%20I%20scored%20on%20Soccer%20Trivia" title="Share">
                    <i class="ion-social-twitter" <span class="btn-floating resize btn-large waves-effect waves-light accent-color btn z-depth-1" style="transform: scale(0.8);"><i class="ion-social-twitter" href="https://twitter.com/intent/tweet?text=Check%20out%20what%20I%20scored%20on%20Soccer%20Trivia"></i></span>
                    ></i>
                </a>

                <i class="ion-social-tumblr"></i>
            </div>
        </div>

        <!-- Activity Content -->
        <div class="animated fadeinup delay-1">
            <div class="container activity">
                <div class="vertical-line-spacer"></div>
                <div class="row">
                    <div class="col s12">

                        <div class="contact">
                            <span class="date">{$history_info.datetime|date_format:"%I:%M %p"}</span>
                            <div class="dot z-depth-1"></div>
                            <p>You got <strong>{$history_info.correct}</strong> question(s) correctly out of a total of {$history_info.questions|@count} question(s)<br>
                                <span>{$history_info.datetime|date_format:"%A %B %e, %Y at %I:%M %p"}</span>
                                <a href="{$BASE_URL}game/history/" class="btn">Back to History</a>
                            </p>
                        </div>

                        <hr>

                        {foreach from=$question_details item=qInfo key=eKey}
                            <div class="contact">
                                <span class="date">{$eKey+1}</span>
                                <div class="dot z-depth-1"></div>
                                <p>{$qInfo.question}</p>
                                <ol class="">
                                {foreach from=$qInfo.options item=option}
                                    <li {if ($history_info.answers[$eKey] ==  $qInfo.answer) && ($option == $qInfo.answer)}class="flag-correct"{/if}>
                                        <span>{$option}</span>
                                        {if $option == $qInfo.answer}
                                            <span><i class="ion-android-checkbox-outline"></i> </span>
                                        {/if}
                                        {if $option == $history_info.answers[$eKey]}
                                            <span ><i class="ion-checkmark-circled"></i> </span>
                                        {/if}

                                    </li>
                                {/foreach}
                                </ol>
                            </div>
                        {/foreach}
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End of Page Content -->
</div> <!-- End of Page Container -->
{include file="./footer.tpl"}