/*global $ */
$ = jQuery;
jQuery(document).ready(function(){

$('a[href*="#"]').on('click', function(e) {
    e.preventDefault()

    $('html, body').animate(
        {
        scrollTop: $($(this).attr('href')).offset().top - 60,
        },
        300,
        'linear'
    )
    });
});


/*global $ */
$ = jQuery;
jQuery(document).ready(function(){

  $(document).on("ready", function (e) {
      e.preventDefault()

      var urlHash = window.location.href.split("#")[1];
      $('html,body').animate({
          scrollTop: $('.' + urlHash + ', #' + urlHash +',[name='+urlHash+']').first().offset().top -100
      }, 1000);
  });

});
