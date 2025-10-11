
<form id="consultationForm" class="consultationForm" method="post" action="{{url('store-form')}}">
    @csrf
    <h3 class="title">Записатися на консультацію</h3>
    <p class="text">
        Кожен має право на правову допомогу. У випадках, передбачених законом, ця допомога надається безоплатно.
        Кожен є вільним у виборі захисника своїх прав.
        Для забезпечення права на захист від обвинувачення та надання правової допомоги при вирішенні справ у судах та інших державних органах в Україні діє адвокатура.

        <br>
        <strong>стаття 59 Конституції України</strong>
    </p>

    <fieldset>
        <input type="hidden" id="title" name="title" class="form-control" value="form-1-consultation">
        <div class="form-group">
            <input name="name" id="clientName" class="input" type="text" placeholder="Ваше ім'я" maxlength="25" required>
        </div>
        <div class="form-group">
            <input name="number" id="clientPhone" class="input" type="tel" placeholder="Номер телефону" minlength="10"  maxlength="19" required>
            <p id="alertPhone" class="alert hidden"><?=__('Обов’язкове поле');?></p>
        </div>
    </fieldset>
    {{--        <fieldset>--}}
    {{--            <textarea></textarea>--}}
    {{--        </fieldset>--}}
    <fieldset>
        <div class="form-group fGroup" >
{{--            <div class="g-recaptcha" data-sitekey="6LfPBPckAAAAAMj87uv7cdlChQalPshmPVzs19p5"></div>--}}
            <p class="text" >Я не бот, 7+4 = ??</p>
            <input style="" id="captcha1" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  maxlength="2" required>
        </div>
        <div class="form-group">

            <input class="btn" id="submit" type="submit" value="Відправити">
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
    //console.log('init 01 ok');
</script>
