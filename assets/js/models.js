let modal_img = document.querySelector('.modal_img'),
    imgModal = document.querySelectorAll('.img-modal'),
    modal_vd = document.querySelector('.modal_vd'),
    modal_img2 = document.querySelectorAll('.modal-img'),
    modal_close_img = document.querySelectorAll('.modal_close_img'),
    ins_btn = document.querySelector('.ins_btn'),
    out_btn = document.querySelector('.out_btn'),
    in_carusel = document.querySelector('.in_carusel'),
    out_carusel = document.querySelector('.out_carusel');


ins_btn.addEventListener('click', () => {
    out_btn.classList.remove('active');
    ins_btn.classList.add('active');
    out_carusel.style.display = 'none';
    in_carusel.style.display = 'block';
})    
out_btn.addEventListener('click', () => {
    ins_btn.classList.remove('active');
    out_btn.classList.add('active');
    in_carusel.style.display = 'none';
    out_carusel.style.display = 'block';
})    
function modalImg(url) {
    // modal_img.src = url;
    imgModal[0].classList.add('active');
    modal_img2[0].classList.add('active');
    modal_img.classList.remove('defImg');
    modal_img.data = url;
    let df = document.getElementsByName('media');
    console.log(df);
}
function modalVd(url) {
    // modal_img.src = url;
    imgModal[1].classList.add('active');
    modal_img2[1].classList.add('active');
    modal_vd.src = url;
}
modal_close_img[0].addEventListener('click', () => {
    modal_img2[0].classList.remove('active');
    setTimeout(() => {
        imgModal[0].classList.remove('active');
        modal_img.classList.add('defImg');
        modal_img.data = "../assets/images/model3.png";        
    }, 350)
})
modal_close_img[1].addEventListener('click', () => {
    modal_img2[1].classList.remove('active');
    setTimeout(() => {
        imgModal[1].classList.remove('active');
        modal_vd.pause();    
    }, 350)
})