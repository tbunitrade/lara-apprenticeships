@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Inheritance and Probate (Succession Disputes)
        </h3>
        <p class="text">
            Have you lost a loved one and need to formalise your inheritance rights?
            <br><br>
            Have dishonest relatives attempted to deprive you of property that was bequeathed to you by the deceased?
            <br><br>
            The advocates of the Bar Association of the City of Kyiv and Kyiv Region will assist you with all aspects of probate and inheritance procedures, including legal support for obtaining a certificate of inheritance.
            <br><br>
            We will also assess the prospects of success in court should there be a dispute over inherited property.
            <br><br>
            By contacting the Bar Association of the City of Kyiv and Kyiv Region for inheritance-related legal assistance, you can be confident that your rights and lawful interests will be reliably protected.
        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/advokat-po-spadkovym-spravam.jpg')}}')">
        {{--         <img src="{{URL::asset('/assets/images/pro_bono.png')}}">--}}
    </div>

    @include('block.all-practics')
</section>



@include('block.consultation-type-one')
@include('block.map')
@include('footer')
