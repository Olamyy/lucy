{include file='./header.tpl'}

<div class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
    <div class="row">
        <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-10 push-sm-1 login_top_bottom">
            <div class="row">
                <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-12">
                    <div class="bg-white login_content login_border_radius">
                        <form action="{$BASE_URL}index.php/admin/login"  method="post" id="admin_auth">
                            {if $error|default:''}
                                <div class="alert alert-danger">
                                    <strong>Oops! Something went wrong</strong>
                                    {foreach from=$error item=err}
                                        <p>{$err}</p>
                                    {/foreach}
                                </div>
                            {/if}
                            <div class="form-group">
                                <label for="" class="form-control-label"> Username</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i
                                                class="fa fa-user text-primary"></i></span>
                                    <input type="text" class="form-control  form-control-md" id="" name="username" placeholder="Username">
                                </div>
                            </div>
                            <!--</h3>-->
                            <div class="form-group">
                                <label for="password" class="form-control-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon addon_password"><i
                                                class="fa fa-lock text-primary"></i></span>
                                    <input type="password" class="form-control form-control-md" id="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" value="Log In" class="btn btn-primary btn-block login_button">
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

{include file="./globalfooter.tpl"}