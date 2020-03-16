// селекторы соответствующих инпутов
var priceFromField = '#price-from',
    priceToField = '#price-to',
    areaFromField = '#area-from',
    areaToField = '#area-to';

// слайдер фильтра по цене
var PriceFilter = {

    ionRangeSlider: null,

    updateInputs: function (data) {
        $(priceFromField).val(data.from);
        $(priceToField).val(data.to);
    },

    init: function() {
        $("#js-range-slider-price").ionRangeSlider({
            skin: "round",
            type: "double",
            min: minPrice,
            max: maxPrice,
            from: $(priceFromField).val(),
            to: $(priceToField).val(),
            onStart: PriceFilter.updateInputs,
            onChange: PriceFilter.updateInputs,
            onUpdate: PriceFilter.updateInputs,
            onFinish: function(){$('#products-list-filter').submit();}
        });
        PriceFilter.ionRangeSlider = $("#js-range-slider-price").data("ionRangeSlider");

        $(priceFromField).on("input", function () {
            PriceFilter.ionRangeSlider.update({
                from: $(this).val()
            });
        });
        $(priceToField).on("input", function () {
            PriceFilter.ionRangeSlider.update({
                to: $(this).val()
            });
        });
    }
}

// слайдер фильтра по площади
var AreaFilter = {

    ionRangeSlider: null,

    updateInputs: function (data) {
        $(areaFromField).val(data.from);
        $(areaToField).val(data.to);
        AreaFilter.checkUncheckAreaRealInputs(data.from, data.to);
    },

    checkUncheckAreaRealInputs: function (from, to) {
        $('[name="filter_attr[' + AREA_ATTR_ID + '][]"]').each(function () {
            if ($(this).val() >= from && $(this).val() <= to) {
                $(this).prop('checked', true);
            } else {
                $(this).prop('checked', false);
            }
        });
    },

    init: function() {
        $("#js-range-slider-area").ionRangeSlider({
            skin: "round",
            type: "double",
            min: minArea,
            max: maxArea,
            from: $(areaFromField).val(),
            to: $(areaToField).val(),
            onStart: AreaFilter.updateInputs,
            onChange: AreaFilter.updateInputs,
            onUpdate: AreaFilter.updateInputs,
            onFinish: function(){$('#products-list-filter').submit();}
        });
        AreaFilter.ionRangeSlider = $("#js-range-slider-area").data("ionRangeSlider");

        $(areaFromField).on("input", function () {
            AreaFilter.ionRangeSlider.update({
                from: $(this).val()
            });
        });
        $(areaToField).on("input", function () {
            AreaFilter.ionRangeSlider.update({
                to: $(this).val()
            });
        });
    }
}

// кнопка "Все параметры"/"Свернуть"
$(document).on('click', '.filter__open', function () {
    var filter_expanded = Cookies.get('filter_expanded');
    console.log(filter_expanded);
    if (parseInt(filter_expanded) === 1) {
        $('.filter__additional').slideUp();
        $(this).text('Все параметры');
        Cookies.set('filter_expanded', 0, {path: ''});
    } else {
        $('.filter__additional').slideDown();
        $(this).text('Свернуть');
        Cookies.set('filter_expanded', 1, {path: ''});
    }
});

// реакция на любой выбор в фильтре чекбокса или радио
$(document).on('change', '.filter :radio, .filter :checkbox', function () {
    $('#products-list-filter').submit();
});

// инициализируем слайдеры фильтров
$(document).on('ready', AreaFilter.init);
$(document).on('ready', PriceFilter.init);
$(document).on('pjax:complete', AreaFilter.init);
$(document).on('pjax:complete', PriceFilter.init);
