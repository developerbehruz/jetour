<style>
    header {
        width: 100%;
        background: #0000001b;
        padding: 20px 0;
        backdrop-filter: blur(30px);
        position: fixed;
        top: 0;
        left: 0;
        z-index: 777;
    }
    .nav-cont {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .menu_btn {
        width: 30px;
        cursor: pointer;
    }
    header img {
        width: 250px;
    }
    .menu_btn div{
        width: 25px;
        height: 2px;
        background: #fff;
        margin-top: 6px;
        border-radius: 3px;
    }
    .nav_btn button {
        padding: 5px 15px;
        border-radius: 30px;
        border: none;
        background: #fff;
        transition: .3s;
    }
    .nav_btn button:hover {
        background: #bebebe;
    }
    @media (max-width: 575px) {
        .nav_btn button {
            display: none;
        } 
        header img {
            width: 200px;
        }
        .nav-menu {
            width: 100% !important;
        }
        .nav-menu i {
            font-size: 25px !important;
        }
    }

    .nav-menu {
        width: 400px;
        height: 100vh;
        position: fixed;
        top: 0;
        left: -600px;
        background: #fff;
        transition: .5s;
        z-index: 888;
    }
    .nav-menu.active {
        left: 0;
    }
    .nav-menu i {
        font-size: 27px;
        cursor: pointer;
    }
    .nav-footer {
        width: 100%;
        position: absolute;
        bottom: 0;
        left: 0;
        text-align: center;
        color: #999999;
    }
    .nav-footer footer {
        width: 100%;
        background: #E9E9E9;
        position: absolute;
        bottom: 0;
        left: 0;
        padding-top: 8px;
    }
    .nav-content {
        margin-bottom: 100px;
        padding-bottom: 5px;
    }
    .nav-content button {
        padding: 5px 15px;
        border-radius: 30px;
        border: none;
        background: #000;
        color: #fff;
        margin-bottom: 20px;
        transition: .3s;
    }
    .nav-content button:hover {
        background: #363636;
    }
    .navigation {
        width: 100%;
        margin-top: 60px;
    }
    .navigation a {
        display: block;
        padding: 10px;
        border-bottom: 1px solid #E9E9E9;
        color: #DF1211;
        text-decoration: none;
        font-size: 18px;
        transition: .3s;
        font-weight: 600;
    }
    .navigation a:hover {
        background: #f5f4f4;
    }
</style>

<div class="nav-menu">
    <div class="container">
        <div class="nav-header mt-2 w-100 d-flex justify-content-between align-items-center">
            <span></span>
            <img class="w-50" src="../assets/images/darklogo.png" alt="">
            <i class="close_header fa-solid fa-xmark"></i>
        </div>
        <div class="navigation">
            <a href="<?=$in ?? ''?>#models">Модели</a>
            <a href="<?=$in ?? ''?>#about">О нас</a>
            <a href="<?=$in ?? ''?>#news">Новости</a>
            <a href="<?=$in ?? ''?>#branch">Филиалы</a>
            <a href="<?=$in ?? ''?>#contact">Конткаты</a>
        </div>
    </div>

    <div class="nav-footer">
        <div class="nav-content">
            <button class="testDriveBtn">Тест драйв</button>
            <p>Тел.: +998 (78) 113 13 78</p>
            <p>Email: jetour@outlook.com</p>
        </div>
        <footer>
            <b class="mt-2">© 2023. JETAUR UZBEKISTAN</b>
            <p>Верстка, Дизайн и программирование UNICAL SOLUTIONS</p>
        </footer>
    </div>
</div>

<header>
    <div class="container nav-cont">
        <div class="menu_btn">
            <div></div>
            <div></div>
        </div>
        <div class="logo">
            <a href="../">
                <img src="../assets/images/Logo.png" alt="">
            </a>
        </div>
        <div class="nav_btn">
            <button class="testDriveBtn">Тест драйв</button>
        </div>
    </div>
</header>


<script>
    let menu_btn = document.querySelector('.menu_btn');
    let close_header = document.querySelector('.close_header');
    let nav_menu = document.querySelector('.nav-menu');
    let aHref = document.querySelectorAll('.navigation a');

    menu_btn.addEventListener('click', () => {
        nav_menu.classList.add('active');
    })
    close_header.addEventListener('click', () => {
        nav_menu.classList.remove('active');
    })
    aHref.forEach(item => {
        item.addEventListener('click', () => {
            nav_menu.classList.remove('active');
        })
    })
</script>