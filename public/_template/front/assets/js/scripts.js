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


  var hideDeliveryDetails = function () {
    $('#delivery_options').hide('slow');
  };

  var showDeliveryDetails = function () {
    $('#delivery_options').show();
  };

  var cartConfig = {};

  $('#address_choice_option').on('click', function(){
    cartConfig['delivery_address'] = $('#address_options').find(":selected").text();
    hideDeliveryDetails();
  });

  $('#uploader').on('click', function(){
    $("input").trigger("click");
    var fileSelect = document.getElementById('image_upload');
    var files = fileSelect.files;
    console.log(files);
  });

  jQuery('#setVowMessageButton').on('click', function () {
    var couple_id = $('#couple_id').val();
    var vow_message = $('#vows').val();
    $.ajax(
        {
          type: "POST",
          url: $('#base_url').val() + 'api/updates/vow_message',
          data: {
            "couple_id": couple_id,
            "vow_message" : vow_message
          },
          dataType: 'json',
          async : false,
          success: function (response) {
          },
          error : function(response){
            toastr.error('Unable to set vow message');
          }
        });

  });

  jQuery('#setVotMessageButton').on('click', function () {
    var couple_id = $('#couple_id').val();
    var votmessage = $('#vot').val();
    $.ajax(
        {
          type: "POST",
          url: $('#base_url').val()+ 'api/updates/vot_of_thanks',
          data: {
            "couple_id": couple_id,
            "vot_message" : votmessage
          },
          dataType: 'json',
          async : false,
          success: function (response) {
            $('#Tmessage').text(votmessage);
          },
          error : function(response){
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
    console
        .log(bg_img);
    image_url = image_url || bg_img
    $('.main-couple-img').css('background-image', 'url(' + image_url + ')');
    $('.preview-wrapper').css( { backgroundImage: 'url(' + image_url + ')' } );
  };

  jQuery('.single-back-img').on('click', function () {

    var new_bg_image = $(this).attr('src');

// For IE we need to remove quotes to the proper url
    var couple_id = $('#couple_id').val();
    var bg_image = $('.main-couple-img').css('backgroundImage');

    $.ajax(
        {
          type: "GET",
          url: $('#base_url').val()+ '/api/updates/dashboard_image',
          data: {
            "couple_id": couple_id,
            "bg_image" : new_bg_image
          },
          dataType: 'json',
          async : false,
          success: function (response) {
            dashboard_image_setter(new_bg_image);
          },
          error : function(response){
            toastr.error('Unable to set dashboard image.')
          }
        });

  });

  var hide_product_details = function(){
    $('#product_cart_details').css("display","none");
  };

  var show_product_details = function(){
    $('#product_cart_details').css("display","block");
  };

  hide_product_details();

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
        if (user_details){
          if (user_details.user_ip === current_user_ip){
            var sums = [];
            for (var key in user_details.cart_data) {
              if (user_details.cart_data.hasOwnProperty(key)) {
                sums.push(user_details.cart_data[key]['quantity'] * user_details.cart_data[key]['price']);
                $("#empty_cart_indicator").remove();
                show_product_details();
              }
            }
            var sum = sums.reduce(function(pv, cv) { return pv + cv; }, 0);
            $('#price_count_span').html(user_details.cart_count + '  item(s) /');
            $('#cart_price_sum').html(sum);
          }
        }
      },
      error : function(){
      }
    });
  };

  getCartDetails();

  $('.remove_btn').on('click', function(event){
    event.preventDefault();
    var product_id = $('#product_id').val();
    var couple_id = $('#couple_id').val();

    swal({title: 'Are you sure you want to remove the product?', showCancelButton: true}).then(
        function(result) {
          $.ajax(
              {
                type: "POST",
                url:   $('#base_url').val() + 'api/updates/remove_product',
                data: {
                  "couple_id": couple_id,
                  "product_id": product_id
                },
                dataType: 'json',
                async : false,
                success: function (response) {
                  toastr.success('The product has been removed');
                },
                error : function(response){
                }
              });
        }, function(dismiss) {
        }
    );
  });

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
            toastr.info('The product has been added to your registry');
          },
          error : function(response){
            toastr.warning('You need to login to add to registry');
          }
        });
  });

  $('.product_compare').on('click', function(event){
    event.preventDefault();
    toastr.info('The product has been set up for comparison.');
  });

  $('#checkoutbtn').on('click', function(){
    var base_url = $('#base_url').val();
    window.location.href = base_url + 'registry/checkout/cart';
  });

  $('#logout_btn').on('click', function(event){
    event.preventDefault();
    var couple_id = $('#couple_id').val();
    var user_ip = $('#user_ip').val();
    var base_url = $('#base_url').val();

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
    var date = new Date();
    var minutes = 30;
    date.setTime(date.getTime() + (minutes * 60 * 1000));

    $.ajax(
        {
          type: "POST",
          url: base_url + 'api/updates/cart_add',
          data: {
            "user_ip": user_ip,
            "product_id" : product_id,
            "quantity" : quantity
          },
          dataType: 'json',
          async : false,
          success: function (response) {
            Cookies.set('user_details',
            {'user_ip':user_ip,
              'cart_data':response.response.cart_data,
              'cart_count':response.response.cart_count},{ expires: date});
                toastr.info('The product has been added to your cart');
            getCartDetails();
          },
          error : function(response){
            toastr.error('Unable to add the product to your cart');
          }
        });
  });

});

