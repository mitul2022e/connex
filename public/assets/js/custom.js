

$(document).ready(function () {
    "use strict";
    $("#menu").mmenu({
        "classes": "mm-slide",
        "offCanvas": {
            "position": "right"
        },
        "footer": {
            "add": true,
            "title": "Copyrights 2015 Medical Guide. all rights reserved."
        },

        "header": {
            "title": "Medical Guide",
            "add": true,
            "update": true
        },

    });
});




$(window).scroll(function () {
    if ($(this).scrollTop() > 1) {
        $('header').addClass("sticky");
    }
    else {
        $('header').removeClass("sticky");
    }
});



$(window).scroll(function () {
    if ($(this).scrollTop() > 1) {
        $('.header2').addClass("sticky");
    }
    else {
        $('.header2').removeClass("sticky");
    }
});







$(function () {

    var $window = $(window);		//Window object

    var scrollTime = 0.6;			//Scroll time
    var scrollDistance = 235;		//Distance. Use smaller value for shorter scroll and greater value for longer scroll

    $window.on("mousewheel DOMMouseScroll", function (event) {

        event.preventDefault();

        var delta = event.originalEvent.wheelDelta / 125 || -event.originalEvent.detail / 3;
        var scrollTop = $window.scrollTop();
        var finalScroll = scrollTop - parseInt(delta * scrollDistance);

        TweenMax.to($window, scrollTime, {
            scrollTo: { y: finalScroll, autoKill: true },
            ease: Power1.easeOut,
            autoKill: true,
            overwrite: 5
        });

    });

});





$(function () {
    var Accordion = function (el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        var links = this.el.find('.link');
        // Evento
        links.on('click', { el: this.el, multiple: this.multiple }, this.dropdown)
    }

    Accordion.prototype.dropdown = function (e) {
        var $el = e.data.el;
        $this = $(this),
            $prev = $this.prev();

        $prev.slideToggle();
        $this.parent().toggleClass('open');

        if (!e.data.multiple) {
            $el.find('.submenu').not($prev).slideUp().parent().removeClass('open');
        };
    }

    var accordion = new Accordion($('#accordion2'), false);
});








var Accordion = function (el, multiple) {
    this.el = el || {};
    this.multiple = multiple || false;

    // Variables privadas
    var links = this.el.find('.link');
    // Evento
    links.on('click', { el: this.el, multiple: this.multiple }, this.dropdown)
}

Accordion.prototype.dropdown = function (e) {
    var $el = e.data.el;
    $this = $(this),
        $next = $this.next();

    $next.slideToggle();
    $this.parent().toggleClass('open');

    if (!e.data.multiple) {
        $el.find('.bgcolor-3').not($next).slideUp().parent().removeClass('open');
    };
}

var accordion = new Accordion($('#accordion'), false);





$(function () {
    var Accordion = function (el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        var links = this.el.find('.link');
        // Evento
        links.on('click', { el: this.el, multiple: this.multiple }, this.dropdown)
    }

    Accordion.prototype.dropdown = function (e) {
        var $el = e.data.el;
        $this = $(this),
            $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if (!e.data.multiple) {
            $el.find('.submenu-active').not($next).slideUp().parent().removeClass('open');
            $el.find('.submenu').not($next).slideUp().parent().removeClass('open');

        };
    }

    var accordion = new Accordion($('#why-choose'), false);
});






// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim

[].slice.call(document.querySelectorAll('input.input__field')).forEach(function (inputEl) {
    // in case the input is already filled..

    // events:
    inputEl.addEventListener('focus', onInputFocus);
    inputEl.addEventListener('blur', onInputBlur);
});

function onInputFocus(ev) {
    classie.add(ev.target.parentNode, 'input--filled');
}

function onInputBlur(ev) {
    if (ev.target.value.trim() === '') {
        classie.remove(ev.target.parentNode, 'input--filled');
    }
}

//date picker
$("#datepicker").datepicker({
    inline: true
});


[].slice.call(document.querySelectorAll('textarea.input__field')).forEach(function (inputEl) {
    // in case the input is already filled..
    if (inputEl.value.trim() !== '') {
        classie.add(inputEl.parentNode, 'input--filled');
    }

    // events:
    inputEl.addEventListener('focus', onInputFocus);
    inputEl.addEventListener('blur', onInputBlur);
});


//date picker
$("#datepicker").datepicker({
    inline: true
});





/* jQuery activation and setting options for the tabs*/
var tabbedNav = $("#tabbed-nav").zozoTabs({
    orientation: "horizontal",
    theme: "silver",
    position: "top-left",
    size: "medium",
    animation: {
        duration: 600,
        easing: "easeOutQuint",
        effects: "fade"
    },
    defaultTab: "tab1"
});

/* Changing animation effects*/
$("#config input.effects").change(function () {
    var effects = $('input[type=radio]:checked').attr("id");
    tabbedNav.data("zozoTabs").setOptions({ "animation": { "effects": effects } });
});






$("#owl-demo").owlCarousel({
    items:3,
    lazyLoad: true,
    navigation: true
});

$("#imagegallery").owlCarousel({
    items: 5,
    lazyLoad: true,
    navigation: true
});



$("#owl-demo4").owlCarousel({
    items: 3,
    lazyLoad: true,
    navigation: true
});




$("#owl-demo2").owlCarousel({
    autoPlay: 111110,
    stopOnHover: true,

    paginationSpeed: 1000,
    goToFirstSpeed: 2000,
    singleItem: true,
    autoHeight: true,

});






$("#team-detail").owlCarousel({

    navigation: true,
    slideSpeed: 300,
    paginationSpeed: 400,
    singleItem: true

    // "singleItem:true" is a shortcut for:
    // items : 1, 
    // itemsDesktop : false,
    // itemsDesktopSmall : false,
    // itemsTablet: false,
    // itemsMobile : false

});





$("#services-slide").owlCarousel({

    navigation: true,
    slideSpeed: 300,
    paginationSpeed: 400,
    singleItem: true

    // "singleItem:true" is a shortcut for:
    // items : 1, 
    // itemsDesktop : false,
    // itemsDesktopSmall : false,
    // itemsTablet: false,
    // itemsMobile : false

});



$("#blog-slide").owlCarousel({

    navigation: true,
    slideSpeed: 300,
    paginationSpeed: 400,
    singleItem: true

    // "singleItem:true" is a shortcut for:
    // items : 1, 
    // itemsDesktop : false,
    // itemsDesktopSmall : false,
    // itemsTablet: false,
    // itemsMobile : false

});






jQuery(document).ready(function ($) {
    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
        //duration of the top scrolling animation (in ms)
        scroll_top_duration = 1400,
        //grab the "back to top" link
        $back_to_top = $('.cd-top');

    //hide or show the "back to top" link
    $(window).scroll(function () {
        ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if ($(this).scrollTop() > offset_opacity) {
            $back_to_top.addClass('cd-fade-out');
        }
    });

    //smooth scroll to top
    $back_to_top.on('click', function (event) {
        event.preventDefault();
        $('body,html').animate({
            scrollTop: 0,
        }, scroll_top_duration
        );
    });

});





//Procedures Links
var Accordion1 = function (el, multiple) {
    this.el = el || {};
    this.multiple = multiple || false;

    // Variables privadas
    var links = this.el.find('.link');
    // Evento
    links.on('click', { el: this.el, multiple: this.multiple }, this.dropdown);
};

Accordion1.prototype.dropdown = function (e) {
    var $el = e.data.el;
    $this = $(this),
        $next = $this.next();

    $next.slideToggle();
    $this.parent().toggleClass('open');

    if (!e.data.multiple) {
        $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
    }
};

var accordion2 = new Accordion($('#procedures-links'), false);



//Procedures FAQ'S
var Accordion3 = function (el, multiple) {
    this.el = el || {};
    this.multiple = multiple || false;

    // Variables privadas
    var links = this.el.find('.link');
    // Evento
    links.on('click', { el: this.el, multiple: this.multiple }, this.dropdown);
};

Accordion3.prototype.dropdown = function (e) {
    var $el = e.data.el;
    $this = $(this),
        $next = $this.next();

    $next.slideToggle();
    $this.parent().toggleClass('open');

    if (!e.data.multiple) {
        $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
    }
};

var accordion5 = new Accordion($('#procedures-faq'), false);


//PreLoader
jQuery(window).load(function () { // makes sure the whole site is loaded
    jQuery('#status').fadeOut(); // will first fade out the loading animation
    jQuery('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    jQuery('body').delay(350).css({ 'overflow': 'visible' });
});

 
 