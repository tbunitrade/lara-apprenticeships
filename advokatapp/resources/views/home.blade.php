@include('header')
<section class="section homepage">
    <div class="textContainer">
        <h2 class="title">Про Колегію адвокатів міста Києва та Київської області</h2>

        <p class="text">


            <strong>Колегія адвокатів міста Києва та Київської області</strong>
            – адвокатське об’єднання, засноване напочатку 2013 року з метою надання громадянам і організаціям юридичних послуг найвищої якості.
            До складу Колегії входять найдосвідченіші адвокати, які об’єднали свої зусилля та успішно практикують у різних сферах права.
            Кількісний і якісний склад адвокатів Колегії дозволяє надавати повний спектр юридичних послуг:
            від захисту у кримінальних справах до повного супроводження процедури публічних закупівель.
            Звернувшись до Колегії адвокатів міста Києва та Київської області, кожен Клієнт може бути впевненим в тому,
            що він отримає як фахові відповіді на усі свої юридичні питання, так і повний спектр адвокатських послуг з практичної реалізації узгодженої між ним і адвокатами Колегії правової позиції.
        </p>
        <p class="text">
            Адвокати Колегії адвокатів міста Києва та Київської області ніколи не візьмуться за завідомо програшну справу.
            Такі пріоритети, а також виключна компетентність адвокатів, збудувала Колегії за десятиріччя її існування надійну репутацію з-поміж Клієнтів і колег.
            Девіз Колегії адвокатів: <strong>«Там де єдність – там і перемога!».</strong>
        </p>
    </div>
    <div class="bannerContainer">

    </div>
    <div class="orderConsultationContainer">
        <a id="consultationRequest" class="btn btn-black consultationRequest" href=""> Записатися на консультацію</a>
    </div>

</section>

<section class="section team">
    <h2 class="title">Про нас</h2>
    <p class="text">
        Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.
    </p>


</section>

@include('slider-homepage')


<section class="section practicts">
    <h2 class="title">Практики</h2>
    <ul class="ulPrictics">
        <li class="li" onclick="location.href='advokat-po-kriminalnim-spravam';">
            <a class="menu" id="/advokat-po-kriminalnim-spravam" href="/advokat-po-kriminalnim-spravam">
                Абонентське обслуговування бізнесу та громадян
            </a>
        </li>
        <li class="li" onclick="location.href='advokat-po-kriminalnim-spravam';">
            <a class="menu" id="/advokat-po-kriminalnim-spravam" href="/advokat-po-kriminalnim-spravam">
                Адміністративні спори (мито, пенсія, пільги, податки)
            </a>
        </li>
        <li class="li" onclick="location.href='advokat-po-kriminalnim-spravam';">
            <a class="menu" id="/advokat-po-kriminalnim-spravam" href="/advokat-po-kriminalnim-spravam">
                Банківське та фінансове право, кредитні спори
            </a>
        </li>
        <li class="li" onclick="location.href='advokat-po-kriminalnim-spravam';">
            <a class="menu" id="/advokat-po-kriminalnim-spravam" href="/advokat-po-kriminalnim-spravam">
                Будівництво, земля, нерухомість
            </a>
        </li>
        <li class="li" onclick="location.href='advokat-po-kriminalnim-spravam';">
            <a class="menu" id="/advokat-po-kriminalnim-spravam" href="/advokat-po-kriminalnim-spravam">
                Господарські спори, банкрутство
            </a>
        </li>
        <li class="li" onclick="location.href='advokat-po-kriminalnim-spravam';">
            <a class="menu" id="/advokat-po-kriminalnim-spravam" href="/advokat-po-kriminalnim-spravam">
                Захист і представництво у кримінальному процесі
            </a>
        </li>
        <li class="li" onclick="location.href='advokat-po-kriminalnim-spravam';">
            <a class="menu" id="/advokat-po-kriminalnim-spravam" href="/advokat-po-kriminalnim-spravam">
                Захист прав військових
            </a>
        </li>
        <li class="li" onclick="location.href='advokat-po-kriminalnim-spravam';">
            <a class="menu" id="/advokat-po-kriminalnim-spravam" href="/advokat-po-kriminalnim-spravam">
                Конкурентне право
            </a>
        </li>

    </ul>
    <div class="btn-container">
        <a class="btn btn-black allPractics" href="/practicts">Всі практики коллегії</a>
    </div>


</section>

<section class="clients">
    <h2 class="title">Клієнти</h2>

</section>

<section>
    <h3>Досягнення</h3>

</section>

<section>
    <h3>Форма для шкидкого реагування</h3>
    <form>
        <fieldset>
        <input type="text" placeholder="Ваше ім'я" >
        </fieldset>
        <fieldset>
        <input type="number" placeholder="+38-(ХХХ)-ХХХ-ХХ-ХХ">
        </fieldset>
        <fieldset>
        <textarea></textarea>
        </fieldset>
        <input type="submit" value="Відправити">
    </form>

</section>

@include('footer')
