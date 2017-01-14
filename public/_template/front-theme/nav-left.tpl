<ul id="slide-out-left" class="side-nav collapsible">
    <li>
        <div class="sidenav-header primary-color">
            <!--<div class="nav-social">
                <i class="ion-social-facebook"></i>
                <i class="ion-social-twitter"></i>
                <i class="ion-social-tumblr"></i>
            </div>-->
            <div class="nav-avatar">
                {if $user|default:''}<img class="circle avatar" src="{$BASE_URL}{$APP_CLUB_ICONS.url}{$user.club_logo|default:''}" alt="">{/if}
                <div class="avatar-body">
                    <p>{$user.username}</p>
                    <h4 class="truncate">{$user.club}</h4>
                </div>
            </div>
        </div>
    </li>

    <li><a href="{$BASE_URL}profile/" class="no-child"><i class="ion-ios-pie"></i> Profile</a></li>
    <li>
        <div class="collapsible-header">
            <i class="ion-ios-football"></i> Game
        </div>
        <div class="collapsible-body">
            <ul class="collapsible">
                <li>
                    <a href="{$BASE_URL}game/">Kick-Off</a>
                    <a href="{$BASE_URL}game/history/">History</a>
                </li>
            </ul>
        </div>
    </li>

    <li><a href="{$BASE_URL}board/" class="no-child"><i class="ion-ios-analytics"></i> Leader Board</a></li>

    <li><hr></li>

    <li><a href="{$BASE_URL}logout/" class="no-child"><i class="ion-log-out"></i> Logout</a></li>
</ul>