<?php /* Smarty version 3.1.24, created on 2017-02-01 18:36:36
         compiled from "public/_template/front/registry/couple/dashboard/manage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:147951876958921ca4a90f34_77351729%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '640c56e1df665a495d2c827b7d22830c5eb12e47' => 
    array (
      0 => 'public/_template/front/registry/couple/dashboard/manage.tpl',
      1 => 1485970561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147951876958921ca4a90f34_77351729',
  'variables' => 
  array (
    'user_session' => 0,
    'session' => 0,
    'BASE_URL' => 0,
    'SMARTY_VIEW_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58921ca4b22369_78553418',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58921ca4b22369_78553418')) {
function content_58921ca4b22369_78553418 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '147951876958921ca4a90f34_77351729';
echo $_smarty_tpl->getSubTemplate ("./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


       <!-- ============================================== HEADER : END ============================================== -->

<?php
$_from = $_smarty_tpl->tpl_vars['user_session']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['session'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['session']->_loop = false;
$_smarty_tpl->tpl_vars['eKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['session']->value) {
$_smarty_tpl->tpl_vars['session']->_loop = true;
$foreach_session_Sav = $_smarty_tpl->tpl_vars['session'];
?>
    
<?php
$_smarty_tpl->tpl_vars['session'] = $foreach_session_Sav;
}
?>

<div class="breadcrumb" xmlns="http://www.w3.org/1999/html"><!-- /.container -->
</div><!-- /.breadcrumb -->
<!-- ============================================== HEADER : END ============================================== -->

<form>
    <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['session']->value[0]['couple_id'];?>
" id="couple_id" class="couples-name">
    <input type="hidden" id="base_url" value="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" />
</form>


<div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container-fluid main-back-img">
                    <button type="button" class="edit-btn" data-toggle="modal" data-target="#backgrounds">
                        edit background
                    </button>
                    <form action="" class="couples-form">
                        <input type="text" name="name" id="name" class="couples-name">
                        <span class="name-display"><?php echo $_smarty_tpl->tpl_vars['session']->value[0]['groom_first_name'];?>
 & <?php echo $_smarty_tpl->tpl_vars['session']->value[0]['bride_first_name'];?>
</span>
                    </form>
                </div>
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
                                        <!--<span class="glyphicon glyphicon-camera"></span><br>-->
                                        <span>upload photo</span>
                                        <input type="file" class="upload"/>
                                    </div>
                                </div>

                                <div data-dismiss="modal" class="single-back-img-div col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/files/cat-banner-1.jpg" alt="" class="img-responsive single-back-img">
                                </div>
                                <div data-dismiss="modal" class="single-back-img-div col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/files/wedding1.jpg" alt="" class="img-responsive single-back-img">
                                </div>
                                <div data-dismiss="modal" class="single-back-img-div col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/files/couple-1.jpg" alt="" class="img-responsive single-back-img">
                                </div>
                                <div data-dismiss="modal" class="single-back-img-div col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/files/couple-2.jpg" alt="" class="img-responsive single-back-img">
                                </div>
                                <div data-dismiss="modal" class="single-back-img-div col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/files/hands.jpg" alt="" class="img-responsive single-back-img">
                                </div>
                                <div data-dismiss="modal" class="single-back-img-div col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SMARTY_VIEW_FOLDER']->value;?>
/uploads/files/love-1.jpg" alt="" class="img-responsive single-back-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row small-boxes-wrapper">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/registry/couple/preview" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 small-boxes">
                        <h4>view as a guest</h4>
                        <p>View your profile as a guest and know how is feels</p>
                    </a>
                    <a href="#" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 small-boxes" data-toggle="modal" data-target="#invitePartner">
                        <h4>invite partner</h4>
                        <p>Let your partners join you in this journey</p>
                    </a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php/registry/couple/live" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 small-boxes">
                        <h4>make it visible</h4>
                        <p>Guests can not view your registry.</p>
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
                        <form action="">
                            <div class="form-group">
                                <label for="email">EMAIL ADDRESS:</label>
                                <input type="email" class="form-control email-field" id="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['session']->value[0]['spouse_email'];?>
">
                            </div>
                            <button type="submit" class="btn btn-primary pull-right submit-btn" data-dismiss="modal">INVITE</button>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--End of invite partner modal-->

                <br>
                <hr>
                <div class="product-tabs inner-bottom-xs">
                    <div class="row">
                        <div class="col-sm-4">
                            <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                <li class="active"><a data-toggle="tab" href="#description">VOWS</a></li>
                                <li><a data-toggle="tab" href="#review">VOTE OF THANKS</a></li>
                            </ul><!-- /.nav-tabs #product-tabs -->
                        </div>
                        <div class="col-sm-9">

                            <div class="tab-content">

                                <div id="description" class="tab-pane in active">
                                    <div class="product-tab">
                                        <p class="text">
                                           <br><br>Share your love with the world ....<br><br>
                                            Click <a href="#"  data-toggle="modal" data-target="#vowMessage" >here</a> to edit this message </p>
                                    </div>
                                </div><!-- /.tab-pane -->

                                <div id="review" class="tab-pane">
                                    <div class="product-tab">
                                        <div class="product-tab">
                                            <p class="text">
                                                <br><br>Got anyone you'd like to thank? ....<br><br>
                                                Click <a href="#">here</a> to leave them a message. </p>
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
                                                    <label for="vows">Vow Message</label>
                                                    <input id="vows" class="form-control vowmessagefield" name="vowmessage" placeholder="Type Vow Message" required>
                                                </div>
                                                <button id="setVowMessageButton" class="btn btn-primary pull-right submit-btn" data-dismiss="modal">Set Message</button>
                                                <br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End of invite partner modal-->
                <br>
                <br>
                <hr>
                    <h3 class="section-title">upsell products</h3>
                    <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/images/products/p1.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag sale"><span>sale</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/images/products/p2.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag sale"><span>sale</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/images/products/p3.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag hot"><span>hot</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/images/products/p4.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag new"><span>new</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/images/blank.gif" data-echo="assets/images/products/p5.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag hot"><span>hot</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->

                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="detail.html"><img  src="assets/images/blank.gif" data-echo="assets/images/products/p6.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag new"><span>new</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
				<span class="price">
					$650.99				</span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                                        <i class="fa fa-signal"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->
                    </div><!-- /.home-owl-carousel -->
                </section><!-- /.section -->
        </div>



            



<?php echo $_smarty_tpl->getSubTemplate ("./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>