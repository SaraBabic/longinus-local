(function ($, Drupal) {
    $(".block-mainnavigation-2__menu-item--expanded").click(function(){
        if($(".block-mainnavigation-2__submenu").hasClass('opened')) {
            $(".block-mainnavigation-2__submenu").removeClass('opened');
        }
        else {
            $(".block-mainnavigation-2__submenu").addClass("opened");
        }
      });


  })(jQuery, Drupal);