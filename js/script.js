$(function () {
    //- - - - - - - SLIDER - - - - - //
    // https://kenwheeler.github.io/slick/#go-get-it //

    let slider = $("#slider");
    slider.slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
    });
    //- - - - - - - - FANCY___BOX - - - - - - //
    $('[data-fancybox]').fancybox({
        buttons: [
            "share",
            "fullScreen",
            "download",
            "close"
        ],
    })

    //- - - - - - - - GALEREIA - - - - - - //
    $('[data-fancybox="gallery"]').fancybox({
        loop: true,
        arrows: true,
        infobar: false,
        // width: '100%',
        // maxWidth: 1400,
        buttons: [
            "share",
            "fullScreen",
            "download",
            "close"
        ],
        animationEffect: "zoom",
        transitionEffect: "slide",
        transitionDuration: 566,
        btnTpl: {
            arrowLeft:
                '<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="{{PREV}}">' +
                '<i class="fas fa-chevron-left"></i>' +
                "</button>",

            arrowRight:
                '<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="{{NEXT}}">' +
                '<i class="fas fa-chevron-right"></i>' +
                "</button>",
        }
    });
    //- - - - - - - - SCROLL - - - - - - //
    var positions = [],
        currentActive = null,
        links = $('.nav__link');

    $(".anchor").each(function () {
        positions.push({
            top: $(this).position().top - 180,
            a: links.filter('[href="#' + $(this).attr('id') + '"]')
        });
    });

    positions = positions.reverse();

    $(window).on('scroll', function () {
        var winTop = $(window).scrollTop();
        for (var i = 0; i < positions.length; i++) {
            if (positions[i].top < winTop) {
                if (currentActive !== i) {
                    currentActive = i;
                    links.removeClass('active');
                    positions[i].a.addClass("active");
                }
                break;
            }
        }
    });
    $("[data-scroll]").on("click", function (event) {
        event.preventDefault();
        let elementId = $(this).data('scroll');
        let elementOffset = $(elementId).offset().top;
        nav.removeClass("show");
        burger.removeClass("active");
        $("html, body").animate({
            scrollTop: elementOffset - 130
        }, 900)
    })


    let intro = $('#home');
    let introH = intro.innerHeight();
    let scrollPos = $(window).scrollTop();
    let up = $('.up');
    $(window).on("scroll load resize", function () {
        introH = intro.innerHeight();
        scrollPos = $(this).scrollTop();
        checkScroll(scrollPos, introH);
    });

    function checkScroll(scrollPos, introH) {
        if (scrollPos > introH) {
            up.addClass("flex");
        }
        else {
            up.removeClass("flex");
        }
    }
    //- - - - - - - - BURGER - - - - - - //
    let nav = $("#nav");
    let burger = $("#burger");
    burger.on("click", function (event) {
        event.preventDefault();
        burger.toggleClass("active");
        nav.toggleClass("show");
    })

    //- - - - - - - ACCORDION - - - - - - //
    let acc = $("[data-collapse]")
    acc.on("click", function (event) {
        event.preventDefault();

        var $this = $(this),
            block = $this.data('collapse');

        $(block).slideToggle(650);
        $this.toggleClass("active");

    })

    // - - - - - - - TABS - - (MENU)- - - - - - - - //
    let tabPanels = document.querySelectorAll(".menu__inner");
    let tablinks = document.querySelectorAll(".tabs a");


    for (let el of tablinks) {
        el.addEventListener("click", function (event) {
            event.preventDefault();
            document.querySelector('.tabs li.active').classList.remove("active");
            document.querySelector('.menu__inner.active').classList.remove("active");

            const parentListItem = el.parentElement;
            parentListItem.classList.add("active");
            const index = [...parentListItem.parentElement.children].indexOf(parentListItem);

            tabPanels[index].classList.add("active");
        });
    }
})

