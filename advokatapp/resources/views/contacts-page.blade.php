    @include('header-small')
    <section class="section contacts">
        <ul class="uLContacts">
            <li class="li icon" onclick="location.href=`https://www.google.com/maps/place/%D1%83%D0%BB.+%D0%9B%D1%8C%D0%B2%D0%B0+%D0%A2%D0%BE%D0%BB%D1%81%D1%82%D0%BE%D0%B3%D0%BE,+16,+%D0%9A%D0%B8%D0%B5%D0%B2,+02000/@50.4418985,30.4985672,17z/data=!3m1!4b1!4m6!3m5!1s0x40d4cef146b4997f:0x4f787129d1f3cc20!8m2!3d50.4418985!4d30.5007559!16s%2Fg%2F11c5k3_bbx`;">
                <p class="text">вул. Льва Толстого, 16, м. Київ, 01032</p>
                <p class="text"><a target="_blank" class="link showme" href="https://www.google.com/maps/place/%D1%83%D0%BB.+%D0%9B%D1%8C%D0%B2%D0%B0+%D0%A2%D0%BE%D0%BB%D1%81%D1%82%D0%BE%D0%B3%D0%BE,+16,+%D0%9A%D0%B8%D0%B5%D0%B2,+02000/@50.4418985,30.4985672,17z/data=!3m1!4b1!4m6!3m5!1s0x40d4cef146b4997f:0x4f787129d1f3cc20!8m2!3d50.4418985!4d30.5007559!16s%2Fg%2F11c5k3_bbx">Показати на мапі</a> </p>
            </li>
            <li class="li phone">
                <a class="text " href="tel:380682381383">+38 (068) 238-138-3</a>
                <p class="text"><a class="link callme" href="#">Замовити дзвінок</a> </p>
            </li>
            <li class="li email" onclick="location.href=`mailto:bestlawyer.kiev@gmail.com`;">
                <p class="text ">
                    <a class="link mailto" href="mailto:bestlawyer.kiev@gmail.com">bestlawyer.kiev@gmail.com</a>
                </p>
            </li>
        </ul>

    </section>
    <style>
        #mapContacts{
            display: none;
        }
    </style>
    @include('block.map')
    @include('block.consultation-type-one')

    @include('footer')
