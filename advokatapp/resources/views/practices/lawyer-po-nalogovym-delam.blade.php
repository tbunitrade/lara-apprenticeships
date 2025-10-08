@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Tax Law
        </h3>
        <p class="text">
            Among the advocates of the Bar Association of the City of Kyiv and Kyiv Region are recognised specialists in tax law.
            <br><br>
            Our lawyers have extensive experience representing Clients in tax matters, including:<br>
            •	unblocking VAT invoices and tax credits,<br>
            •	challenging and cancelling unlawful tax notifications and decisions,<br>
            •	advising on the selection of optimal taxation schemes tailored to the Client’s business model.<br>
            <br><br>
            Tax law is a distinct and highly specialised area of legal practice.
            <br><br>
            When dealing with issues that impact substantial financial resources, the future of your business, or its reputation among partners and clients — you need a seasoned professional.<br>
            Our tax lawyers are deeply engaged in day-to-day tax practice and stay up to date with all current developments in tax legislation.

        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/advokat-po-nalogovym-delam.jpg')}}')">
        {{--         <img src="{{URL::asset('/assets/images/pro_bono.png')}}">--}}
    </div>

    @include('block.all-practics')
</section>



@include('block.consultation-type-one')
@include('block.map')
@include('footer')
