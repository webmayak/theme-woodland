document.addEventListener(
    "DOMContentLoaded", () => {
        const menu = new Mmenu( "#mmenu-nav", {
            "extensions": [
                "pagedim-black",
                "border-full",
                "theme-white"
            ],
            "navbars": [
                {
                    "position": "bottom",
                    "content": [
                        mmenu_footer
                    ]
                }
            ]
        }, {
            classNames: {
                selected: "active"
            }
        });
    }
);

function CollapseHandler() {
    const collapse = $('.footer-menu [data-toggle]');
    if (window.matchMedia('(max-width: 991px)').matches) {
        collapse.attr('data-toggle', 'collapse').siblings('.collapse-holder').collapse('hide');
        collapse.off()
    } else {
        collapse.attr('data-toggle', '').on('click', function (event) {
            event.stopPropagation();
        });
    }
}

function LowVisionLinks() {
    $('.top-panel__low-vision-toggle').on('click', function(){
        if(Cookies.get('low-vision-mode')) {
            Cookies.remove('low-vision-mode');
        } else {
            Cookies.set('low-vision-mode', 'on');
        }
        location.reload();
    });
}

$(function () {
    CollapseHandler();
    LowVisionLinks();
});

$(window).on('resize', function () {
    CollapseHandler();
});

/**
 * Инициализация поповера
 */
const initPopover = function () {
    $('[data-toggle="popover"]').popover({
        trigger: 'hover',
    });
};
initPopover();
$('[data-fancybox]').fancybox();

/**
 * Инициализация скрытия большого текста в отзыве
 */
// const initReviewReadMore = function () {
//     $('.review-body').readmore({
//         collapsedHeight: 188,
//         speed: 75,
//         lessLink: '<a href="javascript:void(0)" class="btn-read-more">Скрыть</a>',
//         moreLink: '<a href="javascript:void(0)" class="btn-read-more">Показать все</a>'
//     });
// };
// initReviewReadMore();

/**
 * Обработка клика по табу с цветом чекаем поле внутри
 */
$(document).on('click', '.color-tabs a', function () {
    const self = $(this);
    self.find('input').prop('checked', true);
});

/**
 * Инициализация шаринга в соц. сети
 */
const initShare = function () {
    $(".share-links").each(function (index, el) {
        el = $(el);
        const suffix = el.hasClass('share-links--black') ? '-black' : '';
        el.jsSocials({
            shares: [
                {
                    share: "facebook",
                    logo: '/images/svg/social/facebook' + suffix + '.svg',
                },
                {
                    share: "twitter",
                    logo: '/images/svg/social/twitter' + suffix + '.svg',
                },
                {
                    share: "googleplus",
                    logo: '/images/svg/social/google-plus' + suffix + '.svg',
                },
                {
                    share: "vkontakte",
                    logo: '/images/svg/social/vk' + suffix + '.svg',
                },
            ],
            showLabel: false,
            showCount: false,
            shareIn: "popup",
        })
    });
};
initShare();

/**
 * Любое завершение pjax
 * инициализируем заного поповеры
 */
$(document).on('pjax:complete', function () {
    initPopover();
});

$.goup({
    bottomOffset: 50
});

svg4everybody();

$('.btn--video').click(function(){
    var target = $(this).attr('href');
    $('html, body').animate({scrollTop: $(target).offset().top}, 700);
    return false;
});

$(document).ready(function () {
    if ($('.why-us-item').length) {
        var counterFlag = 0;

        $(window).scroll(function () {
            var oTop = $('.why-us-item').offset().top - window.innerHeight + 100;

            if (counterFlag === 0 && $(window).scrollTop() > oTop) {

                $('.why-us-item__number').countTo({
                    speed: 500,
                    refreshInterval: 1
                });

                counterFlag = 1;
            }
        });
    }

    setTimeout(function () {
        $('.quantity-field').styler();
    }, 100);

    var $priceRange = $("#js-range-slider-price"),
        $priceFrom = $("#price-from"),
        $priceTo = $("#price-to"),
        priceInstance,
        priceMin = 380000,
        priceMax = 950000,
        $areaRange = $("#js-range-slider-area"),
        $areaFrom = $("#area-from"),
        $areaTo = $("#area-to"),
        areaInstance,
        areaMin = 32,
        areaMax = 240,
        from = 0,
        to = 0;

    $priceRange.ionRangeSlider({
        skin: "round",
        type: "double",
        min: priceMin,
        max: priceMax,
        from: 380000,
        to: 950000,
        onStart: updatePriceInputs,
        onChange: updatePriceInputs
    });
    priceInstance = $priceRange.data("ionRangeSlider");

    function updatePriceInputs (data) {
        from = data.from;
        to = data.to;

        $priceFrom.prop("value", from);
        $priceTo.prop("value", to);
    }

    $priceFrom.on("input", function () {
        var val = $(this).prop("value");

        if (val < priceMin) {
            val = priceMin;
        } else if (val > to) {
            val = to;
        }

        priceInstance.update({
            from: val
        });
    });

    $priceTo.on("input", function () {
        var val = $(this).prop("value");

        if (val < from) {
            val = from;
        } else if (val > priceMax) {
            val = priceMax;
        }

        priceInstance.update({
            to: val
        });
    });

    $areaRange.ionRangeSlider({
        skin: "round",
        type: "double",
        min: areaMin,
        max: areaMax,
        from: 32,
        to: 240,
        onStart: updateAreaInputs,
        onChange: updateAreaInputs
    });
    areaInstance = $areaRange.data("ionRangeSlider");

    function updateAreaInputs (data) {
        from = data.from;
        to = data.to;

        $areaFrom.prop("value", from);
        $areaTo.prop("value", to);
    }

    $areaFrom.on("input", function () {
        var val = $(this).prop("value");

        if (val < areaMin) {
            val = areaMin;
        } else if (val > to) {
            val = to;
        }

        areaInstance.update({
            from: val
        });
    });

    $areaTo.on("input", function () {
        var val = $(this).prop("value");

        if (val < from) {
            val = from;
        } else if (val > areaMax) {
            val = areaMax;
        }

        areaInstance.update({
            to: val
        });
    });

});

$(document).on('click', '.open-lead-modal', function () {
    const self = $(this);
    const modal = $(self.data('target'));
    const url  = self.attr('href') || self.data('url');
    $.get(url, function (result) {
        modal.find('.modal-content').html(result);
        modal.modal('show');
    });
    return false;
});

$(document).on('shown.bs.modal', '.lead-modal', function () {
    const btn = $('.open-lead-modal[data-loading]');
    setTimeout( function() {
        btn.ladda('remove');
    }, 400);
});

$('.product-page__carousel').owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    items: 1,
    navText: [
        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.175 477.175" width="71" height="71" fill="currentColor"><path d="M145.188 238.575l215.5-215.5c5.3-5.3 5.3-13.8 0-19.1s-13.8-5.3-19.1 0l-225.1 225.1c-5.3 5.3-5.3 13.8 0 19.1l225.1 225c2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4c5.3-5.3 5.3-13.8 0-19.1l-215.4-215.5z"/></svg>',
        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.175 477.175" width="71" height="71" fill="currentColor"><path d="M145.188 238.575l215.5-215.5c5.3-5.3 5.3-13.8 0-19.1s-13.8-5.3-19.1 0l-225.1 225.1c-5.3 5.3-5.3 13.8 0 19.1l225.1 225c2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4c5.3-5.3 5.3-13.8 0-19.1l-215.4-215.5z"/></svg>'
    ],
    URLhashListener: true
});

$('.page-site-faq__menu a').click(function(){
    var target = $(this).attr('href');
    $('html, body').animate({scrollTop: $(target).offset().top}, 400);
    return false;
});

$('.projects__carousel').owlCarousel({
    loop: true,
    dots: true,
    navText: [
        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.175 477.175" width="150" height="150" fill="currentColor"><path d="M145.188 238.575l215.5-215.5c5.3-5.3 5.3-13.8 0-19.1s-13.8-5.3-19.1 0l-225.1 225.1c-5.3 5.3-5.3 13.8 0 19.1l225.1 225c2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4c5.3-5.3 5.3-13.8 0-19.1l-215.4-215.5z"/></svg>',
        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.175 477.175" width="150" height="150" fill="currentColor"><path d="M145.188 238.575l215.5-215.5c5.3-5.3 5.3-13.8 0-19.1s-13.8-5.3-19.1 0l-225.1 225.1c-5.3 5.3-5.3 13.8 0 19.1l225.1 225c2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4c5.3-5.3 5.3-13.8 0-19.1l-215.4-215.5z"/></svg>'
    ],
    responsive : {
        0 : {
            items: 1
        },
        576 : {
            items: 2
        },
        992 : {
            items: 3
        },
        1200 : {
            items: 4,
            nav: true
        }
    }
});

$('.main-tabs__reviews-carousel').owlCarousel({
    loop: true,
    dots: false,
    items: 1,
    navText: [
        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.175 477.175" width="150" height="150" fill="currentColor"><path d="M145.188 238.575l215.5-215.5c5.3-5.3 5.3-13.8 0-19.1s-13.8-5.3-19.1 0l-225.1 225.1c-5.3 5.3-5.3 13.8 0 19.1l225.1 225c2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4c5.3-5.3 5.3-13.8 0-19.1l-215.4-215.5z"/></svg>',
        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.175 477.175" width="150" height="150" fill="currentColor"><path d="M145.188 238.575l215.5-215.5c5.3-5.3 5.3-13.8 0-19.1s-13.8-5.3-19.1 0l-225.1 225.1c-5.3 5.3-5.3 13.8 0 19.1l225.1 225c2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4c5.3-5.3 5.3-13.8 0-19.1l-215.4-215.5z"/></svg>'
    ],
    responsive : {
        1200 : {
            nav: true
        }
    }
});

$('.works__carousel').owlCarousel({
    loop: true,
    dots: false,
    navText: [
        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.175 477.175" width="150" height="150" fill="currentColor"><path d="M145.188 238.575l215.5-215.5c5.3-5.3 5.3-13.8 0-19.1s-13.8-5.3-19.1 0l-225.1 225.1c-5.3 5.3-5.3 13.8 0 19.1l225.1 225c2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4c5.3-5.3 5.3-13.8 0-19.1l-215.4-215.5z"/></svg>',
        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.175 477.175" width="150" height="150" fill="currentColor"><path d="M145.188 238.575l215.5-215.5c5.3-5.3 5.3-13.8 0-19.1s-13.8-5.3-19.1 0l-225.1 225.1c-5.3 5.3-5.3 13.8 0 19.1l225.1 225c2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4c5.3-5.3 5.3-13.8 0-19.1l-215.4-215.5z"/></svg>'
    ],
    responsive : {
        0 : {
            items: 1
        },
        576 : {
            items: 2
        },
        992 : {
            items: 3
        },
        1200 : {
            items: 4,
            nav: true
        }
    }
});
