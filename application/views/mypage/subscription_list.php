<?php $this->load->view('elements/topmenu'); ?>

<div class="main-contents container">
    <div class="col-sm py-4">
        <h3 class="text-center text-dark py-4">月額会員登録中の連載</h3>

        <!-- 連載のリストグループ -->
        <div class="list-group">

            <!-- 連載（１）のカード -->
            <div class="card mb-3 list-group-item">
                <!-- ヘッダー画像 -->
                <img src="/assets/image/5/detail/15/thum/neko.png" class="bd-placeholder-img card-img-top" width="auto" height="auto" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="">
                <!-- 各種情報 -->
                <div class="card-body">
                    <div class="row">
                         <!-- アイコン画像 -->
                        <div class="col-md-2 w-50 my-auto d-flex justify-content-center">
                        <a href="/creator?id={id}"><img src="/assets/image/5/announce/49/icon.png" class="card-img img-thumbnail rounded-circle" alt="icon_image"></a>
                        </div>
                    
                        <!-- 連載情報 -->
                        <div class="col-md d-flex align-items-start flex-column bd-highlight mb-3">
                            <a href="/creator/serial?id={id}" class="text-dark"><h4 class="card-title font-weight-bold p-2">連載タイトル</h4></a>
                            <a href="/creator?id={id}" class="text-dark"><h5 class="card-text p-2">クリエイター名</h5></a>
                            <p class="card-text p-2">ここは連載の説明です。ここは連載の説明です。ここは連載の説明です。ここは連載の説明です。ここは連載の説明です。ここは連載の説明です。ここは連載の説明です。ここは連載の説明です。</p>
                            <!-- 作品数、価格、解約ボタン -->
                                <div class="row col-md pt-2">
                                        <p class="col-md text-muted pl-2">投稿作品数 : XX作</p>
                                        <p class="col-md text-muted pl-2">価格 : XXX円</p>
                                        <button type="button" class="btn btn-secondary col-md-3">解約する</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 連載（２）のカード -->
            <div class="card mb-3 list-group-item">
                <!-- ヘッダー画像 -->
                <img src="/assets/image/5/detail/15/thum/neko.png" class="bd-placeholder-img card-img-top" width="auto" height="auto" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title>
                <!-- 各種情報 -->
                <div class="card-body">
                    <div class="row">
                         <!-- アイコン画像 -->
                        <div class="col-md-2 w-50 my-auto d-flex justify-content-center">
                        <a href="/creator?id={id}" class="text-dark"><img src="/assets/image/1/icon/5fa2c65bbb3d5.png" class="card-img img-thumbnail rounded-circle" alt="icon_image"></a>
                        </div>
                    
                        <!-- 連載情報 -->
                        <div class="col-md d-flex align-items-start flex-column bd-highlight mb-3">
                            <a href="/creator/serial?id={id}" class="text-dark"><h4 class="card-title font-weight-bold p-2">連載タイトル</h4></a>
                            <a href="/creator?id={id}" class="text-dark"><h5 class="card-text p-2">クリエイター名</h5></a>
                            <p class="card-text p-2">ここは連載の説明です。ここは連載の説明です。ここは連載の説明です。ここは連載の説明です。ここは連載の説明です。ここは連載の説明です。ここは連載の説明です。ここは連載の説明です。</p>
                            <!-- 作品数、価格、解約ボタン -->
                                <div class="row col-md pt-2">
                                        <p class="col-md text-muted pl-2">投稿作品数 : XX作</p>
                                        <p class="col-md text-muted pl-2">価格 : XXX円</p>
                                        <button type="button" class="btn btn-secondary col-md-3">解約する</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="list-group-item">連載3</div>
            <div class="list-group-item">連載4</div>
            <div class="p-3"></div>
        </div>
    </div>
</div>
