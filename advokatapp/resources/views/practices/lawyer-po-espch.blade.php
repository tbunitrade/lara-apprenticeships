@include('header-small')


<section class="section proBono">
    <div class="bonoInfo">
        <h3 class="title">
            Practice Before the European Court of Human Rights (ECHR)
        </h3>
        <p class="text">
            Have you exhausted all levels of the judicial system in Ukraine but failed to obtain justice?
            <br><br>
            Are you dissatisfied with the final decision of the Supreme Court of Ukraine or the appellate court?
            <br><br>
            Do not lose hope — you have the right and the opportunity to seek protection before the European Court of Human Rights (ECHR).
            <br><br>
            The advocates of the Bar Association of the City of Kyiv and Kyiv Region will review the court decisions issued in your case, analyse the available evidence, and provide a detailed legal consultation — including whether it is appropriate and legally justified to submit an application to the ECHR.
            <br><br>
            As every judgment of the European Court of Human Rights constitutes binding case law and sets a legal precedent, our advocates closely follow the Court’s jurisprudence and apply it in their practice.
            <br><br>
            We will competently prepare and file your application to the European Court of Human Rights within the prescribed time limits — and work to effectively protect your rights and lawful interests at the international level.
        </p>
    </div>
    <div class="bonoImg" style="background-image: url('{{URL::asset('/assets/images/practices/advokat-po-espch.jpg')}}')">
        {{--         <img src="{{URL::asset('/assets/images/pro_bono.png')}}">--}}
    </div>

    @include('block.all-practics')
</section>



@include('block.consultation-type-one')
@include('block.map')
@include('footer')
