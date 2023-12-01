let pauseBtn = document.querySelector('.pauseBtn'),
    playBtn = document.querySelector('.playBtn'),
    model_images = document.querySelectorAll('.model_images img'),
    model_text = document.querySelector('.model_text'),
    model_href = document.querySelector('.model_href'),
    model_name_btn = document.querySelectorAll('.model_name_btn button');

let vdActive;
setInterval(() => {
    vdActive = document.querySelector('.vd-wrapper .swiper-slide-active video');
}, 500);

pauseBtn.addEventListener('click', () => {
    pauseBtn.style.display = 'none';
    playBtn.style.display = 'flex';
    vdActive.pause();
})
playBtn.addEventListener('click', () => {
    playBtn.style.display = 'none';
    pauseBtn.style.display = 'flex';
    vdActive.play();
})

function model(img1, img2, img3, text, href, btn_class) {
    model_images[0].src = img1;
    model_images[1].src = img2;
    model_images[2].src = img3;
    model_text.innerHTML = text
    model_href.href = href;
    model_name_btn.forEach(btn => {
        btn.classList.remove('active');
    });
    let clickedBtn = document.querySelector(`.${btn_class}`);
    clickedBtn.classList.add('active');
}

let map = document.querySelector('.map'),
    mapBtns = document.querySelectorAll('.filial h3');

function changeMap(url, btn) {
    map.src = url;
    mapBtns.forEach(item => {
        item.classList.remove('active')
    })
    let clickedBtn = document.querySelector(`.${btn}`);
    clickedBtn.classList.add('active');
}