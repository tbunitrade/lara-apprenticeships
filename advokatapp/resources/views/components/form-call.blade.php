<ul class="callMeSocial" style="display:none">
    <li>
        <a href="https://t.me/advokatykievcom"><img src="{{url::asset('/assets/images/telegram.png')}}"></a>
    </li>
    <li>
        <a href="https://wa.me/380991247016?text=Hello!"><img src="{{url::asset('/assets/images/whatsapp.png')}}"></a>
    </li>
    <li>
        <a class="forMobile" href="viber://add?number=380991247016"><img src="{{url::asset('/assets/images/viber.png')}}"></a>
        <a class="forPc" title="Должен быть установлен Viber для ПК" href="viber://chat?number=+380991247016"><img src="{{url::asset('/assets/images/viber.png')}}"></a>
    </li>
</ul>
<form id="consultationForm" class="consultationForm" method="post" action="{{url('store-form')}}">
    @csrf
    <fieldset>
        <input type="hidden" id="title" name="title" class="form-control" value="form-2-callme">
        <div class="form-group">
            <input name="name" id="clientName" class="input" type="text" placeholder="Ваше ім'я" maxlength="25" required>
        </div>
        <div class="form-group">
            <input name="number" id="clientPhone" class="input" type="number" placeholder="Номер телефону" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="16" required>
            <p id="alertPhone" class="alert hidden"><?=__('Обов’язкове поле');?></p>
        </div>
    </fieldset>
    <fieldset>
        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6LfPBPckAAAAAMj87uv7cdlChQalPshmPVzs19p5"></div>
        </div>
        <div class="form-group">
            <p class="text">Я не бот, 7+3 = ??</p>
            <input id="captcha" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="2" required>
        </div>
        <div class="form-group">
            <input class="btn" id="submit-call" type="submit" value="Відправити">
            <script>
                var captcha = document.getElementById('captcha');
                const btnsubmit = document.getElementById('submit-call');
                captcha.addEventListener('input', function() {
                    let data = captcha.value;
                    if (data == 10) {
                        btnsubmit.classList.remove('blockme');
                        captcha.style.background = "white";
                    } else {
                        btnsubmit.classList.add('blockme');
                        captcha.style.background = "red";
                    }
                });
            </script>
        </div>
    </fieldset>
</form>

<script>
    const alertphone = document.getElementById('alertPhone');
    const clientphone = document.getElementById('clientPhone');

    var maskOptions = {
        mask: '+00(000)000-00-00',
        lazy: false
    }

    var mask = new IMask(clientphone, maskOptions);

    clientphone.addEventListener('input', function(e) {
        let phone = this.value;

        if (phone.length <= 12) {
            changeColor(this, 'red');
            alertphone.style.borderColor = 'red';
        } else {
            alertphone.style.borderColor = 'black';
            changeColor(this, 'black');
        }
        phone = phone.replace(/\D/g, '');

        if (phone.length >= 12) {
            alertphone.classList.add('hidden');
            changeColor(this, 'black');
            vphone = phone;
            return true;
        } else {
            alertphone.classList.remove('hidden');
        }

        const str_phone = phone.toString();
        phone = Number(str_phone.slice(0, 12));

        // Синхронизация маски с новым значением
        mask.updateValue();
    });
</script>
