@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Construction, Land, and Real Estate
        </h3>
        <p class="text">
            The Bar Association of the City of Kyiv and Kyiv Region provides comprehensive legal support for complex construction and real estate projects in the capital region.
            <br><br>
            We assist Clients in obtaining all necessary documentation from the State Architectural and Construction Inspectorate, the Land Cadastre authorities, the Bureau of Technical Inventory, and other relevant public bodies.
            <br><br>
            If you are not fully confident in the legal status or “clean title” of real estate you plan to acquire — whether an apartment, house, or land plot — we will conduct thorough legal due diligence of the property, its ownership history, and the legal grounds for the seller’s title.
            <br><br>
            Our advocates have extensive experience in resolving property-related disputes, including legal actions to invalidate or terminate contracts of sale, gift deeds, or mortgage agreements concerning real estate.
            <br><br>
            If third parties have unlawfully taken possession of your property — contact us immediately. We will help restore your violated property rights.
        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/advokat-po-neruhomist-i-zemelne-pravo.jpg')}}')">
        {{--         <img src="{{URL::asset('/assets/images/pro_bono.png')}}">--}}
    </div>

    @include('block.all-practics')
</section>



@include('block.consultation-type-one')
@include('block.map')
@include('footer')
