@include('header-small')
<section class="section contacts">
    <ul class="uLContacts">
        <li class="li icon"
            onclick="window.open('https://www.google.com/maps/place/%D1%83%D0%BB.+%D0%9B%D1%8C%D0%B2%D0%B0+%D0%A2%D0%BE%D0%BB%D1%81%D1%82%D0%BE%D0%B3%D0%BE,+16,+%D0%9A%D0%B8%D0%B5%D0%B2,+02000/@50.4418985,30.4985672,17z/data=!3m1!4b1!4m6!3m5!1s0x40d4cef146b4997f:0x4f787129d1f3cc20!8m2!3d50.4418985!4d30.5007559!16s%2Fg%2F11c5k3_bbx')">
            <p class="text">16 Leo Tolstoy St., Kyiv, 01032</p>
            <p class="text">
                <a target="_blank" class="link showme"
                   href="https://www.google.com/maps/place/%D1%83%D0%BB.+%D0%9B%D1%8C%D0%B2%D0%B0+%D0%A2%D0%BE%D0%BB%D1%81%D1%82%D0%BE%D0%B3%D0%BE,+16,+%D0%9A%D0%B8%D0%B5%D0%B2,+02000/@50.4418985,30.4985672,17z/data=!3m1!4b1!4m6!3m5!1s0x40d4cef146b4997f:0x4f787129d1f3cc20!8m2!3d50.4418985!4d30.5007559!16s%2Fg%2F11c5k3_bbx">
                    Show on map
                </a>
            </p>
        </li>
        <li class="li phone" onclick="window.open('tel:380682381383')">
            <a class="text " href="tel:380682381383">+38 (068) 238-138-3</a>
        </li>

        <li class="li email" onclick="window.open('mailto:bestlawyer.kiev@gmail.com')">
            <p class="text ">
                <a class="link mailto" href="mailto:bestlawyer.kiev@gmail.com">bestlawyer.kiev@gmail.com</a>
            </p>
        </li>

        <li class="li ">
            <ul class="callMeSocial">
                <li>
                    <a target="_blank" href="https://t.me/advokatykievcom "><img
                                src="{{url::asset('/assets/images/telegram.png')}}"></a>
                </li>
                <li>
                    <a target="_blank" href="https://wa.me/380682381383?text=Hello!"><img
                                src="{{url::asset('/assets/images/whatsapp.png')}}"></a>
                </li>
                <li>
                    <a target="_blank" class="forMobile" href="viber://chat?number=+380682381383"><img
                                src="{{url::asset('/assets/images/viber.png')}}"></a>
                    <a target="_blank" class="forPc" title="Viber for PC must be installed"
                       href="viber://chat?number=+380682381383"><img
                                src="{{url::asset('/assets/images/viber.png')}}"></a>
                </li>
            </ul>
            <p class="text"><a class="link callme" href="#" data-bs-toggle="modal" data-bs-target="#CallMe">Request a
                    call</a></p>
        </li>
    </ul>

</section>

<style>
    #mapContacts {
        display: none;
    }

    #mapContacts {
        display: none !important;
    }

    .mapContainer {
        grid-template-areas:
        "googleMaps";
        grid-template-rows: 580px;
    }
</style>
@include('block.map')
@include('block.consultation-type-one')

@include('footer')
