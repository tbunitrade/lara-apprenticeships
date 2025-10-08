@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Family Law (Divorce, Property Division, Child Custody)
        </h3>
        <p class="text">
            If your family life has broken down and you require legal assistance with divorce proceedings, division of marital property, or determination of parental involvement in child upbringing — you can receive top-quality legal support from a family law advocate at the Bar Association of the City of Kyiv and Kyiv Region.
            <br><br>
            If you entrust us with your private and personal matters, you can be confident — we will not let you down.
            <br><br>
            The effective protection of your rights — and the rights and interests of your children and property — in family and matrimonial matters is a priority for the family law advocates of our Association.
        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/advokat-po-simeyne-pravo.jpg')}}')">
        {{--         <img src="{{URL::asset('/assets/images/pro_bono.png')}}">--}}
    </div>

    @include('block.all-practics')
</section>



@include('block.consultation-type-one')
@include('block.map')
@include('footer')
