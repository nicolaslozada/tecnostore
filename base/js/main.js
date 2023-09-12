console.log('inicio---');

$(document).ready(function () {
  $(window).scroll(function(){
		var scrollY = window.scrollY;
		var position = 100;

		if (position <= scrollY) {
			$('header').addClass('active');
		} else {
      if ($('header').hasClass('active')) {
				$('header').removeClass('active');
			}
		}
	});
	
	if (window.screenY > window.innerHeight) {
    $('header').addClass('active');
		// $('.btn-up').addClass('active');
	}

  $('.dropdown__head').click(function(e) {
		e.preventDefault();
    console.log('hola');
		$('.dropdown__list').toggleClass('active');
	});

  $('.accordion__head').click(function (e) {
    e.preventDefault();
    var list = $('.accordion');
    var item = this;

    
    list.each(function(i, value) {
      var newValue = $( value ).children()[0];
      var isActive = $(item).hasClass('active');

      $(newValue).removeClass('active');
      
      if (newValue == item && isActive) {
        $(newValue).removeClass('active');
        $('.ancla__accordion').removeClass('active');
        $(item).removeClass('active');
      } else if (newValue == item && !isActive) {
        $(newValue).removeClass('active');
        $(item).addClass('active');
      }
    });
  });

  $('.ancla__accordion[href^="#"]').click(function (e) {
    e.preventDefault();
    var id = $(this).attr('href').slice(1);
    var list = $('.accordion');
    var item = this;
    var listAncla = $('.ancla__accordion');

    listAncla.each(function(i, value) {
      if(value == item) {
        $(value).addClass('active');
      } else {
        $(value).removeClass('active');
      }
    });
    
    list.each(function(i, value) {
      var newValue = $( value ).children()[0];

      if (value.id == id) {
        $(newValue).addClass('active');
      } else {
        $(newValue).removeClass('active');
      }
    });
  });

});
