// filter
var priceRange = $("#js-range-slider-price"),
    priceFromField = $("#price-from"),
    priceToField = $("#price-to"),
    priceInstance,
    priceFrom = 0,
    priceTo = 0,
    areaRange = $("#js-range-slider-area"),
    areaFromField = $("#area-from"),
    areaToField = $("#area-to"),
    areaInstance,
    areaFrom = 0,
    areaTo = 0;

function onFromInput (min, to) {
    var val = $(this).prop("value");

    if (val < min) {
        val = min;
    } else if (val > to) {
        val = to;
    }
}

function onToInput (max, from) {
    var val = $(this).prop("value");

    if (val < from) {
        val = from;
    } else if (val > max) {
        val = max;
    }
}

// priceRange
function updatePriceInputs (data) {
    priceFrom = data.from;
    priceTo = data.to;

    priceFromField.prop("value", priceFrom);
    priceToField.prop("value", priceTo);
}

priceRange.ionRangeSlider({
    skin: "round",
    type: "double",
    min: minPrice,
    max: maxPrice,
    from: priceFromField.val(),
    to: priceToField.val(),
    onStart: updatePriceInputs,
    onChange: updatePriceInputs
});

priceInstance = priceRange.data("ionRangeSlider");

priceFromField.on("input", function () {
    onFromInput(minPrice, priceTo);

    priceInstance.update({
        from: $(this).prop("value")
    });
});

priceToField.on("input", function () {
    onToInput(maxPrice, priceFrom);

    priceInstance.update({
        to: $(this).prop("value")
    });
});

// areaRange
function updateAreaInputs(data) {
    areaFrom = data.from;
    areaTo = data.to;

    areaFromField.prop("value", areaFrom);
    areaToField.prop("value", areaTo);
}

areaRange.ionRangeSlider({
    skin: "round",
    type: "double",
    min: minArea,
    max: maxArea,
    from: areaFromField.val(),
    to: areaToField.val(),
    onStart: updateAreaInputs,
    onChange: updateAreaInputs
});

areaInstance = areaRange.data("ionRangeSlider");

areaFromField.on("input", function () {
    onFromInput(minArea, areaTo);

    areaInstance.update({
        from: $(this).prop("value")
    });
});

areaToField.on("input", function () {
    onToInput(maxArea, areaFrom);

    areaInstance.update({
        to: $(this).prop("value")
    });
});

$('.filter__open').click(function () {
    $('.filter__additional').slideToggle();
    var filterOpenBtnText = ($(this).text() === 'Все параметры') ? 'Свернуть' : 'Все параметры';
    $(this).text(filterOpenBtnText);
});

$('.filter').on('reset', function () {
    priceInstance.reset();
    areaInstance.reset();
});
