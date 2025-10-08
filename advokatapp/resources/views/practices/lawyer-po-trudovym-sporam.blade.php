@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Labour Law (Employment Disputes)
        </h3>
        <p class="text">
            If you have been unlawfully dismissed, denied severance due to staff reductions, or if you are still employed but facing pressure from management to resign “voluntarily” — or otherwise experiencing violations of your employment rights — it is time to contact the Bar Association of the City of Kyiv and Kyiv Region.
            <br><br>
            A labour law advocate will analyse your situation, take into account all the nuances and specific aspects of your case, and propose the most effective legal strategy for resolving it.
            <br><br>
            The experienced employment lawyers of the Bar Association can persuade your employer to change their approach and cease violations of your rights — or successfully represent you in court, achieve your reinstatement, and recover unpaid wages for the period of forced absence.
        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/advokat-po-trudovym-sporam.jpg')}}')">
        {{--         <img src="{{URL::asset('/assets/images/pro_bono.png')}}">--}}
    </div>

    @include('block.all-practics')
</section>



@include('block.consultation-type-one')
@include('block.map')
@include('footer')
