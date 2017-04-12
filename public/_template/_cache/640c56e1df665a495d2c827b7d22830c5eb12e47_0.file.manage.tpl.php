<?php /* Smarty version 3.1.24, created on 2017-03-06 18:26:22
         compiled from "public/_template/front/registry/couple/dashboard/manage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:151715052758bd9bbe8745f3_34296973%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '640c56e1df665a495d2c827b7d22830c5eb12e47' => 
    array (
      0 => 'public/_template/front/registry/couple/dashboard/manage.tpl',
      1 => 1488821179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151715052758bd9bbe8745f3_34296973',
  'variables' => 
  array (
    'user_session' => 0,
    'BASE_URL' => 0,
    'bg_images' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
    'bg_image' => 0,
    'user_products' => 0,
    'ip' => 0,
    'current_url' => 0,
    'page_url' => 0,
    'user_product' => 0,
    'user_pro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58bd9bbe96dd57_51405601',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58bd9bbe96dd57_51405601')) {
function content_58bd9bbe96dd57_51405601 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/html/lucy/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php';

$_smarty_tpl->properties['nocache_hash'] = '151715052758bd9bbe8745f3_34296973';
echo $_smarty_tpl->getSubTemplate ("./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<form>
    <input type="hidden" name="name"  value="<?php echo $_smarty_tpl->tpl_vars['user_session']->value[0]['couple_id'];?>
" id="couple_id" class="couples-name">
    <input type="hidden" id="base_url" value="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" />
    <input type="hidden" id="dashboard_image" value="<?php echo $_smarty_tpl->tpl_vars['user_session']->value[0]['dashboard_image'];?>
" />
</form>

<div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <h2 class="test"></h2>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container-fluid main-couple-img">
                    <button type="button" class="edit-btn" data-toggle="modal" data-target="#backgrounds">
                        edit background
                    </button>
                    <form action="" class="couples-form">
                        <input type="text" name="name" id="name" class="couples-name">
                        <span class="name-display"><?php echo $_smarty_tpl->tpl_vars['user_session']->value[0]['groom_first_name'];?>
 & <?php echo $_smarty_tpl->tpl_vars['user_session']->value[0]['bride_first_name'];?>
</span>
                    </form>
                </div>
                <h2 class="name-display" style="font-size: small; padding-top: 80px;"><?php if (empty($_smarty_tpl->tpl_vars['user_session']->value[0]['wedding_date'])) {?>Date is coming soon<?php } else {
echo $_smarty_tpl->tpl_vars['user_session']->value[0]['wedding_date'];
}?></h2>

                <div id="backgrounds" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-background">
                        <div class="modal-content modal-content-background">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-center"><strong>Choose from our exclusive gallery or upload your own</strong></h4>
                            </div>
                            <div class="modal-body modal-body-background">
                                <div class="upload-wrap col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                                    <div class="fileUpload text-center ">
                                        <span class="fa fa-camera"></span><br>
                                        <span style="padding-bottom: 1000px">upload photo</span>
                                        <input type="file" class="upload"/>
                                    </div>
                                </div>
                                <?php
$_from = $_smarty_tpl->tpl_vars['bg_images']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['bg_image'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['bg_image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['bg_image']->value) {
$_smarty_tpl->tpl_vars['bg_image']->_loop = true;
$foreach_bg_image_Sav = $_smarty_tpl->tpl_vars['bg_image'];
?>
                                <div data-dismiss="modal" class="single-back-img-div col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/files/<?php echo $_smarty_tpl->tpl_vars['bg_image']->value;?>
" alt="" class="img-responsive single-back-img">
                                </div>
                                <?php
$_smarty_tpl->tpl_vars['bg_image'] = $foreach_bg_image_Sav;
}
?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row small-boxes-wrapper">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/couple/action/preview?preview_id=<?php echo $_smarty_tpl->tpl_vars['user_session']->value[0]['couple_id'];?>
" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 small-boxes">
                        <h4>view as a guest</h4>
                        <p>View your profile as a guest and know how it feels</p>
                    </a>
                    <a href="#" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 small-boxes" data-toggle="modal" data-target="#invitePartner">
                        <h4>invite partner</h4>
                        <p>Let your partners join you in this journey</p>
                    </a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
registry/couple/live" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 small-boxes" data-toggle="modal" data-target="#sanityCheck">
                        <h4>make it visible</h4>
                        <p>Guests can not view your registry until you go live.</p>
                    </a>
                </div>
            </div>
        </div>
        <!--invite partner modal-->
        <div id="invitePartner" class="modal fade" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><b>Invite Partner</b></h4>
                    </div>
                    <div class="modal-body">
                        <P class="desc-text">Once invited, your partner will be able to add, remove, and update products and adjust your wedding registry settings.</P>
                            <div class="form-group">
                                <label for="email">EMAIL ADDRESS:</label>
                                <input type="email" class="form-control email-field" id="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['user_session']->value[0]['spouse_email'];?>
">
                            </div>
                            <button type="button" id="invitePartnerForm" class="btn btn-primary pull-right submit-btn" data-dismiss="modal">INVITE</button>
                            <br><br>
                    </div>
                </div>
            </div>
        </div>
        <div id="sanityCheck" class="modal fade" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><b>Validity Check</b></h4>
                    </div>
                    <div class="modal-body">
                        <P class="desc-text">Enter the name of your partner to confirm going live.</P>
                            <div class="form-group">
                                <label for="email">NAME :</label>
                                <input type="email" class="form-control email-field" id="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['user_session']->value[0]['bride_first_name'];?>
">
                            </div>
                            <button type="button" id="invitePartnerForm" class="btn btn-primary pull-right submit-btn" data-dismiss="modal">Go Live</button>
                            <br><br>
                    </div>
                </div>
            </div>
        </div>

        <!--End of invite partner modal-->

                <br>
                <hr>
                <div class="product-tabs inner-bottom-xs">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                <li class="active"><a data-toggle="tab" href="#description">VOWS</a></li>
                                <li><a data-toggle="tab" href="#review">VOTE OF THANKS</a></li>
                            </ul><!-- /.nav-tabs #product-tabs -->
                        </div>
                        <div class="col-sm-12">

                            <div class="tab-content">

                                <div id="description" class="tab-pane in active">
                                    <div class="product-tab">
                                        <p class="text"  id="Vmessage">
                                           <br><br><br><?php if (empty($_smarty_tpl->tpl_vars['user_session']->value[0]['vow_message'])) {?>
                                            Share your love with the world ....
                                            <?php } else {
echo $_smarty_tpl->tpl_vars['user_session']->value[0]['vow_message'];
}?><br><br></p>
                                           <p>Click <a href="#"  data-toggle="modal" data-target="#vowMessage" >here</a> to edit this message </p>
                                    </div>
                                </div><!-- /.tab-pane -->

                                <div id="review" class="tab-pane">
                                    <div class="product-tab">
                                        <div class="product-tab">
                                            <p class="text" id="Tmessage">
                                                <br><br><?php if (empty($_smarty_tpl->tpl_vars['user_session']->value[0]['vote_of_thanks'])) {?>Got anyone you'd like to thank? ....
                                                <?php } else {
echo $_smarty_tpl->tpl_vars['user_session']->value[0]['vote_of_thanks'];
}?><br><br></p>
                                                <p>Click <a href="#" data-toggle="modal" data-target="#votMessage" >here</a> to edit this message. </p>
                                        </div>
                                     </div><!-- /.product-tabs -->
            </div>



                                <!--invite partner modal-->
                                <div id="vowMessage" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"><b>Set Vow Message</b></h4>
                                            </div>
                                            <div class="modal-body">
                                                <P class="desc-text">Share your vows with the world.</P>
                                                <div class="form-group">
                                                    <input id="vows" class="form-control vowmessagefield" name="votmessage" placeholder="Type Vow Message" required>
                                                </div>
                                                <button id="setVowMessageButton" class="btn btn-primary pull-right submit-btn" data-dismiss="modal">Set Message</button>
                                                <br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End of invite partner modal-->


                                <!--invite partner modal-->
                                <div id="votMessage" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"><b>Vote of Thanks</b></h4>
                                            </div>
                                            <div class="modal-body">
                                                <P class="desc-text">Your <b>Thank You message</b></P>
                                                <div class="form-group">
                                                    <input id="vot" class="form-control vowmessagefield" name="votmessage" placeholder="Your vote of thanks" required>
                                                </div>
                                                <button id="setVotMessageButton" class="btn btn-primary pull-right submit-btn" data-dismiss="modal">Set Message</button>
                                                <br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End of invite partner modal-->
                <br>
                <br>
                <hr>
                                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['user_products']->value)===null||$tmp==='' ? '' : $tmp)) {?>

                                    <input type="hidden" id="base_url" value="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">
                                    <input type="hidden" id="quantity" value="1">
                                    <input type="hidden" id="user_ip" value="<?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
">


                                    <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                                        <div class="more-info-tab clearfix ">
                                            <?php $_smarty_tpl->tpl_vars["current_url"] = new Smarty_Variable($_SERVER['HTTP_HOST'], null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars["page_url"] = new Smarty_Variable($_SERVER['REQUEST_URI'], null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars["current_page"] = new Smarty_Variable(($_smarty_tpl->tpl_vars['current_url']->value).($_smarty_tpl->tpl_vars['page_url']->value), null, 0);?>
                                            <h3 class="new-product-title pull-left">
                                                Products in your registry</h3>
                                            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                                            </ul>
                                            <!-- /.nav-tabs -->
                                        </div>
                                        <div class="tab-content outer-top-xs">
                                            <div class="tab-pane in active" id="all">
                                                <div class="product-slider">
                                                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                                        <?php
$_from = $_smarty_tpl->tpl_vars['user_products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['user_product'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['user_product']->_loop = false;
$_smarty_tpl->tpl_vars['eKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['user_product']->value) {
$_smarty_tpl->tpl_vars['user_product']->_loop = true;
$foreach_user_product_Sav = $_smarty_tpl->tpl_vars['user_product'];
?>
                                                        <?php
$_from = $_smarty_tpl->tpl_vars['user_product']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['user_pro'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['user_pro']->_loop = false;
$_smarty_tpl->tpl_vars['eKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['user_pro']->value) {
$_smarty_tpl->tpl_vars['user_pro']->_loop = true;
$foreach_user_pro_Sav = $_smarty_tpl->tpl_vars['user_pro'];
?>
                                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user_pro']->value['product_id'];?>
" id="product_id">
                                                            <div class="item item-carousel">
                                                                <div class="products">
                                                                    <div class="product">
                                                                        <div class="product-image">
                                                                            <div class="image"> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
product?product_id=<?php echo $_smarty_tpl->tpl_vars['user_pro']->value['product_id'];?>
"><img  src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/products/<?php echo $_smarty_tpl->tpl_vars['user_pro']->value['image'];?>
" alt=""></a> </div>
                                                                            <!-- /.image -->

                                                                            <div class="tag new"><span>new</span></div>
                                                                        </div>
                                                                        <!-- /.product-image -->

                                                                        <div class="product-info text-left">
                                                                            <h3 class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
product?product_id=<?php echo $_smarty_tpl->tpl_vars['user_pro']->value['product_id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['user_pro']->value['name']);?>
</a></h3>
                                                                            <div class="rating rateit-small"></div>
                                                                            <div class="description"></div>
                                                                            <div class="product-price"> <span class="price">&#8358;<?php echo $_smarty_tpl->tpl_vars['user_pro']->value['price'];?>
</span></div>
                                                                            <!-- /.product-price -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product -->
                                                                    <div class="">
                                                                        <div class="action">
                                                                            <ul class="list-unstyled">
                                                                                <li class="add-cart-button btn-group">
                                                                                    <button class="btn btn-primary remove_btn" type="button">Remove</button>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- /.action -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.products -->
                                                            </div>
                                                        <?php
$_smarty_tpl->tpl_vars['user_pro'] = $foreach_user_pro_Sav;
}
?>
                                                        <?php
$_smarty_tpl->tpl_vars['user_product'] = $foreach_user_product_Sav;
}
?>
                                                        <!-- /.item -->
                                                    </div>
                                                    <!-- /.home-owl-carousel -->
                                                </div>
                                                <!-- /.product-slider -->
                                            </div>
                                            <!-- /.tab-pane -->
                                            <!-- /.tab-pane -->
                                        </div>
                                        <!-- /.tab-content -->
                                    </div>
                                <?php }?>
                </section><!-- /.section -->
        </div>
<?php echo $_smarty_tpl->getSubTemplate ("./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>