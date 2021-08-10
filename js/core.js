
jQuery(document).ready(function($) {


// animacie

$('.anim-sekcie').addClass("no-opacity").waypoint(function() {
$(this.element).addClass( "anim-slide-in-blurred-bottom");},{ offset: '90%' });
$('.anim-text').addClass("no-opacityx").waypoint(function() {
$('.anim-text').addClass( "anim-text-focus-in");},{ offset: '100%' });







// Load more


  var ppp = 3; // Post per page
  var pageNumber = 1;


  function load_posts(){
      pageNumber++;
      var str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
      $.ajax({
          type: "POST",
          dataType: "html",
          url: ajax_posts.ajaxurl,
          data: str,
          success: function(data){
              var $data = $(data);
              if($data.length){
                  $("#ajax-posts").append($data);
                  $("#more_posts").attr("disabled",false);
              } else{
                  $("#more_posts").attr("disabled",true);
              }
          },
          error : function(jqXHR, textStatus, errorThrown) {
              $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
          }

      });
      return false;
  }

  $("#more_posts").on("click",function(){ // When btn is pressed.
      $(this).attr("disabled",true).fadeOut('slow'); // Disable the button and fadeout, temp.
      load_posts();
      $("anim-sekcie").addClass( "scale-in-center");
  });


// Gallery

jQuery('.gallery').each(function() { // the containers for all your galleries
    jQuery(this).magnificPopup({
        delegate: 'a', // the selector for gallery item
        type: 'image',
        gallery: {
          enabled:true
        }
    });
});
jQuery(function($){
  $('a[href*="#"]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});
});
