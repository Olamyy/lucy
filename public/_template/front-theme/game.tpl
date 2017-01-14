{include file="./header.tpl"}
<body>
<div class="m-scene" id="main"> <!-- Main Container -->
    <!-- Right Sidebar -->
    {include file="./nav-right.tpl"}
    <!-- Left Sidebar -->
    {include file="./nav-left.tpl"}
    <!-- End of Sidebars -->
    <!-- Page Content -->
    <div id="content" class="grey-blue">

        <!-- Toolbar -->
        {if $user|default:''}
            {include file="./tool-bar.tpl"}
        {/if}

        <div id="slickQuiz">
            <input type="hidden" id="club" value="{$user.club_id}" />
            <input type="hidden" id="user" value="{$user._id}" />
            <input type="hidden" id="answer" value="{$answer}" />
            <input type="hidden" id="base_url" value="{$BASE_URL}" />
            <!-- Hero Header -->
            <div class="h-banner animated make-small-height fadeindown">
                <div class="parallax primary-color">
                    <div class="floating-button animated bouncein delay-3 scrolled-down">
                        <a href="https://twitter.com/intent/tweet?text=Check%20out%20what%20I%20scored%20on%20Soccer%20Trivia" title="Share">
                            <span class="btn-floating resize btn-large waves-effect waves-light accent-color btn z-depth-1" style="transform: scale(0.8);"><i class="ion-social-twitter" href="https://twitter.com/intent/tweet?text=Check%20out%20what%20I%20scored%20on%20Soccer%20Trivia"></i></span>
                        </a>
                    </div>
                        {if $user|default:''}
                            <div class="banner-title truncate" style="display: block;">
                                Ready! {$user.username}
                            </div>
                            <span class="subtitle">You currently score <strong>{$user.points}</strong> from {$user.sessions} session(s) after answering a total of {$user.total_questions} question(s)
                            </span>
                        {/if}

                </div>
            </div>

            <!-- Profile Content -->
            <div class="animated fadeinup delay-1">
            <div class="quiz-block animated fadeinright delay-4">
                <div class="timer-text" style="display: none;"><span id="game_time">00</span> Sec. Left</div>
                <div class="quizArea">
                    <div class="quizHeader">
                        <div class="pop-instruction startQuiz">
                            <div class="card animated fadeinright delay-4">
                                <h5 class="uppercase">Quick Instruction</h5>
                                <div class="notification notification-info">Take special note of the information below</div>
                                <p class="flow-text">You have 30 secs to answer each of the questions (3 questions in total).<br>
                                    Upon completion of this session you shall be shown your summary score and given access to view top players around<br>
                                    User can play more sessions to gain more points and climb up the leaderboard. By logging in with username and MSISDN subsequently
                                </p></div>
                        </div>
                    </div>
                                <a class="btn green darken-4 waves-effect waves-light animated bouncein delay-6 right-align startQuiz" id="begin"
                                   href="{$BASE_URL}Game/">Play!</a>
                        </div>

                    </div>
                </div>
                <div class="quizResults">
                    <div class="card m-t-40 animated fadeinup delay-2">
                        <div class="c-widget">
                            <div class="c-widget-figure primary-color">
                                <i class="ion-android-mail"></i>
                            </div>
                            <div class="c-widget-body">
                                <p class="small m-0">You currently score...</p>
                                <h5 class="m-0 quizScore"><span></span></h5>
                            </div>
                        </div>
                    </div>
                    <ul class="collapsible checkout-header animated fadeindown delay-2" data-collapsible="accordion" id="overall_result" style="display: none;">
                        <li>
                            <div class="collapsible-header">
                                QUIZ SUMMARY
                                <i class="ion-android-arrow-dropdown"></i>
                                <span class="checkout-price right" id="overall_quiz_point"></span>
                            </div>
                            <div class="collapsible-body z-depth-1">
                                <div class="extra-large-text">
                                    <span  id="overall_quiz_point_large"></span>
                                    <sup class="point-text">point(s)</sup>
                                </div>
                                <!-- Subtotal -->
                                <div class="subtotal">
                                    <h6>Questions <span class="right" id="overall_quiz_total_questions"></span></h6>
                                    <span>total answered</span>
                                </div>


                                <div class="subtotal">
                                    <h6>Correct Questions <span class="right" id="overall_quiz_correct_answer"></span></h6>
                                    <span>answered correctly</span>
                                </div>

                                <div class="subtotal">
                                    <h6>Wrong Questions <span class="right" id="overall_quiz_wrong_answer"></span></h6>
                                    <span>answered incorrectly</span>
                                </div>

                                <div class="subtotal">
                                    <h6>Sessions <span class="right" id="overall_quiz_sessions"></span></h6>
                                    <span>played sessions</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <a class="btn  pink darken-3 waves-effect waves-light animated bouncein earn-more-point-btn" href="{$BASE_URL}game/">Earn more Points</a>
                </div>
            </div>
        </div>
        </div>
    </div> <!-- End of Page Content -->
</div> <!-- End of Page Container -->
{include file="./footer.tpl"}