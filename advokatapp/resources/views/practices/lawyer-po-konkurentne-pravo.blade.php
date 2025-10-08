@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Competition and Antitrust Law
        </h3>
        <p class="text">
            Are you planning to acquire or sell corporate rights in a large company and require merger clearance from the Antimonopoly Committee of Ukraine (AMCU)?<br>
            Are your competitors engaging in unfair market practices, or has a contracting authority violated tender procedures by unjustifiably rejecting your bid?
            <br><br>
            There is a solution — contact the Bar Association of the City of Kyiv and Kyiv Region.
            <br><br>
            Our advocates have extensive and successful experience in:<br>
            •	preparing and supporting complaints to the Antimonopoly Committee of Ukraine,<br>
            •	handling merger control and concentration clearance procedures,<br>
            •	protecting Clients’ interests in public procurement disputes involving anticompetitive behaviour.<br>
            <br><br>
            We will help you effectively defend your rights in the market, eliminate violations committed by competitors, and, if necessary, initiate proceedings to hold them liable under Ukrainian law.
            <br><br>
            Your success is our best reward.
        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/advokat-po-konkurentne-pravo.jpg')}}')">
        {{--         <img src="{{URL::asset('/assets/images/pro_bono.png')}}">--}}
    </div>

    @include('block.all-practics')
</section>



@include('block.consultation-type-one')
@include('block.map')
@include('footer')
