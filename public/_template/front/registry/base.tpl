{include file='../header.tpl'}

{include file="../navmenu.tpl"}


<div class="container-fluid top-div">
    <h2 class="text-center">This is going to be fun. We wish we were you right now.</h2>
    {*<p class="text-center">Does that sound creepy?</p>*}
    <div class="row">
        <div class="col-md-6">
            <a href="{$BASE_URL}registry/auth/join"><button class="pull-right btn-reg">register</button></a>
        </div>
        <div class="col-md-6">
            <a href="{$BASE_URL}registry/find"><button class="pull-left btn-find">Find a gift registry</button></a>
        </div>
    </div>
</div>

<div class="container benefit-main-wrapper">
    <div class="col-md-2 link-wrapper">
        <div class="controls-wrapper">
            <div class="nav-section">
                <h6>REGISTRY</h6>
                <ul>
                    <li><a href="{$BASE_URL}registry/find">Find a Registry</a></li>
                    <li><a href="{$BASE_URL}registry/create">Create a Registry</a></li>
                    <li><a href="{$BASE_URL}registry/action/manage">Manage a Registry</a></li>
                </ul>
            </div>
            <div class="nav-section">
                <ul>
                    <li><a href="#">Registry Benefits</a></li>
                    <li><a href="#">Registry Timeline</a></li>
                    <li><a href="#">Where Do I Start?</a></li>
                </ul>
            </div>
        </div>

    </div>
    <div class="col-md-10 benefit-wrapper">
        <h1 class="text-center">Gift Registry Benefits</h1>
        <div class="row">
            <a href="#" target="_self" class="col-xs-12 col-sm-6 col-md-4 benefit-block">
                <div class="benefit-content">
                    <h3 class="text-center">
                        <div class="glyphicon glyphicon-gift"></div>
                        <br>
                       Wedding Registry</h3>
                    <p class="text-center text-muted">Wedding Registry Description</p>
                    <p class="text-center">
                    </p>
                </div>
            </a>
            <a href="#" target="_self" class="col-xs-12 col-sm-6 col-md-4 benefit-block">
                <div class="benefit-content">
                    <h3 class="text-center">
                        <div class="glyphicon glyphicon-gift"></div>
                        <br>
                        House Warming</h3>
                    <p class="text-center text-muted">House Warming  Description</p>
                    <p class="text-center">
                    </p>
                </div>
            </a>
            <a href="#" target="_self" class="col-xs-12 col-sm-6 col-md-4 benefit-block">
                <div class="benefit-content">
                    <h3 class="text-center">
                        <div class="glyphicon glyphicon-gift"></div>
                        <br>
                        Anniversary</h3>
                    <p class="text-center text-muted">Anniversary Registry Description</p>
                    <p class="text-center">
                    </p>
                </div>
            </a>
            <a href="#" target="_self" class="col-xs-12 col-sm-6 col-md-4 benefit-block">
                <div class="benefit-content">
                    <h3 class="text-center">
                        <div class="glyphicon glyphicon-gift"></div>
                        <br>
                        Birthday</h3>
                    <p class="text-center text-muted">Birthday registry description.</p>
                    <p class="text-center">
                    </p>
                </div>
            </a>
            <a href="#" target="_self" class="col-xs-12 col-sm-6 col-md-4 benefit-block">
                <div class="benefit-content">
                    <h3 class="text-center">
                        <div class="glyphicon glyphicon-gift"></div>
                        <br>
                        Child Naming</h3>
                    <p class="text-center text-muted">Naming registry description.</p>
                    <p class="text-center">
                    </p>
                </div>
            </a>
            <a href="#" target="_self" class="col-xs-12 col-sm-6 col-md-4 benefit-block">
                <div class="benefit-content">
                    <h3 class="text-center">
                        <div class="glyphicon glyphicon-gift"></div>
                        <br>
                        Lucky</h3>
                    <p class="text-center text-muted">Lucky registry description</p>
                    <p class="text-center">
                    </p>
                </div>
            </a>

        </div>

    </div>
</div>
{include file="../footer.tpl"}