jQuery(document).ready(function() {
    "use strict";

    /*===================================================================================*/
/*	OWL CAROUSEL
/*===================================================================================*/
jQuery(function () {
    var dragging = true;
    var owlElementID = "#owl-main";

    function fadeInReset() {
        if (!dragging) {
            jQuery(owlElementID + " .caption .fadeIn-1, " + owlElementID + " .caption .fadeIn-2, " + owlElementID + " .caption .fadeIn-3").stop().delay(800).animate({ opacity: 0 }, { duration: 400, easing: "easeInCubic" });
        }
        else {
            jQuery(owlElementID + " .caption .fadeIn-1, " + owlElementID + " .caption .fadeIn-2, " + owlElementID + " .caption .fadeIn-3").css({ opacity: 0 });
        }
    }

    function fadeInDownReset() {
        if (!dragging) {
            jQuery(owlElementID + " .caption .fadeInDown-1, " + owlElementID + " .caption .fadeInDown-2, " + owlElementID + " .caption .fadeInDown-3").stop().delay(800).animate({ opacity: 0, top: "-15px" }, { duration: 400, easing: "easeInCubic" });
        }
        else {
            jQuery(owlElementID + " .caption .fadeInDown-1, " + owlElementID + " .caption .fadeInDown-2, " + owlElementID + " .caption .fadeInDown-3").css({ opacity: 0, top: "-15px" });
        }
    }

    function fadeInUpReset() {
        if (!dragging) {
            jQuery(owlElementID + " .caption .fadeInUp-1, " + owlElementID + " .caption .fadeInUp-2, " + owlElementID + " .caption .fadeInUp-3").stop().delay(800).animate({ opacity: 0, top: "15px" }, { duration: 400, easing: "easeInCubic" });
        }
        else {
            $(owlElementID + " .caption .fadeInUp-1, " + owlElementID + " .caption .fadeInUp-2, " + owlElementID + " .caption .fadeInUp-3").css({ opacity: 0, top: "15px" });
        }
    }

    function fadeInLeftReset() {
        if (!dragging) {
            jQuery(owlElementID + " .caption .fadeInLeft-1, " + owlElementID + " .caption .fadeInLeft-2, " + owlElementID + " .caption .fadeInLeft-3").stop().delay(800).animate({ opacity: 0, left: "15px" }, { duration: 400, easing: "easeInCubic" });
        }
        else {
            jQuery(owlElementID + " .caption .fadeInLeft-1, " + owlElementID + " .caption .fadeInLeft-2, " + owlElementID + " .caption .fadeInLeft-3").css({ opacity: 0, left: "15px" });
        }
    }

    function fadeInRightReset() {
        if (!dragging) {
            jQuery(owlElementID + " .caption .fadeInRight-1, " + owlElementID + " .caption .fadeInRight-2, " + owlElementID + " .caption .fadeInRight-3").stop().delay(800).animate({ opacity: 0, left: "-15px" }, { duration: 400, easing: "easeInCubic" });
        }
        else {
            jQuery(owlElementID + " .caption .fadeInRight-1, " + owlElementID + " .caption .fadeInRight-2, " + owlElementID + " .caption .fadeInRight-3").css({ opacity: 0, left: "-15px" });
        }
    }

    function fadeIn() {
        jQuery(owlElementID + " .active .caption .fadeIn-1").stop().delay(500).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
        jQuery(owlElementID + " .active .caption .fadeIn-2").stop().delay(700).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
        jQuery(owlElementID + " .active .caption .fadeIn-3").stop().delay(1000).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
    }

    function fadeInDown() {
        jQuery(owlElementID + " .active .caption .fadeInDown-1").stop().delay(500).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
        jQuery(owlElementID + " .active .caption .fadeInDown-2").stop().delay(700).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
        jQuery(owlElementID + " .active .caption .fadeInDown-3").stop().delay(1000).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
    }

    function fadeInUp() {
        jQuery(owlElementID + " .active .caption .fadeInUp-1").stop().delay(500).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
        jQuery(owlElementID + " .active .caption .fadeInUp-2").stop().delay(700).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
        jQuery(owlElementID + " .active .caption .fadeInUp-3").stop().delay(1000).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
    }

    function fadeInLeft() {
        jQuery(owlElementID + " .active .caption .fadeInLeft-1").stop().delay(500).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
        jQuery(owlElementID + " .active .caption .fadeInLeft-2").stop().delay(700).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
        jQuery(owlElementID + " .active .caption .fadeInLeft-3").stop().delay(1000).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
    }

    function fadeInRight() {
        jQuery(owlElementID + " .active .caption .fadeInRight-1").stop().delay(500).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
        jQuery(owlElementID + " .active .caption .fadeInRight-2").stop().delay(700).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
        jQuery(owlElementID + " .active .caption .fadeInRight-3").stop().delay(1000).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
    }

    jQuery(owlElementID).owlCarousel({

        autoPlay: 5000,
        stopOnHover: true,
        navigation: true,
        pagination: true,
        singleItem: true,
        addClassActive: true,
        transitionStyle: "fade",
        navigationText: ["<i class='icon fa fa-angle-left'></i>", "<i class='icon fa fa-angle-right'></i>"],

        afterInit: function() {
            fadeIn();
            fadeInDown();
            fadeInUp();
            fadeInLeft();
            fadeInRight();
        },

        afterMove: function() {
            fadeIn();
            fadeInDown();
            fadeInUp();
            fadeInLeft();
            fadeInRight();
        },

        afterUpdate: function() {
            fadeIn();
            fadeInDown();
            fadeInUp();
            fadeInLeft();
            fadeInRight();
        },

        startDragging: function() {
            dragging = true;
        },

        afterAction: function() {
            fadeInReset();
            fadeInDownReset();
            fadeInUpReset();
            fadeInLeftReset();
            fadeInRightReset();
            dragging = false;
        }

    });

if (jQuery(owlElementID).hasClass("owl-one-item")) {
    jQuery(owlElementID + ".owl-one-item").data('owlCarousel').destroy();
}

jQuery(owlElementID + ".owl-one-item").owlCarousel({
    singleItem: true,
    navigation: false,
    pagination: false
});




jQuery('.home-owl-carousel').each(function(){

    var owl = $(this);
    var  itemPerLine = owl.data('item');
    if(!itemPerLine){
        itemPerLine = 4;
    }
    owl.owlCarousel({
        items : itemPerLine,
        itemsTablet:[768,2],
        navigation : true,
        pagination : false,

        navigationText: ["", ""]
    });
});

jQuery('.homepage-owl-carousel').each(function(){

    var owl = $(this);
    var  itemPerLine = owl.data('item');
    if(!itemPerLine){
        itemPerLine = 4;
    }
    owl.owlCarousel({
        items : itemPerLine,
        itemsTablet:[768,2],
        itemsDesktop : [1199,2],
        navigation : true,
        pagination : false,

        navigationText: ["", ""]
    });
});

jQuery(".blog-slider").owlCarousel({
    items : 2,
    itemsDesktopSmall :[979,2],
    itemsDesktop : [1199,2],
    navigation : true,
    slideSpeed : 300,
    pagination: false,
    navigationText: ["", ""]
});

jQuery(".best-seller").owlCarousel({
    items : 3,
    navigation : true,
    itemsDesktopSmall :[979,2],
    itemsDesktop : [1199,2],
    slideSpeed : 300,
    pagination: false,
    paginationSpeed : 400,
    navigationText: ["", ""]
});

jQuery(".sidebar-carousel").owlCarousel({
    items : 1,
    itemsTablet:[768,2],
    itemsDesktopSmall :[979,2],
    itemsDesktop : [1199,1],
    navigation : true,
    slideSpeed : 300,
    pagination: false,
    paginationSpeed : 400,
    navigationText: ["", ""]
});

jQuery(".brand-slider").owlCarousel({
    items : 6,
    navigation : true,
    slideSpeed : 300,
    pagination: false,
    paginationSpeed : 400,
    navigationText: ["", ""]
});    
jQuery("#advertisement").owlCarousel({
    items : 1,
    itemsDesktopSmall :[979,2],
    itemsDesktop : [1199,1],
    navigation : true,
    slideSpeed : 300,
    pagination: true,
    paginationSpeed : 400,
    navigationText: ["", ""]
});    



});

/*===================================================================================*/
/*  LAZY LOAD IMAGES USING ECHO
/*===================================================================================*/
jQuery(function(){
    echo.init({
        offset: 100,
        throttle: 250,
        unload: false
    });
});

/*===================================================================================*/
/*  RATING
/*===================================================================================*/

jQuery(function(){
    jQuery('.rating').rateit({max: 5, step: 1, value : 4, resetable : false , readonly : true});
});

/*===================================================================================*/
/* PRICE SLIDER
/*===================================================================================*/
jQuery(function () {

// Price Slider
if (jQuery('.price-slider').length > 0) {
    jQuery('.price-slider').slider({
        min: 100,
        max: 700,
        step: 10,
        value: [200, 500],
        handle: "square"

    });

}

});


/*===================================================================================*/
/* SINGLE PRODUCT GALLERY
/*===================================================================================*/
jQuery(function(){
    jQuery('#owl-single-product').owlCarousel({
        items:1,
        itemsTablet:[768,2],
        itemsDesktop : [1199,1]

    });

    jQuery('#owl-single-product-thumbnails').owlCarousel({
        items: 4,
        pagination: true,
        rewindNav: true,
        itemsTablet : [768, 4],
        itemsDesktop : [1199,3]
    });

    jQuery('#owl-single-product2-thumbnails').owlCarousel({
        items: 6,
        pagination: true,
        rewindNav: true,
        itemsTablet : [768, 4],
        itemsDesktop : [1199,3]
    });

    jQuery('.single-product-slider').owlCarousel({
        stopOnHover: true,
        rewindNav: true,
        singleItem: true,
        pagination: true
    });

  
});





/*===================================================================================*/
/*  WOW 
/*===================================================================================*/

jQuery(function () {
    new WOW().init();
});


/*===================================================================================*/
/*  TOOLTIP 
/*===================================================================================*/
jQuery("[data-toggle='tooltip']").tooltip();

    /*===================================================================================*/
    /*  HYDEE
     /*===================================================================================*/

    var displayName = function () {
        $('.name-display').text($('#name').val());
        $('#name').hide();
        $('.name-display').show();
    };

    jQuery('.couples-form').on('submit', function () {
        event.preventDefault();
        displayName();
    });

    jQuery('#name').on('blur', function () {
        displayName();
    });

    jQuery('.name-display').on('click', function () {
        $('#name').val($('.name-display').text());
        $('.name-display').hide();
        $('#name').show();
    });

//=====================================================================================
$('#NoDate').on('change', function(){
    if($('#NoDate').is(":checked")){
        $('#wedding_date').attr('disabled', 'disabled')
    }
    else {
        $('#wedding_date').removeAttr('disabled')
    }
});
        var current_url = window.location.href;
        if (current_url.indexOf("dashboard") > -1){
            $('#dashboard').addClass('active');
        }
        else if(current_url.indexOf("manage")> -1){
            $('#dashboard').removeClass('active');
            $('#manage').addClass('active');
        }
        else if(current_url.indexOf("share")> -1){
            $('#manage').removeClass('active');
            $('#share').addClass('active');
        }
        else if(current_url.indexOf("settings")> -1){
            $('#share').removeClass('active');
            $('#settings').addClass('active');
        }
        else {
            $('#settings').removeClass('active');
            $('#account').addClass('active');

        }


    $('#uploader').on('click', function(){
        $("input").trigger("click");
        var fileSelect = document.getElementById('image_upload');
        var files = fileSelect.files;
        console.log(files);
    });

    jQuery('.single-back-img').on('click', function () {
        //dashboard_image_setter($(this).attr('src'));
        //$('.main-back-img').css( { backgroundImage: 'url(' + $(this).attr('src') + ')' } );
        dashboard_image_setter($(this).attr('src'));
// For IE we need to remove quotes to the proper url
        var couple_id = $('#couple_id').val();
        var bg_image = $('.main-back-img').css('background-image').replace(/(url\(|\)|")/g, '');
        $.ajax(
            {
                type: "GET",
                url: $('#base_url').val()+ '/api/updates/dashboard_image',
                data: {
                    "couple_id": couple_id,
                    "bg_image" : bg_image
                },
                dataType: 'json',
                async : false,
                success: function (response) {

                },
                error : function(response){}
            });

    });

    jQuery('#setVowMessageButton').on('click', function () {
        var couple_id = $('#couple_id').val();
        var vow_message = $('#vows').val();
        $.ajax(
            {
                type: "POST",
                url: $('#base_url').val()+ '/api/updates/vow_message',
                data: {
                    "couple_id": couple_id,
                    "vow_message" : vow_message
                },
                dataType: 'json',
                async : false,
                success: function (response) {
                    console.log(response);
                    console.log( $('#Vmessage').text(vow_message));
                    },
                error : function(response){
                    console.log(response);
                }
            });

    });


    jQuery('#setVotMessageButton').on('click', function () {
        var couple_id = $('#couple_id').val();
        var votmessage = $('#vot').val();
        $.ajax(
            {
                type: "POST",
                url: $('#base_url').val()+ '/api/updates/vot_of_thanks',
                data: {
                    "couple_id": couple_id,
                    "votmessage" : votmessage
                },
                dataType: 'json',
                async : false,
                success: function (response) {
                    console.log(response);
                    console.log( $('#Tmessage').text(votmessage));
                    },
                error : function(response){
                    console.log(response);
                }
            });

    });

    jQuery('#invitePartnerForm').on('click', function(){
        var partner_email = $('#email').val();
        var couple_id = $('#couple_id').val();

        $.ajax(
            {
                type: "POST",
                url: $('#base_url').val()+ '/api/updates/invite_partner',
                data: {
                    "couple_id": couple_id,
                    "partner_email" : partner_email
                },
                dataType: 'json',
                async : false,
                success: function (response) {
                    $('#alert').removeClass('hidden');
                },
                error : function(response){
                    console.log(response);
                }
            });
    });

    $('#extra_email').on('click', function(event){
        $("<input type=\"email\" name=\"email\" class=\"form-control unicase-form-control text-input\"" +
            " id=\"exampleInputEmail1\"> <br>").insertAfter('.form-group').insertBefore('#exampleInputEmail1:first-child')
    });

    $("#remove_extra").click(function() {
        $("#exampleInputEmail1:last-child").remove();
    });

    var dashboard_image_setter = function(image_url){
        var bg_img = $("#dashboard_image").val();
        image_url = image_url || bg_img;

         $('.main-back-img').css( { backgroundImage: 'url(' + image_url + ')' } );
         $('.preview-wrapper').css( { backgroundImage: 'url(' + image_url + ')' } );
    };


    /*

     <ul class="dropdown-menu">
     <li>
     <div class="cart-item product-summary">
     <div class="row">
     <div class="col-xs-4">
     <div class="image"> <a href="detail.html"><img src="{$BASE_URL}{$SMARTY_VIEW_FOLDER}/front/assets/images/cart.jpg" alt=""></a> </div>
     </div>
     <div class="col-xs-7">
     <h3 class="name"><a href="index8a95.html?page-detail">Simple Product</a></h3>
     <div class="price">$600.00</div>
     </div>
     <div class="col-xs-1 action"> <a href="#"><i class="fa fa-trash"></i></a> </div>
     </div>
     </div>
     <!-- /.cart-item -->
     <div class="clearfix"></div>
     <hr>
     <div class="clearfix cart-total">
     <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>$600.00</span> </div>
     <div class="clearfix"></div>
     <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> </div>
     <!-- /.cart-total-->

     </li>
     </ul>

     */
  dashboard_image_setter();

    var getCartDetails = function(){
        var base_url = $('#base_url').val();
        var template_url = $('#template_url').val();
        $.ajax({
           type: "GET",
            url: base_url + '/api/updates/get_ip',
            dataType: 'json',
            async : false,
            success: function (response) {
                var current_user_ip = response.response;
                var user_details = Cookies.getJSON('user_details');
                console.log(user_details);
                if (user_details){
                    if (user_details.user_ip === current_user_ip){
                        var sums = [];
                        for (var key in user_details.cart_data) {
                            if (user_details.cart_data.hasOwnProperty(key)) {
                                sums.push(user_details.cart_data[key]['quantity'] * user_details.cart_data[key]['price']);
                                $("#empty_cart_indicator").remove();
                                var cart_html = '<div class="col-xs-4"><div class="image"> ' +
                                    '<a href="detail.html"><img src=' + template_url + '/uploads/products/' + user_details.cart_data[key]["image"]>'\
                                    </a></div></div><div class="col-xs-7">\<' +
                                    'h3 class="name"><a href="index8a95.html?page-detail">Simple Product</a></h3><div class="price">$600.00</div></div><div class="col-xs-1 action">\ ' +
                                    '<a href="#"><i class="fa fa-trash"></i></a> </div></div></div><div class="clearfix"></div>\
                                    <hr><div class="clearfix cart-total"><div class="pull-right"> <span class="text">Sub Total :</span><span class="price">$600.00</span> </div>\
                                    <div class="clearfix"></div><a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> </div>';
                                $("#cart_details").append(cart_html);
                            }
                        }
                        var sum = sums.reduce(function(pv, cv) { return pv + cv; }, 0);
                       $('#price_count_span').html(user_details.cart_count + '  items /');
                       $('#cart_price_sum').html(sum);
                    }
                    }
            },
            error : function(){
            }
        });
    };

    getCartDetails();

    $('.registry_add').on('click', function(event){
        event.preventDefault();
        var user_ip = $('#user_ip').val();
        var product_id = $('#product_id').val();
        var quantity = $('#quantity').val();
        var couple_id = $('#couple_id').val();
        var base_url = $('#base_url').val();

        $.ajax(
            {
                type: "POST",
                url: base_url + '/api/updates/registry_add',
                data: {
                    "user_ip": user_ip,
                    "product_id" : product_id,
                    "quantity" : quantity,
                    "couple_id":couple_id
                },
                dataType: 'json',
                async : false,
                success: function (response) {
                    console.log(response)
                    toastr.info('The product has been added to your registry');
                },
                error : function(response){
                    console.log(response);
                    toastr.warning('You need to login to add to registry');
                }
            });
    });


    $('.product_compare').on('click', function(event){
        event.preventDefault();
        toastr.info('The product has been set up for comparison.');
    });

    $('#logout_btn').on('click', function(event){
        event.preventDefault();
        var couple_id = $('#couple_id').val();
        var user_ip = $('#user_ip').val();
        var base_url = $('#base_url').val();

        console.log(base_url, user_ip, couple_id);

        $.ajax(
            {
                type: "POST",
                url: base_url + '/api/updates/logout',
                data: {
                    "user_ip": user_ip,
                    "couple_id": couple_id
                },
                dataType: 'json',
                async : false,
                success: function (response) {
                   window.location.href = base_url;
                },
                error : function(response){
                }
            });

    });


    $('.cart_add').on('click', function(event){
        event.preventDefault();
        var user_ip = $('#user_ip').val();
        var product_id = $('#product_id').val();
        var quantity = $('#quantity').val();
        var base_url = $('#base_url').val();

        console.log(user_ip, product_id, quantity, base_url);

        $.ajax(
            {
                type: "POST",
                url: base_url + '/api/updates/cart',
                data: {
                    "user_ip": user_ip,
                    "product_id" : product_id,
                    "quantity" : quantity
                },
                dataType: 'json',
                async : false,
                success: function (response) {
                    var user_details =  Cookies.set('user_details', {'user_ip':user_ip,
                        'cart_data':response.response.data,
                        'cart_count':response.response.item_count});
                    toastr.info('The product has been added to your cart');
                    getCartDetails()
                },
                error : function(response){
                    console.log(response);
                    toastr.error('Unable to add the product to your cart');
                }
            });
    });

});

