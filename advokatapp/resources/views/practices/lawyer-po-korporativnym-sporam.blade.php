@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Corporate Law and Shareholder Disputes
        </h3>
        <p class="text">
            If your business partners have begun acting in bad faith — attempting to appoint their own director or other officers, or even trying to deprive you of your share in a limited liability company or your stake in a joint-stock company — do not delay in contacting the Bar Association of the City of Kyiv and Kyiv Region.
            <br>
            Our highly qualified advocates will protect your corporate rights and interests.
            <br><br>
            Or perhaps there is no dispute at all — you are planning to buy or sell shares in a joint-stock company or an interest in an LLC and require legal support for the corporate rights transaction.
            <br><br>
            The advocates of the Bar Association will provide full legal assistance with:<br>
            •	legal due diligence of assets, licences, and financial documents,<br>
            •	risk assessment,<br>
            •	contract analysis and drafting,<br>
            •	support through the signing and execution of the transaction.<br>

        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/advokat-po-korporativnym-sporam.jpg')}}')">
        {{--         <img src="{{URL::asset('/assets/images/pro_bono.png')}}">--}}
    </div>

    @include('block.all-practics')
</section>



@include('block.consultation-type-one')
@include('block.map')
@include('footer')
