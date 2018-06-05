var filterPortfolio = (function ($) {
    'use strict';

    var $grid = $('#grid'),
            $filterOptions = $('.filter-options'),
            init = function () {

                setupFilters();

                // instantiate the plugin
                $grid.shuffle({
                    itemSelector: '.project'
                });

            },
            // Set up button clicks
            setupFilters = function () {
                var $btns = $filterOptions.children();
                $btns.on('click', function () {
                    var $this = $(this),
                            isActive = $this.hasClass('active'),
                            group = isActive ? 'all' : $this.data('group');

                    // Hide current label, show current label in title
                    if (!isActive) {
                        $('.filter-options .active').removeClass('active');
                    }

                    $this.toggleClass('active');

                    // Filter elements
                    $grid.shuffle('shuffle', group);
                });

                $btns = null;
            };

    return {
        init: init
    };
}(jQuery));


jQuery(document).ready(function ($) {

    //Add active class to first filter elemnt
    $('.filter-options .filter-btn').first().addClass('active');

    //Filter portfolio
    filterPortfolio.init();

    //prettyPhoto
    $("a[data-rel^='prettyPhoto']").prettyPhoto({
        animation_speed: 'normal',
        slideshow: 3000,
        hook: 'data-rel'
    });

    //ToolTip
    $('.tooltip-link').tooltip();

    //Animations
    //All animations you can find at http://daneden.github.io/animate.css/
    setTimeout(function () {
        $(".main-image .hello-box").addClass("animated fadeInLeft");
    }, 1000);
    setTimeout(function () {
        $(".main-image h1,.main-image h1 span").addClass("animated fadeInDown");
    }, 1800);
    setTimeout(function () {
        $(".main-image p").addClass("animated fadeInUp");
    }, 2400);
    setTimeout(function () {
        $(".menu-btn").addClass("animated fadeInDown");
    }, 2800);

    $('.services-section').waypoint(function () {
        $('.services-section .box').each(function (i, el) {

            setTimeout(function () {
                $(el).addClass("animated zoomIn");
            }, 5 + (i * 70));
        });
    });
    $('.portfolio-section').waypoint(function () {
        $('.portfolio-section .box').each(function (i, el) {

            setTimeout(function () {
                $(el).addClass("animated fadeInDownBig");
            }, 5 + (i * 70));
        });
    });
    $('.testimonials-section').waypoint(function () {
        $('.testimonials-section .box').each(function (i, el) {

            setTimeout(function () {
                $(el).addClass("animated fadeInDown");
            }, 5 + (i * 70));
        });
    });

    $('.team-section').waypoint(function () {
        $('.team-section .box').each(function (i, el) {

            setTimeout(function () {
                $(el).addClass("animated flipInX");
            }, 5 + (i * 70));
        });
    });

    $('.contact-section').waypoint(function () {
        $('.contact-section .box').each(function (i, el) {

            setTimeout(function () {
                $(el).addClass("animated bounceIn");
            }, 5 + (i * 70));
        });
    });

    $(window).scroll(function () {

        $('.parallax .box').each(function (i, el) {
            var elementPos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (elementPos < topOfWindow + 500) {

                setTimeout(function () {
                    $(el).addClass("animated fadeInDown");
                }, 100 + (i * 150));
            }
        });
    });

    //Testimonials
    var carousel = $("#carousel-testimonial");
    carousel.carouFredSel({
        height: 200,
        responsive: true,
        mousewheel: true,
        auto: {
            items: 1,
            duration: 1500,
            timeoutDuration: 10000,
            fx: 'scroll'
        },
        swipe: {
            onTouch: true,
            onMouse: true
        },
        onCreate: function () {
            $(window).on('resize', function () {
                carousel.parent().add(carousel).css('height', carousel.children().first().height() + 'px');
            }).trigger('resize');
        }
    });

    //Parallax
    if ("ontouchstart" in window) {
        document.documentElement.className = document.documentElement.className + " touch";
    }
    if (!$("html").hasClass("touch")) {
        /* background fix */
        $(".parallax").css("background-attachment", "fixed");
    }

    /* fix vertical when not overflow
     call fullscreenFix() if .fullscreen content changes */
    function fullscreenFix() {
        var h = $('.main-sections').height();
        // set .fullscreen height
        $(".second-parallax-content").each(function (i) {
            if ($(this).innerHeight() <= h) {
                $(this).closest(".fullscreen").addClass("not-overflow");
            }
        });
    }
    $(window).resize(fullscreenFix);
    fullscreenFix();
    /* resize background images */
    function backgroundResize() {
        var windowH = $(window).height();
        $(".background").each(function (i) {
            var path = $(this);
            // variables
            var contW = path.width();
            var contH = path.height();
            var imgW = path.attr("data-img-width");
            var imgH = path.attr("data-img-height");
            var ratio = imgW / imgH;
            // overflowing difference
            var diff = parseFloat(path.attr("data-diff"));
            diff = diff ? diff : 0;
            // remaining height to have fullscreen image only on parallax
            var remainingH = 0;
            if (path.hasClass("parallax") && !$("html").hasClass("touch")) {
                var maxH = contH > windowH ? contH : windowH;
                remainingH = windowH - contH;
            }
            // set img values depending on cont
            imgH = contH + remainingH + diff;
            imgW = imgH * ratio;
            // fix when too large
            if (contW > imgW) {
                imgW = contW;
                imgH = imgW / ratio;
            }
            //
            path.data("resized-imgW", imgW);
            path.data("resized-imgH", imgH);
            path.css("background-size", imgW + "px " + imgH + "px");
        });
    }
    $(window).resize(backgroundResize);
    $(window).focus(backgroundResize);
    backgroundResize();
    /* set parallax background-position */
    function parallaxPosition(e) {
        var heightWindow = $(window).height();
        var topWindow = $(window).scrollTop();
        var bottomWindow = topWindow + heightWindow;
        var currentWindow = (topWindow + bottomWindow) / 2;
        $(".parallax").each(function (i) {
            var path = $(this);
            var height = path.height();
            var top = path.offset().top;
            var bottom = top + height;
            // only when in range
            if (bottomWindow > top && topWindow < bottom) {
                var imgW = path.data("resized-imgW");
                var imgH = path.data("resized-imgH");
                // min when image touch top of window
                var min = 0;
                // max when image touch bottom of window
                var max = -imgH + heightWindow;
                // overflow changes parallax
                var overflowH = height < heightWindow ? imgH - height : imgH - heightWindow; // fix height on overflow
                top = top - overflowH;
                bottom = bottom + overflowH;
                // value with linear interpolation
                var value = min + (max - min) * (currentWindow - top) / (bottom - top);
                // set background-position
                var orizontalPosition = path.attr("data-oriz-pos");
                orizontalPosition = orizontalPosition ? orizontalPosition : "50%";
                $(this).css("background-position", orizontalPosition + " " + value + "px");
            }
        });
    }
    if (!$("html").hasClass("touch")) {
        $(window).resize(parallaxPosition);
        //$(window).focus(parallaxPosition);
        $(window).scroll(parallaxPosition);
        parallaxPosition();
    }

    //Google map
    $('.google-map').gMap({address: 'Weston, FL',
        panControl: true,
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.SMALL
        },
        mapTypeControl: true,
        scaleControl: false,
        streetViewControl: true,
        overviewMapControl: true,
        scrollwheel: false,
        icon: {
            image: "http://www.google.com/mapfiles/marker.png",
            shadow: "http://www.google.com/mapfiles/shadow50.png",
            iconsize: [20, 34],
            shadowsize: [37, 34],
            iconanchor: [9, 34],
            shadowanchor: [19, 34]
        },
        zoom: 15,
        markers: [
            {'address': 'Weston, FL'}
        ]

    });

    //Click send email
    $('.send-email .send').on('click', function () {
        $('.contact-form').addClass('open-contact-form');
    });

    $(".contact-form").mouseleave(function () {
        $('.contact-form').removeClass('open-contact-form');
    });

    //Scroll
    $('nav a').on('click', function () {

        var scrollAnchor = $(this).attr('data-scroll'),
                scrollPoint = $('div[data-anchor="' + scrollAnchor + '"]').offset().top - $(this).attr("data-anchor-offset");
        $('body,html').animate({
            scrollTop: scrollPoint
        }, 500);
        return false;
    });
    $(window).scroll(function () {
        var windscroll = $(window).scrollTop();
        if (windscroll >= 100) {
            $('.scroll-section').each(function (i) {
                if ($(this).position().top <= windscroll) {
                    $('ul.main-menu li.active-element').removeClass('active-element');
                    $('ul.main-menu li').eq(i).addClass('active-element');
                }
            });
        } else {
            $('ul.main-menu li.active-element').removeClass('active-element');
            $('ul.main-menu li:first').addClass('active-element');
        }

    }).scroll();

    //Menu
    $('#menu-trigger').on('click', function (event) {
        event.preventDefault();

        $('#menu-trigger').toggleClass('is-clicked');
        $('.main-sections').toggleClass('nav-menu-is-open');

        $('#menu-nav').addClass('animated fadeInLeft');

    });

    //Open project content
    var is_firefox = navigator.userAgent.indexOf('Firefox') > -1;

    $('.read-more').on('click', function (event) {
        event.preventDefault();
        var selected_project = $(this).data('type');
        $('.project-container.' + selected_project + '').addClass('slide-in');
        $('#close-trigger').removeClass('invisible-element');
        $('#close-trigger').addClass('is-clicked');
        $('#menu-trigger').addClass('invisible-element');
        $('.project-nav').removeClass('invisible-element');
        $('.project-nav').addClass('is-clicked');

        if (is_firefox) {
            $('.main-sections').addClass('slide-out').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {
                $('body').addClass('overflow-hidden');
            });
        } else {
            $('.main-sections').addClass('slide-out');
            $('body').addClass('overflow-hidden');
        }

    });




















    //Open team
    var is_firefox = navigator.userAgent.indexOf('Firefox') > -1;

    $('.read-team').on('click', function (event) {
        event.preventDefault();
        var selected_project = $(this).data('type');
        $('.project-container.team.' + selected_project + '').addClass('slide-in');
        $('#close-trigger').removeClass('invisible-element');
        $('#close-trigger').addClass('is-clicked');
        $('#menu-trigger').addClass('invisible-element');
        $('.project-nav').removeClass('invisible-element');
        $('.project-nav').addClass('invisible-element');

        if (is_firefox) {
            $('.main-sections').addClass('slide-out').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {
                $('body').addClass('overflow-hidden');
            });
        } else {
            $('.main-sections').addClass('slide-out');
            $('body').addClass('overflow-hidden');
        }

    });




















    //Close project content
    $(document).on('click', '#close-trigger', function (event) {
        event.preventDefault();
        $('.project-container').removeClass('slide-in');
        $('#close-trigger').removeClass('is-clicked');
        $('#menu-trigger').removeClass('invisible-element');
        $('#close-trigger').addClass('invisible-element');
        $('.project-nav').addClass('invisible-element');

        if (is_firefox) {
            $('.main-sections').removeClass('slide-out').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {
                $('body').removeClass('overflow-hidden');
            });
        } else {
            $('.main-sections').removeClass('slide-out');
            $('body').removeClass('overflow-hidden');
        }
    });

    //Next & Prev elements
    $(".next").click(function () {

        var current = $('.proj.slide-in');
        var nextUp = current.next('.proj');

        if (nextUp.length === 0) {
            $('.proj:first').addClass('slide-in');
            $('.proj:last').removeClass('slide-in');
        } else {
            nextUp.addClass('slide-in');
            current.removeClass('slide-in');
        }

    });

    $(".prev").click(function () {
        var current = $('.proj.slide-in');
        var prevUp = current.prev('.proj');

        if (prevUp.length === 0) {
            $('.proj:last').addClass('slide-in');
            $('.proj:first').removeClass('slide-in');
        } else {
            prevUp.addClass('slide-in');
            current.removeClass('slide-in');
        }
    });


    //Icons
    $('.icon').css('display', 'inline');


    $('form.idealforms.newsletter').idealforms({
        rules: {
            'email': 'required email'
        },
        onSubmit: function (invalid, e) {
            e.preventDefault();
            $('#invalid-newsletter')
                    .show()
                    .toggleClass('valid', !invalid)
                    .html(invalid ? ('<div class="alert alert-danger">' + invalid + ' invalid fields</div>') : '<div class="alert alert-success">Your email is submited!</div>');
        }
    });

    //Contact form
    $('form.idealforms.contact').idealforms({
        rules: {
            'username': 'required username',
            'email': 'required email'
        },
        onSubmit: function (invalid, e) {
            e.preventDefault();
            $('#invalid')
                    .show()
                    .toggleClass('valid', !invalid)
                    .html(invalid ? ('<div class="alert alert-danger">' + invalid + ' invalid fields</div>') : '<div class="alert alert-success">Your message is submited!!</div>');
        }
    });
});
