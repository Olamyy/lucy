<!-- Form Inputs -->
<div class="animated fadeinup form-section">
    <blockquote>
        Oops, we couldn't retrieve your mobile number, all hope is not lost. Provide your details below and let's get started.
    </blockquote>

    {if $error|default:''}
        <div class="notification notification-danger">
            <a class="close-notification no-smoothState"><i class="ion-android-close"></i></a>
            {foreach from=$error item=err}
                <p>{$err}</p>
            {/foreach}
        </div>
    {/if}

    <ul class="collapsible" data-collapsible="accordion">
        <li class="animated fadeinright delay-1 m-b-30 m-t-20">
            <div class="collapsible-header btn waves-effect waves-light grey darken-3">
                <i class="ion-android-more-vertical right"></i>New User <small>(with no existing account)</small>
            </div>
            <div class="collapsible-body">
                <div class="multi-log-option">
                    <form action="{$BASE_URL}welcome/{if $smarty.get.status}?status={$smarty.get.status}&msisdn={$smarty.get.msisdn|default:''}&operator={$smarty.get.operator|default:''}{/if}" method="POST">
                        <div>
                            <div class="input-field animated fadeinright">
                                <input  id="p_number" name="p_number" type="text" class="validate" maxlength="11" required>
                                <label for="p_number">Enter Mobile Number <small>(provide valid number)</small></label>
                            </div>

                            <div class="input-field animated fadeinright">
                                <input id="p_username" name="p_username" type="text" class="validate" required>
                                <label for="p_username">Preferred Username</label>
                            </div>
                            <div class="input-field animated fadeinright delay-1">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li class="animated fadeinright delay-1">
                                        <div class="collapsible-header">
                                            <i class="ion-android-more-vertical right"></i>Select Club <small>(questions shall be asked thereof)</small>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="club-enclosure">
                                                {foreach from=$club_list item=club}
                                                    <div class="club-block">
                                                        <input name="p_club" type="radio" id="p_club_{$club._id}" value="{$club._id}" required />
                                                        <label for="p_club_{$club._id}">
                                                            <img src="{$BASE_URL}{$APP_CLUB_ICONS.url}{$club.logo}" width="15px" />{$club.name}
                                                        </label>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                {/foreach}
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <input type="hidden" name="p_type" value="wifi" />
                            <button class="btn pull-right waves-effect waves-light primary-color animated bouncein delay-6" type="submit">Begin Account Creation</button>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </li>











        <li class="animated fadeinright delay-3">
            <div class="collapsible-header btn waves-effect waves-light green darken-3">
                <i class="ion-android-more-vertical right"></i>Existing User <small>(with existing account)</small>
            </div>
            <div class="collapsible-body">
                <div class="multi-log-option">
                    <form action="{$BASE_URL}welcome/" method="POST">
                        <div>
                            <div class="input-field animated fadeinright">
                                <input  id="p_number" name="p_number" type="text" class="validate" maxlength="11" required>
                                <label for="p_number">Enter Mobile Number <small>(provide valid number)</small></label>
                            </div>

                            <div class="input-field animated fadeinright">
                                <input id="p_code" name="p_code" type="password" class="validate" required>
                                <label for="p_code">Access Code</label>
                            </div>

                            <input type="hidden" name="p_type" value="wifi-exist" />
                            <button class="btn pull-right waves-effect waves-light primary-color animated bouncein delay-6" type="submit">Validate Credentials</button>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </li>





    </ul>


















</div>