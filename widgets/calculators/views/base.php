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
        <legend>Вид фундамента</legend>
        <div class="calc__group">
            <input class="calc__option-input sr-only" type="radio" name="base-type" id="base-type-1" checked>
            <label class="calc__option" for="base-type-1">
                            <span class="calc__option-icon">
                                <img class="img-fluid" src="/images/calc-base-type-1.png" alt="">
                            </span>
                <span class="calc__option-title">Столбчатый</span>
            </label>
            <input class="calc__option-input sr-only" type="radio" name="base-type" id="base-type-2">
            <label class="calc__option" for="base-type-2">
                            <span class="calc__option-icon">
                                <img class="img-fluid" src="/images/calc-base-type-2.png" alt="">
                            </span>
                <span class="calc__option-title">Сваи метал. винтовые</span>
            </label>
            <input class="calc__option-input sr-only" type="radio" name="base-type" id="base-type-3">
            <label class="calc__option" for="base-type-3">
                            <span class="calc__option-icon">
                                <img class="img-fluid" src="/images/calc-base-type-3.png" alt="">
                            </span>
                <span class="calc__option-title">Сваи - столбы Ж/Б</span>
            </label>
            <input class="calc__option-input sr-only" type="radio" name="base-type" id="base-type-4">
            <label class="calc__option" for="base-type-4">
                            <span class="calc__option-icon">
                                <img class="img-fluid" src="/images/calc-base-type-4.png" alt="">
                            </span>
                <span class="calc__option-title">Ленточный бетонный</span>
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
                <span class="calc__result-number">350 000</span> Руб
            </div>
        </div>
    </div>
</form>
