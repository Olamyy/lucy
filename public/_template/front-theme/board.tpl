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

            <div class="row">
                <table class="striped">
                    <thead>
                    <tr>
                        <td class="pad-td">#</td>
                        <th data-field="name">Username</th>
                        <th></th>
                        <th data-field="price">Ans. Questions</th>
                        <th data-field="price">Point</th>
                    </tr>
                    </thead>

                    <tbody>
                    {foreach from=$leaders item=leader key=eKey}
                        <tr {if $user._id == $leader._id} class="highlight-row"{/if}>
                            <td class="pad-td">{$eKey+1}</td>
                            <td>{$leader.username}</td>
                            <td><img class="circle board-icon" src="{$BASE_URL}{$APP_CLUB_ICONS.url}{$leader.club_logo|default:''}" alt=""></td>
                            <td class="center-align">{$leader.total_questions}</td>
                            <td class="center-align">{$leader.points}</td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>

        </div> <!-- End of Main Contents -->


    </div> <!-- End of Page Content -->
</div> <!-- End of Page Container -->
{include file="./footer.tpl"}