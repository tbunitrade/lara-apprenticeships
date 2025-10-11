
<form id="consultationForm" class="consultationForm" method="post" action="{{url('store-form')}}">
    @csrf
    <h3 class="title">Make an appointment for a consultation</h3>
    <p class="text">
        Everyone has the right to legal aid. In cases provided for by law, this assistance is provided free of charge.
        Everyone is free to choose a defender of their rights.
        To ensure the right to protection from accusation and the provision of legal aid in resolving cases in courts and other state bodies, the legal profession operates in Ukraine.

        <br>
        <strong>Article 59 of the Constitution of Ukraine</strong>
    </p>

    <fieldset>
        <input type="hidden" id="title" name="title" class="form-control" value="form-1-consultation">
        <div class="form-group">
            <input name="name" id="clientName" class="input" type="text" placeholder="Your name" maxlength="25" required>
        </div>
        <div class="form-group">
            <input name="number" id="clientPhoneConsult" class="input" type="tel" placeholder="Phone number" minlength="10" maxlength="19" required>
            <p id="alertPhone" class="alert hidden"><?=__('Required field');?></p>
        </div>
    </fieldset>
    {{--        <fieldset>--}}
    {{--            <textarea></textarea>--}}
    {{--        </fieldset>--}}
    <fieldset>
        <div class="form-group fGroup" >
{{--            <div class="g-recaptcha" data-sitekey="6LfPBPckAAAAAMj87uv7cdlChQalPshmPVzs19p5"></div>--}}
            <p class="text" >I'm not a bot, 7+4 = ??</p>
            <input style="" id="captcha1" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  maxlength="2" required>
        </div>
        <div class="form-group">

            <input class="btn" id="submit" type="submit" value="Send">
        </div>

        <script>
            var captcha1 = document.getElementById('captcha1');
            //console.log('captcha1',captcha1);

            const btnsubmit1 = document.getElementById('submit');
            captcha1.addEventListener('input', function (){
                let data  = captcha1.value;
                let pass = 11;
                //console.log('i see captcha',data);
                if (data == pass) {
                    //btnsubmit.style.PointerEvent="auto";
                    btnsubmit1.classList.remove('blockme');
                    captcha1.style.background="white";
                    //console.log('all good');
                } else {
                    btnsubmit1.classList.add('blockme');
                    captcha1.style.background="red";

                    //btnsubmit.style.PointerEvent="none";
                    //console.log('block');
                }
            });
        </script>
    </fieldset>`
</form>

<script src="https://unpkg.com/imask"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        initPhoneMask('clientPhoneConsult');
    });

    function initPhoneMask(id) {
        const input = document.getElementById(id);
        if (!input) return;

        IMask(input, {
            mask: '+{00}(000)000-00-00',
            lazy: true
        });
    }

    // Инициализируем обе маски (если поля существуют на странице)

</script>

