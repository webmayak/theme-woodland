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
    var counterFlag = 0;
    $(window).scroll(function() {
        var oTop = $('.why-us-item').offset().top - window.innerHeight + 100;
        if (counterFlag === 0 && $(window).scrollTop() > oTop) {
            $('.why-us-item__number').countTo({
                speed: 500,
                refreshInterval: 1
            });
            counterFlag = 1;
        }
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
