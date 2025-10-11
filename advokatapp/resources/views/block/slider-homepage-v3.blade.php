<?php
$myarrays = [
    [
        "photo" => "assets/home-slider/Kucherenko-Denis-Viktorovich.jpeg",
        "fullname" => "Кучеренко Денис Вікторович",
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
        "photo" => "assets/home-slider/Sudeikina-Iryna-Volodymyrivna.jpeg",
        "fullname" => "Судейкіна Ірина Володимирівна",
        "position" => "Адвокат"
    ],
    [
    "photo" => "assets/home-slider/Ivashchenko-Andrii-Ivanovych.jpg",
    "fullname" => "Іващенко Андрій Іванович",
    "position" => "Адвокат"
    ]
];
//echo '<pre>';
//var_dump($myarrays);
//echo '</pre>';

?>
<section class="section team">
    <h2 class="title">Про нас</h2>
    <p class="text">
        Адвокатське об’єднання «Колегія адвокатів міста Києва та Київської області» було засноване у 2013 році.
    </p>
</section>
<div class="container homepageSliderContainer 44">
    <div class="wrap glide">
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"></button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"></button>
        </div>
        <div class="glide__track" data-glide-el="track">

            <ul class="glide__slides">
                <?php foreach($myarrays as $myarray){ ?>

                <li class="glide__slide">
                        <?php
                        //foreach ($myarray as $value){
                        $url = $myarray['photo'];
                        $position = $myarray['position'];
                        $name = $myarray['fullname'];
                        //echo '<pre>';
                        //var_dump($myarray['photo']);
                        //echo '</pre>';
                        ?>

                    <div class="item-box-blog-image">
                        <figure>
                            <img class="img-responsive" alt="" src="{{URL::asset($url)}}">
                        </figure>
                    </div>
                    <div class="position">
                            <?=  $position; ?>
                    </div>
                    <div class="name">
                            <?= $name ;?>
                    </div>

                </li>
                    <?php
                }

                ?>

            </ul>
        </div>


    </div>
</div>

<script>
    const config = {
        type: 'carousel',
        focusAt: 'center',
        startAt:0,
        perView:5,
        gap: 40,
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




