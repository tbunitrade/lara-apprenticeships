<section class="section map">
    <div id="map"></div>
    <div id="mapContacts" class="mapContacts">
        <h3 class="title">Наші контакти</h3>
       <ul class="ulContacts">
           <li class="li"> <p class="text">вул. Льва Толстого, 16, м. Київ, 01032 </p>        <a class="link startmap" href="">Показати на мапі</a></li>
           <li class="li"> <a class="link startphone" href="tel:+380682381383">+38 (068) 238-138-3</a></li>
           <li class="li"> <p class="text">E-mail:</p>   <a class="link startemail" href="mailto:bestlawyer.kiev@gmail.com">bestlawyer.kiev@gmail.com</a>.</li>
       </ul>
        <a class="btn btn-black" href="">Замовити дзвінок</a>
        <ul class="ulSocialsLinks">
            <li class="li">
                <a class="link instagram" href=""></a>
            </li>
            <li class="li">
                <a class="link facebook" href=""></a>
            </li>
        </ul>
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

    <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-IJwfrm4d7LRLRy8mLASjH1b3ewK1NEE&callback=initMap"></script>
</section>
