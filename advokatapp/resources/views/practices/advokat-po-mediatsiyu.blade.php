@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Медіація (перемовини).
        </h3>
        <p class="text">
            «Вчисту виграна битва – та, яка не відбулась» - крилатий вислів стародавнього китайського філософа-мислителя Сунь Цзи.
            <br><br>
            Бувають такі випадки, коли краще домовитись та дійти певного компромісу, аніж витрачати роки часу та великі суми грошових витрат
            на судові процеси. Вміння переконати опонента в тому, яке рішення йому краще прийняти чи які дії вчинити – це мистецтво.
            <br><br>
            Адвокати Колегії адвокатів міста Києва та Київської області володіють цим мистецтвом і зможуть професійно відстояти позицію
            Клієнта на перемовинах будь-якої складності.
            <br><br>
        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/advokat-po-mediatsiyu.jpg')}}')">
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
