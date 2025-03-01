<section class="section mapContainer">
    <div id="map" class="googleMaps"></div>
    <div id="mapContacts" class="mapContacts">
        <h3 class="title">Наші контакти</h3>
       <ul class="ulContacts">
           <li class="li"> <p class="text">вул. Льва Толстого, 16, м. Київ, 01032 </p>        <a target="_blank" class="link startmap" href="https://www.google.com/maps/place/%D1%83%D0%BB.+%D0%9B%D1%8C%D0%B2%D0%B0+%D0%A2%D0%BE%D0%BB%D1%81%D1%82%D0%BE%D0%B3%D0%BE,+16,+%D0%9A%D0%B8%D0%B5%D0%B2,+02000/@50.4418985,30.4985672,17z/data=!3m1!4b1!4m6!3m5!1s0x40d4cef146b4997f:0x4f787129d1f3cc20!8m2!3d50.4418985!4d30.5007559!16s%2Fg%2F11c5k3_bbx">Показати на мапі</a></li>
           <li class="li"> <a target="_blank" class="link startphone" href="tel:+380682381383">+38 (068) 238-138-3</a></li>
           <li class="li"> <p class="text">E-mail:</p>   <a target="_blank" class="link startemail" href="mailto:bestlawyer.kiev@gmail.com">bestlawyer.kiev@gmail.com</a>.</li>
       </ul>
        <ul class="callMeSocial">
            <li>
                <a target="_blank" href="https://t.me/advokatykievcom "><img src="{{url::asset('/assets/images/telegram.png')}}"></a>
            </li>
            <li>
                <a target="_blank" href="https://wa.me/380682381383?text=Hello!"><img src="{{url::asset('/assets/images/whatsapp.png')}}"></a>
            </li>
            <li>
                <a target="_blank" class="forMobile" href="viber://chat?number=+380682381383"><img src="{{url::asset('/assets/images/viber.png')}}"></a>
                <a target="_blank" class="forPc" title="Должен быть установлен Viber для ПК" href="viber://chat?number=+380682381383" ><img src="{{url::asset('/assets/images/viber.png')}}"></a>
            </li>
        </ul>
{{--        <ul class="ulSocialsLinks" >--}}
{{--            <li class="li">--}}
{{--                <a class="link instagram" href=""></a>--}}
{{--            </li>--}}
{{--            <li class="li">--}}
{{--                <a class="link facebook" href=""></a>--}}
{{--            </li>--}}
{{--        </ul>--}}
        <a class="btn btn-black" href="#" data-bs-toggle="modal" data-bs-target="#CallMe">Замовити дзвінок</a>

    </div>

    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            //@50.4418463,30.4985072,16.94z
            const uluru = { lat: 50.44183916864353, lng: 30.500816018290124 };

            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 16.94,
                center: uluru,
            });
            //map.setCenter(new GLatLng(50.44205850408882, 30.502909762842833), 16);
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: uluru,
                map: map,
            });
        }

        window.initMap = initMap;
    </script>


{{--    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-IJwfrm4d7LRLRy8mLASjH1b3ewK1NEE&callback=initMap"></script>--}}

{{--    <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-IJwfrm4d7LRLRy8mLASjH1b3ewK1NEE&callback=initMap"></script>--}}
    <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDh4GRsAxjiBLt2qWYHIfeNR8yDc82keMQ&callback=initMap" async defer></script>

</section>
