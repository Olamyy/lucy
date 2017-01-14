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

            <!-- Profile Content -->
            <div class="animated fadeinup delay-1">
                <div class="card animated fadeinup delay-2">
                    <div class="extra-large-text">
                        <span>{$user.points}</span>
                        <sup class="point-text">points</sup>
                    </div>
                </div>
            </div>


            <div class="make-pad col s12 animated fadeinup delay-2">
                <ul class="collapsible checkout-header pure-white-bg animated fadeindown delay-2" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header pure-white-bg active">
                            OTHER INFO
                            <i class="ion-android-arrow-dropdown"></i>
                            <a href="{$BASE_URL}profile/update/" class="btn btn-sm pull-right btn-info">
                                Edit Profile
                            </a>
                        </div>
                        <div class="collapsible-body z-depth-1">
                            <!-- Subtotal -->
                            <div class="subtotal">
                                <h6>Questions <span class="right">{$user.total_questions}</span></h6>
                                <span>total answered</span>
                            </div>


                            <div class="subtotal">
                                <h6>Correct Questions <span class="right">{$user.correct_answer}</span></h6>
                                <span>answered correctly</span>
                            </div>

                            <div class="subtotal">
                                <h6>Wrong Questions <span class="right">{$user.wrong_answers}</span></h6>
                                <span>answered incorrectly</span>
                            </div>

                            <div class="subtotal">
                                <h6>Sessions <span class="right">{$user.sessions}</span></h6>
                                <span>played sessions</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
            {include file="./foot-note.tpl"}
        </div>
    </div> <!-- End of Page Content -->
</div> <!-- End of Page Container -->
{include file="./footer.tpl"}