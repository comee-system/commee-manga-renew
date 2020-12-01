<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">
        <div class="shadow-lg p-3 mb-5 bg-white rounded my-5">
            <img src="/assets/image/1/icon/5fa2c65bbb3d5.png" class="rounded mx-auto d-block" alt="error_image">
            <h2 class="text-center my-5 font-weight-bolder">会員登録をお願いします。</h2>

            <!-- XXXの欄はJavaScriptで入力内容が変化する -->
            <h4 class="text-center my-4">XXX　は、<br>
            会員登録をするとご利用いただけます。</h4>

        <div class="text-center my-4">
                <a href="/users/regist_user" class="btn btn-success w-25 mx-auto text-center">会員登録</a>
            </div>
            <div class="text-center my-4">
                <a href="/users/login" class="btn btn-primary w-25 mx-auto text-center">ログイン</a>
            </div>
            <div class="text-center my-4">
                <a href="/top/index" class="btn btn-danger w-25 mx-auto text-center">キャンセル</a>
            </div>
        </div>
    </div>
