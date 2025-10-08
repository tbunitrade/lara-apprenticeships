@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Subscription-Based Legal Services for Businesses and Individuals
        </h3>
        <p class="text">
            The advocates of the Bar Association of the City of Kyiv and Kyiv Region are fully capable of replacing
            and/or effectively complementing an in-house legal counsel of any organisation.
            <br><br>
            In the course of business operations, and particularly during business development,
            entrepreneurs frequently face numerous legal matters: choosing the appropriate legal form of a company,
            drafting constitutional documents, tax optimisation, dealing with counterparties,
            drafting contracts and internal documentation, supporting tax and other regulatory inspections, conducting litigation, and more.
            <br><br>
            Any business that aspires to be successful requires a highly qualified legal adviser.
            The advocates of the Bar Association of the City of Kyiv and Kyiv Region offer a comprehensive range of legal services and will
            undoubtedly assist their Clients in securing a distinguished position among the leaders in their industry — a position they truly deserve.
            <br><br>
            What sets the advocates of the Bar Association apart from other legal advisers and consultants is their innovative and progressive approach to legal services,
            based on proactive legal counselling. This approach reverses the traditional model:
            instead of the Client seeking out the lawyer with a specific problem, the lawyer proactively approaches the Client, offering timely advice and solutions,
            systematising and balancing the Client’s operations in order to prevent legal issues before they arise.
            <br><br>
            Among the regular Clients of the Bar Association are also private individuals who require a legal adviser to be available on a 24/7 basis.
        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/abonentske-yurydychne-obslugovuvannya-yurydychnyh-osib.jpg')}}')">
{{--         <img src="{{URL::asset('/assets/images/pro_bono.png')}}">--}}
    </div>

    @include('block.all-practics')
</section>



@include('block.consultation-type-one')
@include('block.map')
@include('footer')
