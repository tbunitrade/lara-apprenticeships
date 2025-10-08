@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Public Procurement (Prozorro).
        </h3>
        <p class="text">
            Do you run a business supplying goods or providing services to state-owned enterprises, institutions, or organisations — or plan to do so?
            <br><br>
            Do you require qualified legal support in public procurement procedures, including participation via the Prozorro system?
            <br><br>
            The legal advisers and advocates of the Bar Association of the City of Kyiv and Kyiv Region offer professional legal assistance throughout all stages of the public procurement process — from analysing tender documentation and preparing the bid, to challenging unlawful decisions denying your offer at the administrative or judicial level.
        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/advokat-po-yuridichnu-konsultatsiyu-abo-dopomogu-u-zakupivli-prozorro.jpg')}}')">
        {{--         <img src="{{URL::asset('/assets/images/pro_bono.png')}}">--}}
    </div>

    @include('block.all-practics')
</section>




@include('block.consultation-type-one')
@include('block.map')
@include('footer')
