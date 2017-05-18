$(document).ready(function (){
	$(window).scroll(function () {
		var mContentPos = $('#content').offset().top //61px;
		$(window).scroll(function () {
			var mScrollTop = $(window).scrollTop();
			if (mScrollTop > mContentPos) {
				$(".header-top-mobile-fix").removeClass("hidden");
				$(".search-mobile-header").css("top", "50px");
			}else {
				$(".header-top-mobile-fix").addClass("hidden");
				$(".search-mobile-header").css("top", "60px");
			}
		});
	});

	//Scroll top
	$("#return-top-page").click(function () {
            $('html, body').animate({ scrollTop: 0 }, '500');
    });

    $(".header-top-mobile .search-mobile .fa-search").click(function () {
		$(".search-mobile-header").css("top", "60px");
		$(".search-mobile-header").toggleClass("hidden");
		if (!$(".search-mobile-header").hasClass("hidden")) {
			$(".search-mobile-header input").focus();
		}
	});

	$(".header-top-mobile-fix .search-mobile .fa-search").click(function () {
		$(".search-mobile-header").css("top", "50px");
		$(".search-mobile-header").toggleClass("hidden");
		if (!$(".search-mobile-header").hasClass("hidden")) {
			$(".search-mobile-header input").focus();
		}
	});



	//Swiper
	var mySwiper = new Swiper ('.swiper-container', {
      	// Optional parameters
		direction: 'horizontal',
		// If we need pagination
		pagination: '.swiper-pagination',
		paginationClickable: true,
		slidesPerView: 'auto',

		// Navigation arrows
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev'
    }); 

    //Main mobile menu
    //$('#main-menu-mobile').mmenu(
	//);   

    $("#main-menu-mobile").mmenu({
		extensions 		: [ "pageshadow", "theme-white", "pagedim-black" ],
		dividers		: {
			add				: true,
			addTo			: "[id*='contacts-']",
			fixed			: true
		}
	});

				
						
});



