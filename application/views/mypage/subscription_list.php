<?php $this->load->view('elements/topmenu'); ?>

<div class="main-contents container">
    <div class="col-sm py-4">
        <h3 class="text-center text-dark py-4">月額会員登録中の連載</h3>

        <!-- 連載のリストグループ ➡　連載へのリンク？-->
        <div class="list-group">
            <!-- 連載（１）のカード -->
            <div class="card mb-3 list-group-item list-group-item-action">
                <!-- ヘッダー画像 -->
                <img src="/assets/image/5/detail/15/thum/neko.png" class="bd-placeholder-img card-img-top" width="auto" height="auto" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title>
                <!-- 各種情報 -->
                <div class="card-body">
                    <div class="row">
                         <!-- アイコン画像 -->
                        <div class="col-3 my-auto d-flex justify-content-center">
                        <img src="/assets/image/5/announce/49/icon.png" class="card-img img-thumbnail rounded-circle float-left" alt="icon_image">
                        </div>
                    
                        <!-- 連載情報 -->
                        <div class="col d-flex align-items-start flex-column bd-highlight mb-3">
                            <h4 class="card-title font-weight-bold p-2 bd-highlight">連載タイトル</h4>
                            <h5 class="card-text p-2 bd-highlight">クリエイター名</h5>
                            <!-- betweenが効かなくなってしまう！ -->
                            <div class="card-text d-flex justify-content-between mt-3 mt-auto p-2 bd-highlight">
                                <p class="text-muted">投稿作品数 : XX作</p>
                                <p class="text-muted">価格 : XXX円</p>
                                <button type="button" class="btn btn-secondary">解約する</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 連載（２）のカード -->
            <div class="card mb-3 list-group-item list-group-item-action">
                <!-- ヘッダー画像 -->
                <img src="/assets/image/5/detail/15/thum/neko.png" class="bd-placeholder-img card-img-top" width="auto" height="auto" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title>
                <!-- 各種情報 -->
                <div class="card-body">
                    <div class="row">
                         <!-- アイコン画像 途中で大きさ固定したい-->
                        <div class="col-2 my-auto d-flex justify-content-center">
                        <img src="/assets/image/5/announce/49/icon.png" class="card-img img-thumbnail rounded-circle float-left" alt="icon_image">
                        </div>
                    
                        <!-- 連載情報 -->
                        <div class="col">
                            <h4 class="card-title font-weight-bold">連載タイトル連載タイトル</h4>
                            <h5 class="card-text">クリエイター名クリエイター名</h5>
                            <div class="card-text d-flex justify-content-between mt-3 mt-auto">
                                <p><small class="text-muted">投稿作品数 : XX作</small></p>
                                <p><small class="text-muted">価格 : XXX円</small></p>
                                <button type="button" class="btn btn-secondary">解約する</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






            <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
        </div>


    </div>
</div>

subscription_list

/* 月額会員になっている漫画の一覧 */
