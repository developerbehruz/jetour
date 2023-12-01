<style>
    .loader {
        width: 100%;
        height: 100vh;
        background: #000;
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 999;
    }
    img {
        width: 290px;
    }
</style>
<div class="loader">
    <img src="../assets/images/loader.png" alt="">
</div>

<script>
    let loader = document.querySelector(".loader");

    window.onload = () => {
        loader.style.display = 'none';
    }
</script>