@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Публічні закупівлі (prozorro).
        </h3>
        <p class="text">
            Ви маєте власну справу та постачаєте свою продукцію або надаєте послуги державним підприємствам, установам,
            організаціям або ж маєте намір це робити?
            <br><br>
            Потребуєте якісного фахового супроводження процедури публічних закупівель, в тому числі, через систему «prozorro»?
            <br><br>
            Юридичні радники – адвокати Колегії адвокатів міста Києва та Київської області зможуть забезпечити професійне
            супроводження процедури публічних закупівель: від дослідження тендерної документації та формування пропозиції
            учасника торгів до оскарження в адміністративному або судовому порядку неправомірного рішення про відмову в допущенні
            Вашої пропозиції до наступного етапу.
        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/Публічні закупівлі (prozorro).jpg')}}')">
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
