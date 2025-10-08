@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            ІT Law
        </h3>
        <p class="text">
            Ukraine is one of the world’s leading exporters of intellectual capital, particularly in the field of information technology.
            <br><br>
            In recent years, the IT sector in Ukraine has experienced rapid growth and has become one of the key sources of foreign currency inflows to the national economy.
            <br><br>
            The Bar Association of the City of Kyiv and Kyiv Region provides legal services to both IT companies and individual professionals — including software developers, engineers, and contractors.<br>
            We understand the legal specifics of the IT industry, monitor changes in sector-specific legislation, and are well-positioned to assist you in drafting or reviewing contracts to ensure terms that are both favourable and legally sound.
            <br><br>
            Our lawyers are well-versed in IT-related legislation, including relevant regulatory frameworks of the United States — such as the Digital Millennium Copyright Act (DMCA) and other applicable laws.
            <br><br>
            If you are a programmer, IT professional, or business owner providing IT services, contact the Bar Association of the City of Kyiv and Kyiv Region for expert legal assistance tailored to the unique needs of the tech sector.
        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/advokat-po-sudovym-sporam-v-it.jpg')}}')">
        {{--         <img src="{{URL::asset('/assets/images/pro_bono.png')}}">--}}
    </div>

    @include('block.all-practics')
</section>



@include('block.consultation-type-one')
@include('block.map')
@include('footer')
