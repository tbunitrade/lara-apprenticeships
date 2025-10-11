<?php
$myarrays = [
    [
        "photo" => "assets/home-slider/Kucherenko-Denis-Viktorovich.jpeg",
        "fullname" => "Kucherenko Denis Viktorovich",
        "position" => "Lawyer"
    ],
    [
        "photo" => "assets/home-slider/Boyko-Olena-Oleksandrivna.jpg",
        "fullname" => "Boyko Olena Oleksandrivna",
        "position" => "Lawyer"
    ],
    [
        "photo" => "assets/home-slider/Popov-Mykyta-Hennadiyovych.jpg",
        "fullname" => "Popov Mykyta Gennadiyovych",
        "position" => "Lawyer, Deputy Chairman of the Board."
    ],
    [
        "photo" => "assets/home-slider/Smyrnov-Valeriy-Rubenovych.jpg",
        "fullname" => "Smyrnov Valeriy Rubenovych",
        "position" => "Lawyer"
    ],
    [
        "photo" => "assets/home-slider/Sudeikina-Iryna-Volodymyrivna.jpeg",
        "fullname" => "Sudeikina Iryna Volodymyrivna",
        "position" => "Lawyer"
    ],
    [
        "photo" => "assets/home-slider/Ivashchenko-Andrii-Ivanovych.jpg",
        "fullname" => "Ivashchenko Andrii Ivanovych",
        "position" => "Адвокат"
    ]
];
//echo '<pre>';
//var_dump($myarrays);
//echo '</pre>';

?>
<section class="section team">
    <h2 class="title">About us</h2>
    <p class="text">
        The Bar Association "Bar Association of Kyiv and Kyiv Region" was founded in 2013.
    </p>
</section>
<div class="container homepageSliderContainer 55">
    <div class="wrap glide">
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"></button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"></button>
        </div>
        <div class="glide__track" data-glide-el="track">

            <div class="glide__slides">
                <?php foreach($myarrays as $myarray){ ?>

                    <div class="glide__slide">
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
                    </div>
               <?php
                }

                ?>

            </div>
        </div>


    </div>
</div>

<script>
    const config = {
        type: 'carousel',
        focusAt: '1',
        startAt:0,
        perView:5,
        gap: 15,
        animationTimingFunc: 'ease-out',
        autoplay: 9900,
        breakpoints: {
            1280: {
                perView: 3,
            },
            767: {
                perView: 1,
            },
        },
    }
    new Glide(".glide", config).mount();
    //console.log('mount glide ok');
</script>




