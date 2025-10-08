@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Administrative Disputes (Customs Duties, Pensions, Benefits, Taxes)
        </h3>
        <p class="text">
            Has the tax authority refused to register your VAT invoice?
            <br><br>
            Have you been unlawfully dismissed from public service or denied your statutory leave?
            <br><br>
            Was your property or goods confiscated at customs?
            <br><br>
            Has the Pension Fund Authority failed to pay out your pension or accumulated debt?
            <br><br>
            The advocates of the Bar Association of the City of Kyiv and Kyiv Region possess extensive and successful experience in handling cases involving violations of citizens’ and organisations’ rights by public authorities.
            <br><br>
            Our lawyers regularly and effectively represent Clients in:<br>
            •	the annulment of unlawful tax notifications and assessments,<br>
            •	reinstatement to public office or state enterprise positions following unlawful dismissal — including recovery of lost income,<br>
            •	recovery of pension and social benefit payments through administrative proceedings,<br>
            •	return of property, goods, or funds confiscated at customs.
            <br><br>
            These matters form a consistent and successful part of our legal practice.

        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/advokat-po-zed-ta-mytnym-spravam.jpg')}}')">
        {{--         <img src="{{URL::asset('/assets/images/pro_bono.png')}}">--}}
    </div>

    @include('block.all-practics')
</section>



@include('block.consultation-type-one')
@include('block.map')
@include('footer')
