<form class="filter">
    <div class="filter__wrap">
        <div class="filter__main">
            <div class="row">
                <div class="col-lg-4">
                    <fieldset class="filter__item">
                        <legend class="filter__main-title">Цена, руб:</legend>
                        <div class="filter__content">
                            <div class="filter__range">
                                <input class="js-range-slider" type="text" id="js-range-slider-price">
                            </div>
                            <div class="filter__price-fields">
                                <input class="form-control filter__price-field" type="number" id="price-from" aria-label="Цена, от">
                                <input class="form-control filter__price-field" type="number" id="price-to" aria-label="Цена, до">
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-lg-4">
                    <fieldset class="filter__item">
                        <legend class="filter__main-title">Площадь, м2:</legend>
                        <div class="filter__content">
                            <div class="filter__range">
                                <input class="js-range-slider" type="text" id="js-range-slider-area">
                            </div>
                            <div class="filter__price-fields">
                                <input class="form-control filter__price-field" type="number" id="area-from" aria-label="Площадь, от">
                                <input class="form-control filter__price-field" type="number" id="area-to" aria-label="Площадь, до">
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-lg-4">
                    <fieldset class="filter__item">
                        <legend class="filter__main-title">Сортировать:</legend>
                        <div class="filter__content">
                            <div class="filter__sort-labels-wrap">
                                <label class="filter__sort-label">
                                    <input class="filter__sort-input sr-only" type="radio" name="sort">
                                    <span class="filter__sort-control">по цене</span>
                                </label>
                                <label class="filter__sort-label">
                                    <input class="filter__sort-input sr-only" type="radio" name="sort">
                                    <span class="filter__sort-control">по площади</span>
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="filter__additional"></div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <button class="btn btn-lg btn-block btn-primary" type="button">Все параметры</button>
        </div>
        <div class="col-sm-6">
            <button class="btn btn-lg btn-block btn-success" type="button">Сбросить</button>
        </div>
    </div>
</form>
