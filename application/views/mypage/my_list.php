<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">

        <!-- ユーザーがLikeボタンを押した場合は「Likeした作品」の見出しを表示し、
            購入した作品ボタンを押した場合は「購入した作品」の見出しを表示する -->
        <h3 class="text-center my-3">Likeした作品</h3>
        <!-- <h3 class="text-center my-3">購入した作品</h3> -->

        <!-- likeボタンと購入ボタン -->
        <div class="row">
            <div class="col-4 offset-1">
                <a href="#" class="alert-link text-dark mt-1">
                    <div class="alert alert-danger text-center" role="alert">
                        <h3>L&nbsp;i&nbsp;k&nbsp;e</h3>
                    </div>
                </a>
            </div>
            <div class="col-4 offset-2">
                <a href="#" class="alert-link text-dark mt-1">
                    <div class="alert alert-info text-center" role="alert">
                        <h3>購&nbsp;入</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- 作品一覧 -->
        <div class="border my-3">

            <div class="p-3">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="/assets/image/5/detail/17/thum/s_5f719079b5045.jpg" class="w-100" alt="画像/サムネイル">
                    </div>
                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <h3 class="text-left"><a href="/creator/manga?id={id}" class="text-dark">第1話：XXXXXXXXXXXXXXX</a></h4>
                        <h5 class="mt-3"><a href="/creator?id={id}" class="text-dark">クリエイター名</a></h5>
                        <h4 class="mt-1"><a href="/creator/serial?id={id}" class="text-dark">地縛少年花子くん</a></h4>
                        <h5 class="mt-1">2020/10/31 0:00</h5>
                        <h4 class="mt-3"><i class="far fa-heart">130</i></h4>
                    </div>
                </div>
            </div>

            <div class="p-3">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="/assets/image/5/detail/17/thum/s_5f719079b5045.jpg" class="w-100" alt="画像/サムネイル">
                    </div>
                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <h3 class="text-left"><a href="/creator/manga?id={id}" class="text-dark">第2話：XXXXXXXXXXXXXXX</a></h4>
                        <h5 class="mt-3"><a href="/creator?id={id}" class="text-dark">クリエイター名</a></h5>
                        <h4 class="mt-1"><a href="/creator/serial?id={id}" class="text-dark">地縛少年花子くん</a></h4>
                        <h5 class="mt-1">2020/11/30 0:00</h5>
                        <h4 class="mt-3"><i class="far fa-heart">110</i></h4>
                    </div>
                </div>
            </div>

            <div class="p-3">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="/assets/image/5/detail/17/thum/s_5f719079b5045.jpg" class="w-100" alt="画像/サムネイル">
                    </div>
                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <h3 class="text-left"><a href="/creator/manga?id={id}" class="text-dark">第3話：XXXXXXXXXXXXXXX</a></h4>
                        <h5 class="mt-3"><a href="/creator?id={id}" class="text-dark">クリエイター名</a></h5>
                        <h4 class="mt-1"><a href="/creator/serial?id={id}" class="text-dark">地縛少年花子くん</a></h4>
                        <h5 class="mt-1">2020/12/31 0:00</h5>
                        <h4 class="mt-3"><i class="far fa-heart">80</i></h4>
                    </div>
                </div>
            </div>

            <div class="p-3">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="/assets/image/5/detail/17/thum/s_5f719079b5045.jpg" class="w-100" alt="画像/サムネイル">
                    </div>
                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <h3 class="text-left"><a href="/creator/manga?id={id}" class="text-dark">第4話：XXXXXXXXXXXXXXX</a></h4>
                        <h5 class="mt-3"><a href="/creator?id={id}" class="text-dark">クリエイター名</a></h5>
                        <h4 class="mt-1"><a href="/creator/serial?id={id}" class="text-dark">地縛少年花子くん</a></h4>
                        <h5 class="mt-1">2021/1/30 0:00</h5>
                        <h4 class="mt-3"><i class="far fa-heart">0</i></h4>
                    </div>
                </div>
            </div>

        </div>
                
    </div>