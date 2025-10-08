@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Legal Audit of Companies, Projects, and Transactions (Due Diligence)
        </h3>
        <p class="text">
            Planning to invest, but unsure whether you can objectively assess the risks versus the potential returns?
            <br><br>
            Turn to the professionals.<br>
            The advocates of the Bar Association of the City of Kyiv and Kyiv Region provide Clients with comprehensive legal due diligence services. Where appropriate, we also engage financial analysts, accountants, economists, and marketing specialists — enabling us to collect, process, and assess large volumes of information about your company, counterparty, investment project, or proposed transaction.
            <br><br>
            We carry out in-depth legal risk assessments, analyse potential tax exposure and optimisation strategies, and evaluate expected income and expenditure.
            Based on this, we provide a professional and detailed report summarising the findings of the legal audit — enabling you to make informed and legally sound decisions.
            <br><br>

        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/advokat-po-auditam-yuridichnij-audit-pidpriyemstva.jpg')}}')">
        {{--         <img src="{{URL::asset('/assets/images/pro_bono.png')}}">--}}
    </div>

    @include('block.all-practics')
</section>



@include('block.consultation-type-one')
@include('block.map')
@include('footer')
