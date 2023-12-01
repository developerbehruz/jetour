<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model</title>
    <!-- Main css -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>
<body>
    <?php
        require "../components/loader.php";
    ?>

    <div class="img-modal">
        <div class="modal-img">
            <object class="modal_img defImg wer" data="../assets/images/model3.png" type="">
                <param name="allowFullScreen" value="true" />
            </object> 
            <button class="modal_close_img"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </div>

    <div class="img-modal">
        <div class="modal-img">
            <video src="" autoplay controls class="modal_vd"></video>
            <button class="modal_close_img"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </div>

    <?php
        require "../components/modal-drive.php";
    ?>

    <?php
        $in = "../";
        require "../components/header.php";
    ?>

    <div class="model-home-page">
        <img src="../assets/images/modelbg.png" alt="">
        <h1>JETAUR DASHING</h1>
        <div class="model-home-btns">
            <button class="model_btns" onclick="modalImg('../assets/images/model2.png')"><span><img width="10" class="ms-2" src="https://jetour-uzbekistan.uz/assets/arrow-72ea9519.svg" alt=""></span> Car onside</button>
            <button class="model_btns" onclick="modalImg('../assets/images/model3.png')"><span><img width="10" class="ms-2" src="https://jetour-uzbekistan.uz/assets/arrow-72ea9519.svg" alt=""></span> Car inside</button>
            <button class="model_btns" onclick="modalImg('../assets/images/model1.png')"><span><img width="10" class="ms-2" src="https://jetour-uzbekistan.uz/assets/arrow-72ea9519.svg" alt=""></span> Car outside</button>
        </div>
    </div>

    <div class="after-vd-carusel">
        <button class="btn_red mt-3">Заказать <img width="10" class="ms-2" src="https://jetour-uzbekistan.uz/assets/arrow-72ea9519.svg" alt=""></button>
        <p>От $28 000 или $2800 за 10 месяцев</p>
        <div class="container">
            <h1 class="mt-5 model-after-vd-text">НАСЛАЖДАЙСЯ ЖИЗНЬЮ НАСЛАЖДАЙТЕСЬ ПУТЕШЕСТВИЯМИ</h1>
            <p class="smallTitle">NAGUARD TECHNOLOGY SUV</p>
        </div>
    </div>

    <div class="car">
        <div class="car_img">
            <img class="model_full" src="../assets/images/car.png" alt="">
            <button class="model_btns vd_model_btn" onclick="modalVd('../assets/images/ehs9_new.mp4')"><span><img width="10" class="ms-2" src="https://jetour-uzbekistan.uz/assets/arrow-72ea9519.svg" alt=""></span> Видео</button>
        </div>
        <div class="container">
            <h1>JETAUR DASHING</h1>
            <p>Lorem ipsum dolor sit amet consectetur. Id urna massa sed tristique mauris ligula consequat duis gravida. Aliquam tortor enim tortor scelerisque. Tincidunt vitae aliquam consequat dictum nascetur rhoncus. Felis dui morbi eu sit sed dolor. Pellentesque nisi enim viverra eget eget eros dis sapien et. Risus facilisis aenean bibendum neque varius risus condimentum mattis tellus. Porta elit tempus egestas adipiscing eu sit. Enim egestas et tortor tincidunt in praesent erat. Malesuada aliquet vulputate vitae convallis risus.
            </p>
        </div>
    </div>

    <div class="car-img">
        <div class="single-img">
            <img src="../assets/images/first_car_img.png" alt="">
            <div class="img-content">
                <div class="txt">
                    <span>Ширина</span>
                    <span>4590 мм</span>
                </div>
                <div class="img_btn">
                    <i onclick="modalImg('../assets/images/first_car_img.png')" class="fa-solid fa-expand"></i>
                </div>
            </div>
        </div>
        <div class="double-imgs">
            <div>
                <img  src="../assets/images/second_car_img.png" alt="">
                <div class="img-content">
                    <div class="txt">
                        <span>Ширина</span>
                        <span>4590 мм</span>
                    </div>
                    <div class="img_btn">
                        <i onclick="modalImg('../assets/images/second_car_img.png')" class="fa-solid fa-expand"></i>
                    </div>
                </div>
            </div>
            <div>
                <img src="../assets/images/third_car_img.png" alt="">
                <div class="img-content">
                    <div class="txt">
                        <span>Ширина</span>
                        <span>4590 мм</span>
                    </div>
                    <div class="img_btn">
                        <i onclick="modalImg('../assets/images/third_car_img.png')" class="fa-solid fa-expand"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="car-text"> 
        <button class="btn_red mt-3">Заказать <img width="10" class="ms-2" src="https://jetour-uzbekistan.uz/assets/arrow-72ea9519.svg" alt=""></button>
        <p>От $28 000 или $2800 за 10 месяцев</p>
    </div>

    <div class="gallery text-center">
        <h1 class="title_2">Галерея</h1>
        <div class="gallery_btns">
            <button class="ins_btn active">Интерьер</button>
            <button class="out_btn">Экстерьер</button>
        </div>
        <div class="container in_carusel">
            <div class="owl-carousel owl-theme mt-5">
                <div class="item">
                    <img src="../assets/images/model3.png" class="w-100" alt="">
                    <i onclick="modalImg('../assets/images/first_car_img.png')" class="fa-solid fa-expand"></i>
                </div>
                <div class="item">
                    <img src="../assets/images/model2.png" class="w-100" alt="">
                    <i onclick="modalImg('../assets/images/first_car_img.png')" class="fa-solid fa-expand"></i>
                </div>
                <div class="item">
                    <img src="../assets/images/model1.png" class="w-100" alt="">
                    <i onclick="modalImg('../assets/images/first_car_img.png')" class="fa-solid fa-expand"></i>
                </div>
            </div>
        </div>
        <div class="container out_carusel">
            <div class="owl-carousel owl-theme mt-5">
                <div class="item">
                    <img src="../assets/images/model1.png" class="w-100" alt="">
                    <i onclick="modalImg('../assets/images/first_car_img.png')" class="fa-solid fa-expand"></i>
                </div>
                <div class="item">
                    <img src="../assets/images/model2.png" class="w-100" alt="">
                    <i onclick="modalImg('../assets/images/first_car_img.png')" class="fa-solid fa-expand"></i>
                </div>
                <div class="item">
                    <img src="../assets/images/model3.png" class="w-100" alt="">
                    <i onclick="modalImg('../assets/images/first_car_img.png')" class="fa-solid fa-expand"></i>
                </div>
            </div>
        </div>
        <button class="btn_red mt-5">Загрузить прайс-листа <img width="10" class="ms-2" src="https://jetour-uzbekistan.uz/assets/arrow-72ea9519.svg" alt=""></button>
    </div>
    <?php
        require "../components/footer.php";
    ?>
    



    <!-- Bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Swiper JS -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/models.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            stagePadding: 150,
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1,
                    stagePadding: 30,
                },
                600:{
                    items:1,
                    stagePadding: 50,
                },
                1000:{
                    items:1
                }
            }
        })


        </script>
</body>
</html>