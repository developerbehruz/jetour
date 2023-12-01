<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jetour Uzbekistan</title>
    <!-- Main css -->
    <link rel="stylesheet" href="./assets/css/main.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- SwiperJS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
    <?php
        require "./components/loader.php";
    ?>

    <?php
        require "./components/modal-drive.php";
    ?>

    <?php
        require "./components/header.php";
    ?>
    <div class="swiper mySwiper vd-wrapper">
        <div class="swiper-wrapper ">
            <div class="swiper-slide vd-carusel">
                <video src="./assets/images/ehs9_new.mp4" loop="" autoplay muted></video>
                <!-- <img src="./assets/images/main1.png" alt=""> -->
            </div>
            <div class="swiper-slide vd-carusel">
                <video src="./assets/images/ehs9_new.mp4" loop="" autoplay muted></video>
                <!-- <img src="./assets/images/main1.png" alt=""> -->
            </div>
            <div class="swiper-slide vd-carusel">
                <video src="./assets/images/ehs9_new.mp4" loop="" autoplay muted></video>
                <!-- <img src="./assets/images/main1.png" alt=""> -->
            </div>
        </div>
        <div class="vd-pg-wrapper">
            <div class="swiper-pagination vd-carusel-pg"></div>
            <button class="pauseBtn"><i class="fa-solid fa-pause"></i></button>
            <button class="playBtn"><i class="fa-solid fa-play"></i></button>
        </div>
    </div>

    <div class="after-vd-carusel">
        <h1>JETAUR DASHING</h1>
        <button class="btn_red">Подробно <img width="10" class="ms-2" src="https://jetour-uzbekistan.uz/assets/arrow-72ea9519.svg" alt=""></button>
        <p>От $28 000 или $2800 за 10 месяцев</p>
    </div>

    <div class="jetaur_birth">
        <div class="container">
            <div class="row">
                <h1 class="title_1">Jetour – автомобиль, рождённый для путешествий</h1>
                <p class="smallTitle">Выберите направление, отправляйтесь в путь</p>
            </div>
        </div>
        <div class="birth_image">
            <img src="./assets/images/birth.png" alt="" class="w-100">
        </div>
    </div>

    <div class="models" id="models">
        <h1 class="title_2">Модели</h1>
        <div class="model_name_btn">
            <button class="active id1" onclick="model('./assets/images/model1.png', './assets/images/model2.png', './assets/images/model3.png', 'От $28 000 или $2800 за 10 месяцев', './models', 'id1')">JETAUR X70</button>
            <button class="id2" onclick="model('./assets/images/model3.png', './assets/images/model1.png', './assets/images/model2.png', 'От $58 000 или $2800 за 10 месяцев', './models', 'id2')">JETAUR X90</button>
            <button class="id3" onclick="model('./assets/images/model2.png', './assets/images/model3.png', './assets/images/model1.png', 'От $18 000 или $2800 за 10 месяцев', './models', 'id3')">JETAUR DASHING</button>
        </div>
        <div class="model_images">
            <img src="./assets/images/model1.png" alt="">
            <img src="./assets/images/model2.png" alt="">
            <img src="./assets/images/model3.png" alt="">
        </div>
        <a href="./models" class="model_href">
            <button class="btn_red">Подробно <img width="10" class="ms-2" src="https://jetour-uzbekistan.uz/assets/arrow-72ea9519.svg" alt=""></button>
        </a>
        <p class="model_text">От $28 000 или $2800 за 10 месяцев</p>
    </div>

    <div class="about" id="about">
        <div class="container">
            <h1 class="title_1">Сопровождать вас на каждом трудном жизненном пути</h1>
            <p class="smallTitle">Выбери напровление, отправляйся в путь</p>
        </div>
    </div>

    <div class="about2">
        <div class="container text-center">
            <h1 class="title_2">JETOUR - это</h1>
            <a href="#">
                <button class="btn_red about_btn">ДИНАМИЧНОСТЬ</button>
            </a>
            <p>подвижность, стремительность развития действия</p>
            <a href="#">
                <button class="btn_red about_btn2">ПРЕДПРИИМЧИВОСТЬ</button>
            </a>
        </div>
    </div>

    <div class="about3">
        <div class="container">
            <h1 class="title_1">Качество, проверенное временем</h1>
            <p>Jetour – автомобильный бренд для путешествий, созданный в январе 2018 года. Бренд появился в ответ на современные тенденции автомобильного рынка и изменения потребительского спроса.Путешествия в широком смысле являются важной составляющей современного образа жизни: будь то поездки по городу, по стране или за ее пределами. Jetour разработал стратегию Travel+, согласно которой создает автомобили SUV-сегмента, предлагая современным людям и семьям разумные решения для активных путешествий.</p>
        </div>
        <img src="./assets/images/about3.png" alt="" class="about_full_img">
        <div class="container">
            <div class="about_logo">
                <img src="./assets/images/about_logo_1.png" alt="">
                <img src="./assets/images/about_logo_2.png" alt="">
            </div>
            <p>Название бренда состоит из комбинации английских слов JET («реактивный самолет») и TOUR («путешествие»). Оно подразумевает, что путешествие на автомобиле может быть таким же приятным и исключительно комфортным, как полет на частном самолете.Бренд ориентирован на людей, которые усердно работают в различных сферах и в конечном итоге добиваются своих целей, открывая новые горизонты, обретая гармоничную и счастливую жизнь.</p>
        </div>
    </div>

    <div class="news" id="news">
        <h1 class="title_2">Последние новости</h1>
        <div class="container">
            <div class="swiper mySwiperNews mt-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col">
                            <img class="w-100" src="./assets/images/news.png" alt="">
                            <div class="card-descr p-3" style="background: #F5F5F5;">
                                <a href="./news">
                                    <b>O’ZBEKISTONDAGI “JETOUR”NING RASMIY DILERI.</b>
                                </a>
                                <p class="text-secondary">11.10.2023</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col">
                            <img class="w-100" src="./assets/images/news.png" alt="">
                            <div class="card-descr p-3" style="background: #F5F5F5;">
                                <a href="#">
                                    <b>O’ZBEKISTONDAGI “JETOUR”NING RASMIY DILERI.</b>
                                </a>
                                <p class="text-secondary">11.10.2023</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col">
                            <img class="w-100" src="./assets/images/news.png" alt="">
                            <div class="card-descr p-3" style="background: #F5F5F5;">
                                <a href="#">
                                    <b>O’ZBEKISTONDAGI “JETOUR”NING RASMIY DILERI.</b>
                                </a>
                                <p class="text-secondary">11.10.2023</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col">
                            <img class="w-100" src="./assets/images/news.png" alt="">
                            <div class="card-descr p-3" style="background: #F5F5F5;">
                                <a href="#">
                                    <b>O’ZBEKISTONDAGI “JETOUR”NING RASMIY DILERI.</b>
                                </a>
                                <p class="text-secondary">11.10.2023</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col">
                            <img class="w-100" src="./assets/images/news.png" alt="">
                            <div class="card-descr p-3" style="background: #F5F5F5;">
                                <a href="#">
                                    <b>O’ZBEKISTONDAGI “JETOUR”NING RASMIY DILERI.</b>
                                </a>
                                <p class="text-secondary">11.10.2023</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div> -->
            </div>
        </div>
        <div class="container news_text">
            <p>Сведения о ценах на продукцию бренда JETAUR, содержащиеся на сайте, носят исключительно информационный характер. Указанные цены могут отличаться от действительных цен дилеров JETAUR. Для получения подробной информации об актуальных ценах на продукцию JETAUR обращайтесь к дилерам JETAUR. Приобретение любой продукции бренда JETAUR осуществляется в соответствии с условиями индивидуального договора купли-продажи. Представленные изображения автомобиля могут отличаться от реализуемого.</p>
        </div>
    </div>

    <div class="branch" id="branch">
        <h1 class="title_2">Филиалы</h1>
        <div class="container mt-5">
            <div class="row pb-5">
                <div class="col-12 col-lg-5 filial">
                    <h3 class="mt-2 active id_1" onclick="changeMap('https://yandex.uz/map-widget/v1/?ll=69.207368%2C41.232181&mode=whatshere&whatshere%5Bpoint%5D=69.207368%2C41.232181&whatshere%5Bzoom%5D=17&z=16', 'id_1')">Сергелийский район, массив Сергели-V, 6А</h3>
                    <h3 class="mt-2 id_2" onclick="changeMap('https://yandex.uz/map-widget/v1/?ll=69.223003%2C41.208839&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgoxOTQ3OTA4NjMxEjlPyrt6YmVraXN0b24sIFRvc2hrZW50LCBTZXJnZWxpIHR1bWFuaSwgTmlsdWZhciBtYWhhbGxhc2kiCg1rcopCFRbWJEI%2C&z=16' , 'id_2')">Сергелийский район, массив Сергели-V, 6А</h3>
                    <h3 class="mt-2 id_3" onclick="changeMap('https://yandex.uz/map-widget/v1/?ll=69.161056%2C41.261924&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgo0MTIxNTgyOTQyEiBPyrt6YmVraXN0b24sIFRvc2hrZW50LCBBbGdvcml0bSIKDRBUikIVIgwlQg%2C%2C&z=15', 'id_3')">Сергелийский район, массив Сергели-V, 6А</h3>
                    <h3 class="mt-2 id_4" onclick="changeMap('https://yandex.uz/map-widget/v1/?ll=66.977517%2C39.677155&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgozNzE5MDM2OTQ2Ei9Pyrt6YmVraXN0b24sIFNhbWFycWFuZCwgSWJuIFNpbm8ga2_Ku2NoYXNpLCAyNSIKDX30hUIVZ7UeQg%2C%2C&z=16', 'id_4')">Сергелийский район, массив Сергели-V, 6А</h3>
                    <h3 class="mt-2 id_5" onclick="changeMap('https://yandex.uz/map-widget/v1/?ll=69.207368%2C41.232181&mode=whatshere&whatshere%5Bpoint%5D=69.207368%2C41.232181&whatshere%5Bzoom%5D=17&z=16', 'id_5')">Сергелийский район, массив Сергели-V, 6А</h3>
                </div>
                <div class="col-12 col-lg-7">
                    <iframe class="w-100 map" src="https://yandex.uz/map-widget/v1/?ll=69.207368%2C41.232181&mode=whatshere&whatshere%5Bpoint%5D=69.207368%2C41.232181&whatshere%5Bzoom%5D=17&z=16" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
   
    <?php
        require "./components/footer.php";
    ?>

    <!-- Bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Main JS -->
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/index.js"></script>

    <script>
        var swiper = new Swiper(".vd-wrapper", {
            spaceBetween: 30,
            pagination: {
            el: ".swiper-pagination",
                clickable: true,
            },
        });


        var swiperNews = new Swiper(".mySwiperNews", {
            slidesPerView: 'auto',
            spaceBetween: 30,
            cssMode: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            mousewheel: true,
            keyboard: true,
            });

    </script>
</body>
</html>