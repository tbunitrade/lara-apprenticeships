@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Military Law (Protection of Servicemen’s Rights)

        </h3>
        <p class="text">
            Since 2014, Ukraine has been engaged in an anti-terrorist operation, and since 24 February 2022, service personnel of the Armed Forces of Ukraine, the National Guard, the Security Service of Ukraine, the National Police, and the State Border Guard Service have been defending the country on the front lines and actively participating in combat operations.
            <br><br>
            If you or your relatives are serving under contract in the armed forces or law enforcement agencies, and your legal rights or service guarantees are being violated — or, God forbid, you or your loved ones have been wounded or killed in action and you require state compensation —
            we strongly recommend contacting the Bar Association of the City of Kyiv and Kyiv Region.
            <br><br>
            Our professional military law advocates will provide qualified legal advice, assist with gathering the necessary documents, and, if needed, take full responsibility for handling the legal process on your behalf.
            <br><br>
            We are sincerely grateful to the military personnel for their heroism and their defence of the homeland.
            That is why we provide legal assistance to combat veterans either free of charge or at significantly reduced rates.
        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/advokat-po-voennym-delam.jpg')}}')">
        {{--         <img src="{{URL::asset('/assets/images/pro_bono.png')}}">--}}
    </div>

    @include('block.all-practics')
</section>



@include('block.consultation-type-one')
@include('block.map')
@include('footer')
