<!-- Form Inputs -->
<div class="animated fadeinup form-section">
    <blockquote>
        You currently don't have an active account, fill form below
    </blockquote>
    <form action="{$BASE_URL}welcome/{if $smarty.get.status}?status={$smarty.get.status}&msisdn={$smarty.get.msisdn|default:''}&operator={$smarty.get.operator|default:''}{/if}" method="POST">
        <div>
            <div class="input-field animated fadeinright">
                <input id="p_username" name="p_username" type="text" class="validate" required>
                <label for="p_username">Preferred Username</label>
            </div>
            <div class="input-field animated fadeinright delay-1">
                <ul class="collapsible" data-collapsible="accordion">
                    <li class="animated fadeinright delay-1">
                        <div class="collapsible-header"><i class="ion-android-more-vertical right"></i>Select Club <small>(questions shall be asked thereof)</small></div>
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
            <input type="hidden" name="p_number" value="{$user_profile.msisdn|replace:'234':'0'}" />
            <input type="hidden" name="p_type" value="register" />
            <button class="btn pull-right waves-effect waves-light primary-color animated bouncein delay-6" type="submit">Create Account</button>
            <div class="clearfix"></div>
        </div>
    </form>
</div>