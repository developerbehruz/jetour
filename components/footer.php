<style>
    footer {
        width: 100%;
        background: #000;
        padding-top: 40px;
    }
    .footer-logo {
        width: 100%;
        display: flex;
        justify-content: center;
        border-top: 2px solid #1D1D1D;
        padding: 40px 0;
    }
    .footer-logo img {
        width: 250px;
    }
    .footer-social {
        width: 100%;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    .footer-social a {
        text-decoration: none;
        width: 55px;
        height: 55px;
        background: #1D1D1D;
        margin: 10px;
        padding: 8px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: .3s;
    }
    .footer-social a:hover {
        background: #2f2f2f;
    }
    .footer-social a i {
        font-size: 21px;
        color: #fff;
    }
    .footer-social img {
        width: 20px;
    }
    .footer-email h5 {
        margin: 0;
        padding: 0 20px
    }
    .footer-email {
        width: 100%;
        display: flex;
        justify-content: center;
        color: #fff;
        padding: 40px 0;
    }
    .footer-end {
        width: 100%;
        background: #1D1D1D;
        padding: 6px 0;
        color: #6b6a6a;
        font-size: 18px;
    }
    .footer-end .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .footer-end p {
        position: relative;
        top: 5px;
    }
    @media (max-width: 769px) {
        .footer-email {
            display: block;
            text-align: center;
        }
        .footer-email h5 {
            margin: 0;
            padding-top: 20px !important;
        }
        .footer-end .container {
            display: block;
            text-align: center;
        }
    }
</style>

<footer>
    <div class="container">
        <div class="footer-logo">
            <img src="../assets/images/loader.png" alt="">
        </div>
        <div class="footer-social">
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"><img src="https://jetour-uzbekistan.uz/assets/Vector-1-27fc41c8.svg" alt=""></a>
            <a href="#"><i class="fa-brands fa-telegram"></i></a>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><img src="https://jetour-uzbekistan.uz/assets/Vector-4-351b9ca5.svg" alt=""></a>
        </div>
        <div class="footer-email">
            <h5>Тел.: +998 (78) 113 13 78</h5>
            <h5>Email: jetour@outlook.com</h5>
        </div>
    </div>
    <div class="footer-end">
        <div class="container">
            <b>© 2023. JETOUR UZBEKISTAN</b>
            <p>Верстка, Дизайн и программирование  - UNICAL SOLUTIONS</p>
        </div>
    </div>
</footer>