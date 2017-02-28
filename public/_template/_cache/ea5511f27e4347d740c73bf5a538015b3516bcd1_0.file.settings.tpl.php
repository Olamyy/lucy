<?php /* Smarty version 3.1.24, created on 2017-02-23 01:38:16
         compiled from "public/_template/front/registry/couple/settings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:161296450558ae2ef8d2d6c4_15709504%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea5511f27e4347d740c73bf5a538015b3516bcd1' => 
    array (
      0 => 'public/_template/front/registry/couple/settings.tpl',
      1 => 1487677328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161296450558ae2ef8d2d6c4_15709504',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58ae2ef8d630d9_66230870',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ae2ef8d630d9_66230870')) {
function content_58ae2ef8d630d9_66230870 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '161296450558ae2ef8d2d6c4_15709504';
echo $_smarty_tpl->getSubTemplate ('../couple/dashboard/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('../couple/dashboard/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="body-content">
    <div class="container">
        <div class="checkout-box faq-page">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-title">Account Settings</h2>
                    <span class="title-tag">Make changes to your account.</span>
                    <div class="panel-group checkout-steps" id="accordion">
                        <!-- checkout-step-01  -->
                        <div class="panel panel-default checkout-step-01">

                            <!-- panel-heading -->
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
                                        <span>1</span>User Settings
                                    </a>
                                </h4>
                            </div>
                            <!-- panel-heading -->

                            <div id="collapseOne" class="panel-collapse collapse in">

                                <!-- panel-body  -->
                                <div class="panel-body">
                                    <form class="register-form outer-top-xs" role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/registry/couple/init">
                                        <div class="form-group">
                                            <h4 class="">Groom Details</h4>
                                            <label class="info-title" for="groom_first_name">First Name<span>*</span></label>
                                            <input type="text" name="groom_first_name" required placeholder="Groom's first name" class="form-control unicase-form-control text-input" id="groom_first_name" >
                                        </div>
                                        <div class="form-group">
                                            <label class="info-title" for="groom_last_name">Last Name<span>*</span></label>
                                            <input type="text" name="groom_last_name" required placeholder="Groom's last name"  class="form-control unicase-form-control text-input" id="groom_last_name" >
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <h4 class="">Bride Details</h4>
                                            <label class="info-title" for="spouse_first_name">First Name<span>*</span></label>
                                            <input type="text" name="spouse_first_name"  placeholder="Bride's first name" required class="form-control unicase-form-control text-input" id="spouse_first_name" >
                                        </div>
                                        <div class="form-group">
                                            <label class="info-title" for="spouse_last_name">Last Name<span>*</span></label>
                                            <input type="text" name="spouse_last_name" placeholder="Bride's last name" required class="form-control unicase-form-control text-input" id="spouse_last_name" >
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="info-title" for="spouse_email">Partner email</label>
                                            <input type="email" name="spouse_email"  placeholder="This is optional"  class="form-control unicase-form-control text-input" id="spouse_email" >
                                        </div>
                                        <br>
                                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Next</button>
                                    </form>
                                </div>
                                <!-- panel-body  -->

                            </div><!-- row -->
                        </div><!-- /.logo-slider -->
                        <div class="panel panel-default checkout-step-01">

                            <!-- panel-heading -->
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseTwo">
                                        <span>2</span>Registry Settings
                                    </a>
                                </h4>
                            </div>
                            <!-- panel-heading -->

                            <div id="collapseTwo" class="panel-collapse collapse in">

                                <!-- panel-body  -->
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat. Duis velit lectus, posuere a blandit sit amet, tempor at lorem. Donec ultricies, lorem sed ultrices interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat. Duis velit lectus, posuere a blandit sit amet, tempor at lorem. Donec ultricies, lorem sed ultrices interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat. Duis velit lectus, posuere a blandit sit amet, tempor at lorem. Donec ultricies, lorem sed ultrices interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat. Duis velit lectus, posuere a blandit sit amet, tempor at lorem.
                                </div>
                                <!-- panel-body  -->

                            </div><!-- row -->
                        </div><!-- /.logo-slider -->
                        <div class="panel panel-default checkout-step-01">

                            <!-- panel-heading -->
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseThree">
                                        <span>3</span>Security Settings
                                    </a>
                                </h4>
                            </div>
                            <!-- panel-heading -->

                            <div id="collapseThree" class="panel-collapse collapse in">

                                <!-- panel-body  -->
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat. Duis velit lectus, posuere a blandit sit amet, tempor at lorem. Donec ultricies, lorem sed ultrices interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat. Duis velit lectus, posuere a blandit sit amet, tempor at lorem. Donec ultricies, lorem sed ultrices interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat. Duis velit lectus, posuere a blandit sit amet, tempor at lorem. Donec ultricies, lorem sed ultrices interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat. Duis velit lectus, posuere a blandit sit amet, tempor at lorem.
                                </div>
                                <!-- panel-body  -->

                            </div><!-- row -->
                        </div><!-- /.logo-slider -->
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
<!-- ============================================================= FOOTER ============================================================= -->

<?php echo $_smarty_tpl->getSubTemplate ("../couple/share/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>