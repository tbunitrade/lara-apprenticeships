@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Defence and Representation in Criminal Proceedings
        </h3>

        <p class="text">
            Have you been summoned for questioning by an investigator or inquirer from the National Police, the Security Service of Ukraine, the State Bureau of Investigations, the Bureau of Economic Security, or the National Anti-Corruption Bureau?
            <br><br>
            Have you been told that you are “just a witness”?
            <br><br>
            Do not rush to act without legal support.<br>
            Has a search warrant been issued and executed at your premises?
            <br><br>
            Have you been detained, served with a notice of suspicion, or had your property seized and frozen?
            <br><br>
            Or perhaps you have fallen victim to fraud or other criminal offences and require legal representation as a victim during the pre-trial investigation or court proceedings?
            <br><br>
            The Bar Association of the City of Kyiv and Kyiv Region includes highly experienced criminal law and procedure specialists — including former high-ranking law enforcement professionals — who possess deep practical knowledge of criminal defence.
            <br><br>
            Contact us to protect your rights in the face of criminal prosecution or accusations.<br>
            We will do everything legally possible to secure the most favourable and appropriate result in your case.
        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/advokat-po-kriminalnim-spravam.jpg')}}')">
        {{--         <img src="{{URL::asset('/assets/images/pro_bono.png')}}">--}}
    </div>

    @include('block.all-practics')
</section>



@include('block.consultation-type-one')
@include('block.map')
@include('footer')
