
<ul class="callMeSocial">
    <li>
        <a href="https://t.me/ngpngpngp"><img src="{{url::asset('/assets/images/telegram.png')}}"></a>
    </li>
    <li>
        <a href="https://wa.me/380991247016?text=Hello!"><img src="{{url::asset('/assets/images/whatsapp.png')}}"></a>
    </li>
    <li>
        <a class="forMobile" href="viber://add?number=380991247016"><img src="{{url::asset('/assets/images/viber.png')}}"></a>
        <a class="forPc" title="Должен быть установлен Viber для ПК" href="viber://chat?number=+380991247016" ><img src="{{url::asset('/assets/images/viber.png')}}"></a>
    </li>
</ul>
<form id="consultationForm" class="consultationForm" method="post" action="{{url('store-form')}}">
    @csrf
    <fieldset>
        <style>
            input {
                border:1px solid black;
                line-height: 20px;
                height: 40px;
                width: 100%;
                display: block;
                margin: auto;
                margin-bottom: 5px;
            }
        </style>
        <input type="hidden" id="title" name="title" class="form-control" value="form-2-callme">
        <div class="form-group">
            <input name="name" id="clientName" class="input" type="text" placeholder="Ваше ім'я" maxlength="25" required>
        </div>
        <div class="form-group">
            <input name="number" id="clientPhone" class="input" type="tel" placeholder="Номер телефону" minlength="10"  maxlength="13" required>
            <p id="alertPhone" class="alert hidden"><?=__('Обов’язкове поле');?></p>
        </div>
    </fieldset>
    {{--        <fieldset>--}}
    {{--            <textarea></textarea>--}}
    {{--        </fieldset>--}}
     <fieldset>
    <div class="form-group">
    <div class="g-recaptcha" data-sitekey="6LfPBPckAAAAAMj87uv7cdlChQalPshmPVzs19p5"></div>

    </div>
    <div class="form-group">

        <input class="btn" id="submit" type="submit" value="Відправити">
    </div>
    </fieldset>`
</form>

<script>
    const alertphone = document.getElementById('alertPhone');
    const clientphone = document.getElementById('number');
    clientphone.addEventListener('input', function (e){
        let phone = this.value;
        console.log('changes2');

        if (phone.length <= 12) {
            changeColor(this, 'red');
            alertphone.style.borderColor = 'red';
            //console.log('set phone red');
        } else {
            alertphone.style.borderColor = 'black';
            changeColor(this, 'black');
        }
        phone = phone.replace(/\D/g,'');

        if (phone.length >= 12) {
            //console.log('ok'+phone.length);
            alertphone.classList.add('hidden');
            changeColor(this, 'black');
            vphone = phone;

            return true;

        } else {
            //console.log('not ok'+phone.length);
            alertphone.classList.remove('hidden');
        }

        const str_phone = phone.toString();
        phone = Number(str_phone.slice(0, 12));

        //console.log('phone ->'+phone);
    });

    var maskOptions = {
    	mask: '+00(000)000-00-00',
    	lazy: false
    }


    var mask = new IMask(clientphone, maskOptions);
</script>
