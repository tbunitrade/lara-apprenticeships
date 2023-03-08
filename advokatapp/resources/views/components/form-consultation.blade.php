
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
        <input name="name" id="clientName" class="input" type="text" placeholder="Ваше ім'я" maxlength="25" required>

        <input name="number" id="clientPhone" class="input" type="tel" placeholder="Номер телефону" minlength="10"  maxlength="13" required>
    </fieldset>
    {{--        <fieldset>--}}
    {{--            <textarea></textarea>--}}
    {{--        </fieldset>--}}
    <input class="btn" id="submit" type="submit" value="Відправити">
</form>
