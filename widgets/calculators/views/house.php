<form class="calc">
    <fieldset>
        <legend><label for="size">Размер</label></legend>
        <select class="calc__select form-control" name="size" id="size">
            <option value="6*4">6×4</option>
            <option value="8*6">8×6</option>
            <option value="12*10">12×10</option>
        </select>
    </fieldset>
    <fieldset>
        <legend>Тип</legend>
        <div class="calc__group">
            <input class="calc__option-input sr-only" type="radio" name="type" id="type-1" checked>
            <label class="calc__option" for="type-1">
                            <span class="calc__option-icon">
                                <img class="img-fluid" src="/images/calc-type-1.png" alt="">
                            </span>
                <span class="calc__option-title">Дома</span>
            </label>
            <input class="calc__option-input sr-only" type="radio" name="type" id="type-2">
            <label class="calc__option" for="type-2">
                            <span class="calc__option-icon">
                                <img class="img-fluid" src="/images/calc-type-2.png" alt="">
                            </span>
                <span class="calc__option-title">Бани</span>
            </label>
        </div>
    </fieldset>
    <fieldset>
        <legend>Технология</legend>
        <div class="calc__group">
            <input class="calc__option-input sr-only" type="radio" name="tech" id="tech-1" checked>
            <label class="calc__option" for="tech-1">
                            <span class="calc__option-icon">
                                <img class="img-fluid" src="/images/calc-tech-1.png" alt="">
                            </span>
                <span class="calc__option-title">Каркасная</span>
            </label>
            <input class="calc__option-input sr-only" type="radio" name="tech" id="tech-2">
            <label class="calc__option" for="tech-2">
                            <span class="calc__option-icon">
                                <img class="img-fluid" src="/images/calc-tech-2.png" alt="">
                            </span>
                <span class="calc__option-title">Брусовая</span>
            </label>
        </div>
    </fieldset>
    <fieldset>
        <legend>Этажность</legend>
        <div class="calc__group">
            <input class="calc__option-input sr-only" type="radio" name="floor" id="floor-1" checked>
            <label class="calc__option" for="floor-1">
                            <span class="calc__option-icon">
                                <img class="img-fluid" src="/images/calc-type-1.png" alt="">
                            </span>
                <span class="calc__option-title">1 этаж</span>
            </label>
            <input class="calc__option-input sr-only" type="radio" name="floor" id="floor-2">
            <label class="calc__option" for="floor-2">
                            <span class="calc__option-icon">
                                <img class="img-fluid" src="/images/calc-floor-2.png" alt="">
                            </span>
                <span class="calc__option-title">1 этаж + масандра</span>
            </label>
            <input class="calc__option-input sr-only" type="radio" name="floor" id="floor-3">
            <label class="calc__option" for="floor-3">
                            <span class="calc__option-icon">
                                <img class="img-fluid" src="/images/calc-floor-3.png" alt="">
                            </span>
                <span class="calc__option-title">1,5 этажа</span>
            </label>
            <input class="calc__option-input sr-only" type="radio" name="floor" id="floor-4">
            <label class="calc__option" for="floor-4">
                            <span class="calc__option-icon">
                                <img class="img-fluid" src="/images/calc-floor-4.png" alt="">
                            </span>
                <span class="calc__option-title">2 этажа</span>
            </label>
        </div>
    </fieldset>
    <div class="calc__footer row align-items-center">
        <div class="col-sm-6 mb-3 mb-sm-0 text-sm-left text-center">
            <button class="btn btn-lg btn-primary">Рассчитать</button>
        </div>
        <div class="col-sm-6 text-sm-right text-center">
            <div class="calc__result">
                <span class="calc__result-text">Стоимость: </span>
                <span class="calc__result-number">930 500</span> Руб
            </div>
        </div>
    </div>
</form>
