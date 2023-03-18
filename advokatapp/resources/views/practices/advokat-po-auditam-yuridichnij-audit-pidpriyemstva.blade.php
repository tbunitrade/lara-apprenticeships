@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Юридичний аудит підприємств, проектів, угод (due diligence).
        </h3>
        <p class="text">
            Плануєте інвестиції, однак, не впевнені в тому, що самостійно можете якісно порівняти можливі ризики з можливими прибутками?
            <br><br>
            Зверніться до професіоналів. Адвокати Колегії адвокатів міста Києва та Київської області надають своїм Клієнтам послуги професійного юридичного аудиту (due diligence).
            До цієї послуги наші адвокати можуть також залучати фінансистів, бухгалтерів, економістів, маркетологів, що дозволяє збирати, обробляти та аналізувати великі обсяги інформації про Ваше підприємство,
            Вашого контрагента, про певний інвестиційний проект чи угоду.
            <br><br>
            Оцінка юридичних ризиків, можливе податкове навантаження та його оптимізація, оцінка можливих доходів і витрат – ми здатні надати професійний та повний звіт за результатами необхідного юридичного аудиту.
        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/Юридичний_аудит_підприємств,_проєктів,_угод_due_dilligence.jpg')}}')">
        {{--         <img src="{{URL::asset('/assets/images/pro_bono.png')}}">--}}
    </div>

    <div class="btn-container">
        <br><br>
        <a class="btn btn-black allPractics" target="_blank" style="width: 220px" href="/practicts">Інші практики коллегії</a>
    </div>
</section>



@include('block.consultation-type-one')
@include('block.map')
@include('footer')
