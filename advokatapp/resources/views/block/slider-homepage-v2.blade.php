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
        "position" => "Адвокат, заступник голови колегії"
    ],
    [
        "photo" => "assets/home-slider/Smyrnov-Valeriy-Rubenovych.jpg",
        "fullname" => "Смирнов Валерій Рубенович",
        "position" => "Адвокат"
    ],
    [
        "photo" => "assets/home-slider/Xarchenko-Oksana-Oleksiïvna.jpg",
        "fullname" => "Харченко Оксана Олексіївна",
        "position" => "Адвокат"
    ],
    [
        "photo" => "assets/home-slider/Xrustovska-Olga-Petrivna.jpg",
        "fullname" => "Хрустовська Ольга Петрівна",
        "position" => "Адвокат"
    ],
    [
        "photo" => "assets/home-slider/Shamardin-Volodymyr-Mykolayovych.jpg",
        "fullname" => "Шамардін Володимир Миколайович",
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
<div class="container homepageSliderContainer">
    <div class="wrap glide">
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"></button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"></button>
        </div>
        <div class="glide__track" data-glide-el="track">

            <ul class="glide__slides">
                <?php


                foreach($myarrays as $myarray){
                ?>

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

                    <?php
                    //}?>
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
    console.log('mount glide ok');
</script>




