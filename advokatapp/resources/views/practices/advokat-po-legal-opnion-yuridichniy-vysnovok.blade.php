@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Юридичний висновок (legal opinion).
        </h3>
        <p class="text">


            Колегія адвокатів міста Києва та Київської області – це об’єднання професійних юристів найвищого рівня.
            <br><br>
            Якщо Вам потрібно скласти по певному питанню юридичний висновок (legal opinion) – ми зможемо це зробити.
            <br><br>
            Такий юридичний висновок (legal opinion) викладається на фірмовому бланку Колегії адвокатів міста Києва та Київської області,
            скріплюється підписом керівника, печаткою Колегії та, у разі необхідності його використання за межами України, на ньому проставляється апостиль.
            <br><br>
            В процесі складання юридичного висновку враховуються конкретні факти та обставини, які мають індивідуальне відношення до Клієнта,
            таким чином кожний правовий висновок є персоніфікованим та може використовуватися Клієнтом у банках, судах, правоохоронних та інших органах державної
            влади для підтвердження юридичних фактів або правової позиції Клієнта.

        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/Юридичний висновок (legal opinion).jpg')}}')">
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
