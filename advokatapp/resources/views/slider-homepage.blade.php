<?php


//$myarrays = array(
//    "0" => array(
//        "0" => "assets/home-slider/photo-nikita.png",
//        "1" => "Беззубченко Лариса Володимирівна",
//        "2" => "Адвокат"
//    ),
//    "1" => array(
//        "0" => "assets/home-slider/photo-man-1.png",
//        "1" => "assets/home-slider/photo-man-2.png",
//        "2" => "assets/home-slider/photo-nikita.png"
//    )
//);


$myarrays = array(
    "0" => array(
        "photo" => "assets/home-slider/Luk'yanenko-Yaroslav-Volodimirovich.jpg",
        "fullname" => "Лук'яненко Ярослав Володимирович",
        "position" => "Адвокат"
    ),
    "1" => array(
        "photo" => "assets/home-slider/Boyko-Olena-Oleksandrivna.jpg",
        "fullname" => "Бойко Олена Олександрівна",
        "position" => "Адвокат"
    ),
    "2" => array(
        "photo" => "assets/home-slider/Popov-Mykyta-Hennadiyovych.jpg",
        "fullname" => "Попов Микита Геннадійович",
        "position" => "Адвокат, Заступник Голови Колегії."
    ),
    "3" => array(
        "photo" => "assets/home-slider/Smyrnov-Valeriy-Rubenovych.jpg",
        "fullname" => "Смирнов Валерій Рубенович",
        "position" => "Адвокат"
    ),
    "4" => array(
        "photo" => "assets/home-slider/Sudeikina-Iryna-Volodymyrivna.jpeg",
        "fullname" => "Судейкіна Ірина Володимирівна",
        "position" => "Адвокат"
    ),
    "5" => array(
        "photo" => "assets/home-slider/Trohimcuk-Dіana-Volodimirіvna.jpg",
        "fullname" => "Трохимчук Діана Володимирівна",
        "position" => "Адвокат"
    ),
);


?>

{{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>--}}
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
<!------ Include the above in your HEAD tag ---------->

<div class="homepageSliderContainer container cta-100 ">
    <div class="container">
        <div class="row blog">
            <div class="col-md-12">
                <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#blogCarousel" data-slide-to="1"></li>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <?php
                        $i = 0;
                        foreach($myarrays as $key => $myarray){
                        ?>
                        <div class="carousel-item <?php echo ($i == 0) ? "active" : ""; ?>">
                            <div class="row">
                                <?php
                                foreach($myarray as $sub_key => $slide) {
                                ?>
                                <div class="col-md-4" >
                                    <div class="item-box-blog">
                                        <div class="item-box-blog-image">
                                            <figure> <img alt="" src="<?= $slide; ?>"> </figure>
                                        </div>
                                        <div class="position">
                                            Нікіта Попов
                                        </div>
                                        <div class="name">
                                            Адвокат
                                        </div>
                                        <div class="description">
                                            В то время некий безымянный печатник создал
                                            большую коллекцию размеров и форм шрифтов,
                                            используя Lorem Ipsum для распечатки образцов.
                                        </div>
                                    </div>
                                </div>

                                <?php
                                }
                                $i++;?>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                            <!--.item-->
                        <!--.item-->
                    </div>
                    <!--.carousel-inner-->
                </div>
                <!--.Carousel-->
            </div>
        </div>
    </div>
</div>
