<?php
$myarrays = [
    [
        "photo" => "assets/home-slider/Luk'yanenko-Yaroslav-Volodimirovich.jpg",
        "fullname" => "Лук'яненко Ярослав Володимирович",
        "position" => "Адвокат"
    ],
    [
        "photo" => "assets/home-slider/Boyko-Olena-Oleksandrivna.jpg",
        "fullname" => "Бойко Олена Олександрівна",
        "position" => "Адвокат"
    ],
    [
        "photo" => "assets/home-slider/Popov-Mykyta-Hennadiyovych.jpg",
        "fullname" => "Попов Микита Геннадійович",
        "position" => "Адвокат, Заступник Голови Колегії."
    ],
    [
        "photo" => "assets/home-slider/Smyrnov-Valeriy-Rubenovych.jpg",
        "fullname" => "Смирнов Валерій Рубенович",
        "position" => "Адвокат"
    ],
    [
        "photo" => "assets/home-slider/Shamardin-Volodymyr-Mykolayovych.jpg",
        "fullname" => "Шамардін Володимир Миколайович",
        "position" => "Адвокат"
    ],
    [
        "photo" => "assets/home-slider/Trohimcuk-Dіana-Volodimirіvna.jpg",
        "fullname" => "Трохимчук Діана Володимирівна",
        "position" => "Адвокат"
    ]
];


?>
<div content="container">
    <div class="glide">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <li class="glide__slide">
                    <img class="img-responsive" src="{{URL::asset('assets/home-slider/Xrustovska-Olga-Petrivna.jpg')}}">
                </li>
                <li class="glide__slide">
                    <img class="img-responsive" src="{{URL::asset('assets/home-slider/Xarchenko-Oksana-Oleksiïvna.jpg')}}">
                </li>
                <li class="glide__slide">
                    <img class="img-responsive" src="{{URL::asset('assets/home-slider/Smyrnov-Valeriy-Rubenovych.jpg')}}">
                </li>
            </ul>
        </div>

        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
        </div>
    </div>


</div>

<script>
    const config = {
        type: 'carousel',
        //focusAt: 'center',
        startAt:0,
        perView:3,
        gap: 0,
        animationTimingFunc: 'ease-out',
        autoplay: 9900,
        breakpoints: {
            1580: {
                perView: 3,
            },
            1024: {
                perView: 1,
            },
        },
    }
    new Glide(".glide", config).mount();
    //console.log('mount glide ok');
</script>




