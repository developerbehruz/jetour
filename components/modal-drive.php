<style>
    .drive-modal {
        width: 100%;
        height: 100vh;
        position: fixed;
        top: -100%;
        left: 0;
        z-index: 999;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #000000a7;
        /* display: none; */
        transition: .5s;
    }
    .drive-modal.active {
        display: flex;
        top: 0;
    }
    .drive-modal .container {
        width: 400px;
        background: #fff;
        padding: 30px;
        border-radius: 6px;
    }
    .drive-modal input, .drive-modal select {
        margin-top: 8px;
        border-radius: 0px;
        height: 48px;
    }
    .modalClose {
        cursor: pointer;
    }
    .modal_btn {
        width: 100%;
        background: #DF1211;
        height: 48px;
        border: none;
        margin-top: 8px;
        color: #fff;
    }
</style>

<div class="drive-modal">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="modal-header d-flex justify-content-between">
                    <h2>Тест драйв</h2>
                    <h4><i class="fa-solid fa-xmark modalClose"></i></h4>
                </div>
                <form action="" method="">
                    <select class="form-select selct" aria-label="Default select example">
                        <option selected>Город</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <select class="form-select selct" aria-label="Default select example">
                        <option selected>Модель</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <input type="text" name="" class="form-control inp" placeholder="Имя">
                    <input type="text" name="" class="form-control inp" placeholder="Тел">
                    <div>
                        <button class="modal_btn">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>