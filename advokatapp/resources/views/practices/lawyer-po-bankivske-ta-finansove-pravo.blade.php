@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Banking and Financial Law, Credit Disputes
        </h3>
        <p class="text">
            Are debt collectors harassing you around the clock?  <br>
            Is a bank attempting to repossess your apartment, house, land plot, or other mortgaged property?  <br>
            Or perhaps you lent money to acquaintances, relatives, or third parties, and the borrower refuses to repay the debt?  <br>
            <br><br>
            It’s time to contact the Bar Association of the City of Kyiv and Kyiv Region.
            <br><br>
            Our advocates will carry out a comprehensive assessment of your situation, review all relevant agreements, evaluate legal risks, outline a strategy and timeline for resolution, and provide a solution tailored to your needs — one that will most likely meet your expectations.
            <br><br>
            Extensive experience in dealing with banks, financial institutions, and collection agencies enables our lawyers to achieve favourable outcomes for Clients — even in the most complex cases — efficiently, promptly, and with minimal cost.
            <br><br>
            Entrust us with the resolution of your debt matters and the protection of your mortgaged assets.
        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/advokat-po-bankivske-ta-finansove-pravo.jpg')}}')">
        {{--         <img src="{{URL::asset('/assets/images/pro_bono.png')}}">--}}
    </div>

    @include('block.all-practics')
</section>



@include('block.consultation-type-one')
@include('block.map')
@include('footer')
