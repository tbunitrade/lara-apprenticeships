
<form id="consultationForm" class="consultationForm" method="post" action="{{url('store-form')}}">
    @csrf
    <h3 class="title">Sign up for a consultation</h3>
    <p class="text">
        Everyone has the right to legal aid. In cases provided for by law, this aid shall be provided free of charge.
        Everyone is free to choose a defender of their rights.
        To ensure the right to protection from prosecution and the provision of legal aid in resolving cases in courts and other state bodies, the legal profession operates in Ukraine.
        <br>
        <strong>Article 59 of the Constitution of Ukraine</strong>
    </p>

    <fieldset>
        <input type="hidden" id="title" name="title" class="form-control" value="form-1-consultation">
        <input name="name" id="clientName" class="input" type="text" placeholder="Your name" maxlength="25" required>

        <input name="number" id="cllientPhone" class="input" type="tel" placeholder="Phone number" min="10" max="14" required>
    </fieldset>
    {{--        <fieldset>--}}
    {{--            <textarea></textarea>--}}
    {{--        </fieldset>--}}
    <input class="btn" id="submit" type="submit" value="Send">
</form>
