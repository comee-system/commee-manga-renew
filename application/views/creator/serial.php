<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">

        <!-- 連載情報 -->
        <div class="card w-100">
            <img src="/assets/image/5/detail/16/thum/5f6ffef48c677.jpg" class="card-img-top" alt="ヘッダー画像">
            <div class="card-body">
                <h4 class="card-title text-center">連載タイトルXXXXXXXXXXXXXXXXXXXXX</h4>
                <div class="row card-text">
                    <div class="col-md-4 mt-3">
                        <div class="d-flex bd-highlight mb-3">
                            <div class="p-2 bd-highlight">
                                <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle" alt="アイコン">
                            </div>
                            <div class="p-2 bd-highlight mt-5">ユーザーネーム</div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p class="">連載の説明XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                        <div class="row mt-3">
                            <div class="d-flex bd-highlight mb-3">
                                <div class="p-2 bd-highlight">
                                    <p>フォロー：XXXX</p>
                                    <p>フォロワー：XXXX</p>
                                </div>
                                <div class="p-2 bd-highlight">
                                    <!-- <a class="btn btn-primary my-2" href="#" role="button">フォロー</a> -->
                                    <!-- <p class="mt-3">連載をすべて購入する<span class="text-info">&nbsp;¥2,980</span></p> -->
                                    <p class="mt-3">月額会員に登録する<span class="text-info">&nbsp;¥500/月</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 支援ボタン -->
        <div class="alert alert-success my-3" role="alert">
            <h4 class="alert-heading text-center">あなたの応援が作品を描く支えになります。</h4>
            <hr>
            <div class="text-center">
                <button type="button" class="btn btn-success btn-lg">
                    <h5 class="">支援する</h5>
                </button>
            </div>
        </div>

        <!-- 連載作品一覧 -->
        <div class="border">

            <div class="border p-3">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="/assets/image/5/detail/17/thum/s_5f719079b5045.jpg" class="w-100" alt="画像/サムネイル">
                    </div>
                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <h3 class="text-left"><a href="/creator/manga?id={id}" class="text-dark">第1話：XXXXXXXXXXXXXXX</a></h4>
                        <h5 class="mt-3"><a href="/creator?id={id}" class="text-dark">ユーザーネーム</a></h5>
                        <h4 class="mt-1"><a href="/creator/serial?id={id}" class="text-dark">地縛少年花子くん</a></h4>
                        <h5 class="mt-1">2020/12/31 0:00</h5>
                        <h4 class="mt-3"><i class="far fa-heart">100</i></h4>
                    </div>
                </div>
            </div>

            <div class="border p-3">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="/assets/image/5/detail/17/thum/s_5f719079b5045.jpg" class="w-100" alt="画像/サムネイル">
                    </div>
                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <h3 class="text-left"><a href="/creator/manga?id={id}" class="text-dark">第2話：XXXXXXXXXXXXXXX</a></h4>
                        <h5 class="mt-3"><a href="/creator?id={id}" class="text-dark">ユーザーネーム</a></h5>
                        <h4 class="mt-1"><a href="/creator/serial?id={id}" class="text-dark">地縛少年花子くん</a></h4>
                        <h5 class="mt-1">2020/12/31 0:00</h5>
                        <h4 class="mt-3"><i class="far fa-heart">100</i></h4>
                    </div>
                </div>
            </div>

            <div class="border p-3">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="/assets/image/5/detail/17/thum/s_5f719079b5045.jpg" class="w-100" alt="画像/サムネイル">
                    </div>
                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <h3 class="text-left"><a href="/creator/manga?id={id}" class="text-dark">第3話：XXXXXXXXXXXXXXX</a></h4>
                        <h5 class="mt-3"><a href="/creator?id={id}" class="text-dark">ユーザーネーム</a></h5>
                        <h4 class="mt-1"><a href="/creator/serial?id={id}" class="text-dark">地縛少年花子くん</a></h4>
                        <h5 class="mt-1">2020/12/31 0:00</h5>
                        <h4 class="mt-3"><i class="far fa-heart">100</i></h4>
                    </div>
                </div>
            </div>

            <!-- もっと見るボタン -->
            <div class="text-center my-3">
                <button type="button" class="ncss btn-success btn-lg">もっと見る</button>
            </div>

        </div>
    
    </div>