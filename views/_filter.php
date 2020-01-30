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
                                <input class="form-control filter__price-field" type="number" id="price-from" name="price-from" aria-label="Цена, от" value="380000">
                                <input class="form-control filter__price-field" type="number" id="price-to" name="price-to" aria-label="Цена, до" value="950000">
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
                                <input class="form-control filter__price-field" type="number" id="area-from" name="area-from" aria-label="Площадь, от" value="32">
                                <input class="form-control filter__price-field" type="number" id="area-to" name="area-to" aria-label="Площадь, до" value="240">
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
                                    <input class="filter__sort-input sr-only" type="radio" name="sort" value="sort-price">
                                    <span class="filter__sort-control">по цене</span>
                                </label>
                                <label class="filter__sort-label">
                                    <input class="filter__sort-input sr-only" type="radio" name="sort" value="sort-area">
                                    <span class="filter__sort-control">по площади</span>
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="filter__additional">
            <fieldset class="filter__additional-item">
                <legend class="filter__additional-title">Размер:</legend>
                <div class="filter__content">
                    <div class="filter__option-labels-wrap">
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="size" checked>
                            <span class="filter__option-control">6×6</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="size">
                            <span class="filter__option-control">6×7</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="size">
                            <span class="filter__option-control">6×8</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="size">
                            <span class="filter__option-control">6×9</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="size" checked>
                            <span class="filter__option-control">7×7</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="size">
                            <span class="filter__option-control">7×8</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="size">
                            <span class="filter__option-control">7×9</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="size" checked>
                            <span class="filter__option-control">7×10</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="size">
                            <span class="filter__option-control">8×8</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="size">
                            <span class="filter__option-control">8×9</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="size">
                            <span class="filter__option-control">8×10</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="size">
                            <span class="filter__option-control">9×9</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="size">
                            <span class="filter__option-control">9×10</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="size">
                            <span class="filter__option-control">10×10</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="size">
                            <span class="filter__option-control">10×12</span>
                        </label>
                    </div>
                </div>
            </fieldset>
            <fieldset class="filter__additional-item">
                <legend class="filter__additional-title">Этажность:</legend>
                <div class="filter__content">
                    <div class="filter__option-labels-wrap">
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="storeys" checked>
                            <span class="filter__option-control">Одноэтажные</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="storeys">
                            <span class="filter__option-control">С терассой</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="storeys">
                            <span class="filter__option-control">С масандрой</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="storeys" checked>
                            <span class="filter__option-control">Дачные</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="storeys">
                            <span class="filter__option-control">Для постоянного проживания</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="storeys">
                            <span class="filter__option-control">Двухэтажные</span>
                        </label>
                    </div>
                </div>
            </fieldset>
            <fieldset class="filter__additional-item">
                <legend class="filter__additional-title">Площадь:</legend>
                <div class="filter__content">
                    <div class="filter__option-labels-wrap">
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="area" checked>
                            <span class="filter__option-control">До 100 кв.м</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="area">
                            <span class="filter__option-control">От 100 до 150 кв.м</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="area">
                            <span class="filter__option-control">От 150 кв.м</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="area">
                            <span class="filter__option-control">40 кв.м</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="area">
                            <span class="filter__option-control">50 кв.м</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="area">
                            <span class="filter__option-control">60 кв.м</span>
                        </label>
                    </div>
                </div>
            </fieldset>
            <fieldset class="filter__additional-item">
                <legend class="filter__additional-title">Цена:</legend>
                <div class="filter__content">
                    <div class="filter__option-labels-wrap">
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="price">
                            <span class="filter__option-control">До 5 тыс.руб</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="price" checked>
                            <span class="filter__option-control">От 500 тыс. руб до 1 млн.руб</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="price">
                            <span class="filter__option-control">От 1 млн.руб</span>
                        </label>
                    </div>
                </div>
            </fieldset>
            <fieldset class="filter__additional-item">
                <legend class="filter__additional-title">Тип:</legend>
                <div class="filter__content">
                    <div class="filter__option-labels-wrap">
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="type">
                            <span class="filter__option-control">С террасой</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="type" checked>
                            <span class="filter__option-control">Дачные</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="type">
                            <span class="filter__option-control">Для постоянного проживания</span>
                        </label>
                    </div>
                </div>
            </fieldset>
            <fieldset class="filter__additional-item">
                <legend class="filter__additional-title">Стиль:</legend>
                <div class="filter__content">
                    <div class="filter__option-labels-wrap">
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="style">
                            <span class="filter__option-control">Финские</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="style">
                            <span class="filter__option-control">Хай тек</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="style">
                            <span class="filter__option-control">Современные</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="style">
                            <span class="filter__option-control">Скандинавские</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="style" checked>
                            <span class="filter__option-control">Красивые</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="style">
                            <span class="filter__option-control">Шале</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="checkbox" name="style">
                            <span class="filter__option-control">Канадские</span>
                        </label>
                    </div>
                </div>
            </fieldset>
            <fieldset class="filter__additional-item">
                <legend class="filter__additional-title">Популярная подборка:</legend>
                <div class="filter__content">
                    <div class="filter__option-labels-wrap">
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="radio" name="selection" checked>
                            <span class="filter__option-control">Современные</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="radio" name="selection">
                            <span class="filter__option-control">Современные</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="radio" name="selection">
                            <span class="filter__option-control">Современные</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="radio" name="selection">
                            <span class="filter__option-control">Современные</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="radio" name="selection">
                            <span class="filter__option-control">Современные</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="radio" name="selection">
                            <span class="filter__option-control">Современные</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="radio" name="selection">
                            <span class="filter__option-control">Современные</span>
                        </label>
                        <label class="filter__option-label">
                            <input class="filter__option-input sr-only" type="radio" name="selection">
                            <span class="filter__option-control">Современные</span>
                        </label>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <button class="filter__open btn btn-lg btn-block btn-primary" type="button">Все параметры</button>
        </div>
        <div class="col-sm-6">
            <button class="filter__reset btn btn-lg btn-block btn-success" type="reset">Сбросить</button>
        </div>
    </div>
</form>
