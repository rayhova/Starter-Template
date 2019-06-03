// Custom Javascript //
jQuery(function($) {



  // declare variable
  var scrollTop = $('#sttBtn');

  $(window).scroll(function() {
    // declare variable
    var topPos = $(this).scrollTop();

    // if user scrolls down - show scroll to top button
    
      $(scrollTop).show();

   

  }); // scroll END

  //Click event to scroll to top
  $(scrollTop).click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 800);
    return false;

  }); // click() scroll top EMD
	$("#utility-bar i.fa.fa-search").click(function(){
		$(".submenu").hide();
    $(".search-popup").toggle();
	});

  $("#main-menu .menu-item").mouseover(function(){
    $(".submenu").hide();
    var submenuClass = $(this).data('menu');
    $("#main-menu .submenu."+submenuClass).show();
    
  });
  $(".submenubottom").mouseleave(function(){
      $(".submenu").slideUp(500);
    });

});