@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Intellectual Property Law (Copyright and Related Rights)
        </h3>
        <p class="text">
            Are you involved in creative work or innovation and need to register copyright for a work or a utility model?
            <br><br>
            Are you a business owner seeking to register your own trademark?
            <br><br>
            Or perhaps you are a manager or owner of a restaurant or hotel and have questions about how to legally use musical works on the premises — including who to pay royalties to and how such remuneration should be calculated?
            <br><br>
            For any matters related to copyright and related rights, you can rely on the expert legal advice of the advocates of the Bar Association of the City of Kyiv and Kyiv Region.
            <br><br>
            We have extensive, successful, and diverse legal experience in the field of intellectual property rights protection — including high-profile litigation against leading publishing houses, TV channels, authors, and collective management organisations.
            <br><br>
            Contact the Bar Association of the City of Kyiv and Kyiv Region to protect your intellectual property rights.
        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/advokat-po-intelektualne-pravo-intelektualna-vlasnist.jpg')}}')">
        {{--         <img src="{{URL::asset('/assets/images/pro_bono.png')}}">--}}
    </div>

    @include('block.all-practics')
</section>



@include('block.consultation-type-one')
@include('block.map')
@include('footer')
