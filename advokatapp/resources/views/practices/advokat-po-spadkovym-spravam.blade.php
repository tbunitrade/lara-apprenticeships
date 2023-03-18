@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Оформлення спадщини (спадкові спори).
        </h3>
        <p class="text">
            Хтось з Ваших близьких помер та необхідно оформити спадщину?
            <br><br>
            Або ж Ваші недобросовісні родичи вирішили Вас обійти та залишити без майна, яке Вам заповідав померлий спадкодавець?
            <br><br>
            Адвокати Колегії адвокатів міста Києва та Київської області допоможуть Вам у процедурі оформлення спадщини,
            а також оцінять шанси на виграш судової справи щодо спірного спадкового майна.
            <br><br>
            Якщо Ви звернетесь до Колегії адвокатів міста Києва та Київської області з запитом на допомогу в оформленні спадщини,
            Ваші права та законні інтереси в питанні спадкування майна будуть надійно захищені – в цьому Ви можете не сумніватися.
        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/advokat-po-spadkovym-spravam.jpg')}}')">
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
