let testDriveBtn = document.querySelectorAll('.testDriveBtn'),
    driveModal = document.querySelector('.drive-modal'),
    modalClose = document.querySelector('.modalClose');
    
testDriveBtn.forEach(item => {
    item.addEventListener('click', () => {
        console.log(1);
        driveModal.classList.add('active')
        // document.body.classList.add('drive-modal-open')
    })
})

modalClose.addEventListener('click', (e) => {
    e.preventDefault()
    driveModal.classList.remove('active')
    // document.body.classList.remove('drive-modal-open')
})