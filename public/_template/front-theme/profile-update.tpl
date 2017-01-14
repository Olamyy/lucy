{include file="./header.tpl"}
<body>
<div class="m-scene" id="main"> <!-- Main Container -->
    <!-- Right Sidebar -->
    {include file="./nav-right.tpl"}
    <!-- Left Sidebar -->
    {include file="./nav-left.tpl"}
    <div id="content" class="page">

        <!-- Toolbar -->
        {if $user|default:''}
            {include file="./tool-bar.tpl"}
        {/if}


        <!-- Hero Header -->
        <div class="h-banner animated fadeindown">
            <div class="parallax bg-9">
                <div class="floating-button animated bouncein delay-3">
                    <a href="{$BASE_URL}game/history" class="View History">
                        <span class="btn-floating resize btn-large waves-effect waves-light accent-color btn z-depth-1"><i class="ion-ios-paper"></i></span>
                    </a>

                </div>
                <div class="banner-title">{$user.username}</div>
                <p class="subtitle">I am proud to be a {$user.club} Fan</p>
            </div>
        </div>

        <div class="make-pad m-t-20 col s12 animated fadeinup delay-2">
            {if $error|default:''}
                <div class="notification notification-danger">
                    <a class="close-notification no-smoothState"><i class="ion-android-close"></i></a>
                    {foreach from=$error item=err}
                        <p>{$err}</p>
                    {/foreach}
                </div>
            {/if}

            {if $okay|default:''}
                <div class="notification notification-success">
                    <a class="close-notification no-smoothState"><i class="ion-android-close"></i></a>
                    <p>{$okay}</p>
                </div>
            {/if}
            <div class="form-section">
                <form action="{$BASE_URL}profile/update/" method="POST">
                    <div>
                        <div class="input-field animated fadeinright">
                            <input id="p_username" name="p_username" value="{$user.username}" type="text" class="validate" required>
                            <label for="p_username">Preferred Username</label>
                        </div>
                        <div class="input-field animated fadeinright delay-1">
                            <p class="text-muted"><small>Choose Preferred Club</small></p>
                            <div class="club-enclosure m-t-10">
                                {foreach from=$club_list item=club}
                                    <div class="club-block">
                                        <input name="p_club" type="radio" id="p_club_{$club._id}" value="{$club._id}" {if $user.club_id == $club._id}checked{/if} required />
                                        <label for="p_club_{$club._id}">
                                            <img src="{$BASE_URL}{$APP_CLUB_ICONS.url}{$club.logo}" width="15px" />{$club.name}
                                        </label>
                                        <div class="clearfix"></div>
                                    </div>
                                {/foreach}
                            </div>
                        </div>

                        <div class="input-field animated fadeinright">
                            <input id="p_code" name="p_code" type="password" class="validate">
                            <label for="p_code">Provide Access Code (optional)</label>
                        </div>

                        <div class="input-field animated fadeinright m-b-30">
                            <input id="p_code_confirm" name="p_code_confirm" type="password" class="validate">
                            <label for="p_code_confirm">Confirm Access Code (optional if above is empty)</label>
                        </div>


                        <button class="btn pull-right waves-effect waves-light primary-color animated bouncein delay-6" type="submit">Update Account</button>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>


        <!-- Profile Content -->
        <div class="clearfix"></div>
        {include file="./foot-note.tpl"}
    </div>
</div> <!-- End of Page Content -->
</div> <!-- End of Page Container -->
{include file="./footer.tpl"}