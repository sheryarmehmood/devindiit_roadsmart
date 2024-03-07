$(document).ready(function() {
    
    /*========== Toggle ==========*/
    $(document).on('click', '.toggle', function() {
        // $(".toggle").toggleClass("active");
		$("html").toggleClass("flow");
		$(".side_nav").toggleClass("active");
    });
    $(document).on('click', '.side_nav .close_nav', function() {
        // $(".toggle").removeClass("active");
		$("html").removeClass("flow");
		$(".side_nav").removeClass("active");
    });
    $(document).on('click', '.search_blk .search_group .global_search .txtBox', function() {
        $('.global_search_menu').slideToggle();
    });
    $(document).on('click', '.if_link .if_lbl', function() {
        $(this).parents('.col-lg-12').next('.if_hide_action').fadeIn();
    });
    // ===============fieldset============
    $(document).on("click", ".nextBtn", function () {
        var curntField = $(this).parents('fieldset');
        var nextField = curntField.next('fieldset');
        $(".option_lbl >ul>li").eq($("fieldset").index(nextField)).addClass("active");
        curntField.hide();
        nextField.show();
    });

    $(document).on("click", ".nextBtn.last_btn_pop", function () {
        $(this).parents('.pop_flex_service').addClass('hide_colR')
    });
    $(document).on('click', '.banner_main .nav-tabs li a', function() {
        var imageUrl = $(this).children('span').data('bg');
        $(this).parents('.banner_main').css("background-image", "url(" + imageUrl + ")");
        $(this).parents('.banner_main').children('.image_hide_big').css("background-image", "url(" + imageUrl + ")");
    });


    $(document).on('click', '.service_drop .inner_drop_blk .drop_header', function() {
        $(this).next('.drop_cntnt').slideToggle();
        $(this).parents('.inner_drop_blk').toggleClass('active');
    });


    $('#lightSlider').lightSlider({
            gallery: true,
            item: 1,
            auto: true,
            loop: true,
            speed: 2500,
            pause: 8000,
            slideMargin: 0,
            enableDrag: false,
            thumbMargin: 4,
            thumbItem: 4
        });

    // ========faq's===========
    $('.acc h4').click(function(){
        $(this).next('.content').slideToggle();
        $(this).parent().toggleClass('active');
        $(this).parent().siblings().children('.content').slideUp();
        $(this).parent().siblings().removeClass('active');
    })

    
    $(document).on("focus", ".txtGrp .txtBox:not(select)", function() {
		$(this)
			.parents(".txtGrp:first")
			.find("label:first")
			.addClass("move");
	});

	$(document).on("blur", ".txtGrp .txtBox:not(select)", function() {
		if (this.value == "")
			$(this)
				.parents(".txtGrp:first")
				.find("label:first")
				.removeClass("move");
	});

	$('.txtGrp .txtBox:not(select)').each(function(e) {
		if (this.value != "")
			$(this)
				.parents(".txtGrp:first")
				.find("label:first")
				.addClass("move");
	});

    /*========== File Upload ==========*/
    var imgFile;
    $(document).on('click', '#uploadDp', function() {
        imgFile = $(this).attr('data-file');
        $(this).parents('form').children('.uploadFile').trigger('click');
    });
    $(document).on('change', '.uploadFile', function() {
        // alert(imgFile);
        var file = $(this).val();
        $('.uploadImg').html(file);
    });

    
    /*========== Dropdown ==========*/
    $(document).on('click', '.dropBtn', function(e) {
        e.stopPropagation();
        var $this = $(this).parent().children('.dropCnt');
        $('.dropCnt').not($this).removeClass('active');
        var $parent = $(this).parent('.dropDown');
        $parent.children('.dropCnt').toggleClass('active');
    });
    $(document).on('click', '.dropCnt', function(e) {
        e.stopPropagation();
    });
    $(document).on('click', function() {
        $('.dropCnt').removeClass('active');
    });
    /*----- video button -----*/


var vid = $('video');
    // var vid = document.getElementById("bannerVid");
    $(document).on('click', '.fa-play', function() {
      
        $(this).parents().children(vid).trigger('play');

        $(this).removeClass('fa-play').addClass('fa-pause');
    });
    $(document).on('click', '.fa-pause', function() {
        $(this).parents().children(vid).trigger('pause');

        $(this).removeClass('fa-pause').addClass('fa-play');
    });


    /*========== Popup ==========*/
    $(document).on('click', '.popBtn', function() {
        var popUp = $(this).data('popup');
        $('body').addClass('flow');
        $('.popup[data-popup= ' + popUp + ']').fadeIn();
    });
    $(document).on('click', '.crosBtn', function() {
        var popUp = $(this).parents('.popup').data('popup');
        $('body').removeClass('flow');
        $('.popup[data-popup= ' + popUp + ']').fadeOut();
    });

$('.datepicker').datepicker({
            dateFormat: 'MM dd, yy',
            changeMonth: true,
            changeYear: true,
            yearRange: '1900:2060'
        });

        // Timepicker Js
        $('.timepicker').timepicki({
            reset: true
        });

        // Select Js
        $(document).ready(function () {
            $('.selectpicker').selectpicker();
        });
        
        // Data Table Js
        var sortOrder = ($('th.sortBy').index()>-1)?$('th.sortBy').index():0;
        $('.dataTable').DataTable({
            'order': [[
                sortOrder, 'asc'
            ]],
            'pageLength': 25,
            columnDefs: [{
                orderable: false,
                targets: 'no-sort'
            }],
            responsive: true
        });
        // rateYo
        $('.ratestars').rateYo({
            rating: 4.0,
            fullStar: true,
            // readOnly: true,
            normalFill: '#ddd',
            ratedFill: '#f6a623',
            starWidth: '14px',
            spacing: '2px'
        });

        $('#owl-SmBanner').owlCarousel({
            autoplay: true,
            dots: true,
            loop: true,
            autoHeight: true,
            animateOut: 'fadeOut',
            smartSpeed: 1000,
            autoplayTimeout: 8000,
            autoplayHoverPause: true,
            responsive: {
                0:{
                    items: 1,
                    autoplay: false,
                    dots: true
                },
                480:{
                    items: 1
                },
                991:{
                    items: 1
                },
                1200:{
                    items: 1
                }
            }
        });
        $('#owl-proBanner').owlCarousel({
            autoplay: true,
            dots: true,
            loop: true,
            autoHeight: true,
            animateOut: 'fadeOut',
            smartSpeed: 1000,
            autoplayTimeout: 8000,
            autoplayHoverPause: true,
            responsive: {
                0:{
                    items: 1,
                    autoplay: false,
                    dots: true
                },
                480:{
                    items: 1
                },
                991:{
                    items: 1
                },
                1200:{
                    items: 1
                }
            }
        });
        $('#owl-testi').owlCarousel({
            autoplay: true,
            nav: false,
            navText: ['<i class="fi-chevron-left"></i>', '<i class="fi-chevron-right"></i>'],
            // navText: [ 'prev', 'next' ],
            dots: true,
            loop:true,
            margin:5,
            center:true,
            autoWidth: false,
            autoHeight: false,
            smartSpeed: 1000,
            animateOut: 'fadeOut',
            autoplayTimeout: 10000,
            autoplayHoverPause: true,
            responsive: {
                0:{
                    items: 1,
                    autoplay: false,
                    autoHeight: true,
                    dots: true,
                    nav:false
                },
                600:{
                    items:1
                },
                1000:{
                    items: 1
                }
            }
        });
        $('.listing').owlCarousel({
            autoplay: true,
            nav: true,
            navText: ['<i class="fi-arrow-left"></i>', '<i class="fi-arrow-right"></i>'],
            dots: false,
            loop: true,
            autoHeight: true,
            animateOut: 'fadeOut',
            smartSpeed: 1000,
            margin:15,
            autoplayTimeout: 8000,
            autoplayHoverPause: true,
            responsive: {
                0:{
                    items: 1,
                    // autoplay: false,
                    autoHeight: true,
                    // dots: true,
                    // nav:false
                },
                600:{
                    items: 3
                },
                1000:{
                    items: 4
                }
            }
        });

        



        var offSet = $('body').offset().top;
        var offSet = offSet + 50;
        $(window).scroll(function() {
            var scrollPos = $(window).scrollTop();
            if (scrollPos >= offSet) {
               $('header').addClass('fix'); 
            } else {
                $('header').removeClass('fix'); 
            }
        });

       
        

});


function textAreaAdjust(o) {
    o.style.height = '1px';
    o.style.height = (25 + o.scrollHeight) + 'px';
}

// smooth scroling effect================
// $("html").easeScroll();

/*========== Page Loader ==========*/
$(window).on('load', function() {
    $('.loader').delay(700).fadeOut();
    $('#pageloader').delay(1200).fadeOut('slow');
});

