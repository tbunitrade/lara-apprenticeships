@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Legal Opinion
        </h3>
        <p class="text">
            The Bar Association of the City of Kyiv and Kyiv Region is a union of top-tier legal professionals.
            <br><br>
            If you require a legal opinion on a specific legal matter — we are fully equipped to prepare it for you.
            <br><br>
            Such a legal opinion is issued on the official letterhead of the Bar Association of the City of Kyiv and Kyiv Region, signed by the Head of the Association, sealed with the Association’s official stamp, and, where necessary for use abroad, may be duly apostilled.
            <br><br>
            Each legal opinion is tailored to the Client’s specific situation and takes into account the individual facts and circumstances of the case. As such, every opinion is personalised and may be used by the Client before banks, courts, law enforcement agencies, and other public authorities as legal substantiation of facts or to support a legal position.

        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/advokat-po-legal-opnion-yuridichniy-vysnovok.jpg')}}')">
        {{--         <img src="{{URL::asset('/assets/images/pro_bono.png')}}">--}}
    </div>

    @include('block.all-practics')
</section>



@include('block.consultation-type-one')
@include('block.map')
@include('footer')
