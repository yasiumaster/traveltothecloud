$(document).ready(function() {

  //------------------------------------//
  //Navbar//
  //------------------------------------//
  var menu = $('.navbar');
  $(window).bind('scroll', function(e) {
    if ($(window).scrollTop() > 140) {
      if (!menu.hasClass('open')) {
        menu.addClass('open');
      }
    } else {
      if (menu.hasClass('open')) {
        menu.removeClass('open');
      }
    }
  });

  //------------------------------------//
  //Scroll To//
  //------------------------------------//
  $(".scroll").click(function(event) {
    event.preventDefault();
    $('html,body').animate({
      scrollTop: $(this.hash).offset().top
    }, 800);

  });

  //------------------------------------//
  //Wow Animation//
  //------------------------------------//
  wow = new WOW({
    boxClass: 'wow', // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset: 0, // distance to the element when triggering the animation (default is 0)
    mobile: false // trigger animations on mobile devices (true is default)
  });
  wow.init();

  if ('geolocation' in navigator) {
    var geocoder = new google.maps.Geocoder;
    window._getPreciseLocation = function() {
      return new Promise(function(resolve, reject) {
        navigator.geolocation.getCurrentPosition(function(position) {

          var latlng = {
            lat: parseFloat(position.coords.latitude),
            lng: parseFloat(position.coords.longitude)
          };
          geocoder.geocode({
            'location': latlng
          }, function(results, status) {
            if (status === 'OK') {
              if (results[1]) {
                resolve(results[1].formatted_address);
              } else {
                window.alert('No results found');
              }
            } else {
              window.alert('Geocoder failed due to: ' + status);
            }
          });
        });
      });
    }

  } else {
    alert('Geolocation API not supported.');
  }

});
