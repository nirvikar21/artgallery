$('.navbar-toggle').on('click', function(){

    $(this).toggleClass('open');

 });   



 $(window).scroll(function () {

            if ($(this).scrollTop() > 50) {

                $('#back-to-top').fadeIn();

            } else {

                $('#back-to-top').fadeOut();

            }

        });

      // scroll body to 0px on click

      $('#back-to-top').click(function () {

          $('#back-to-top').tooltip('hide');

          $('body,html').animate({

              scrollTop: 0

          }, 800);

          return false;

      });

      

      $('#back-to-top').tooltip('hide');

	  

	  

	$(window).scroll( function (){

	var mm = $(window).scrollTop();

	

	

	var hight = $(window).height();

	//alert(hight);

	

	if(mm > 1)

	{

		$('.ak_header').addClass('my-fix animated slideInDown');

	}

	else{

		$('.ak_header').removeClass('my-fix animated slideInDown');

	}

	

});  

	  

  

	/* ----------------------------------------------------------- */

      /* Home Page banner

      /* ----------------------------------------------------------- */





$('#main-slide').owlCarousel({

   loop:true,

    margin:0,

    nav:false,

    dots:true,

    items:1,

    smartSpeed: 1000,

    autoplay:true

})

$('#main-slide-1').owlCarousel({

   loop:true,

    margin:0,

    nav:false,

    dots:true,

    items:1,

    smartSpeed: 1000,

    autoplay:true

})
/* ----------------------------------------------------------- */
      /* Paintings
      /* ----------------------------------------------------------- */  
  
	$('#paintings').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
	dots:true,
    navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	animateOut: 'fadeOut',
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})
/* ----------------------------------------------------------- */
      /* Sculptures
      /* ----------------------------------------------------------- */  
  
	$('#sculptures').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
	dots:true,
    navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	animateOut: 'fadeOut',
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})
/* ----------------------------------------------------------- */
      /* lithograph-serigraph
      /* ----------------------------------------------------------- */  
  
	$('#lithograph-serigraph').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
	dots:true,
    navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	animateOut: 'fadeOut',
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})
/* ----------------------------------------------------------- */
      /* works-on-paper
      /* ----------------------------------------------------------- */  
  
	$('#works-on-paper').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
	dots:true,
    navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	animateOut: 'fadeOut',
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})


$('#works-with-price').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
	dots:true,
    navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	animateOut: 'fadeOut',
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
 



 
$(document).on('change','.up', function(){
            var names = [];
            var length = $(this).get(0).files.length;
                for (var i = 0; i < $(this).get(0).files.length; ++i) {
                    names.push($(this).get(0).files[i].name);
                }
                // $("input[name=file]").val(names);
                if(length>2){
                  var fileName = names.join(', ');
                  $(this).closest('.form-group').find('.form-control').attr("value",length+" files selected");
                }
                else{
                    $(this).closest('.form-group').find('.form-control').attr("value",names);
                }
       });
	

	

	

	

$(function(){
  $("#nav .dropdown").hover(
    function() {
      $('#products-menu.dropdown-menu', this).stop( true, true ).fadeIn("fast");
      $(this).toggleClass('open');
    },
    function() {
      $('#products-menu.dropdown-menu', this).stop( true, true ).fadeOut("fast");
      $(this).toggleClass('open');
    });
});
	  

	

	

	  
// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() { $(".e1").select2(); });
//Wow Animation JS

new WOW().init();